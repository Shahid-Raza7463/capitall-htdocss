<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\NetworkSoftwareModel;
use Illuminate\Http\Request;

class NetworkSoftwaresController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:network-software-list|network-software-create|network-software-edit|network-software-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:network-software-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:network-software-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:network-software-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = NetworkSoftwareModel::all();
        return view('Admin.networksoftware.index_networkSoftwares', ['data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('Admin.networksoftware.create_networkSoftwares');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' =>  "required|unique:network_softwares,name|max:255",
        ]);

        $networkSoftware  = $request->all();
        NetworkSoftwareModel::create($networkSoftware);
        return redirect('admin/networksoftware')->with('message', 'Your data successfully added');
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
        $data = [];
        $data['networkSoftware'] = NetworkSoftwareModel::find($id);
        $data['id'] = $id;

        return view('Admin.networksoftware.update_networkSoftwares', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' =>  "required|unique:network_softwares,id," . $id . "|max:255",
        ]);

        $networkSoftware = NetworkSoftwareModel::find($id);
        if (!$networkSoftware) {
            return ['success' => false, 'msg' => 'networkSoftware not Found !!!'];
        }
        $networkSoftware->name = $request->input('name');
        $networkSoftware->save();
        return redirect('admin/networksoftware')->with('message', 'Your data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $networkSoftware = NetworkSoftwareModel::find($id);
        if (!$networkSoftware) {
            return ['success' => false, 'msg' => 'networkSoftware not Found !!!'];
        }
        $networkSoftware->delete();
        return redirect('admin/networksoftware')->with('message', 'Your data successfully deleted');
    }
    // Get bulk action functionality
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                NetworkSoftwareModel::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
