<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oprindelsesland extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'navn',
    ];

    public function produkt() 
    {
        return $this->belongsToMany(\App\Models\Produkt::class);
    }

    protected $table = 'oprindelseslande';
}
