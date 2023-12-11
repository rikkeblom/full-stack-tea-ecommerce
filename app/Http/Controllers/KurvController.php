<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kurv;

class KurvController extends Controller
{
    public function test(){
        $kurv = Kurv::where('id',1)->get();
        return view('test2')->with('kurv',$kurv);
    }
}
