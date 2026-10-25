<?php

namespace App\Http\Controllers\Web;

use anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Http\Controllers\Controller;
use App\Models\Admin\AdspaceImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class RegisterWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NetworkWebController $nwc)
    {
        // get ad image 
        $adspace_image = $nwc->get_adspaces();
        // get web logo 
        $web_logo =  $nwc->get_settings();
        $seo_meta =  $nwc->get_seo_meta();

        // dd($adspace_image);
        return view('web.pages.home.home', [
            'adspace_image' => $adspace_image,
            'web_logo' => $web_logo,
            'seo_meta' => $seo_meta,

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
        //for google recapcha
        $validator = Validator::make($request->all(), [
            // Existing validation rules...
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Proceed with registration if reCAPTCHA validation passes
        // ...
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
