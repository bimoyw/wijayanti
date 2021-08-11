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

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function status()
    {
        return $this->belongsTo(status::class, 'id_status', 'id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class, 'id_pel', 'id');
    }

    public function details(){
        return $this->belongsToMany(wo_detil::class, 'detil_id', 'id');
    }
}
