<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wo_detil extends Model
{
    protected $table = "detils";

    protected $fillable = [
        'id_kategori',
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
    protected $primaryKey = 'wo_detil';
    // public function wos()
    // {
    //     return $this->belongsTo(wo::class);
    // }
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

    public function wos(){
        return $this->belongsToMany(wo::class, 'wo_id', 'id');
    }
}
