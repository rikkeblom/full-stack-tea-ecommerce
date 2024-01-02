<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Variant;

class KollektionssideController extends Controller
{
    public function kollektionsside(){
        $varianter = Variant::where('titel','100g')->get();
        return view('allProducts')->with('varianter',$varianter);
    }
}