<?php

namespace App\Http\Controllers\Admin;

use App\DB\NetworksDB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private NetworksDB $networkdb;
    function __construct()
    {
        $this->networkdb = new NetworksDB();
    }
    // networks section
    public function all_sponsored_networks()
    {
        $filters = ['is_sponsored' => 1];
        $sponsored_networks =  $this->networkdb->get_networks($filters);
        return $sponsored_networks;
    }
    public function all_top_networks()
    {
        $filters = ['is_top_network' => 1];
        $top_networks =  $this->networkdb->get_networks($filters);
        return $top_networks;
    }
    public function featured_networks()
    {
        $filters = ['is_featured' => 1];
        $featured_networks =  $this->networkdb->get_networks($filters);
        return $featured_networks;
    }
    //offers section
    public function get_latest_offers()
    {
        $latest_offers =  $this->networkdb->get_offers();
        return $latest_offers;
    }
    public function get_top_offers()
    {
        $top_offers =  $this->networkdb->get_top_offers();
        return $top_offers;
    }
    public function get_featured_offers()
    {
        $filters = ['is_featured' => 1];
        $featured_offers =  $this->networkdb->get_offers($filters);
        return $featured_offers;
    }
    // all ads start from hare 
    public function get_networkofthemonths_ads()
    {
        $ads =  $this->networkdb->get_networkofthemonths_ads();
        return $ads;
    }
    public function home_page_carousel_ads()
    {
        $ads =  $this->networkdb->home_page_carousel_ads();
        return $ads;
    }
    public function in_page_ads()
    {
        $ads =  $this->networkdb->in_page_ads();
        return $ads;
    }
    public function sponsored_ads()
    {
        $ads =  $this->networkdb->sponsored_ads();
        return $ads;
    }
    public function sponsored_small()
    {
        $ads =  $this->networkdb->sponsored_small();
        return $ads;
    }
    public function featured_ads()
    {
        $ads =  $this->networkdb->featured_ads();
        return $ads;
    }
}
