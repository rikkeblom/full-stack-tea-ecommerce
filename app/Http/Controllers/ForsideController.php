<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Kurv;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Variant;

class ForsideController extends Controller
{
    public function forside(){
        $varianter = Variant::where('titel','100g')->get();
        $kurv = Kurv::find(1);
        $items = $kurv->item()->get();
        return view('home')->with('varianter',$varianter)->with('items', $items);
    }
}