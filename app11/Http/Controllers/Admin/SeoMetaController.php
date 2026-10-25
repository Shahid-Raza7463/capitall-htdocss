<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SeoMeta;
use Illuminate\Http\Request;

class SeoMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SeoMeta::all();
        return view('Admin.seometa.index', [
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [];
        $data['seo_meta'] = SeoMeta::find($id);
        $data['id'] = $id;
        return view('admin.seometa.update', $data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' =>  'required|string',
            // 'meta_title' =>  'required',
            'meta_description' =>  'required',
            'meta_keywords' =>  'required'
        ]);

        $seo = SeoMeta::find($id);
        $seo->name = $request->input('name');
        $seo->meta_title = $request->input('meta_title');
        $seo->meta_description = $request->input('meta_description');
        $seo->meta_keywords = $request->input('meta_keywords');

        $seo->save();
        return redirect('admin/seo-meta')->with('message', 'Your data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SeoMeta::find($id);
        $data->delete();
        return redirect('admin/seo-meta')->with('message', 'Your data successfully deleted');
    }
    // Get bulk action functionality
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                SeoMeta::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
