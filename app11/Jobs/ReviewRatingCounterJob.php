<?php

namespace App\Jobs;

use App\Models\Web\Network;
use App\Models\Web\NetworkReviewModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ReviewRatingCounterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $network_id;

    public function __construct($network_id)
    {
        $this->network_id = $network_id;
    }

    public function handle(): void
    {
        // Count total reviews of networks
        $totalReviews = NetworkReviewModel::where('network_id', $this->network_id)->count();

        // Calculate average ratings for the network
        $averageRating = NetworkReviewModel::where('network_id', $this->network_id)->avg('all_rating');
        $averageSupportRating = NetworkReviewModel::where('network_id', $this->network_id)->avg('support_rating');
        $averageTrackRating = NetworkReviewModel::where('network_id', $this->network_id)->avg('tracking_rating');
        $averagePayoutRating = NetworkReviewModel::where('network_id', $this->network_id)->avg('payout_rating');
        $averageOfferRating = NetworkReviewModel::where('network_id', $this->network_id)->avg('offer_rating');

        // Update the Network table
        Network::where('network_id', $this->network_id)->update([
            'review_count' => $totalReviews,
            'rating' => $averageRating,
            'support_ratings' => $averageSupportRating,
            'tracking_ratings' => $averageTrackRating,
            'payout_ratings' => $averagePayoutRating,
            'offer_ratings' => $averageOfferRating
        ]);
    }
}
