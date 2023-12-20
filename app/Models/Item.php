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
        return $this->belongsToMany(\App\Models\Kurv::class, 'item_kurv', 'item_id', 'kurv_id');
    }

    public function variant()
    {
        return $this->belongsToMany(\App\Models\Variant::class, 'item_variant', 'item_id', 'variant_id')->withPivot('id');
    }
}
