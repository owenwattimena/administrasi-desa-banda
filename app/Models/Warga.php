<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';

    protected $fillable = [
        'no_kk',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_hubungan_keluarga',
        'agama',
        'pendidikan',
        'pekerjaan',
        'nama_ayah',
        'nama_ibu',
        'alamat',
        'rw',
        'rt',
    ];
}
