<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Models\Kurv;

class KurvController extends Controller
{
    public function test()
    {
        $kurv = Kurv::where('id',1)->get();
        return view('test2')->with('kurv',$kurv);
    }

    public function opdaterItem(Request $request)
    {
        $itemId = $request->input('itemId');
        $newQuantity = $request->input('newQuantity');

        $cart = Session::get('cart');
        if ($cart && is_array($cart) && isset($cart[$itemId])) {
            $cart[$itemId]['quantity'] = $newQuantity;
            Session::put('cart', $cart);
            return response()->json(['message' => 'Session data updated successfully']);
        }

        return response()->json(['error' => 'Invalid item ID or cart data'], 400);
    }

    public function fjern(Request $request)
    {
        $itemId = $request->input('itemId');

        $cart = Session::get('cart');
        if ($cart && is_array($cart) && isset($cart[$itemId])) {
            unset($cart[$itemId]); 
            session()->put('cart', $cart);
            return response()->json(['message' => 'Session data updated successfully', 'cart' => $cart]);
        }

        return response()->json(['error' => 'Invalid item ID or cart data'], 400);
    }

    public function ATC(Request $request)
    {
        $cart = Session::get('cart') ?? [];;
        $data = $request->json()->all(); // Get all JSON data sent in the request

        if (empty($cart) || !is_array($cart)) {
            $cart = [];
        }

        $produktNavn = $data['produktNavn'] ?? null;
        $quantity = $data['quantity'] ?? null;
        $variantNavn = $data['variantNavn'] ?? null;
        $variantPris = $data['variantPris'] ?? null;
        $variantLager = $data['variantLager'] ?? null;
        $variantType = $data['variantType'] ?? null;

        if ($produktNavn !== null && $quantity !== null && $variantNavn !== null &&
        $variantPris !== null && $variantLager !== null && $variantType !== null) 
        {

            $nytIndex = empty($cart) ? 1 : max(array_keys($cart)) + 1;
            $cart[$nytIndex] = [
                'produktNavn' => $produktNavn,
                'quantity' => $quantity,
                'variant' => [
                    'variantNavn' => $variantNavn,
                    'variantType' => $variantType,
                    'variantPris' => $variantPris,
                    'variantLager' => $variantLager,
                ],
            ];
            
            session()->put('cart', $cart);

            return response()->json(['message' => 'Session data updated successfully - product added', 'cart' => $cart]);
        }
        return response()->json(['error' => 'Invalid item ID or cart data'], 400);
    }

    public function opdaterKurv(Request $request)
    {
        //virker ikke endnu
        $cart = Session::get('cart') ?? [];
        $html = view('frontend.componets.kurv', ['cart' => $cart])->render();
        return response()->json(['html' => $html]);
    }
}

