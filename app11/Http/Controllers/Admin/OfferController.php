<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\OfferFetch;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = OfferFetch::all();
        return view('Admin.Offers.index', ['data' => $data]);
    }

    public function get_latest_offers(AdminController $ac)
    {
        $data = $ac->get_latest_offers();
        return view('Admin.offers.latest_offers', [
            'data' => $data
        ]);
    }
    public function get_top_offers(AdminController $ac)
    {
        $data = $ac->get_top_offers();
        return view('Admin.offers.top_offers', [
            'data' => $data
        ]);
    }
    public function get_featured_offers(AdminController $ac)
    {
        $data = $ac->get_featured_offers();
        return view('Admin.offers.featured_offers', [
            'data' => $data
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


    public function edit(string $id)
    {
        $data = [];
        // pass offers in blade file
        $data['offers'] = OfferFetch::find($id);

        $data['id'] = $id;
        return view('Admin.offers.update', $data);
    }

    public function upload(Request $request)
    {
        $path = $request->file('offer_image')->store('images');
        OfferFetch::insert($path);
    }


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'icon' =>  "required",
            'title' =>  "required",
            'offer_id' =>  "required",
            'payout' =>  "required",
            'countries' =>  "required",
            'status' =>  "required",
            'is_featured' =>  "required",
            // 'offer_image' =>  "required"
        ]);

        $offers = OfferFetch::find($id);

        $offers->icon = $request->input('icon');
        $offers->title = $request->input('title');
        $offers->offer_id = $request->input('offer_id');
        $offers->payout = $request->input('payout');
        $offers->countries = $request->input('countries');
        $offers->status = $request->input('status');
        $offers->is_featured = $request->input('is_featured');

        if ($request->hasFile('offer_image')) {
            $path = $request->file('offer_image')->store('images');
            $offers->offer_image = $path;
        }
        $offers->save();
        return redirect('admin/offers')->with('message', 'Your data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offers = OfferFetch::find($id);
        $offers->delete();
        return redirect('admin/offers')->with('message', 'Your data successfully deleted');
    }
    // Get bulk action functionality
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                OfferFetch::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
