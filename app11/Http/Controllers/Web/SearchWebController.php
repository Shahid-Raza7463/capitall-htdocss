<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdspaceImages;
use Illuminate\Http\Request;

class SearchWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, NetworkWebController $nwc, NetworkReviewsWebController $nrwc)
    {
        // fetch all request from networks page when user click
        $filters = $request->all();
        $order_by = 'latest';

        if (isset($filters['order_by'])) {
            $order_by = $filters['order_by'];
        } else {
            $filters['order_by'] = $order_by;
        }
        // get ad image 
        $adspace_image = $nwc->get_adspaces();
        // get web logo 
        $web_logo =  $nwc->get_settings();
        $seo_meta =  $nwc->get_seo_meta();
        //1 section of network page
        $sponsored_networks =  $nwc->get_sponsored_networks($filters);
        //* filter for middle nave
        $networks =  $nwc->get_premium_networks($filters);
        //* filter for reviews
        $networks_review =  $nrwc->get_reviews($filters);
        $top_networks =  $nwc->get_top_networks();
        $featured_networks =  $nwc->get_featured_networks();


        // this is related for nav tab like network categories
        $network_categories = $nwc->get_verticals();
        $software = $nwc->get_network_software_list();
        $payment_frequency = $nwc->get_network_frequency_list();
        $payment_method = $nwc->get_network_payment_list();


        return view('web.pages.search.search_index', [
            'sponsored_networks' => $sponsored_networks,
            // get filter when click on next page so used appends($filters)
            'networks' => $networks->appends($filters),
            'networks_review' => $networks_review,
            'top_networks' => $top_networks,
            'featured_networks' => $featured_networks,
            'software' => $software,
            'payment_method' => $payment_method,
            'payment_frequency' => $payment_frequency,
            'network_categories' => $network_categories,
            'order_by' => $order_by,
            'filters' => $filters,
            'adspace_image' => $adspace_image,
            'web_logo' => $web_logo,
            'seo_meta' => $seo_meta,
            // set old value in search input box
            'search' => isset($filters['search']) ? $filters['search'] : ''
        ]);
    }
}
