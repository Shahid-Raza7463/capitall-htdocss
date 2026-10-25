<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\OfferFetch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OffersFetchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store()
    {
        // Get data from api 
        $response = Http::get('https://demo.trakaff.com/api/aff/offers/get_offers?api_token=zo3fyj26ulp8hvancg9m&page=1');
        // Convert response to JSON array/object
        $responseData = $response->json();
        // Get the 'response' array
        $offers = $responseData['response'];
        foreach ($offers as $offerdata) {
            // fetch payout array
            $payouts = $offerdata['payout']['offer_payouts'];

            OfferFetch::create([
                'icon' => $offerdata['offer']['icon'],
                'title' => $offerdata['offer']['title'],
                'offer_id' => $offerdata['offer']['offer_id'],
                'status' => $offerdata['offer']['status'],
                'payout' => $payouts[0]['payout'],
                'countries' => $payouts[0]['offer_country']
                // 'offer_image' => $offerdata['offer']['icon']
            ]);
        }

        return "Data inserted successfully!";
    }
}
