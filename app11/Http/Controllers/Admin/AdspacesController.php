<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\NetworkWebController;
use App\Models\Admin\Adspace;
use Illuminate\Http\Request;

class AdspacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Adspace::all();
        return view('Admin.adspaces.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(NetworkWebController $nwc)
    {
        $networks =  $nwc->get_premium_networks();
        return view('Admin.adspaces.create', [
            'networks' => $networks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->user();
        $validated = $request->validate([
            'position' =>  "required",
            'image_url' =>  "required",
            'link' =>  "required",
            'expired_at' =>  "required"
            // 'status' =>  "required",
            // 'image_url' =>  "required|image|mimes:jpeg,png,jpg,gif",
        ]);

        $adspaces = new Adspace();
        $adspaces->position = $request['position'];
        $adspaces->link = $request['link'];
        $adspaces->network_id = $request['network_id'];
        $adspaces->expired_at = $request['expired_at'];
        $adspaces->status = $request['status'];
        $adspaces->add_user = $user->id;

        // Insert image path in table for image_url
        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('images');
            $adspaces->image_url = $path;
        }

        $adspaces->save();
        switch ($adspaces->position) {
            case 'top_left':
                return redirect('admin/network-ads')->with('message', 'Your data successfully added');
                break;
            case 'top_right':
                return redirect('admin/carousel-ads')->with('message', 'Your data successfully added');
                break;
            case 'top_middle_1':
                return redirect('admin/inpage-ads')->with('message', 'Your data successfully added');
                break;
            case 'right_side_1':
                return redirect('admin/sponsored-ads')->with('message', 'Your data successfully added');
                break;
            case 'right_side_2':
                return redirect('admin/sponsored-small')->with('message', 'Your data successfully added');
                break;
            case 'right_side_4':
                return redirect('admin/featured-ads')->with('message', 'Your data successfully added');
                break;
            default:
                return redirect('admin/adspaces')->with('message', 'Your data successfully added');
                break;
        }
    }

    public function upload(Request $request)
    {
        $path = $request->file('adspaces')->store('images');
        Adspace::insert($path);
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
        $data = [];
        $data['adspaces'] = Adspace::find($id);
        $data['id'] = $id;

        $networks =  $nwc->get_premium_networks();
        return view('Admin.adspaces.update', $data)->with([
            'networks' => $networks
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Get login user details
        $user = $request->user();
        $validated = $request->validate([
            'position' =>  "required",
            // 'image_url' =>  "required",
            'link' =>  "required",
            'expired_at' =>  "required"
            // 'image_url' =>  "required|image|mimes:jpeg,png,jpg,gif",
        ]);

        $adspaces = Adspace::find($id);

        $adspaces->position = $request->input('position');
        $adspaces->link = $request->input('link');
        $adspaces->network_id = $request->input('network_id');
        $adspaces->expired_at = $request->input('expired_at');
        $adspaces->status = $request->input('status');
        $adspaces->mod_user = $user->id;

        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('images');
            $adspaces->image_url = $path;
        }
        $adspaces->save();
        switch ($adspaces->position) {
            case 'top_left':
                return redirect('admin/network-ads')->with('message', 'Your data successfully added');
                break;
            case 'top_right':
                return redirect('admin/carousel-ads')->with('message', 'Your data successfully added');
                break;
            case 'top_middle_1':
                return redirect('admin/inpage-ads')->with('message', 'Your data successfully added');
                break;
            case 'right_side_1':
                return redirect('admin/sponsored-ads')->with('message', 'Your data successfully added');
                break;
            case 'right_side_2':
                return redirect('admin/sponsored-small')->with('message', 'Your data successfully added');
                break;
            case 'right_side_4':
                return redirect('admin/featured-ads')->with('message', 'Your data successfully added');
                break;
            default:
                return redirect('admin/adspaces')->with('message', 'Your data successfully added');
                break;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $adspaces = Adspace::find($id);
        if (!$adspaces) {
            return ['success' => false, 'msg' => '$adspaces not Found !'];
        }
        $adspaces->delete();
        return redirect('admin/adspaces')->with('message', 'Your data successfully deleted');
    }
    // public function edit_ads(string $id)
    // {
    //     $data = [];
    //     $data['adspaces'] = Adspace::find($id);

    //     $data['id'] = $id;
    //     return view('Admin.adspaces.section_update', $data);
    // }

    // public function update_ads(Request $request, string $id)
    // {
    //     $user = $request->user();
    //     $validated = $request->validate([
    //         // 'image_url' =>  "required",
    //         'link' =>  "required",
    //         'expired_at' =>  "required"
    //         // 'image_url' =>  "required|image|mimes:jpeg,png,jpg,gif",
    //     ]);

    //     $adspaces = Adspace::find($id);

    //     $adspaces->link = $request->input('link');
    //     $adspaces->expired_at = $request->input('expired_at');
    //     $adspaces->status = $request->input('status');
    //     $adspaces->mod_user = $user->id;
    //     if ($request->hasFile('image_url')) {
    //         $path = $request->file('image_url')->store('images');
    //         $adspaces->image_url = $path;
    //     }
    //     $adspaces->save();
    //     return redirect('admin/network-ads')->with('message', 'Your data successfully updated');
    // }
    //admin dashboard ads (separated ads section)
    public function get_networkofthemonths_ads(AdminController $ac)
    {
        $data = $ac->get_networkofthemonths_ads();
        return view('Admin.adspaces.network_of_the_months', [
            'data' => $data
        ]);
    }
    public function home_page_carousel_ads(AdminController $ac)
    {
        $data = $ac->home_page_carousel_ads();
        return view('Admin.adspaces.home_page_carousel', [
            'data' => $data
        ]);
    }
    public function in_page_ads(AdminController $ac)
    {
        $data = $ac->in_page_ads();
        return view('Admin.adspaces.in_page_ads', [
            'data' => $data
        ]);
    }
    public function sponsored_ads(AdminController $ac)
    {
        $data = $ac->sponsored_ads();
        return view('Admin.adspaces.sponsored_ads', [
            'data' => $data
        ]);
    }
    public function sponsored_small(AdminController $ac)
    {
        $data = $ac->sponsored_small();
        return view('Admin.adspaces.sponsored_small', [
            'data' => $data
        ]);
    }
    public function featured_ads(AdminController $ac)
    {
        $data = $ac->featured_ads();
        return view('Admin.adspaces.featured_net', [
            'data' => $data
        ]);
    }
    // Get bulk action functionality
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                Adspace::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
