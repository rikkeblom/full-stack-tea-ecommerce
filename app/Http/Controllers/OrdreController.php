<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Models\Variant;

class OrdreController extends Controller
{
    // public function checkout()
    // {
    //     return view('frontend.componets.checkout');
    // }

    public function validateForm(Request $request)
    {
        if ($validatedData = $request->validate([
            'fornavn' => 'required|max:255',
            'efternavn' => 'required|max:255',
            'firma' => 'max:255',
            'land' => 'required|max:255',
            'adresse_1' => 'required|max:255',
            'adresse_2' => 'max:255',
            'postnummer' => 'required|max:255',
            'by' => 'required|max:255',
            'email' => 'required|max:255|email|required_with:gentag_email',
            'gentag_email' => 'max:255|email|same:email',
            'mobil' => ['required', 'max:255', 'regex:/\+45 [3-9]\d(?: ?\d\d){3}|\d{8}|(\+45\s?)?\d{2}( ?\d{2}){3}/'],
            'betalingsmetode' => 'required',
            'terms_and_conditions' => 'accepted|required',
        ]))
        {
            $varianter = Variant::where('titel','100g')->get();
            return view('home')->with('varianter',$varianter);
        }
        else 
        {
            return  redirect('/checkout')->withInput();
        }
    }
}
