<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Web\NetworkReviewModel;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = NetworkReviewModel::orderBy('created_at', 'desc')->get();
        return view('Admin.reviews.index_reviews', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
    public function edit(string $review_id)
    {
        $data = [];
        $data['reviewslist'] = NetworkReviewModel::find($review_id);

        if (!$data) {
            return ['success' => false, 'msg' => 'reviews not Found !!!'];
        }
        $data['review_id'] = $review_id;

        return view('Admin.reviews.update_reviews', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $review_id)
    {
        $validated = $request->validate([
            'network_id' =>  'required',
            'user_id' =>  'required',
            'all_rating' =>  'min:0|max:5',
            'offer_rating' =>  'min:0|max:5',
            'payout_rating' =>  'min:0|max:5',
            'tracking_rating' =>  'min:0|max:5',
            'support_rating' => 'min:0|max:5',
            'review_text' => 'required',
        ]);

        $reviews = NetworkReviewModel::find($review_id);
        if (!$reviews) {
            return ['success' => false, 'msg' => 'reviews not Found !!!'];
        }
        $reviews->network_id = $request->input('network_id');
        $reviews->user_id = $request->input('user_id');
        $reviews->all_rating = $request->input('all_rating');
        $reviews->offer_rating = $request->input('offer_rating');
        $reviews->payout_rating = $request->input('payout_rating');
        $reviews->tracking_rating = $request->input('tracking_rating');
        $reviews->support_rating = $request->input('support_rating');
        $reviews->review_text = $request->input('review_text');
        $reviews->status = $request->input('status');
        $reviews->save();
        return redirect('admin/reviewslist')->with('message', 'Your data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $review_id)
    {
        $reviews = NetworkReviewModel::find($review_id);
        // dd($reviews);
        if (!$reviews) {
            return ['success' => false, 'msg' => 'reviews not Found !!!'];
        }
        $reviews->delete();
        return redirect('admin/reviewslist')->with('message', 'Your data successfully deleted');
    }
    // Get bulk action functionality
    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedItemsJSON = $request->input('selected_items', '[]');
        $selectedItems = json_decode($selectedItemsJSON);

        if ($action === 'delete') {
            if (!empty($selectedItems)) {
                NetworkReviewModel::whereIn('review_id', $selectedItems)->delete();
                return redirect()->back()->with('message', 'Selected items deleted successfully');
            } else {
                return redirect()->back()->with('message', 'No items selected for deletion');
            }
        }
        return redirect()->back()->with('message', 'Invalid bulk action');
    }
}
