<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditPasienRequest;
use App\Http\Requests\SavePasienRequest;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index(){
        $data['pasien'] = Pasien::get();
        return view('home.home',$data);
    }

    //tampilan tambah data pasien
    public function tambah(){
        return view('home.tambah');
    }

    //proses simpan tambah data
    public function simpan(SavePasienRequest $r){
        if($r->validated()){
            //mengambil ata foto
            $foto = $r->foto->getClientOriginalName();

            //simpan foto pada foto
            $r->foto->move('foto/',$foto);

            Pasien::create([
                'nik' => $r->nik,
                'nama_pasien' => $r->nama_pasien,
                'tgl_lahir' => $r->tgl_lahir,
                'jenis_kelamin' => $r->jenis_kelamin,
                'alamat' => $r->alamat,
                'telepon' => $r->telepon,
                'foto' => $foto,
                'status' => $r->status
            ]);
            // dd($foto);
            return redirect('/home')->with('pesan','Data Berhasil Diinputkan');
        }
    }

    //tampilan edit data
    public function edit($id){
        $data['pasien'] = Pasien::where('id',$id)->first();
        return view('home.edit',$data);
    }

    //simpan data edit
    public function update(EditPasienRequest $r, $id){
        if($r->validated()){
            if($r->foto){
                $cek = Pasien::where('id',$id)->first();
                if(File::exists(public_path('foto/'.$cek->foto))){
                    File::delete(public_path('foto/'.$cek->foto));
                }
                $foto = $r->foto->getClientOriginalName();
                $r->foto->move('foto/',$foto);

                $data['foto'] = $foto;
            }

            $data['nik'] = $r->nik;
            $data['nama_pasien'] = $r->nama_pasien;
            $data['tgl_lahir'] = $r->tgl_lahir;
            $data['jenis_kelamin'] = $r->jenis_kelamin;
            $data['alamat'] = $r->alamat;
            $data['telepon'] = $r->telepon;
            $data['status'] = $r->status;

            Pasien::where('id',$id)->update($data);

            return redirect('/home');
        }
    }

    public function delete($id){
        Pasien::where('id',$id)->delete();

        return back();
    }
}
