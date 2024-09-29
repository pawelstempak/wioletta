<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function show(): object
    {
        $offer = Offer::find(1);

        return view('offer', [
            'offer' => $offer
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $offer = Offer::find(1);
        $offer->text1 = $request['text1'];
        $offer->save();

        return redirect('/offer');
    }    
}
