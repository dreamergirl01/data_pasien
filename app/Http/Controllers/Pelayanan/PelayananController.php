<?php

namespace App\Http\Controllers\Pelayanan;

use App\Http\Controllers\Controller;
use App\Http\Requests\SavePelayananRequest;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function index(){
        $data['pelayanan'] = Pelayanan::leftJoin('pasien','pasien.id','=','pelayanan.id_pasien')
        ->leftJoin('dokter','dokter.id','=','pelayanan.id_dokter')
        ->get();
        return view('pelayanan.index',$data);
    }

    public function tambah(){
        $data['pasien'] = Pasien::get();
        $data['dokter'] = Dokter::get();
        return view('pelayanan.tambah',$data);
    }

    public function save(SavePelayananRequest $r){
        if($r->validated()){
           Pelayanan::create([
                'jenis_pelayanan' => $r->jenis_pelayanan,
                'id_pasien' => $r->id_pasien,
                'id_dokter' => $r->id_dokter,
                'tanggal_pelayanan' => $r->tanggal_pelayanan,
            ]);

            return redirect('/pelayanan');
        }
    }
}
