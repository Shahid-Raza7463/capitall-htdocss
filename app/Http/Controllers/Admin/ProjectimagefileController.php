<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\NetworkWebController;
use App\Models\Admin\Projectimagefile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProjectimagefileController extends Controller
{
    // listing Projectimagefile
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Projectimagefile::all();
            // Get yajra dataTable
            return DataTables::of($data)
                ->addIndexColumn()
                // Get edit,delete and views btn
                ->addColumn('action', function ($row) {

                    $deleteUrl = 'projectimagefile/' . $row['id'];
                    $editUrl = 'projectimagefile/' . $row['id'] . '/edit';
                    $viewUrl = 'projectimagefile/' . $row['id'];

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
        return view('Admin.projectimagefile.index');
    }



    // function for create Blog
    public function create(NetworkWebController $nwc)
    {
        return view('Admin.projectimagefile.create');
    }
    // function for store Blog
    public function store(Request $request)
    {
        $user = $request->user();
        // dd($user);
        $validated = $request->validate([
            'projects_id' =>  "required",
            'image' =>  "required",
        ]);

        $projectimagefile = new Projectimagefile();
        $projectimagefile->projects_id = $request->projects_id;
        $projectimagefile->status = $request->status;

        if ($request->hasFile('image')) {
            // Process the new file upload
            $file = $request->file('image')->store('img\portfolio');
            $path = $request->file('image')->store();
            $projectimagefile->image = $path;

            //store original name in database
            $originalfile = $request->file('image');
            $originalfilename = $originalfile->getClientOriginalName();
            $projectimagefile->originalimagename = $originalfilename;
        }
        $projectimagefile->save();
        return redirect('admin/projectimagefile')->with('message', 'Your data successfully added');
    }


    // function for views Blog
    public function show(string $id)
    {
        $data = Projectimagefile::find($id);
        return view('Admin.projectimagefile.show', ['data' => $data]);
    }

    // function for edit Blog
    public function edit(string $id)
    {
        $data = DB::table('projectimagefile')->where('id', $id)->first();
        return view('Admin.projectimagefile.update', compact('data'));
    }
    // function for update Blog
    public function update(Request $request, string $id)
    {
        // $user = $request->user();
        $user = auth()->user();
        $validated = $request->validate([
            'projects_id' =>  "required",
            'image' =>  "required",
        ]);

        $projectimagefile = Projectimagefile::find($id);
        $projectimagefile->projects_id = $request->input('projects_id');
        $projectimagefile->status = $request->input('status');

        if ($request->hasFile('image')) {
            $destinationPath = public_path('assets/img/portfolio');
            // Delete the existing file if it exists
            if ($request->imageexist) {
                $existingFilePath = $destinationPath . '/' . $request->imageexist;
                if (file_exists($existingFilePath)) {
                    unlink($existingFilePath);
                }
            }
            // Process the new file upload
            $file = $request->file('image')->store('img\portfolio');
            $path = $request->file('image')->store();
            $projectimagefile->image = $path;

            //store original name in database
            $originalfile = $request->file('image');
            $originalfilename = $originalfile->getClientOriginalName();
            $projectimagefile->originalimagename = $originalfilename;
        }

        $projectimagefile->save();
        return redirect('admin/projectimagefile')->with('message', 'Your data successfully updated');
    }

    // public function update(Request $request, string $id)
    // {
    //     // Validate the request data
    //     $validated = $request->validate([
    //         'projects_id' => 'required',
    //         'image' => 'required|image', // Ensure the uploaded file is an image
    //     ]);

    //     // Find the project image file record
    //     $projectimagefile = Projectimagefile::findOrFail($id);
    //     $projectimagefile->projects_id = $request->input('projects_id');

    //     // Handle file upload
    //     if ($request->hasFile('image')) {
    //         $destinationPath = public_path('assets/img/portfolio');

    //         // Delete the existing file if it exists
    //         if ($projectimagefile->image && file_exists($destinationPath . '/' . $projectimagefile->image)) {
    //             unlink($destinationPath . '/' . $projectimagefile->image);
    //         }

    //         // Store the new file
    //         $file = $request->file('image');
    //         $filename = $file->store('img/portfolio', 'public'); // Store in the public disk
    //         $projectimagefile->image = $filename;

    //         // Store the original file name
    //         $projectimagefile->originalimagename = $file->getClientOriginalName();
    //     }

    //     // Save the updated record
    //     $projectimagefile->save();

    //     // Redirect with a success message
    //     return redirect('admin/projectimagefile')->with('message', 'Your data has been successfully updated');
    // }


    // function for destroy Blog
    public function destroy(string $id)
    {
        $projectimagefile = Projectimagefile::find($id);
        // Delete the existing file if it exists
        $destinationPath = public_path('assets/img/portfolio');
        if ($projectimagefile->image) {
            $existingFilePath = $destinationPath . '/' . $projectimagefile->image;
            if (file_exists($existingFilePath)) {
                unlink($existingFilePath);
            }
        }
        // Delete the record from tables
        $projectimagefile->delete();
        return redirect('admin/projectimagefile')->with('message', 'Your data successfully deleted');
    }
    // Get blogs bulk action
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                Projectimagefile::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
