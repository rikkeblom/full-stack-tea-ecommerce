<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'titel',
        'type',
        'lager',
        'pris'
    ];
 
    public function produkt()
    {
        return $this->belongsTo(\App\Models\Produkt::class);
    }

    public function item()
    {
        return $this->belongsToMany(\App\Models\Item::class);
    }

    protected $table = 'varianter';
}

// $prod->variant()->saveMany([
//     new App\Models\Variant(['titel'=>'test fra terminal']),
//     new App\Models\Variant(['titel'=>'test fra terminal 2']),
// ])