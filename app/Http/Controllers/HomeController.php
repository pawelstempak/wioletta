<?php

namespace App\Http\Controllers;

use App\Models\Offer;

class HomeController extends Controller
{
    public function show():object
    {
        $offer = Offer::find(1);

        return view('frontend.home', [
            'offer' => $offer,
            'phone' => $this->getPhone()
        ]);
    }
}
