<?php

namespace App\Http\Controllers\Web;

use App\DB\NetworksDB;
// Get time formate like (posted 3 days ago )
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Admin\Adspace;
use App\Models\Admin\AdspaceImages;
use Illuminate\Http\Request;

class NetworkWebController extends Controller
{
    private NetworksDB $networkdb;
    function __construct()
    {
        $this->networkdb = new NetworksDB();
    }

    // get all data on network_review page
    public function index(Request $request, $network_slug = '', NetworkReviewsWebController $nrwcon)
    {
        $filters = $request->all();
        // get ad image 
        $adspace_image = $this->get_adspaces();
        // get web logo 
        $web_logo =  $this->get_settings();
        $seo_meta =  $this->get_seo_meta();
        // dd($headerFooter_js);
        $network = $this->get_network($network_slug);
        $network_verticals = $this->networkdb->get_network_to_verticals($network->network_id);
        $network_commission = $this->networkdb->get_network_to_commission_type($network->network_id);

        $network_payment = $this->networkdb->get_network_to_payment_method($network->network_id);

        $network_frequency = $this->networkdb->get_network_to_network_frequency($network->network_id);

        $contacts = $this->networkdb->get_contacts($network->user_id);

        $sociallink = $this->networkdb->get_social_link($network->network_id);

        $offers =  $this->get_offers();
        $offers_verticals =  $this->get_offers_to_verticals();
        // side component
        $top_networks =  $this->get_top_networks();
        $featured_networks =  $this->get_featured_networks();
        // get all reviews of one network on network reviews page
        $network_review = $nrwcon->get_network_review($network->network_id);
        // dd($network_review);

        return view('web.pages.network.network', [
            'network' => $network,
            'network_verticals' => $network_verticals,
            'network_commission' => $network_commission,
            'network_payment' => $network_payment,
            'network_frequency' => $network_frequency,
            'top_networks' => $top_networks,
            'featured_networks' => $featured_networks,
            'contacts' => $contacts,
            'sociallink' => $sociallink,
            'network_review' => $network_review,
            'adspace_image' => $adspace_image,
            'offers' => $offers,
            'offers_verticals' => $offers_verticals,
            'web_logo' => $web_logo,
            'seo_meta' => $seo_meta,
            'filters' => $filters,
            'network_slug' => $network_slug,
        ]);
    }

    // get sponsored networks
    public function get_sponsored_networks()
    {
        // Get number of limit
        //option_value is a column in system settings table
        $sponsoredCount =  $this->get_settings();
        $filters = ['is_sponsored' => 1, 'limit' => $sponsoredCount[2]['option_value']];
        // $filters = ['is_sponsored' => 1];
        $sponsored_networks =  $this->networkdb->get_networks($filters);
        return $sponsored_networks;
    }

    // get top networks
    public function get_top_networks()
    {
        // Get number of limit
        $topNetworkCount =  $this->get_settings();
        $filters = ['is_top_network' => 1, 'limit' => $topNetworkCount[3]['option_value']];
        $top_networks = $this->networkdb->get_networks($filters);
        return $top_networks;
    }

    //  get featured networks
    public function get_featured_networks()
    {
        // Get number of limit
        $featuredCount =  $this->get_settings();
        $filters = ['is_featured' => 1, 'limit' => $featuredCount[4]['option_value']];
        $featured_networks =  $this->networkdb->get_networks($filters);
        return $featured_networks;
    }
    // get premium networks
    public function get_premium_networks($filters = [])
    {
        // pagination
        $filters['limit'] = isset($filters['limit']) ? $filters['limit'] : 8;
        $premium_networks =  $this->networkdb->get_networks($filters, true);
        return $premium_networks;
    }

    // get particular networks data from networks table
    public function get_network($network_slug = '')
    {
        $filter = [
            'network_slug' => $network_slug
        ];
        return $this->networkdb->get_network($filter);
    }

    // calling function from networkdb class
    public function get_network_to_verticals()
    {
        $network_verticals =  $this->networkdb->get_network_to_verticals();
        return $network_verticals;
    }

    // get particular commission type
    public function get_network_to_commission_type()
    {
        $network_commission =  $this->networkdb->get_network_to_commission_type();
        return $network_commission;
    }
    // get particular payment method
    public function get_network_to_payment_method()
    {
        $network_payment =  $this->networkdb->get_network_to_payment_method();
        return $network_payment;
    }

    // get particular network frequency data
    public function get_network_to_network_frequency()
    {
        $network_frequency =  $this->networkdb->get_network_to_network_frequency();
        return $network_frequency;
    }
    // get particular contact email
    public function get_contacts()
    {
        $contacts =  $this->networkdb->get_contacts();
        return $contacts;
    }

    // get verticals name
    public function get_verticals()
    {
        return $this->networkdb->get_verticals();
    }
    // get software name
    public function get_network_software_list()
    {
        return $this->networkdb->get_network_software_list();
    }
    // get network_frequency name
    public function get_network_frequency_list()
    {
        return $this->networkdb->get_network_frequency_list();
    }
    // get network_payment name
    public function get_network_payment_list()
    {
        return $this->networkdb->get_network_payment_list();
    }
    // get ad image 
    public function get_adspaces()
    {
        return $this->networkdb->get_adspaces();
    }
    // website logo
    public function get_settings()
    {
        return $this->networkdb->get_settings();
    }
    public function get_seo_meta()
    {
        return $this->networkdb->get_seo_meta();
    }
    // Get slug functionality of blogsview page
    public function get_blogsview($slug = '')
    {
        $filter = [
            'slug' => $slug
        ];
        return $this->networkdb->get_blogsview($filter);
    }
    // Get blogs on blogs page
    public function get_blogs($filters = [])
    {
        $filters = ['limit' => 4];
        $blogs = $this->networkdb->get_blogs($filters, true);
        return $blogs;
    }
    // Get offers on offers page
    public function get_offers()
    {
        $filters = ['limit' => 40];
        $offers = $this->networkdb->get_offers($filters);
        return $offers;
    }
    // Get offers on offers page
    public function get_top_offers()
    {
        $top_offers = $this->networkdb->get_top_offers();
        return $top_offers;
    }
    //get_featured_offers
    public function get_featured_offers()
    {

        // $limitCount = 5;
        // $filters = ['is_featured' => 1, 'limit' => $limitCount];
        $filters = ['is_featured' => 1];
        $offers = $this->networkdb->get_offers($filters);
        return $offers;
    }
    // Get offers vertical
    public function get_offers_to_verticals()
    {
        $offers_verticals =  $this->networkdb->get_offers_to_verticals();
        return $offers_verticals;
    }
}
