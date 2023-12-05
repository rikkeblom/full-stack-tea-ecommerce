<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\Administration\ProduktFactory;
use Illuminate\Database\Eloquent\Model;

class Produkt extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel',
        'type',
        'beskrivelse'
    ];

    protected $table = 'produkter';
}

