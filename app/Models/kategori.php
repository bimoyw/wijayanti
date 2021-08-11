<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori',
    ];
    protected $primaryKey = 'id_kategori';

    public function wo_detil()
    {
        return $this->belongsTo(wo_detil::class);
    }
}
