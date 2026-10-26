<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AboutController extends Controller
{
    // listing Commission type
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = About::all();
            // Get yajra dataTable
            return DataTables::of($data)
                ->addIndexColumn()
                // Get edit,delete and views btn
                ->addColumn('action', function ($row) {

                    $deleteUrl = 'about/' . $row['id'];
                    $editUrl = 'about/' . $row['id'] . '/edit';
                    $viewUrl = 'about/' . $row['id'];

                    $btn = "<div style='display: flex; gap: 5px; align-items: center;'>
                    <a href='" . $viewUrl . "' class='btn btn-sm btn-success' 
                        style='height: 25px; width: 3.5rem; font-size: 10px;'>
                        <i class='fa fa-eye'></i> View
                    </a>
                    <a href='" . $editUrl . "' class='btn btn-sm btn-primary' 
                        style='height: 25px; width: 3.5rem; font-size: 10px;'>
                        <i class='fa fa-pen'></i> Edit
                    </a>
                    <form action='" . $deleteUrl . "' method='POST' class='form1' 
                        style='display: inline-block; margin: 0;'>
                        " . csrf_field() . "
                        " . method_field('DELETE') . "
                        <button type='submit' class='delete btn btn-danger btn-sm' 
                            style='height: 25px; width: 3.5rem; font-size: 10px;' 
                            onclick='showConfirmation(event)'>
                            <i class='fa fa-trash'></i> Delete
                        </button>
                    </form>
                </div>";

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Admin.about.aboutindex');
    }

    // function for create commission type
    public function create(Request $request)
    {
        return view('Admin.about.create_commissionTypes');
    }

    // function for store commission type
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' =>  "required|unique:commission_types,name|max:255",
        ]);

        $about  = $request->all();
        About::create($about);
        return redirect('admin/about')->with('message', 'Your data successfully added');
    }

    // function for edit commission type
    public function edit(string $id)
    {
        $data = [];
        $data['about'] = About::find($id);
        // when data not found
        if (!$data) {
            return ['success' => false, 'msg' => 'about not Found !!!'];
        }
        $data['id'] = $id;

        return view('Admin.about.update_commissionTypes', $data);
    }

    // function for update commission type
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' =>  "required|unique:commission_types,id," . $id . "|max:255",
        ]);

        $about = About::find($id);
        // when data not found
        if (!$about) {
            return ['success' => false, 'msg' => 'about not Found !!!'];
        }
        // when data found
        $about->name = $request->input('name');
        $about->save();
        return redirect('admin/about')->with('message', 'Your data successfully updated');
    }

    // function for destroy commission type
    public function destroy(string $id)
    {
        $about = About::find($id);
        // when data not found
        if (!$about) {
            return ['success' => false, 'msg' => 'about not Found !!!'];
        }
        $about->delete();
        return redirect('admin/about')->with('message', 'Your data successfully deleted');
    }
    // Get commission type bulk action
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                About::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
