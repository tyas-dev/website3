<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'beasiswa_id', 'syarat', 'batas_waktu'
    ];

    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class);
    }
}