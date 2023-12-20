<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function indhold() { 
        return $this->belongsToMany(Kurv::class, 'item_kurv', 'item_id', 'kurv_id'); 
    }
}
