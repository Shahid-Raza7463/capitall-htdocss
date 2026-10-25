<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdspaceImages;
use Illuminate\Http\Request;
use App\Models\Admin\VerticalModel;
use App\Models\Admin\NetworkSoftwareModel;
use App\Models\Admin\OfferFetch;
use App\Models\Admin\PaymentFrequencyModel;
use App\Models\Admin\PaymentMethodModel;
use App\Models\Web\Offer;
use Illuminate\Support\Facades\DB;

class OffersWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, NetworkWebController $nwc)
    {

        // fetch all request from page
        $filters = $request->all();
        $adspace_image = $nwc->get_adspaces();
        $web_logo =  $nwc->get_settings();
        $seo_meta =  $nwc->get_seo_meta();
        //Get data on offers page
        $latest_offers = $nwc->get_offers();
        $offers = $nwc->get_offers();
        $top_offers = $nwc->get_top_offers();
        $featured_offers = $nwc->get_featured_offers();
        $offers_verticals =  $nwc->get_offers_to_verticals();
        // dd($offers_verticals);

        // this is related for nav tab like network categories
        $network_categories = $nwc->get_verticals();
        $software = $nwc->get_network_software_list();
        $payment_frequency = $nwc->get_network_frequency_list();
        $payment_method = $nwc->get_network_payment_list();
        // end hare,this is related for nav tab like network categories

        return view('web.pages.offers.offers', [
            'network_categories' => $network_categories,
            'software' => $software,
            'payment_frequency' => $payment_frequency,
            'payment_method' => $payment_method,
            'web_logo' => $web_logo,
            'adspace_image' => $adspace_image,
            'offers' => $offers,
            'top_offers' => $top_offers,
            'latest_offers' => $latest_offers,
            'featured_offers' => $featured_offers,
            'offers_verticals' => $offers_verticals,
            'web_logo' => $web_logo,
            'seo_meta' => $seo_meta,
            'filters' => $filters
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
