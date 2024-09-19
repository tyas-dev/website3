<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'penyedia', 'negara', 'level', 'deskripsi', 'registrasi_mulai', 'registrasi_akhir', 'gambar'
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}