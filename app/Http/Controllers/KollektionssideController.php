<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Variant;

class KollektionssideController extends Controller
{
    public function kollektionsside(){
        $varianter = Variant::get();
        return view('allProducts')->with('varianter',$varianter);
    }
}