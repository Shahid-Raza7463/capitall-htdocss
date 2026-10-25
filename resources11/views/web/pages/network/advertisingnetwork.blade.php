{{-- advertising Network details --}}
<div class="border net-div px-2 mt-3">
    <div class="border text-center pt-1 net-rv">
        <h6 class="fw-bold">Advertising Network details</h6>
    </div>
    <div class="text-center text-primary mt-2">
        <h6>Rating Distribution</h6>
    </div>
    <div class="programming-stats">
        <div class="details">
            <ul>


            </ul>
        </div>
        <div class="chart-container mt-3">
            <canvas class="my-chart">
                <div class="chart-label">
                    <span id="ratioLabel"></span>
                </div>
            </canvas>
        </div>
    </div>

    <div class="lh-1 mb-3 ad-net-tiles">
        <div class="">
            <label for="rating" class="form-label modal-lbl">Offer Rating</label>
            <div class="rating-system5" style="margin-left: 14px;">
                <input type="radio" name="rating" id="star5" />
                <label for="star5"></label>
                <input type="radio" name="rating" id="star4" />
                <label for="star4"></label>
                <input type="radio" name="rating" id="star3" />
                <label for="star3"></label>
                <input type="radio" name="rating" id="star2" />
                <label for="star2"></label>
                <input type="radio" name="rating" value="" id="star1" />
                <label for="star1"></label>
            </div>
        </div>
        <div>
            <label for="rating" class="form-label modal-lbl">Payout Rating</label>
            <div class="rating-system5" style="margin-left: 12px;">
                <input type="radio" name="rating" id="star5" />
                <label for="star5"></label>
                <input type="radio" name="rating" id="star4" />
                <label for="star4"></label>
                <input type="radio" name="rating" id="star3" />
                <label for="star3"></label>
                <input type="radio" name="rating" id="star2" />
                <label for="star2"></label>
                <input type="radio" name="rating" id="star1" />
                <label for="star1"></label>
            </div>
        </div>
        <div>
            <label for="rating" class="form-label modal-lbl">Tracking Rating</label>
            <div class="rating-system5" style="margin-left: 6px;">
                <input type="radio" name="rating" id="star5" />
                <label for="star5"></label>
                <input type="radio" name="rating" id="star4" />
                <label for="star4"></label>
                <input type="radio" name="rating" id="star3" />
                <label for="star3"></label>
                <input type="radio" name="rating" id="star2" />
                <label for="star2"></label>
                <input type="radio" name="rating" id="star1" />
                <label for="star1"></label>
            </div>
        </div>
        <div>
            <label for="rating" class="form-label modal-lbl">Support
                Rating</label>
            <div class="rating-system5" style="margin-left: 8px;">
                <input type="radio" name="rating" id="star5" />
                <label for="star5"></label>
                <input type="radio" name="rating" id="star4" />
                <label for="star4"></label>
                <input type="radio" name="rating" id="star3" />
                <label for="star3"></label>
                <input type="radio" name="rating" id="star2" />
                <label for="star2"></label>
                <input type="radio" name="rating" id="star1" />
                <label for="star1"></label>
            </div>
        </div>
    </div>
    <hr>

    <div class="mx-2">
        <button class="btn btn-sm border border-dark" disabled>For Publisher</button>
    </div>

    <div class="mx-3 mt-3">
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Commission Type</p>
            </div>


            <div class="col-md-8 col-6">
                @php
                    $commissionTypes = [];
                    foreach ($network_commission as $commission) {
                        $commissionTypes[] = $commission->name;
                    }
                    $commissionTypes = implode(', ', $commissionTypes);
                @endphp
                <p class="text-secondary d-inline">
                    {{ $commissionTypes }}
                </p>
            </div>
            {{-- <div class="col-md-8 col-6">
                @foreach ($network_commission as $commission)
                    <p class="text-secondary d-inline">
                        {{ $commission->name }}
                    </p>
                @endforeach
            </div> --}}
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Minimum Payment</p>
            </div>
            <div class="col-md-8 col-6">
                <p class="text-secondary">
                    {{ $network->min_payout }}
                </p>
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Payment Frequency</p>
            </div>
            <div class="col-md-8 col-6">
                @foreach ($network_frequency as $frequency)
                    <p class="text-secondary d-inline">
                        {{ $frequency->name }},
                    </p>
                @endforeach
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Payment Method</p>
            </div>
            <div class="col-md-8 col-6">
                @foreach ($network_payment as $payment)
                    <p class="text-secondary d-inline">
                        {{ $payment->name }},
                    </p>
                @endforeach
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Referral Commission</p>
            </div>
            <div class="col-md-8 col-6">
                <p class="text-secondary">
                    {{ $network->referral_commission }}
                </p>
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Publishers Contact</p>
            </div>
            <div class="col-md-8 col-6">
                @foreach ($contacts as $contact)
                    <a href="{{ $contact->email }}" class="text-secondary" target="_blank">{{ $contact->email }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- <div class="mx-2 mt-3">
        <button class="btn btn-sm border border-dark" disabled>For Advertiser</button>
    </div> --}}

    <div class="mx-3 mt-3">
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Ad Format</p>
            </div>
            <div class="col-md-8 col-6">
                <p class="text-secondary">Popunder, Native, Interstitial, Push Notification, On-Page
                    Notification, Mobile Push-up</p>
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Cost Model</p>
            </div>
            <div class="col-md-8 col-6">
                <p class="text-secondary">CPC, CPM, CPA</p>
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Minimum Deposit</p>
            </div>
            <div class="col-md-8 col-6">
                <p class="text-secondary">$50</p>
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Payment Method</p>
            </div>
            <div class="col-md-8 col-6">
                @foreach ($network_payment as $payment)
                    <p class="text-secondary d-inline">
                        {{ $payment->name }},
                    </p>
                @endforeach
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Daily Impression</p>
            </div>
            <div class="col-md-8 col-6">
                <p class="text-secondary">1 Billion</p>
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Top GEO</p>
            </div>
            <div class="col-md-8 col-6">
                <p class="text-secondary">Worldwide</p>
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Top Vertical</p>
            </div>
            <div class="col-md-8 col-6">
                @foreach ($network_verticals as $vertical)
                    <p class="text-secondary d-inline">
                        {{ $vertical->title }}
                    </p>,
                @endforeach
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Referral Commission</p>
            </div>
            <div class="col-md-8 col-6">
                <p class="text-secondary">{{ $network->referral_commission }}</p>
            </div>
        </div>
        <div class="row ad-net-tbl">
            <div class="col-md-4 col-6">
                <p class="">Advertisers Contact</p>
            </div>
            <div class="col-md-8 col-6">
                @foreach ($contacts as $contact)
                    <a href="#" class="text-secondary">{{ $contact->email }} </a>
                @endforeach
            </div>
        </div>
    </div>



