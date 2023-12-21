<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billede extends Model
{
    use HasFactory;
    public function produkt() 
    {
        return $this->belongsToMany(\App\Models\Produkt::class);
    }

    protected $table = 'billeder';
}
