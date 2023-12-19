<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\Administration\ProduktFactory;

class Produkt extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'titel',
        'type',
        'beskrivelse',
        'undertitel',
    ];

    public function kollektion() 
    {
        return $this->belongsToMany(\App\Models\Kollektion::class);
    }

    public function smag() 
    {
        return $this->belongsToMany(\App\Models\Smag::class);
    }

    public function base() 
    {
        return $this->belongsToMany(\App\Models\Base::class);
    }

    public function oprindelsesland() 
    {
        return $this->belongsToMany(\App\Models\Oprindelsesland::class);
    }

    public function produktion() 
    {
        return $this->belongsToMany(\App\Models\Produktion::class);
    }

    public function variant()
    {
        return $this->hasMany(\App\Models\Variant::class);
    }

    public static function getAllProduct()
    {
        return Produkt::orderBy('id','desc')->paginate(10);
    }

    protected $table = 'produkter';
}

