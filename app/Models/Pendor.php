<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pendor',
        'nama_pendor',
        'alamat',
        'kode_pos',
        'no_telp',
        'sosmed',
    ];
}
