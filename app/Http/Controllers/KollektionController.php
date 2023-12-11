<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Produkt;
use App\Models\Kollektion;

class KollektionController extends Controller
{
    public function test(){
        $kollektion = Kollektion::where('id',1)->get();
        return view('test')->with('kollektion',$kollektion);
    }

}
