<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Variant;

class ProduktsideController extends Controller
{
    public function show($produkt_id) {
        $variant_produkt_id = Variant::getVariantByProduktId($produkt_id);
        return view('product')->with('variant_produkt_id',$variant_produkt_id);
    }
}