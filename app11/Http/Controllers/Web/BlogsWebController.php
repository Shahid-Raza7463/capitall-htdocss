<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdspaceImages;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

class BlogsWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, NetworkWebController $nwc)
    {
        // fetch all request from blogs page
        $filters = $request->all();
        // $blogs = Blog::paginate(15);
        $blogs =  $nwc->get_blogs();
        // dd($blogs);
        // get web logo 
        $web_logo =  $nwc->get_settings();
        $seo_meta =  $nwc->get_seo_meta();
        // get ad image 
        $adspace_image = $nwc->get_adspaces();
        //1 section of network page
        $top_networks =  $nwc->get_top_networks();
        $featured_networks =  $nwc->get_featured_networks();

        return view('web.pages.blogs.blogs', [
            'top_networks' => $top_networks,
            'featured_networks' => $featured_networks,
            'adspace_image' => $adspace_image,
            'web_logo' => $web_logo,
            'seo_meta' => $seo_meta,
            'blogs' => $blogs,
            'filters' => $filters,
        ]);
    }
}
