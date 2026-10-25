{{-- Featured Offers --}}
<div class="mb-1">
    <div class="border d-flex justify-content-between px-3 pt-1" style="background-color: #f3f3f3;">
        <h6 class="offer-heading">Featured Offers</h6>
        <h6 class="offer-heading">Networks</h6>
    </div>

    @foreach ($featured_offers as $featured_offer)
        <div class="d-flex justify-content-between mx-3 mt-3">
            <div class="d-flex">
                <img src="{{ asset('web/images/network img.jpg') }}" class="img-fluid top-net-img rounded-circle ">
                <div class="mx-3 mt-1">
                    <a href="#" class="  text-dark">
                        <p class="offr">{{ $featured_offer->title }}</p>
                    </a>
                    {{-- <p class="top-offer-text text-secondary">#Olavivo #Crypto</p> --}}
                    @foreach ($offers_verticals as $vertical)
                        <span class="featured-offer-text text-secondary">#{{ $vertical->title }}</span>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="mt-2 Approach-2"><a href="#">{{ $featured_offer->network_name }}</a></p>
            </div>
        </div>
    @endforeach
</div>
