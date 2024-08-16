@extends('frontend.layouts.app')
@section('content')

<style>
    .clock {
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        text-align: center;
        font-size: 2em;
     }
    .seconds-special {
        color: #21E786;
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        font-style: italic;
    }
</style>

<div class="car-details-header-section sticky-header-livebidding d-block d-sm-none">
        <div class="d-flex max-w-850 justify-content-between gap-md-3 gap-2">
            <div class="d-flex flex-md-row flex-column">
                <div class="text-header">Auction List: </div>
                <div class="font-600 text-black font-termina text-uppercase sub-header-text-livebidding">
                    {{ $carlivebidding->veh_car_model ?? ''}}
                </div>
            </div>
            <div class="d-flex flex-md-row flex-column">
                <div class="text-header">Participants: </div>
                <div class="font-600 font-termina text-black text-uppercase sub-header-text-livebidding" id="no_of_partipants">
                </div>

            </div>
            <div class="d-flex flex-md-row flex-column">
                <div class="text-header">Units: </div>
                <div class="font-600 font-termina text-black text-uppercase sub-header-text-livebidding">149</div>
            </div>

        </div>
    </div>


    <!-- car details-->
    <section class="pt-50 pb-lg-4 ">
        <div class="container">
            <div class="car-bid-detail-secion">
                <!-- top head section -->
                <div class="car-details-header-section d-none d-sm-block">
                    <div class="d-flex max-w-850 justify-content-between gap-md-3 gap-2">
                        <div class="d-flex flex-md-row flex-column">
                            <div class="text-header">Auction List: </div>
                            <div class="font-600 text-black font-termina text-uppercase">
                            {{ $carlivebidding->veh_car_model ?? ''}}
                            </div>
                        </div>
                        <div class="d-flex flex-md-row flex-column">
                            <div class="text-header">Participants: </div>
                            <div id="no_of_participants" class="font-600 font-termina text-black text-uppercase"></div>
                        </div>
                        <div class="d-flex flex-md-row flex-column">
                            <div class="text-header">Units: </div>
                            <div class="font-600 font-termina text-black text-uppercase">149</div>
                        </div>

                    </div>
                </div>

                <div class="ps-lg-3">
                    <!-- row -->
                    <div class="row ">

                        <!-- left section -->
                        <div class="col-lg-8">
                            <div class="py-1 px-1 py-4">

                            <!-- display images -->
                                <div class="owl-carousel owl-theme mx-0 px-0 position-relative" id="slider-3">
                                    @php
                                        $carMedia = $carlivebidding->carMedia->where('type', 'image_form1')->first(); 
                                    @endphp
                                    @if($carMedia && $carMedia->images)
                                        @php
                                            $imagePaths = explode(',', $carMedia->images);
                                        @endphp
                                        @foreach($imagePaths as $image)
                                            <div class="item">
                                                <div class="slider-ratio ag-photo-gallery_item ag-photo-gallery_item__wide">
                                                    <figure class="ag-photo-gallery_figure">
                                                        <a href="{{ asset($image) }}" data-fancybox="gallery" data-caption="Car Image">
                                                            <img src="{{ asset($image) }}" class="d-block w-100 h-100" alt="Car Image">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                                <!-- car name section -->
                                <div class="car-name mt-25 text-black text-uppercase">
                                {{ $carlivebidding->veh_car_model ?? ''}}
                                </div>
                                <div class="pt-lg-25 pt-2 d-flex lot-no justify-content-between color-darkGreen">
                                    <div>
                                        Lot No: <span class="font-600">{{ $carlivebidding->carAuction->lot_number ?? ''}}</span>
                                    </div>
                                    <div class="font-600" id="on_reserve">
                                        On Reserve
                                    </div>
                                </div>
                                <!-- show in lg screen -->


                                <div class="pt-4 h-100 d-lg-none d-block position-relative">

                                    <div id="live-success" class="success-popup">
                                        Your Bid Has Been Successfully Placed!
                                    </div>
                                    <div id="bid-done-alert" class="bid-done">
                                        <div class="mb-10">
                                            Congratulations! You've Won the Bid!
                                        </div>
                                        <a href="/cart.php" class="text-black  font-800">
                                            Proceed to Checkout
                                        </a>
                                    </div>

                                    <!-- progress bar -->
                                    <div class="text-center">
                                        <svg width="200" height="200" viewBox="0 0 250 250" class="circular-progress">
                                            <circle class="bg"></circle>
                                            <circle class="fg">
                                            </circle>
                                            <text x="50%" y="35%" text-anchor="middle" dominant-baseline="middle"
                                                class="minnesato-text">MINNESATO</text>
                                            <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle"
                                                fill="#21E786" class="aed-text"> AED 2500
                                            </text>
                                            <text x="50%" y="65%" text-anchor="middle" dominant-baseline="middle"
                                                class="minnesato-text">BID
                                                !</text>
                                        </svg>
                                    </div>

                                    <div class="d-sm-block d-none">
                                        <div class="d-flex justify-content-center mt-30">
                                            <input id="bid-amount1" type="number" value="250" placeholder="Enter Amount"
                                                class="input-field form-control rounded-pill bid-amount" />
                                            <button class="btn minus-icon decrement-btn">
                                                <img src="{{ asset('frontend/assets/images/icon/minus_icon.svg')}}" />
                                            </button>
                                            <button class="btn plus-icon increment-btn">
                                                <img src="{{ asset('frontend/assets/images/icon/plus_icon.svg')}}" />
                                            </button>
                                        </div>

                                        <!-- place bid button -->
                                        @auth
                                        <input type="hidden" id="car_id" name="car_id" value="{{ $carlivebidding->carAuction->car_id }}">
                                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">

                                        <div class="place-bid">
                                            <button id="btn-place-bid" class="btn place-bid-btn bid-submit w-100">
                                                Place Bid
                                            </button>
                                        </div>
                                        @else
                                        <div class="place-bid">
                                            <button id="btn-place-bid" class="btn place-bid-btn bid-submit w-100">
                                                Login to Place Bid
                                            </button>
                                        </div>
                                        @endauth
                                    </div>

                                    <div class="mt-30 text-center">
                                        <div class="lot-no">
                                            (AED 250 Bid Increment) <a href="#" class="bid-guidelines">Incremental Bid
                                                Guidelines</a>
                                        </div>
                                    </div>

                                    <!-- previous bid section -->
                                    <div class="previous-bid">
                                        Previous Bid
                                    </div>
                                    <div class="p-10">
                                        <div class="d-flex justify-content-between flex-lg-column flex-xl-row gap-3">
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <img src="{{ asset('frontend/assets/images/icon/flag-italy.svg')}}" />
                                                </div>
                                                <div class="pri">
                                                    <div>Country Name</div>
                                                    <div class="font-600 mt-1">AED 20,00</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <img src="{{ asset('frontend/assets/images/icon/flag-italy.svg')}}" />
                                                </div>
                                                <div class="pri">
                                                    <div>Country Name</div>
                                                    <div class="font-600 mt-1">AED 22,00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- /show in lg screen -->

                                <!-- for tag section -->
                                <div class="pt-25 d-flex scroll-x gap-md-3 gap-2">

                                    <a class="btn btn-tag" href="#">Ending Soon</a>
                                    <a class="btn btn-tag" href="#">Accident Free</a>
                                    <a class="btn btn-tag" href="#">GCC Specs</a>
                                    <a class="btn btn-tag" href="#">Warranty Available</a>

                                </div>

                                <!-- for vichecle details -->
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <h2 class="car-overv" Car Overview>Vehicle Details</h2>
                                        <input type="hidden" name="car_id" id="car_id" value="{{ $carlivebidding->id ?? '' }}">
                                    </div>
                                    <div class="col-lg-12 pt-25">

                                        <div class="row gx-5 gy-4">

                                            <div class="col-lg-6">

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Title</div>
                                                        <div class="right-text">
                                                         {{ $carlivebidding->title ?? ''}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">VIN Number</div>
                                                        <div class="right-text">
                                                            {{ $carlivebidding->veh_vin_number ?? ''}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Title Code</div>
                                                        <div class="right-text">{{ $carlivebidding->CarTitle->name ?? ''}}

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Vehicle Type</div>
                                                        <div class="right-text">
                                                        {{ $carlivebidding->VehicleType->name ?? ''}}

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Key Availability</div>
                                                        <div class="right-text">
                                                            {{ $carlivebidding->VehicleNoofKeys->no_of_keys ?? ''}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Year</div>
                                                        <div class="right-text"> {{ $carlivebidding->veh_year ?? ''}} </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Primary Damage</div>
                                                        <div class="right-text">{{ $carlivebidding->primary_damage ?? '' }}
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Color</div>
                                                        <div class="right-text">{{ $carlivebidding->CarColor->name ?? '' }}</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">No Of Cylinder</div>
                                                        <div class="right-text">{{ $carlivebidding->vehicleNoOfCylinder->size ?? '' }}</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Transmission</div>
                                                        <div class="right-text">{{ $carlivebidding->vehicleTransmission->name ??'' }}</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Interior Trim</div>
                                                        <div class="right-text">{{ $carlivebidding->vehicleInterior->name ?? '' }}</div>
                                                    </div>
                                                </div>

                                                <div class="list">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="left-text">Highlights</div>
                                                        <div class="right-text w-225">{{ $carlivebidding->vehicle_highlights ?? '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- right section -->

                        <div class="col-lg-4 d-lg-block d-none">
                            <div class="py-4 box-shadow-left-div h-100 position-relative">

                                <div id="live-success" class="success-popup">
                                    Your Bid Has Been Successfully Placed!
                                </div>
                                <div id="bid-done-alert" class="bid-done">
                                    <div class="mb-10">
                                        Congratulations! You've Won the Bid!
                                    </div>
                                    <a href="/cart.php" class="text-black  font-800">
                                        Proceed to Checkout
                                    </a>
                                </div>

                                <!-- progress bar -->
                                <div class="text-center">
                                    <svg width="200" height="200" viewBox="0 0 250 250" class="circular-progress">
                                        <circle class="bg"></circle>
                                        <circle class="fg"></circle>
                                        <text x="50%" y="30%" text-anchor="middle" dominant-baseline="middle"
                                            class="minnesato-text">MINNESATO</text>
                                        <text x="50%" y="45%" text-anchor="middle" dominant-baseline="middle"
                                            fill="#21E786" class="aed-text" id="current_bid_price">AED 
                                        
                                        </text>
                                        <text x="50%" y="60%" text-anchor="middle" dominant-baseline="middle"
                                            class="minnesato-text">BID !</text>
                                        <text x="50%" y="75%" text-anchor="middle" fill="#21E786" id="countdown"
                                            dominant-baseline="middle"
                                            class="text-18 font-montserrat font-800 fst-italic"></text>
                                    </svg>

                                    <input type="hidden" name="hidden_bid_price" id="hidden_bid_price">
                                    <input type="hidden" name="auction_date" id="auction_date" value="{{ $carlivebidding->carAuction->auction_date ?? '' }}">
                                    <input type="hidden" name="auction_time"  id="auction_time" value="{{ $carlivebidding->carAuction->auction_time ?? '' }}">                            
                                </div>

                                <!-- input field and button -->
                                <div class="d-flex justify-content-center mt-30">
                                    <input id="new_bid_price" type="number" placeholder="Enter Amount"
                                        class="input-field form-control rounded-pill bid-amount" disabled/>
                                    <button class="btn minus-icon decrement-btn">
                                        <img src="{{ asset('frontend/assets/images/icon/minus_icon.svg')}}" />
                                    </button>
                                    <button class="btn plus-icon increment-btn">
                                        <img src="{{ asset('frontend/assets/images/icon/plus_icon.svg')}}" />
                                    </button>
                                </div>

                                <!-- place bid button -->
                                @auth
                                <div class="place-bid">
                                    <button id="btn-placed-bid" class="btn place-bid-btn bid-submit w-100">
                                        Place Bid
                                    </button>
                                </div>
                                @else
                                <div class="place-bid">
                                   
                                    <a href="{{ route('user.login') }}" class="btn place-bid-btn bid-submit w-100">Login to Place Bid</a>
                                </div>
                                @endauth
                                <div class="mt-30 text-center">
                                    <div class="lot-no">
                                        (AED 250 Bid Increment) <a href="#" class="bid-guidelines">Incremental Bid
                                            Guidelines</a>
                                    </div>
                                </div>

                                <!-- previous bid section -->
                                <div class="previous-bid">
                                    Previous Bid
                                </div>
                                <div class="p-10">
                                    <div class="d-flex justify-content-between flex-lg-column flex-xl-row gap-3">
                                        <div class="d-flex gap-2">
                                            <div>
                                                <img src="{{ asset('frontend/assets/images/icon/flag-italy.svg')}}" />
                                            </div>
                                            <div class="pri">
                                                <div>Country Name</div>
                                                <div class="font-600 mt-1">AED 20,00</div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <div>
                                                <img src="{{ asset('frontend/assets/images/icon/flag-italy.svg')}}" />
                                            </div>
                                            <div class="pri">
                                                <div>Country Name</div>
                                                <div class="font-600 mt-1">AED 22,00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- place bid secion  -->
    <section class="p-1 pb-4 d-lg-block d-none">
        <div class="container">
            <div class="d-flex flex-column gap-3">
                <div class="car-bid-detail-secion p-10">
                    <div class="row gx-xl-5 gx-lg-3">
                        <div class="col-lg-2">
                            <div class="car-bid-img">
                                <img src="{{ asset('frontend/assets/images/livebidding/car8.png')}}" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-lg-4 col-xl-3">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4">
                            <div class="d-flex align-items-center h-100 gap-xl-5 gap-lg-3">
                                <button class="btn place-bid-btn p-3 w-100 max-w-250">
                                    Next Bid
                                </button>

                                <div class="form-check">
                                    <input type="checkbox" id="customCheckbox-16"
                                        class="custom-checkbox form-check-input" checked>
                                    <label for="customCheckbox-16" class="form-check-label"></label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="car-bid-detail-secion p-10">
                    <div class="row gx-xl-5 gx-lg-3">
                        <div class="col-lg-2">
                            <div class="car-bid-img">
                                <img src="{{ asset('frontend/assets/images/product/product-1.jpg')}}" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4">
                            <div class="d-flex align-items-center h-100 gap-xl-5 gap-lg-3">
                                <button class="btn not-eligible-btn p-3 w-100  max-w-250">
                                    Not Eligible
                                </button>
                                <button class="btn bg-darkRed p-0 rounded-circle ms-4">
                                    <img src="{{ asset('frontend/assets/images/icon/not_eligible.svg')}}" />
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="car-bid-detail-secion p-10">
                    <div class="row gx-xl-5 gx-lg-3">
                        <div class="col-lg-2">
                            <div class="car-bid-img">
                                <img src="{{ asset('frontend/assets/images/livebidding/car5.png')}}" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4">
                            <div class="d-flex align-items-center h-100 gap-xl-5 gap-lg-3">
                                <button class="btn place-bid-btn p-3 w-100  max-w-250">
                                    15 Mins
                                </button>
                                <div class="form-check">
                                    <input type="checkbox" id="customCheckbox-14"
                                        class="custom-checkbox form-check-input" checked>
                                    <label for="customCheckbox-14" class="form-check-label"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    <!-- 
                <div class="car-bid-detail-secion p-10">
                    <div class="row gx-xl-5 gx-lg-3">
                        <div class="col-lg-2">
                            <div class="car-bid-img">
                                <img src="{{ asset('frontend/assets/images/livebidding/car6.png')}}" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4">
                            <div class="d-flex align-items-center h-100 gap-xl-5 gap-lg-3">
                                <button class="btn place-bid-btn p-3 w-100 max-w-250">
                                    30 Mins
                                </button>
                                <div class="form-check">
                                    <input type="checkbox" id="customCheckbox-13"
                                        class="custom-checkbox form-check-input" checked>
                                    <label for="customCheckbox-13" class="form-check-label"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->
            </div>
        </div>
    </section>


    <!-- show card in befor lg  -->

    <section class="d-lg-none d-block car-bid-show-lg">
        <div class="container pb-4 pt-2">
            <div class="owl-carousel owl-theme mx-0 px-0" id="slider-5">


                <div class="item">
                    <div class="car-bid-cart">
                        <div class="car-bid-img position-relative">
                            <img src="{{ asset('frontend/assets/images/livebidding/car8.png')}}" class="object-fit-cover" />
                            <div class="form-check star-position-sm">
                                <input type="checkbox" id="customCheckbox16" class="custom-checkbox form-check-input"
                                    checked>
                                <label for="customCheckbox16" class="form-check-label"></label>
                            </div>
                        </div>

                        <div class="pt-4">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN1234589</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="text-center h-100 gap-3 px-3">
                                <button class="btn place-bid-btn p-3 w-100">
                                    Next Bid
                                </button>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="car-bid-cart">
                        <div class="car-bid-img position-relative">
                            <img src="assets/images/product/product-1.jpg" class="object-fit-cover" />
                            <div class="star-position-sm">
                                <button class="btn bg-darkRed p-0 rounded-circle ms-4">
                                    <img src="{{ asset('frontend/assets/images/icon/not_eligible.svg')}}" />
                                </button>
                            </div>
                        </div>

                        <div class="pt-4">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="text-center px-3 h-100 gap-3">
                                <button class="btn not-eligible-btn p-3 w-100">
                                    Not Eligible
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="car-bid-cart">
                        <div class="car-bid-img position-relative">
                            <img src="{{ asset('frontend/assets/images/livebidding/car5.png')}}" class="object-fit-cover" />
                            <div class="form-check star-position-sm">
                                <input type="checkbox" id="customCheckbox17" class="custom-checkbox form-check-input"
                                    checked>
                                <label for="customCheckbox17" class="form-check-label"></label>
                            </div>
                        </div>

                        <div class="pt-4">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="text-center px-3 h-100 gap-3">
                                <button class="btn place-bid-btn p-3 w-100 ">
                                    15 Mins
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="car-bid-cart">
                        <div class="car-bid-img position-relative">
                            <img src="{{ asset('frontend/assets/images/livebidding/car6.png')}}" class="object-fit-cover" />
                            <div class="form-check star-position-sm">
                                <input type="checkbox" id="customCheckbox18" class="custom-checkbox form-check-input"
                                    checked>
                                <label for="customCheckbox18" class="form-check-label"></label>
                            </div>
                        </div>

                        <div class="pt-4">
                            <div class="model-name">
                                AVEO LS AUTOMATIC A/A
                            </div>
                            <div class="car-company-name">
                                Toyota
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Lot No</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Year</div>
                                    <div class="right-text">2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Current Bid</div>
                                    <div class="right-text">AED 25,000</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Body Type</div>
                                    <div class="right-text">LTN123456</div>
                                </div>
                            </div>
                            <div class="list">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Engine Type</div>
                                    <div class="right-text">Inline-4</div>
                                </div>
                            </div>
                            <div class="list mb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="left-text">Transmission</div>
                                    <div class="right-text">Automatic</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="text-center px-3 h-100 gap-3">
                                <button class="btn place-bid-btn p-3 w-100">
                                    30 Mins
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div
        class="container position-fixed bottom-0 blur-background left-0 z-3 sticky-field-livebidding d-sm-none d-block">
        <div class="d-flex gap-3  align-items-center py-2 justify-content-between">

            <!-- input field and button -->
            <!-- <div class="d-flex justify-content-center ">
                <input id="bid-amount3" type="number" value="250" placeholder="Enter Amount"
                    class="input-field form-control rounded-pill bid-amount" />
                <button class="btn minus-icon decrement-btn">
                    <img src="assets/images/icon/minus_icon.svg" />
                </button>
                <button class="btn plus-icon increment-btn">
                    <img src="assets/images/icon/plus_icon.svg" />
                </button>
            </div> -->

            <div class="d-flex month-year-input rounded-pill p-0 ps-2">
                <!-- <input type="number" class="form-control input-field-checkout-month"
                                            placeholder="MM"> -->
                <input type="number" id="bid-amount3" type="number" value="250" placeholder="Enter Amount"
                    class="form-control bg-transparent rounded-pill w-100 input-field-checkout-year bid-amount">
                <div class="d-flex">
                    <button class="btn minus-icon decrement-btn">
                        <img src="{{ asset('frontend/assets/images/icon/minus_icon.svg')}}" />
                    </button>
                    <button class="btn plus-icon increment-btn">
                        <img src="{{ asset('frontend/assets/images/icon/plus_icon.svg')}}" />
                    </button>
                </div>
            </div>

            <!-- place bid button -->
            <div class="place-bid pt-0 m-0">
                <button class="btn place-bid-btn bid-submit w-100 min-w-content px-3">
                    Place Bid

                </button>
            </div>
        </div>
    </div>

      <!--get car data--->
      <script>
        $(document).ready(function(){

        var carId = $('#car_id').val();
        var userId = $('#user_id').val();

        $.ajax({
            type: 'post',
            url: '{{ route('get_car_data') }}', 
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                car_id: carId
            },
            success: function(response) {
                var updatedBidPrice = response.current_bid_price;
                // alert(updatedBidPrice);
                var bidStartPrice = response.bid_start_price;
                var reservePrice = response.reserve_price;
                // alert(reservePrice);

                // show reserved if meets condition
                if (updatedBidPrice === reservePrice || Math.abs(updatedBidPrice - reservePrice) <= 500) {
                    var hey = "Reserved";
                    $('#on_reserve').text(hey);
                } else {
                    var hey = "Not Reserved";
                    $('#on_reserve').text(hey);
                }

                                
                if (updatedBidPrice) {
                    var updatedBidPriceWithAddition = parseFloat(updatedBidPrice);
                  
                    if (updatedBidPrice <= 50000) {
                            updatedBidPriceWithAddition += 250;
                    } else if (updatedBidPrice >= 50000 && updatedBidPrice < 100000) {
                            updatedBidPriceWithAddition += 500;
                    } else {
                            updatedBidPriceWithAddition += 1000;
                    }

                    $('#current_bid_price').text(updatedBidPrice);
                    // $('#current_bid_price_li').text(updatedBidPrice);
                    $('#new_bid_price').val(updatedBidPriceWithAddition);
                    $('#hidden_bid_price').val(updatedBidPriceWithAddition);

                    // bid now model
                    // $('#new_bid_price_id').val(updatedBidPriceWithAddition);
                    // $('#hidden_bid_price_id').val(updatedBidPriceWithAddition);

                } else {
                    var updatedBidPriceWithAdditionBidstartPrice = parseFloat(bidStartPrice);

                    if (bidStartPrice < 50000) {
                        updatedBidPriceWithAdditionBidstartPrice += 250;
                    } else if (bidStartPrice < 100000) {
                        updatedBidPriceWithAdditionBidstartPrice += 500;
                    } else {
                        updatedBidPriceWithAdditionBidstartPrice += 1000;
                    }
                    
                    $('#current_bid_price').text('AED ' + bidStartPrice);
             
                    $('#hidden_bid_price').val(updatedBidPriceWithAdditionBidstartPrice);

                    //bid now model
          
                    // $('#hidden_bid_price_id').val(updatedBidPriceWithAdditionBidstartPrice);

                }
                $('#no_of_participants').text(response.no_of_bids);
                // alert(response.no_of_bids);
            },
            
            error: function(error) {
                console.log(error);
            }
         });
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            var auctionDate = document.getElementById('auction_date').value;
            var auctionTime = document.getElementById('auction_time').value;
            var auctionDateTime = new Date(auctionDate + ' ' + auctionTime).getTime();
            var currentTime = Date.now();
            var timeRemaining = auctionDateTime - currentTime;
            
            if (timeRemaining > 0 && timeRemaining <= 15000) {
                startCountdown(timeRemaining);
            } else if (timeRemaining <= 0) {
                document.getElementById('countdown').textContent = 'Timer Over';
            } else {
                document.getElementById('countdown').textContent = 'Waiting...';
                var timeinterval = setInterval(function() {
                    var currentTime = Date.now();
                    timeRemaining = auctionDateTime - currentTime;

                    if (timeRemaining <= 15000 && timeRemaining > 0) {
                        clearInterval(timeinterval);
                        startCountdown(timeRemaining);
                    } else if (timeRemaining <= 0) {
                        clearInterval(timeinterval);
                        document.getElementById('countdown').textContent = 'Timer Over';
                    }
                }, 1000);
            }
        });

        function startCountdown(timeRemaining) {
            var clock = document.getElementById('countdown');
            var timeinterval;

            function updateClock() {
                timeRemaining -= 1000;

                if (timeRemaining <= 0) {
                    clearInterval(timeinterval);
                    clock.textContent = 'Timer Over';
                } else {
                    var seconds = Math.floor((timeRemaining / 1000) % 60);
                    clock.textContent = seconds + ' SECS';
                }
            }

            updateClock();
            timeinterval = setInterval(updateClock, 1000);
        }
    </script>

    <!-- //placebid -->
    <script>
    $(document).ready(function(){
        $('#btn-placed-bid').on('click', function(event){
            event.preventDefault();
           
            var carId = $('#car_id').val();
            var userId = $('#user_id').val();
            var hiddenBidPrice = $('#hidden_bid_price').val();

            $.ajax({
                type: 'POST',
                url: '{{ route('user.store_bid') }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    hidden_bid_price: hiddenBidPrice,
                    car_id:carId,
                    user_id:userId
                },
                success: function(response) {
           
                    alert(response.message)
                    window.location.href = '{{ route("user.pricingplan") }}';
                 
                },
                error: function(xhr, status, error) {
                  console.log(error);
                //   window.location.href = '{{ route('user.login') }}';
                }
            }); 
        });
    });
    </script>
       
    @endsection