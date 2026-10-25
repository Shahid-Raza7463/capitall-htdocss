<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\NetworkWebController;
use App\Models\Admin\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::all();
        return view('Admin.blogs.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(NetworkWebController $nwc)
    {
        $networks =  $nwc->get_premium_networks();
        $network_categories = $nwc->get_verticals();
        return view('Admin.blogs.create', [
            'network_categories' => $network_categories,
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
            'title' =>  "required",
            'description' =>  "required",
            'preview_image' =>  "required",
            'category' =>  "required",
            'network_id' =>  "required",
            'meta_title' =>  "required",
            'tags' =>  "required",
            'meta_description' =>  "required",
        ]);

        $blogs = new Blog();
        $blogs->title = $request['title'];
        $blogs->description = $request['description'];
        $blogs->category = $request['category'];
        $blogs->network_id = $request['network_id'];
        $blogs->add_user = $user->id;
        $blogs->meta_title = $request['meta_title'];
        $blogs->meta_description = $request['meta_description'];
        $blogs->tags = $request['tags'];
        $blogs->status = $request['status'];
        // Get title and insert slug in database
        $slug = strtolower(str_replace(' ', '-', $request['title']));
        $blogs->slug = $slug;
        // Insert image path in table for image_url
        if ($request->hasFile('preview_image')) {
            $path = $request->file('preview_image')->store('images');
            $blogs->preview_image = $path;
        }
        $blogs->save();
        return redirect('admin/blog')->with('message', 'Your data successfully added');
    }
    public function upload(Request $request)
    {
        $path = $request->file('blogs')->store('images');
        Blog::insert($path);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Blog::find($id);
        return view('Admin.blogs.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NetworkWebController $nwc, string $id)
    {
        $data = [];
        $data['blog'] = Blog::find($id);
        // Get id in url of blade file
        $data['id'] = $id;

        $networks =  $nwc->get_premium_networks();
        $network_categories = $nwc->get_verticals();

        return view('Admin.blogs.update', $data)->with([
            'network_categories' => $network_categories,
            'networks' => $networks
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = $request->user();
        $validated = $request->validate([
            'title' =>  "required",
            'description' =>  "required",
            'category' =>  "required",
            'network_id' =>  "required",
            'meta_title' =>  "required",
            'tags' =>  "required",
            'meta_description' =>  "required"
        ]);

        $blogs = Blog::find($id);

        $blogs->title = $request->input('title');
        $blogs->description = $request->input('description');
        $blogs->category = $request->input('category');
        $blogs->network_id = $request->input('network_id');
        $blogs->update_user = $user->id;
        $blogs->meta_title = $request->input('meta_title');
        $blogs->tags = $request->input('tags');
        $blogs->status = $request->input('status');
        $blogs->meta_description = $request->input('meta_description');
        // Get title and insert slug in database
        $slug = strtolower(str_replace(' ', '-', $request->input('title')));
        $blogs->slug = $slug;

        // $blogs->slug = $request->input('slug');
        if ($request->hasFile('preview_image')) {
            $path = $request->file('preview_image')->store('images');
            $blogs->preview_image = $path;
        }
        $blogs->save();
        return redirect('admin/blog')->with('message', 'Your data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('admin/blog')->with('message', 'Your data successfully deleted');
    }
    // Get bulk action functionality
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                Blog::whereIn('id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
