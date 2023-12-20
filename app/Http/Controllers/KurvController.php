<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Kurv;

class KurvController extends Controller
{
    public function test(){
        $kurv = Kurv::find(1);
        $items = $kurv->item()->get();
        return view('test2')->with('items', $items);
    }
}
