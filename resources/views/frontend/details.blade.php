@extends('frontend.layouts.app')
@section('content')

<style>
.product-img-box {
    position: relative;
    width: 100%;
    height: 280px;
    overflow: hidden;
}
.product-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
    <!-----Breadcrumb------->
    <section class="breadcrumb pt-50 pb-50 mb-0">

        <div class="container">
            <div class="row mx-0 px-0">
                <div class="col-xl-8 col-lg-7 mx-0 px-0">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item" aria-current="page">Listing</li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ $cardetails->veh_car_model }}</a></li>
                        </ol>
                    </nav>
                    <div class="visitor">
                        <div class="v-cion"> <span class="count-visitor">{{ $cardetails->views_count }}</span></div>
                    </div>

                    <div class="heading d-flex justify-content-lg-start justify-content-between align-items-center">
                    {{ $cardetails->veh_car_model }} 
                    <div class="tag1" style=" border: 1px solid #21E786; border-radius: 50px; box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.25);color: #000;font-family: &quot;Termina Test&quot;;font-size: 14px;font-style: normal;font-weight: 500;line-height: 18px;padding: 9px 15px;  margin-left: 10px;">
                             <img class="" src="{{ asset('frontend/assets/images/icon/nvisitor-icon.svg')}}" style=" margin-bottom: 2px;">
                             <span class="count-visitor" style="font-size:14px;">{{ $cardetails->views_count }}</span> </div>
                     <div class="tag2">MUV</div>
                    </div>
                    <p class="p">3.5 D5 PowerPulse Momentum 5dr AWD Geartronic Estate</p>
                </div>

                <div
                    class="d-md-flex d-none col-xl-4 col-lg-5 mx-0 px-0 align-items-center  breadcrumb-right mt-4 pt-lg-3 d-flex gap-lg-4 gap-2 justify-content-lg-start justify-content-between">
                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn buy-now"> Buy Now AED
                        <span> {{ $cardetails->carAuction->buy_now_price ?? '' }}</span></button>
                    <button data-bs-toggle="modal" data-bs-target="#bid-now-modle" class="btn bid-now">Bid
                        Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-----Breadcrumb------->
 <!--black box-->
 <section class="black-top-box pb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <div class="black-tile">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                <div class="d-flex justify-evenly align-center">
                                    <div class="bt-head">
                                        <h6>Repair It Through Us</h6>
                                        <p class="mb-0">We will repair it for you with 1 Year Guarantee (Optional)</p>
                                    </div>
                                    <div class="btact-btn ">
                                        <button class="bactbutton btn mx-2" type="button">Learn More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 31" fill="none">
                                              <path d="M18.2007 2.37502C18.2006 2.17959 18.1396 1.98904 18.0259 1.83003C17.9123 1.67103 17.7518 1.55151 17.5669 1.48819C17.382 1.42487 17.182 1.42092 16.9947 1.47689C16.8074 1.53285 16.6424 1.64594 16.5225 1.80033L4.88442 16.8003C4.7769 16.9389 4.71041 17.1049 4.69252 17.2794C4.67462 17.4539 4.70603 17.6299 4.78318 17.7874C4.86033 17.9449 4.98012 18.0776 5.12894 18.1705C5.27777 18.2633 5.44964 18.3125 5.62504 18.3125H12.4463V28.625C12.4464 28.826 12.5111 29.0216 12.6308 29.183C12.7505 29.3444 12.9188 29.4631 13.1111 29.5215C13.3034 29.58 13.5093 29.5751 13.6986 29.5076C13.8879 29.4401 14.0505 29.3136 14.1624 29.1467L25.1541 12.7405C25.2486 12.5994 25.3031 12.4352 25.3115 12.2655C25.32 12.0959 25.2822 11.9271 25.2022 11.7772C25.1222 11.6274 25.003 11.5021 24.8573 11.4147C24.7116 11.3274 24.5449 11.2812 24.375 11.2813H18.2007V2.37502Z" fill="black"/>
                                             <path d="M25.1541 12.7405C25.2682 12.5703 25.3234 12.3674 25.3112 12.1628C25.299 11.9583 25.2201 11.7633 25.0865 11.6079C24.953 11.4524 24.7723 11.3449 24.5719 11.302C24.3715 11.259 24.1626 11.2829 23.9771 11.3699L12.9854 16.5262C12.8241 16.6019 12.6878 16.7219 12.5924 16.8722C12.4969 17.0226 12.4462 17.197 12.4463 17.3751V28.6251C12.4464 28.826 12.5111 29.0216 12.6308 29.183C12.7505 29.3444 12.9188 29.4631 13.1111 29.5216C13.3034 29.58 13.5093 29.5751 13.6986 29.5077C13.8879 29.4402 14.0505 29.3137 14.1624 29.1468L25.1541 12.7405Z" fill="#21E786"/>
                                            </svg>
                                        </button>
                                    </div>
                               
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                               <div class="d-flex justify-evenly align-center">
                                    <div class="bt-head">
                                        <h6>Car Arbab's Extended Warranty</h6>
                                        <p class="mb-0">Opt-in for our warranty & drive like a boss! (Optional)</p>
                                    </div>
                                    <div class="btact-btn">
                                        <button class="bactbutton btn mx-2" type="button">Learn More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 31" fill="none">
                                                <path d="M18.2007 2.37502C18.2006 2.17959 18.1396 1.98904 18.0259 1.83003C17.9123 1.67103 17.7518 1.55151 17.5669 1.48819C17.382 1.42487 17.182 1.42092 16.9947 1.47689C16.8074 1.53285 16.6424 1.64594 16.5225 1.80033L4.88442 16.8003C4.7769 16.9389 4.71041 17.1049 4.69252 17.2794C4.67462 17.4539 4.70603 17.6299 4.78318 17.7874C4.86033 17.9449 4.98012 18.0776 5.12894 18.1705C5.27777 18.2633 5.44964 18.3125 5.62504 18.3125H12.4463V28.625C12.4464 28.826 12.5111 29.0216 12.6308 29.183C12.7505 29.3444 12.9188 29.4631 13.1111 29.5215C13.3034 29.58 13.5093 29.5751 13.6986 29.5076C13.8879 29.4401 14.0505 29.3136 14.1624 29.1467L25.1541 12.7405C25.2486 12.5994 25.3031 12.4352 25.3115 12.2655C25.32 12.0959 25.2822 11.9271 25.2022 11.7772C25.1222 11.6274 25.003 11.5021 24.8573 11.4147C24.7116 11.3274 24.5449 11.2812 24.375 11.2813H18.2007V2.37502Z" fill="black"/>
                                                <path d="M25.1541 12.7405C25.2682 12.5703 25.3234 12.3674 25.3112 12.1628C25.299 11.9583 25.2201 11.7633 25.0865 11.6079C24.953 11.4524 24.7723 11.3449 24.5719 11.302C24.3715 11.259 24.1626 11.2829 23.9771 11.3699L12.9854 16.5262C12.8241 16.6019 12.6878 16.7219 12.5924 16.8722C12.4969 17.0226 12.4462 17.197 12.4463 17.3751V28.6251C12.4464 28.826 12.5111 29.0216 12.6308 29.183C12.7505 29.3444 12.9188 29.4631 13.1111 29.5216C13.3034 29.58 13.5093 29.5751 13.6986 29.5077C13.8879 29.4402 14.0505 29.3137 14.1624 29.1468L25.1541 12.7405Z" fill="#21E786"/>
                                             </svg>
                                        </button>
                                    </div>
                               
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--black box-->

    <!-----Gallery Images section------->
    <section class="gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ag-format-container">
                        <div class="ag-photo-gallery_list">
                            @php
                                $carMedia = $cardetails->carMedia->where('type', 'image_form1')->first(); 
                            @endphp

                            <div class="ag-photo-gallery_item ag-photo-gallery_item__wide">
                                <figure class="ag-photo-gallery_figure h-100 main_img">
                                    @php
                                        $latestImagePath = null;
                                        if ($carMedia && $carMedia->images) {
                                            $imagePaths = explode(',', $carMedia->images);
                                            $latestImagePath = reset($imagePaths);
                                        }
                                    @endphp
                                    <a href="{{ $latestImagePath ? asset($latestImagePath) : asset('frontend/assets/images/product/product-11.png')}}" data-fancybox="gallery" data-caption="Car 2">
                                        @if($latestImagePath)
                                            <img src="{{ asset($latestImagePath) }}" class="main_narrow_gallary ag-photo-gallery_img h-100" alt="">
                                        @else
                                            <img src="{{ asset('frontend/assets/images/product/product-11.png') }}" class="ag-photo-gallery_img h-100" alt="">
                                        @endif
                                    </a>
                                </figure>
                            </div>

                            <!--small images--->
                         
                            @php
                                $carMedia = $cardetails->carMedia->where('type', 'image_form1')->first(); 
                            @endphp

                            <div class="ag-photo-gallery_item ag-photo-gallery_item__narrow">
                                
                                <figure class="ag-photo-gallery_figure  img_narrow">
                                    <a href="{{ asset('frontend/assets/images/livebidding/car3.png')}}" data-fancybox="gallery" data-caption="Car 4" class="img-car-details">
                                        @if($carMedia && $carMedia->images)
                                            @php
                                                $imagePaths = explode(',', $carMedia->images);
                                            @endphp
                                            @foreach($imagePaths as $index => $image)
                                            @if($index === 0)
                                                @continue
                                            @endif
                                                <a href="{{ asset($image) }}" data-fancybox="gallery" data-caption="Car 4">
                                                    
                                                    <img src="{{ asset($image) }}" class="img_narrow_gallary ag-photo-gallery_img w-100 h-100 pt-0 mt-md-3 mt-2" alt="" />
                                                </a>
                                            @endforeach
                                        @endif
                                    </a>
                                </figure>
                            </div>
                                
                            <!--ststic images-->
                           
                            <!-- <div class="ag-photo-gallery_item ag-photo-gallery_item__narrow">
                                <figure class="ag-photo-gallery_figure">
                                    <a href="{{ asset('frontend/assets/images/livebidding/car1.png')}}" data-fancybox="gallery"
                                        data-caption="Car 2" class="img-car-details">
                                        <img src="{{ asset('frontend/assets/images/livebidding/car1.png')}}"
                                            class="ag-photo-gallery_img object-fit-contain w-100 h-100 pt-0 mt-md-3 mt-2"
                                            alt="" />
                                    </a>
                                </figure>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 text-center">
                    <img src="{{ asset('frontend/assets/images/background/car-right.png')}}" class="img-hotspot">
                </div>

            </div>
            <!---row----->
        </div>
        <!---container---->

    </section>
    <!-----Gallery Images section------->




    <!-----Auction-timer------->
    <section class="auction-timer pt-50">
        <div class="container countdown-bg unset px-lg-4 px-2" id="Fx">
            <div class="d-flex align-items-center justify-content-between">

                <div class="">
                    <div class="timer">
                        <div id="countdown" class="countdown">
                        @if(isset($cardetails->carAuction) && $cardetails->carAuction->auction_type_id == 1)
                            <div class="countdown-number" style="display: none;">
                                <span class="days countdown-time"></span>
                                <span class="countdown-text">Days</span>
                            </div>
                        @else
                            <div class="countdown-number">
                                <span class="days countdown-time"></span>
                                <span class="countdown-text">Days</span>
                            </div>
                        @endif


                            <!-- <div class="countdown-number">
                                    <span class="days countdown-time"></span>
                                    <span class="countdown-text">Days</span>
                                </div> -->

                            <div class="countdown-number">
                                <span class="hours countdown-time"></span>
                                <span class="countdown-text">Hours</span>
                            </div>
                            <div class="countdown-number">
                                <span class="minutes countdown-time"></span>
                                <span class="countdown-text">Minutes</span>
                            </div>
                            <div class="countdown-number">
                                <span class="seconds countdown-time"></span>
                                <span class="countdown-text">Seconds</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!----col--->


                <div class="">
                    <ul class="custom-list">

                        <li class="d-lg-block d-none">
                            <div class="top-tit">Lot Number:</div>
                            <div class="deta"> {{ $cardetails->carAuction->lot_number ?? '' }}

                            </div>
                        </li>
                        <li>
                            <div class="top-tit">Current Bid Price:</div>
                            <div class="deta">AED <span id="current_bid_price_li"></span></div>
                        </li>
                        <li class="d-lg-block d-none">
                            <div class="top-tit">Est. Market Value:</div>
                            <div class="deta">AED {{ $cardetails->carAuction->estimated_market_value ?? '' }}</div>
                        </li>


                        <li class="d-lg-block d-none">
                            <div class="top-tit">Estimated Repair Cost</div>
                            <div class="deta">AED {{ $cardetails->carAuction->estimated_repair_cost ?? '' }}</div>
                        </li>

                        <li class="d-lg-block d-none">
                            <div class="top-tit">Auction Lane:</div>
                            <div class="deta">141A</div>
                        </li>

                        <li class="d-xl-block d-none">
                            <div class="top-tit">Auction Date and Time:</div>
                            <div class="deta">
                            @if (isset($cardetails->carAuction->auction_date))
                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_date)->format('d-m-Y') }}, 
                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_time)->format('H:i') }} GST +4
                            @endif

                            </div>
                        </li>

                    </ul>
                </div>
                <!----col--->
            </div>
            <!---row---->
        </div>
        <!----container--->


        <div class="container">
            <!-- row  -->
            <div class="row gx-5 gy-5">
                <!-- col 1 -->
                <div class="col-xl-8 col-md-6 col-lg-7 ">
                    <div class="row">
                        <div class="col-lg-12  tag-group ">

                            <div class="scroll-x gap-3 d-flex">
                                <a class="btn btn-tag m-0" href="#">Ending Soon</a>
                                <a class="btn btn-tag m-0" href="#">Accident Free</a>
                                <a class="btn btn-tag m-0" href="#">GCC Specs</a>
                                <a class="btn btn-tag m-0" href="#">Warranty Available</a>
                                <a class="btn btn-tag m-0" href="#">Bank Loan Available</a>
                            </div>


                        </div>
                        <!----col--->
                    </div>
                    <!----row---->


                    <div class="row">
                        <div class="col-lg-12 ">

                            <h2 class="car-overv" Car Overview>Car Overview</h2>
                        </div>
                        <div class="col-lg-12 tag-group">

                            <div class="scroll-x gap-3 d-flex">

                                <div class="px-0 mx-0">
                                    <!--<span class="d-flex align-items-center icon-box">-->
                                    <!--    <img class="ico" src="assets/images/icon/Kms.png"> 53000 Kms-->
                                    <!--</span>-->
                                    
                                     <div class="tile-green" style="background: var(--Linear, linear-gradient(134deg, #8FF2C2 0.14%, #21E786 99.86%)); width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; margin-top:8px;">
                                        <div class="tile-title" style="text-align: center; text-transform: uppercase;">
                                             <img class="" src="{{ asset('frontend/assets/images/icon/detail-icon01.svg')}}">
                                             </div>
                                            <div class="tile-icon" style="/* text-align: center; */color: #000;font-family: Montserrat;font-size: 15px;font-style: normal;font-weight: 500;/* line-height: 15px; */">
                                               Eligible
                                             </div>
                                    </div>


                                </div>

                                <div class="px-0 mx-0">
                                    <!--<span class="d-flex align-items-center icon-box">-->
                                    <!--    <img class="ico" src="assets/images/icon/manual.png"> Manual-->
                                    <!--</span>-->
                                     <div class="tile-green" style="background: var(--Linear, linear-gradient(134deg, #8FF2C2 0.14%, #21E786 99.86%)); width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px;  margin-top:8px;">
                                        <div class="tile-title" style="text-align: center; text-transform: uppercase;">
                                             <img class="" src="{{ asset('frontend/assets/images/icon/detail-icon02.svg')}}">
                                             </div>
                                            <div class="tile-icon" style="/* text-align: center; */color: #000;font-family: Montserrat;font-size: 15px;font-style: normal;font-weight: 500;/* line-height: 15px; */">
                                               Eligible
                                             </div>
                                    </div>
                                </div>

                                <div class="px-0 mx-0">
                                    <!--<span class="d-flex align-items-center icon-box">-->
                                    <!--    <img class="ico" src="assets/images/icon/cc.png"> 22,231 cc-->
                                    <!--</span>-->
                                   <div class="tbg" style="background-image:  url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;">
                                            <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items:     center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">
                                             <div class="tile-title" style="text-align: center; text-transform: uppercase;">
                                                    <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-3.svg')}}">
                                                             </div>
                                                     <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">
                                                     {{ $cardetails->veh_car_model }}
                                                     </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="px-0 mx-0">
                                    <!--<span class="d-flex align-items-center icon-box">-->
                                    <!--    <img class="ico" src="assets/images/icon/petrol.png"> Petrol-->
                                    <!--</span>-->
                                     <div class="tbg" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;">
                                          <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">
                                         <div class="tile-title" style="text-align: center; text-transform: uppercase;">
                                                 <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-4.svg')}}">
                                                             </div>
                                                 <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">
                                                 {{ $cardetails->vehicleBodyType->name ?? '' }}
                                              </div>
                                    </div>
                                     </div>
                                   
                                </div>

                                <div class="px-0 mx-0">
                                    <!--<span class="d-flex align-items-center icon-box">-->
                                    <!--    <img class="ico" src="assets/images/icon/owner.png"> First Owner-->
                                    <!--</span>-->
                                     <div class="tbg" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;">
                                         <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">
                                              <div class="tile-title" style="text-align: center; text-transform: uppercase;">
                                                 <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-5.svg')}}">
                                                     </div>
                                              <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">
                                              {{ $cardetails->veh_mileage }} Km
                                              </div>
                                     </div>
                                     </div>
                                    
                                </div>

                                <div class="px-0 mx-0">
                                    <!--<span class="d-flex align-items-center icon-box">-->
                                    <!--    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers-->
                                    <!--</span>-->
                                     <div class="tbg" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;">
                                          <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">
                                             <div class="tile-title" style="text-align: center; text-transform: uppercase;">
                                            <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-6.svg')}}">
                                              </div>
                                                      <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">
                                                      {{ $cardetails->veh_year }} 
                                                    </div>
                                    </div>
                                     </div>
                                   
                                </div>
                                
                                <div class="px-0 mx-0">
                                    <!--<span class="d-flex align-items-center icon-box">-->
                                    <!--    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers-->
                                    <!--</span>-->
                                      <div class="tbg" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;">
                                                                              <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">
                                             <div class="tile-title" style="text-align: center; text-transform: uppercase;">
                                            <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-7.svg')}}">
                                              </div>
                                                      <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">
                                                      {{ $cardetails->vehicleregionalspec->name ?? '' }}
                                                    </div>
                                    </div>
                                      </div>

                                </div>
                                
                                <div class="px-0 mx-0">
                                    <!--<span class="d-flex align-items-center icon-box">-->
                                    <!--    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers-->
                                    <!--</span>-->
                                    <div class="tbg" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;">
                                         <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">
                                                  <div class="tile-title" style="text-align: center; text-transform: uppercase;">
                                                     <img src="{{asset('frontend/assets/images/icon/diconblack-8.svg')}}" alt="Icon">
                                                      </div>
                                                          <div class="tile-icon" style="color: #000; font-family: Montserrat, sans-serif; font-size: 15px; font-style: normal; font-weight: 500;">
                                                          {{ $cardetails->cc ?? '' }} CC
                                                  </div>
                                                     </div>
                                        </div>
                                    
                                </div>

                            </div>
                            <!----inner--row--->

                        </div>
        </div>
                    <!----row--->


                    <div class="row">
                        <div class="col-lg-12 ">

                            <h2 class="car-overv" Car Overview>Vehicle Details</h2>
                        </div>
                        <div class="col-lg-12 tag-group">

                        <div class="row gy-4">

                            <div class="col-xl-6 pr-xl-20">

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Title</div>
                                        <div class="right-text">{{ $cardetails->title ?? ''}} </div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">VIN Number</div>
                                        <div class="right-text">{{ $cardetails->veh_vin_number ?? ''}}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Title Code</div>
                                        <div class="right-text">{{ $cardetails->CarTitle->name ?? ''}}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Vehicle Type</div>
                                        <div class="right-text">{{ $cardetails->VehicleType->name ?? ''}}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Key Availability</div>
                                        <div class="right-text">{{ $cardetails->VehicleNoofKeys->no_of_keys ?? ''}}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Body Type</div>
                                        <div class="right-text">{{ $cardetails->vehicleBodyType->name ?? ''}}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Drive Type</div>
                                        <div class="right-text">{{ $cardetails->DriveType->name ?? '' }}</div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6 pl-xl-20">

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Primary Damage</div>
                                        <div class="right-text">{{ $cardetails->primary_damage ?? '' }}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Car Color</div>
                                        <div class="right-text">{{ $cardetails->CarColor->name ?? '' }}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">No Of Cylinder</div>
                                        <div class="right-text">{{ $cardetails->vehicleNoOfCylinder->size ?? '' }}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Transmission</div>
                                        <div class="right-text">{{ $cardetails->vehicleTransmission->name ??'' }}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Interior Trim</div>
                                        <div class="right-text">{{ $cardetails->vehicleInterior->name ?? '' }}</div>
                                    </div>
                                </div>

                                <div class="list">
                                    <div class="d-flex justify-content-between">
                                        <div class="left-text">Highlights</div>
                                        <div class="right-text w-225">{{ $cardetails->vehicle_highlights ?? '' }}</div>
                                    </div>
                                </div>

                            </div>

                            </div>
                        </div>

                    </div>
                    <!----row----->
                        <!--tile vert-->
                         <div class="row">
                              <div class="col-lg-12 ">

                                <!--<h2 class="car-overv" Car Overview>Car Overview Score</h2>-->
                                 </div>
                            <div class="col-lg-12  px-4 px-md-0 tile-x h-300 mb-h-fitcontent" style="position: relative; background: #ffffff; border-radius: 10px !important; margin-bottom: 20px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">
                            <div class="tile-body">
                                <div class="case-status text-center" style="border-bottom: 1px solid #333; background: #21E786;; color: #000; display: flex; padding: 15px 0px 12px 0px; justify-content: center; align-items: center; gap: 10px; border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -ms-border-radius: 10px 10px 0px 0px; -o-border-radius: 10px 10px 0px 0px;">
                                       <h2 class="car-overv pt-0" Car Overview>Car Overview Score</h2>
                                     </div>
                            </div>
                           

                            <div class="row gx-5">
                                <div class="col-lg-12 text-center">
                                   <div class="warn-cnt"style="color: #000;font-family: &quot;Termina Test&quot;;font-size: 14px;font-style: normal;font-weight: 500;line-height: 18px;background: #EFF2F5;padding-top: 13px;padding-bottom: 13px;">
                                     <span>  <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon">Passed</span> <span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">Imperfection</span></div>
                                </div>
                                <div class="col-lg-12 card-cc" style="padding: 17px 40px 25px 40px;">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          
                                            
                                            <!--ac-->
                                            
                                            <!--<div class="accordion accordion-flush cst-acc " id="accordionFlushExample">-->
                                            <!--    <div class="accordion-item ">-->
                                            <!--         <h2 class="accordion-header " id="flush-headingOne">-->
                                            <!--             <button class="accordion-button collapsed tile-x" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">-->
                                            <!--               <img class="mx-1" src="{{ asset('frontend/assets/images/icon/engine-icon.svg')}}" alt="Icon"> <div class="cst-acc-text">Engine</div>-->
                                            <!--               </button>-->
                                                           
                                            <!--            </h2>-->
                                            <!--         <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">-->
                                            <!--        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>-->
                                            <!--      </div>-->
                                                 
                                            <!--    </div>-->
                                            <!--</div>-->
                                            
                                            <!--accordian main for engine-->
                                            <div class="accordion ">
                                                <div class="accordion-item">
                                                    <div class="accordion-header ">
                                                         <div>
                                                             <div class="acc-motive">
                                                              <img class="mx-1" src="{{ asset('frontend/assets/images/icon/engine-icon.svg')}}" alt="Icon"> <div class="cst-acc-text">Engine</div>

                                                         
                                                            </div>
                                                         <div class="report-acc mt-1">
                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countsengine['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countsengine['Imperfection'] }}</span>
                                                         </div>
                                                         </div>
                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <p class="collapse_title">Caution indicates damage / leak</p>
                                                        
                                                        <!--report value-->
                                                        @if(count($imperfectionColumnsEngine) > 0)
                                                            <ul class="report-list">
                                                                @foreach($imperfectionColumnsEngine as $column)
                                                                    <li class="r-drop">
                                                                        <div class="lcontent">
                                                                            <span> {{ $column }} </span>
                                                                            @if(isset($imperfectionImagesEngine[$column]))
                                                                                @foreach($imperfectionImagesEngine[$column] as $imageUrl)
                                                                                    @if(!empty($imageUrl))
                                                                                        <img class="mx-1" src="{{ $imageUrl }}" alt="Imperfection Image" width="120px">
                                                                                    @endif
                                                                                @endforeach
                                                                            @else
                                                                                <span><br>No images found for {{ $column }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            <p>No imperfections found.</p>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <!--accordian main for engine end-->
                                        </div>
                                       <!--tile 02-->
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                           
                                            
                                            <!--accordian 02-->
                                            <div class="accordion ">
                                                <div class="accordion-item">
                                                    <div class="accordion-header ">
                                                         <div>
                                                             <div class="acc-motive">
                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}" alt="Icon"> <div class="cst-acc-text">Transmission</div>
                                                         </div>
                                                         <div class="report-acc mt-1">

                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countstransmission['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countstransmission['Imperfection'] }}</span>
                                                         </div>
                                                         </div>
                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <p class="collapse_title">Caution indicates damage / leak</p>
                                                        
                                                        <!--report value-->
                                                        @if(count($imperfectionColumnTransmission) > 0)
                                                            <ul class="report-list">
                                                                @foreach($imperfectionColumnTransmission as $column)
                                                                    <li class="r-drop">
                                                                        <div class="lcontent">
                                                                            <span> {{ $column }} </span>
                                                                            @if(isset($imperfectionImagesTransmission[$column]))
                                                                                @foreach($imperfectionImagesTransmission[$column] as $imageUrl)
                                                                                    @if(!empty($imageUrl))
                                                                                        <img class="mx-1" src="{{ $imageUrl }}" alt="Imperfection Image" width="120px">
                                                                                    @endif
                                                                                @endforeach
                                                                            @else
                                                                                <span><br>No images found for {{ $column }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            <p>No imperfections found.</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--accordian-->
                                        </div>
                                        <!--tile 03-->
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">  
                                            <!--accordian 03-->
                                            <div class="accordion ">
                                                <div class="accordion-item">
                                                    <div class="accordion-header ">
                                                         <div>
                                                             <div class="acc-motive">
                                                              <img class="mx-1" src="{{ asset('frontend/assets/images/icon/break-icon.svg')}}" alt="Icon"> <div class="cst-acc-text"><div>Break System,<br> Suspension and Tyres</div></div>
                                                         </div>
                                                         <div class="report-acc mt-1">
                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countsbrakesystem['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countsbrakesystem['Imperfection'] }}</span>
                                                         </div>
                                                         </div>
                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <p class="collapse_title">Caution indicates damage / leak</p>
                                                        
                                                        <!--report value-->
                                                        @if(count($imperfectionColumnBrakesystem) > 0)
                                                            <ul class="report-list">
                                                                @foreach($imperfectionColumnBrakesystem as $column)
                                                                    <li class="r-drop">
                                                                        <div class="lcontent">
                                                                            <span> {{ $column }} </span>
                                                                            @if(isset($imperfectionImagesBrakesystem[$column]))
                                                                                @foreach($imperfectionImagesBrakesystem[$column] as $imageUrl)
                                                                                    @if(!empty($imageUrl))
                                                                                        <img class="mx-1" src="{{ $imageUrl }}" alt="Imperfection Image" width="120px">
                                                                                    @endif
                                                                                @endforeach
                                                                            @else
                                                                                <span><br>No images found for {{ $column }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            <p>No imperfections found.</p>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <!--accordian 03-->
                                        </div>
                                        
                                        <!--tile 04-->
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">                
                                             <!--accordian 04-->
                                            <div class="accordion ">
                                                <div class="accordion-item">
                                                    <div class="accordion-header ">
                                                         <div>
                                                             <div class="acc-motive">
                                                              <img class="mx-1" src="{{ asset('frontend/assets/images/icon/electricchip-icon.svg')}}" alt="Icon">  <div class="cst-acc-text">Electrical System</div>
                                                         </div>
                                                         <div class="report-acc mt-1">
                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countsElectricalsystem['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countsElectricalsystem['Imperfection'] }}</span>
                                                         </div>
                                                         </div>
                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <p class="collapse_title">Caution indicates damage / leak</p>
                                                        
                                                         <!--report value-->
                                                        @if(count($imperfectionColumnElectricalsystem) > 0)
                                                            <ul class="report-list">
                                                                @foreach($imperfectionColumnElectricalsystem as $column)
                                                                    <li class="r-drop">
                                                                        <div class="lcontent">
                                                                            <span> {{ $column }} </span>
                                                                            @if(isset($imperfectionImagesElectricalsystem[$column]))
                                                                                @foreach($imperfectionImagesElectricalsystem[$column] as $imageUrl)
                                                                                    @if(!empty($imageUrl))
                                                                                        <img class="mx-1" src="{{ $imageUrl }}" alt="Imperfection Image" width="120px">
                                                                                    @endif
                                                                                @endforeach
                                                                            @else
                                                                                <span><br>No images found for {{ $column }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            <p>No imperfections found.</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <!--accordian 04-->
                                            
                                        </div>
                                        <!--tile 05-->
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
 
                                             <!--accordian 05-->
                                            <div class="accordion ">
                                                <div class="accordion-item">
                                                    <div class="accordion-header ">
                                                         <div>
                                                             <div class="acc-motive">
                                                            <img class="mx-1" src="{{ asset('frontend/assets/images/icon/interior-icon.svg')}}" alt="Icon"> <div class="cst-acc-text"> Interior</div>
                                                         </div>
                                                         <div class="report-acc mt-1">
                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countsInterior['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countsInterior['Imperfection'] }}</span>
                                                         </div>
                                                         </div>
                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <p class="collapse_title">Caution indicates damage / leak</p>
                                                        
                                                        <!--report value-->
                                                        @if(count($imperfectionColumnInterior) > 0)
                                                            <ul class="report-list">
                                                                @foreach($imperfectionColumnInterior as $column)
                                                                    <li class="r-drop">
                                                                        <div class="lcontent">
                                                                            <span> {{ $column }} </span>
                                                                            @if(isset($imperfectionImagesInterior[$column]))
                                                                                @foreach($imperfectionImagesInterior[$column] as $imageUrl)
                                                                                    @if(!empty($imageUrl))
                                                                                        <img class="mx-1" src="{{ $imageUrl }}" alt="Imperfection Image" width="120px">
                                                                                    @endif
                                                                                @endforeach
                                                                            @else
                                                                                <span><br>No images found for {{ $column }}</span>
                                                                            @endif

                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            <p>No imperfections found.</p>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <!--accordian 05-->
                                        </div>
                                        <!--tile 06-->
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
                                            <!--<div class="tile-x" style="background: #E3FBEF;border-radius: 10px;padding :15px 15px">-->
                                            <!--    <div class="tilex-cnt d-flex" style="justify-content: space-between; align-items: center;">-->
                                            <!--        <div class="x-left d-flex"  style="color: #444343; font-family: Montserrat; font-size: 14px; font-style: normal; font-weight: 600; line-height: 18px; align-items: center;"> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/vd-icon.svg')}}" alt="Icon"> <div>Vehicle Diagnostics <br>Report</div></div>-->
                                            <!--        <div class="x-right" style=" color: #000; font-family: &quot;Termina Test&quot;; font-size: 14px; font-style: normal; font-weight: 500; line-height: 18px;"> <span>  <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon">10</span> <span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">02</span></div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            
                                             <!--accordian 06-->
                                            <div class="accordion ">
                                                <div class="accordion-item">
                                                    <div class="accordion-header ">
                                                         <div>
                                                             <div class="acc-motive">
                                                            <img class="mx-1" src="{{ asset('frontend/assets/images/icon/vd-icon.svg')}}" alt="Icon"><div class="cst-acc-text"><div> Vehicle Diagnostics,<br>  Report </div></div>
                                                         </div>
                                                         <div class="report-acc mt-1">
                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">12</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">6</span>
                                                         </div>
                                                         </div>
                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <p class="collapse_title">Caution indicates damage / leak</p>
                                                        
                                                        <!--report value-->
                                                        <ul class="report-list">
                                                              <li class="r-drop">
                                                                    <div class="lcontent">
                                                                        <span> Bonnet </span>
                                                                       <div class="image-area">
                                                                            <img class="mx-1 list-image" src="https://pragya.dbtechserver.online/car_arbab1/public/images/image_form1_images/image_form1_image_66309f56a097c.png" alt="Icon" data-toggle="tooltip" title="Your Tooltip Text" data-src="https://pragya.dbtechserver.online/car_arbab1/public/images/image_form1_images/image_form1_image_66309f56a097c.png">
                                                                         </div>
                                                                    </div>
                                                                </li>

                                                            <!--02-->
                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--accordian 06-->
                                        </div>
                                    </div>
                                </div>
                                
                                <!--<div class="col-xl-6 ">-->

                                <!--    <div class="skill-main">-->
                                <!--        <div class="skill-wrrap">-->
                                <!--            <div class="skill-name">Exterior Body Damage Diagram</div>-->
                                <!--            <div class="skill-bar">-->
                                <!--                <div class="skill-per bg-chanege" per="66.6"></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->

                                <!--    <div class="skill-main">-->
                                <!--        <div class="skill-wrrap">-->
                                <!--            <div class="skill-name">Brakes</div>-->
                                <!--            <div class="skill-bar">-->
                                <!--                <div class="skill-per" per="80"></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->


                                <!--    <div class="skill-main">-->
                                <!--        <div class="skill-wrrap">-->
                                <!--            <div class="skill-name">Suspension/Steering</div>-->
                                <!--            <div class="skill-bar">-->
                                <!--                <div class="skill-per" per="91.7"></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->

                                <!--    <div class="skill-main">-->
                                <!--        <div class="skill-wrrap">-->
                                <!--            <div class="skill-name">Road Test And Final Checks</div>-->
                                <!--            <div class="skill-bar">-->
                                <!--                <div class="skill-per" per="95.2"></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->


                                <!--    <div class="skill-main">-->
                                <!--        <div class="skill-wrrap">-->
                                <!--            <div class="skill-name">Tyres</div>-->
                                <!--            <div class="skill-bar">-->
                                <!--                <div class="skill-per" per="92.8"></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->

                                <!--</div>-->
                                <!-----col----6--->


                                <!--<div class="col-xl-6">-->

                                <!--    <div class="skill-main">-->
                                <!--        <div class="skill-wrrap">-->
                                <!--            <div class="skill-name">Engine & Transmission</div>-->
                                <!--            <div class="skill-bar">-->
                                <!--                <div class="skill-per" per="86.6"></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->


                                <!--    <div class="skill-main">-->
                                <!--        <div class="skill-wrrap">-->
                                <!--            <div class="skill-name">Electrical Controls</div>-->
                                <!--            <div class="skill-bar">-->
                                <!--                <div class="skill-per" per="99"></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->


                                <!--    <div class="skill-main">-->
                                <!--        <div class="skill-wrrap">-->
                                <!--            <div class="skill-name">Interior</div>-->
                                <!--            <div class="skill-bar">-->
                                <!--                <div class="skill-per" per="94"></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->

                                <!--    <div class="skill-main">-->
                                <!--        <div class="skill-wrrap">-->
                                <!--            <div class="skill-name">Exterior Body Damage Diagram</div>-->
                                <!--            <div class="skill-bar">-->
                                <!--                <div class="skill-per bg-chanege" per="66.6%"></div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->


                                <!--    <div class="float-right d-flex justify-content-md-end mt-10">-->

                                <!--        <a href="#" class="full-insp">Full Inspection Report</a>-->

                                <!--    </div>-->

                                <!--</div>-->





                            </div>
                            <!----row---->

                        </div>
                        <!----col-12------>

                    </div>
                    <!----row---->





                    <div class="mt-30">
                        <div>
                            <button
                                class="text-black font-900 btn-car-history bg-white w-100 py-10 px-4 d-flex align-items-center justify-content-between fst-italic font-montserrat border rounded-pill"
                                type="button" id="accordion-btn">
                                Complete Car Auction History:
                                <div>
                                    <img src="{{ asset('frontend/assets/images/icon/Down2.svg')}}">
                                </div>
                            </button>

                            <div id="accordion-body">
                                <div class="row d-none d-lg-flex">
                                    <div class="col-lg-12 table-responsive p-0">
                                        <table class="table ctm-table m-0">
                                            <tr class="bg-ctm bg-table-award">
                                                <td class="border-top-left">Auction Date</td>
                                                <td>Auction Platform</td>
                                                <td>Lot No</td>
                                                <td>Price of Auction</td>
                                                <td>Place of Auction</td>
                                                <td class="border-top-right">Mileage</td>
                                            </tr>

                                            <tbody class="table-body-award">
                                                <tr>
                                                    <td>2024-01-01</td>
                                                    <td>Online Auction</td>
                                                    <td>101</td>
                                                    <td>AED 15,000</td>
                                                    <td>Virtual</td>
                                                    <td>50,000 mi.</td>
                                                </tr>
                                                <tr>
                                                    <td>2023-02-02</td>
                                                    <td>Local Auction</td>
                                                    <td>101</td>
                                                    <td>AED 15,000</td>
                                                    <td>Virtual</td>
                                                    <td>50,000 mi.</td>
                                                </tr>
                                                <tr>
                                                    <td>2024-01-01</td>
                                                    <td>Online Auction</td>
                                                    <td>101</td>
                                                    <td>AED 15,000</td>
                                                    <td>Virtual</td>
                                                    <td>50,000 mi.</td>
                                                </tr>
                                                <tr>
                                                    <td>2023-02-02</td>
                                                    <td>Online Auction</td>
                                                    <td>101</td>
                                                    <td>AED 15,000</td>
                                                    <td>Virtual</td>
                                                    <td>50,000 mi.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="d-block d-lg-none table-responsive">
                                    <table class="table ctm-table m-0">

                                        <tr class="bg-ctm bg-table-award">
                                            <td class="border-top-left">Auction Date</td>
                                            <td>Auction Platform</td>
                                            <td class="border-top-right">Lot No</td>
                                        </tr>

                                        <tbody class="table-body-award font-500">
                                            <tr>
                                                <td>2024-01-01</td>
                                                <td>Online Auction</td>
                                                <td>101</td>
                                            </tr>
                                            <tr>
                                                <td>2023-02-02</td>
                                                <td>Local Auction</td>
                                                <td>101</td>
                                            </tr>
                                            <tr>
                                                <td>2024-01-01</td>
                                                <td>Online Auction</td>
                                                <td>101</td>
                                            </tr>
                                            <tr>
                                                <td>2023-02-02</td>
                                                <td>Online Auction</td>
                                                <td>101</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12 ">

                                <h2 class="car-overv" Car Overview>Features</h2>
                            </div>
                            <div class="col-lg-12 tag-group">

                                <div class="row">

                                    <div class="col-xxl-3 col-6 col-xl-4 checklist">
                                        <span class="heading">Interior</span>
                                        <ul class="list-features">

                                        <li>
                                            <input type="checkbox" id="air_conditioner" name="air_conditioner" value="1" {{ $cardetails && $cardetails->air_conditioner == 1 ? 'checked' : '' }} disabled>
                                            <label for="air_conditioner">Air Conditioner</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="digital_odometer" name="digital_odometer" value="1" {{ $cardetails && $cardetails->digital_odometer == 1 ? 'checked' : '' }} disabled>
                                            <label for="digital_odometer"> Digital Odometer</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="heater" name="heater" value="1" {{ $cardetails && $cardetails->heater == 1 ? 'checked' : '' }} disabled>
                                            <label for="heater"> Heater</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="leather_seats_interior" name="leather_seats_interior" value="1" {{ $cardetails && $cardetails->leather_seats_interior == 1 ? 'checked' : '' }} disabled>
                                            <label for="leather_seats_interior"> Leather Seats</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="tachometer" name="tachometer" value="1" {{ $cardetails && $cardetails->tachometer == 1 ? 'checked' : '' }} disabled>
                                            <label for="tachometer"> Tachometer</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="panoramic_moonroof" name="panoramic_moonroof" value="1" {{ $cardetails && $cardetails->panoramic_moonroof == 1 ? 'checked' : '' }} disabled>
                                            <label for="panoramic_moonroof">  Panoramic Moonroof</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="touchscreen_display" name="touchscreen_display" value="1" {{ $cardetails && $cardetails->touchscreen_display == 1 ? 'checked' : '' }} disabled>
                                            <label for="touchscreen_display"> Touchscreen Display</label>
                                        </li>   
                                        </ul>
                                    </div>
                                    <!---col-lg-3---->

                                    <div class="col-xxl-3 col-6 col-xl-4 checklist">
                                        <span class="heading">Safety</span>
                                        <ul class="list-features">
                                            <li>
                                                <input type="checkbox" id="anti_lock_bracking" name="anti_lock_bracking" value="1" {{ $cardetails && $cardetails->anti_lock_bracking == 1 ? 'checked' : '' }} disabled>
                                                <label for="anti_lock_bracking"> Anti-lock Braking</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brake_assist" name="brake_assist" value="1" {{ $cardetails && $cardetails->brake_assist == 1 ? 'checked' : '' }} disabled>
                                                <label for="brake_assist"> Brake Assist</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="child_safety_locks" name="child_safety_locks" value="1" {{ $cardetails && $cardetails->child_safety_locks == 1 ? 'checked' : '' }} disabled>
                                                <label for="child_safety_locks"> Child Safety Locks</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="driver_air_bag" name="driver_air_bag" value="1" {{ $cardetails && $cardetails->driver_air_bag == 1 ? 'checked' : '' }} disabled>
                                                <label for="driver_air_bag"> Driver Air Bag</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="power_door_locks" name="power_door_locks" value="1" {{ $cardetails && $cardetails->power_door_locks == 1 ? 'checked' : '' }} disabled>
                                                <label for="power_door_locks"> Power Door Locks</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="stability_control" name="stability_control" value="1" {{ $cardetails && $cardetails->stability_control == 1 ? 'checked' : '' }} disabled>
                                                <label for="stability_control">Stability Control</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="traction_control" name="traction_control" value="1" {{ $cardetails && $cardetails->traction_control == 1 ? 'checked' : '' }} disabled>
                                                <label for="traction_control">Traction Control</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!---col-lg-3---->

                                    <div class="col-xxl-3 col-6 col-xl-4 checklist">
                                        <span class="heading">Exterior</span>
                                        <ul class="list-features">
                                             <li>
                                                <input type="checkbox" id="fog_lights_front" name="fog_lights_front" value="1" {{ $cardetails && $cardetails->fog_lights_front == 1 ? 'checked' : '' }} disabled>
                                                <label for="fog_lights_front">Fog Lights Front</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="rain_sesing_wiper" name="rain_sesing_wiper" value="1" {{ $cardetails && $cardetails->rain_sesing_wiper == 1 ? 'checked' : '' }} disabled>
                                                <label for="rain_sesing_wiper"> Rain Sensing Wiper</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="rear_spoiler" name="rear_spoiler" value="1" {{ $cardetails && $cardetails->rear_spoiler == 1 ? 'checked' : '' }} disabled>
                                                <label for="rear_spoiler"> Rear Spoiler</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="windows_electric" name="windows_electric" value="1" {{ $cardetails && $cardetails->windows_electric == 1 ? 'checked' : '' }} disabled>
                                                <label for="windows_electric">Windows - Electric</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!---col-lg-3---->

                                    <div class="col-xxl-3 col-6 col-xl-4 checklist">
                                        <span class="heading">Comfort & Convenience</span>
                                        <ul class="list-features">
                                            <li>
                                                <input type="checkbox" id="android_auto" name="android_auto" value="1" {{ $cardetails && $cardetails->android_auto == 1 ? 'checked' : '' }} disabled>
                                                <label for="android_auto">Android Auto</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="digital_odometer_cc" name="digital_odometer_cc" value="1" {{ $cardetails && $cardetails->digital_odometer_cc == 1 ? 'checked' : '' }} disabled>
                                                <label for="digital_odometer_cc">Digital Odometer</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="heater_cc" name="heater_cc" value="1" {{ $cardetails && $cardetails->heater_cc == 1 ? 'checked' : '' }} disabled>
                                                <label for="heater_cc">Heater</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="leather_seats_cc" name="leather_seats_cc" value="1" {{ $cardetails && $cardetails->leather_seats_cc == 1 ? 'checked' : '' }} disabled>
                                                <label for="leather_seats_cc">Leather Seats </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!---col-lg-3---->

                                </div>
                                <!---row---->

                            </div>

                        </div>
                        <!----row---->


                    </div>


                    <!-- <div class="row">
                        <div class="col-lg-12 ">

                            <h2 class="car-overv" Car Overview>Engine and Transmission</h2>
                        </div>
                        <div class="col-lg-12">

                            <div class="row g-5">

                                <div class="col-xl-6">

                                    <div class="list">
                                        <div class="d-flex justify-content-between">
                                            <div class="left-text">Engine and Transmission</div>
                                            <div class="right-text">80</div>
                                        </div>
                                    </div>

                                    <div class="list">
                                        <div class="d-flex justify-content-between">
                                            <div class="left-text">Max. Towing Weight - Braked (kg)</div>
                                            <div class="right-text">1000</div>
                                        </div>
                                    </div>

                                    <div class="list">
                                        <div class="d-flex justify-content-between">
                                            <div class="left-text w-285">Max. Towing Weight - Unbraked (kg)</div>
                                            <div class="right-text">1100</div>
                                        </div>
                                    </div>




                                </div>


                                <div class="col-xl-6">

                                    <div class="list">
                                        <div class="d-flex justify-content-between">
                                            <div class="left-text">Minimum Kerbweight (kg)</div>
                                            <div class="right-text">350</div>
                                        </div>
                                    </div>

                                    <div class="list">
                                        <div class="d-flex justify-content-between">
                                            <div class="left-text">Turning Circle - Kerb to Kerb (m)</div>
                                            <div class="right-text">6500</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> -->
                    <!----row----->

                </div>
                <!-- /col 1 -->

                <!-- /col 2 -->
                <div class="col-xl-4 col-md-6 col-lg-5 position-relative">
                    <div class="card-positionss">
                        <div class="announcements-card">
                            <div class="text-black font-montserrat font-800 fst-italic fs-6 mb-20 text-center">
                                Bidding History
                            </div>
                            <div class="d-flex flex-column gap-20 mt-20">
                                <div
                                    class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                                    <div>Lot No:</div>
                                    <div class="font-600">
                                        {{ $cardetails->carAuction->lot_number ?? '' }}
                                    </div>
                                </div>

                                <div
                                    class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                                    <div>Live Auction </br>
                                        Date & Time:</div>
                                    <div class="font-600 text-end">
                                    @if (isset($cardetails->carAuction->auction_date))
                                        {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_date)->format('d-m-Y') }}<br>
                                        {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_time)->format('H:i') }} GST +4
                                    @endif
                                    </div>
                                </div>

                                <div
                                    class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500 " id="current_bid_price">
                                    <div>Current Bid:</div>
                                    <div class="font-600">
                                     

                                    </div>
                                </div>

                                <!-- <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                                    <div>Pre-bid Closes In:</div>
                                    <div class="font-600" id="countdownContainer">
                                     
                                    </div>
                                </div> -->
                                <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                                    <div>Pre-bid Closes In: <span id="preBidCountdown"></span></div>
                                    <div class="font-600">
                                        <span id="countdownDays"></span>  <span id="countdownHours"></span> 
                                    </div>
                                </div>

                                <div class="text-black fs-6 font-500 font-montserrat">
                                    If you are awarded this vehicle on Feb 13 (GMT), then
                                </div>

                                <div id="paymentDueContainer"
                                    class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500"  style="display: none;">
                                    <div>Payment is due:</div>
                                    <div class="font-600" id="paymentDueDate">
                                    </div>
                                </div>

                                <div 
                                    class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                                    <div>Pick up by:</div>
                                    <div class="font-600" >
                                    @if (isset($cardetails->carAuction->pick_up_by))
                                     {{ \Carbon\Carbon::parse($cardetails->carAuction->pick_up_by ?? '')->format('d-m-Y') }}<br>
                                    @endif
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" id="no_of_bids">
                                    <div>No of Bids: </div>
                                    <div class="font-600">
                                            <!-- {{ $cardetails->carAuction->no_of_bids ?? '' }} -->
                                    </div>
                                </div>

                                <div>
                                <div class="text-black fs-6 fst-italic font-800 font-montserrat">
                                        Your Bid:
                                </div>
                                    
                                
                                        
                        @auth
                        <input type="hidden" id="car_id" name="car_id" value="{{ $cardetails->carAuction->car_id }}">
                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="d-flex gap-10 mt-10">       
                                <div class="w-100">
                                    <input type="number" placeholder="Enter Amount" name="new_bid_price" id="new_bid_price" 
                                        class="input-field form-control p-12 text-center rounded-pill mw-100 w-100"  required  disabled>
                                        <input type="hidden" name="hidden_bid_price" id="hidden_bid_price">
                                    </div>
                                <div class="min-w-fit">
                                    <button  type="submit" id="place-bid" class="btn place-bid-btn px-3">
                                        Place Bid 
                                    </button>
                                </div>
                            </div>
                        @else
                      
                            @if (isset($cardetails->carAuction->car_id))
                                <input type="hidden" id="car_id" name="car_id" value="{{ $cardetails->carAuction->car_id }}">
                            @endif

                            <div class="d-flex gap-10 mt-10">       
                                <div class="w-100">
                                    <input type="number" placeholder="Enter Amount" name="new_bid_price" id="new_bid_price" 
                                        class="input-field form-control p-12 text-center rounded-pill mw-100 w-100"  required  disabled>
                                        <input type="hidden" name="hidden_bid_price" id="hidden_bid_price">
                                    </div>
                                <div class="min-w-fit">
                                    <!-- <button  type="submit" id="place-bid" class="btn place-bid-btn px-3"> -->
                                    <a href="{{ route('user.login') }}" class="btn buy-now">Login to Place Bid</a>
                                        Place Bid 
                                    <!-- </button> -->

                                  
                                    

                                </div>
                            </div>
                       @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col 2 -->
            </div>
            <!-- /row  -->
        </div>
        <!---container--->




    </section>
    <!-----Auction-timer------->


    <section class="related-list pb-50 pt-50 mt-3">
        <div class="container">
            <div class="title-section pt-0 pb-0">
                <div class="heading pt-0 text-capitalize">Related Listings</div>
            </div>
              <div class="pt-50">
                <div class="owl-carousel owl-theme mx-0 px-0" id="slider-1">
                    @foreach($relatedListings as $car)
                    <div class="item">
                        <div class="position-relative">
                            <script>
                                var detailsRoute = "{{ route('details', ':id') }}";
                            </script>
                                <div class="inner-box redirect-details" data-car-id="{{ $car->id }}">
                                <div class="car-modal tag">MUV</div>
                                <div class="product-img-box">
                                    <!-- <img class="w-100" src="assets/images/product/product-3.jpg" alt=""> -->
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
                                                <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}"> {{ $car->veh_year }} 
                                            </span>
                                        </div>
                                        <div class="col-6">
                                            <span class="d-flex align-items-center icon-box">
                                                <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}"> {{ $car->veh_mileage }} Km
                                            </span>
                                        </div>
                                        <div class="col-6">
                                            <span class="d-flex align-items-center icon-box">
                                                <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}"> {{ $car->title }} 
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
                                            <a href="#" class="ctm-link">  Buy Now {{ $car->carAuction->buy_now_price ?? '' }}</a>

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
                <!-----Slider---row--->
            </div>
        </div>
        <!--conttainer--->


    </section>
    <!-----Related Listings------->


    <!-- for buy now modle  -->
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog mt-0 mb-0 h-100 modal-lg model-licensesdocuments ">
            <div class="modal-content p-3 model-licensesdocuments-body">

                <div class="modal-body p-0 p-sm-3">
                    <div class="text-dark-gray font-16 font-montserrat font-600 fst-italic line-base">
                        Buy Now
                    </div>
                    <h4
                        class="fs-4 mb-0 d-flex align-items-center justify-content-sm-start justify-content-between text-black font-montserrat text-uppercase fst-italic font-900 mt-3 pb-1">
                        {{ $cardetails->veh_car_model }} <div class="tag2">MUV</div>
                    </h4>
                    <div class="text-gray font-termina font-12 font-600 mt-3">
                        3.5 D5 PowerPulse Momentum 5dr AWD Geartronic Estate
                    </div>
                    <div class="modle-buy-now">
                    @php
                     $carMedia = $cardetails->carMedia->where('type', 'image_form1')->first(); 
                    @endphp

                    @php
                        $latestImagePath = null;
                        if ($carMedia && $carMedia->images) {
                            $imagePaths = explode(',', $carMedia->images);
                            $latestImagePath = reset($imagePaths);
                        }
                    @endphp
                                    
                    @if($latestImagePath)
                    <img src="{{ asset($latestImagePath) }}" class="main_narrow_gallary ag-photo-gallery_img h-100" class="w-100 h-100">
                        @else
                    <img src="{{ asset('frontend/assets/images/livebidding/car4.png') }}" class="ag-photo-gallery_img h-100" class="w-100 h-100">
                    @endif

                    </div>  
                    <div class="d-flex flex-column gap-10">
                        <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Lot No:</div>
                            <div class="font-600">
                            {{ $cardetails->carAuction->lot_number ?? '' }}
                            </div>
                        </div>

                        <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Live Auction </br>
                                Date & Time:</div>
                            <div class="font-600 text-end">
                            @if (isset($cardetails->carAuction->auction_date))
                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_date)->format('d-m-Y') }}<br>
                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_time)->format('H:i') }} GST +4
                            @endif
                            </div>
                        </div>

                        <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" id="current_bid_price">
                            <div>Current Bid:</div>
                            <div class="font-600">
                          
                            </div>
                        </div>

                        <div id="preBidContainerModal"
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Pre-bid Closes In:</div>
                            <div class="font-600" id="preBidDateModal">
                                
                            </div>
                        </div>
                    
                        <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" >
                            <div>Buy Now Price:</div>
                            <div class="font-600">
                            AED {{ $cardetails->carAuction->buy_now_price ?? '' }}
                            </div>
                        </div>

                        <!-- <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Time Left to Buy:</div>
                            <div class="font-600">
                                1d 19h
                            </div>
                        </div> -->

                        <div class="border-bottom"></div>

                        <div class="text-black fs-6 font-500 font-montserrat">
                            If you are awarded this vehicle on Feb 13 (GMT), then
                        </div>

                        <div id="paymentDueContainerModal"
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Payment is due:</div>
                                <div class="font-600" id="paymentDueDateModal">
                              
                            </div>
                        </div>

                        <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Pick up by:</div>
                            <div class="font-600">
                            @if (isset($cardetails->carAuction->pick_up_by))
                                     {{ \Carbon\Carbon::parse($cardetails->carAuction->pick_up_by ?? '')->format('d-m-Y') }}<br>
                             @endif
                            </div>
                        </div>
                                       

                        @auth
                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="mt-10">
                                <button type="submit" class="btn buy-now" id="buy-now-car">Buy Now AED
                                    <span>{{ $cardetails->carAuction->buy_now_price ?? '' }}</span>
                                </button>
                            </div>
                       @else
                            <div class="mt-10">
                                <a href="{{ route('user.login') }}" class="btn buy-now">Login to Buy</a>
                            </div>
                       @endauth
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /for buy now modle  -->
                                   


    <!-- for Bid Now Side Slider  -->
    <div class="modal fade" id="bid-now-modle" data-bs-keyboard="false" tabindex="-1" aria-labelledby="BidNow"
        aria-hidden="true">

        <div class="modal-dialog mt-0 mb-0 h-100 modal-lg model-licensesdocuments ">
            <div class="modal-content p-3 model-licensesdocuments-body">

                <div class="modal-body p-0 p-sm-3">
                   
                    <div class="text-dark-gray font-16 font-montserrat font-600 fst-italic line-base">
                        Bid Now
                    </div>
                    <h4
                        class="fs-4 mb-0 d-flex align-items-center justify-content-sm-start justify-content-between text-black font-montserrat text-uppercase fst-italic font-900 mt-3 pb-1">
                        {{ $cardetails->veh_car_model }} <div class="tag2">MUV</div>
                    </h4>
                    <div class="text-gray font-termina font-12 font-600 mt-3">
                        3.5 D5 PowerPulse Momentum 5dr AWD Geartronic Estate
                    </div>
                    <div class="modle-buy-now">
                    @php
                     $carMedia = $cardetails->carMedia->where('type', 'image_form1')->first(); 
                    @endphp

                    @php
                        $latestImagePath = null;
                        if ($carMedia && $carMedia->images) {
                            $imagePaths = explode(',', $carMedia->images);
                            $latestImagePath = reset($imagePaths);
                        }
                    @endphp
                                    
                    @if($latestImagePath)
                    <img src="{{ asset($latestImagePath) }}" class="main_narrow_gallary ag-photo-gallery_img h-100" class="w-100 h-100">
                        @else
                    <img src="{{ asset('frontend/assets/images/livebidding/car4.png') }}" class="ag-photo-gallery_img h-100" class="w-100 h-100">
                    @endif
                    </div>
                    <div class="d-flex flex-column gap-10">
                        <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Lot No:</div>
                            <div class="font-600">
                                {{ $cardetails->carAuction->lot_number ?? '' }}
                            </div>
                        </div>

                        <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Live Auction </br>
                                Date & Time:</div>
                            <div class="font-600 text-end">
                            @if (isset($cardetails->carAuction->auction_date))
                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_date)->format('d-m-Y') }}<br>
                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_time)->format('H:i') }} GST +4
                            @endif
                            </div>
                        </div>

                        <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" id="current_bid_price">
                            <div>Current Bid:</div>
                            <div class="font-600">
                             
                            </div>
                        </div>

                        <div id="preBidContainerBidModal"
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Pre-bid Closes In:</div>
                            <div class="font-600" id="preBidDateBidModal">
                                2 Days 5 Hours
                            </div>
                        </div>

                        <div class="text-gray font-termina font-14 font-500">
                    
                            <div>Your Bid:</div>
                            <div class="mt-10">
                                <input type="number" name="new_bid_price" id="new_bid_price_id" class="form-control input-field-checkout p-2"
                                    placeholder="Enter amount eg. AED XXXX">
                                    <input type="text" name="hidden_bid_price_id" id="hidden_bid_price_id">
                                    
                            </div>
                            
                        </div>

                        <div class="d-flex gap-10 text-gray font-termina font-14 font-500">
                            <div>Note:</div>
                            <div class="font-montserrat">
                                Lorem ipsum dolor sit amet consectetur. In fringilla rhoncus felis euismod velit eu.
                            </div>
                        </div>

                        <div class="border-bottom"></div>

                        <div class="text-black fs-6 font-500 font-montserrat">
                            If you are awarded this vehicle on Feb 13 (GMT), then
                        </div>

                        <div id="paymentDueContainerBidModal" class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Payment is due:</div>
                            <div class="font-600" id="paymentDueDateBidModal"></div>
                        </div>

                        <div
                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">
                            <div>Pick up by:</div>
                            <div class="font-600">
                                   {{ $cardetails->carAuction->pick_up_by ?? '' }}
                            </div>
                        </div>
                        @auth
                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="mt-10">
                                <button type="submit" class="btn buy-now" id="buy-now-bid">Bid Now</button>
                            </div>
                       @else
                            <div class="mt-10">
                                <a href="{{ route('user.login') }}" class="btn buy-now">Login to Buy</a>
                            </div>
                       @endauth


                        <!-- <div class="mt-10">
                        <button type="submit" class="btn buy-now"  id="buy-now-bid">Bid Now</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /for Bid Now Side Slider  -->

    <div class="position-sticky blur-background z-3 left-0 bottom-0 d-md-none d-block">
        <div class="container py-2">
            <div class="align-items-center breadcrumb-right d-flex gap-2 justify-content-between">
                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn buy-now"> Buy Now AED
                    <span>XXXX</span></button>
                <button data-bs-toggle="modal" data-bs-target="#bid-now-modle" class="btn bid-now">Bid
                    Now</button>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--get car data--->
    <script>
        $(document).ready(function(){
        var carId = $('#car_id').val();
        
        $.ajax({
            type: 'post',
            url: '{{ route('get_car_data') }}', 
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                car_id: carId
            },
            success: function(response) {
                var updatedBidPrice = response.current_bid_price;
                var bidStartPrice = response.bid_start_price;

                if (updatedBidPrice) {
                    var updatedBidPriceWithAddition = parseFloat(updatedBidPrice);
                  
                    if (updatedBidPrice <= 50000) {
                            updatedBidPriceWithAddition += 250;
                    } else if (updatedBidPrice >= 50000 && updatedBidPrice < 100000) {
                            updatedBidPriceWithAddition += 500;
                    } else {
                            updatedBidPriceWithAddition += 1000;
                    }

                    $('#current_bid_price .font-600').text('AED ' + updatedBidPrice);
                    $('#current_bid_price_li').text(updatedBidPrice);
                    $('#new_bid_price').val(updatedBidPriceWithAddition);
                    $('#hidden_bid_price').val(updatedBidPriceWithAddition);

                    // bid now model
                    $('#new_bid_price_id').val(updatedBidPriceWithAddition);
                    $('#hidden_bid_price_id').val(updatedBidPriceWithAddition);

                } else {
                    var updatedBidPriceWithAdditionBidstartPrice = parseFloat(bidStartPrice);

                    if (bidStartPrice < 50000) {
                        updatedBidPriceWithAdditionBidstartPrice += 250;
                    } else if (bidStartPrice < 100000) {
                        updatedBidPriceWithAdditionBidstartPrice += 500;
                    } else {
                        updatedBidPriceWithAdditionBidstartPrice += 1000;
                    }
                    
                    $('#current_bid_price .font-600').text('AED ' + bidStartPrice);
                    $('#current_bid_price_li').text(bidStartPrice);
                    $('#new_bid_price').val(updatedBidPriceWithAdditionBidstartPrice);
                    $('#hidden_bid_price').val(updatedBidPriceWithAdditionBidstartPrice);

                    //bid now model
                    $('#new_bid_price_id').val(updatedBidPriceWithAdditionBidstartPrice);
                    $('#hidden_bid_price_id').val(updatedBidPriceWithAdditionBidstartPrice);

                }
                $('#no_of_bids .font-600').text(response.no_of_bids);
            },
            
            error: function(error) {
                console.log(error);
            }
         });
        });
    </script>


    <script>
    $(document).ready(function(){
        $('#place-bid').on('click', function(event){
            event.preventDefault();
            // alert("hello");
    
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
           
                    // alert(response.message)/
                    window.location.href = '{{ route("user.pricingplan") }}';
                 
                },
                error: function(xhr, status, error) {
                //   console.log(error);
                //   window.location.href = '{{ route('user.login') }}';
                }
            }); 
        });
    });
    </script>
    <!---save bid price--->
    <script>
    $(document).ready(function(){
        $('#buy-now-bid').on('click', function(event){
            
            var carId = $('#car_id').val();
            var hiddenBidPriceId = $('#hidden_bid_price_id').val(); 
        
            $.ajax({
                type: 'POST',
                url: '{{ route('user.store_bid') }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    hidden_bid_price: hiddenBidPriceId,
                    car_id:carId
                },
                success: function(response) {
                  
                    // alert(response.message)
                    window.location.href = '{{ route("user.pricingplan") }}';
                },
                error: function(error) {
                  console.log(error);
                }
            });
        });
    });
    </script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- buy-now-car -->
    <script>
        $(document).ready(function(){
        
        $('#buy-now-car').on('click', function(event){
            event.preventDefault();
            
            var carId = $('#car_id').val();
            var userId = $('#user_id').val();
            var buyNowPrice = $('#buy_now_price_modal .font-600').text().trim(); 
            var buyNowPrice = $(this).find('span').text().trim();

            $.ajax({
                type: 'POST',
                url: '{{ route('user.buy_now_car') }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    buy_now_price: buyNowPrice,
                    car_id:carId,
                    user_id:userId,
                },
                    success: function(response) {
                    window.location.href = '{{ route("user.cart") }}' + '?car_id=' + response.car_id + '&user_id=' + response.user_id;
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    });
    </script>

    <!--script for timer count-->
    @if (isset($cardetails->carAuction->auction_date) && isset($cardetails->carAuction->auction_time))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function parseAuctionTime(auctionTime) {
            return new Date(auctionTime).getTime();   
            }

            function getTimeRemaining(endtime) {

            var currentTime = Date.now();
            var t = endtime - currentTime;
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
                return {
                    total: t,
                    days: days,
                    hours: hours,
                    minutes: minutes,
                    seconds: seconds
                };
            }

            function initializeClock(id, endtime) {

            var clock = document.getElementById(id);
            var daysSpan = clock.querySelector(".days");
            var hoursSpan = clock.querySelector(".hours");
            var minutesSpan = clock.querySelector(".minutes");
            var secondsSpan = clock.querySelector(".seconds");

            function updateClock() {
                var t = getTimeRemaining(endtime);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                    daysSpan.innerHTML = '00';
                    hoursSpan.innerHTML = '00';
                    minutesSpan.innerHTML = '00';
                    secondsSpan.innerHTML = '00';

                    if (carId !== undefined) {
                       
                        $.ajax({
                        type: 'POST',
                        url: '{{ route('update_car_status') }}',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {
                             car_id: carId, 
                        },
                        success: function(response) {
                            
                            // alert(response.message);
                        },
                        error: function(xhr, status, error) {
                            console.error('Failed to update car status:', error);
                        }
                    });
                    }
                } else {
                    daysSpan.innerHTML = t.days;
                    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
                    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);

                        if (t.total <= -48 * 60 * 60 * 1000) {
                         
                        displayPaymentDueDate();
                    }
                }
            }
            updateClock();
                var timeinterval = setInterval(updateClock, 1000);
            }
            
            var auctionDate = "{{ $cardetails->carAuction->auction_date }}";
            var auctionTime = "{{ $cardetails->carAuction->auction_time }}"
            var auctionDateTime = auctionDate + 'T' + auctionTime;
            var endTime = parseAuctionTime(auctionDateTime);
          
            var paymentDueContainer = document.getElementById("paymentDueContainer");
            var paymentDueDateElement = document.getElementById("paymentDueDate");
            var paymentDueTime = endTime + (48 * 60 * 60 * 1000);

            displayPaymentDueDate(paymentDueContainer, paymentDueDateElement, paymentDueTime);

            function displayPaymentDueDate(paymentDueContainer, paymentDueDateElement, paymentDueTime) {

                 var paymentDueDate = new Date(paymentDueTime);
    
                var day = paymentDueDate.getDate();
                var month = paymentDueDate.getMonth() + 1; 
                var year = paymentDueDate.getFullYear();
                
                if (day < 10) {
                    day = '0' + day;
                }
                if (month < 10) {
                    month = '0' + month;
                }
                
                var paymentDueDateString = day + '-' + month + '-' + year;
            
                paymentDueDateElement.textContent = paymentDueDateString;
                
                paymentDueContainer.style.display = "block";
            }
            
            //days and hors

            function displayDaysAndHours(endtime, containerId) {
                var t = getTimeRemaining(endtime);
                var container = document.getElementById(containerId);
                container.textContent = t.days + ' days ' + t.hours + ' hours';
            }

            // show pre bid closes in bidding section
            var preBidCountdownElement = document.getElementById("preBidCountdown");
            var countdownDaysElement = document.getElementById("countdownDays");
            var countdownHoursElement = document.getElementById("countdownHours");

            function updatePreBidCountdown(endtime) {
                var t = getTimeRemaining(endtime);
                preBidCountdownElement.textContent = t.days + ' days ' + t.hours + ' hours';
            }
            
            //define for change stats
            var carId = "{{ $cardetails->id }}";
            initializeClock("countdown", endTime ,carId);

           
            updatePreBidCountdown(endTime);

            // shown in buy now  modal
            $('#staticBackdrop').on('shown.bs.modal', function (e) {

                var paymentDueContainerModal = document.getElementById("paymentDueContainerModal");
                var paymentDueDateElementModal = document.getElementById("paymentDueDateModal");

                paymentDueDateElementModal.textContent = paymentDueDateElement.textContent;
                paymentDueContainerModal.style.display = "block";

                updatePreBidCountdown(endTime);
                var preBidDateModal = document.getElementById("preBidDateModal");
                preBidDateModal.textContent = preBidCountdownElement.textContent;
            });

            
            // for bid now modal
            $('#bid-now-modle').on('shown.bs.modal', function (e) {
            var paymentDueContainerBidModal = document.getElementById("paymentDueContainerBidModal");
            var paymentDueDateElementBidModal = document.getElementById("paymentDueDateBidModal");

            paymentDueDateElementBidModal.textContent = paymentDueDateElement.textContent;
            paymentDueContainerBidModal.style.display = "block";

            
            updatePreBidCountdown(endTime);


            var preBidDateBidModal = document.getElementById("preBidDateBidModal");
            preBidDateBidModal.textContent = preBidCountdownElement.textContent;
        });
    
        paymentDueContainerModal

        });

    </script>
    @endif

    <!---show details on by now modal--->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
 
        function displayPaymentDueDate(paymentDueContainer, paymentDueDateElement, paymentDueTime) {
        var paymentDueDate = new Date(paymentDueTime);

        var day = paymentDueDate.getDate();
        var month = paymentDueDate.getMonth() + 1; 
        var year = paymentDueDate.getFullYear();
        
        if (day < 10) {
            day = '0' + day;
        }
        if (month < 10) {
            month = '0' + month;
        }
        
        var paymentDueDateString = day + '-' + month + '-' + year;

       
        paymentDueDateElement.textContent = paymentDueDateString;
        paymentDueContainer.style.display = "block";
        }
        
        var paymentDueContainer = document.getElementById("paymentDueContainerModal");
        var paymentDueDateElement = document.getElementById("paymentDueDateModal");

        var currentTime = Date.now();
        var paymentDueTime = currentTime + (48 * 60 * 60 * 1000);

        displayPaymentDueDate(paymentDueContainer, paymentDueDateElement, paymentDueTime);

            $('#staticBackdrop').on('shown.bs.modal', function (e) {

             
                var paymentDueContainerModal = document.getElementById("paymentDueContainerModal");
                var paymentDueDateElementModal = document.getElementById("paymentDueDateModal");

                paymentDueDateElementModal.textContent = paymentDueDateElement.textContent;
                paymentDueContainerModal.style.display = "block";
            });
        });

    </script>

    <!-- car overview score -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const accordionItems = document.querySelectorAll('.accordion-item');

            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                const content = item.querySelector('.accordion-content');
                const chevron = item.querySelector('.chevron');

                // Close accordion content and set chevron icon to up by default
                content.style.display = 'none';
                chevron.classList.add('fa-chevron-up');

                header.addEventListener('click', () => {
                item.classList.toggle('active');

                if (content.style.display === 'none') {
                    content.style.display = 'block';
                    chevron.classList.remove('fa-chevron-down');
                    chevron.classList.add('fa-chevron-up');
                } else {
                    content.style.display = 'none';
                    chevron.classList.remove('fa-chevron-up');
                    chevron.classList.add('fa-chevron-down');
                }
                });
            });
        });
    </script>
   
@endsection 