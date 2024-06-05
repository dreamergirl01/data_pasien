<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveDokterRequest;
use App\Http\Requests\updateDokterRequest;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){
        $data['dokter'] = Dokter::get();
        return view('dokter.index',$data);
    }

    public function tambah(){
        return view('dokter.tambah');
    }

    public function save(SaveDokterRequest $r){
        if($r->validated()){
            Dokter::create(
                ['nama_dokter' => $r->nama_dokter]
            );

            return redirect()->route('dokter');
        }
    }

    public function edit($id){
        $data['dokter'] = Dokter::where('id',$id)->first();
        return view('dokter.edit',$data);
    }

    public function update(updateDokterRequest $r, $id){
        if($r->validated()){
            $data['nama_dokter'] = $r->nama_dokter;

            Dokter::where('id',$id)->update($data);

            return redirect('/dokter');
        }
    }

    public function delete($id){
        Dokter::where('id',$id)->delete();

        return back();
    }

}
