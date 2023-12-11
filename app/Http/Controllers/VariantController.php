<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariantController extends Controller
{
    use HasFactory;

    public function Produkt() 
    {
        return $this->belongsTo(\App\Models\Produkt::class);
    }

    protected $table = 'varianter';
}