</div>

<!--optimization-->
{{-- <div class="border net-div px-2 mt-3">
    <div class="row py-3">
        <div class="col-md-6 text-center ">
            <p class="mt-4">Targeting & Optimization</p>
        </div>
        <div class="col-md-6">
            <div class="border rounded p-2">
                <div class="d-flex justify-content-center rounded net-rv2 mx-1">
                    <p class="self-serve"><i class="fa-regular fa-circle-check fs-5 mx-1"></i>Self-Serve
                        Platform
                    </p>
                </div>
                <div class="mt-1 text-center">
                    <a href="#" class="show-more" data-bs-toggle="modal" data-bs-target="#exampleModal2">Show
                        More <i class="fa-solid fa-angle-down"></i></a>
                </div>
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Targeting &
                                    Optimization List</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Self-Serve
                                                Platform</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>GEO
                                                Targeting</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Device
                                                Targeting</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>OS
                                                Targeting</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>ISP/Carrier
                                                Targeting</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Browser
                                                Targeting</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>IP
                                                Targeting</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Website
                                                Targeting</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Language
                                                Targeting</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Time
                                                Targeting</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Category
                                                Targeting</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Demographic
                                                Targeting</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Retargeting
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Black/White
                                                List</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Frequency
                                                Capping</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Token
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Anti-Fraud
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-reguxmarklar fa-circle-xmark fs-5 mx-1"></i>Adult
                                                Ads</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Gambling
                                                Ads</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start rounded net-rv2 mx-1">
                                            <p class="self-serve"><i
                                                    class="fa-regular fa-circle-check fs-5 mx-1"></i>Personal
                                                Account Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!--offers-->
<div class="border px-2 net-div mt-3">
    <div class="border text-center pt-1 net-rv">
        <h6 class="fw-bold">Affiliate Offers</h6>
    </div>
    {{-- only take 3 offers hare using take() --}}
    @foreach ($offers->take(3) as $offer)
        <div class="border rounded p-1 mt-3">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <img src="{{ asset('web/latestfile/images/square.jpg') }}"
                        class="img-fluid offers-feature-img rounded">
                    <div class="mx-4 prm-title" style="width: 244px;">
                        <h6 class="prm-net mt-1"><a href="#" class="  text-dark">{{ $offer->title }}</a></h6>
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
        </div>
    @endforeach
    <div class="mt-3 p-2 text-center">
        <a href="#" class="show-more">Show More <i class="fa-solid fa-angle-down"></i></a>
    </div>

</div>
