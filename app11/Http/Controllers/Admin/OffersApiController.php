<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\NetworkWebController;
use App\Models\Admin\NetworkSoftwareModel;
use App\Models\Admin\OfferApi;
use Illuminate\Http\Request;

class OffersApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = OfferApi::all();
        return view('Admin.offersApi.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(NetworkWebController $nwc)
    {
        $software =  $nwc->get_network_software_list();
        return view('Admin.offersApi.create', [
            'software' => $software
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'api_url' =>  "required",
            'tracking_software' =>  "required",
            'frequency' =>  "required",
            'status' =>  "required"
        ]);

        $offers_api = new OfferApi();
        $offers_api->api_url = $request['api_url'];
        $offers_api->tracking_software = $request['tracking_software'];
        $offers_api->frequency = $request['frequency'];
        $offers_api->status = $request['status'];
        $offers_api->save();

        return redirect('admin/offers-api')->with('message', 'Your data successfully added');
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
    public function edit(NetworkWebController $nwc, string $id)
    {
        $software['software'] =  $nwc->get_network_software_list();
        $data = [];
        // pass offers in blade file
        $data['offersApi'] = OfferApi::find($id);
        $data['id'] = $id;
        return view('Admin.offersApi.update', $data, $software);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'api_url' =>  "required",
            'tracking_software' =>  "required",
            'frequency' =>  "required",
            'status' =>  "required"
        ]);

        $offersApi = OfferApi::find($id);
        $offersApi->api_url = $request->input('api_url');
        $offersApi->tracking_software = $request->input('tracking_software');
        $offersApi->frequency = $request->input('frequency');
        $offersApi->status = $request->input('status');

        $offersApi->save();
        return redirect('admin/offers-api')->with('message', 'Your data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offersApi = OfferApi::find($id);
        $offersApi->delete();
        return redirect('admin/offers-api')->with('message', 'Your data successfully deleted');
    }
    // Get bulk action functionality
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                OfferApi::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
