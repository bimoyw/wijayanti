<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wo_detil extends Model
{
    protected $fillable = [
        'id_kategori',
        'id_wo',
        'id_user',
        'id_status',
        'nama_order',
        'jumlah',
        'h_satuan',
        'totalbayar',
        'ukuran',
        'warna',
        'jenis_bahan',
        'keterangan',
    ];
    protected $table = 'wo_detils';
    protected $primaryKey = 'wo_detil';
    public function wos()
    {
        return $this->belongsTo(wo::class);
    }
    public function kategoris()
    {
        return $this->hasMany(kategori::class);
    }
    public function status()
    {
        return $this->hasMany(status::class);
    }
    public function users()
    {
        return $this->belongsToMany(user::class);
    }
}
