@extends('frontend.layouts.app')
@section('content')

    
 <!-- Hero Section -->
 <section class="hero-section z-0" style="">
        <div class="container">
            <div class="row m-auto">
                <div class="col-lg-5 col-12 order-2 order-lg-1 py-82 animated wow fadeInLeft ">
                    <h1 class="hero-h1">Unleash the Power of Choice: Your Dream Car Awaits!</h1>
                    <p class="hero-pera">Elevate your drive with Website Name. Explore diverse car auctions, bid, and
                        win your dream ride. Unleash the thrill – start now!</p>
                    <button type="button" class="btn hero-btn">Explore Auctions</button>

                </div>
                <!-- <div class="col-lg-7 col-12 order-1 order-lg-2  animated wow fadeInRight text-end position-relative">

                    <img class="w-100 img-hero" src="assets/images/background/cars.png">
                    <div class="video-btn" data-bs-toggle="modal" data-bs-target="#paymentmethod">
                        <img src="assets/images/icon/slow_motion_video.svg" />
                    </div>

                </div> -->
            </div>
        </div>
    </section>
    <!-- / Hero Section -->


    <!-- Section Filter -->
    <section>

        <div class="row mx-0 px-0">
            <div class="col-lg-12">
                <div class="title-section text-center animated wow fadeInUp delay-1s">
                    <div class="heading">Rev Up the Excitement</div>
                    <p class="title-p">Live Car Auction Showcase!</p>
                </div>
            </div>
        </div>


        <div class="onscroll-fixed">
            <div class="fillter-btn bg-f7">

                <div class="container">
                    <div class="row mx-0 px-0 ">
                        <div class="col-xl-5 col-lg-6 col-12">

                            <div class="border-end-lg mt-3 text-center d-none d-lg-flex">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <div class="dropdown">
                                        <button id="" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Make
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown">
                                            @foreach($carmakes as $carmake)
                                                <li><a class="dropdown-item text-gray font-termina font-14 font-500 car-select"
                                                 data-field="veh_car_make_id" data-id="{{ $carmake['id'] }}" data-value="{{ $carmake->name }}">{{ $carmake->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="" role="group">
                                        <button id="" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Model
                                        </button>
                                        <ul class="dropdown-menu " aria-labelledby="dropdown">
                                            @foreach($carmodels as $carmodel)
                                                <li><a class="dropdown-item text-gray font-termina font-14 font-500 car-select"
                                                 data-id="{{ $carmodel }}" data-value="{{ $carmodel }}" data-field="veh_car_model" >{{ $carmodel }}</a></li>
                                            @endforeach
                                        </ul>
                               
                                    </div>
                                    <div class="" role="group">
                                        <button id="" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Year
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown">
                                            @foreach($caryears as $caryear)
                                                <li><a class="dropdown-item text-gray font-termina font-14 font-500 car-select"
                                                 data-id="{{ $caryear }}" data-value="caryear" data-field="veh_year">{{ $caryear }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="" role="group">
                                        <button id="" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Body Style
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown">
                                            @foreach($vehiclebodytype as $vehbodytype)
                                                <li><a class="dropdown-item text-gray font-termina font-14 font-500 car-select"
                                                data-field="body_type" data-id="{{ $vehbodytype['id'] }}" data-value="{{ $vehbodytype->name }}">{{ $vehbodytype->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7 col-lg-6 col-12 d-flex px-0">

                            <div class="d-flex d-lg-none gap-2 align-items-center pe-2">
                                <img src="{{ asset('frontend/assets/images/icon/filter-2.svg')}}" />
                                <div class="font-17 font-montserrat fw-bold">
                                    Filters
                                </div>
                            </div>

                            <i class="button--left fa-solid fa-chevron-left d-lg-block d-none" id="slideBack"></i>

                            <div class="scroll-x mt-3 mx-2 gap-lg-0 gap-3">
                                <div class="btn-group d-inline-flex d-lg-none position-static" role="group" aria-label="Button group with nested dropdown">
                                    <div>
                                        <button id="" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Make
                                        </button>
                                        <ul class="dropdown-menu hello-2" aria-labelledby="dropdown">
                                            <li><a class="dropdown-item text-gray font-termina font-14 font-500"
                                                    href="#">Dropdown link</a></li>
                                            <li><a class="dropdown-item text-gray font-termina font-14 font-500"
                                                    href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                    <div role="group">
                                        <button id="" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Model
                                        </button>
                                        <ul class="dropdown-menu hello-2" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item text-gray font-termina font-14 font-500"
                                                    href="#">Dropdown link</a></li>
                                            <li><a class="dropdown-item text-gray font-termina font-14 font-500"
                                                    href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                    <div role="group">
                                        <button id="" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Year
                                        </button>
                                        <ul class="dropdown-menu hello-2" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item text-gray font-termina font-14 font-500"
                                                    href="#">Dropdown link</a></li>
                                            <li><a class="dropdown-item text-gray font-termina font-14 font-500"
                                                    href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                    <div role="group">
                                        <button id="" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Body Style
                                        </button>
                                        <ul class="dropdown-menu hello-2" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item text-gray font-termina font-14 font-500"
                                                    href="#">Dropdown link</a></li>
                                            <li><a class="dropdown-item text-gray font-termina font-14 font-500"
                                                    href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="btn-group ml-20" role="group"
                                    aria-label="Basic checkbox toggle button group">

                                    <div class="at">
                                        <input type="checkbox" class="btn-check filter-slider" id="btncheck1" name="ending_soon" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btncheck1">Ending Soon</label>
                                    </div>

                                    <div class="at">
                                        <input type="checkbox" class="btn-check filter-slider" id="btncheck2" name="accident_free" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btncheck2">Accident Free</label>
                                    </div>

                                    <div class="at">

                                        <input type="checkbox" class="btn-check filter-slider" id="btncheck3" name="gcc_specs" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btncheck3">GCC Specs</label>
                                    </div>

                                    <div class="at">
                                        <input type="checkbox" class="btn-check filter-slider" id="btncheck4" name="warranty_available" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btncheck4">Warranty
                                            Available</label>
                                    </div>

                                    <div class="at">
                                        <input type="checkbox" class="btn-check filter-slider" id="btncheck5" name="bank_loan_available" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btncheck5">Bank Loan
                                            Available</label>
                                    </div>
                                </div>
                            </div>
                            <i class="button--right fa-solid fa-chevron-right d-lg-block d-none" id="slide"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---/Row---->

        <!----Row product Slider--->
        <div class="container scroll-none">

            <div class="row mx-0 px-0 mt-50 carListingfilter" >
               
                <div class="col-lg-12 mx-0 px-0" >
                  
                    <div class="owl-carousel owl-theme mx-0 px-0" id="slider-1">
                    
                         @foreach($cars as $car)
                      
                        <div class="item">
                            <div class="position-relative">
                                <script>
                                    var detailsRoute = "{{ route('details', ':id') }}";
                                </script>
                                <div class="inner-box redirect-details" data-car-id="{{ $car->id }}">
                                    <div class="car-modal tag">MUV</div>
                                    <div class="product-img-box">
                                        @php
                                            $carMedia = $car->carMedia->where('type', 'image_form1')->first(); 
                                        @endphp

                                        @if($carMedia && $carMedia->images)
                                            @php
                                                $imagePaths = explode(',', $carMedia->images);
                                            @endphp
                                            @foreach($imagePaths as $image)
                                                <img class="w-100" src="{{ asset($image) }}" alt="">
                                                @break 
                                            @endforeach
                                        @else
                                            <img class="w-100" src="{{ asset('frontend/assets/images/product/product-11.png') }}" alt="">
                                        @endif       
                                        <!-- <img class="w-100" src="{{ asset('frontend/assets/images/product/product-3.jpg')}}" alt=""> -->
                                        <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                         {{ $car->carAuction->estimated_market_value ?? '' }}</span>
                                        </div>

                                    </div>

                                    <div class="details">
                                        <div class="model-name">{{ $car->veh_car_model }}</div>
                                        <div class="brand-name">{{ $car->vehicleMake->name?? '' }}</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}">{{ $car->veh_year }} 
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}">{{ $car->veh_mileage }} KM
                                                     <!-- {{ $car->vehicleTransmission->name??'' }} -->
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}">{{ $car->title }} 
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}"> {{ $car->vehicleregionalspec->name ?? '' }}
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}"> {{ $car->vehicleTransmission->name ?? '' }}
                                                </span>
                                            </div>

                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}">{{ $car->vehicleNoOfCylinder->size ?? '' }}
                                                </span>
                                            </div>

                                            <div class="col-12 m-auto">
                                                <div class="divider"> </div>
                                            </div>


                                            <div class="col-6 cost-box">
                                                <div class="pri">Repair Cost:</div>
                                                <div class="amou d-flex justify-content-between">
                                                    AED {{ $car->carAuction->estimated_repair_cost ?? '' }}
                                                </div>
                                            </div>

                                            <div class="col-6 cost-box">
                                                <div class="pri">Current Bid Price:</div>
                                                <div class="amou d-flex justify-content-between">
                                                    AED {{ $car->carAuction->current_bid_price ?? '' }}
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <a href="#" class="btn bid-btn">Bid Now</a>
                                            </div>

                                            <div class="col-12 text-center">
                                                <a href="#" class="ctm-link"> Buy Now  {{ $car->carAuction->buy_now_price ?? '' }} </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="like-car">
                                    <div class="form-check">
                                        <input type="checkbox" id="customCheckBox13"
                                            class="custom-checkbox form-check-input">
                                        <label for="customCheckBox13" class="form-check-label"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        
                    </div>
                    <!-----owl-carousel---->
                 
                </div>
              
                <!---/col-12----->
            </div>
            <!----/Row----->

        
            <!----/Row----->
            <!-- 
            <div class="row mx-0 px-0 mb-50">

                <div class="col-lg-12 mx-0 px-0">

                    <div class="owl-carousel owl-theme mx-0 px-0" id="slider-2">

                        <div class="item">
                            <div class="position-relative">
                                <div class="inner-box redirect-details">
                                    <div class="car-modal tag">MUV</div>
                                    <div class="product-img-box">
                                        <img class="w-100" src="{{ asset('frontend/assets/images/product/product-2.jpg')}}" alt="">
                                        <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                                30,000</span>
                                        </div>

                                    </div>

                                    <div class="details">
                                        <div class="model-name">AVEO LS AUTOMATIC A/A</div>
                                        <div class="brand-name">Toyota</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/Kms.png')}}"> 53000 Kms
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/manual.png')}}"> Manual
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/cc.png')}}"> 22,231 cc
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/petrol.png')}}"> Petrol
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/owner.png')}}"> First Owner
                                                </span>
                                            </div>

                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/car-door.png')}}"> 5 Passengers
                                                </span>
                                            </div>

                                            <div class="col-12 m-auto">
                                                <div class="divider"> </div>
                                            </div>


                                            <div class="col-6 cost-box">
                                                <div class="pri">Repair Cost:</div>
                                                <div class="amou d-flex justify-content-between">
                                                    AED 3,500
                                                </div>
                                            </div>

                                            <div class="col-6 cost-box">
                                                <div class="pri">Current Bid Price:</div>
                                                <div class="amou d-flex justify-content-between">
                                                    AED 25,000
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <a href="#" class="btn bid-btn">Bid Now</a>
                                            </div>

                                            <div class="col-12 text-center">
                                                <a href="#" class="ctm-link"> Buy Now $XXXX</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="like-car">
                                    <div class="form-check">
                                        <input type="checkbox" id="customCheckBox18"
                                            class="custom-checkbox form-check-input">
                                        <label for="customCheckBox18" class="form-check-label"></label>
                                    </div>
                                </div>
                            </div>
                        </div>


                     


                    </div>
                    <!-----owl-carousel---->
                </div>
                <!---/col-12----->

                <!-- <div class="col-lg-12 mt-50 mx-auto text-center"><button class="btn-load-more">
                        Load More
                        <img src="{{ asset('frontend/assets/images/icon/Down2.svg')}}" class="ms-1" />
                    </button></div> -->
                    <div class="col-lg-12 mt-50 mx-auto text-center"><button class="btn-load-more">
                         Load More
                        <img src="{{ asset('frontend/assets/images/icon/Down2.svg')}}" class="ms-1" />
                    </div>

            <!-- </div> -->
            <!----/Row----->


        </div>
        <!----/container----->
    </section>
    <!----/section----->


    <section class="how-it">

        <div class="row mx-0 px-0 mx-auto">
            <div class="col-lg-12">

                <div class="title-section text-center pb-0 animated wow fadeInUp delay-0.5s">
                    <div class="heading">How It WorKs</div>
                    <p class="">Live Car Auction Showcase!</p>
                </div>
            </div>
        </div>

        <div class="row mx-0 px-0 mx-auto bg-howit">
            <div class="col-lg-12 time-line mt-50 mb-50">

                <div class="container">
                    <div class="row mx-auto d-md-flex d-none">

                        <div class="col-lg-2 col-sm-2 col-xs-6 mx-auto text-center hv">
                            <div class="ico-b d-flex justify-content-center align-items-center mb-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question1.svg')}}"></div>
                            <div class="step"> Step:1</div>
                            <div class="explore">Explore Listings</div>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-xs-6 mx-auto text-center hv">

                            <div class="step mt-90"> Step:2</div>
                            <div class="explore">Secure Participation</div>

                            <div class="ico-b d-flex justify-content-center align-items-center mt-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question2.svg')}}"></div>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-xs-6 mx-auto text-center hv">
                            <div class="ico-b d-flex justify-content-center align-items-center mb-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question3.svg')}}"></div>
                            <div class="step"> Step:3</div>
                            <div class="explore">Auction Countdown</div>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-xs-6 mx-auto text-center hv">

                            <div class="step mt-90"> Step:4</div>
                            <div class="explore">Bid with Confidence</div>
                            <div class="ico-b d-flex justify-content-center align-items-center mt-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question4.svg')}}"></div>

                        </div>

                        <div class="col-lg-2 col-sm-2 col-xs-6 mx-auto text-center hv">
                            <div class="ico-b d-flex justify-content-center align-items-center mb-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question5.svg')}}"></div>
                            <div class="step"> Step:5</div>
                            <div class="explore">Victory Lap</div>
                        </div>

                    </div>


                    <!-- show in before xl  -->

                    <div class="row mx-auto d-md-none d-flex gy-5">

                        <div class="col-lg-2 col-sm-4 col-6 mx-auto text-center hv">
                            <div class="ico-b d-flex justify-content-center align-items-center mb-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question1.svg')}}"></div>
                            <div class="step"> Step:1</div>
                            <div class="explore">Explore Listings</div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mx-auto text-center hv">
                            <div class="ico-b d-flex justify-content-center align-items-center mb-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question2.svg')}}"></div>
                            <div class="step"> Step:2</div>
                            <div class="explore">Secure Participation</div>


                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mx-auto text-center hv">
                            <div class="ico-b d-flex justify-content-center align-items-center mb-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question3.svg')}}"></div>
                            <div class="step"> Step:3</div>
                            <div class="explore">Auction Countdown</div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mx-auto text-center hv">
                            <div class="ico-b d-flex justify-content-center align-items-center mb-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question4.svg')}}"></div>
                            <div class="step"> Step:4</div>
                            <div class="explore">Bid with Confidence</div>


                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mx-auto text-center hv">
                            <div class="ico-b d-flex justify-content-center align-items-center mb-35"><img class=""
                                    src="{{ asset('frontend/assets/images/icon/question5.svg')}}"></div>
                            <div class="step"> Step:5</div>
                            <div class="explore">Victory Lap</div>
                        </div>

                    </div>

                    <!-- /show in before xl  -->
                </div>

            </div>
        </div>
    </section>
    <!----/section----->



    <section class="our-customer pt-50 pb-50">

        <div class="container px-0">
            <div class="row mx-0 px-0 mx-auto">

                <div class="col-lg-6 mx-0 px-0 col-12">

                    <div class="section-heading animated wow fadeInUp delay-0.5s">Our Customers Love Us!</div>

                    <div class="section-subheading">Excellent Service! Car Rent Service!</div>
                    <p class="section-pera">We have been using Rentaly for our trips needs for several years now and
                        have always been happy with their service. Their customer support is Excellent Service! and they
                        are always available to help with any issues we have. Their prices are also very competitive.
                    </p>

                    <div class="section-footer">
                        <span class="line"></span><span class="name">Jovan Reels</span>
                    </div>

                </div>
                <!---/col-->


                <div class="row mx-0 px-0">
                    <div class="col-lg-12 mx-0 px-0 pt-50">
                        <h4 class="why-car">Why Cars & Bids</h4>
                    </div>

                    <div class="row gx-4 pt-25">
                        <div class="col-lg-3 col-6">
                            <div class="bids-box">
                                <div class="number-box"><span class="count com">17000</span>+</div>
                                <div class="number-detail">Auctions Completed</div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <div class="bids-box">
                                <div class="number-box">$<span class="count">365M</span>+</div>
                                <div class="number-detail">Value Of Cars Sold</div>
                            </div>
                        </div>



                        <div class="col-lg-3 col-6">
                            <div class="bids-box">
                                <div class="number-box"><span class="count">85</span>%+</div>
                                <div class="number-detail">Sell-Through Rate</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="bids-box">
                                <div class="number-box"><span class="count">475K</span>+</div>
                                <div class="number-detail">Registered Members</div>
                            </div>
                        </div>


                    </div>
                </div>
                <!---/row--->
            </div>
            <!---/inner row---->


        </div>
        <!---/row--->


    </section>
    <!----/section----->




    <section class="url-section pt-50 pb-50">
        <div class="container px-0">
            <div class="row mx-0 px-0 mx-auto gx-lg-2">
                <div class="col-lg-2 col-sm-4 col-6">
                    <h3 class="url-heading"><span class="border-bottom">GCC Specs</span></h3>
                    <ul class="list-item">
                        <li><a href="#">Toyota Land Cruiser</a></li>
                        <li><a href="#">Nissan Patrol</a></li>
                        <li><a href="#">Ford Expedition</a></li>
                        <li><a href="#">Chevrolet Tahoe</a></li>
                        <li><a href="#">Lexus LX</a></li>
                        <li><a href="#">GMC Yukon</a></li>
                        <li><a href="#">BMW X5</a></li>
                        <li><a href="#">Audi Q7</a></li>
                        <li><a href="#">Range Rover</a></li>
                    </ul>
                </div>
                <!----col-lg-2---->


                <div class="col-lg-2 col-sm-4 col-6">
                    <h3 class="url-heading"><span class="border-bottom">American Specs</span></h3>
                    <ul class="list-item">
                        <li><a href="#">Ford Mustang</a></li>
                        <li><a href="#">Chevrolet Camaro</a></li>
                        <li><a href="#">Dodge Challenger</a></li>
                        <li><a href="#">Ford F-150</a></li>
                        <li><a href="#">Chevrolet Silverado</a></li>
                        <li><a href="#">Jeep Wrangler</a></li>
                        <li><a href="#">Toyota Camry</a></li>
                        <li><a href="#">Honda Accord</a></li>
                        <li><a href="#">Tesla Model 3</a></li>
                        <li><a href="#">GMC Sierra</a></li>

                    </ul>
                </div>
                <!----col-lg-2---->


                <div class="col-lg-2 col-sm-4 col-6">
                    <h3 class="url-heading"><span class="border-bottom">European Specs</span></h3>
                    <ul class="list-item">
                        <li><a href="#">Volkswagen Golf</a></li>
                        <li><a href="#">BMW 3 Series</a></li>
                        <li><a href="#">Audi A4</a></li>
                        <li><a href="#">Ford Focus</a></li>
                        <li><a href="#">Peugeot 208</a></li>
                        <li><a href="#">Renault Clio</a></li>
                        <li><a href="#">Volvo XC60</a></li>
                        <li><a href="#">Fiat 500</a></li>
                        <li><a href="#">SEAT Leon</a></li>

                    </ul>
                </div>
                <!----col-lg-2---->

                <div class="col-lg-2 col-sm-4 col-6">
                    <h3 class="url-heading"><span class="border-bottom">Japanese Specs</span></h3>
                    <ul class="list-item">
                        <li><a href="#">Toyota Corolla</a></li>
                        <li><a href="#">Honda Civic</a></li>
                        <li><a href="#">Nissan Skyline</a></li>
                        <li><a href="#">Mazda3</a></li>
                        <li><a href="#">Subaru Impreza</a></li>
                        <li><a href="#">Mitsubishi Lancer</a></li>
                        <li><a href="#">Suzuki Swift</a></li>
                        <li><a href="#">Daihatsu Mira</a></li>
                        <li><a href="#">Lexus IS</a></li>
                        <li><a href="#">Infiniti Q50</a></li>
                    </ul>
                </div>
                <!----col-lg-2---->


                <div class="col-lg-2 col-sm-4 col-6">
                    <h3 class="url-heading"><span class="border-bottom">Korean Specs</span></h3>
                    <ul class="list-item">
                        <li><a href="#">Hyundai Sonata</a></li>
                        <li><a href="#">Kia K5</a></li>
                        <li><a href="#">Hyundai Elantra</a></li>
                        <li><a href="#">Hyundai Tucson</a></li>
                        <li><a href="#">Kia Sorento</a></li>
                        <li><a href="#">Kia Shortage</a></li>
                        <li><a href="#">Genesis G80</a></li>
                        <li><a href="#">Hyundai Santa Fe</a></li>
                        <li><a href="#">Kia Carnival</a></li>
                        <li><a href="#">Genesis GV80</a></li>
                    </ul>
                </div>
                <!----col-lg-2---->



                <div class="col-lg-2 col-sm-4 col-6">
                    <h3 class="url-heading"><span class="border-bottom">Chinese Specs</span></h3>
                    <ul class="list-item">
                        <li><a href="#">Toyota Corolla</a></li>
                        <li><a href="#">Honda Civic</a></li>
                        <li><a href="#">Nissan Skyline</a></li>
                        <li><a href="#">Mazda3</a></li>
                        <li><a href="#">Subaru Impreza</a></li>
                        <li><a href="#">Mitsubishi Lancer</a></li>
                        <li><a href="#">Suzuki Swift</a></li>
                        <li><a href="#">Daihatsu Mira</a></li>
                        <li><a href="#">Lexus IS</a></li>
                        <li><a href="#">Infiniti Q50</a></li>

                    </ul>
                </div>
                <!----col-lg-2---->


            </div>
            <!---/row--->
        </div>
        <!---/container--->
        </div>
    </section>
    <!----/section----->


    <!-- for video modle  -->
    <div class="modal fade" id="paymentmethod" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="paymentmethodLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal model-dialog-addcard thank-you-modal">

            <div class="modal-content border-0 redius-25">

                <div class="modal-body p-20 pt-0">
                    <div class="max-w-414">
                        <img src="assets/images/background/car.gif" />
                    </div>

                </div>

            </div>
        </div>
    </div>
   
    <script>
        
            $(document).on('click', '.redirect-details', function() {
            var carId = $(this).data('car-id');
    
            var detailsUrl = "{{ route('details', ':id') }}".replace(':id', carId);
            window.location.href = detailsUrl;
        });
        
        document.querySelectorAll('.filter-slider').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
    
            var checkedNames = [];
            document.querySelectorAll('.filter-slider:checked').forEach(function(checkedCheckbox) {
                checkedNames.push(checkedCheckbox.getAttribute('name'));
            });
         
            $.ajax({
                url: '{{ route('home.filterslider') }}',
                type: 'get',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {checked_names: checkedNames},
                success: function(response) {
        
            
                    $('.carListingfilter').empty();
                if(response.filteredSlider && response.filteredSlider.length > 0) {
                 $.each(response.filteredSlider, function(index, carauction) {

                 var imageUrl = '{{ asset("frontend/assets/images/product/product-11.png") }}';
                if (carauction.car.car_media && carauction.car.car_media.length > 0) {
                
                
                    for (var i = 0; i < carauction.car.car_media.length; i++) {
                        if (carauction.car.car_media[i].type === 'image_form1') {
                        var imagePaths = carauction.car.car_media[i].images.split(',');
                        imageUrl = '{{ asset(':imagePath') }}'.replace(':imagePath', imagePaths[0]);
                        break;
                        }
                    }   
                }
              
                var carHtml = `  
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    
                        <div class="item">
                            <div class="position-relative">
                     
                                <div class="inner-box redirect-details" data-car-id="${carauction.car.id}">
                                    <div class="car-modal tag">MUV</div>
                                        <div class="product-img-box">
                                            <img class="w-100" src="${imageUrl}" alt="">
                                        <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                         ${carauction ? carauction.estimated_market_value: ''}</span>
                                        </div>
                                    </div>

                                    <div class="details">
                                        <div class="model-name">${carauction.car ? carauction.car.veh_car_model : ''}</div>
                                        <div class="brand-name">${carauction.car.vehiclemake ? carauction.car.vehiclemake.name : ''}</div>
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}">${carauction.car.veh_year ? carauction.car.veh_year:'' }
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}">${carauction.car ? carauction.car.veh_mileage:'' }  KM

                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}">${carauction.car.title ? carauction.car.title:'' }
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}"> ${carauction.car.vehicleregionalspec ? carauction.car.vehicleregionalspec.name : ''}  
                                                </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}">  ${carauction.car.vehicletransmission ? carauction.car.vehicletransmission.name : ''}
                                                </span>
                                            </div>

                                            <div class="col-6">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}"> ${carauction.car.vehiclenoofcylinder ? carauction.car.vehiclenoofcylinder.size : ''}
                                                </span>
                                            </div>

                                            <div class="col-12 m-auto">
                                                <div class="divider"> </div>
                                            </div>


                                            <div class="col-6 cost-box">
                                                <div class="pri">Repair Cost:</div>
                                                <div class="amou d-flex justify-content-between">
                                                    AED ${carauction ? carauction.estimated_repair_cost : ''}
                                                </div>
                                            </div>

                                            <div class="col-6 cost-box">
                                                <div class="pri">Current Bid Price:</div>
                                                <div class="amou d-flex justify-content-between">
                                                    AED ${carauction ? carauction.current_bid_price : ''}
                                                </div>

                                            </div>

                                            <div class="col-12">
                                                <a href="#" class="btn bid-btn">Bid Now</a>
                                            </div>

                                            <div class="col-12 text-center">
                                                <a href="#" class="ctm-link"> Buy Now ${carauction ? carauction.buy_now_price : ''} </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="like-car">
                                    <div class="form-check">
                                        <input type="checkbox" id="customCheckBox13"
                                            class="custom-checkbox form-check-input">
                                        <label for="customCheckBox13" class="form-check-label"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                $('.carListingfilter ').append(carHtml);
                });
            
                // $('.carListingfilter .owl-carousel').trigger('refresh.owl.carousel');
                }else{
                    $('.carListingfilter').html('<h3 class="text-center">No records found</h3>');

                }
            },
                        error: function(error) {
                            // Handle errors
                            console.error(error);
                        }
                    });
                });
            });
    </script>

    <!---dropsown select filters -->
    <script>
        $(document).on('click', '.car-select', function() {

        var selectedId = $(this).data('id');
        var selectedValue = $(this).data('value');
        var selectedField = $(this).data('field');

            $.ajax({
                url: '{{ route('home.filterselect') }}', 
                type: 'get',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    selected_id: selectedId,
                    selected_value: selectedValue,
                    selected_field: selectedField
                }, 
                success: function(response) {
                    
                    $('.carListingfilter').empty();
                    if(response.filtereddropdown && response.filtereddropdown.length > 0) {
                    $.each(response.filtereddropdown, function(index, car) {

                    var imageUrl = '{{ asset("frontend/assets/images/product/product-11.png") }}';
                    if (car.carmedia && car.carmedia.length > 0) {
                        for (var i = 0; i < car.carmedia.length; i++) {
                            if (car.carmedia[i].type === 'image_form1') {
                                var imagePaths = car.carmedia[i].images.split(',');
                                imageUrl = '{{ asset(':imagePath') }}'.replace(':imagePath', imagePaths[0]);
                                break;
                            }
                        }   
                    }
                    var carHtml = `
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          
                            <div class="item">
                                <div class="position-relative">
                        
                                    <div class="inner-box redirect-details" data-car-id="${car.id}">
                                        <div class="car-modal tag">MUV</div>
                                            <div class="product-img-box">
                                                <img class="w-100" src="${imageUrl}" alt="">
                                            <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                            ${car.carauction ? car.carauction.estimated_market_value: ''}</span>
                                            </div>
                                        </div>

                                        <div class="details">
                                            <div class="model-name">${car.veh_car_model ? car.veh_car_model : ''}</div>
                                            <div class="brand-name">${car.vehiclemake ? car.vehiclemake.name : ''}</div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="d-flex align-items-center icon-box">
                                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}">${car.veh_year ?car.veh_year:'' }
                                                    </span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="d-flex align-items-center icon-box">
                                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}">${car.veh_mileage ?car.veh_mileage:'' }  KM
                                                    </span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="d-flex align-items-center icon-box">
                                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}">${car.title ?car.title:'' }
                                                    </span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="d-flex align-items-center icon-box">
                                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}"> ${car.vehicleregionalspec ? car.vehicleregionalspec.name : ''} 
                                                    </span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="d-flex align-items-center icon-box">
                                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}"> ${car.vehicletransmission ? car.vehicletransmission.name : ''}
                                                    </span>
                                                </div>

                                                <div class="col-6">
                                                    <span class="d-flex align-items-center icon-box">
                                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}"> ${car.vehiclenoofcylinder ? car.vehiclenoofcylinder.size : ''}
                                                    </span>
                                                </div>

                                                <div class="col-12 m-auto">
                                                    <div class="divider"> </div>
                                                </div>

                                                <div class="col-6 cost-box">
                                                    <div class="pri">Repair Cost:</div>
                                                    <div class="amou d-flex justify-content-between">
                                                        AED ${car.carauction ? car.carauction.estimated_repair_cost : ''}
                                                    </div>
                                                </div>

                                                <div class="col-6 cost-box">
                                                    <div class="pri">Current Bid Price:</div>
                                                    <div class="amou d-flex justify-content-between">
                                                        AED ${car.carauction ? car.carauction.current_bid_price : ''}
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <a href="#" class="btn bid-btn">Bid Now</a>
                                                </div>

                                                <div class="col-12 text-center">
                                                    <a href="#" class="ctm-link"> Buy Now ${car.carauction ? car.carauction.buy_now_price : ''} </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="like-car">
                                        <div class="form-check">
                                            <input type="checkbox" id="customCheckBox13"
                                                class="custom-checkbox form-check-input">
                                            <label for="customCheckBox13" class="form-check-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        </div> `;
                     
                        $('.carListingfilter').append(carHtml);
                    });
                 
                }else{
                    $('.carListingfilter').html('<h3 class="text-center">No records found</h3>');
                    }
                },
                error: function(error) {
                    console.error(error); 
                }
            });
        });


     
    </script> 
@endsection