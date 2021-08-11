<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    public function wo_detil()
    {
        return $this->belongsTo(wo_detil::class);
    }
    
}
