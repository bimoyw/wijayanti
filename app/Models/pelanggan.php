<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pel',
        'telp',
        'RT',
        'RW',
        'kelurahan',
        'kecamatan',
        'kota',
        'keterangan',
    ];
    protected $primaryKey = 'id_pel';
}
