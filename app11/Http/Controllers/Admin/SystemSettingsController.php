<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SystemSettingModel;
use Illuminate\Http\Request;

class SystemSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $system = SystemSettingModel::all();

        return view('Admin.system_settings.index', [
            'system' => $system
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [];
        $data['systemsettings'] = SystemSettingModel::find($id);

        $data['id'] = $id;
        return view('Admin.system_settings.update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'option_name' =>  'required',
            'option_value' =>  'required'
        ]);

        $system = SystemSettingModel::find($id);
        if (!$system) {
            return ['success' => false, 'msg' => 'Data not Found !'];
        }
        $system->option_name = $request->input('option_name');
        $system->option_value = $request->input('option_value');
        $system->auto_load = $request->input('auto_load');

        $system->save();
        return redirect('admin/systemsettings')->with('message', 'Your data successfully updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $system = SystemSettingModel::find($id);
        $system->delete();
        return redirect('admin/systemsettings')->with('message', 'Your data successfully deleted');
    }
    // Get bulk action functionality
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                SystemSettingModel::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
