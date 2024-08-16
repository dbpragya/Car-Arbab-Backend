@extends('frontend.layouts.app')
@section('content')
<section class="pt-50 pb-50">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Cart</a></li>
                </ol>
            </nav>

            <div class="heading">
                Your Cart
            </div>

            <div class="p">
                Explore Your Vehicle and Add-On Options
            </div>

            <!-- for left section -->
            <div class="row pt-50 g-5">
                <div class="col-lg-8">
                    <div class="left-section-cart">
                        <div class="header-cart">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="cart-car-img">



                                    @php
                                    $carMedia = $cartinfo->carMedia->where('type', 'image_form1')->first(); 
                                    @endphp

                                    @php
                                        $latestImagePath = null;
                                        if ($carMedia && $carMedia->images) {
                                            $imagePaths = explode(',', $carMedia->images);
                                            $latestImagePath = reset($imagePaths);
                                        }
                                    @endphp
 
                                        @if($latestImagePath)
                                            <img src="{{ asset($latestImagePath) }}" alt="">
                                        @else
                                            <img src="{{ asset('frontend/assets/images/product/product-11.png') }}" >
                                        @endif

                                    </div>
                                </div>

                                <div class="col-lg-6 p-5 d-flex align-items-center justify-content-between p-lg-0">
                                    <div class="d-flex flex-column justify-content-center h-100">
                                        <div class="url-heading mb-1">
                                        {{ $cartinfo->veh_car_model }}
                                        </div>
                                        <div class="p pt-0">
                                            3.5 D5 PowerPulse Momentum 5dr AWD Geartronic Estate
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex flex-column justify-content-center h-100 align-items-end pr-30">
                                        <h5 class="font-20 header-cart-price">
                                       
                                        {{ $cartinfo->carAuction->buy_now_price ?? '' }}
                                        <input type="hidden" id="car_id" name="car_id" value="{{ $car_id }}">
                                        <input type="hidden" id="user_id" name="user_id" value="{{ $user_id }}">  
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- for service section  -->
                        <div class="service">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="d-flex align-items-center gap-10">
                                        <input class="form-check-input check-input-green m-0 border-dark rounded-0 repair-service-checkbox" type="checkbox" id="repairService1"  name="estimated_repair_cost" value="1" {{ ($cartinfo->bookings->isNotEmpty() && $cartinfo->bookings->first()->estimated_repair_cost == 1) || old('estimated_repair_cost') == 1 ? 'checked' : '' }}>

                                        <div class="font-16 font-termina text-gray font-600">
                                           Repair It Through Us
                                            <!--<img src="assets/images/icon/ep_info-filled.svg" class="ms-2" />-->
                                        </div>
                                        
                                    </div>
                                    <div class="service-desc">
                                       <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/>  Original Parts
                                    </div>
                                    <div class="service-desc">
                                       <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/>  Quick Repair Timeline
                                    </div>
                                    <div class="service-desc">
                                       <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/> One Year Repair Guarantee
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="service-prise">
                                        AED  {{ $cartinfo->carAuction->estimated_repair_cost ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="d-flex align-items-center gap-10">
                                        <input class="form-check-input check-input-green m-0 border-dark rounded-0 repair-service-checkbox" type="checkbox" id="repairService2" name="service_cost" value="1" {{ ($cartinfo->bookings->isNotEmpty() && $cartinfo->bookings->first()->service_cost == 1) || old('service_cost') == 1 ? 'checked' : '' }}>
                                        <div class="font-16 font-termina text-gray font-600">
                                            Service Contract & Extended Warranty
                                            <!--<img src="assets/images/icon/ep_info-filled.svg" class="ms-2" />-->

                                        </div>
                                    </div>

                                     <div class="service-desc">
                                         <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/> Upto AED 25,000 Claim Liability on Engine, Transmission, Drive Axle etc.
                                        </div>
                                    <div class="service-desc">
                                           <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/> Free Smart Repair on Up to 5 Minor Dents and Chips
                                    </div>
                                    <div class="service-desc">
                                    <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/> Minor & Major Car Service Included
                                    </div>
                                <div id="additional-services" style="display: none;">
                                            <div class="service-desc">
                                <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/> Quick Service Maintenance
                                    </div>
                                <div class="service-desc">
                                      <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/> Ceramic Coating Refreshed Yearly
                                        </div>
                                    <div class="service-desc">
                                            <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/> Free Pick and Drop Via Arbab Recovery
                                                </div>
                                                <div class="service-desc">
                                       <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/> 24/7 Road Side Assistance
                                    </div>
                                    </div>

                                    <button id="view-more-btn" style=" color: #2188E7; font-family: &quot;Termina Test&quot;; font-size: 14px; font-style: normal; font-weight: 600; line-height: 20px; background: none;  border: none;  display: flex;  margin-top: 14px; margin-left: 30px;">View All</button>
                                </div>
                                <div class="col-lg-2">
                                    <div class="service-prise">
                                        AED  {{ $cartinfo->carAuction->service_cost ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="d-flex align-items-center gap-10">
                                        <input  class="form-check-input check-input-green m-0 border-dark rounded-0 repair-service-checkbox" type="checkbox" id="repairService3" name="vehicle_insurance_price" value="1" {{ ($cartinfo->bookings->isNotEmpty() && $cartinfo->bookings->first()->vehicle_insurance_price == 1) || old('vehicle_insurance_price') == 1 ? 'checked' : '' }}>
                                        <div class="font-16 font-termina text-gray font-600">
                                             Vehicle Insurance and Registeration
                                            <!--<img src="assets/images/icon/ep_info-filled.svg" class="ms-2" />-->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="service-prise">
                                      AED  {{ $cartinfo->carAuction->vehicle_insurance_price ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service border-0">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="d-flex align-items-center gap-10">
                                        <input class="form-check-input check-input-green m-0 border-dark rounded-0 repair-service-checkbox" type="checkbox" id="repairService4" name="delivery_price" value="1" {{ ($cartinfo->bookings->isNotEmpty() && $cartinfo->bookings->first()->delivery_price == 1) || old('delivery_price') == 1 ? 'checked' : '' }}>
                                        <div class="font-16 font-termina text-gray font-600">
                                          Deliver It To Me
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="service-prise">
                                          AED  {{ $cartinfo->carAuction->delivery_price ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service border-0">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="d-flex align-items-center gap-10">
                                        <input  class="form-check-input check-input-green m-0 border-dark rounded-0 repair-service-checkbox" type="checkbox" id="repairService5" name="buy_back_guarantee_cost" value="1" {{ ($cartinfo->bookings->isNotEmpty() && $cartinfo->bookings->first()->buy_back_guarantee_cost == 1) || old('buy_back_guarantee_cost') == 1 ? 'checked' : '' }}>
                                        <div class="font-16 font-termina text-gray font-600">
                                         Buy Back Guarantee
                                        </div>
                                    </div>

                                    <div class="service-desc">
                                       <img src="{{ asset('frontend/assets/images/icon/checkmark.svg')}}" class="ms-2"/> We Buy Back the Car for 10% Depreciation only in the first 12 Months.
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="service-prise">
                                        AED {{ $cartinfo->carAuction->buy_back_guarantee_cost ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- for right section order card  -->
                <div class="col-lg-4">
                    <div class="card-order">
                        <div class="since-text">
                            Order Summary
                        </div>

                        <div class="d-flex justify-content-between border-card-order">
                            <div class="service-desc p-0">
                                Subtotal
                            </div>
                            <div class="service-prise">
                            AED  {{ $cartinfo->carAuction->buy_now_price ?? '' }}
                            </div>
                        </div>

                        <div class="d-flex flex-column gap-10 border-card-order">
                            <div id="EstimatedRepairCost" class="d-none">  
                                <div class="d-flex justify-content-between">
                                    <div class="service-desc p-0">
                                        Repair Service
                                    </div>
                                    <div class="service-prise">
                                        AED  <span id="EstimatedRepairPrice"></span>
                                    </div>
                                </div>
                            </div>
                       
                            <div id="ServiceCharge" class="d-none">  
                                <div class="d-flex justify-content-between">
                                    <div class="service-desc p-0">
                                    Service Charge
                                    </div>
                                    <div class="service-prise">
                                    AED  <span id="ServicePrice"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="InsuranceService" class="d-none"> 
                                <div class="d-flex justify-content-between">
                                    <div class="service-desc p-0">
                                        Insurance Service
                                    </div>
                                    <div class="service-prise">
                                       
                                      AED  <span id="InsurancePrice"></span>

                                    </div>
                                </div>
                            </div>
                      

                       
                        <div id="deliveryService" class="d-none">    
                          <div class="d-flex justify-content-between" >
                                <div class="service-desc p-0">
                                Delivery Service
                                </div>
                                <div class="service-prise">
                                    
                                    AED <span id="deliveryPrice"></span>
                                </div>
                            </div>
                        </div>

                        
                        <div id="buyBackGuarantee" class="d-none"> 
                            <div class="d-flex justify-content-between">
                                <div class="service-desc p-0">
                                    Buy Back Guarantee
                                </div>
                                <div class="service-prise">
                                     AED <span id="buyBackGuaranteePrice"></span>
                           
                                 
                                </div>
                                </div>
                            </div>
                        </div>
                     

                        <div class="d-flex justify-content-between border-card-order">
                            <div class="service-desc p-0">
                                Value Added Tax (5%)
                            </div>
                            <div class="service-prise">
                                AED 
                            </div>
                        </div>

                        <div class="d-flex justify-content-between" id="totalAmountContainer">
                            <div class="since-text">
                                Total Amount
                            </div>
                            <div class="since-text" id="totalAmount">
                                AED <span id="totalAmount"></span>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('user.checkout', ['total_amount' => '']) }}" id="checkoutBtn" class="btn bid-now">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- cart page--->

 <script>
        $(document).ready(function() {
    // Function to update service display
    function updateServiceDisplay(response) {
        // Hide all services initially
        $('.service-container').addClass('d-none');

        // Show the services based on response
        if (response.delivery_price == 1 && response.car.car_auction.delivery_price) {
            $('#deliveryService').removeClass('d-none');
            $('#deliveryPrice').text(response.car.car_auction.delivery_price);
        }else{
            $('#deliveryService').addClass('d-none');

        }

        if (response.buy_back_guarantee_cost == 1 && response.car.car_auction.buy_back_guarantee_cost) {
            $('#buyBackGuarantee').removeClass('d-none');
            $('#buyBackGuaranteePrice').text(response.car.car_auction.buy_back_guarantee_cost);
        }else{
            $('#buyBackGuarantee').addClass('d-none');

        }

        if (response.vehicle_insurance_price == 1 && response.car.car_auction.vehicle_insurance_price) {
            $('#InsuranceService').removeClass('d-none');
            $('#InsurancePrice').text(response.car.car_auction.vehicle_insurance_price);
        }else{
            $('#InsuranceService').addClass('d-none');
        }

       
        if (response.estimated_repair_cost == 1 && response.car.car_auction.estimated_repair_cost) {
            $('#EstimatedRepairCost').removeClass('d-none');
            $('#EstimatedRepairPrice').text(response.car.car_auction.estimated_repair_cost);
        } else {
            $('#EstimatedRepairCost').addClass('d-none'); // Hide repair service container if not available
        }


        if (response.service_cost == 1 && response.car.car_auction.service_cost) {
            $('#ServiceCharge').removeClass('d-none');
            $('#ServicePrice').text(response.car.car_auction.service_cost);
        }else{
            $('#ServiceCharge').addClass('d-none');
        }
    }
    
    function updateOrRemoveService(serviceName, isChecked) {
        var carId = $('#car_id').val();
        var userId = $('#user_id').val();

        if (isChecked) {
            $.ajax({
                type: 'POST',
                url: '{{ route('user.store_car_services') }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    CheckedServicesNames: serviceName,
                    car_id: carId,
                    user_id: userId
                },
                success: function(response) {
                    // Handle success response
                    updateCartData(); 
                },
                error: function(error) {
                    // Handle error response
                }
            });
        } else {
          
            $.ajax({
                type: 'POST',
                url: '{{ route('user.remove_car_service') }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    RemovedServicesNames: serviceName,
                    car_id: carId,
                    user_id: userId
                },
                success: function(response) {
                    
                    updateCartData(); 
                    // updateTotalAmount(response);
                    // alert(updateTotalAmount);
                },

                error: function(error) {
                    // Handle error response
                }
            });
        }
    }

     // Function to fetch cart data
     function updateCartData() {
        var carId = $('#car_id').val();
        var userId = $('#user_id').val();

        $.ajax({
            type: 'GET',
            url: '{{ route('user.getcartdata') }}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                car_id: carId,
                user_id: userId
            },
            success: function(response) {
                updateServiceDisplay(response);
                updateTotalAmount(response);
    
            },
            error: function(error) {
                // Handle error response
            }
        });
    }

    //amont pdate with checked nchecked catergories
    function updateTotalAmount(response) {
            var carId = $('#car_id').val();
            var userId = $('#user_id').val();
            // alert(carId);
            // alert(userId);
            
            var totalCost = 0;

            // Add the buy now price to the total cost
            totalCost += parseFloat('{{ $cartinfo->carAuction->buy_now_price ?? 0 }}');
        
     
            var deliveryPrice = parseFloat($('#deliveryPrice').text().replace(',', ''));
            var buyBackGuaranteePrice = parseFloat($('#buyBackGuaranteePrice').text().replace(',', ''));
            var insurancePrice = parseFloat($('#InsurancePrice').text().replace(',', ''));
            var estimatedRepairPrice = parseFloat($('#EstimatedRepairPrice').text().replace(',', ''));
            var servicePrice = parseFloat($('#ServicePrice').text().replace(',', ''));

            // Log the extracted values
            console.log("Delivery Price:", deliveryPrice);
            console.log("Buy Back Guarantee Price:", buyBackGuaranteePrice);
            console.log("Insurance Price:", insurancePrice);
            console.log("Estimated Repair Price:", estimatedRepairPrice);
            console.log("Service Price:", servicePrice);

            // Add the valid costs to the total
            if (!isNaN(deliveryPrice)) totalCost += deliveryPrice;
            if (!isNaN(buyBackGuaranteePrice)) totalCost += buyBackGuaranteePrice;
            if (!isNaN(insurancePrice)) totalCost += insurancePrice;
            if (!isNaN(estimatedRepairPrice)) totalCost += estimatedRepairPrice;
            if (!isNaN(servicePrice)) totalCost += servicePrice;
            
        //  alert(totalCost);
            // for nchecked elements
        
            var deliveryUnchecked = !$('#deliveryService').hasClass('d-none');
            var buyBackGuaranteeUnchecked = !$('#buyBackGuarantee').hasClass('d-none');
            var insuranceUnchecked = !$('#InsuranceService').hasClass('d-none');
            var estimatedRepairUnchecked = !$('#EstimatedRepairCost').hasClass('d-none');
            var serviceUnchecked = !$('#ServiceCharge').hasClass('d-none');

            //    alert(totalCost);
            if (!deliveryUnchecked && response.car.car_auction.delivery_price) {
                totalCost -= parseFloat(response.car.car_auction.delivery_price);
            }

            if (!buyBackGuaranteeUnchecked && response.car.car_auction.buy_back_guarantee_cost) {
                totalCost -= parseFloat(response.car.car_auction.buy_back_guarantee_cost);
            }

            
            if (!insuranceUnchecked && response.car.car_auction.vehicle_insurance_price) {
                totalCost -= parseFloat(response.car.car_auction.vehicle_insurance_price);
            }

            if (!estimatedRepairUnchecked && response.car.car_auction.estimated_repair_cost) {
                totalCost -= parseFloat(response.car.car_auction.estimated_repair_cost);
            }
    //  alert(totalCost)
            if (!serviceUnchecked && response.car.car_auction.service_cost) {
                totalCost -= parseFloat(response.car.car_auction.service_cost);
            }

            // alert(totalCost);
            // Update total amount display
            $('#totalAmount').text('AED ' + numberWithCommas(totalCost));


            var checkoutUrl = "{{ route('user.checkout') }}";
            checkoutUrl += "?car_id=" + carId + "&user_id=" + userId + "&total_amount=" + totalCost;
    
            // Set href attribute of checkout button with constructed checkout URL
            $('#checkoutBtn').attr('href', checkoutUrl);


            // $('#checkoutBtn').attr('href', "{{ route('user.checkout', ['total_amount' => '']) }}?car_id=" + carId + "&user_id=" + userId + "&total_amount=" + totalCost);
            // $('#checkoutBtn').attr('href', "{{ route('user.checkout', ['total_amount' => '']) }}?car_id={{ $car_id }}&user_id={{ $user_id }}&total_amount=" + totalCost);
        }


    // Initial call to fetch cart data
    updateCartData();

   

    // Checkbox change event
    $('.repair-service-checkbox').change(function() {
        var serviceName = $(this).attr('name');
        var isChecked = $(this).prop('checked');
        updateOrRemoveService(serviceName, isChecked);
        });
    });

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

 </script>
@endsection