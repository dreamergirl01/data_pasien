<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable = [
        'nik',
        'nama_pasien',
        'tgl_lahir',
        'jenis_kelamin',
        'alamat',
        'telepon',
        'status',
        'foto'
    ];
}
