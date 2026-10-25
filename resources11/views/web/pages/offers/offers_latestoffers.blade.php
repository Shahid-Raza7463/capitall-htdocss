{{-- Latest Offers --}}
<div class="mx-1 mb-1">
    <div class="container filter-table mt-3 d-flex justify-content-between p-3">
        <div class="border rounded w-100 me-1">
            <div class="mb-2">
                <div class="border d-flex justify-content-between px-2 pt-1" style="background-color: #f3f3f3;">
                    <h6 class="offer-heading">Latest Offers</h6>
                    <h6 class="offer-heading">Networks</h6>
                </div>

                @php
                    $count = 0;
                @endphp
                {{-- aaaaaaa --}}
                @foreach ($latest_offers as $latest_offer)
                    @php
                        $count++;
                        if ($count > 5) {
                            // display first 5 items
                            break;
                        }
                    @endphp
                    <div class="d-flex justify-content-between px-2 mt-2">
                        <div class="d-flex">
                            <img src="{{ asset('web/images/olavivo.jpg') }}" class="img-fluid offers-img rounded">
                            <div class="mx-4 mt-1 filter-title">
                                <h6 class="prm-net"
                                    style="width: 285px;
                                    overflow: hidden;">
                                    <a href="#" class="fw-bold text-dark">{{ $latest_offer->title }}</a>
                                </h6>
                                @foreach ($offers_verticals as $vertical)
                                    <span class="featured-offer-text text-secondary">#{{ $vertical->title }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <p class="mt-2 Approach-2"><a href="#">{{ $latest_offer->network_name }}</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="border rounded w-100 ms-1 filter2-mobile">
            <div class="mb-2">
                <div class="border d-flex justify-content-between px-2 pt-1" style="background-color: #f3f3f3;">
                    <h6 class="offer-heading">Latest Offers</h6>
                    <h6 class="offer-heading">Networks</h6>
                </div>


                @php
                    $count = 0;
                @endphp
                @foreach ($latest_offers as $latest_offer)
                    @php
                        $count++;
                        if ($count <= 5) {
                            // Skip first 5 items
                            continue;
                        }
                        if ($count > 10) {
                            // Stop displaying after the next 10 items
                            break;
                        }
                    @endphp
                    <div class="d-flex justify-content-between px-2 mt-2">
                        <div class="d-flex">
                            <img src="{{ asset('web/images/olavivo.jpg') }}" class="img-fluid offers-img rounded">
                            <div class="mx-4 mt-1 filter-title">
                                <h6 class="prm-net"
                                    style="width: 285px;
                                overflow: hidden;">
                                    <a href="#" class="fw-bold text-dark">{{ $latest_offer->title }}</a>
                                </h6>
                                @foreach ($offers_verticals as $vertical)
                                    <span class="featured-offer-text text-secondary">#{{ $vertical->title }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <p class="mt-2 Approach-2"><a href="#">{{ $latest_offer->network_name }}</a></p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
