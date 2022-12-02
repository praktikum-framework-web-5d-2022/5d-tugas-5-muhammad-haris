<?php

namespace App\Models;

use App\Models\DetailSiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nama',
        'email',
        'no_telp'
    ];

    public Function detailSiswa() {
        return $this->hasOne(DetailSiswa::class, 'id_siswa', 'id');
    }
}
