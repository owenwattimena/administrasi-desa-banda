<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'status_perkawinan',
        'pekerjaan',
        'nama_ayah',
        'nama_ibu',
        'alamat',
        'id_rt',
    ];

    /**
     * Get the rt associated with the Warga
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rt(): HasOne
    {
        return $this->hasOne(RukunTetangga::class, 'id', 'id_rt');
    }
}
