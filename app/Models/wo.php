<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wo extends Model
{
    protected $fillable = [     
        'id_user',
        'id_status',
        'nama_order',
        'tanggal_masuk',
        'no_wo',
        'deadline',
        'id_pel',
        'tanggal_ambil',
    ];
    protected $primaryKey = 'id_wo';
}
