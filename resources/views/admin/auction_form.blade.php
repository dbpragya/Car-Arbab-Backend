@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-description d-flex align-items-center">
                    <div class="page-description-content flex-grow-1">
                        <h1> Auction Form</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col-xl-12">
                <div class="card widget widget-stats">
                
                                
                    <div class="card-body">
                        <div class="widget-stats-container d-flex">
                              @if(session()->has('success'))
                                     <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div> 
                                @endif
                            <div class="widget-stats-content flex-fill">
                                <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_auction') : route('inspector.store_auction') }}" method="POST" enctype="multipart/form-data" class="row g-3" >
                                    @csrf 
                                     <h5>Auction  </h5>
                                    <input type="hidden" id="car_id" name="car_id" value="{{ $car_id }}">
                                    <div class="col-md-6">
                                        <label for="auction_type" class="form-label">Type of auction</label>
                                        <div class="form-group">
                                       
                                            <select id="auction_type_id" name="auction_type_id" class="form-control">
                                                <option value="" selected>Please Select</option>
                                                @foreach($auctiontype as $auctype)
                                                    <option value="{{ $auctype->id }}" {{ ($carauction && $carauction->auction_type_id == $auctype->id) || old('auction_type_id') == $auctype->id ? 'selected' : '' }}>
                                                    {{ $auctype->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>        
                                    
                                    
                                  
                                    <div class="col-md-6">
                                        <label for="bid_start_price" class="form-label">Bid start price</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <select id="bid_strt_curr" name="bid_strt_curr" class="form-select">
                                                    
                                                    @foreach($currencies as $currency)
                                                        <option value="{{ $currency->id }}"  {{ ($carauction && $carauction->bid_strt_curr == $currency->id) || old('bid_strt_curr') == $currency->id ? 'selected' : '' }}>
                                                             {{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </span>
                                            <input type="number" class="form-control" id="bid_start_price" name="bid_start_price" placeholder="20000" value="{{ $carauction ? $carauction->bid_start_price : old('bid_start_price') }}">
                                        </div>
                                        <div class="error-message">{{ $errors->first('bid_start_price') }}</div>
                                    </div>

                        
                                    <div class="col-md-6">
                                        <label for="estimated_repair_cost" class="form-label">Extended Warranty Package Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <select id="esti_rep_cost_curr" name="esti_rep_cost_curr" class="form-select">
                                                   
                                                    @foreach($currencies as $currency)
                                                        <option value="{{ $currency->id }}" {{ ($carauction && $carauction->esti_rep_cost_curr == $currency->id) || old('esti_rep_cost_curr') == $currency->id ? 'selected' : '' }}>
                                                             {{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </span>
                                            <input type="number" class="form-control" id="estimated_repair_cost" name="estimated_repair_cost" placeholder="60000" value="{{ $carauction ? $carauction->estimated_repair_cost : old('estimated_repair_cost') }}">
                                        </div>
                                        <div class="error-message">{{ $errors->first('estimated_repair_cost') }}</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="estimated_market_value" class="form-label">Estimated Market Value</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <select id="esti_market_curr" name="esti_market_curr" class="form-select">
                                                    @foreach($currencies as $currency)
                                                        <option value="{{ $currency->id }}" {{ ($carauction && $carauction->esti_market_curr == $currency->id) || old('esti_market_curr') == $currency->id ? 'selected' : '' }}>
                                                             {{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </span>
                                            <input type="number" class="form-control" id="estimated_market_value" name="estimated_market_value" placeholder="60000" value="{{ $carauction ? $carauction->estimated_market_value : old('estimated_market_value') }}">
                                        </div>
                                        <div class="error-message">{{ $errors->first('estimated_market_value') }}</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="buy_now_price" class="form-label">Buy Now Price</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <select id="buy_now_curr" name="buy_now_curr" class="form-select">
                                                    @foreach($currencies as $currency)
                                                      <option value="{{ $currency->id }}" {{ ($carauction && $carauction->buy_now_curr == $currency->id) || old('buy_now_curr') == $currency->id ? 'selected' : '' }}>
                                                             {{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </span>
                                            <input type="number" class="form-control" id="buy_now_price" name="buy_now_price" placeholder="400000" value="{{ $carauction ? $carauction->buy_now_price : old('buy_now_price') }}">
                                        </div>
                                        <div class="error-message">{{ $errors->first('buy_now_price') }}</div>
                                    </div>


                                  <div class="col-md-6">
                                    <label for="reserve_price" class="form-label">Reserve Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <select id="reserve_curr" name="reserve_curr" class="form-select">
                                                    @foreach($currencies as $currency)
                                                       <option value="{{ $currency->id }}" {{ ($carauction && $carauction->reserve_curr == $currency->id) || old('reserve_curr') == $currency->id ? 'selected' : '' }}>
                                                             {{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                            </select>
                                        </span>
                                        <input type="number" class="form-control" id="reserve_price" name="reserve_price" placeholder="300000" value="{{ $carauction ? $carauction->reserve_price : old('reserve_price') }}">
                                    </div>
                                    <div class="error-message">{{ $errors->first('reserve_price') }}</div>
                                </div>
                                
                                 <div class="col-md-6">
                                        <label for="service_cost" class="form-label">Service Contract & Extended Warranty</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <select id="service_cost_curr" name="service_cost_curr" class="form-select">
                                                  
                                                     @foreach($currencies as $currency)
                                                       <option value="{{ $currency->id }}" {{ ($carauction && $carauction->service_cost_curr == $currency->id) || old('service_cost_curr') == $currency->id ? 'selected' : '' }}>
                                                             {{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </span>
                                            <input type="number" class="form-control" id="service_cost" name="service_cost" placeholder="25000" value="{{ $carauction ? $carauction->service_cost : old('service_cost') }}">
                                        </div>
                                        <div class="error-message">{{ $errors->first('service_cost') }}</div>
                                    </div>

                                   <div class="col-md-6">
                                        <label for="vehicle_insurance_price" class="form-label">Vehicle Insurance Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <select id="veh_insurance_curr" name="veh_insurance_curr" class="form-select">
                                                       @foreach($currencies as $currency)
                                                       <option value="{{ $currency->id }}" {{ ($carauction && $carauction->veh_insurance_curr == $currency->id) || old('veh_insurance_curr') == $currency->id ? 'selected' : '' }}>
                                                             {{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </span>
                                            <input type="number" class="form-control" id="vehicle_insurance_price" name="vehicle_insurance_price" placeholder="5600" value="{{ $carauction ? $carauction->vehicle_insurance_price : old('vehicle_insurance_price') }}">
                                        </div>
                                        <div class="error-message">{{ $errors->first('vehicle_insurance_price') }}</div>
                                    </div>


                                   <div class="col-md-6">
                                        <label for="delivery_price" class="form-label">Delivery Charge</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <select id="delivery_curr" name="delivery_curr" class="form-select">
                                                       @foreach($currencies as $currency)
                                                       <option value="{{ $currency->id }}" {{ ($carauction && $carauction->delivery_curr == $currency->id) || old('delivery_curr') == $currency->id ? 'selected' : '' }}>
                                                             {{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </span>
                                            <input type="number" class="form-control" id="delivery_price" name="delivery_price" placeholder="6500" value="{{ $carauction ? $carauction->delivery_price : old('delivery_price') }}">
                                        </div>
                                        <div class="error-message">{{ $errors->first('delivery_price') }}</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="warranty_period" class="form-label">Warranty Period</label>
                                        <div class="input-group">
                                            <span class="input-group-text">Year</span>
                                             <input type="number" class="form-control" id="warranty_period" name="warranty_period" placeholder="Enter no of year" value="{{ $carauction ? $carauction->warranty_period : old('warranty_period') }}" > 
                                        </div>
                                        <p>This warranty period is on yearly basis</p>
                                        <div class="error-message">{{$errors->first('warranty_period')}}</div>
                                    </div>
                                    @if(isset($carauction) && $carauction->lot_number) 
                                        <hr class="mt-5">
                                    <div class="col-md-6">
                                        <label for="lot_number" class="form-label">Lot Number</label>
                                        <input type="text" class="form-control" id="lot_number" name="lot_number" value="{{ $carauction ?  $carauction->lot_number : old('lot_number') }}"  disabled>
                                          <p>The lot number is autogenerated</p>
                                    </div>
                                
                                    @else
                                    @endif
                                    
                                    <hr class="mt-5">
                                    @if(isset($carauction) && $carauction->auction_type_id == 1) 
                                    
                                    @else
                                    <h5>Auction Date  </h5>
                                    <div class="row cstm-date mt-5">
                                      
                                        <div class="col-md-4 cstm-date ">
                                         <label for="auction_date" class="form-label">Date</label>
                                            <input class="cstm-form_input" type="date" id="auction_date" name="auction_date" value="{{ old('auction_date', $carauction ? $carauction->auction_date : now()->format('Y-m-d')) }}">
                                            <div class="error-message">{{ $errors->first('auction_date') }}</div>
                                            <p>
                                                This date field is to start the auction date
                                            </p>
                                            
                                        </div>
                                        <div class="col-md-4 cstm-time">
                                            <label for="auction_time" class="form-label">Hours Minutes</label>
                                            <input class="cstm-form_input" type="time" id="auction_time" name="auction_time" value="{{ $carauction ?  $carauction->auction_time : old('auction_time') }}" >
                                            <div class="error-message">{{$errors->first('auction_time')}}</div>
                                            
                                            <p>This time field is to start the auction time</p>
                                        </div>
                                        <div class="col-md-4 cstm-time">
                                            <label for="time_zone_id" class="form-label">Time Zone</label>
                                            <select id="time_zone_id" name="time_zone_id" class="form-select">
                                                <option value="" >Select Time Zone</option>
                                                    @foreach($timezones as $tm)
                                                        <option value="{{ $tm->id }}" {{ ($carauction && $carauction->time_zone_id == $tm->id) || old('time_zone_id') == $tm->id ? 'selected' : '' }} >
                                                               {{ $tm->time_zone	 }}
                                                        </option>
                                                    @endforeach
                                            </select>
                                            <p>
                                                This timezone field is to start the auction date
                                            </p>
                                        </div>
                                    </div>
                                    
                                     <div class="row cstm-date mt-5">
                                        <div class="col-md-4 cstm-date ">
                                            <label for="auction_end_date" class="form-label">Date</label>
                                            <input class="cstm-form_input" type="date" id="auction_end_date" name="auction_end_date"  value="{{ old('auction_end_date', $carauction ? $carauction->auction_end_date : now()->format('Y-m-d')) }}" >
                                            <div class="error-message">{{$errors->first('auction_end_date')}}</div>
                                            <p>
                                                This date field is to end the auction date
                                            </p>
                                        </div>
                                        <div class="col-md-4 cstm-time">
                                            <label for="auction_end_time" class="form-label">Hours Minutes</label>
                                            <input class="cstm-form_input" type="time" id="auction_end_time" name="auction_end_time" value="{{ $carauction ?  $carauction->auction_end_time : old('auction_end_time') }}" >
                                            <div class="error-message">{{$errors->first('auction_end_time')}}</div>
                                             <p>This time field is to end the auction time</p>
                                        </div>
                                        
                                        <!-- <div class="col-md-4 cstm-time">-->
                                        <!--    <label for="auction_end_time_zone_id" class="form-label">Time Zone</label>-->
                                        <!--    <select id="auction_end_time_zone_id" name="auction_end_time_zone_id" class="form-select">-->
                                        <!--        <option value="" >Select Time Zone</option>-->
                                        <!--            @foreach($timezones as $tm)-->
                                        <!--                <option value="{{ $tm->id }}" {{ ($carauction && $carauction->auction_end_time_zone_id == $tm->id) || old('auction_end_time_zone_id') == $tm->id ? 'selected' : '' }} >-->
                                        <!--                       {{ $tm->utc_offset	 }}-->
                                        <!--                </option>-->
                                        <!--            @endforeach-->
                                        <!--    </select>-->
                                        <!--     <p>-->
                                        <!--        This timezone field is to end the auction date-->
                                        <!--    </p>-->
                                        <!--</div>-->
                                    </div>
                                    @endif
                                    <div class="row cstm-date mt-5">
                                        <div class="col-md-6 cstm-date ">
                                            <label for="pick_up_by" class="form-label">Pick up By</label>
                                            <input class="cstm-form_input" type="date" id="pick_up_by" name="pick_up_by"  value="{{ $carauction ?  $carauction->pick_up_by : old('pick_up_by') }}" >
                                            <div class="error-message">{{$errors->first('pick_up_by')}}</div>
                                            <p>This date field is to pick up the car</p>
                                        </div>
                                    </div>
                                    <hr class="mt-5">
                                     
                                    <h6>Buy Back Guarantee </h6>
                                    <div class="col-md-6">
                                        <label for="buy_back_guarantee_curr" class="form-label">Subscription Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <select id="buy_back_guarantee_curr" name="buy_back_guarantee_curr" class="form-select">
                                               
                                                    @foreach($currencies as $currency)
                                                       <option value="{{ $currency->id }}" {{ ($carauction && $carauction->buy_back_guarantee_curr == $currency->id) || old('buy_back_guarantee_curr') == $currency->id ? 'selected' : '' }}>
                                                             {{ $currency->code }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </span>
                                            <input type="number" class="form-control" id="buy_back_guarantee_cost" name="buy_back_guarantee_cost" placeholder="6200" value="{{ $carauction ? $carauction->buy_back_guarantee_cost : old('buy_back_guarantee_cost') }}">
                                        </div>
                                        <div class="error-message">{{ $errors->first('buy_back_guarantee_cost') }}</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="buy_back_guarantee_month" class="form-label">Months</label>
                                        <input type="number" class="form-control" id="buy_back_guarantee_month" name="buy_back_guarantee_month" placeholder="2 months" value="{{ $carauction ?  $carauction->buy_back_guarantee_month : old('buy_back_guarantee_month') }}" >
                                        <div class="error-message">{{$errors->first('month')}}</div>
                                       
                                    </div>
                                    
                                     <div class="col-md-6">
                                        <label for="per_of_depreciation" class="form-label">Percentage of depreciation</label>
                                         <div class="d-flex align-items-center">
                                            <span class="input-group-text">%</span>
                                        <input type="number" class="form-control" id="per_of_depreciation" name="per_of_depreciation" placeholder="20" value="{{ $carauction ?  $carauction->per_of_depreciation : old('per_of_depreciation') }}" >
                                        <div class="error-message">{{$errors->first('per_of_depreciation')}}</div>
                                        </div>
                                    
                                    </div>
                                    
                                    
                                    
                                     <hr class="mt-5">
                              
                                        <div class="col-md-6">
                                            <label for="lot_number" class="form-label">Sticker </label>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="chassis_perfect" name="chassis_perfect" value="1" {{ ($carauction && $carauction->chassis_perfect) || old('chassis_perfect') == 1 ? 'checked' : '' }} >
                                                    <label class="form-check-label" for="chassis_perfect">Chassis Perfect</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gcc_specs" name="gcc_specs" value="1" {{ ($carauction && $carauction->gcc_specs) || old('gcc_specs') == 1 ? 'checked' : '' }} >
                                                    <label class="form-check-label" for="gcc_specs">GCC Specs</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="warranty_available" name="warranty_available" value="1" {{ ($carauction && $carauction->warranty_available) || old('warranty_available') == 1 ? 'checked' : '' }} >
                                                    <label class="form-check-label" for="warranty_available">Warranty Available</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="bank_loan_available" name="bank_loan_available" value="1" {{ ($carauction && $carauction->bank_loan_available) || old('bank_loan_available') == 1 ? 'checked' : '' }} >
                                                    <label class="form-check-label" for="bank_loan_available">Bank Loan Available</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="low_mileage" name="low_mileage" value="1" {{ ($carauction && $carauction->low_mileage) || old('low_mileage') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="low_mileage">Low Mileage</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="accident_free" name="accident_free" value="1" {{ ($carauction && $carauction->accident_free) || old('accident_free') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="accident_free">Accident Free</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="brand_new_car" name="brand_new_car" value="1" {{ ($carauction && $carauction->brand_new_car) || old('brand_new_car') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="brand_new_car">Brand New Car</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="high_end_vehicle" name="high_end_vehicle" value="1" {{ ($carauction && $carauction->high_end_vehicle) || old('high_end_vehicle') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="high_end_vehicle">High End Vehicle</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="no_air_bag" name="no_air_bag" value="1" {{ ($carauction && $carauction->no_air_bag) || old('no_air_bag') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="no_air_bag">No Air Bag Deployed</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="eligible_car_arbab_repair" name="eligible_car_arbab_repair" value="1" {{ ($carauction && $carauction->eligible_car_arbab_repair) || old('eligible_car_arbab_repair') == 1 ? 'checked' : '' }} >
                                                    <label class="form-check-label" for="eligible_car_arbab_repair"> Eligible for Car Arbab Repairs</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="limited_edition" name="limited_edition" value="1" {{ ($carauction && $carauction->limited_edition) || old('limited_edition') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="limited_edition">Limited Edition</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="car_play_android_auto" name="car_play_android_auto" value="1" {{ ($carauction && $carauction->car_play_android_auto) || old('car_play_android_auto') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="car_play_android_auto">Car Play / Android Auto</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="climate_control" name="climate_control" value="1" {{ ($carauction && $carauction->climate_control) || old('climate_control') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="climate_control">Climate Control</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="sports_exhaust" name="sports_exhaust" value="1" {{ ($carauction && $carauction->sports_exhaust) || old('sports_exhaust') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="sports_exhaust">Sports Exhaust</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keyless_entry" name="keyless_entry" value="1" {{ ($carauction && $carauction->keyless_entry) || old('keyless_entry') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="keyless_entry">Keyless Entry</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="panoramic_sunroof" name="panoramic_sunroof" value="1"  {{ ($carauction && $carauction->panoramic_sunroof) || old('panoramic_sunroof') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="panoramic_sunroof">Panoramic Sunroof</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="clean_title" name="clean_title" value="1" {{ ($carauction && $carauction->clean_title) || old('clean_title') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="clean_title">Clean Title</label>
                                                </div>     
                                                
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="ending_soon" name="ending_soon" value="1" {{ ($carauction && $carauction->ending_soon) || old('ending_soon') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="ending_soon">Ending Soon</label>
                                                </div>  

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="rear_wheel_drive" name="rear_wheel_drive" value="1" {{ ($carauction && $carauction->rear_wheel_drive) || old('rear_wheel_drive') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="rear_wheel_drive">Rear Wheel Drive</label>
                                                </div>  

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="front_wheel_drive" name="front_wheel_drive" value="1" {{ ($carauction && $carauction->front_wheel_drive) || old('front_wheel_drive') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="front_wheel_drive">Front Wheel Drive</label>
                                                </div>  
                                                
                                            </div>
                                        </div>
                                    
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#auction_type_id').change(function() {
            var auction_type_id = $(this).val();
            if (auction_type_id == '1') {
                
                $('#auction_date').closest('.col-md-4').hide();
                $('#auction_time').closest('.col-md-4').hide();
                $('#time_zone_id').closest('.col-md-4').hide();
                $('#auction_end_date').closest('.col-md-4').hide();
                $('#auction_end_time').closest('.col-md-4').hide();
            } else {
                
                 $('#auction_date').closest('.col-md-4').show();
                $('#auction_time').closest('.col-md-4').show();
                $('#time_zone_id').closest('.col-md-4').show();
                $('#auction_end_date').closest('.col-md-4').show();
                $('#auction_end_time').closest('.col-md-4').show();
                

            }
        });
    });
    </script>
@endsection