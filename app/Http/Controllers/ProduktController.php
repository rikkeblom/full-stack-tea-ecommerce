<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Produkt;

class ProduktController extends Controller
{
    public function test(){
        $produkter = Produkt::get();
        return view('test2')->with('produkter',$produkter);
    }

}
