<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Variant;

class ForsideController extends Controller
{
    public function forside(){
        $varianter = Variant::where('titel','100g')->get();
        return view('home')->with('varianter',$varianter);
    }
}