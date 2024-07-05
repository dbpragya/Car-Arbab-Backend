@extends('frontend.layouts.app')
@section('content')

<section class="breadcrumb">

        <div class="container">
            <div class="row mx-0 px-0">
                <div class="col-lg-12 mx-0 px-0">
                    <div class="title-section text-center animated wow flash delay-2s">
                        <div class="heading">Start Bidding Now and Drive Home Your Dream Car!</div>
                        <p class="title-p">Live Car Auction Showcase!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="scroll-none" id="">
        <div class="fillter-btn bg-f7 onscroll-fixed">
            <div class="container">
                <div class="row mx-0 px-0 ">
                    <div class="col-lg-12  mx-0 px-0 d-flex">
                        <i class="button--left fa-solid fa-chevron-left" id="slideBack"></i>
                        <div class="scroll-x mt-3 mx-3">
                            <div class="btn-group ml-10" role="group" aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck1" name="chassis_perfect" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck1">Chassis Perfect</label>

                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck2" name="gcc_specs" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck2">GCC Specs</label>

                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck3" name="warranty_available" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck3">Warranty Available</label>

                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck4"  name="ending_soon" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck4">Ending Soon</label>

                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck5" name="rear_wheel_drive" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck5">Rear Wheel Drive</label>

                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck6" name="bank_loan_available" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck6">Bank Loan Available</label>

                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck7" name="low_mileage" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck7">Low Milage</label>


                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck8" name="accident_free" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck8">Accident Free</label>

                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck9" name="brand_new_car" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck9">Brand New Car</label>

                                <!-- <input type="checkbox" class="btn-check filter-sticker" id="btncheck10" name="" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck10">Accident Free</label> -->

                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck11" name="front_wheel_drive" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck11">Front Wheel Drive</label> 

                                <input type="checkbox" class="btn-check" id="btncheck12" name="high_end_vehicle" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck12">High End Vehicles</label>

                                <input type="checkbox" class="btn-check filter-sticker" id="btncheck13" name="no_air_bag" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck13">No Airbags Deployed</label>
                            </div>
                        </div>
                        <i class="button--right fa-solid fa-chevron-right" id="slide"></i>
                    </div>
                </div>
            </div>
        </div>
        <!---------->
        <!---Breadcrumb---->
        <!---offcanvas---->

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="left-toggle-filter"
            aria-labelledby="left-toggle-filterLabel">
            <div class="offcanvas-header  shadow-sm align-items-center dropdown">
                <h5 class="offcanvas-title" id="left-toggle-filterLabel">
                    Filter
                </h5>
                <button type="button" class="fa-light material-icons  bg-white text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close">tune</button>
            </div>
            <div class="offcanvas-body">

                <div class="toggele-dropdownbox d-flex justify-content-between toggle-1">
                    <div class="title align-items-start">Car Filter</div>
                    <div class="icon align-items-end"><i class="fa-light fa-angles-down"></i></div>
                    <!-- <i class="">downloading</i> -->

                </div>

                <div class="car-filter filter-1" style="display:none;">
                    <select class="form-select car-select" aria-label="" id="veh_car_make_id" name="veh_car_make_id">
                        <option value="" selected>Select Make</option>
                            @foreach($vehiclemake as $vmake)
                                    <option value="{{ $vmake->id }}">{{ $vmake->name }}
                                </option>
                            @endforeach
                    </select>

                    <select class="form-select car-select" aria-label="" id="veh_car_model" name="veh_car_model">
                     <option value="" selected>Select Model</option>
                            @foreach($carmodels as $carId => $carmodel)
                                    <option value="{{ $carmodel }}">{{ $carmodel }}
                                </option>
                            @endforeach
                    </select>

                    <select class="form-select car-select" aria-label="" id="trimdata" name="trimdata">
                        <option value="" selected>Select Trim</option>
                            @foreach($cartrim as $ctrim)
                                    <option value="{{ $ctrim }}">{{ $ctrim }}
                                </option>
                            @endforeach
                    </select>

                    <select class="form-select car-select" aria-label="" id="vehicle_condition_id" name="vehicle_condition_id">
                    <option value="" selected>Select Vehicle Condition</option>
                        @foreach($vehiclecondition as $vehcondition)
                            <option value="{{ $vehcondition->id }}">
                                {{ $vehcondition->name }}
                            </option>
                        @endforeach
                    </select>

                    <select class="form-select car-select" aria-label="" id="veh_fueltype_id" name="veh_fueltype_id">
                        <option selected>Select Fuel Type</option>
                            @foreach($vehfueltype as $fuel)
                                    <option value="{{ $fuel->id }}">{{ $fuel->name }}
                                </option>
                            @endforeach
                    </select>


                    <select class="form-select car-select" aria-label="" id="no_of_cylinder" name="no_of_cylinder">
                        <option selected>Select Cylinders</option>
                        @foreach($vehicleNoOfCylinder as $vehcylinder)
                            <option value="{{ $vehcylinder->id }}">
                                {{ $vehcylinder->size }}
                                </option>
                            @endforeach
                    </select>

                    <select class="form-select car-select" aria-label="" id="vehicle_engine_size" name="vehicle_engine_size">
                        <option value="">Select Engine Size</option>
                            @foreach($carenginesize as $carengine)
                            <option value="{{ $carengine }}">{{ $carengine }}</option>
                            @endforeach

                    </select>

                    <select class="form-select car-select" aria-label="" id="vehicle_transmission_id" name="vehicle_transmission_id">
                        <option value="">Select Transmission</option>
                        @foreach($vehicletransmission as $vtransmission)
                            <option value="{{ $vtransmission->id }}">{{ $vtransmission->name }}</option>
                        @endforeach
                    </select>

                    <select class="form-select car-select" aria-label="" id="drive_type" name="drive_type">
                        <option value="" selected>Select Drive Type</option>
                        @foreach($drivetype as $drive)
                            <option value="{{ $drive->id }}">{{ $drive->name }}</option>
                        @endforeach
                    </select>


                    <div class="year-range my-3">
                        Mileage Range
                        <div class="year-input range-select">
                            <div class="field">
                                <input type="number" class="range-select input-min rounded-pill text-black font-500 font-14 font-termina" value="0"  name="veh_mileage">
                            </div>
                            <div class="separator">To</div>
                            <div class="field">
                                <input type="number" class="range-select input-max rounded-pill text-black font-500 font-14 font-termina" value="75000" name="veh_mileage" >
                            </div>
                        </div>

                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000" value="0" step="1">
                            <input type="range" class="range-max" min="0" max="10000" value="10000" step="1">
                        </div>
                    </div>

                    <div class="year-range my-3">
                        Year
                        <div class="year-input range-select">
                            <div class="field">
                                <input type="number"
                                    class="range-select input-min rounded-pill text-black font-500 font-14 font-termina" value="1990" name="veh_year">
                            </div>
                            <div class="separator">To</div>
                            <div class="field">
                                <input type="number"
                                    class="range-select input-max rounded-pill text-black font-500 font-14 font-termina" value="2025" name="veh_year">
                            </div>
                        </div>

                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input odometer-range-input">
                            <input type="range" class="range-min" min="1990" max="2024" value="0" step="1">
                            <input type="range" class="range-max" min="1990" max="2024" value="2024" step="1">
                        </div>
                    </div>

                    <select class="form-select car-select" aria-label="" id="body_type" name="body_type">
                        <option value="" selected>Select Body Type</option>
                            @foreach($vehiclebodytype as $vehbodytype)
                            <option value="{{ $vehbodytype->id }}" >{{ $vehbodytype->name }}</option>
                            @endforeach
                    </select>

                </div>

                <div class="toggele-dropdownbox d-flex justify-content-between toggle-2">
                    <div class="title align-items-start">Sale Filter</div>
                    <div class="icon align-items-end"><i class="fa-light fa-angles-down"></i></div>
                    <!-- <i class="material-icons">downloading</i> -->

                </div>


                <div class="car-filter filter-2" style="display:none;">

                    <select class="form-select car-select-auction-type" aria-label="" id="auction_type_id" name="auction_type_id">
                        <option value="" selected> Select Auction Type</option>
                            @foreach($auctiontype as $auctype)
                                <option value="{{ $auctype->id }}">
                                {{ $auctype->name }}
                                </option>
                            @endforeach
                    </select>

                    <div class="year-range my-3">
                        Price
                        <div class="year-input range-select">
                            <div class="field">
                                <input type="number" class="range-select input-min rounded-pill text-black font-500 font-14 font-termina" value="1990" name="veh_year">
                            </div>
                            <div class="separator">To</div>
                            <div class="field">
                                <input type="number"
                                    class="range-select input-max rounded-pill text-black font-500 font-14 font-termina" value="2025" name="buy_now_price">
                            </div>
                        </div>

                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000" value="0" step="1">
                            <input type="range" class="range-max" min="0" max="10000" value="10000" step="1">
                        </div>
                    </div>

                    <select class="form-select car-select" aria-label="" id="vehicle_regional_spec" name="vehicle_regional_spec">
                        <option value="" selected>Select Regional Specifications</option>
                        @foreach($vehicleregionalspec as $vregionalspec)
                            <option value="{{ $vregionalspec->id }}">
                                {{ $vregionalspec->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!----Offcanvas-body------>
        </div>

        <!----offcanvas------>

        <div class="all-box">

            <i class="material-icons btn left-filter-btn" data-bs-toggle="offcanvas"
                data-bs-target="#left-toggle-filter" aria-controls="left-toggle-filter">tune</i>

            <div class="container mt-50 mb-50">

                <div class="row" id="carListing">
                    @foreach($cars as $car)
                    <div class="col-lg-4 col-md-6 mt-25 position-relative car-item" data-car-id="{{ $car->id }}" >
                        <script>
                             var detailsRoute = "{{ route('details', ':id') }}";
                        </script>
               
                        <div class="inner-box redirect-details" data-car-id="{{ $car->id }}">
                            <div class="car-modal tag">MUV</div>
                            <div class="product-img-box">
                               

                                     @php
                                        $carMedia = $car->carMedia->where('type', 'thmnail')->first(); 
                                    @endphp

                                    @if($carMedia && $carMedia->images)
                                        @php
                                            $imagePaths = explode(',', $carMedia->images);
                                        @endphp
                                        @foreach($imagePaths as $image)
                                            <img class="w-100" src="{{ asset('public/' .$image) }}" alt="">
                                            @break 
                                        @endforeach
                                    @else
                                        <!--<img class="w-100" src="{{ asset('frontend/assets/images/product/product-11.png') }}" alt="">-->
                                    @endif

                                <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                {{ $car->carAuction->estimated_market_value ?? '' }}</span>
                                </div>

                            </div>
    
                            <div class="details">
                                <div class="br-md-area">
                                    <div class="brand-name">{{ $car->vehicleMake->name?? '' }}</div>
                                    <div class="model-name">{{ $car->veh_car_model }}</div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <div class="one-two-c-it">
                                                <div class="one-card-it">
                                                    <div class="">
                                                        <span class="d-flex align-items-center icon-box">
                                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}">{{ $car->veh_year ?? ''}} 
                                                        </span>
                                                    </div>
                                                    <div class="">
                                                        <span class="d-flex align-items-center icon-box">
                                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}">{{ $car->veh_mileage }}Km
                                                        </span>
                                                    </div>
                                                    <div class="">
                                                        <span class="d-flex align-items-center icon-box">
                                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}">{{ $car->title }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="two-card-it">
                                                    <div class="">
                                                        <span class="d-flex align-items-center icon-box">
                                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}">{{ $car->vehicleregionalspec->name ?? '' }}
                                                        </span>
                                                    </div>

                                                    <div class="">
                                                        <span class="d-flex align-items-center icon-box">
                                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}"> {{ $car->vehicleTransmission->name ?? '' }}
                                                        </span>
                                                    </div>
                                                    <div class="">
                                                        <span class="d-flex align-items-center icon-box">
                                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}">{{ $car->vehicleNoOfCylinder->size ?? '' }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-12 m-auto">
                                        <div class="divider"> </div>
                                    </div>
                                    
                                    <div class="one-two-c-it mt-1 mb-1">
                                         <div class="one-card-it cost-box">
                                        <div class="pri">Repair Cost:</div>
                                        <div class="amou d-flex justify-content-between">
                                            AED {{ $car->carAuction->estimated_repair_cost ?? '' }}
                                        </div>
                                    </div>
                                    
                                     <div class="two-card-it cost-box">
                                        <div class="pri">Current Bid Price:</div>
                                        <!--<div class="amou d-flex justify-content-between"  id="current_bid_price_{{ $car->id }}">-->
                                          <div class="amou d-flex justify-content-between"  id="">
                                         <span class="font-600"></span>
                                         AED {{ $car->carAuction->current_bid_price ?? '' }}
                                        </div>
                                    </div>
                                    </div>
                                    <!-- <div class="col-6 cost-box">
                                        <div class="pri">Current Bid Price:</div>
                                        <div class="amou d-flex justify-content-between">
                                            AED {{ $car->carAuction->current_bid_price ?? '' }}
                                        </div>
                                    </div> -->
                                    
                                    <div class="bt-combo">
                                        <div class="bt-one">
                                        <a href="#" class="btn bid-btn">Bid Now</a>
                                    </div>

                                    <div class="bt-two text-center">
                                        <a href="#" class="ctm-link bn-btn btn"> Buy Now {{ $car->carAuction->buy_now_price ?? '' }}</a>

                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="like-car">
                            <div class="form-check">
                                <input type="checkbox" id="customCheckbox-13" class="custom-checkbox form-check-input">
                                <label for="customCheckbox-13" class="form-check-label"></label>
                            </div>
                        </div>
                    </div>
                    <!---col--->
                @endforeach
            
                </div>
                <!----row----->
                <div class="row px-0 mx-auto text-center mt-25 mb-25">
                    <div class="col-lg-5 mx-auto  d-flex justify-content-center">

                        <button class="btn-load-more" id="loadMoreBtn"><i class="fa-solid fa-spinner"></i> &nbsp; More </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <!-- sticker filters -->
    <script>
        
        document.querySelectorAll('.filter-sticker').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
    
            var checkedNames = [];
            document.querySelectorAll('.filter-sticker:checked').forEach(function(checkedCheckbox) {
                checkedNames.push(checkedCheckbox.getAttribute('name'));
            });

            $.ajax({
                url: '{{ route('list.stickerfilter') }}',
                type: 'get',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {checked_names: checkedNames},
                success: function(response) {
        
            
                $('#carListing').empty();
                if(response.filteredSticker && response.filteredSticker.length > 0) {
                 $.each(response.filteredSticker, function(index, carauction) {

                 var imageUrl = '{{ asset("frontend/assets/images/product/product-11.png") }}';
                if (carauction.car.car_media && carauction.car.car_media.length > 0) {
                
                
                    for (var i = 0; i < carauction.car.car_media.length; i++) {
                        if (carauction.car.car_media[i].type === 'thmnail') {
                        var imagePaths = carauction.car.car_media[i].images.split(',');
                        imageUrl = '{{ asset('public/' .':imagePath') }}'.replace(':imagePath', imagePaths[0]);
                        break;
                        }
                    }   
                }
              
                 var carHtml = `

                    <div class="col-lg-4 col-md-6 mt-25 position-relative">
                    
                        <div class="inner-box redirect-details" data-car-id="${carauction.car.id}">
                            <div class="car-modal tag">MUV</div>
                            <div class="product-img-box">
                                    <img class="w-100" src="${imageUrl}" alt="">
                                <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                    ${carauction ? carauction.estimated_market_value: ''}</span>
                                </div>
                            </div>

                    <div class="details">
                        <div class="br-md-area">
                            <div class="brand-name">${carauction.car.vehiclemake ? carauction.car.vehiclemake.name : ''}</div>
                            <div class="model-name">${carauction.car ? carauction.car.veh_car_model : ''} </div>

                        </div
                    
                        <div class="row">
                        
                            <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                                <div class="one-two-c-it">
                                    <div class="one-card-it">
                                     <div class="">
                                <span class="d-flex align-items-center icon-box">
                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}">${carauction.car.veh_year ? carauction.car.veh_year:'' } 
                                </span>
                            </div>
                            <div class="">
                                <span class="d-flex align-items-center icon-box">
                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}">${carauction.car ? carauction.car.veh_mileage:'' }  KM
                                    
                                </span>
                            </div>
                            <div class="">
                                <span class="d-flex align-items-center icon-box">
                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}">${carauction.car.title ? carauction.car.title:'' } 
                                </span>
                            </div>
                                    
                                    </div>
                                    
                                    <div class="two-card-it">
                                    <div class="">
                                <span class="d-flex align-items-center icon-box">
                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}">${carauction.car.vehicleregionalspec ? carauction.car.vehicleregionalspec.name : ''}  
                                </span>
                            </div>
                            <div class="">
                                <span class="d-flex align-items-center icon-box">
                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}"> ${carauction.car.vehicletransmission ? carauction.car.vehicletransmission.name : ''}
                                </span>
                            </div>

                            <div class="">
                                <span class="d-flex align-items-center icon-box">
                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}"> ${carauction.car.vehiclenoofcylinder ? carauction.car.vehiclenoofcylinder.size : ''}
                                </span>
                            </div>
                                    
                                    </div>
                                </div>
                            </div>
                           
                            

                            <div class="col-12 m-auto">
                                <div class="divider"> </div>
                            </div>
                            
                             <div class="one-two-c-it mt-1 mb-1">
                              <div class="one-card-it cost-box">
                                <div class="pri">Repair Cost:</div>
                                <div class="amou d-flex justify-content-between">
                                    AED ${carauction ? carauction.estimated_repair_cost : ''}
                                </div>
                            </div>
                            <div class="two-card-it cost-box">
                                <div class="pri">Current Bid Price:</div>
                                <div class="amou d-flex justify-content-between" id="current_bid_price_sticker_${ carauction.car.id }">
                                  
                                </div>  
                            </div>
                            
                             
                             </div>

                            <div class="col-12">
                                <a href="#" class="btn bid-btn">Bid Now</a>
                            </div>

                            <div class="col-12 text-center">
                                <a href="#" class="ctm-link"> Buy Now ${carauction ? carauction.buy_now_price : ''}
                                    </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="like-car">
                    <div class="form-check">
                        <input type="checkbox" id="customCheckbox-13" class="custom-checkbox form-check-input">
                        <label for="customCheckbox-13" class="form-check-label"></label>
                    </div>
                </div>
            </div>`;
                // Append the car HTML to the car listing container
                $('#carListing').append(carHtml);
            });
            }else{
                $('#carListing').html('<h3 class="text-center">No records found</h3>');

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
    <!--end stiker filters-->

    <!-- year filter on keyup  -->
    <script>
            // $(document).on('click', '.redirect-details', function() {
            // var carId = $(this).data('car-id');
    
            // var detailsUrl = "{{ route('details', ':id') }}".replace(':id', carId);
            // window.location.href = detailsUrl;
            // });


            $('.range-select').on('keyup', function(event) {

            var name = $(this).closest('.range-select').find('.input-min').attr('name');
            var minVal = $(this).closest('.range-select').find('.input-min').val();
            var maxVal = $(this).closest('.range-select').find('.input-max').val();
            $.ajax({
            url: '{{ route('list.rangefilter') }}', 
            type: 'get',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                min_value : minVal,
                max_value: maxVal,
                Name: name,
    
            }, 
            success: function(response) {
    
                $('#carListing').empty();
                if(response.filteredMileagerange && response.filteredMileagerange.length > 0) {
                $.each(response.filteredMileagerange, function(index, car) {

                var imageUrl = '{{ asset("frontend/assets/images/product/product-11.png") }}';
                if (car.carmedia && car.carmedia.length > 0) {
                    for (var i = 0; i < car.carmedia.length; i++) {
                        if (car.carmedia[i].type === 'thmnail') {
                            var imagePaths = car.carmedia[i].images.split(',');
                            imageUrl = '{{ asset('public/' .':imagePath') }}'.replace(':imagePath', imagePaths[0]);
                            break;
                        }
                    }   
                }
                
                var carHtml = `

                <div class="col-lg-4 col-md-6 mt-25 position-relative">
                        
                            <div class="inner-box redirect-details" data-car-id="${car.id}">
                                <div class="car-modal tag">MUV</div>
                                <div class="product-img-box">
                                        <img class="w-100" src="${imageUrl}" alt="">
                                    <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                        ${car.carauction ? car.carauction.estimated_market_value: ''}</span>
                                    </div>
                                </div>

                        <div class="details">
                         <div class="br-md-area">
                         <div class="brand-name">${car.vehiclemake ? car.vehiclemake.name : ''}</div>
                            <div class="model-name">${car.veh_car_model ? car.veh_car_model : ''} </div>
                            
                         </div>
                            
                            <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                            <div class="one-two-c-it">
                             <div class="one-card-it">
                             <div class="">
                                    <span class="d-flex align-items-center icon-box">
                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}">${car.veh_year ?car.veh_year:'' } 
                                    </span>
                                </div>
                                <div class="">
                                    <span class="d-flex align-items-center icon-box">
                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}">${car.veh_mileage ?car.veh_mileage:'' }  KM
                                        
                                    </span>
                                </div>
                                <div class="">
                                    <span class="d-flex align-items-center icon-box">
                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}">${car.title ?car.title:'' } 
                                    </span>
                                </div>
                             </div>
                             <div class="two-card-it">
                             <div class="">
                                    <span class="d-flex align-items-center icon-box">
                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}"> ${car.vehicleregionalspec ? car.vehicleregionalspec.name : ''}  
                                    </span>
                                </div>
                                <div class="">
                                    <span class="d-flex align-items-center icon-box">
                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}"> ${car.vehicletransmission ? car.vehicletransmission.name : ''}
                                    </span>
                                </div>

                                <div class="">
                                    <span class="d-flex align-items-center icon-box">
                                        <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}"> ${car.vehiclenoofcylinder ? car.vehiclenoofcylinder.size : ''}
                                    </span>
                                </div></div>
                            </div>
                            
                            </div>
                                
                                

                                <div class="col-12 m-auto">
                                    <div class="divider"> </div>
                                </div>
                                
                                 <div class="one-two-c-it mt-1 mb-1">
                                  <div class="one-card-it cost-box">
                                    <div class="pri">Repair Cost:</div>
                                    <div class="amou d-flex justify-content-between">
                                        AED ${car.car_auction ? car.car_auction.estimated_repair_cost : ''}
                                    </div>
                                </div>

                                <div class="two-card-it cost-box">
                                    <div class="pri">Current Bid Price:</div>
                                    <div class="amou d-flex justify-content-between">
                                        AED ${car.car_auction ? car.car_auction.current_bid_price : ''}
                                    </div>
                                </div>
                                 
                                 </div>

                               <div class="bt-combo">
                               <div class="col-12">
                                    <a href="#" class="btn bid-btn">Bid Now</a>
                                </div>

                                <div class="col-12 text-center">
                                    <a href="#" class="ctm-link bn-btn btn"> Buy Now ${car.car_auction ? car.car_auction.buy_now_price : ''}
                                        </a>

                                </div>
                               </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="like-car">
                        <div class="form-check">
                            <input type="checkbox" id="customCheckbox-13" class="custom-checkbox form-check-input">
                            <label for="customCheckbox-13" class="form-check-label"></label>
                        </div>
                    </div>
                </div>`;
                    // Append the car HTML to the car listing container
                    $('#carListing').append(carHtml);
                });
            }else{
                $('#carListing').html('<h3 class="text-center">No records found</h3>');

                }

            },
            error: function(error) {
                console.error(error); 
            }
            });
        });
    </script>
    <!--start dropdown filter-->

    <script>

        $(document).on('click', '.redirect-details', function() {
            var carId = $(this).data('car-id');
            var detailsUrl = "{{ route('details', ':id') }}".replace(':id', carId);
            window.location.href = detailsUrl;
        });

        $('.car-select').on('change', function() {

        var selectedDropdownId = $(this).attr('id'); 
        var selectedValue = $(this).val();
        var selectedText = $(this).find('option:selected').text();

        
            $.ajax({
                url: '{{ route('list.filter_make') }}', 
                type: 'get',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    selected_id: selectedDropdownId,
                    selected_value: selectedValue,
                    selected_text: selectedText
                }, 
                success: function(response) {
        
                    $('#carListing').empty();
                    if(response.filteredCars && response.filteredCars.length > 0) {
                    $.each(response.filteredCars, function(index, car) {

                    var imageUrl = '{{ asset("frontend/assets/images/product/product-11.png") }}';
                    if (car.carmedia && car.carmedia.length > 0) {
                        for (var i = 0; i < car.carmedia.length; i++) {
                            if (car.carmedia[i].type === 'thmnail') {
                                var imagePaths = car.carmedia[i].images.split(',');
                                imageUrl = '{{ asset('public/' .':imagePath') }}'.replace(':imagePath', imagePaths[0]);
                                break;
                            }
                        }   
                    }

                    var carHtml = `
                
                    <div class="col-lg-4 col-md-6 mt-25 position-relative">
                                <div class="inner-box redirect-details" data-car-id="${car.id}">
                                    <div class="car-modal tag">MUV</div>
                                    <div class="product-img-box">
                                            <img class="w-100" src="${imageUrl}" alt="">
                                        <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                            ${car.carauction ? car.carauction.estimated_market_value: ''}</span>
                                        </div>
                                    </div>

                            <div class="details">
                            <div class="br-md-area">
                              <div class="brand-name">${car.vehiclemake ? car.vehiclemake.name : ''}</div>
                                <div class="model-name">${car.veh_car_model ? car.veh_car_model : ''} </div>
                            </div>
                           
                                <div class="row">
                                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                                <div class="one-two-c-it">
                                <div class="one-card-it">
                                 <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}">${car.veh_year ?car.veh_year:'' } 
                                        </span>
                                    </div>
                                    <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}">${car.veh_mileage ?car.veh_mileage:'' }  KM
                                            
                                        </span>
                                    </div>
                                    <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}">${car.title ?car.title:'' } 
                                        </span>
                                    </div>
                                </div>
                                <div class="one-card-it">
                                <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}"> ${car.vehicleregionalspec ? car.vehicleregionalspec.name : ''}  
                                        </span>
                                    </div>
                                    <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}"> ${car.vehicletransmission ? car.vehicletransmission.name : ''}
                                        </span>
                                    </div>

                                    <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}">${car.vehiclenoofcylinder ? car.vehiclenoofcylinder.size : ''}
                                        </span>
                                    </div>
                                </div>
                                </div>
                                
                                </div>
                                   

                                    <div class="col-12 m-auto">
                                        <div class="divider"> </div>
                                    </div>
                                    
                                     <div class="one-two-c-it mt-1 mb-1">
                                     <div class="one-card-it cost-box">
                                        <div class="pri">Repair Cost:</div>
                                        <div class="amou d-flex justify-content-between">
                                            AED ${car.carauction ? car.carauction.estimated_repair_cost : ''}
                                        </div>
                                    </div>

                                    <div class="two-card-it cost-box">
                                        <div class="pri">Current Bid Price:</div>
                                        <div class="amou d-flex justify-content-between">
                                            AED ${car.carauction ? car.carauction.current_bid_price : ''}
                                        </div>
                                    </div>

                                      </div>
                                      
                                      <div class="bt-combo">
                                       <div class="bt-one">
                                        <a href="#" class="btn bid-btn">Bid Now</a>
                                        </div>

                                        <div class="bt-two text-center">
                                        <a href="#" class="ctm-link bn-btn btn"> Buy Now ${car.carauction ? car.carauction.buy_now_price : ''}</a>
                                        </div>
                                      </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="like-car">
                            <div class="form-check">
                                <input type="checkbox" id="customCheckbox-13" class="custom-checkbox form-check-input">
                                <label for="customCheckbox-13" class="form-check-label"></label>
                            </div>
                        </div>
                    </div>`;
                    
                        $('#carListing').append(carHtml);
                    });
                }else{

                    $('#carListing').html('<h3 class="text-center">No records found</h3>');

                    }
                },
                error: function(error) {
                    console.error(error); 
                }
            });
        });
    </script> 
    
    <!--start dropdown action filter-->
    <script>
        $('.car-select-auction-type').on('change', function() {

        var selectedDropdownId = $(this).attr('id'); 
        var selectedValue = $(this).val();
        var selectedText = $(this).find('option:selected').text();

            $.ajax({
                url: '{{ route('list.filter_make_auction_type') }}', 
                type: 'get',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    selected_id: selectedDropdownId,
                    selected_value: selectedValue,
                    selected_text: selectedText
                }, 
                success: function(response) {

                    $('#carListing').empty();
                    if(response.filteredauction && response.filteredauction.length > 0) {
                    $.each(response.filteredauction, function(index, carauction) {

                    var imageUrl = '{{ asset("frontend/assets/images/product/product-11.png") }}';
                  
           
                    if (carauction.car.car_media && carauction.car.car_media.length > 0) {
                    
                        for (var i = 0; i < carauction.car.car_media.length; i++) {
                            if (carauction.car.car_media[i].type === 'thmnail') {
                            var imagePaths = carauction.car.car_media[i].images.split(',');
                            imageUrl = '{{ asset('public/' .':imagePath') }}'.replace(':imagePath', imagePaths[0]);
                            break;
                            }
                        }   
                    }

                    var carHtml = `

                    <div class="col-lg-4 col-md-6 mt-25 position-relative">
                                <div class="inner-box redirect-details" data-car-id="${carauction.id}">
                                    <div class="car-modal tag">MUV</div>
                                    <div class="product-img-box">
                                            <img class="w-100" src="${imageUrl}" alt="">
                                        <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                            ${carauction.car ? carauction.car.estimated_market_value: ''}</span>
                                        </div>
                                    </div>

                            <div class="details">
                            <div class="br-md-area">
                               <div class="brand-name">${carauction.car.vehiclemake ? carauction.car.vehiclemake.name : ''}</div>
                                <div class="model-name">${carauction.car.veh_car_model ? carauction.car.veh_car_model : ''} </div>
                            </div>
                         
                                
                                <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                <div class="one-two-c-it">
                                <div class="one-card-it">
                                <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}">${carauction.car.veh_year ?carauction.car.veh_year:'' } 
                                        </span>
                                    </div>
                                    <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}">${carauction.car.veh_mileage ?carauction.car.veh_mileage:'' }  KM
                                            
                                        </span>
                                    </div>
                                    <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}">${carauction.car.title ?carauction.car.title:'' } 
                                        </span>
                                    </div>
                                </div>
                                 <div class="two-card-it">
                                 <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}"> ${carauction.car.vehicleregionalspec ? carauction.car.vehicleregionalspec.name : ''} 
                                        </span>
                                    </div>
                                    <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}">${carauction.car.vehicletransmission ? carauction.car.vehicletransmission.name : ''}
                                        </span>
                                    </div>

                                    <div class="">
                                        <span class="d-flex align-items-center icon-box">
                                            <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}"> ${carauction.car.vehiclenoofcylinder ? carauction.car.vehiclenoofcylinder.size : ''}
                                        </span>
                                    </div>
                                 </div>
                                </div>
                                </div>
                                    
                                    

                                    <div class="col-12 m-auto">
                                        <div class="divider"> </div>
                                    </div>
                                    
                                     <div class="one-two-c-it mt-1 mb-1">
                                      <div class="one-card-it cost-box">
                                        <div class="pri">Repair Cost:</div>
                                        <div class="amou d-flex justify-content-between">
                                            AED ${carauction ? carauction.estimated_repair_cost : ''}
                                        </div>
                                    </div>

                                    <div class="two-card-it cost-box">
                                        <div class="pri">Current Bid Price:</div>
                                        <div class="amou d-flex justify-content-between">
                                            AED ${carauction ? carauction.current_bid_price : ''}
                                        </div>
                                    </div>
                                     </div>
                                   
                                   
                                    <div class="bt-combo">
                                    <div class="bt-one">
                                        <a href="#" class="btn bid-btn">Bid Now</a>
                                    </div>

                                    <div class="bt-two text-center">
                                        <a href="#" class="ctm-link bn-btn btn"> Buy Now ${carauction ? carauction.buy_now_price : ''}</a>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="like-car">
                            <div class="form-check">
                                <input type="checkbox" id="customCheckbox-13" class="custom-checkbox form-check-input">
                                <label for="customCheckbox-13" class="form-check-label"></label>
                            </div>
                        </div>
                    </div>`;
                      
                        $('#carListing').append(carHtml);
                    });
                }else{
                        $('#carListing').html('<h3 class="text-center">No records found</h3>');
                    }
                },
                error: function(error) {
                    console.error(error); 
                }
            });
        });
    </script>
    
    <script>
        $(document).ready(function(){
            $('.car-item').each(function(){
                var carId = $(this).data('car-id'); // Retrieve car ID from data attribute

                // Your Ajax request using the carId
                $.ajax({
                    type: 'post',
                    url: '{{ route('get_car_data') }}', 
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        car_id: carId
                    },
                    success: function(response) {
                        // Handle success response here
                       
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

                    $('#current_bid_price_' + carId + ' .font-600').text('AED ' +updatedBidPrice);
                    
                    // for sowing in sticker filter
                    $('#current_bid_price_sticker_' + carId).text(updatedBidPrice);

                    $('#new_bid_price').val(updatedBidPriceWithAddition);
                    $('#hidden_bid_price').val(updatedBidPriceWithAddition);

                   
                } else {
                    var updatedBidPriceWithAdditionBidstartPrice = parseFloat(bidStartPrice);

                    if (bidStartPrice < 50000) {
                        updatedBidPriceWithAdditionBidstartPrice += 250;
                    } else if (bidStartPrice < 100000) {
                        updatedBidPriceWithAdditionBidstartPrice += 500;
                    } else {
                        updatedBidPriceWithAdditionBidstartPrice += 1000;
                    }
                    
                    $('#current_bid_price_' + carId + ' .font-600').text('AED ' +bidStartPrice);
              
                     // for sowing in sticker filter
                     $('#current_bid_price_sticker_' + carId).text(bidStartPrice);

                    $('#new_bid_price').val(updatedBidPriceWithAdditionBidstartPrice);
                    $('#hidden_bid_price').val(updatedBidPriceWithAdditionBidstartPrice);

                

                }
                // $('#no_of_bids .font-600').text(response.no_of_bids);

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });

    </script>
        <!--load more btton-->
<script>
$(document).ready(function() {
    var lastCarId = null;
    
    $('#loadMoreBtn').click(function() {
        loadMoreCars();
    });

    function loadMoreCars() {
        lastCarId = $('.inner-box:last').data('car-id'); // Update this to match your HTML structure

        $.ajax({
            url: "{{ route('list.load-more-cars') }}",
            type: 'GET',
            data: { lastCarId: lastCarId },
            success: function(response) {
                if (response.loadmore && response.loadmore.length > 0) {
                    $.each(response.loadmore, function(index, car) {
                        var imageUrl = '{{ asset("frontend/assets/images/product/product-11.png") }}';
                        if (car.car_media && car.car_media.length > 0) {
                            for (var i = 0; i < car.car_media.length; i++) {
                                if (car.car_media[i].type === 'thmnail') {
                                    var imagePaths = car.car_media[i].images.split(',');
                                    imageUrl = '{{ asset('public/' . ':imagePath') }}'.replace(':imagePath', imagePaths[0]);
                                    break;
                                }
                            }
                        }

                        var carHtml = `
                            <div class="col-lg-4 col-md-6 mt-25 position-relative">
                                <div class="inner-box redirect-details car-item" data-car-id="${car.id}">
                                    <div class="car-modal tag">MUV</div>
                                    <div class="product-img-box">
                                        <img class="w-100" src="${imageUrl}" alt="">
                                        <div class="car-value tag">Estimated Market Value: <span class="text-black">AED
                                            ${car.car_auction ? car.car_auction.estimated_market_value : ''}</span>
                                        </div>
                                    </div>
                                    <div class="details">
                                    <div class="br-md-area">
                                    <div class="brand-name">${car.vehiclemake ? car.vehiclemake.name : ''}</div>
                                     <div class="model-name">${car.veh_car_model ? car.veh_car_model : ''} </div>
                                        
                                    </div>
                                       
                                        <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                         <div class="one-two-c-it">
                                          <div class="one-card-it">
                                           <div class="">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}">${car.veh_year ? car.veh_year : ''} 
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}">${car.veh_mileage ? car.veh_mileage : ''}  KM
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}">${car.title ? car.title : ''} 
                                                </span>
                                            </div>
                                          
                                          </div>
                                          <div class="two-card-it">
                                          <div class="">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}"> ${car.vehicleregionalspec ? car.vehicleregionalspec.name : ''}  
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}"> ${car.vehicletransmission ? car.vehicletransmission.name : ''}
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="d-flex align-items-center icon-box">
                                                    <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}">${car.vehiclenoofcylinder ? car.vehiclenoofcylinder.size : ''}
                                                </span>
                                            </div>
                                          
                                          </div>
                                         </div>
                                        
                                        </div>
                                           
                                            
                                            <div class="col-12 m-auto">
                                                <div class="divider"> </div>
                                            </div>
                                            
                                            <div class="one-two-c-it mt-1 mb-1">
                                            <div class="one-card-it cost-box">
                                                <div class="pri">Repair Cost:</div>
                                                <div class="amou d-flex justify-content-between">
                                                    AED ${car.car_auction ? car.car_auction.estimated_repair_cost : ''}
                                                </div>
                                            </div>
                                            <div class="two-card-it cost-box">
                                                <div class="pri">Current Bid Price:</div>
                                                <div class="amou d-flex justify-content-between">
                                                    AED ${car.car_auction ? car.car_auction.current_bid_price : ''}
                                                </div>
                                            </div>
                                            
                                            </div>
                                            
                                            <div class="bt-combo">
                                            <div class="bt-one">
                                                <a href="#" class="btn bid-btn">Bid Now</a>
                                            </div>
                                            <div class="bt-two text-center">
                                                <a href="#" class="ctm-link  bn-btn btn"> Buy Now ${car.carauction ? car.carauction.buy_now_price : ''}</a>
                                            </div>
                                            
                                            <div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="like-car">
                                    <div class="form-check">
                                        <input type="checkbox" id="customCheckbox-13" class="custom-checkbox form-check-input">
                                        <label for="customCheckbox-13" class="form-check-label"></label>
                                    </div>
                                </div>
                            </div>`;
                        
                        $('#carListing').append(carHtml);
                    });
                    
                    lastCarId = response.loadmore[response.loadmore.length - 1].id; // Update lastCarId
                
                } else {
                    $('#loadMoreBtn').hide();
                }
            }
        });
    }
});
</script>




@endsection