<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kollektion extends Model
{
    use HasFactory;

    protected $fillable = [
        'navn',
        'billede',
        'beskrivelse',
        'seo_tekst'
    ];

    public function produkt() 
    {
        return $this->belongsToMany(\App\Models\Produkt::class);
    }

    protected $table = 'kollektioner';
}
