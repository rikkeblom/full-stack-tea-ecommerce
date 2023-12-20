<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurv extends Model
{
    use HasFactory;

    // Relationships
    public function ordre()
    {
        return $this->hasOne(\App\Models\Ordre::class);
    }

    public function item()
    {
        return $this->belongsToMany(\App\Models\Item::class, 'item_kurv', 'kurv_id', 'item_id');
    }

    protected $table = 'kurve';
}
