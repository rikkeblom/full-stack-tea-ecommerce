<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Relationships
    public function kurv()
    {
        return $this->belongsToMany(\App\Models\Kurv::class);
    }

    public function variant()
    {
        return $this->belongsToMany(\App\Models\Variant::class);
    }
}
