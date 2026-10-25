<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CommissionTypeModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CommissionTypesController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CommissionTypeModel::all();
        return view('Admin.commissiontype.index_commissionTypes', ['data' => $data]);
    }

    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('Admin.commissiontype.create_commissionTypes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' =>  "required|unique:commission_types,name|max:255",
        ]);

        $commissionType  = $request->all();
        CommissionTypeModel::create($commissionType);
        return redirect('admin/commissiontype')->with('message', 'Your data successfully added');
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
        $data['commissionType'] = CommissionTypeModel::find($id);
        if (!$data) {
            return ['success' => false, 'msg' => 'commissiontype not Found !!!'];
        }
        $data['id'] = $id;

        return view('Admin.commissiontype.update_commissionTypes', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' =>  "required|unique:commission_types,id," . $id . "|max:255",
        ]);

        $commissionType = CommissionTypeModel::find($id);
        if (!$commissionType) {
            return ['success' => false, 'msg' => 'commissiontype not Found !!!'];
        }
        $commissionType->name = $request->input('name');
        $commissionType->save();
        return redirect('admin/commissiontype')->with('message', 'Your data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commissionType = CommissionTypeModel::find($id);
        if (!$commissionType) {
            return ['success' => false, 'msg' => 'commissiontype not Found !!!'];
        }
        $commissionType->delete();
        return redirect('admin/commissiontype')->with('message', 'Your data successfully deleted');
    }
    // Get bulk action functionality
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                CommissionTypeModel::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
