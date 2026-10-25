{{-- offers --}}
<div class="col-md-7 col-sm-12 border" id="network">
    <div class="div-strip">
        <div class="border d-flex justify-content-between px-2 pt-1" style="background-color: #f3f3f3;">
            <h6 class="offer-heading" style="width: 57%">Offers</h6>
            <h6 class="offer-heading">Payout</h6>
            <h6 class="offer-heading">Networks</h6>
        </div>


        @foreach ($offers as $offer)
            <div class="d-flex justify-content-between mt-3 mx-2">
                <div class="d-flex">
                    <img src="{{ asset('web/images/square.jpg') }}" class="img-fluid offers-feature-img rounded">
                    <div class="mx-4 prm-title">
                        <h6 class="prm-net mt-1"
                            style="
                        width: 176px;
                        overflow: hidden;">
                            <a href="#" class="  text-dark">{{ $offer->title }}</a>
                        </h6>
                        @foreach ($offers_verticals as $vertical)
                            <span class="featured-offer-text text-secondary">#{{ $vertical->title }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="mobile-pay">
                    <p class="mt-3 Approach mx-2">${{ $offer->payout }}</p>
                </div>
                <div>
                    <p class="mt-3 Approach"><a href="#">{{ $offer->network_name }}</a></p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- pagination -->
    @if ($offers->count() > 0)
        <div class="pagination mb-4 ">
            {{-- call default blade from resource/vender/pagination --}}
            {{ $offers->links('vendor.pagination.default') }}
        </div>
    @endif
</div>
