{{-- top_offers --}}
<div class="border side-compnt">
    <div class="mb-1">
        <div class="border d-flex justify-content-between px-3 pt-1" style="background-color: #f3f3f3;">
            <h6 class="offer-heading">Top 10 Offers</h6>
            <h6 class="offer-heading">Networks</h6>
        </div>

        @php
            $count = 0;
        @endphp
        @foreach ($top_offers as $top_offer)
            @php
                $count++;
                if ($count > 10) {
                    // Stop displaying reviews after the first two
                    break;
                }
            @endphp
            <div class="d-flex justify-content-between mx-3 mt-3">
                <div class="d-flex">
                    <img src="{{ asset('web/images/network img.jpg') }}" class="img-fluid top-net-img rounded-circle ">
                    <div class="mx-3 mt-1">
                        <a href="#" class="  text-dark">
                            <p class="offr"
                                style="
                            width: 160px;
                            overflow: hidden;
                            height: 46px;">
                                {{ $top_offer->title }} </p>
                        </a>
                        @foreach ($offers_verticals as $vertical)
                            <span class="featured-offer-text text-secondary">#{{ $vertical->title }}</span>
                        @endforeach
                    </div>
                </div>
                <div>
                    <p class="mt-2 Approach-2"><a href="#">{{ $top_offer->network_name }}</a></p>
                </div>
            </div>
        @endforeach
    </div>
</div>
