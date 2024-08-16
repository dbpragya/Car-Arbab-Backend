@extends('admin.layouts.app')
@section('content')
<style>
.green .dial {
/* Your green color styling here */
background-color: green;
}
.Sbmit-btn {
    background-color: #0db02b;
    color: #fff;
}
.Sbmit-btn {
font-size: 13px;
    padding: 8px 24px;
    border: none;
    border-radius: 4px;
    margin-top: 30px;

}
</style>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-description d-flex align-items-center">
                    <div class="page-description-content flex-grow-1">
                        <h1>Add Car</h1>
                            @if($errors->any())
                                <script>
                                    var errorStep = '{{ old("step") }}';
                                    window.location.href = '#step' + errorStep;
                                    $(document).ready(function() {
                                        $('.nav-tabs li').removeClass('active');
                                        $('.nav-tabs li:nth-child(' + errorStep + ')').addClass('active');
                                        $('.tab-pane').removeClass('active');
                                        $('#step' + errorStep).addClass('active show'); 
                                    });
                                </script>
                            @endif
                              <!-- sccess1 -->
                            @if(session()->has('success1'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success1') }}
                                </div> -->
                                <script>
                                        $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                            
                                            // window.location.href = '#step4';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(2)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step4').addClass('active');
                                            @else
                                            // window.location.href = '#step2';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(2)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step2').addClass('active');
                                            @endif
                                        });
                                </script>
                            @endif
                            
                            <!-- success2 -->
                            @if(session()->has('success2'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success2') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                     
                                    // window.location.href = '#step3';
                                    $('.nav-tabs li').removeClass('active');
                                    $('.nav-tabs li:nth-child(3)').addClass('active');
                                    $('.tab-pane').removeClass('active');
                                    $('#step3').addClass('active');
                                     
                                    });
                                </script>
                            @endif
                                            
                            <!-- success3 -->
                            @if(session()->has('success3'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success3') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                     
                                    // window.location.href = '#step3';
                                    $('.nav-tabs li').removeClass('active');
                                    $('.nav-tabs li:nth-child(4)').addClass('active');
                                    $('.tab-pane').removeClass('active');
                                    $('#step4').addClass('active');
                                     
                                    });
                                </script>
                            @endif

                            <!-- success4 -->
                            @if(session()->has('success4'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success4') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                                
                                            // window.location.href = '#step5';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(3)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step5').addClass('active');
                                            @else
                                                
                                                // window.location.href = '#step5';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(5)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step5').addClass('active');
                                        @endif
                                    });
                                </script>
                            @endif  

                            <!-- success5-->
                            @if(session()->has('success5'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success5') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                            
                                            // window.location.href = '#step6';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(4)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step6').addClass('active');
                                            @else
                                            // window.location.href = '#step6';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(6)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step6').addClass('active');
                                        @endif
                                        });
                                </script>
                            @endif

                            <!-- success6 -->
                            @if(session()->has('success6'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success6') }}
                                </div> -->
                                <script>
                                        $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                            // window.location.href = '#step8';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(5)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step8').addClass('active');
                                            @else
                                            // window.location.href = '#step8';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(7)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step8').addClass('active');
                                            @endif
                                        });
                                </script>
                            @endif

                            <!-- step-8 -->
                            @if(session()->has('success8'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success8') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                        // window.location.href = '#step9';
                                        $('.nav-tabs li').removeClass('active');
                                        $('.nav-tabs li:nth-child(7)').addClass('active');
                                        $('.tab-pane').removeClass('active');
                                        $('#step9').addClass('active');
                                        @else
                                        // window.location.href = '#step9';
                                        $('.nav-tabs li').removeClass('active');
                                        $('.nav-tabs li:nth-child(8)').addClass('active');
                                        $('.tab-pane').removeClass('active');
                                        $('#step9').addClass('active');
                                        @endif
                                        });
                                </script>
                            @endif
                                       
                            <!-- step 9 -->
                            @if(session()->has('success9'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success9') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                            // window.location.href = '#step10';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(7)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step10').addClass('active');
                                            @else
                                            // window.location.href = '#step10';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(9)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step10').addClass('active');
                                        @endif
                                    });
                                </script>
                            @endif
                                       
                            <!-- success10-->
                            @if(session()->has('success10'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success10') }}
                                </div> -->
                                <script>
                                        $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                            // window.location.href = '#step11';
                                                $('.nav-tabs li').removeClass('active');
                                                $('.nav-tabs li:nth-child(8)').addClass('active');
                                                $('.tab-pane').removeClass('active');
                                                $('#step11').addClass('active');
                                            @else
                                                // window.location.href = '#step11';
                                                $('.nav-tabs li').removeClass('active');
                                                $('.nav-tabs li:nth-child(10)').addClass('active');
                                                $('.tab-pane').removeClass('active');
                                                $('#step11').addClass('active');
                                            @endif
                                        });
                                </script>
                            @endif

                            <!-- success10electricform -->
                            @if(session()->has('success10electricform'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success10electricform') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                            // window.location.href = '#step11';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(8)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step11').addClass('active');
                                            @else 
                                            // window.location.href = '#step8';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(9)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step8').addClass('active');
                                            @endif
                                        });
                                </script>
                            @endif
                            <!-- step 11 -->
                            @if(session()->has('success11'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success11') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                            // window.location.href = '#step12';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(9)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step12').addClass('active');
                                            @else 
                                            // window.location.href = '#End';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(11)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#End').addClass('active');
                                        @endif
                                    });
                                </script>
                            @endif
                                       
                            <!-- success12 -->
                            @if(session()->has('success12'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success12') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                                // window.location.href = '#step13';
                                                $('.nav-tabs li').removeClass('active');
                                                $('.nav-tabs li:nth-child(10)').addClass('active');
                                                $('.tab-pane').removeClass('active');
                                                $('#step13').addClass('active');
                                            @else
                                                // window.location.href = '#step8';
                                                $('.nav-tabs li').removeClass('active');
                                                $('.nav-tabs li:nth-child(9)').addClass('active');
                                                $('.tab-pane').removeClass('active');
                                                $('#step8').addClass('active');
                                        @endif
                                    });
                                </script>
                            @endif
                                                
                            <!-- success13 -->
                            @if(session()->has('success13'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success13') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                                // window.location.href = '#step14';
                                                $('.nav-tabs li').removeClass('active');
                                                $('.nav-tabs li:nth-child(11)').addClass('active');
                                                $('.tab-pane').removeClass('active');
                                                $('#step14').addClass('active');
                                            @else
                                                // window.location.href = '#step8';
                                                $('.nav-tabs li').removeClass('active');
                                                $('.nav-tabs li:nth-child(9)').addClass('active');
                                                ('.tab-pane').removeClass('active');
                                            $('#step8').addClass('active');
                                        @endif
                                    });
                                </script>
                            @endif
                            <!-- success14 -->
                            @if(session()->has('success14'))
                                <!-- <div class="alert alert-success">
                                    {{ session()->get('success14') }}
                                </div> -->
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                            // window.location.href = '#End';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(12)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#End').addClass('active');
                                            @else
                                            // window.location.href = '#step8';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(9)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#step8').addClass('active');
                                        @endif
                                    });
                                </script>
                            @endif
                            <!-- success16 -->
                            @if(session()->has('success16'))
                                <div class="alert alert-success">
                                    {{ session()->get('success16') }}
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        @if($car && $car->veh_fueltype_id == '3') 
                                        // window.location.href = '#End';
                                                $('.nav-tabs li').removeClass('active');
                                                $('.nav-tabs li:nth-child(12)').addClass('active');
                                                $('.tab-pane').removeClass('active');
                                                $('#End').addClass('active');
                                            @else
                                            // window.location.href = '#End';
                                            $('.nav-tabs li').removeClass('active');
                                            $('.nav-tabs li:nth-child(11)').addClass('active');
                                            $('.tab-pane').removeClass('active');
                                            $('#End').addClass('active');
                                        @endif
                                    });
                                </script>
                            @endif
                                 
                        </div>
                        <div class="page-description-actions">
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card widget widget-stats pt-4">
                    <div class="card-body">
                        <div class="widget-stats-container d-flex">
                            <div class="widget-stats-content flex-fill">
                                <div class="brand_logo">
                                <img class="" src="{{ asset('assets/images ') }}" alt="" width="100px">
                                </div>
                                <h5 class="text-center">Seller Terms of Service:</h5>
                                <p class="text-center pb-4">By signing below, you, the seller of the vehicle in this report indemnify Car Arbab and the inspector against any liabilities including damages, costs, and charges made to the vehicle. You agree to indemnify Car Arbab and the inspector of any incidents caused to the vehicle and/or public/3rd party property due to mechanical imperfections in the vehicle.</p>


                                <script>
                                    // Initially disable steps 2 and 3
                                    document.addEventListener('DOMContentLoaded', function () {
                                        disableSteps();
                                    });

                                    function disableSteps() {
                                        document.getElementById('step2-link').classList.add('disabled');
                                        document.getElementById('step3-link').classList.add('disabled');
                                        document.getElementById('step4-link').classList.add('disabled');
                                        document.getElementById('step5-link').classList.add('disabled');
                                        document.getElementById('step6-link').classList.add('disabled');
                                        document.getElementById('step8-link').classList.add('disabled');
                                        document.getElementById('step9-link').classList.add('disabled');
                                        document.getElementById('step10-link').classList.add('disabled');
                                        document.getElementById('step11-link').classList.add('disabled');
                                        document.getElementById('step-End').classList.add('disabled');
                                       
                                    }
                                    </script>
                                @if(isset($car))
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            document.getElementById('step2-link').classList.remove('disabled');
                                            document.getElementById('step3-link').classList.remove('disabled');
                                            document.getElementById('step4-link').classList.remove('disabled');
                                            document.getElementById('step5-link').classList.remove('disabled');
                                            document.getElementById('step6-link').classList.remove('disabled');
                                            document.getElementById('step8-link').classList.remove('disabled');
                                            document.getElementById('step9-link').classList.remove('disabled');
                                            document.getElementById('step10-link').classList.remove('disabled');
                                            document.getElementById('step11-link').classList.remove('disabled');
                                            document.getElementById('step-End').classList.remove('disabled');
                                             
                                        });
                                    </script>
                                @endif
                                <div class="wizard mt-4">
                                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
                                    <div class="wizard-inner">
                                        <div class="connecting-line"></div>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1</span> </a>
                                            </li>
                                            @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                <!-- If veh_fueltype_id is 3 (electric), not show step2 and step3--->
                                            @else
                                            <li role="presentation" class="disabled">
                                                <a href="#step2" data-toggle="tab" id="step2-link" aria-controls="step2" role="tab" aria-expanded="false">
                                                    <span class="round-tab">2</span>
                                                </a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step3" data-toggle="tab" id="step3-link" aria-controls="step3" role="tab">
                                                    <span class="round-tab">3</span>
                                                </a>
                                            </li>
                                            @endif
                                            <li role="presentation" class="disabled">
                                            <a href="#step4" data-toggle="tab" aria-controls="step4" id="step4-link" role="tab"><span class="round-tab">4</span> </a>
                                                @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                        <a href="#step4" data-toggle="tab" id="step4-link" aria-controls="step4" role="tab"><span class="round-tab">2</span> </a>
                                                @else

                                                @endif
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step5" data-toggle="tab" aria-controls="step5" id="step5-link" role="tab"><span class="round-tab">5</span> </a>
                                                @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                    <a href="#step5" data-toggle="tab" aria-controls="step5" id="step5-link" role="tab"><span class="round-tab">3</span> </a>
                                                @else
                                                @endif
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step6" data-toggle="tab" aria-controls="step6" id="step6-link" role="tab"><span class="round-tab">6</span> </a>
                                                @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                    <a href="#step6" data-toggle="tab" aria-controls="step6" id="step6-link" role="tab"><span class="round-tab">4</span> </a>
                                                @else
                                                @endif
                                            </li>
                                            <!-- <li role="presentation" class="disabled">
                                                <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">7</span> </a>
                                                 @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                    <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">5</span> </a>
                                                @else
                                                @endif
                                            </li> -->
                                            <li role="presentation" class="disabled">
                                                <a href="#step8" data-toggle="tab" aria-controls="step8" id="step8-link" role="tab"><span class="round-tab">8</span> </a>
                                                @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                <a href="#step8" data-toggle="tab" aria-controls="step8" id="step8-link" role="tab"><span class="round-tab">6</span> </a>
                                                @else
                                                @endif
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step9" data-toggle="tab" aria-controls="step9" id="step9-link" role="tab"><span class="round-tab">9</span> </a>
                                                @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                <a href="#step9" data-toggle="tab" aria-controls="step9" id="step9-link" role="tab"><span class="round-tab">7</span> </a>
                                                @else
                                                @endif
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step10" data-toggle="tab" aria-controls="step10" id="step10-link" role="tab"><span class="round-tab">10</span> </a>
                                                @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                <a href="#step10" data-toggle="tab" aria-controls="step10" id="step10-link" role="tab"><span class="round-tab">8</span> </a>
                                                @else
                                                @endif
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step11" data-toggle="tab" aria-controls="step11" id="step11-link" role="tab"><span class="round-tab">11</span> </a>
                                                @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                <a href="#step11" data-toggle="tab" aria-controls="step11" id="step11-link" role="tab"><span class="round-tab">9</span> </a>
                                                @else
                                                @endif
                                            </li>
                                            @if(isset($car) && $car->veh_fueltype_id == '3') 
                                            <!-- If veh_fueltype_id is 3 (electric), show steps 12 and 13 , 14 -->
                                            <li role="presentation" class="disabled">
                                                <a href="#step12" data-toggle="tab" aria-controls="step12" role="tab"><span class="round-tab">10</span> </a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step13" data-toggle="tab" aria-controls="step13" role="tab"><span class="round-tab">11</span> </a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step14" data-toggle="tab" aria-controls="step14" role="tab"><span class="round-tab">12</span> </a>
                                            </li>
                                            @else
                                                <!-- If veh_fueltype_id is not 3 (electric), do nothing -->
                                            @endif
                                            <li role="presentation" class="disabled">
                                                <a href="#End" data-toggle="tab" aria-controls="End" id="step-End" role="tab"><span class="round-tab end-step">End</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="main_form">

                                    <!----------- steps 1 form ---------------->

                                        <div class="tab-pane active" role="tabpanel" id="step1">
                               
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.storecar') : route('inspector.storecar') }}" method="POST"  name="form1" enctype="multipart/form-data" id="form1">
                                                @csrf

                                                <input type="hidden" name="step" value="1">
                                                <input type="hidden" name="section_title_image_form1" value="Form Image">
                                                <div class="row mt-4">
                                                    <!-- Seller's Phone Number -->
                                                    <div class="col-md-6 seller-phone">
                                                    <label for="phone">Seller's Phone Number :</label><br>
                                                    <input type="hidden" id="country_code" name="country_code" val="{{ $car ? $car->country_code : '' }}" />
                                                   
                                                    <input class="cstm-form_input" type="tel" id="seller_phone_no" id="phone"  name="seller_phone_no" 
                                                        value="{{ $car ?  $car->seller_phone_no : old('seller_phone_no') }}" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                                    <span id="seller_phone_no_error" style="color: red;"></span><br><br>
                                                    <div class="error-message">{{ $errors->first('seller_phone_no') }}</div>

                                                </div>

                                                    <!-- Type Of Seller -->
                                                
                                                <div class="col-md-6">
                                                    <label class="typeofseller" for=""> Type Of Seller :</label>

                                                    <div class="form-check">
                                                        <input class="form-check-input seller-type" type="radio" id="seller_type_private" name="seller_type_id" value="seller"  {{ ($errors->any() && old('seller_type_id') == 'seller') || (empty($errors->all()) && isset($car) && $car->seller_type_id == 'seller') ? 'checked' : '' }}>
                                                        <label class="form-check-label radio-btn-label" for="seller_type_private">Private Seller</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input seller-type" type="radio" id="seller_type_dealer" name="seller_type_id" value="dealer"  {{ ($errors->any() && old('seller_type_id') == 'dealer') || (empty($errors->all()) && isset($car) && $car->seller_type_id == 'dealer') ? 'checked' : '' }}>
                                                        <label class="form-check-label radio-btn-label" for="seller_type_dealer">Dealer</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input seller-type" type="radio" id="seller_type_freelancer" name="seller_type_id" value="freelancer"  {{ ($errors->any() && old('seller_type_id') == 'freelancer') || (empty($errors->all()) && isset($car) && $car->seller_type_id == 'freelancer') ? 'checked' : '' }}>
                                                        <label class="form-check-label radio-btn-label" for="seller_type_freelancer">Maybe Freelancer</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input seller-type" type="radio" id="seller_type_cararbab" name="seller_type_id" value="cararbab"  {{ ($errors->any() && old('seller_type_id') == 'cararbab') || (empty($errors->all()) && isset($car) && $car->seller_type_id == 'cararbab') ? 'checked' : '' }}>
                                                        <label class="form-check-label radio-btn-label" for="seller_type_cararbab">Car Arbab</label>
                                                    </div>
                                                    <span id="seller_type_id_error" style="color: red;"></span><br><br>
                                                    <div class="error-message">{{$errors->first('seller_type_id')}}</div>
                                                </div>

                                                <hr class="mt-5">

                                                    <!--------- image upload --------->
                                                
                                                    <!-- @if($car && $car->image)
                                                    <div class="col-md-12 mt-5 mb-4">
                                                        <img src="{{ asset( $car->image) }}" alt="Car Image">
                                                    </div>
                                                    @endif -->
                                                    <!-- @if($car && $car->image)
                                                    <div class="col-md-12 mt-5 mb-4">
                                                        @php
                                                            $images = explode(',', $car->image);
                                                        @endphp
                                                        @foreach($images as $img)
                                                            <img src="{{ asset($img) }}" alt="Car Image">
                                                        @endforeach
                                                    </div>
                                                     @endif -->
                                                    <div class="col-md-12 mt-5 mb-4">
                                                        <div class="form-group text-center image_upload cstm-file-upload">
                                                            <input type="file" class="cstm-file-upload" name="image[]" id="upload-img" multiple/>
                                                           
                                                        </div>
                                                        <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
                                                        <div class="error-message">{{$errors->first('image')}}</div>
                                                        <span id="image_error" style="color: red;"></span><br><br>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $m)
                                                                @if($m->type === "image_form1")
                                                                    @php
                                                                        $images = explode(',', $m->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                    @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                        <div class="image-container" data-section-title="{{ $m->type }}">
                                                                            <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                        </div>
                                                                    @endif
                                                                    @endforeach

                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                               


                                                    <!-- validation error -->
                                                 
                                                    <hr class="mt-5">

                                                    <div class="col-md-12 mt-4">
                                                        <div class="customer-form">
                                                            <h6>Customer Details :</h6>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="cus_first_name"> First Name</label>
                                                                    <input type="text" class="form-control" id="cus_first_name" name="cus_first_name" value="{{ $car ? $car->cus_first_name : old('cus_first_name') }}" >
                                                                    
                                                                    <div class="error-message">{{$errors->first('cus_first_name')}}</div>
                                                                    <span id="cus_first_name_error" style="color: red;"></span>
                                                                </div>
                                                                <div class="col">
                                                                <label for="cus_last_name">Last Name</label>
                                                                    <input type="text" class="form-control" id="cus_last_name" name="cus_last_name" value="{{ $car ? $car->cus_last_name : old('cus_last_name') }}" >
                                                                    <span id="cus_last_name_error" style="color: red;"></span>
                                                                    <div class="error-message">{{$errors->first('cus_last_name')}}</div>
                                                                </div>
                                                            </div>
                                                            <div class="row cstm-date mt-5">
                                                                <div class="col-md-6 cstm-date ">
                                                                <label for="cus_date">Date</label>
                                                                    <input class="cstm-form_input" type="date" id="cus_date" value="{{ $car ? $car->cus_date : old('cus_date') }}" name="cus_date">
                                                                    <span id="cus_date_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('cus_date')}}</div>
                                                                </div>
                                                                <div class="col-md-6 cstm-time">
                                                                    <label for="cus_time">Hours Minutes</label>
                                                                    <input class="cstm-form_input" type="time" id="cus_time" value="{{ $car ? $car->cus_time : old('cus_time') }}" name="cus_time">
                                                                    <span id="cus_time_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('cus_time')}}</div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <hr class="mt-4">

                                                    <div class="col-md-12 mt-4">

                                                        <div class="vehicle-details">
                                                            <h6>Vehicle Details :</h6>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="veh_car_make_id">Make</label>
                                                                        <select id="veh_car_make_id" name="veh_car_make_id">
                                                                            <option value="" selected>Please Select</option>
                                                                            @foreach($vehiclemake as $vmake)
                                                                                    <option value="{{ $vmake->id }}" {{ ($car && $car->veh_car_make_id == $vmake->id) || old('veh_car_make_id') == $vmake->id ? 'selected' : '' }}>   
                                                                                    {{ $vmake->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span id="veh_car_make_error" style="color: red;"></span><br><br>
                                                                        <div class="error-message">{{$errors->first('veh_car_make_id')}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    
                                                                    <label for="veh_car_model">Model</label>
                                                                    <input class="form-control" type="text" id="veh_car_model" value="{{ $car ? $car->veh_car_model : old('veh_car_model') }}" name="veh_car_model">
                                                                    <span id="veh_car_model_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('veh_car_model')}}</div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <label for="veh_year">Year</label>
                                                                    <input class="form-control" placeholder="ex: 2024" type="text" id="veh_year" pattern="[0-9]{4}" maxlength="4"  value="{{ $car ? $car->veh_year : old('veh_year') }}" name="veh_year" >
                                                                    <span id="veh_year_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('veh_year')}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="veh_mileage">Mileage (KM)</label>
                                                                    <input class="form-control" type="number" id="veh_mileage"  name="veh_mileage" value="{{ $car ? $car->veh_mileage : old('veh_mileage') }}" placeholder="ex: 25" >
                                                                    <div class="error-message">{{$errors->first('veh_mileage')}}</div>
                                                                    <span id="veh_mileage_error" style="color: red;"></span><br><br>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="veh_fueltype_id">Fuel Type</label>
                                                                    <select id="veh_fueltype_id" name="veh_fueltype_id">
                                                                        <option value="" selected>Please Select</option>
                                                                            @foreach($fueltype as $fuel)
                                                                            <option value="{{ $fuel->id }}" {{ ($car && $car->veh_fueltype_id == $fuel->id) || old('veh_fueltype_id') == $fuel->id ? 'selected' : '' }}>
                                                                                {{ $fuel->name }}
                                                                            </option>
                                                                            @endforeach
                                                                    </select>
                                                                    </div>
                                                                    <span id="veh_fueltype_id_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('veh_fueltype_id')}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="vehicle_regional_spec">Regional Specs</label>
                                                                    <select id="vehicle_regional_spec" name="vehicle_regional_spec">
                                                                        <option value="" selected>Please Select</option>
                                                                        @foreach($vehicleregionalspec as $vregionalspec)
                                                                        <option value="{{ $vregionalspec->id }}" {{ ($car && $car->vehicle_regional_spec == $vregionalspec->id) || old('vehicle_regional_spec') == $vregionalspec->id ? 'selected' : '' }}>
                                                                                {{ $vregionalspec->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>
                                                                    <span id="vehicle_regional_spec_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('vehicle_regional_spec')}}</div>
                                                                </div>
                                                            </div>
                                                            @if(isset($car) && $car->veh_fueltype_id == '3') 
                                                            @else
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="vehicle_transmission_id">Transmission</label>
                                                                    <select id="vehicle_transmission_id" name="vehicle_transmission_id">
                                                                        <option value="" selected>Please Select</option>
                                                                        @foreach($vehicletransmission as $vtransmission)
                                                                            <option value="{{ $vtransmission->id }}" {{ ($car && $car->vehicle_transmission_id == $vtransmission->id) || old('vehicle_transmission_id') == $vtransmission->id ? 'selected' : '' }}>
                                                                                {{ $vtransmission->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>
                                                                    <span id="vehicle_transmission_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('vehicle_transmission_id')}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="no_of_cylinder">No of Cylinders</label>
                                                                        <select id="no_of_cylinder" name="no_of_cylinder" >
                                                                            <option value="" selected>Please Select</option>
                                                                            @foreach($vehiclenoofcylinder as $vehcylinder)
                                                                            <option value="{{ $vehcylinder->id }}" {{ ($car && $car->no_of_cylinder == $vehcylinder->id) || old('no_of_cylinder') == $vehcylinder->id ? 'selected' : '' }}>
                                                                                {{ $vehcylinder->size }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span id="no_of_cylinder_error" style="color: red;"></span><br><br>
                                                                        <div class="error-message">{{$errors->first('no_of_cylinder')}}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <label for="cc">CC</label>
                                                                    <input type="text" class="form-control" id="cc" name="cc" value="{{ $car ? $car->cc : old('cc') }}" >
                                                                </div>
                                                            </div>
                                                            @endif

                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <label for="vehicle_engine_size"> Engine Size</label>
                                                                    <input type="text" class="form-control" id="vehicle_engine_size" name="vehicle_engine_size" value="{{ $car ? $car->vehicle_engine_size : old('vehicle_engine_size') }}" >
                                                                    <div class="error-message">{{$errors->first('vehicle_engine_size')}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="auction_type">Auction Type</label>
                                                                        <select id="auction_type" name="auction_type">
                                                                            <option value="" selected>Please Select</option>
                                                                            @foreach($auctiontype as $auctype)
                                                                                <option value="{{ $auctype->id }}" {{ ($car && $car->auction_type == $auctype->id) || old('auction_type') == $auctype->id ? 'selected' : '' }}>
                                                                                {{ $auctype->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <span id="auction_type_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('auction_type')}}</div>
                                                                </div>
                                                            </div>

                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="car_title">Car Title </label>
                                                                        <select id="car_title" name="car_title">
                                                                            <option value="" selected>Please Select</option>
                                                                                @foreach($cartitles as $cartitle)
                                                                                <option value="{{ $cartitle->id }}" {{ ($car && $car->car_title == $cartitle->id) || old('car_title') == $cartitle->id ? 'selected' : '' }}>
                                                                                {{ $cartitle->name }}
                                                                            </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                         <label for="car_arbab_repairs">Car Arbab Repairs </label>
                                                                            <select id="car_arbab_repairs" name="car_arbab_repairs">
                                                                                <option value="" selected>Please Select</option>
                                                                                 @foreach($cararbabrepairs as $cararbabrepair)
                                                                                <option value="{{ $cararbabrepair->id }}" {{ ($car && $car->car_arbab_repairs == $cararbabrepair->id) || old('car_arbab_repairs') == $cararbabrepair->id ? 'selected' : '' }}>
                                                                                {{ $cararbabrepair->name }}
                                                                                </option>
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <span id="auction_type_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('auction_type')}}</div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="car_arbab_extended_warranty">Car Arbab Extended Warranty</label>
                                                                        <select id="car_arbab_extended_warranty" name="car_arbab_extended_warranty">
                                                                            <option value="" selected>Please Select</option>
                                                                                @foreach($caextendedwaraanty as $caew)
                                                                                <option value="{{ $caew->id }}" {{ ($car && $car->car_arbab_extended_warranty == $caew->id) || old('car_arbab_extended_warranty') == $caew->id ? 'selected' : '' }}>
                                                                                {{ $caew->name }}
                                                                            </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <span id="car_arbab_extended_warranty_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('car_arbab_extended_warranty')}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                         <label for="car_color">Car Color </label>
                                                                            <select id="car_color" name="car_color">
                                                                                <option value="" selected>Please Select</option>
                                                                                 @foreach($carcolors as $carcolor)
                                                                                <option value="{{ $carcolor->id }}" {{ ($car && $car->car_color == $carcolor->id) || old('car_color') == $carcolor->id ? 'selected' : '' }}>
                                                                                {{ $carcolor->name }}
                                                                                </option>
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <span id="car_color_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('car_color')}}</div>
                                                                </div>
                                                            </div>

                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="vehicle_type">Vehicle Type</label>
                                                                        <select id="vehicle_type" name="vehicle_type">
                                                                            <option value="" selected>Please Select</option>
                                                                                @foreach($vehicletypes as $vehicletype)
                                                                                <option value="{{ $vehicletype->id }}" {{ ($car && $car->vehicle_type == $vehicletype->id) || old('vehicle_type') == $vehicletype->id ? 'selected' : '' }}>
                                                                                {{ $vehicletype->name }}
                                                                            </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <span id="vehicle_type_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('vehicle_type')}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                         <label for="drive_type">Drive Type</label>
                                                                            <select id="drive_type" name="drive_type">
                                                                                <option value="" selected>Please Select</option>
                                                                                 @foreach($drivetypes as $drivetype)
                                                                                <option value="{{ $drivetype->id }}" {{ ($car && $car->drive_type == $drivetype->id) || old('drive_type') == $drivetype->id ? 'selected' : '' }}>
                                                                                {{ $drivetype->name }}
                                                                                </option>
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <span id="drive_type_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('drive_type')}}</div>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="row mt-5">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="veh_no_of_keys">Number of Keys</label>
                                                                    <select id="veh_no_of_keys" name="veh_no_of_keys" >
                                                                        <option value="" selected>Please Select</option>
                                                                        @foreach($vehiclenoofkeys as $vnoofkeys)
                                                                            <option value="{{ $vnoofkeys->id }}" {{ ($car && $car->veh_no_of_keys == $vnoofkeys->id) || old('veh_no_of_keys') == $vnoofkeys->id ? 'selected' : '' }}>
                                                                                {{ $vnoofkeys->no_of_keys }}    
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>
                                                                    <span id="veh_no_of_keys_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('veh_no_of_keys')}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="vehicle_apretire">Spare Tire</label>
                                                                    <select id="vehicle_apretire" name="vehicle_apretire" >
                                                                        <option value="" selected>Please Select</option>
                                                                        @foreach($vehicleSpireTire as $vspiretire)
                                                                            <option value="{{ $vspiretire->id }}" {{ ($car && $car->vehicle_apretire == $vspiretire->id) || old('vehicle_apretire') == $vspiretire->id ? 'selected' : '' }}>
                                                                                {{ $vspiretire->availability }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>
                                                                    <span id="vehicle_apretire_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('vehicle_apretire')}}</div>
                                                                </div>
                                      s                      </div> -->

                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="vehicle_interior">Interior</label>
                                                                        <select id="vehicle_interior" name="vehicle_interior">
                                                                            <option value="" selected>Please Select</option>
                                                                            @foreach($vehicleInterior as $vinterior)
                                                                                <option value="{{ $vinterior->id }}" {{ ($car && $car->vehicle_interior == $vinterior->id) || old('vehicle_interior') == $vinterior->id ? 'selected' : '' }}>
                                                                                {{ $vinterior->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <span id="vehicle_interior_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('vehicle_interior')}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="veh_vin_number">VIN Number</label>
                                                                    <input class="form-control" type="text" id="veh_vin_number" name="veh_vin_number" value="{{ $car ? $car->veh_vin_number : old('veh_vin_number') }}" maxlength="17"  pattern="[A-Za-z0-9]+">
                                                                    <span id="veh_vin_number_error" style="color: red;"></span>
                                                                    <div class="error-message">{{$errors->first('veh_vin_number')}}</div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="veh_no_of_keys">Number of Keys</label>
                                                                    <select id="veh_no_of_keys" name="veh_no_of_keys" >
                                                                        <option value="" selected>Please Select</option>
                                                                        @foreach($vehiclenoofkeys as $vnoofkeys)
                                                                            <option value="{{ $vnoofkeys->id }}" {{ ($car && $car->veh_no_of_keys == $vnoofkeys->id) || old('veh_no_of_keys') == $vnoofkeys->id ? 'selected' : '' }}>
                                                                                {{ $vnoofkeys->no_of_keys }}    
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>
                                                                    <span id="veh_no_of_keys_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('veh_no_of_keys')}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="vehicle_apretire">Spare Tire</label>
                                                                    <select id="vehicle_apretire" name="vehicle_apretire" >
                                                                        <option value="" selected>Please Select</option>
                                                                        @foreach($vehicleSpireTire as $vspiretire)
                                                                            <option value="{{ $vspiretire->id }}" {{ ($car && $car->vehicle_apretire == $vspiretire->id) || old('vehicle_apretire') == $vspiretire->id ? 'selected' : '' }}>
                                                                                {{ $vspiretire->availability }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>
                                                                    <span id="vehicle_apretire_error" style="color: red;"></span><br><br>
                                                                    <div class="error-message">{{$errors->first('vehicle_apretire')}}</div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                
                                                                <div class="col">
                                                                    <label>Unique Stickers:</label>
                                                                        @php
                                                                        $unique_stickers = $car ? json_decode($car->unique_stickers ?? '[]') : [];
                                                                        @endphp
                                                                    <div class="form-group">
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="chassis_perfect" name="unique_stickers[]" value="Chassis Perfect" {{ in_array('Chassis Perfect', $unique_stickers) || in_array('Chassis Perfect', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="chassis_perfect" name="unique_stickers[]" value="Chassis Perfect" {{ in_array('Chassis Perfect', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="chassis_perfect">Chassis Perfect</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="gcc_specs" name="unique_stickers[]" value="GCC Specs" {{ in_array('GCC Specs', $unique_stickers) || in_array('GCC Specs', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="gcc_specs" name="unique_stickers[]" value="GCC Specs" {{ in_array('GCC Specs', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="gcc_specs">GCC Specs</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="warranty_eligible" name="unique_stickers[]" value="Warranty Eligible" {{ in_array('Warranty Eligible', $unique_stickers) || in_array('Warranty Eligible', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="warranty_eligible" name="unique_stickers[]" value="Warranty Eligible" {{ in_array('Warranty Eligible', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="warranty_eligible">Warranty Eligible</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="bank_loan_eligible" name="unique_stickers[]" value="Bank Loan Eligible" {{ in_array('Bank Loan Eligible', $unique_stickers) || in_array('Bank Loan Eligible', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="bank_loan_eligible" name="unique_stickers[]" value="Bank Loan Eligible" {{ in_array('Bank Loan Eligible', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="bank_loan_eligible">Bank Loan Eligible</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="accident_free" name="unique_stickers[]" value="Accident Free" {{ in_array('Accident Free', $unique_stickers) || in_array('Accident Free', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="accident_free" name="unique_stickers[]" value="Accident Free" {{ in_array('Accident Free', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="accident_free">Accident Free</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="two_keys" name="unique_stickers[]" value="Two Keys" {{ in_array('Two Keys', $unique_stickers) || in_array('Two Keys', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="two_keys" name="unique_stickers[]" value="Two Keys" {{ in_array('Two Keys', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="two_keys">Two Keys</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="low_mileage" name="unique_stickers[]" value="Low Mileage" {{ in_array('Low Mileage', $unique_stickers) || in_array('Low Mileage', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="low_mileage" name="unique_stickers[]" value="Low Mileage" {{ in_array('Low Mileage', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="low_mileage">Low Mileage</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <!-- <input class="form-check-input" type="checkbox" id="brand_new_car" name="unique_stickers[]" value="Brand New Car"  {{ in_array('Brand New Car', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <input class="form-check-input" type="checkbox" id="brand_new_car" name="unique_stickers[]" value="Brand New Car" {{ in_array('Brand New Car', $unique_stickers) || in_array('Brand New Car', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <label class="form-check-label" for="low_mileage">Brand New Car</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="no_airbags_deployed" name="unique_stickers[]" value="No Airbags Deployed" {{ in_array('No Airbags Deployed', $unique_stickers) || in_array('No Airbags Deployed', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="no_airbags_deployed" name="unique_stickers[]" value="No Airbags Deployed" {{ in_array('No Airbags Deployed', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="no_airbags_deployed">No Airbags Deployed</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="full_option" name="unique_stickers[]" value="Full Option" {{ in_array('Full Option', $unique_stickers) || in_array('Full Option', old('unique_stickers', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="full_option" name="unique_stickers[]" value="Full Option" {{ in_array('Full Option', $unique_stickers) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="full_option">Full Option</label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                             
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="primary_damage">Primary Damage:</label>
                                                                        @php
                                                                     
                                                                        $primary_damage = $car ? json_decode($car->primary_damage ?? '[]') : [];
                                                                        @endphp
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="none" name="primary_damage[]" value="None" {{ in_array('None', $primary_damage) || in_array('None', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="none" name="primary_damage[]" value="None" {{ in_array('None', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="none">None</label>
                                                                        </div>
                                                                        
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="front_end" name="primary_damage[]" value="Front End" {{ in_array('Front End', $primary_damage) || in_array('Front End', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="front_end" name="primary_damage[]" value="Front End" {{ in_array('Front End', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="front_end">Front End</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="rear_end" name="primary_damage[]" value="Rear End" {{ in_array('Rear End', $primary_damage) || in_array('Rear End', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="rear_end" name="primary_damage[]" value="Rear End" {{ in_array('Rear End', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="rear_end">Rear End</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="side" name="primary_damage[]" value="Side" {{ in_array('Side', $primary_damage) || in_array('Side', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="side" name="primary_damage[]" value="Side" {{ in_array('Side', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="side">Side</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="flood" name="primary_damage[]" value="Flood" {{ in_array('Flood', $primary_damage) || in_array('Flood', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="flood" name="primary_damage[]" value="Flood" {{ in_array('Flood', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="flood">Flood</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="fire" name="primary_damage[]" value="Fire" {{ in_array('Fire', $primary_damage) || in_array('Fire', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="fire" name="primary_damage[]" value="Fire" {{ in_array('Fire', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="fire">Fire</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="hail" name="primary_damage[]" value="Hail" {{ in_array('Hail', $primary_damage) || in_array('Hail', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="hail" name="primary_damage[]" value="Hail" {{ in_array('Hail', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="hail">Hail</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="vandalism" name="primary_damage[]" value="Vandalism" {{ in_array('Vandalism', $primary_damage) || in_array('Vandalism', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="vandalism" name="primary_damage[]" value="Vandalism" {{ in_array('Vandalism', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="vandalism">Vandalism</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="theft" name="primary_damage[]" value="Theft" {{ in_array('Theft', $primary_damage) || in_array('Theft', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="theft" name="primary_damage[]" value="Theft" {{ in_array('Theft', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="theft">Theft</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="frame_damage" name="primary_damage[]" value="Frame Damage" {{ in_array('Frame Damage', $primary_damage) || in_array('Frame Damage', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="frame_damage" name="primary_damage[]" value="Frame Damage" {{ in_array('Frame Damage', $primary_damage) ? 'checked' : '' }}> -->
                                                                          
                                                                            <label class="form-check-label" for="frame_damage">Frame Damage</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="mechanical" name="primary_damage[]" value="Mechanical" {{ in_array('Mechanical', $primary_damage) || in_array('Mechanical', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="mechanical" name="primary_damage[]" value="Mechanical" {{ in_array('Mechanical', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="mechanical">Mechanical</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="electrical" name="primary_damage[]" value="Electrical" {{ in_array('Electrical', $primary_damage) || in_array('Electrical', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="electrical" name="primary_damage[]" value="Electrical" {{ in_array('Electrical', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="mechanical">Electrical</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="water_damage" name="primary_damage[]" value="Water Damage" {{ in_array('Water Damage', $primary_damage) || in_array('Water Damage', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="water_damage" name="primary_damage[]" value="Water Damage" {{ in_array('Water Damage', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="water_damage">Water Damage</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="undercarriage" name="primary_damage[]" value="Undercarriage" {{ in_array('Undercarriage', $primary_damage) || in_array('Undercarriage', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="undercarriage" name="primary_damage[]" value="Undercarriage" {{ in_array('Undercarriage', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="water_damage">Undercarriage</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="roof" name="primary_damage[]" value="Roof" {{ in_array('Roof', $primary_damage) || in_array('Roof', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <!-- <input class="form-check-input" type="checkbox" id="roof" name="primary_damage[]" value="Roof" {{ in_array('Roof', $primary_damage) ? 'checked' : '' }}> -->
                                                                            <label class="form-check-label" for="roof">Roof</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="interior" name="primary_damage[]" value="Interior" {{ in_array('Interior', $primary_damage) || in_array('Interior', old('primary_damage', [])) ? 'checked' : '' }}>
                                                                            <label class="form-check-label" for="interior">Interior</label>
                                                                            <label class="form-check-label" for="interior">Interior</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                        
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <label for="trim">Trim</label>
                                                              
                                                                    <input type="text" class="form-control" id="trimdata" name="trimdata" value="{{ $car ? $car->trimdata : old('trimdata') }}" >
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="veh_headlights">Vehicle Headlights</label>
                                                                        <textarea class="form-control" id="vehicle_highlights" name="vehicle_highlights" rows="8">{{ $car ? $car->vehicle_highlights : old('vehicle_highlights') }}</textarea>
                                                                        <span id="veh_headlights_error" style="color: red;"></span>
                                                                    </div>
                                                                    <div class="error-message">{{$errors->first('vehicle_highlights')}}</div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <label for="title">Title</label>
                                                                    <input type="text" class="form-control" id="title" name="title" value="{{ $car ? $car->title : old('title') }}" >
                                                                </div> 
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="vehicle_apretire">Vehicle Condition</label>
                                                                    <select id="vehicle_condition_id" name="vehicle_condition_id" >
                                                                        <option value="" selected>Please Select</option>
                                                                        @foreach($vehiclecondition as $vehcondition)
                                                                            <option value="{{ $vehcondition->id }}" {{ ($car && $car->vehicle_condition_id == $vehcondition->id) || old('vehicle_condition_id') == $vehcondition->id ? 'selected' : '' }}>
                                                                                {{ $vehcondition->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>
                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                    <label for="passenger">Passenger</label>
                                                                    <input type="number" class="form-control" id="passenger" name="passenger" placeholder="No of Passengers" value="{{ $car ? $car->passenger : old('passenger') }}" >
                                                                </div> 
                                                                 <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="body_type">Body Type</label>
                                                                    <select id="body_type" name="body_type" >
                                                                        <option value="" selected>Please Select</option>
                                                                        @foreach($vehiclebodytype as $vehbodytype)
                                                                            <option value="{{ $vehbodytype->id }}" {{ ($car && $car->body_type == $vehbodytype->id) || old('body_type') == $vehbodytype->id ? 'selected' : '' }}>
                                                                                {{ $vehbodytype->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="col">
                                                                <!-- <div class="form-check">
                                                                    <label for="title">Gcc Specs</label>
                                                                    <input class="form-check-input" type="checkbox" id="gcc_spec" name="gcc_spec" value="1" {{ $car && $car->gcc_spec == 1 ? 'checked' : '' }}>
                                                                </div>  -->
                                                            </div>
                                                                <!-- <div class="col">
                                                                    <div class="form-group">
                                                                    <label for="vehicle_apretire">Vehicle Condition</label>
                                                                    <select id="vehicle_condition_id" name="vehicle_condition_id" >
                                                                        <option value="" selected>Please Select</option>
                                                                        @foreach($vehiclecondition as $vehcondition)
                                                                            <option value="{{ $vehcondition->id }}" {{ ($car && $car->vehicle_condition_id == $vehcondition->id) || old('vehicle_condition_id') == $vehcondition->id ? 'selected' : '' }}>
                                                                                {{ $vehcondition->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </div>
                                                                  
                                                                </div> -->
                                                            </div>

                                                            <div class="col-md-12 mt-4">
                                                                <label for="signature">Signature :</label><br>
                                                                <div id="signature">
                                                                    @if($car && $car->signatureData)
                                                                        <div>
                                                                            <label>Signature Image:</label><br>
                                                                            <img src="{{ asset($car->signatureData) }}" alt="Signature">
                                                                        </div>
                                                                    @else
                                                    
                                                                        <canvas id="canvas" width="300" height="100"></canvas>
                                                                        <input type="hidden" id="signatureData" name="signatureData">

                                                                        <div class="controls">
                                                                            <a class="btn-green" href="" id="clearSig">Clear</a>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    
                                                    <a href="#"><button type="submit"  id="saveform1" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div>

                                    <!----------- steps 2 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step2">
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form2') : route('inspector.store_car_form2') }}" method="POST"  name="form2" enctype="multipart/form-data" id="form2">
                                             @csrf   
                                        
                                                @if($car)
                                                <input type="hidden" name="car_id" value="{{ $car->id }}">
                                                @endif
                                                <input type="hidden" name="step" value="2">
                                                <h2 class="text-center">Engine</h2>
                                                <hr class="mt-5">
                                                <div class="row mt-5">
                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Engine Upper Cover</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_upper_cover" value="Engine Upper Cover">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-pass engine-upper-cover-type" name="engine_upper_cover" id="engine_upper_cover_pass" type="radio" value="Pass" {{ ($car && $car->engine_upper_cover == 'pass') || old('engine_upper_cover') == 'pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label radio-btn-label" for="engine_upper_cover_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-scratches engine-upper-cover-type" name="engine_upper_cover" id="engine_upper_cover_minor_scratches" value="Minor Scratches" type="radio" {{ ($car && $car->engine_upper_cover == 'Minor Scratches') || old('engine_upper_cover') == 'Minor Scratches' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_upper_cover_minor_scratches">Minor Scratches</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-major engine-upper-cover-type" name="engine_upper_cover" id="engine_upper_cover_major_scratches" value="Major Scratches" type="radio" {{ ($car && $car->engine_upper_cover == 'Major Scratches') || old('engine_upper_cover') == 'Major Scratches' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_upper_cover_major_scratches">Major Scratches</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-cracked engine-upper-cover-type" name="engine_upper_cover" id="engine_upper_cover_cracked_broken" value="Cracked / Broken" type="radio" {{ ($car && $car->engine_upper_cover == 'Cracked / Broken') || old('engine_upper_cover') == 'Cracked / Broken' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_upper_cover_cracked_broken">Cracked / Broken</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-components engine-upper-cover-type" name="engine_upper_cover" id="engine_upper_cover_missing_components" value="Missing Components" type="radio" {{ ($car && $car->engine_upper_cover == 'Missing Components') || old('engine_upper_cover') == 'Missing Components' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_upper_cover_missing_components">Missing Components</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-missing engine-upper-cover-type" name="engine_upper_cover" id="engine_upper_cover_missing" value="Missing" type="radio" {{ ($car && $car->engine_upper_cover == 'Missing') || old('engine_upper_cover') == 'Missing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_upper_cover_missing">Missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-other engine-upper-cover-type" name="engine_upper_cover" id="engine_upper_cover_other" value="Other" type="radio" {{ ($car && $car->engine_upper_cover == 'Other') || old('engine_upper_cover') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_upper_cover_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input other" id="engine_upper_cover_other" name="engine_upper_cover_other" placeholder="Please type another option here" type="text" value="{{ old('engine_upper_cover_other', ($car && $car->engine_upper_cover == 'Other') ? $car->engine_upper_cover_other : '') }}" />
                                                            </div>
                                                        </div>
                                                        <span id="engine_upper_cover_error" style="color: red;"></span><br><br>
                                                        <div class="error-message">{{$errors->first('engine_upper_cover')}}</div>
                                                    </div>
                                                
                                                
                                                    <div class="col-md-5">
                                                        <div class="fault-photo ">
                                                            <label>Engine Upper Cover Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="engine_upper_cover_images[]" id="engine_upper_cover_images" multiple  />
                                                                <input type="hidden" name="old_engine_upper_cover_images" value="{{ $carmedia ? $carmedia->where('type', 'upper_cover')->pluck('images')->implode(',') : '' }}">
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('engine_upper_cover_images')}}</div>
                                                            <span id="engine_upper_cover_images_error" style="color: red;"></span><br><br>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "engine_upper_cover")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image"  width="150px" height="80px">
                                                                                
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-shield_cover">
                                                            <h6>Engine Shield Cover</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_shield_cover" value="Engine Shield Cover">
                                            
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-shield-pass" name="engine_shield_cover" id="engine_shield_cover_pass" type="radio" value="Pass" {{ ($car && $car->engine_shield_cover == 'Pass') || old('engine_shield_cover') == 'Pass' ? 'checked' : '' }} checked />
                                                                <label class="form-check-label label radio-btn-label" for="engine_shield_cover_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-shield-scratches" name="engine_shield_cover" id="engine_shield_cover_minor_scratches" value="Minor Scratches" type="radio" {{ ($car && $car->engine_shield_cover == 'Minor Scratches') || old('engine_shield_cover') == 'Minor Scratches' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_shield_cover_minor_scratches">Minor Scratches</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-shield-major" name="engine_shield_cover" id="engine_shield_cover_major_scratches" value="Major Scratches" type="radio" {{ ($car && $car->engine_shield_cover == 'Major Scratches') || old('engine_shield_cover') == 'Major Scratches' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_shield_cover_major_scratches">Major Scratches</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-shield-cracked" name="engine_shield_cover" id="rb-shield-cracked"  value="Cracked / Broken" type="radio" {{ ($car && $car->engine_shield_cover == 'Cracked / Broken') || old('engine_shield_cover') == 'Cracked / Broken' ? 'checked' : '' }}  />
                                                                <label class="form-check-label label radio-btn-label" for="rb-shield-cracked">Cracked / Broken</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-shield-components" name="engine_shield_cover" id="engine_shield_cover_missing_components" value="Missing Components" type="radio" {{ ($car && $car->engine_shield_cover == 'Missing Components') || old('engine_shield_cover') == 'Missing Components' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_shield_cover_missing_components">Missing Components</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-shield-missing" name="engine_shield_cover" id="engine_shield_cover_missing" value="Missing" type="radio" {{ ($car && $car->engine_shield_cover == 'Missing') || old('engine_shield_cover') == 'Missing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_shield_cover_missing">Missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-shield-other" name="engine_shield_cover" id="engine_shield_cover_other" value="Other" type="radio" {{ ($car && $car->engine_shield_cover == 'Other') || old('engine_shield_cover') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="engine_shield_cover_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input shield-other" id="engine_shield_cover_other" name="engine_shield_cover_other" placeholder="Please type another option here" type="text" value="{{ old('engine_shield_cover') == 'Other' ? old('engine_shield_cover_other') : ($car ? $car->engine_shield_cover_other : '') }}" />
                                                            </div>

                                                        </div>
                                                        <div class="error-message">{{$errors->first('engine_shield_cover')}}</div>
                                                        <span id="engine_shield_cover_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo ">
                                                            <label>Engine Shield Cover Fault - Photo</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="engine_shield_cover_images[]"  id="engine_shield_cover_images" multiple  />
                                                                <input type="hidden" name="old_engine_shield_cover_images" value="{{ $carmedia ? $carmedia->where('type', 'shield_cover')->pluck('images')->implode(',') : '' }}">
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="shield-cover-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('engine_shield_cover_images')}}</div>
                                                            <span id="engine_shield_cover_images_error" style="color: red;"></span><br><br>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "engine_shield_cover")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper engine-mounts">
                                                            <h6>Engine Mounts</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_engine_mounts" value="Engine Mounts">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-mounts-pass" name="engine_mounts" id="engine_mounts_pass" value="Pass" type="radio" {{ ($car && $car->engine_mounts == 'Pass') || old('engine_mounts') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="engine_mounts_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-mounts-minor" name="engine_mounts" id="engine_mounts_minor_worn" value="Minor worn out due to wear and tear. Needs to be replaced" type="radio" {{ ($car && $car->engine_mounts == 'Minor worn out due to wear and tear. Needs to be replaced') || old('engine_mounts') == 'Minor worn out due to wear and tear. Needs to be replaced' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_mounts_minor_worn">Minor worn out due to wear and tear. Needs to be replaced.</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-mounts-damaged" name="engine_mounts" id="engine_mounts_damaged" value="Damaged" type="radio" {{ ($car && $car->engine_mounts == 'Damaged') || old('engine_mounts') == 'Damaged' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_mounts_damaged">Damaged (can lead to engine vibration)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-mounts-broken" name="engine_mounts" id="engine_mounts_broken" value="Broken" type="radio" {{ ($car && $car->engine_mounts == 'Broken') || old('engine_mounts') == 'Broken' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_mounts_broken">Broken (can lead to engine vibration and clunking noise)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-mounts-other" name="engine_mounts" id="engine_mounts_other" value="Other" type="radio" {{ ($car && $car->engine_mounts == 'Other') || old('engine_mounts') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_mounts_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input mounts-other" id="engine_mounts_other" name="engine_mounts_other" placeholder="Please type another option here" type="text" value="{{ old('engine_mounts') == 'Other' ? old('engine_mounts_other') : ($car ? $car->engine_mounts_other : '') }}" />
                                                            </div>

                                                        </div>
                                                        <div class="error-message">{{$errors->first('engine_mounts')}}</div>
                                                        <span id="engine_mounts_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Engine Mounts Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="engine_mounts_images[]" id="engine_mounts_images" multiple />
                        
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="engine-mounts-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('engine_mounts_images')}}</div>
                                                            <span id="engine_mounts_images_error" style="color: red;"></span><br><br>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "engine_mounts")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Bonnet Hinge & Holder</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_bonnet_hinge_holder" value="Bonnet Hinge & Holder">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-bonnet-pass" name="bonnet_hinge_holder" id="bonnet_hinge_pass" value="Pass" type="radio" {{ ($car && $car->bonnet_hinge_holder == 'Pass') || old('bonnet_hinge_holder') == 'Pass' ? 'checked' : '' }} checked />
                                                                <label class="form-check-label label" for="bonnet_hinge_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-bonnet-missing" name="bonnet_hinge_holder" id="bonnet_hinge_missing" value="Missing/Unavailable" type="radio" {{ ($car && $car->bonnet_hinge_holder == 'Missing/Unavailable') || old('bonnet_hinge_holder') == 'Missing/Unavailable' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="bonnet_hinge_missing">Missing/Unavailable</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-bonnet-cable" name="bonnet_hinge_holder" id="bonnet_hinge_cable" value="Not opening smoothly, cable and/or lock needs to be repaired." type="radio" {{ ($car && $car->bonnet_hinge_holder == 'Not opening smoothly, cable and/or lock needs to be repaired.') || old('bonnet_hinge_holder') == 'Not opening smoothly, cable and/or lock needs to be repaired.' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="bonnet_hinge_cable">Not opening smoothly, cable and/or lock needs to be repaired.</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-bonnet-aftermarket" name="bonnet_hinge_holder" id="bonnet_hinge_aftermarket" value="Aftermarket" type="radio" {{ ($car && $car->bonnet_hinge_holder == 'Aftermarket') || old('bonnet_hinge_holder') == 'Aftermarket' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="bonnet_hinge_aftermarket">Aftermarket</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-bonnet-other" name="bonnet_hinge_holder" id="bonnet_hinge_other"  value="Other" type="radio" {{ ($car && $car->bonnet_hinge_holder == 'Other') || old('bonnet_hinge_holder') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="bonnet_hinge_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input bonnet-other" id="bonnet_hinge_holder_other" name="bonnet_hinge_holder_other" placeholder="Please type another option here" type="text" value="{{ ($car && $car->bonnet_hinge_holder == 'Other') ? $car->bonnet_hinge_holder_other : old('bonnet_hinge_holder_other') }}" />
                                                            </div>

                                                        </div>
                                                        <div class="error-message">{{$errors->first('bonnet_hinge_holder')}}</div>
                                                        <span id="engine_mounts_error" style="color: red;"></span><br><br>  
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Bonnet Holder Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="bonnet_hinge_holder_images[]" id="bonnet_hinge_holder_images"  multiple />
                                                                <input type="hidden" name="old_bonnet_hinge_holder_images" value="{{ $carmedia ? $carmedia->where('type', 'bonnet_hinge_holder')->pluck('images')->implode(',') : '' }}">
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="bonnet-hinge-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('bonnet_hinge_holder_images')}}</div>
                                                            <span id="bonnet_hinge_holder_images_error" style="color: red;"></span><br><br>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "bonnet_hinge_holder")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Turbo / Supercharger</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_turbo_supercharger" value="Turbo / Supercharger">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-turbo-pass" name="turbo_preference" id="turbo_preference_pass" value="Pass" type="radio" {{ ($car && $car->turbo_preference == 'Pass') || old('turbo_preference') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="turbo_preference_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-turbo-na" name="turbo_preference" id="turbo_preference_na" value="N/A" type="radio" {{ ($car && $car->turbo_preference == 'N/A') || old('turbo_preference') == 'N/A' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="turbo_preference_na">N/A</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-turbo-fan" name="turbo_preference" id="turbo_preference_fan" value="Fan not working properly" type="radio" {{ ($car && $car->turbo_preference == 'Fan not working properly') || old('turbo_preference') == 'Fan not working properly' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="turbo_preference_fan">Fan not working properly</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-turbo-serviced" name="turbo_preference" id="turbo_preference_serviced" value="Needs to be serviced" type="radio" {{ ($car && $car->turbo_preference == 'Needs to be serviced') || old('turbo_preference') == 'Needs to be serviced' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="turbo_preference_serviced">Needs to be serviced</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-turbo-seal" name="turbo_preference" id="turbo_preference_seal" value="Seal(s) damaged" type="radio" {{ ($car && $car->turbo_preference == 'Seal(s) damaged') || old('turbo_preference') == 'Seal(s) damaged' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="turbo_preference_seal">Seal(s) damaged</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-turbo-hose" name="turbo_preference" id="turbo_preference_hose" value="Hose/clamp damaged" type="radio" {{ ($car && $car->turbo_preference == 'Hose/clamp damaged') || old('turbo_preference') == 'Hose/clamp damaged' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="turbo_preference_hose">Hose/clamp damaged</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-turbo-other" name="turbo_preference" id="turbo_preference_other" value="Other" type="radio" {{ ($car && $car->turbo_preference == 'Other') || old('turbo_preference') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="turbo_preference_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input turbo-other" id="turbo_preference_other" name="turbo_preference_other" placeholder="Please type another option here" type="text" value="{{ ($car && $car->turbo_preference == 'Other') ? $car->turbo_preference_other : old('turbo_preference_other') }}" />
                                                            </div>
                                                        </div>
                                                        <div class="error-message">{{$errors->first('turbo_preference')}}</div>
                                                        <span id="turbo_preference_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Turbo/Supercharger Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="turbo_preference_images[]" id="turbo_preference_images" multiple  />
                                                                <input type="hidden" name="old_turbo_preference_images" value="{{ $carmedia ? $carmedia->where('type', 'turbo_supercharger')->pluck('images')->implode(',') : '' }}">

                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="turbo_preference-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('turbo_preference_images')}}</div>
                                                            <span id="turbo_preference_images_error" style="color: red;"></span><br><br>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "turbo_preference")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Fender Liners</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_fender_liners" value="Fender Liners">

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fender-pass" name="fender_liners" id="fender_liners_pass" value="Pass" type="radio" {{ ($car && $car->fender_liners == 'Pass') || old('fender_liners') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="fender_liners_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fender-scratched" name="fender_liners" id="fender_liners_scratched" value="Scratched" type="radio" {{ ($car && $car->fender_liners == 'Scratched') || old('fender_liners') == 'Scratched' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fender_liners_scratched">Scratched</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fender-minor" name="fender_liners" id="fender_liners_minor" value="Minor Damaged/Cracked" type="radio" {{ ($car && $car->fender_liners == 'Minor Damaged/Cracked') || old('fender_liners') == 'Minor Damaged/Cracked' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fender_liners_minor">Minor Damaged/Cracked</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fender-major" name="fender_liners" id="fender_liners_major" value="Major Damaged/Cracked" type="radio" {{ ($car && $car->fender_liners == 'Major Damaged/Cracked') || old('fender_liners') == 'Major Damaged/Cracked' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fender_liners_major">Major Damaged/Cracked</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fender-missing" name="fender_liners" id="fender_liners_missing_clips" value="Missing clips" type="radio" {{ ($car && $car->fender_liners == 'Missing clips') || old('fender_liners') == 'Missing clips' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fender_liners_missing_clips">Missing clips</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fender-liners" name="fender_liners" id="fender_liners_liners_missing" value="Liners missing" type="radio" {{ ($car && $car->fender_liners == 'Liners missing') || old('fender_liners') == 'Liners missing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fender_liners_liners_missing">Liners missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fender-other" name="fender_liners" id="fender_liners_other" value="Other" type="radio" {{ ($car && $car->fender_liners == 'Other') || old('fender_liners') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fender_liners_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input fender-other" id="fender_liners_other" name="fender_liners_other" placeholder="Please type another option here" type="text" value="{{ ($car && $car->fender_liners == 'Other') ? $car->fender_liners_other : old('fender_liners_other') }}" />
                                                            </div>


                                                        </div>
                                                        <div class="error-message">{{$errors->first('fender_liners')}}</div>
                                                        <span id="fender_liners_errors" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Fender Liners Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="fender_liners_images[]"  id="fender_liners_images" multiple />
                                                                <input type="hidden" name="old_fender_liners_images" value="{{ $carmedia ? $carmedia->where('type', 'fender_liners')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="fender-liners-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('fender_liners_images')}}</div>
                                                            <span id="fender_liners_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "fender_liners")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">
                                                            <!---code --->
                                                

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Drive Belt / Pulleys</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_drive_belts" value="Drive Belt / Pulleys">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-drive-pass" name="drive_belt_pulleys" id="drive_belt_pulleys_pass" value="Pass" type="radio" {{ ($car && $car->drive_belt_pulleys == 'Pass') || old('drive_belt_pulleys') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="drive_belt_pulleys_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-drive-general" name="drive_belt_pulleys" id="drive_belt_pulleys_general" value="General wear and tear" type="radio" {{ ($car && $car->drive_belt_pulleys == 'General wear and tear') || old('drive_belt_pulleys') == 'General wear and tear' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="drive_belt_pulleys_general">General wear and tear</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-drive-squeaking" name="drive_belt_pulleys" id="drive_belt_pulleys_squeaking" value="Squeaking belt sounds" type="radio" {{ ($car && $car->drive_belt_pulleys == 'Squeaking belt sounds') || old('drive_belt_pulleys') == 'Squeaking belt sounds' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="drive_belt_pulleys_squeaking">Squeaking belt sounds</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-drive-bearing" name="drive_belt_pulleys" id="drive_belt_pulleys_bearing" value="Damaged bearing" type="radio" {{ ($car && $car->drive_belt_pulleys == 'Damaged bearing') || old('drive_belt_pulleys') == 'Damaged bearing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="drive_belt_pulleys_bearing">Damaged bearing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-drive-pulley" name="drive_belt_pulleys" id="drive_belt_pulleys_pulley" value="Damaged pulley" type="radio" {{ ($car && $car->drive_belt_pulleys == 'Damaged pulley') || old('drive_belt_pulleys') == 'Damaged pulley' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="drive_belt_pulleys_pulley">Damaged pulley</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-drive-other" name="drive_belt_pulleys" id="drive_belt_pulleys_other" value="Other" type="radio" {{ ($car && $car->drive_belt_pulleys == 'Other') || old('drive_belt_pulleys') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="drive_belt_pulleys_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input drive-other" id="drive_belt_pulleys_other" name="drive_belt_pulleys_other"  placeholder="Please type another option here" type="text" value="{{ ($car && $car->drive_belt_pulleys == 'Other') ? $car->drive_belt_pulleys_other : old('drive_belt_pulleys_other') }}" />
                                                            </div>


                                                        </div>
                                                        <div class="error-message">{{$errors->first('drive_belt_pulleys')}}</div>
                                                        <span id="drive_belt_pulleys_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Drive Belt / Pulleys Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="drive_belt_pulleys_images[]" id="drive_belt_pulleys_images" multiple  />
                                                                <input type="hidden" name="old_drive_belt_pulleys_images" value="{{ $carmedia ? $carmedia->where('type', 'Drive Belt / Pulleys')->pluck('drive_belts')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="drive-belt-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('drive_belts')}}</div>
                                                            <span id="drive_belt_pulleys_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "drive_belts_pulleys")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-12">
                                                        <div class="engine-upper">
                                                            <h6>Engine Idle</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_engine_idle" value="Engine Idle">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-engine-pass" name="engine_idle" id="engine_idle_pass" value="Pass" type="radio" {{ ($car && $car->engine_idle == 'Pass') || old('engine_idle') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="engine_idle_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-engine-rpm" name="engine_idle" id="engine_idle_rpm" value="RPM is fluctuating" type="radio" {{ ($car && $car->engine_idle == 'RPM is fluctuating') || old('engine_idle') == 'RPM is fluctuating' ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="engine_idle_rpm">RPM is fluctuating</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-engine-idling" name="engine_idle" id="engine_idle_idling" value="Idling below normal" type="radio" {{ ($car && $car->engine_idle == 'Idling below normal') || old('engine_idle') == 'Idling below normal' ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="engine_idle_idling">Idling below normal</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-engine-bouncing" name="engine_idle" id="engine_idle_bouncing" value="Bouncing or shaking during idle" type="radio" {{ ($car && $car->engine_idle == 'Bouncing or shaking during idle') || old('engine_idle') == 'Bouncing or shaking during idle' ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="engine_idle_bouncing">Bouncing or shaking during idle</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-engine-stalling" name="engine_idle" id="engine_idle_stalling" value="Engine stalling" type="radio" {{ ($car && $car->engine_idle == 'Engine stalling') || old('engine_idle') == 'Engine stalling' ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="engine_idle_stalling">Engine stalling</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-engine-vehicle" name="engine_idle" id="engine_idle_vehicle" value="Vehicle not starting" type="radio" {{ ($car && $car->engine_idle == 'Vehicle not starting') || old('engine_idle') == 'Vehicle not starting' ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="engine_idle_vehicle">Vehicle not starting</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-engine-other" name="engine_idle" id="engine_idle_other"  value="Other" type="radio" {{ ($car && $car->engine_idle == 'Other') || old('engine_idle') == 'Other' ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="engine_idle_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input engine-other" id="engine_idle_other"  name="engine_idle_other" placeholder="Please type another option here" type="text" value="{{ ($car && $car->engine_idle == 'Other') ? $car->engine_idle_other : old('engine_idle_other') }}" />
                                                            </div>
                                                        </div>
                                                        <div class="error-message">{{$errors->first('engine_idle')}}</div>
                                                        <span id="engine_idle_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Engine Oil Filler Cap</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_engine_oil_filler_cap" value="Engine Oil Filler Cap">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-oil-pass" name="engine_oil_filler_cap" id="engine_oil_filler_cap_pass" value="Pass" type="radio" {{ ($car && $car->engine_oil_filler_cap == 'Pass') || old('engine_oil_filler_cap') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="engine_oil_filler_cap_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-oil-filler" name="engine_oil_filler_cap" id="engine_oil_filler_cap_filler_damaged" value="Oil filler cap damaged/broken" type="radio" {{ ($car && $car->engine_oil_filler_cap == 'Oil filler cap damaged/broken') || old('engine_oil_filler_cap') == 'Oil filler cap damaged/broken' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_filler_cap_filler_damaged">Oil filler cap damaged/broken</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-oil-cap" name="engine_oil_filler_cap" id="engine_oil_filler_cap_filler_missing" value="Oil filler cap missing" type="radio" {{ ($car && $car->engine_oil_filler_cap == 'Oil filler cap missing') || old('engine_oil_filler_cap') == 'Oil filler cap missing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_filler_cap_filler_missing">Oil filler cap missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-oil-other" name="engine_oil_filler_cap" id="engine_oil_filler_cap_other" value="Other" type="radio" {{ ($car && $car->engine_oil_filler_cap == 'Other') || old('engine_oil_filler_cap') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_filler_cap_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input oil-other" id="engine_oil_filler_cap_other" name="engine_oil_filler_cap_other" placeholder="Please type another option here" type="text" value="{{ ($car && $car->engine_oil_filler_cap == 'Other') ? $car->engine_oil_filler_cap_other : old('engine_oil_filler_cap_other') }}" />
                                                            </div>
                                                        </div>
                                                        <div class="error-message">{{$errors->first('engine_oil_filler_cap')}}</div>
                                                        <span id="engine_oil_filler_cap_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Engine Oil Filler Cap Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="engine_oil_filler_cap_images[]"  id="engine_oil_filler_cap_images" multiple />
                                                                <input type="hidden" name="old_engine_oil_filler_cap_images" value="{{ $carmedia ? $carmedia->where('type', 'engine_oil_filler_cap')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="engine-oil-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('engine_oil_filler_cap_images')}}</div>
                                                            <span id="engine_oil_filler_cap_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "engine_oil_filler_cap")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">
                
                                                    <div class="col-md-7">
                                                        <div class="engine-uppe radiator">
                                                            <h6>Radiator</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_radiator" value="Radiator">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiator-pass" name="radiator" id="radiator_pass" value="Pass" type="radio" {{ ($car && $car->radiator == 'Pass') || old('radiator') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="radiator_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiator-external" name="radiator" id="radiator_external" value="Visible external damage" type="radio" {{ ($car && $car->radiator == 'Visible external damage') || old('radiator') == 'Visible external damage' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="radiator_external">Visible external damage</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiator-clogged" name="radiator" id="radiator_clogged" value="Symptoms of clogged radiator" type="radio" {{ ($car && $car->radiator == 'Symptoms of clogged radiator') || old('radiator') == 'Symptoms of clogged radiator' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="radiator_clogged">Symptoms of clogged radiator</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiator-hose" name="radiator" id="radiator_hose" value="Hose(s) damaged, need to be replaced" type="radio" {{ ($car && $car->radiator == 'Hose(s) damaged, need to be replaced') || old('radiator') == 'Hose(s) damaged, need to be replaced' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="radiator_hose">Hose(s) damaged, need to be replaced</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiator-clamps" name="radiator" id="radiator_clamps" value="Hose clamps missing" type="radio" {{ ($car && $car->radiator == 'Hose clamps missing') || old('radiator') == 'Hose clamps missing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="radiator_clamps">Hose clamps missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiator-visible" name="radiator" id="radiator_visible" value="Leakage visible" type="radio" {{ ($car && $car->radiator == 'Leakage visible') || old('radiator') == 'Leakage visible' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="radiator_visible">Leakage visible</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiator-cap" name="radiator" id="radiator_cap" value="Radiator cap damaged/broken" type="radio" {{ ($car && $car->radiator == 'Radiator cap damaged/broken') || old('radiator') == 'Radiator cap damaged/broken' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="radiator_cap">Radiator cap damaged/broken</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiator-missing" name="radiator" id="radiator_missing" value="Radiator cap missing" type="radio" {{ ($car && $car->radiator == 'Radiator cap missing') || old('radiator') == 'Radiator cap missing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="radiator_missing">Radiator cap missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiator-other" name="radiator" id="radiator_other" value="Other" type="radio" {{ ($car && $car->radiator == 'Other') || old('radiator') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="radiator_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input radiator-other" id="radiator_other" name="radiator_other" placeholder="Please type another option here" type="text" value="{{ ($car && $car->radiator == 'Other') ? $car->radiator_other : old('radiator_other') }}" />
                                                            </div>
                                                        </div>
                                                        <div class="error-message">{{$errors->first('radiator')}}</div>
                                                            <span id="radiator_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Radiator Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="radiator_images[]" id="radiator_images" multiple  />
                                                                <input type="hidden" name="old_radiator_images" value="{{ $carmedia ? $carmedia->where('type', 'radiator')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="radiatorr-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('radiator_images')}}</div>
                                                            <span id="radiator_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "radiator")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                        
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Engine Oil Leaks</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_engine_oil_leaks" value="Engine Oil Leaks">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-pass" name="engine_oil_leaks" id="engine_oil_leaks_pass" value="Pass" type="radio" {{ ($car && $car->engine_oil_leaks == 'Pass') || old('engine_oil_leaks') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="engine_oil_leaks_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-filter" name="engine_oil_leaks" id="engine_oil_leaks_filter" value="Leak from oil filter gasket" type="radio" {{ ($car && $car->engine_oil_leaks == 'Leak from oil filter gasket') || old('engine_oil_leaks') == 'Leak from oil filter gasket' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_leaks_filter">Leak from oil filter gasket</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-pan" name="engine_oil_leaks" id="engine_oil_leaks_pan" value="Leak from oil pan gasket" type="radio" {{ ($car && $car->engine_oil_leaks == 'Leak from oil pan gasket') || old('engine_oil_leaks') == 'Leak from oil pan gasket' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_leaks_pan">Leak from oil pan gasket</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-pump" name="engine_oil_leaks" id="engine_oil_leaks_pump" value="Leak from oil pump gasket" type="radio" {{ ($car && $car->engine_oil_leaks == 'Leak from oil pump gasket') || old('engine_oil_leaks') == 'Leak from oil pump gasket' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_leaks_pump">Leak from oil pump gasket</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-cover" name="engine_oil_leaks" id="engine_oil_leaks_cover" value="Leak from valve cover/camshaft gasket" type="radio" {{ ($car && $car->engine_oil_leaks == 'Leak from valve cover/camshaft gasket') || old('engine_oil_leaks') == 'Leak from valve cover/camshaft gasket' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_leaks_cover">Leak from valve cover/camshaft gasket</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-drain" name="engine_oil_leaks" id="engine_oil_leaks_drain" value="Leak from oil drain plug" type="radio" {{ ($car && $car->engine_oil_leaks == 'Leak from oil drain plug') || old('engine_oil_leaks') == 'Leak from oil drain plug' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_leaks_drain">Leak from oil drain plug</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-seal" name="engine_oil_leaks" id="engine_oil_leaks_seal" value="Leak from crankshaft seal" type="radio" {{ ($car && $car->engine_oil_leaks == 'Leak from crankshaft seal') || old('engine_oil_leaks') == 'Leak from crankshaft seal' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_leaks_seal">Leak from crankshaft seal</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-timing" name="engine_oil_leaks" id="engine_oil_leaks_timing" value="Leak from timing cover gasket" type="radio" {{ ($car && $car->engine_oil_leaks == 'Leak from timing cover gasket') || old('engine_oil_leaks') == 'Leak from timing cover gasket' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_leaks_timing">Leak from timing cover gasket</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-gasket" name="engine_oil_leaks" id="engine_oil_leaks_gasket" value="Leak from head gasket" type="radio" {{ ($car && $car->engine_oil_leaks == 'Leak from head gasket') || old('engine_oil_leaks') == 'Leak from head gasket' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_leaks_gasket">Leak from head gasket</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-leaks-other" name="engine_oil_leaks" id="engine_oil_leaks_other" value="Other" type="radio" {{ ($car && $car->engine_oil_leaks == 'Other') || old('engine_oil_leaks') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_leaks_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input leaks-other" id="engine_oil_leaks_other" name="engine_oil_leaks_other" placeholder="Please type another option here" type="text" value="{{ ($car && $car->engine_oil_leaks == 'Other') ? $car->engine_oil_leaks_other : old('engine_oil_leaks_other') }}" />
                                                            </div>

                                                        </div>
                                                        <div class="error-message">{{$errors->first('engine_oil_leaks')}}</div>
                                                        <span id="engine_oil_leaks_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Engine Oil Leak Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="engine_oil_leaks_images[]" id="engine_oil_leaks_images" multiple />
                                                                <input type="hidden" name="old_engine_oil_leaks_images" value="{{ $carmedia ? $carmedia->where('type', 'engine_oil_leaks')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="engine-oil-leaks-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('engine_oil_leaks_images')}}</div>
                                                            <span id="engine_oil_leaks_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "engine_oil_leaks")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                              
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Engine Oil Condition</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_engine_oil_condition" value="Engine Oil Condition">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-condition-pass" name="engine_oil_condition" id="engine_oil_condition_pass" value="Pass" type="radio" {{ ($car && $car->engine_oil_condition == 'Pass') || old('engine_oil_condition') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="engine_oil_condition_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-condition-black" name="engine_oil_condition" id="engine_oil_condition_black" value="Oil is black, needs to be replaced" type="radio" {{ ($car && $car->engine_oil_condition == 'Oil is black, needs to be replaced') || old('engine_oil_condition') == 'Oil is black, needs to be replaced' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_condition_black">Oil is black, needs to be replaced</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-condition-low" name="engine_oil_condition" id="engine_oil_condition_low" value="Level is low, needs to be topped up with same oil grade" type="radio" {{ ($car && $car->engine_oil_condition == 'Level is low, needs to be topped up with same oil grade') || old('engine_oil_condition') == 'Level is low, needs to be topped up with same oil grade' ? 'checked' : '' }} />
                                                                <label class="form-check-label label " for="engine_oil_condition_low">Level is low, needs to be topped up with same oil grade</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-condition-high" name="engine_oil_condition" id="engine_oil_condition_high" value="Level is high, needs to be partially removed" type="radio" {{ ($car && $car->engine_oil_condition == 'Level is high, needs to be partially removed') || old('engine_oil_condition') == 'Level is high, needs to be partially removed' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_condition_high">Level is high, needs to be partially removed</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-condition-cover" name="engine_oil_condition" id="engine_oil_condition_cover" value="Signs of coolant in engine oil, might mean failure in one more of engine gaskets or seals" type="radio" {{ ($car && $car->engine_oil_condition == 'Signs of coolant in engine oil, might mean failure in one more of engine gaskets or seals') || old('engine_oil_condition') == 'Signs of coolant in engine oil, might mean failure in one more of engine gaskets or seals' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_condition_cover">Signs of coolant in engine oil, might mean failure in one more of engine gaskets or seals</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-condition-filler" name="engine_oil_condition" id="engine_oil_condition_filler" value="Oil filler cap damaged/broken" type="radio" {{ ($car && $car->engine_oil_condition == 'Oil filler cap damaged/broken') || old('engine_oil_condition') == 'Oil filler cap damaged/broken' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_condition_filler">Oil filler cap damaged/broken</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-condition-cap" name="engine_oil_condition" id="engine_oil_condition_cap" value="Oil filler cap missing" type="radio" {{ ($car && $car->engine_oil_condition == 'Oil filler cap missing') || old('engine_oil_condition') == 'Oil filler cap missing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_condition_cap">Oil filler cap missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-condition-other" name="engine_oil_condition" id="engine_oil_condition_other" value="Other" type="radio" {{ ($car && $car->engine_oil_condition == 'Other') || old('engine_oil_condition') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="engine_oil_condition_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input condition-other" id="engine_oil_condition_other" name="engine_oil_condition_other" placeholder="Please type another option here" type="text" value="{{ ($car && $car->engine_oil_condition == 'Other') ? $car->engine_oil_condition_other : old('engine_oil_condition_other') }}" />
                                                            </div>


                                                        </div>
                                                        <div class="error-message">{{$errors->first('engine_oil_condition')}}</div>
                                                        <span id="engine_oil_condition_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Engine Oil Condition Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="engine_oil_condition_images[]" id="engine_oil_condition_images" multiple />
                                                                <input type="hidden" name="old_engine_oil_condition_images" value="{{ $carmedia ? $carmedia->where('type', 'engine_oil_condition')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="engine-oil-condition-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('engine_oil_condition_images')}}</div>
                                                            <span id="engine_oil_condition_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "engine_oil_condition")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">

                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">
                                                    
                                                    <div class="col-md-7">
                                                        <div class="engine-upper coolant-condition">
                                                            <h6>Coolant Condition</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_coolant_condition" value="Coolant Condition">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolant-pass" name="coolant_condition" id="coolant_condition_pass" type="radio" value="Pass" {{ ($car && $car->coolant_condition == 'Pass') || old('coolant_condition') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="coolant_condition_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolant-topped" name="coolant_condition" id="coolant_condition_topped" value="Needs to be topped up" type="radio" {{ ($car && $car->coolant_condition == 'Needs to be topped up') || old('coolant_condition') == 'Needs to be topped up' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="coolant_condition_topped">Needs to be topped up</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolant-flushed" name="coolant_condition" id="coolant_condition_flushed" value="Needs to be flushed (Looks colorless/rusty)" type="radio" {{ ($car && $car->coolant_condition == 'Needs to be flushed (Looks colorless/rusty)') || old('coolant_condition') == 'Needs to be flushed (Looks colorless/rusty)' ? 'checked' : '' }} />
                                                                <label class="form-check-label label label-coolant" for="coolant_condition_flushed">Needs to be flushed (Looks colorless/rusty)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolant-surface" name="coolant_condition" id="coolant_condition_surface" value="Looks sludgy/oil surface (Might be head gasket leakage)" type="radio" {{ ($car && $car->coolant_condition == 'Looks sludgy/oil surface (Might be head gasket leakage)') || old('coolant_condition') == 'Looks sludgy/oil surface (Might be head gasket leakage)' ? 'checked' : '' }} />
                                                                <label class="form-check-label label label-coolant" for="coolant_condition_surface">Looks sludgy/oil surface (Might be head gasket leakage)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolant-bulgy" name="coolant_condition" id="coolant_condition_bulgy" value="Coolant hose needs to be replaced (Leaking/cracked/bulgy)" type="radio" {{ ($car && $car->coolant_condition == 'Coolant hose needs to be replaced (Leaking/cracked/bulgy)') || old('coolant_condition') == 'Coolant hose needs to be replaced (Leaking/cracked/bulgy)' ? 'checked' : '' }} />
                                                                <label class="form-check-label label label-cstm" for="coolant_condition_bulgy">Coolant hose needs to be replaced (Leaking/cracked/bulgy)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolant-filler" name="coolant_condition" id="coolant_condition_filler" value="Oil filler cap damaged/broken" type="radio" {{ ($car && $car->coolant_condition == 'Oil filler cap damaged/broken') || old('coolant_condition') == 'Oil filler cap damaged/broken' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="coolant_condition_filler">Oil filler cap damaged/broken</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolant-other" name="coolant_condition" id="coolant_condition_other" value="Other" type="radio" {{ ($car && $car->coolant_condition == 'Other') || old('coolant_condition') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="coolant_condition_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input coolant-other" id="coolant_condition_other" name="coolant_condition_other" placeholder="Please type another option here" type="text" value="{{ ($car && $car->coolant_condition == 'Other') ? $car->coolant_condition_other : old('coolant_condition_other') }}" />
                                                            </div>


                                                        </div>
                                                        <div class="error-message">{{$errors->first('coolant_condition')}}</div>
                                                        <span id="coolant_condition_error" style="color: red;"></span><br><br>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Coolant Condition Fault - Photo</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="coolant_condition_images[]" id="coolant_condition_images" multiple />
                                                                <input type="hidden" name="old_coolant_condition_images" value="{{ $carmedia ? $carmedia->where('type', 'coolant_condition')->pluck('images')->implode(',') : '' }}">
                                                                
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="collant-condition-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('coolant_condition_images')}}</div>
                                                            <span id="coolant_condition_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "coolant_condition")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Coolant Cap</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_coolant_cap" value="Coolant Cap">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-cap-pass" name="coolant_cap" id="coolant_cap_pass" type="radio" value="Pass" {{ ($car && $car->coolant_cap == 'Pass') || old('coolant_cap') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="coolant_cap_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-cap-missing" name="coolant_cap" id="coolant_cap_missing" value="Filler cap missing" type="radio" {{ ($car && $car->coolant_cap == 'Filler cap missing') || old('coolant_cap') == 'Filler cap missing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="coolant_cap_missing">Filler cap missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-cap-broken" name="coolant_cap" id="coolant_cap_broken" value="Filler cap damaged/broken" type="radio" {{ ($car && $car->coolant_cap == 'Filler cap damaged/broken') || old('coolant_cap') == 'Filler cap damaged/broken' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="coolant_cap_broken">Filler cap damaged/broken</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-cap-other" name="coolant_cap" id="coolant_cap_other" value="Other" type="radio" {{ ($car && $car->coolant_cap == 'Other') || old('coolant_cap') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="coolant_cap_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input cap-other" id="coolant_cap_other" name="coolant_cap_other" value="{{ ($car && $car->coolant_cap == 'Other') ? $car->coolant_cap_other : old('coolant_cap_other') }}" placeholder="Please type another option here" type="text" />
                                                            </div>


                                                        </div>
                                                        <div class="error-message">{{$errors->first('coolant_cap')}}</div>
                                                        <span id="coolant_cap_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Coolant Cap Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="coolant_cap_images[]" id="coolant_cap_images" multiple />
                                                                <input type="hidden" name="old_coolant_cap_images" value="{{ $carmedia ? $carmedia->where('type', 'coolant_cap')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="coolant-cap-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('coolant_cap_images')}}</div>
                                                            <span id="coolant_cap_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "coolant_cap")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                               
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Hoses & Pipes</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_hoses_pipes" value="Hoses & Pipes">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-pipes-pass" name="hoses_pipes" id="hoses_pipes_pass" value="Pass" type="radio" {{ ($car && $car->hoses_pipes == 'Pass') || old('hoses_pipes') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="hoses_pipes_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-pipes-other" name="hoses_pipes" id="hoses_pipes_other" value="Other" type="radio" {{ ($car && $car->hoses_pipes == 'Other') || old('hoses_pipes') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="hoses_pipes_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input pipes-other" id="hoses_pipes_other" name="hoses_pipes_other" value="{{ ($car && $car->hoses_pipes == 'Other') ? $car->hoses_pipes_other : old('hoses_pipes_other') }}" placeholder="Please type another option here" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="error-message">{{$errors->first('hoses_pipes')}}</div>
                                                        <span id="hoses_pipes_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Hose Damage Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="hoses_pipes_images[]" id="hoses_pipes_images" multiple />
                                                                <input type="hidden" name="old_hoses_pipes_images" value="{{ $carmedia ? $carmedia->where('type', 'hoses_pipes')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="hosespipes-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('hoses_pipes_images')}}</div>
                                                            <span id="hoses_pipes_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "hoses_pipes")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                          
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">
                                                

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Exhaust System</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_exhaust_system" value="Exhaust System">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-exhaust-pass" name="exhaust_system" id="exhaust_system_pass" value="Pass" type="radio" {{ ($car && $car->exhaust_system == 'Pass') || old('exhaust_system') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="exhaust_system_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-exhaust-leak" name="exhaust_system" id="exhaust_system_leak" value="Exhaust leak prominent" type="radio" {{ ($car && $car->exhaust_system == 'Exhaust leak prominent') || old('exhaust_system') == 'Exhaust leak prominent' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="exhaust_system_leak">Exhaust leak prominent</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-exhaust-prominent" name="exhaust_system" id="exhaust_system_prominent" value="Rust on exhaust prominent" type="radio" {{ ($car && $car->exhaust_system == 'Rust on exhaust prominent') || old('exhaust_system') == 'Rust on exhaust prominent' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="exhaust_system_prominent">Rust on exhaust prominent</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-exhaust-gasket" name="exhaust_system" id="exhaust_system_surface" value="Gasket(s) needs to be replaced" type="radio" {{ ($car && $car->exhaust_system == 'Gasket(s) needs to be replaced') || old('exhaust_system') == 'Gasket(s) needs to be replaced' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="exhaust_system_surface">Gasket(s) needs to be replaced</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-exhaust-missing" name="exhaust_system" id="exhaust_system_missing" value="Clamp missing" type="radio" {{ ($car && $car->exhaust_system == 'Clamp missing') || old('exhaust_system') == 'Clamp missing' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="exhaust_system_missing">Clamp missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-exhaust-bent" name="exhaust_system" id="exhaust_system_bent" value="Hanger bent/damaged" type="radio" {{ ($car && $car->exhaust_system == 'Hanger bent/damaged') || old('exhaust_system') == 'Hanger bent/damaged' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="exhaust_system_bent">Hanger bent/damaged</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-exhaust-tip" name="exhaust_system" id="exhaust_system_tip" value="Exhaust tip(s) damaged" type="radio" {{ ($car && $car->exhaust_system == 'Exhaust tip(s) damaged') || old('exhaust_system') == 'Exhaust tip(s) damaged' ? 'checked' : '' }} />
                                                                <label class="form-check-label label " for="exhaust_system_tip">Exhaust tip(s) damaged</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-exhaust-other" name="exhaust_system" id="exhaust_system_other" value="Other" type="radio" {{ ($car && $car->exhaust_system == 'Other') || old('exhaust_system') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="exhaust_system_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input exhaust-other" id="exhaust_system_other" name="exhaust_system_other" value="{{ ($car && $car->exhaust_system == 'Other') ? $car->exhaust_system_other : old('exhaust_system_other') }}" placeholder="Please type another option here" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="error-message">{{$errors->first('exhaust_system')}}</div>
                                                        <span id="exhaust_system_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Exhaust Leak Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="exhaust_system_images[]" id="exhaust_system_images" multiple />
                                                                    <input type="hidden" name="old_exhaust_system_images" value="{{ $carmedia ? $carmedia->where('type', 'exhaust_system')->pluck('images')->implode(',') : '' }}">
                                                            
                                                                </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="exhasut-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('exhaust_system_images')}}</div>
                                                            <span id="exhaust_system_images_error" style="color: red;"></span><br><br> 
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "exhaust_system")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                             
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">
                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Visible Rust</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_visible_rust" value="Visible Rust">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-visible-pass" name="visible_rust" id="visible_rust_pass" value="Pass" type="radio" {{ ($car && $car->visible_rust == 'Pass') || old('visible_rust') == 'Pass' ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="visible_rust_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-visible-other" name="visible_rust" id="visible_rust_other" value="Other" type="radio" {{ ($car && $car->visible_rust == 'Other') || old('visible_rust') == 'Other' ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="visible_rust_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input visible-other" id="visible_rust_other" name="visible_rust_other" value="{{ ($car && $car->visible_rust == 'Other') ? $car->visible_rust_other : old('visible_rust_other') }}" placeholder="Please type another option here" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="error-message">{{$errors->first('visible_rust')}}</div>
                                                            <span id="visible_rust_error" style="color: red;"></span><br><br> 
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Visible Rust Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="visible_rust_images[]" id="visible_rust_images" multiple />
                                                                <input type="hidden" name="old_visible_rust_images" value="{{ $carmedia ? $carmedia->where('type', 'visible_rust')->pluck('images')->implode(',') : '' }}">

                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="visible-rust-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('visible_rust_images')}}</div>
                                                            <span id="visible_rust_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "visible_rust")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                               
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <label for="battery_condition">Battery Condition</label>

                                                                <div id="projectbox">
                                                                    <!-- Start project HTML  -->
                                                                <div class='battery mt-4'>
                                                                @if($car)
                                                                    @php
                                                                        $batteryCondition = $car->battery_condition;
                                                                        $batteryPower = ($batteryCondition / 10) * 10; 
                                                                    @endphp
                                                                    @for($i = 10; $i <= 50; $i += 10)
                                                                        <div class='bar' data-power='{{ $i }}' {!! $i <= $batteryPower ? "style='background-color: green;'" : '' !!}></div>
                                                                    @endfor
                                                                @else
                                                                    <div class='bar' data-power='10'></div>
                                                                    <div class='bar' data-power='20'></div>
                                                                    <div class='bar' data-power='30'></div>
                                                                    <div class='bar' data-power='40'></div>
                                                                    <div class='bar' data-power='50'></div>
                                                                @endif
                                                                </div>
                                                                    <!-- End Project HTML  -->
                                                                <div class="bottom-text mt-5 text-center">
                                                                    <p>Please review the car diagnostic report at the end of this document for more information on the engine condition.</p>
                                                                </div>
                                                                <div class="error-message">{{$errors->first('battery_condition')}}</div>
                                                            </div> 
                                                        </div>
                                                    </div>  
                                                    <hr class="mt-5">
                                                </div>
                                                
                                                <div class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>

                                                    <a href="#"><button type="submit"  id="saveform2" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div> 
                                            </form>
                                        </div>

                                    <!----------- steps 3 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form3') : route('inspector.store_car_form3') }}" method="POST"  name="form3" enctype="multipart/form-data" id="form3">
                                             @csrf   

                                                <input type="hidden" name="step" value="3">
                                                <h2 class="text-center">Transmission</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Fluid Level & Condition</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_fluid_condition" value="Fluid Level & Condition">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fluid-pass" name="fluid_level_condition" id="fluid_level_&_condition_pass" value="Pass" type="radio" {{ old('fluid_level_condition') == 'Pass' || ($car && $car->fluid_level_condition == 'Pass') ? 'checked' : '' }} checked />
                                                                <label class="form-check-label label" for="fluid_level_&_condition_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fluid-brown" name="fluid_level_condition" id="fluid_level_&_condition_brown" value="Dark brown, fluid and filter needs to be replaced" type="radio" {{ old('fluid_level_condition') == 'Dark brown, fluid and filter needs to be replaced' || ($car && $car->fluid_level_condition == 'Dark brown, fluid and filter needs to be replaced') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fluid_level_&_condition_brown">Dark brown, fluid and filter needs to be replaced</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fluid-pinkish" name="fluid_level_condition" id="fluid_level_&_condition_pinkish" value="Light pinkish fluid, water or fluid contamination. Might mean damaged transmission" type="radio" {{ old('fluid_level_condition') == 'Light pinkish fluid, water or fluid contamination. Might mean damaged transmission' || ($car && $car->fluid_level_condition == 'Light pinkish fluid, water or fluid contamination. Might mean damaged transmission') ? 'checked' : '' }} />
                                                                <label class="label" for="fluid_level_&_condition_pinkish">Light pinkish fluid, water or fluid contamination. Might mean damaged transmission</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fluid-low" name="fluid_level_condition" id="fluid_level_&_condition_low" value="Level is low, needs to be topped up with same oil grade" type="radio" {{ old('fluid_level_condition') == 'Level is low, needs to be topped up with same oil grade' || ($car && $car->fluid_level_condition == 'Level is low, needs to be topped up with same oil grade') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fluid_level_&_condition_low">Level is low, needs to be topped up with same oil grade</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fluid-high" name="fluid_level_condition" id="fluid_level_&_condition_high" value="Level is high, needs to be partially removed" type="radio" {{ old('fluid_level_condition') == 'Level is high, needs to be partially removed' || ($car && $car->fluid_level_condition == 'Level is high, needs to be partially removed') ? 'checked' : '' }} />
                                                                <label class="label" for="fluid_level_&_condition_high">Level is high, needs to be partially removed</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fluid-cap" name="fluid_level_condition" id="fluid_level_&_condition_cap" value="Filler cap damaged/broken" type="radio" {{ old('fluid_level_condition') == 'Filler cap damaged/broken' || ($car && $car->fluid_level_condition == 'Filler cap damaged/broken') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fluid_level_&_condition_cap">Filler cap damaged/broken</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fluid-missing" name="fluid_level_condition" id="fluid_level_&_condition_missing" value="Filler cap missing" type="radio" {{ old('fluid_level_condition') == 'Filler cap missing' || ($car && $car->fluid_level_condition == 'Filler cap missing') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fluid_level_&_condition_missing">Filler cap missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fluid-other" name="fluid_level_condition" id="fluid_level_&_condition_other" value="Other" type="radio" {{ old('fluid_level_condition') == 'Other' || ($car && $car->fluid_level_condition == 'Other') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="fluid_level_&_condition_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input fluid-other" id="fluid_level_condition_other" name="fluid_level_condition_other" value="{{ old('fluid_level_condition_other') ?? ($car ? $car->fluid_level_condition_other : '') }}" placeholder="Please type another option here" type="text" />
                                                            </div>

                                                            <div class="error-message">{{$errors->first('fluid_level_condition')}}</div>
                                                            <span id="fluid_level_condition_error" style="color: red;"></span>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Fluid Level & Condition - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="fluid_level_condition_images[]" id="fluid_level_condition_images" multiple  />
                                                                <input type="hidden" name="old_fluid_level_condition_images" value="{{ $carmedia ? $carmedia->where('type', 'visible_rust')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="fluid-level-condition-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('fluid_level_condition_images')}}</div>
                                                            <span id="fluid_level_condition_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "fluid_level_condition")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Transmission Fluid Leaks</h6>
                                                            <br>
                                                            
                                                            <input type="hidden" name="section_title_trans_fluid" value="Transmission Fluid Leaks">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-transmission-pass" name="transmission_fluid_leaks" id="transmission_fluid_leaks_pass" value="Pass" type="radio" {{ old('transmission_fluid_leaks') == 'Pass' || ($car && $car->transmission_fluid_leaks == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="transmission_fluid_leaks_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-transmission-seal" name="transmission_fluid_leaks" id="transmission_fluid_leaks_seal" value="Leak from transmission seal" type="radio" {{ old('transmission_fluid_leaks') == 'Leak from transmission seal' || ($car && $car->transmission_fluid_leaks == 'Leak from transmission seal') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="transmission_fluid_leaks_seal">Leak from transmission seal</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-transmission-lines" name="transmission_fluid_leaks" id="transmission_fluid_leaks_lines" value="Leak from transmission lines" type="radio" {{ old('transmission_fluid_leaks') == 'Leak from transmission lines' || ($car && $car->transmission_fluid_leaks == 'Leak from transmission lines') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="transmission_fluid_leaks_lines">Leak from transmission lines</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-transmission-pump" name="transmission_fluid_leaks" id="transmission_fluid_leaks_pump" value="Leak from transmission pump" type="radio" {{ old('transmission_fluid_leaks') == 'Leak from transmission pump' || ($car && $car->transmission_fluid_leaks == 'Leak from transmission pump') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="transmission_fluid_leaks_pump">Leak from transmission pump</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-transmission-pan" name="transmission_fluid_leaks" id="transmission_fluid_leaks_pan" value="Leak from transmission pan" type="radio" {{ old('transmission_fluid_leaks') == 'Leak from transmission pan' || ($car && $car->transmission_fluid_leaks == 'Leak from transmission pan') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="transmission_fluid_leaks_pan">Leak from transmission pan</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-transmission-other" name="transmission_fluid_leaks" id="transmission_fluid_leaks_other" value="Other" type="radio" {{ old('transmission_fluid_leaks') == 'Other' || ($car && $car->transmission_fluid_leaks == 'Other') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="transmission_fluid_leaks_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input transmission-other" id="transmission_fluid_leaks_other" name="transmission_fluid_leaks_other" value="{{ old('transmission_fluid_leaks_other') ?? ($car ? $car->transmission_fluid_leaks_other : '') }}" placeholder="Please type another option here" type="text" />
                                                            </div>

                                                            <div class="error-message">{{$errors->first('transmission_fluid_leaks')}}</div>
                                                            <span id="transmission_fluid_leaks_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Transmission Fluid Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="transmission_fluid_leaks_images[]" id="transmission_fluid_leaks_images" multiple />
                                                                <input type="hidden" name="old_transmission_fluid_leaks_images" value="{{ $carmedia ? $carmedia->where('type', 'trans_fluid')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="transmission-fluid-leaks-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('transmission_fluid_leaks_images')}}</div>
                                                            <span id="transmission_fluid_leaks_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "transmission_fluid_leaks")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Gear Selector</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_gear_selector" value="Gear Selector">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-gear-pass" name="gear_selector" id="gear_selector_pass" value="Pass" type="radio" {{ old('gear_selector') == 'Pass' || ($car && $car->gear_selector == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="gear_selector_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-gear-scratched" name="gear_selector" id="gear_selector_scratched" value="Scratched" type="radio" {{ old('gear_selector') == 'Scratched' || ($car && $car->gear_selector == 'Scratched') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="gear_selector_scratched">Scratched</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-gear-cracked" name="gear_selector" id="gear_selector_cracked" value="Damaged/Cracked" type="radio" {{ old('gear_selector') == 'Damaged/Cracked' || ($car && $car->gear_selector == 'Damaged/Cracked') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="gear_selector_cracked">Damaged/Cracked</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-gear-components" name="gear_selector" id="gear_selector_components" value="Missing components" type="radio" {{ old('gear_selector') == 'Missing components' || ($car && $car->gear_selector == 'Missing components') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="gear_selector_components">Missing components</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-gear-missing" name="gear_selector" id="gear_selector_missing" value="Missing" type="radio" {{ old('gear_selector') == 'Missing' || ($car && $car->gear_selector == 'Missing') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="gear_selector_missing">Missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-gear-aftermarket" name="gear_selector" id="gear_selector_aftermarket" value="Aftermarket" type="radio" {{ old('gear_selector') == 'Aftermarket' || ($car && $car->gear_selector == 'Aftermarket') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="gear_selector_aftermarket">Aftermarket</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-gear-other" name="gear_selector" id="gear_selector_other" value="Other" type="radio" {{ old('gear_selector') == 'Other' || ($car && $car->gear_selector == 'Other') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="gear_selector_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input gear-other" id="gear_selector_other" name="gear_selector_other" placeholder="Please type another option here" type="text" value="{{ old('gear_selector_other') ?? ($car ? $car->gear_selector_other : '') }}" />
                                                            </div>

                                                            <div class="error-message">{{$errors->first('gear_selector')}}</div>
                                                            <span id="gear_selector_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        
                                                        <div class="fault-photo">
                                                            <label>Gear Selector Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="gear_selector_images[]" id="gear_selector_images" multiple  />
                                                                <input type="hidden" name="old_gear_selector_images" value="{{ $carmedia ? $carmedia->where('type', 'gear_selector')->pluck('images')->implode(',') : '' }}">
                                                            
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="gear-selector-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('gear_selector_images')}}</div>
                                                            <span id="gear_selector_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $m)
                                                                @if($m->type === "gear_selector")
                                                                    @php
                                                                        $images = explode(',', $m->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                    <hr class="mt-5 mb-5">
                                                    <div class="col-md-12">
                                                        <div class="engine-upper">
                                                            <h6>Noise</h6>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-noise-pass" name="noise" id="noise_pass" value="Pass" type="radio" {{ old('noise') == 'Pass' || ($car && $car->noise == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="noise_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-noise-other" name="noise" id="noise_other" value="Other" type="radio" {{ old('noise') == 'Other' || ($car && $car->noise == 'Other') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="noise_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input noise-other" id="noise_other" name="noise_other" placeholder="Please type another option here" type="text" value="{{ old('noise_other') ?? ($car ? $car->noise_other : '') }}" />
                                                            </div>

                                                            <div class="error-message">{{$errors->first('noise')}}</div>
                                                            <span id="noise_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-12">
                                                        <div class="engine-upper">
                                                            <h6>Gear Shifting</h6>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-shifting-pass" name="gear_shifting" id="gear_shifting_pass" value="Pass" type="radio" {{ old('gear_shifting') == 'Pass' || ($car && $car->gear_shifting == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="gear_shifting_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-shifting-other" name="gear_shifting" id="gear_shifting_other" value="Other" type="radio" {{ old('gear_shifting') == 'Other' || ($car && $car->gear_shifting == 'Other') ? 'checked' : '' }} />
                                                                <label class="form-check-label label" for="gear_shifting_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input shifting-other" id="gear_shifting_other" name="gear_shifting_other" placeholder="Please type another option here" type="text" value="{{ old('gear_shifting_other') ?? ($car ? $car->gear_shifting_other : '') }}" />
                                                            </div>

                                                            <div class="error-message">{{$errors->first('gear_shifting')}}</div>
                                                            <span id="gear_shifting_error" style="color: red;"></span>
                                                        </div>
                                                        <div class="bottom-text mt-5 text-center">
                                                            <p>Please review the car diagnostic report at the end of this document for more information on the engine condition.</p>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-5">

                                                </div>
                                                
                                                <div class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  id="saveform3" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div>

                                    <!----------- steps 4 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step4">
                            
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form4') : route('inspector.store_car_form4') }}" method="POST"  name="form4" enctype="multipart/form-data" id="form4">
                                             @csrf   
                                                <input type="hidden" name="step" value="4">
                                                <h2 class="text-center">Brake System, Suspension & Tyres</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="all-info-container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="engine-upper">
                                                                <h6>Brake Pads Front</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-padsfront-pass" name="brake_pads_front" id="brake_pads_front_pass" value="Pass" type="radio" {{ old('brake_pads_front') == 'Pass' || ($car && $car->brake_pads_front == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="brake_pads_front_pass">Pass</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-padsfront-N/A" name="brake_pads_front" id="brake_pads_front_NA" value="N/A" type="radio" {{ old('brake_pads_front') == 'N/A' || ($car && $car->brake_pads_front == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="brake_pads_front_NA">N/A</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-padsfront-other" name="brake_pads_front" id="brake_pads_front_other" value="Other" type="radio" {{ old('brake_pads_front') == 'Other' || ($car && $car->brake_pads_front == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="brake_pads_front_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input padsfront-other" id="brake_pads_front_other" name="brake_pads_front_other" placeholder="Please type another option here" type="text" value="{{ old('brake_pads_front_other') ?? ($car ? $car->brake_pads_front_other : '') }}" />
                                                                </div>


                                                                <div class="error-message">{{$errors->first('brake_pads_front')}}</div>
                                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="engine-upper fault-photo">
                                                                <h6>Brake Pads Rear</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-padsrear-pass" name="brake_pads_rear" id="brake_pads_rear_pass" value="Pass" type="radio" {{ old('brake_pads_rear') == 'Pass' || ($car && $car->brake_pads_rear == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="brake_pads_rear_pass">Pass</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-padsrear-N/A" name="brake_pads_rear" id="brake_pads_rear_NA" value="N/A" type="radio" {{ old('brake_pads_rear') == 'N/A' || ($car && $car->brake_pads_rear == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="brake_pads_rear_NA">N/A</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-padsrear-other" name="brake_pads_rear" id="brake_pads_rear_other" value="Other" type="radio" {{ old('brake_pads_rear') == 'Other' || ($car && $car->brake_pads_rear == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="brake_pads_rear_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input padsrear-other" id="brake_pads_rear_other" name="brake_pads_rear_other" placeholder="Please type another option here" type="text" value="{{ old('brake_pads_rear_other') ?? ($car ? $car->brake_pads_rear_other : '') }}" />
                                                                </div>

                                                                <div class="error-message">{{$errors->first('brake_pads_rear')}}</div>
                                                        
                                                            </div>
                                                        </div>
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-6">
                                                            <div class="engine-upper">
                                                                <h6>Brake Discs Front</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-discsfront-pass" name="brake_disc_front" id="brake_disc_front_pass" value="Pass" type="radio" {{ old('brake_disc_front') == 'Pass' || ($car && $car->brake_disc_front == 'Pass') ? 'checked' : '' }} checked />
                                                                    <label class="form-check-label label" for="brake_disc_front_pass">Pass</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-discsfront-N/A" name="brake_disc_front" id="brake_disc_front_NA" value="N/A" type="radio" {{ old('brake_disc_front') == 'N/A' || ($car && $car->brake_disc_front == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="brake_disc_front_NA">N/A</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-discsfront-other" name="brake_disc_front" id="brake_disc_front_other" value="Other" type="radio" {{ old('brake_disc_front') == 'Other' || ($car && $car->brake_disc_front == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="brake_disc_front_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input discsfront-other" id="brake_disc_front_other" name="brake_disc_front_other" placeholder="Please type another option here" type="text" value="{{ old('brake_disc_front_other') ?? ($car ? $car->brake_disc_front_other : '') }}" />
                                                                </div>


                                                                <div class="error-message">{{$errors->first('brake_disc_front')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="engine-upper fault-photo">
                                                                <h6>Brake Discs Rear</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-discsrear-pass" name="brake_disc_rear" id="brake_disc_rear_pass" value="Pass" type="radio" {{ old('brake_disc_rear') == 'Pass' || ($car && $car->brake_disc_rear == 'Pass') ? 'checked' : '' }} checked />
                                                                    <label class="form-check-label label" for="brake_disc_rear_pass">Pass</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-discsrear-N/A" name="brake_disc_rear" id="brake_disc_rear_NA" value="N/A" type="radio" {{ old('brake_disc_rear') == 'N/A' || ($car && $car->brake_disc_rear == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="brake_disc_rear_NA">N/A</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-discsrear-other" name="brake_disc_rear" id="brake_disc_rear_other" value="Other" type="radio" {{ old('brake_disc_rear') == 'Other' || ($car && $car->brake_disc_rear == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="brake_disc_rear_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input discsrear-other" id="brake_disc_rear_other" name="brake_disc_rear_other" placeholder="Please type another option here" type="text" value="{{ old('brake_disc_rear_other') ?? ($car ? $car->brake_disc_rear_other : '') }}" />
                                                                </div>
                                                                <div class="error-message">{{$errors->first('brake_disc_rear')}}</div>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-6">
                                                            <div class="engine-upper">
                                                                <h6>ABS Sensors</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-sensors-pass" name="abs_sensors" id="abs_sensors_pass" value="Pass" type="radio" {{ old('abs_sensors') == 'Pass' || ($car && $car->abs_sensors == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="abs_sensors_pass">Pass</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-sensors-N/A" name="abs_sensors" id="abs_sensors_NA" value="N/A" type="radio" {{ old('abs_sensors') == 'N/A' || ($car && $car->abs_sensors == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="abs_sensors_NA">N/A</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-sensors-other" name="abs_sensors" id="abs_sensors_other" value="Other" type="radio" {{ old('abs_sensors') == 'Other' || ($car && $car->abs_sensors == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="abs_sensors_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input sensors-other" id="abs_sensors_other" name="abs_sensors_other" placeholder="Please type another option here" type="text" value="{{ old('abs_sensors_other') ?? ($car ? $car->abs_sensors_other : '') }}" />
                                                                </div>
                                                                <div class="error-message">{{$errors->first('abs_sensors')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="engine-upper fault-photo">
                                                                <h6>Handbrake</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-handbrake-pass" name="handbrake" id="handbrake_pass" value="Pass" type="radio" {{ old('handbrake') == 'Pass' || ($car && $car->handbrake == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="handbrake_pass">Pass</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-handbrake-N/A" name="handbrake" id="handbrake_NA" value="N/A" type="radio" {{ old('handbrake') == 'N/A' || ($car && $car->handbrake == 'N/A') ? 'checked' : '' }} />
                                                                    <label class="form-check-label label" for="handbrake_NA">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-handbrake-other" name="handbrake" id="handbrake_other_radio" value="Other" type="radio" {{ old('handbrake') == 'Other' || ($car && $car->handbrake == 'Other') ? 'checked' : '' }} />
                                                                    <label class="form-check-label label" for="handbrake_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input handbrake-other" id="handbrake_other" name="handbrake_other" placeholder="Please type another option here" type="text" value="{{ old('handbrake_other') ?? ($car ? $car->handbrake_other : '') }}" />
                                                                </div>
                                                                <div class="error-message">{{$errors->first('handbrake')}}</div>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Front Suspension</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_front_suspension" value="Front Suspension">
                                                
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-suspension-pass" name="front_suspension" id="front_suspension_pass" value="Pass" type="radio" {{ old('front_suspension') == 'Pass' || ($car && $car->front_suspension == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="front_suspension_pass">Pass</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-suspension-N/A" name="front_suspension" id="front_suspension_NA" value="N/A" type="radio" {{ old('front_suspension') == 'N/A' || ($car && $car->front_suspension == 'N/A') ? 'checked' : '' }} />
                                                                    <label class="form-check-label label" for="front_suspension_NA">N/A</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-suspension-other" name="front_suspension" id="front_suspension_other_radio" value="Other" type="radio" {{ old('front_suspension') == 'Other' || ($car && $car->front_suspension == 'Other') ? 'checked' : '' }} />
                                                                    <label class="form-check-label label" for="front_suspension_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input suspension-other" id="front_suspension_other" name="front_suspension_other" placeholder="Please type another option here" type="text" value="{{ old('front_suspension_other') ?? ($car ? $car->front_suspension_other : '') }}" />
                                                                </div>
                                                                <div class="error-message">{{$errors->first('front_suspension')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                
                                                                <label>Front Suspension Fault - Photo</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="front_suspension_images[]" id="front_suspension_images" multiple />                                                                
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="front-sspension-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('front_suspension_images')}}</div>
                                                                <span id="front_suspension_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "front_suspension")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        <hr class="mt-5 mb-5">
                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Rear Suspension</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_rear_suspension" value="Rear Suspension">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-rearsuspension-pass" name="rear_suspension" id="rear_suspension_pass" value="Pass" type="radio" {{ old('rear_suspension') == 'Pass' || ($car && $car->rear_suspension == 'Pass') ? 'checked' : '' }}  checked/>
                                                                    <label class="form-check-label label" for="rear_suspension_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-rearsuspension-N/A" name="rear_suspension" id="rear_suspension_NA" value="N/A" type="radio" {{ old('rear_suspension') == 'N/A' || ($car && $car->rear_suspension == 'N/A') ? 'checked' : '' }} />
                                                                    <label class="form-check-label label" for="rear_suspension_NA">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-rearsuspension-other" name="rear_suspension" id="rear_suspension_other_radio" value="Other" type="radio" {{ old('rear_suspension') == 'Other' || ($car && $car->rear_suspension == 'Other') ? 'checked' : '' }} />
                                                                    <label class="form-check-label label" for="rear_suspension_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input rearsuspension-other" id="rear_suspension_other" name="rear_suspension_other" placeholder="Please type another option here" type="text" value="{{ old('rear_suspension_other') ?? ($car ? $car->rear_suspension_other : '') }}" />
                                                                </div>
                                                                <div class="error-message">{{$errors->first('rear_suspension')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Rear Suspension Fault - Photo</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="rear_suspension_images[]" id="rear_suspension_images" multiple  />
                                                                    <input type="hidden" name="old_rear_suspension_images" value="{{ $carmedia ? $carmedia->where('type', 'rear_suspension')->pluck('images')->implode(',') : '' }}">
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="rear-sspension-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('rear_suspension_images')}}</div>
                                                                <span id="rear_suspension_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "rear_suspension")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">
                                                        <div class="col-md-12">
                                                            <div class="tyres-table">
                                                                <label>Tyres</label>
                                                                <table class="table table-bordered mt-3"> 
                                                                    <thead class="table-limegreen">
                                                                        <tr class="tyer-head">
                                                                            <th scope="col" style="background:#fff; border:0px"></th>
                                                                            <th scope="col">Manufacturer</th>
                                                                            <th scope="col">Year</th>
                                                                            <th scope="col">Size</th>
                                                                            <th scope="col">Condition</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row" style="width: 130px;">Front Left</th>
                                                                        <td>
                                                                            <input class="form-control" name="front_left_manufac" id="front_left_manufac" type="text" 
                                                                                value="{{ old('front_left_manufac') ?? ($carbrakesystem ? $carbrakesystem->front_left_manufac : '') }}">
                                                                                <span id="front_left_manufac_error" style="color: red;"></span>
                                                                        </td>

                                                                        <td>
                                                                            <input class="form-control" name="front_left_date" id="front_left_date" type="text" pattern="[0-9]{4}" maxlength="4"
                                                                                value="{{ old('front_left_date') ?? ($carbrakesystem ? $carbrakesystem->front_left_date : '') }}">
                                                                            <span id="front_left_date_error" style="color: red;"></span>
                                                                        </td>

                                                                        <td>
                                                                        <select class="form-control mt-1 mb-1" id="s-rim" name="front_left_rim_id">
                                                                            <option value="">Choose Rim</option>
                                                                            @foreach($tyrerim as $rim)
                                                                                <option value="{{ $rim->id }}" {{ (old('front_left_rim_id') == $rim->id) || ($carbrakesystem && $carbrakesystem->front_left_rim_id == $rim->id) ? 'selected' : '' }}>
                                                                                    {{ $rim->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-height" name="front_left_height_id">
                                                                            <option value="">Choose Height</option>
                                                                            @foreach($tyreheight as $height)
                                                                                <option value="{{ $height->id }}" {{ (old('front_left_height_id') == $height->id) || ($carbrakesystem && $carbrakesystem->front_left_height_id == $height->id) ? 'selected' : '' }}>
                                                                                    {{ $height->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-weight" name="front_left_width_id">
                                                                            <option value="">Choose Width</option>
                                                                            @foreach($tyreweight as $width)
                                                                                <option value="{{ $width->id }}" {{ (old('front_left_width_id') == $width->id) || ($carbrakesystem && $carbrakesystem->front_left_width_id == $width->id) ? 'selected' : '' }}>
                                                                                    {{ $width->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="front_left_condition" id="front_left_condition" type="text" 
                                                                                value="{{ old('front_left_condition') ?? ($carbrakesystem ? $carbrakesystem->front_left_condition : '') }}">
                                                                            <span id="front_left_condition_error" style="color: red;"></span>
                                                                        </td>                                                         
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="width: 130px;">Front Right</th>
                                                                        <td>
                                                                            <input class="form-control" name="front_right_manufac" id="front_right_manufac" type="text" 
                                                                                value="{{ old('front_right_manufac') ?? ($carbrakesystem ? $carbrakesystem->front_right_manufac : '') }}">
                                                                            <span id="front_right_manufac_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="front_right_date" id="front_right_date" type="text" 
                                                                                pattern="[0-9]{4}" maxlength="4"
                                                                                value="{{ old('front_right_date') ?? ($carbrakesystem ? $carbrakesystem->front_right_date : '') }}">
                                                                            <span id="front_right_date_error" style="color: red;"></span>
                                                                        </td>

                                                                        <td>
                
                                                                        <select class="form-control mt-1 mb-1" id="s-rim" name="front_right_rim_id">
                                                                            <option value="">Choose Rim</option>
                                                                            @foreach($tyrerim as $rim)
                                                                                <option value="{{ $rim->id }}" {{ (old('front_right_rim_id') == $rim->id) || ($carbrakesystem && $carbrakesystem->front_right_rim_id == $rim->id) ? 'selected' : '' }}>
                                                                                    {{ $rim->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-height" name="front_right_height_id">
                                                                            <option value="">Choose Height</option>
                                                                            @foreach($tyreheight as $height)
                                                                                <option value="{{ $height->id }}" {{ (old('front_right_height_id') == $height->id) || ($carbrakesystem && $carbrakesystem->front_right_height_id == $height->id) ? 'selected' : '' }}>
                                                                                    {{ $height->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-weight" name="front_right_width_id">
                                                                            <option value="">Choose Width</option>
                                                                            @foreach($tyreweight as $width)
                                                                                <option value="{{ $width->id }}" {{ (old('front_right_width_id') == $width->id) || ($carbrakesystem && $carbrakesystem->front_right_width_id == $width->id) ? 'selected' : '' }}>
                                                                                    {{ $width->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="front_right_condition" id="front_right_condition" type="text" 
                                                                                value="{{ old('front_right_condition') ?? ($carbrakesystem ? $carbrakesystem->front_right_condition : '') }}">
                                                                            <span id="front_right_condition_error" style="color: red;"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="width: 130px;">Rear Left</th>
                                                                        <td>
                                                                            <input class="form-control" name="rear_left_manufac" id="rear_left_manufac" type="text" 
                                                                                value="{{ old('rear_left_manufac') ?? ($carbrakesystem ? $carbrakesystem->rear_left_manufac : '') }}">
                                                                            <span id="rear_left_manufac_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="rear_left_date" id="rear_left_date" type="text" pattern="[0-9]{4}" maxlength="4"
                                                                                value="{{ old('rear_left_date') ?? ($carbrakesystem ? $carbrakesystem->rear_left_date : '') }}">
                                                                            <span id="rear_left_date_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td>

                                                                        <select class="form-control mt-1 mb-1" id="s-rim" name="rear_left_rim_id">
                                                                            <option value="">Choose Rim</option>
                                                                            @foreach($tyrerim as $rim)
                                                                                <option value="{{ $rim->id }}" {{ (old('rear_left_rim_id') == $rim->id) || ($carbrakesystem && $carbrakesystem->rear_left_rim_id == $rim->id) ? 'selected' : '' }}>
                                                                                    {{ $rim->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-height" name="rear_left_height_id">
                                                                            <option value="">Choose Height</option>
                                                                            @foreach($tyreheight as $height)
                                                                                <option value="{{ $height->id }}" {{ (old('rear_left_height_id') == $height->id) || ($carbrakesystem && $carbrakesystem->rear_left_height_id == $height->id) ? 'selected' : '' }}>
                                                                                    {{ $height->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-weight" name="rear_left_width_id">
                                                                            <option value="">Choose Width</option>
                                                                            @foreach($tyreweight as $width)
                                                                                <option value="{{ $width->id }}" {{ (old('rear_left_width_id') == $width->id) || ($carbrakesystem && $carbrakesystem->rear_left_width_id == $width->id) ? 'selected' : '' }}>
                                                                                    {{ $width->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                         
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="rear_left_condition" id="rear_left_condition" type="text" 
                                                                                value="{{ old('rear_left_condition') ?? ($carbrakesystem ? $carbrakesystem->rear_left_condition : '') }}">
                                                                            <span id="rear_left_condition_error" style="color: red;"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="width: 130px;">Rear Right</th>
                                                                        <td>
                                                                            <input class="form-control" name="rear_right_manufac" id="rear_right_manufac" type="text" 
                                                                                value="{{ old('rear_right_manufac') ?? ($carbrakesystem ? $carbrakesystem->rear_right_manufac : '') }}">
                                                                            <span id="rear_right_manufac_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="rear_right_date" id="rear_right_date" type="text" pattern="[0-9]{4}" maxlength="4"
                                                                                value="{{ old('rear_right_date') ?? ($carbrakesystem ? $carbrakesystem->rear_right_date : '') }}">
                                                                            <span id="rear_right_date_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td>

                                                                        <select class="form-control mt-1 mb-1" id="s-rim" name="rear_right_rim_id">
                                                                            <option value="">Choose Rim</option>
                                                                            @foreach($tyrerim as $rim)
                                                                                <option value="{{ $rim->id }}" {{ (old('rear_right_rim_id') == $rim->id) || ($carbrakesystem && $carbrakesystem->rear_right_rim_id == $rim->id) ? 'selected' : '' }}>
                                                                                    {{ $rim->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-height" name="rear_right_height_id">
                                                                            <option value="">Choose Height</option>
                                                                            @foreach($tyreheight as $height)
                                                                                <option value="{{ $height->id }}" {{ (old('rear_right_height_id') == $height->id) || ($carbrakesystem && $carbrakesystem->rear_right_height_id == $height->id) ? 'selected' : '' }}>
                                                                                    {{ $height->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-weight" name="rear_right_width_id">
                                                                            <option value="">Choose Width</option>
                                                                            @foreach($tyreweight as $width)
                                                                                <option value="{{ $width->id }}" {{ (old('rear_right_width_id') == $width->id) || ($carbrakesystem && $carbrakesystem->rear_right_width_id == $width->id) ? 'selected' : '' }}>
                                                                                    {{ $width->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                            <!-- <input class="form-control" name="rear_right_rim" id="rear_right_rim" type="number"  placeholder="rim"
                                                                            value="{{ old('rear_right_rim') ?? ($carbrakesystem ? $carbrakesystem->rear_right_rim : '') }}">

                                                                            <input class="form-control" name="rear_right_height" id="rear_right_height" type="number"  placeholder="Height"
                                                                            value="{{ old('rear_right_height') ?? ($carbrakesystem ? $carbrakesystem->rear_right_height : '') }}">

                                                                            <input class="form-control" name="rear_right_width" id="rear_right_width" type="number"  placeholder="Width"
                                                                            value="{{ old('rear_right_width') ?? ($carbrakesystem ? $carbrakesystem->rear_right_width : '') }}">
                                                                                <span id="rear_right_size_error" style="color: red;"></span> -->
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="rear_right_condition" id="rear_right_condition" type="text" 
                                                                                value="{{ old('rear_right_condition') ?? ($carbrakesystem ? $carbrakesystem->rear_right_condition : '') }}">
                                                                            <span id="rear_right_condition_error" style="color: red;"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="width: 130px;">Spare</th>
                                                                        <td>
                                                                            <input class="form-control" name="spare_manufac" id="spare_manufac" type="text" 
                                                                                value="{{ old('spare_manufac') ?? ($carbrakesystem ? $carbrakesystem->spare_manufac : '') }}">
                                                                            <span id="spare_manufac_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="spare_date" id="spare_date" type="text" pattern="[0-9]{4}" maxlength="4"
                                                                                value="{{ old('spare_date') ?? ($carbrakesystem ? $carbrakesystem->spare_date : '') }}">
                                                                            <span id="spare_date_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td>          
                                                                        <select class="form-control mt-1 mb-1" id="s-rim" name="spare_rim_id">
                                                                            <option value="">Choose Rim</option>
                                                                            @foreach($tyrerim as $rim)
                                                                                <option value="{{ $rim->id }}" {{ (old('spare_rim_id') == $rim->id) || ($carbrakesystem && $carbrakesystem->spare_rim_id == $rim->id) ? 'selected' : '' }}>
                                                                                    {{ $rim->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-height" name="spare_height_id">
                                                                            <option value="">Choose Height</option>
                                                                            @foreach($tyreheight as $height)
                                                                                <option value="{{ $height->id }}" {{ (old('spare_height_id') == $height->id) || ($carbrakesystem && $carbrakesystem->spare_height_id == $height->id) ? 'selected' : '' }}>
                                                                                    {{ $height->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        <select class="form-control mt-1 mb-1" id="s-weight" name="spare_width_id">
                                                                            <option value="">Choose Width</option>
                                                                            @foreach($tyreweight as $width)
                                                                                <option value="{{ $width->id }}" {{ (old('spare_width_id') == $width->id) || ($carbrakesystem && $carbrakesystem->spare_width_id == $width->id) ? 'selected' : '' }}>
                                                                                    {{ $width->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" name="spare_condition" id="spare_condition" type="text" 
                                                                                value="{{ old('spare_condition') ?? ($carbrakesystem ? $carbrakesystem->spare_condition : '') }}">
                                                                            <span id="spare_condition_error" style="color: red;"></span>
                                                                        </td>

                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="error-message">{{$errors->first('front_left_manufac')}}</div>
                                                                <div class="error-message">{{$errors->first('front_left_date')}}</div>
                                                                <div class="error-message">{{$errors->first('front_left_size')}}</div>
                                                                <div class="error-message">{{$errors->first('front_left_condition')}}</div>

                                                                <div class="error-message">{{$errors->first('front_right_manufac')}}</div>
                                                                <div class="error-message">{{$errors->first('front_right_date')}}</div>
                                                                <div class="error-message">{{$errors->first('front_right_size')}}</div>
                                                                <div class="error-message">{{$errors->first('front_right_condition')}}</div>

                                                                <div class="error-message">{{$errors->first('rear_left_manufac')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_left_date')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_left_size')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_left_condition')}}</div>

                                                                <div class="error-message">{{$errors->first('rear_right_manufac')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_right_date')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_right_size')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_right_condition')}}</div>

                                                                <div class="error-message">{{$errors->first('spare_manufac')}}</div>
                                                                <div class="error-message">{{$errors->first('spare_date')}}</div>
                                                                <div class="error-message">{{$errors->first('spare_size')}}</div>
                                                                <div class="error-message">{{$errors->first('spare_condition')}}</div>
                                                                    
                                                            </div>
                                                        </div>

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-12">
                                                            <div class="">
                                                                <label>Front Left Tyre</label>
                                                                <input type="hidden" name="section_title_front_left_tyre" value="Front Left Tyre">
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="front_left_tyre_images[]" id="front_left_tyre_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="front-left-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('front_left_tyre_images')}}</div>
                                                                <span id="front_left_tyre_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "front_left_tyre")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">
                                                        <div class="col-md-12">
                                                            <div class="">
                                                                <label>Rear Left Tyre</label>
                                                                <input type="hidden" name="section_title_rear_left_tyre" value="Rear Left Tyre">
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="rear_left_tyre_images[]" id="rear_left_tyre_images" multiple  />                                                                
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="rear-left-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('rear_left_tyre_images')}}</div>
                                                                <span id="rear_left_tyre_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "rear_left_tyre")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">
                                                        <div class="col-md-12">
                                                            <div class="">
                                                                <label>Rear Right Tyre</label>
                                                                <input type="hidden" name="section_title_rear_right_tyre" value="Rear Right Tyre">
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="rear_right_tyre_images[]" id="rear_right_tyre_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="rear-right-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('rear_right_tyre_images')}}</div>
                                                                <span id="rear_right_tyre_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "rear_right_tyre")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-12">
                                                            <div class="">
                                                                <label>Front Right Tyre</label>
                                                                <input type="hidden" name="section_title_front_right_tyre" value="Front Right Tyre">
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="front_right_tyre_images[]" id="front_right_tyre_images" multiple  />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="front-right-tyre-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('front_right_tyre_images')}}</div>
                                                                <span id="front_right_tyre_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "front_right_tyre")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-12">
                                                            <div class="tyres-table">
                                                                <label>Rims</label>
                                                                    <table class="table table-bordered mt-3">
                                                                    <thead class="table-limegreen">
                                                                        <tr class="tyer-head">
                                                                            <th scope="col" style="background:#fff; border:0px"></th>
                                                                            <th scope="col">Brand</th>
                                                                            <th scope="col">Condition</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row" style="width: 180px;">Front Left</th>
                                                                        <td><input class="form-control" name="front_left_brand" id="front_left_brand" type="text" 
                                                                            value="{{ old('front_left_brand') ?? ($carbrakesystem ? $carbrakesystem->front_left_brand : '') }}">
                                                                            <span id="front_left_brand_error" style="color: red;"></span> 
                                                                        </td>
                                                                        <td><input class="form-control" name="front_left_rim_condition" id="front_left_rim_condition" type="text" 
                                                                            value="{{ old('front_left_rim_condition') ?? ($carbrakesystem ? $carbrakesystem->front_left_rim_condition : '') }}">
                                                                            <span id="front_left_rim_condition_error" style="color: red;"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="width: 180px;">Front Right</th>
                                                                        <td><input class="form-control" name="front_right_brand" id="front_right_brand" type="text" 
                                                                            value="{{ old('front_right_brand') ?? ($carbrakesystem ? $carbrakesystem->front_right_brand : '') }}">
                                                                            <span id="front_right_brand_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td><input class="form-control" name="front_right_rim_condition" id="front_right_rim_condition" type="text" 
                                                                            value="{{ old('front_right_rim_condition') ?? ($carbrakesystem ? $carbrakesystem->front_right_rim_condition : '') }}">
                                                                            <span id="front_right_rim_condition_error" style="color: red;"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="width: 180px;">Rear Left</th>
                                                                        <td><input class="form-control" name="rear_left_brand" id="rear_left_brand" type="text" 
                                                                            value="{{ old('rear_left_brand') ?? ($carbrakesystem ? $carbrakesystem->rear_left_brand : '') }}">
                                                                            <span id="rear_left_brand_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td><input class="form-control" name="rear_left_rim_condition" id="rear_left_rim_condition" type="text" 
                                                                            value="{{ old('rear_left_rim_condition') ?? ($carbrakesystem ? $carbrakesystem->rear_left_rim_condition : '') }}">
                                                                            <span id="rear_left_rim_condition_error" style="color: red;"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="width: 180px;">Rear Right</th>
                                                                        <td><input class="form-control" name="rear_right_brand" id="rear_right_brand" type="text" 
                                                                            value="{{ old('rear_right_brand') ?? ($carbrakesystem ? $carbrakesystem->rear_right_brand : '') }}">
                                                                            <span id="rear_right_brand_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td><input class="form-control" name="rear_right_rim_condition" id="rear_right_rim_condition" type="text" 
                                                                            value="{{ old('rear_right_rim_condition') ?? ($carbrakesystem ? $carbrakesystem->rear_right_rim_condition : '') }}">
                                                                            <span id="rear_right_rim_condition_error" style="color: red;"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="width: 180px;">Spare</th>
                                                                        <td><input class="form-control" name="spare_brand" id="spare_brand" type="text" 
                                                                            value="{{ old('spare_brand') ?? ($carbrakesystem ? $carbrakesystem->spare_brand : '') }}">
                                                                            <span id="spare_brand_error" style="color: red;"></span>
                                                                        </td>
                                                                        <td><input class="form-control" name="spare_rim_condition" id="spare_rim_condition" type="text" 
                                                                            value="{{ old('spare_rim_condition') ?? ($carbrakesystem ? $carbrakesystem->spare_rim_condition : '') }}">
                                                                            <span id="spare_rim_condition_error" style="color: red;"></span>
                                                                        </td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table> 
                                                                <div class="error-message">{{$errors->first('front_left_brand')}}</div>
                                                                <div class="error-message">{{$errors->first('front_left_rim_condition')}}</div>
                                                                <div class="error-message">{{$errors->first('front_right_brand')}}</div>
                                                                <div class="error-message">{{$errors->first('front_right_rim_condition')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_left_brand')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_left_rim_condition')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_right_brand')}}</div>
                                                                <div class="error-message">{{$errors->first('rear_right_rim_condition')}}</div>
                                                                <div class="error-message">{{$errors->first('spare_brand')}}</div>
                                                                <div class="error-message">{{$errors->first('spare_rim_condition')}}</div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  id="saveform4" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div> 

                                    <!----------- steps 5 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step5">
                                                
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form5') : route('inspector.store_car_form5') }}" method="POST"  name="form5" enctype="multipart/form-data" id="form5">
                                             @csrf   
                                                <input type="hidden" name="step" value="5">
                                                <h2 class="text-center">Electrical System</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="all-info-container">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Key Remote</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_key_remote" value="Key Remote">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-remote-pass" name="key_remote" id="key_remote_pass" value="Pass" type="radio" {{ old('key_remote') == 'Pass' || ($car && $car->key_remote == 'Pass') ? 'checked' : '' }} checked />
                                                                    <label class="form-check-label label" for="key_remote_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-remote-N/A" name="key_remote" id="key_remote_NA" value="N/A" type="radio" {{ old('key_remote') == 'N/A' || ($car && $car->key_remote == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="key_remote_NA">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-remote-other" name="key_remote" id="key_remote_other" value="Other" type="radio" {{ old('key_remote') == 'Other' || ($car && $car->key_remote == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="key_remote_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input remote-other" id="key_remote_other" name="key_remote_other" placeholder="Please type another option here" type="text" value="{{ old('key_remote_other') ?? ($car ? $car->key_remote_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('key_remote')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Key Remote Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="key_remote_images[]" id="key_remote_images" multiple  />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="key-remote-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('key_remote_images')}}</div>
                                                                <span id="key_remote_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "key_remote")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">
                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Entertainment System</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_entertainment_system" value="Entertainment System">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-entertainment-pass" name="entertainment_system" id="entertainment_system_pass" value="Pass" type="radio" {{ old('entertainment_system') == 'Pass' || ($car && $car->entertainment_system == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="entertainment_system_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-entertainment-other" name="entertainment_system" id="entertainment_system_other" value="Other" type="radio" {{ old('entertainment_system') == 'Other' || ($car && $car->entertainment_system == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="entertainment_system_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input entertainment-other" id="entertainment_system_other" name="entertainment_system_other" placeholder="Please type another option here" type="text" value="{{ old('entertainment_system_other') ?? ($car ? $car->entertainment_system_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('entertainment_system')}}</div>       
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Entertainment System Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="entertainment_system_images[]" id="entertainment_system_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="entertainment-system-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('entertainment_system_images')}}</div>
                                                                <span id="entertainment_system_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "entertainment_system")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                    <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                        <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                        <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Windows Operation</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_windows" value="Windows Operation">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-windows-pass" name="windows_operation" id="windows_operation_pass" value="Pass" type="radio" {{ old('windows_operation') == 'Pass' || ($car && $car->windows_operation == 'Pass') ? 'checked' : '' }} checked />
                                                                    <label class="form-check-label label" for="windows_operation_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-windows-na" name="windows_operation" id="windows_operation_na" value="N/A" type="radio" {{ old('windows_operation') == 'N/A' || ($car && $car->windows_operation == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="windows_operation_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-windows-other" name="windows_operation" id="windows_operation_other" value="Other" type="radio" {{ old('windows_operation') == 'Other' || ($car && $car->windows_operation == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="windows_operation_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input windows-other" id="windows_operation_other" name="windows_operation_other" placeholder="Please type another option here" type="text" value="{{ old('windows_operation_other') ?? ($car ? $car->windows_operation_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('windows_operation')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Windows Operation Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="windows_operation_images[]"  id="windows_operation_images" multiple/>
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="windows-operation-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('windows_operation_images')}}</div>
                                                                <span id="windows_operation_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "windows")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                        <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                            <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Seats Adjustment (Power/Manual)</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_seat_adjust" value="Seats Adjustment (Power/Manual)">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-adjustment-pass" name="seats_adjustment" id="seats_adjustment_pass" value="Pass" type="radio" {{ old('seats_adjustment') == 'Pass' || ($car && $car->seats_adjustment == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="seats_adjustment_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-adjustment-na" name="seats_adjustment" id="seats_adjustment_na" value="N/A" type="radio" {{ old('seats_adjustment') == 'N/A' || ($car && $car->seats_adjustment == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="seats_adjustment_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-adjustment-other" name="seats_adjustment" id="seats_adjustment_other" value="Other" type="radio" {{ old('seats_adjustment') == 'Other' || ($car && $car->seats_adjustment == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="seats_adjustment_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input adjustment-other" id="seats_adjustment_other" name="seats_adjustment_other" placeholder="Please type another option here" type="text" value="{{ old('seats_adjustment_other') ?? ($car ? $car->seats_adjustment_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('seats_adjustment')}}</div>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Seat Adjustment Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="seats_adjustment_images[]" id="seats_adjustment_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="seats-adjustment-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('seats_adjustment_images')}}</div>
                                                                <span id="seats_adjustment_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "seat_adjust")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                        <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                            <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Door Lock / Unlock</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_door_unlock" value="Door Lock / Unlock">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-door-pass" name="door_lock_unlock" id="door_lock_unlock_pass" value="Pass" type="radio" {{ old('door_lock_unlock') == 'Pass' || ($car && $car->door_lock_unlock == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="door_lock_unlock_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-door-other" name="door_lock_unlock" id="door_lock_unlock_other_radio" value="Other" type="radio" {{ old('door_lock_unlock') == 'Other' || ($car && $car->door_lock_unlock == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="door_lock_unlock_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input door-other" id="door_lock_unlock_other" name="door_lock_unlock_other" placeholder="Please type another option here" type="text" value="{{ old('door_lock_unlock_other') ?? ($car ? $car->door_lock_unlock_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('door_lock_unlock')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Door Lock / Unlock Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="door_lock_unlock_images[]" id="door_lock_unlock_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="door-lock-unlock-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('door_lock_unlock_images')}}</div>
                                                                <span id="door_lock_unlock_images_error" style="color: red;"></span>
                                                            
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "door_unlock")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                        <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                            <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>A/C Control & Cooling</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_ac" value="A/C Control & Cooling">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-ac-pass" name="ac_control_cooling" id="ac_control_cooling_pass" value="Pass" type="radio" {{ old('ac_control_cooling') == 'Pass' || ($car && $car->ac_control_cooling == 'Pass') ? 'checked' : '' }} checked> 
                                                                    <label class="form-check-label label" for="ac_control_cooling_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-ac-other" name="ac_control_cooling" id="ac_control_cooling_other_radio" value="Other" type="radio" {{ old('ac_control_cooling') == 'Other' || ($car && $car->ac_control_cooling == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="ac_control_cooling_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input ac-other" id="ac_control_cooling_other" name="ac_control_cooling_other" placeholder="Please type another option here" type="text" value="{{ old('ac_control_cooling_other') ?? ($car ? $car->ac_control_cooling_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('ac_control_cooling')}}</div>
                                        
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>A/C Control & Cooling Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3"> 
                                                                    <input type="file" class="cstm-file-upload" name="ac_control_cooling_images[]" id="ac_control_cooling_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="ac_control-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('ac_control_cooling_images')}}</div>
                                                                <span id="ac_control_cooling_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "ac")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                        <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                            <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Center Console Buttons</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_center_console" value="Center Console Buttons">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-center-pass" name="center_console_buttons" id="center_console_buttons_pass"  value="Pass" type="radio" {{ old('center_console_buttons') == 'Pass' || ($car && $car->center_console_buttons == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="center_console_buttons_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-center-other" name="center_console_buttons" id="center_console_buttons_other_radio" value="Other" type="radio" {{ old('center_console_buttons') == 'Other' || ($car && $car->center_console_buttons == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="center_console_buttons_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input center-other" id="center_console_buttons_other" name="center_console_buttons_other" placeholder="Please type another option here" type="text" value="{{ old('center_console_buttons_other') ?? ($car ? $car->center_console_buttons_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('center_console_buttons')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Center Console Buttons Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="center_console_buttons_images[]"  id="center_console_buttons_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="center-console-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('center_console_buttons_images')}}</div>
                                                                <span id="center_console_buttons_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "center_console")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                        <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                            <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Cameras</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_camera" value="Cameras">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-cameras-pass" name="cameras" id="cameras_pass" value="Pass" type="radio" {{ old('cameras') == 'Pass' || ($car && $car->cameras == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="cameras_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-cameras-na" name="cameras" id="cameras_na"  value="N/A" type="radio" {{ old('cameras') == 'N/A' || ($car && $car->cameras == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="cameras_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-cameras-other" name="cameras" id="cameras_other" value="Other" type="radio" {{ old('cameras') == 'Other' || ($car && $car->cameras == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="cameras_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input cameras-other" id="cameras_other" name="cameras_other" placeholder="Please type another option here" type="text" value="{{ old('cameras_other') ?? ($car ? $car->cameras_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('cameras')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Cameras Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="cameras_images[]" id="cameras_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="cameras-images-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('cameras_images')}}</div>
                                                                <span id="cameras_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "camera")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                        <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                            <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Gauges</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_guages" value="Gauges">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-gauges-pass" name="gauges" id="gauges_pass" value="Pass" type="radio" {{ old('gauges') == 'Pass' || ($car && $car->gauges == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="gauges_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-gauges-other" name="gauges" id="gauges_other_radio" value="Other" type="radio" {{ old('gauges') == 'Other' || ($car && $car->gauges == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="gauges_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input gauges-other" id="gauges_other" name="gauges_other" placeholder="Please type another option here" type="text" value="{{ old('gauges_other') ?? ($car ? $car->gauges_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('gauges')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Gauges Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="gauges_images[]" id="gauges_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="gauges-images-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('gauges_images')}}</div>
                                                                <span id="gauges_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "guages")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                        <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                            <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Rear View / Side Mirror Electricals</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_rear_view_mirror" value="Rear View / Side Mirror Electricals">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-mirror-pass" name="rear_view_side_mirror_elec" id="rear_view_side_mirror_elec_pass" value="Pass" type="radio" {{ old('rear_view_side_mirror_elec') == 'Pass' || ($car && $car->rear_view_side_mirror_elec == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="rear_view_side_mirror_elec_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-mirror-other" name="rear_view_side_mirror_elec" id="rear_view_side_mirror_elec_other" value="Other" type="radio" {{ old('rear_view_side_mirror_elec') == 'Other' || ($car && $car->rear_view_side_mirror_elec == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="rear_view_side_mirror_elec_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input mirror-other" id="rear_view_side_mirror_elec_other" name="rear_view_side_mirror_elec_other" placeholder="Please type another option here" type="text" value="{{ old('rear_view_side_mirror_elec_other') ?? ($car ? $car->rear_view_side_mirror_elec_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('rear_view_side_mirror_elec')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Rear View/ Side Mirror Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="rear_view_side_mirror_elec_images[]"  id="rear_view_side_mirror_elec_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="rear-view-side-mirror-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('rear_view_side_mirror_elec_images')}}</div>
                                                                <span id="rear_view_side_mirror_elec_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "rear_view_mirror")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                        <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                            <img src="{{ asset($img) }}" alt="Car Image"  width="150px" height="80px">
                                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif

                                                        
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>A/C Grilles</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_grills" value="A/C Grilles">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-grilles-pass" name="ac_grilles" id="ac_grilles_pass" value="Pass" type="radio" {{ old('ac_grilles') == 'Pass' || ($car && $car->ac_grilles == 'Pass') ? 'checked' : '' }} checked />
                                                                    <label class="form-check-label label" for="ac_grilles_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-grilles-other" name="ac_grilles" id="ac_grilles_other_radio" value="Other" type="radio" {{ old('ac_grilles') == 'Other' || ($car && $car->ac_grilles == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="ac_grilles_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input grilles-other" id="ac_grilles_other" name="ac_grilles_other" placeholder="Please type another option here" type="text" value="{{ old('ac_grilles_other') ?? ($car ? $car->ac_grilles_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('ac_grilles')}}</div>
                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>A/C Grilles Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="ac_grilles_images[]" id="ac_grilles_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="ac-grilles-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('ac_grilles_images')}}</div>
                                                                <span id="ac_grilles_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "grills")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Starting & Ignition System</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_strt_ignition" value="Starting & Ignition System">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-ignition-pass" name="starting_ignition_system" id="starting_ignition_system_pass" value="Pass" type="radio" {{ old('starting_ignition_system') == 'Pass' || ($car && $car->starting_ignition_system == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="starting_ignition_system_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-ignition-other" name="starting_ignition_system" id="starting_ignition_system_other_radio" value="Other" type="radio" {{ old('starting_ignition_system') == 'Other' || ($car && $car->starting_ignition_system == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="starting_ignition_system_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input ignition-other" id="starting_ignition_system_other" name="starting_ignition_system_other" placeholder="Please type another option here" type="text" value="{{ old('starting_ignition_system_other') ?? ($car ? $car->starting_ignition_system_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('starting_ignition_system')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Starting & Ignition System Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="starting_ignition_system_images[]" id="starting_ignition_system_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="starting-ignition-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('starting_ignition_system_images')}}</div>
                                                                <span id="starting_ignition_system_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "strt_ignition")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                           @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                        <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                             @endif
                                                                        @endforeach
                                                                     @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Brake Lights</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_brake_light" value="Brake Lights">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-brake-pass" name="brake_lights" id="brake_lights_pass" value="Pass" type="radio" {{ old('brake_lights') == 'Pass' || ($car && $car->brake_lights == 'Pass') ? 'checked' : '' }} checked />
                                                                    <label class="form-check-label label" for="brake_lights_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-brake-other" name="brake_lights" id="brake_lights_other" value="Other" type="radio" {{ old('brake_lights') == 'Other' || ($car && $car->brake_lights == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="brake_lights_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input brake-other" id="brake_lights_other" name="brake_lights_other" placeholder="Please type another option here" type="text" value="{{ old('brake_lights_other') ?? ($car ? $car->brake_lights_other : '') }}">
                                                                </div>


                                                                <div class="error-message">{{$errors->first('brake_lights')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Brake Lights Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="brake_lights_images[]" id="brake_lights_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="brake-lights-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('brake_lights_images')}}</div>
                                                                <span id="brake_lights_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "brake_light")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                        <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Headlights</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_headlights" value="Headlights">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-headlights-pass" name="headlights" id="headlights_pass" value="Pass" type="radio" {{ old('headlights') == 'Pass' || ($car && $car->headlights == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="headlights_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-headlights-other" name="headlights" id="headlights_other_radio" value="Other" type="radio" {{ old('headlights') == 'Other' || ($car && $car->headlights == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="headlights_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input headlights-other" id="headlights_other" name="headlights_other" placeholder="Please type another option here" type="text" value="{{ old('headlights_other') ?? ($car ? $car->headlights_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('headlights')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Headlights Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="headlights_images[]" id="headlights_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="headlights-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('headlights_images')}}</div>
                                                                <span id="headlights_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "headlights")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                             @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        <hr class="mt-5 mb-5">
                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Fog Lights</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_foglights" value="Fog Lights">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-fog-pass" name="fog_lights" id="fog_lights_pass" value="Pass" type="radio" {{ old('fog_lights') == 'Pass' || ($car && $car->fog_lights == 'Pass') ? 'checked' : '' }} checked />
                                                                    <label class="form-check-label label" for="fog_lights_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-fog-na" name="fog_lights" id="fog_lights_na" value="N/A" type="radio" {{ old('fog_lights') == 'N/A' || ($car && $car->fog_lights == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="fog_lights_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-fog-other" name="fog_lights" id="fog_lights_other_radio" value="Other" type="radio" {{ old('fog_lights') == 'Other' || ($car && $car->fog_lights == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="fog_lights_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input fog-other" id="fog_lights_other" name="fog_lights_other" placeholder="Please type another option here" type="text" value="{{ old('fog_lights_other') ?? ($car ? $car->fog_lights_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('fog_lights')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Fog Lights Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="fog_lights_images[]" id="fog_lights_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="fog-lights-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('fog_lights_images')}}</div>
                                                                <span id="fog_lights_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "foglights")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Reverse Lights</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_reverselights" value="Reverse Lights">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-reverse-pass" name="reverse_lights" id="reverse_lights_pass" value="Pass" type="radio" {{ old('reverse_lights') == 'Pass' || ($car && $car->reverse_lights == 'Pass') ? 'checked' : '' }} checked> 
                                                                    <label class="form-check-label label" for="reverse_lights_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-reverse-na" name="reverse_lights" id="reverse_lights_na" value="N/A" type="radio" {{ old('reverse_lights') == 'N/A' || ($car && $car->reverse_lights == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="reverse_lights_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-reverse-other" name="reverse_lights" id="reverse_lights_other_radio" value="Other" type="radio" {{ old('reverse_lights') == 'Other' || ($car && $car->reverse_lights == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="reverse_lights_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input reverse-other" id="reverse_lights_other" name="reverse_lights_other" placeholder="Please type another option here" type="text" value="{{ old('reverse_lights_other') ?? ($car ? $car->reverse_lights_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('reverse_lights')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Reverse Lights Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="reverse_lights_images[]" id="reverse_lights_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="reverse-lights-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('reverse_lights_images')}}</div>
                                                                <span id="reverse_lights_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "reverselights")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                    <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                        <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                        <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>High Beams</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_highbeams" value="High Beams">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-beams-pass" name="high_beams" id="high_beams_pass" value="Pass" type="radio" {{ old('high_beams') == 'Pass' || ($car && $car->high_beams == 'Pass') ? 'checked' : '' }} checked />
                                                                    <label class="form-check-label label" for="high_beams_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-beams-na" name="high_beams" id="high_beams_na" value="N/A" type="radio" {{ old('high_beams') == 'N/A' || ($car && $car->high_beams == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="high_beams_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-beams-other" name="high_beams" id="high_beams_other" value="Other" type="radio" {{ old('high_beams') == 'Other' || ($car && $car->high_beams == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="high_beams_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input beams-other" id="high_beams_other" name="high_beams_other" placeholder="Please type another option here" type="text" value="{{ old('high_beams_other') ?? ($car ? $car->high_beams_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('high_beams')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>High Beams Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="high_beams_images[]" id="high_beams_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="high-beams-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('high_beams_images')}}</div>
                                                                <span id="high_beams_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "highbeams")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                    <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                        <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                        <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                         @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Number Plate Lights</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_no_of_plates" value="Number Plate Lights">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-plate-pass" name="no_plates_lights" id="no_plates_lights_pass" value="Pass" type="radio" {{ old('no_plates_lights') == 'Pass' || ($car && $car->no_plates_lights == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="no_plates_lights_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-plate-na" name="no_plates_lights" id="no_plates_lights_na" value="N/A" type="radio" {{ old('no_plates_lights') == 'N/A' || ($car && $car->no_plates_lights == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="no_plates_lights_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-plate-other" name="no_plates_lights" id="no_plates_lights_other" value="Other" type="radio" {{ old('no_plates_lights') == 'Other' || ($car && $car->no_plates_lights == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="no_plates_lights_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input plate-other" id="no_plates_lights_other" name="no_plates_lights_other" placeholder="Please type another option here" type="text" value="{{ old('no_plates_lights_other') ?? ($car ? $car->no_plates_lights_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('no_plates_lights')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Number Plate Lights Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="no_plates_lights_images[]" id="no_plates_lights_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="no-plates-lights-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('no_plates_lights_images')}}</div>
                                                                <span id="no_plates_lights_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "no_of_plates")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                               
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif



                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Indicators & Hazards</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_indicators_hazardous" value="Indicators & Hazards">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-hazards-pass" name="indicators_hazards" id="indicators_hazards_other_pass" value="Pass" type="radio" {{ old('indicators_hazards') == 'Pass' || ($car && $car->indicators_hazards == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="indicators_hazards_other_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-hazards-na" name="indicators_hazards" id="indicators_hazards_na" value="N/A" type="radio" {{ old('indicators_hazards') == 'N/A' || ($car && $car->indicators_hazards == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="indicators_hazards_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-hazards-other" name="indicators_hazards" id="indicators_hazards_other" value="Other" type="radio" {{ old('indicators_hazards') == 'Other' || ($car && $car->indicators_hazards == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="indicators_hazards_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input hazards-other" id="indicators_hazards_other" name="indicators_hazards_other" placeholder="Please type another option here" type="text" value="{{ old('indicators_hazards_other') ?? ($car ? $car->indicators_hazards_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('indicators_hazards')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Indicators & Hazards Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="indicators_hazards_images[]" id="indicators_hazards_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="indicators-hazards-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('indicators_hazards_images')}}</div>
                                                                <span id="indicators_hazards_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "indicators_hazardous")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                               
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif



                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Wipers</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_wipers" value="Wipers">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-wipers-pass" name="wipers" id="wipers_pass" value="Pass" type="radio" {{ old('wipers') == 'Pass' || ($car && $car->wipers == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="wipers_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-wipers-na" name="wipers" id="wipers_na" value="N/A" type="radio" {{ old('wipers') == 'N/A' || ($car && $car->wipers == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="wipers_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-wipers-other" name="wipers" id="wipers_other" value="Other" type="radio" {{ old('wipers') == 'Other' || ($car && $car->wipers == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="wipers_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input wipers-other" id="wipers-other" name="wipers_other" placeholder="Please type another option here" type="text" value="{{ old('wipers_other') ?? ($car ? $car->wipers_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('wipers')}}</div>
                                                                <span id="indicators_hazards_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Wipers Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="wipers_images[]" id="wipers_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="wipers-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('wipers_images')}}</div>
                                                                <span id="wipers_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "wipers")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                               
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Soft Closing Doors</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_soft_closing" value="Soft Closing Doors">
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-closing-pass" name="soft_closing_doors" id="soft_closing_doors_pass" value="Pass" type="radio" {{ old('soft_closing_doors') == 'Pass' || ($car && $car->soft_closing_doors == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="soft_closing_doors_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-closing-na" name="soft_closing_doors" id="soft_closing_doors_na" value="N/A" type="radio" {{ old('soft_closing_doors') == 'N/A' || ($car && $car->soft_closing_doors == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="soft_closing_doors_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-closing-other" name="soft_closing_doors" id="soft_closing_doors_other" value="Other" type="radio" {{ old('soft_closing_doors') == 'Other' || ($car && $car->soft_closing_doors == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="soft_closing_doors_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input closing-other" id="soft_closing_doors_other" name="soft_closing_doors_other" placeholder="Please type another option here" type="text" value="{{ old('soft_closing_doors_other') ?? ($car ? $car->soft_closing_doors_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('soft_closing_doors')}}</div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Soft Closing Doors Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                
                                                                    <input type="file" class="cstm-file-upload" name="soft_closing_doors_images[]" id="soft_closing_doors_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="soft-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('soft_closing_doors_images')}}</div>
                                                                <span id="soft_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $m)
                                                                @if($m->type === "soft_closing")
                                                                    @php
                                                                        $images = explode(',', $m->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        <img src="{{ asset($img) }}" alt="Car Image">
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                            @endif -->
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Sunroof / Moonroof</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_snroof_moonroof" value="Sunroof / Moonroof">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-sunroof-pass" name="sunroof_moonroof" id="sunroof_moonroof_pass" value="Pass" type="radio" {{ old('sunroof_moonroof') == 'Pass' || ($car && $car->sunroof_moonroof == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="sunroof_moonroof_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-sunroof-na" name="sunroof_moonroof" id="sunroof_moonroof_na" value="N/A" type="radio" {{ old('sunroof_moonroof') == 'N/A' || ($car && $car->sunroof_moonroof == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="sunroof_moonroof_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-sunroof-other" name="sunroof_moonroof" id="sunroof_moonroof_other" value="Other" type="radio" {{ old('sunroof_moonroof') == 'Other' || ($car && $car->sunroof_moonroof == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="sunroof_moonroof_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input sunroof-other" id="sunroof_moonroof_other" name="sunroof_moonroof_other" placeholder="Please type another option here" type="text" value="{{ old('sunroof_moonroof_other') ?? ($car ? $car->sunroof_moonroof_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('sunroof_moonroof')}}</div>
                                                                <span id="sunroof_moonroof_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Sunroof/Moonroof Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="sunroof_moonroof_images[]" id="sunroof_moonroof_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="sunroof-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('sunroof_moonroof_images')}}</div>
                                                                <span id="sunroof_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "snroof_moonroof")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                               
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif


                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Interior Lights</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_interior_lights" value="Interior Lights">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-interior-pass" name="interior_lights" id="interior_lights_pass" value="Pass" type="radio" {{ old('interior_lights') == 'Pass' || ($car && $car->interior_lights == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="interior_lights_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-interior-na" name="interior_lights" id="interior_lights_na" value="N/A" type="radio" {{ old('interior_lights') == 'N/A' || ($car && $car->interior_lights == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="interior_lights_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-interior-other" name="interior_lights" id="interior_lights_other" value="Other" type="radio" {{ old('interior_lights') == 'Other' || ($car && $car->interior_lights == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="interior_lights_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input interior-other" id="interior_lights_other" name="interior_lights_other" placeholder="Please type another option here" type="text" value="{{ old('interior_lights_other') ?? ($car ? $car->interior_lights_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('interior_lights')}}</div>
                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Interior Lights Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="interior_lights_images[]" id="interior_lights_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="interior-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('interior_lights_images')}}</div>
                                                                <span id="interior_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $m)
                                                                @if($m->type === "interior_lights")
                                                                    @php
                                                                        $images = explode(',', $m->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                    @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                               
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif



                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Cruise Control</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_cruise_control" value="Cruise Control">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-cruise-pass" name="cruise_control" id="cruise_control_pass" value="Pass" type="radio" {{ old('cruise_control') == 'Pass' || ($car && $car->cruise_control == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="cruise_control_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-cruise-na" name="cruise_control" id="cruise_control_na" value="N/A" type="radio" {{ old('cruise_control') == 'N/A' || ($car && $car->cruise_control == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="cruise_control_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-cruise-other" name="cruise_control" id="cruise_control_other" value="Other" type="radio" {{ old('cruise_control') == 'Other' || ($car && $car->cruise_control == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="cruise_control_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input cruise-other" id="cruise_control_other" name="cruise_control_other" placeholder="Please type another option here" type="text" value="{{ old('cruise_control_other') ?? ($car ? $car->cruise_control_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('cruise_control')}}</div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Cruise Control Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="cruise_control_images[]" id="cruise_control_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="crise-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('cruise_control_images')}}</div>
                                                                <span id="cruise_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div> -->
                                                        <!-- @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $m)
                                                                @if($m->type === "cruise_control")
                                                                    @php
                                                                        $images = explode(',', $m->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        <img src="{{ asset($img) }}" alt="Car Image">
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                            @endif -->
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Horn</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-horn-pass" name="horn" id="horn_pass" value="Pass" type="radio" {{ old('horn') == 'Pass' || ($car && $car->horn == 'Pass') ? 'checked' : '' }} checked> 
                                                                    <label class="form-check-label label" for="horn_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-horn-na" name="horn" id="horn_na" value="N/A" type="radio" {{ old('horn') == 'N/A' || ($car && $car->horn == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="horn_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-horn-other" name="horn" id="horn_other" value="Other" type="radio" {{ old('horn') == 'Other' || ($car && $car->horn == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="horn_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input horn-other" id="horn_other" name="horn_other" placeholder="Please type another option here" type="text" value="{{ old('horn_other') ?? ($car ? $car->horn_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('horn')}}</div>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="engine-upper fault-photo">
                                                                <h6>Parking Sensors Fault</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-parking-pass" name="parking_sensors" id="parking_sensors_pass" value="Pass" type="radio" {{ old('parking_sensors') == 'Pass' || ($car && $car->parking_sensors == 'Pass') ? 'checked' : '' }} checked>
                                                                    <label class="form-check-label label" for="parking_sensors_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-parking-na" name="parking_sensors" id="parking_sensors_na" value="N/A" type="radio" {{ old('parking_sensors') == 'N/A' || ($car && $car->parking_sensors == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="parking_sensors_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-parking-other" name="parking_sensors" id="parking_sensors_other" value="Other" type="radio" {{ old('parking_sensors') == 'Other' || ($car && $car->parking_sensors == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="parking_sensors_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input parking-other" id="parking_sensors_other" name="parking_sensors_other" placeholder="Please type another option here" type="text" value="{{ old('parking_sensors_other') ?? ($car ? $car->parking_sensors_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('parking_sensors')}}</div>
                    
                                                            </div>
                                                        </div>
        
                                                        <hr class="mt-5">

                                                    </div>
                                                </div>
                                                <div class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  id="saveform5" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div> 

                                    <!----------- steps 6 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step6">
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form6') : route('inspector.store_car_form6') }}" method="POST"  name="form6" enctype="multipart/form-data" id="form6">
                                             @csrf   
                                                <input type="hidden" name="step" value="6">
                                                <h2 class="text-center">Interior</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="all-info-container">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Roof Lining</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_roof_lining" value="Roof Lining">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-lining-pass" name="roof_lining" id="roof_lining_pass" value="Pass" type="radio" {{ old('roof_lining') == 'Pass' || ($car && $car->roof_lining == 'Pass') ? 'checked' : '' }} checked />
                                                                    <label class="form-check-label label" for="roof_lining_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-lining-na" name="roof_lining" id="roof_lining_na" value="N/A" type="radio" {{ old('roof_lining') == 'N/A' || ($car && $car->roof_lining == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="roof_lining_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-lining-other" name="roof_lining" id="roof_lining_other" value="Other" type="radio" {{ old('roof_lining') == 'Other' || ($car && $car->roof_lining == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="roof_lining_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input lining-other" id="roof_lining_other" name="roof_lining_other" placeholder="Please type another option here" type="text" value="{{ old('roof_lining_other') ?? ($car ? $car->roof_lining_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('roof_lining')}}</div>
        
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Roof Lining Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="roof_lining_images[]" id="roof_lining_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="roof-lining-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('roof_lining_images')}}</div>
                                                                <span id="roof_lining_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "roof_lining")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Rear View Mirror</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_rear_view_mirror_form6" value="Rear View Mirror">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-rearview-pass" name="rear_view_mirror" id="rear_view_mirror_pass" value="Pass" type="radio" {{ old('rear_view_mirror') == 'Pass' || ($car && $car->rear_view_mirror == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="rear_view_mirror_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-rearview-na" name="rear_view_mirror" id="rear_view_mirror_na" value="N/A" type="radio" {{ old('rear_view_mirror') == 'N/A' || ($car && $car->rear_view_mirror == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="rear_view_mirror_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-rearview-other" name="rear_view_mirror" id="rear_view_mirror_other" value="Other" type="radio" {{ old('rear_view_mirror') == 'Other' || ($car && $car->rear_view_mirror == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="rear_view_mirror_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input rearview-other" id="rear_view_mirror_other" name="rear_view_mirror_other" placeholder="Please type another option here" type="text" value="{{ old('rear_view_mirror_other') ?? ($car ? $car->rear_view_mirror_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('rear_view_mirror')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Rear View Mirror Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="rear_view_mirror_form6_images[]" id="rear_view_mirror_images" multiple/>
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="rear-view-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('rear_view_mirror_images')}}</div>
                                                                <span id="rear_view_mirror_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "rear_view_mirror_form6")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Steering Wheel Upholstery</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_wheel_upholstery" value="Steering Wheel Upholstery">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-steering-pass" name="steering_wheel_upholstery" id="steering_wheel_upholstery_pass" value="Pass" type="radio" {{ old('steering_wheel_upholstery') == 'Pass' || ($car && $car->steering_wheel_upholstery == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="steering_wheel_upholstery_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-steering-na" name="steering_wheel_upholstery" id="steering_wheel_upholstery_na"  value="N/A" type="radio" {{ old('steering_wheel_upholstery') == 'N/A' || ($car && $car->steering_wheel_upholstery == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="steering_wheel_upholstery_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-steering-other" name="steering_wheel_upholstery" id="steering_wheel_upholstery_other"  value="Other"  type="radio" {{ old('steering_wheel_upholstery') == 'Other' || ($car && $car->steering_wheel_upholstery == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="steering_wheel_upholstery_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input steering-other" id="steering_wheel_upholstery_other" name="steering_wheel_upholstery_other" placeholder="Please type another option here" type="text" value="{{ old('steering_wheel_upholstery_other') ?? ($car ? $car->steering_wheel_upholstery_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('steering_wheel_upholstery')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Steering Wheel Upholstery Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="steering_wheel_upholstery_images[]" id="steering_wheel_upholstery_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="steering-wheel-upholstery-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('steering_wheel_upholstery_images')}}</div>
                                                                <span id="steering_wheel_upholstery_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "wheel_upholstery")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Seats Upholstery</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_seats_upholstery" value="Seats Upholstery">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-upholstery-pass" name="seats_upholstery" id="seats_upholstery_pass" value="Pass" type="radio" {{ old('seats_upholstery') == 'Pass' || ($car && $car->seats_upholstery == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="seats_upholstery_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-upholstery-na" name="seats_upholstery" id="seats_upholstery_na" value="N/A"  type="radio" {{ old('seats_upholstery') == 'N/A' || ($car && $car->seats_upholstery == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="seats_upholstery_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-upholstery-other" name="seats_upholstery" id="seats_upholstery_other"  value="Other"  type="radio" {{ old('seats_upholstery') == 'Other' || ($car && $car->seats_upholstery == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="seats_upholstery_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input upholstery-other" id="seats_upholstery_other" name="seats_upholstery_other" placeholder="Please type another option here" type="text" value="{{ old('seats_upholstery_other') ?? ($car ? $car->seats_upholstery_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('seats_upholstery')}}</div>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Seats Upholstery Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="seats_upholstery_images[]" id="seats_upholstery_images" multiple/>
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="seats-upholstery-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('seats_upholstery_images')}}</div>
                                                                <span id="seats_upholstery_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "seats_upholstery")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Gear Lever</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_gear_lever" value="Gear Lever">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-lever-pass" name="gear_lever" id="gear_lever_pass" value="Pass" type="radio" {{ old('gear_lever') == 'Pass' || ($car && $car->gear_lever == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="gear_lever_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-lever-na" name="gear_lever" id="gear_lever_na" value="N/A" type="radio" {{ old('gear_lever') == 'N/A' || ($car && $car->gear_lever == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="gear_lever_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-lever-other" name="gear_lever" id="gear_lever_other" value="Other" type="radio" {{ old('gear_lever') == 'Other' || ($car && $car->gear_lever == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="gear_lever_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input lever-other" id="gear_lever_other" name="gear_lever_other" placeholder="Please type another option here" type="text" value="{{ old('gear_lever_other') ?? ($car ? $car->gear_lever_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('gear_lever')}}</div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Gear Lever Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="gear_lever_images[]" id="gear_lever_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="gear-lever-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('gear_lever_images')}}</div>
                                                                <span id="gear_lever_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "gear_lever")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Trunk Lining</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_trunk_lining" value="Trunk Lining">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-trunk-pass" name="trunk_lining" id="trunk_lining_pass" value="Pass" type="radio" {{ old('trunk_lining') == 'Pass' || ($car && $car->trunk_lining == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="trunk_lining_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-trunk-na" name="trunk_lining" id="trunk_lining_na" value="N/A" type="radio" {{ old('trunk_lining') == 'N/A' || ($car && $car->trunk_lining == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="trunk_lining_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-trunk-other" name="trunk_lining" id="trunk_lining_other" value="Other" type="radio" {{ old('trunk_lining') == 'Other' || ($car && $car->trunk_lining == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="trunk_lining_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input trunk-other" id="trunk_lining_other" name="trunk_lining_other" placeholder="Please type another option here" type="text" value="{{ old('trunk_lining_other') ?? ($car ? $car->trunk_lining_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('trunk_lining')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Trunk Lining Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="trunk_lining_images[]" id="trunk_lining_images" multiple/>
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="trunk-lining-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('trunk_lining_images')}}</div>
                                                                <span id="trunk_lining_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "trunk_lining")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Armrest & Side Pockets</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_amrest_side_pockets" value="Armrest & Side Pockets">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-armrest-pass" name="amrest_side_pockets" id="amrest_side_pockets_pass" value="Pass" type="radio" {{ old('amrest_side_pockets') == 'Pass' || ($car && $car->amrest_side_pockets == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="amrest_side_pockets_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-armrest-na" name="amrest_side_pockets" id="amrest_side_pockets_na" value="N/A" type="radio" {{ old('amrest_side_pockets') == 'N/A' || ($car && $car->amrest_side_pockets == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="amrest_side_pockets_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-armrest-other" name="amrest_side_pockets" id="amrest_side_pockets_other" value="Other" type="radio" {{ old('amrest_side_pockets') == 'Other' || ($car && $car->amrest_side_pockets == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="amrest_side_pockets_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input armrest-other" id="amrest_side_pockets_other" name="amrest_side_pockets_other" placeholder="Please type another option here" type="text" value="{{ old('amrest_side_pockets_other') ?? ($car ? $car->amrest_side_pockets_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('amrest_side_pockets')}}</div>
                                                        
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Armrest & Side Pockets Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="amrest_side_pockets_images[]" id="amrest_side_pockets_images" multiple/>
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="amrest-side-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('amrest_side_pockets_images')}}</div>
                                                                <span id="amrest_side_pockets_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "amrest_side_pockets")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Dashboard</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_dashboard" value="Dashboard ">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-dashboard-pass" name="dashboard" id="dashboard_pass" value="Pass" type="radio" {{ old('dashboard') == 'Pass' || ($car && $car->dashboard == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="dashboard_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-dashboard-na" name="dashboard" id="dashboard_na" value="N/A" type="radio" {{ old('dashboard') == 'N/A' || ($car && $car->dashboard == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="dashboard_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-dashboard-other" name="dashboard" id="dashboard_other" value="Other" type="radio" {{ old('dashboard') == 'Other' || ($car && $car->dashboard == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="dashboard_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input dashboard-other" id="dashboard_other" name="dashboard" placeholder="Please type another option here" type="text" value="{{ old('dashboard_other') ?? ($car ? $car->dashboard_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('dashboard')}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Dashboard Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="dashboard_images[]" id="dashboard_images" multiple/>
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="dashboard-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('dashboard_images')}}</div>
                                                                <span id="dashboard_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "dashboard")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Floor Mats</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_floor_mates" value="Floor Mats">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-mats-pass" name="floor_mates" id="floor_mates_pass" value="Pass" type="radio" {{ old('floor_mates') == 'Pass' || ($car && $car->floor_mates == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="floor_mates_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-mats-na" name="floor_mates" id="floor_mates_na" value="N/A" type="radio" {{ old('floor_mates') == 'N/A' || ($car && $car->floor_mates == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="floor_mates_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-mats-other" name="floor_mates" id="floor_mates_other" value="Other" type="radio" {{ old('floor_mates') == 'Other' || ($car && $car->floor_mates == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="floor_mates_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input mats-other" id="floor_mates_other" name="floor_mates_other" placeholder="Please type another option here" type="text" value="{{ old('floor_mates_other') ?? ($car ? $car->floor_mates_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('floor_mates')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Floor Mats Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="floor_mates_images[]" id="floor_mates_images" multiple/>
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="floor-mates-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('floor_mates_images')}}</div>
                                                                <span id="floor_mates_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "floor_mates")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Doors</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_doors" value="Doors">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-doorsfault-pass" name="doors" id="doors_pass" value="Pass" type="radio" {{ old('doors') == 'Pass' || ($car && $car->doors == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="doors_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-doorsfault-na" name="doors" id="doors_na" value="N/A" type="radio" {{ old('doors') == 'N/A' || ($car && $car->doors == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="doors_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-doorsfault-other" name="doors" id="doors_other" value="Other" type="radio" {{ old('doors') == 'Other' || ($car && $car->doors == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="doors_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input doorsfault-other" id="doorsother" name="doors_other" placeholder="Please type another option here" type="text" value="{{ old('doors_other') ?? ($car ? $car->doors_other : '') }}">
                                                                </div>


                                                                <div class="error-message">{{$errors->first('doors')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Doors Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="doors_images[]" id="doors_images" multiple />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="doors-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('doors_images')}}</div>
                                                                <span id="doors_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "doors")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Front Windscreen</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_front_windscreen" value="Front Windscreen">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-windscreen-pass" name="front_windscreen" id="front_windscreen_pass" value="Pass" type="radio" {{ old('front_windscreen') == 'Pass' || ($car && $car->front_windscreen == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="front_windscreen_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-windscreen-na" name="front_windscreen" id="front_windscreen_na" value="N/A" type="radio" {{ old('front_windscreen') == 'N/A' || ($car && $car->front_windscreen == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="front_windscreen_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-windscreen-other" name="front_windscreen" id="front_windscreen_other" value="Other" type="radio" {{ old('front_windscreen') == 'Other' || ($car && $car->front_windscreen == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="front_windscreen_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input windscreen-other" id="front_windscreen_other" name="front_windscreen_other" placeholder="Please type another option here" type="text" value="{{ old('front_windscreen_other') ?? ($car ? $car->front_windscreen_other : '') }}">
                                                                </div>

                                                                <div class="error-message">{{$errors->first('front_windscreen')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Front Windscreen Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="front_windscreen_images[]" id="front_windscreen_images" multiple/>
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="front-windscreen-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('front_windscreen_images')}}</div>
                                                                <span id="front_windscreen_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "front_windscreen")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Rear Windscreen</h6>
                                                                <br>
                                                                <input type="hidden" name="section_title_rear_windscreen" value="Rear Windscreen">

                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-rearwindscreen-pass" name="rear_windscreen" id="rear_windscreen_pass" value="Pass" type="radio" {{ old('rear_windscreen') == 'Pass' || ($car && $car->rear_windscreen == 'Pass') ? 'checked' : '' }} checked/>
                                                                    <label class="form-check-label label" for="rear_windscreen_pass">Pass</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-rearwindscreen-na" name="rear_windscreen" id="rear_windscreen_na" value="N/A" type="radio" {{ old('rear_windscreen') == 'N/A' || ($car && $car->rear_windscreen == 'N/A') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="rear_windscreen_na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-rearwindscreen-other" name="rear_windscreen" id="rear_windscreen_other" value="Other" type="radio" {{ old('rear_windscreen') == 'Other' || ($car && $car->rear_windscreen == 'Other') ? 'checked' : '' }}>
                                                                    <label class="form-check-label label" for="rear_windscreen_other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input rearwindscreen-other" id="rear_windscreen_other"  name="rear_windscreen_other" placeholder="Please type another option here" type="text" value="{{ old('rear_windscreen_other') ?? ($car ? $car->rear_windscreen_other : '') }}">
                                                                </div>
                                                                <div class="error-message">{{$errors->first('rear_windscreen')}}</div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="fault-photo">
                                                                <label>Rear Windscreen Fault</label>
                                                                <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="rear_windscreen_images[]" id="rear_windscreen_images" multiple/>
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="rear-windscreen-img-preview"></div>
                                                                <div class="error-message">{{$errors->first('rear_windscreen_images')}}</div>
                                                                <span id="rear_windscreen_images_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                        @if($carmedia && $carmedia->isNotEmpty())
                                                            <div class="col-md-12 mt-5 mb-4">
                                                                @foreach($carmedia as $m)
                                                                    @if($m->type === "rear_windscreen")
                                                                        @php
                                                                            $images = explode(',', $m->images);
                                                                        @endphp
                                                                        @foreach($images as $img)
                                                                            @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                                <div class="image-container" data-section-title="{{ $m->type }}">
                                                                                    <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                    <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $m->id }}" data-img="{{ $img }}" data-section-title="{{ $m->type }}">X</a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <hr class="mt-5">
                                                    </div>
                                                </div>
                                                <div class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  id="saveform6" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div> 

                                    <!----------- steps 7 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step7">
                                            <form action="">
                                            <input type="hidden" name="step" value="7">
                                                <h2 class="text-center">Service History & Manuals</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="all-info-container">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="engine-upper">
                                                                <h6>Service History</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-history-proof" name="history" id="rb-history-proof" type="radio" />
                                                                    <label class="form-check-label label" for="rb-history-proof">Available (ask seller to change ownership with agency for proof)</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-history-na" name="history" id="rb-history-na" type="radio" />
                                                                    <label class="form-check-label label" for="rb-history-na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-history-other" name="history" id="rb-history-other" type="radio" />
                                                                    <label class="form-check-label label" for="rb-history-other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input history-other" id="history-other" placeholder="Please type another option here" type="text" />
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="engine-upper fault-photo">
                                                                <h6>User Manual</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-manual-available" name="manual" id="rb-manual-available" type="radio" />
                                                                    <label class="form-check-label label" for="rb-manual-available">Available</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-manual-na" name="manual" id="rb-manual-na" type="radio" />
                                                                    <label class="form-check-label label" for="rb-manual-na">N/A</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input rb-manual-other" name="manual" id="rb-manual-other" type="radio" />
                                                                    <label class="form-check-label label" for="rb-manual-other">Other</label>
                                                                    <br>
                                                                    <input class="cstm-form_input manual-other" id="manual-other" placeholder="Please type another option here" type="text" />
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-12">
                                                            <div class="engine-upper">
                                                                <h6>Exterior & Interior Report</h6>
                                                                <br>
                                                                <div class="text-center">
                                                                    <!-- <img src="../master/assets/images/Car_Arbab.svg" alt="" class="brand-logo" width="100px"> -->
                                                                    <h4 class="mt-3">Chassis, Subframe & Internal Damage Report</h4>
                                                                    <!-- <img src="../master/assets/images/chassisdamage.jpg" alt="" class="brand-logo mt-3" width="100%"> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mt-5">
                                                            <div class="engine-upper chassis-checkbox">
                                                                <h6>Damage on Chassis / Subframe</h6>
                                                                <br>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis-pass">
                                                                    <label class="form-check-label" for="chassis-pass">
                                                                        Pass
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis-repaired">
                                                                    <label class="form-check-label" for="chassis-repaired">
                                                                        Repaired
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis-damaged">
                                                                    <label class="form-check-label" for="chassis-damaged">
                                                                        Damaged
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis1">
                                                                    <label class="form-check-label" for="chassis1">
                                                                        1
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis2">
                                                                    <label class="form-check-label" for="chassis2">
                                                                        2
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis3">
                                                                    <label class="form-check-label" for="chassis3">
                                                                        3
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis4">
                                                                    <label class="form-check-label" for="chassis4">
                                                                        4
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis5">
                                                                    <label class="form-check-label" for="chassis5">
                                                                        5
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis6">
                                                                    <label class="form-check-label" for="chassis6">
                                                                        6
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis7">
                                                                    <label class="form-check-label" for="chassis7">
                                                                        7
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis8">
                                                                    <label class="form-check-label" for="chassis8">
                                                                        8
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis9">
                                                                    <label class="form-check-label" for="chassis9">
                                                                        9
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis10">
                                                                    <label class="form-check-label" for="chassis10">
                                                                        10
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis11">
                                                                    <label class="form-check-label" for="chassis11">
                                                                        11
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis12">
                                                                    <label class="form-check-label" for="chassis12">
                                                                        12
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis13">
                                                                    <label class="form-check-label" for="chassis13">
                                                                        13
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis14">
                                                                    <label class="form-check-label" for="chassis14">
                                                                        14
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis15">
                                                                    <label class="form-check-label" for="chassis15">
                                                                        15
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis16">
                                                                    <label class="form-check-label" for="chassis16">
                                                                        16
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis17">
                                                                    <label class="form-check-label" for="chassis17">
                                                                        17
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis18">
                                                                    <label class="form-check-label" for="chassis18">
                                                                        18
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis19">
                                                                    <label class="form-check-label" for="chassis19">
                                                                        19
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis20">
                                                                    <label class="form-check-label" for="chassis20">
                                                                        20
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis21">
                                                                    <label class="form-check-label" for="chassis21">
                                                                        21
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis22">
                                                                    <label class="form-check-label" for="chassis22">
                                                                        22
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-12">
                                                            <div class="">
                                                                <label>Photos Of Chassis/Subframe Damage</label>
                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-12">
                                                            <div class="">
                                                                <label>Paint Condition</label>
                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                </div>
                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-5">
                                                    </div>

                                                </div>

                                                <ul class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <li><button type="button" class="default-btn Sbmit-btn">Continue</button></li>
                                                </ul>
                                                <div class="col-md-12 text-center my-3">
                                                    <button class="btn btn-primary" id="saveform7" type="submit">Submit form</button>
                                                </div>
                                            </form>
                                        </div> 

                                    <!----------- steps 8 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step8">
                                           
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form8') : route('inspector.store_car_form8') }}" method="POST"  name="form8" enctype="multipart/form-data" id="form8">
                                             @csrf   
                                                <input type="hidden" name="step" value="8">
                                                <h2 class="text-center">Exterior Photos</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="all-info-container">
                                                    <input type="hidden" name="section_title_exterior_photos" value="Exterior Photos">

                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <label>Exterior Images</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="exterior_images[]" id="exterior_images"  multiple/>
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="exterior-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('exterior_images')}}</div>
                                                            <span id="exterior_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "exterior_photos")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5">
                                                </div>
                                                <div class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  id="saveform8" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div> 

                                    <!----------- steps 9 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step9">
                                          
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form9') : route('inspector.store_car_form9') }}" method="POST"  name="form9" enctype="multipart/form-data" id="form9">
                                             @csrf   
                                                <input type="hidden" name="step" value="9">
                                                <h2 class="text-center">Interior Photos</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="all-info-container">
                                                <input type="hidden" name="section_title_interior_photos" value="Interior Photos">
                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <label>Interior Images</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="interior_images_form9[]" id="interior_images_form9" multiple />
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="interior9-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('interior_images_form9')}}</div>
                                                            <span id="interior_images_form9_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "interior_photos")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                    <hr class="mt-5">
                                                </div>

                                                <div class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  id="saveform9" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div> 

                                    <!----------- steps 10 form ---------------->
                                

                                    @if(isset($car) && $car->veh_fueltype_id == '3') 
                                    <div class="tab-pane" role="tabpanel" id="step10">
                                        <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form10_electric') : route('inspector.store_car_form10_electric') }}" method="POST"  name="form10" enctype="multipart/form-data" id="form10">
                                             @csrf 
                                                <input type="hidden" name="step" value="10">
                                                <h2 class="text-center"> Undercarriage Images</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="all-info-container">
                                                    <input type="hidden" name="section_title_undercarriage" value="Undercarriage Images">

                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <label> Undercarriage Images</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="undercarriage_images[]" id="undercarriage_images" multiple/>
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="undercarriage-preview"></div>
                                                            <div class="error-message">{{$errors->first('undercarriage_images')}}</div>
                                                            <span id="undercarriage_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "undercarriage")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                <hr class="mt-5">
                                                </div>
                                                <div class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  id="saveform10" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                    </div> 
                                    @else
                                    <div class="tab-pane" role="tabpanel" id="step10">
                                        <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form10') : route('inspector.store_car_form10') }}" method="POST"  name="form10" enctype="multipart/form-data" id="form10">
                                             @csrf 
                                            <input type="hidden" name="step" value="10">
                                            
                                            <h2 class="text-center"> Engine Bay Images</h2>
                                            
                                            <hr class="mt-5 mb-5">
                                            <div class="all-info-container">
                                                <input type="hidden" name="section_title_engine_bay_undercarriage" value="Engine Bay Images">

                                                <div class="col-md-12">
                                                    <div class="">
                                                        <label> Engine Bay Images</label>
                                                        <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                            <input type="file" class="cstm-file-upload" name="engine_bay_undercarriage_images[]" id="engine_bay_undercarriage_images" multiple/>
                                                        </div>
                                                        <div class="img-thumbs img-thumbs-hidden" id="engine-bay-undercarriage-img-preview"></div>
                                                        <div class="error-message">{{$errors->first('undercarriage_images')}}</div>
                                                        <span id="undercarriage_images_error" style="color: red;"></span>
                                                    </div>
                                                </div>
                                                @if($carmedia && $carmedia->isNotEmpty())
                                                    <div class="col-md-12 mt-5 mb-4">
                                                        @foreach($carmedia as $media)
                                                            @if($media->type === "engine_bay_undercarriage")
                                                                @php
                                                                    $images = explode(',', $media->images);
                                                                @endphp
                                                                @foreach($images as $img)
                                                                    @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                        <div class="image-container" data-section-title="{{ $media->type }}">
                                                                            <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                            <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endif

                                            <hr class="mt-5">
                                            </div>

                                            <div class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                <a href="#"><button type="submit"  id="saveform10" class="default-btn Sbmit-btn">Continue to next step</button></a>
                                            </div>
                                        </form>
                                    </div> 
                                    @endif
                                        
                                    <!----------- steps 11 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step11">
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form11') : route('inspector.store_car_form11') }}" method="POST"  name="form11" enctype="multipart/form-data" id="form11">
                                             @csrf 
                                                <input type="hidden" name="step" value="11">
                                                <h2 class="text-center">Vehicle Diagnostic Report</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="all-info-container">
                                                <input type="hidden" name="section_title_vehicle_diagnostic_report" value="Vehicle Diagnostic Report">
                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <label>Vehicle Diagnostic File Upload</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="vehicle_diagnostic_report_images[]" id="vehicle_diagnostic_report_images" multiple />
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="vehicle-diagnostic-report-img-preview">

                                                            </div>
                                                            <div class="error-message">{{$errors->first('vehicle_diagnostic_report_images')}}</div>
                                                            <span id="vehicle_diagnostic_report_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "vehicle_diagnostic_report")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5">
                                                </div>

                                                <div class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div> 

                                    <!----------- 13/03/24 new steps for electric form ---------------->

                                    <!----------- steps 12 for electric form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step12">
                        
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form13') : route('inspector.store_car_form13') }}" method="POST"  name="form13" enctype="multipart/form-data" id="form13">
                                             @csrf 
                                                <input type="hidden" name="step" value="13">
                                                <h2 class="text-center">Covers & Plastics</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="row all-info-container">
                                                    <div class="col-md-7">
                                                    <div class="engine-upper">
                                                            <h6>Frunk Condition</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_frunk_condition" value="Frunk Condition">

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-frunk-pass" name="frunk_condition" id="frunk_condition_pass" value="Pass" type="radio" {{ old('frunk_condition') == 'Pass' || ($car && $car->frunk_condition == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label radio-btn-label" for="frunk_condition_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-frunk-scratches" name="frunk_condition" id="frunk_condition_scratches" value="Minor Scratches" type="radio" {{ old('frunk_condition') == 'Minor Scratches' || ($car && $car->frunk_condition == 'Minor Scratches') ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="frunk_condition_scratches">Minor Scratches</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-frunk-major" name="frunk_condition" id="frunk_condition_major" value="Major Scratches" type="radio" {{ old('frunk_condition') == 'Major Scratches' || ($car && $car->frunk_condition == 'Major Scratches') ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="frunk_condition_major">Major Scratches</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-frunk-cracked" name="frunk_condition" id="frunk_condition_cracked" value="Cracked / Broken" type="radio" {{ old('frunk_condition') == 'Cracked / Broken' || ($car && $car->frunk_condition == 'Cracked / Broken') ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="frunk_condition_cracked">Cracked / Broken</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-frunk-components" name="frunk_condition" id="frunk_condition_components" value="Missing Components" type="radio" {{ old('frunk_condition') == 'Missing Components' || ($car && $car->frunk_condition == 'Missing Components') ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="frunk_condition_components">Missing Components</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-frunk-missing" name="frunk_condition" id="frunk_condition_missing" value="Missing" type="radio" {{ old('frunk_condition') == 'Missing' || ($car && $car->frunk_condition == 'Missing') ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="frunk_condition_missing">Missing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-frunk-other" name="frunk_condition" id="frunk_condition_other" value="Other" type="radio" {{ old('frunk_condition') == 'Other' || ($car && $car->frunk_condition == 'Other') ? 'checked' : '' }} />
                                                                <label class="form-check-label label radio-btn-label" for="frunk_condition_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input frunk-other" id="frunk_condition_other" name="frunk_condition_other" placeholder="Please type another option here" type="text" value="{{ old('frunk_condition_other') ?? ($car ? $car->frunk_condition_other : '') }}" />
                                                            </div>

                                                            <div class="error-message">{{$errors->first('frunk_condition')}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Frunk Condition Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="frunk_condition_images[]" id="frunk_condition_images" multiple/>
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="frnkcondition-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('frunk_condition_images')}}</div>
                                                            <span id="frunk_condition_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "frunk_condition")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Undercarriage Shield Cover</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_undercarriage_shield_cover" value="Undercarriage Shield Cover">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-undercarriage-pass" name="undercarriage_shield_cover" id="undercarriage_shield_cover_pass" type="radio" value="Pass" {{ old('undercarriage_shield_cover') == 'Pass' || ($car && $car->undercarriage_shield_cover == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label radio-btn-label" for="undercarriage_shield_cover_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-undercarriage-scratches" name="undercarriage_shield_cover" id="undercarriage_shield_cover_scratches" value="Minor Scratches" type="radio" {{ old('undercarriage_shield_cover') == 'Minor Scratches' || ($car && $car->undercarriage_shield_cover == 'Minor Scratches') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="undercarriage_shield_cover_scratches">Minor Scratches</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-undercarriage-major" name="undercarriage_shield_cover" id="undercarriage_shield_cover_major" value="Major Scratches" type="radio" {{ old('undercarriage_shield_cover') == 'Major Scratches' || ($car && $car->undercarriage_shield_cover == 'Major Scratches') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="undercarriage_shield_cover_major">Major Scratches</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-undercarriage-cracked" name="undercarriage_shield_cover" id="undercarriage_shield_cover_cracked" value="Cracked / Broken" type="radio" {{ old('undercarriage_shield_cover') == 'Cracked / Broken' || ($car && $car->undercarriage_shield_cover == 'Cracked / Broken') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="undercarriage_shield_cover_cracked">Cracked / Broken</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-undercarriage-components" name="undercarriage_shield_cover" id="undercarriage_shield_cover_components" value="Missing Components" type="radio" {{ old('undercarriage_shield_cover') == 'Missing Components' || ($car && $car->undercarriage_shield_cover == 'Missing Components') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="undercarriage_shield_cover_components">Missing Components</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-undercarriage-missing" name="undercarriage_shield_cover" id="undercarriage_shield_cover_missing" value="Missing" type="radio" {{ old('undercarriage_shield_cover') == 'Missing' || ($car && $car->undercarriage_shield_cover == 'Missing') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="undercarriage_shield_cover_missing">Missing</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-undercarriage-other" name="undercarriage_shield_cover" id="undercarriage_shield_cover_other" value="Other" type="radio" {{ old('undercarriage_shield_cover') == 'Other' || ($car && $car->undercarriage_shield_cover == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="undercarriage_shield_cover_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input undercarriage-other" id="undercarriage_shield_cover_other" name="undercarriage_shield_cover_other" placeholder="Please type another option here" type="text" value="{{ old('undercarriage_shield_cover_other') ?? ($car ? $car->undercarriage_shield_cover_other : '') }}">
                                                            </div>

                                                            <div class="error-message">{{$errors->first('undercarriage_shield_cover')}}</div>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Undercarriage Shield Cover Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="undercarriage_shield_cover_images[]" id="undercarriage_shield_cover_images" multiple/>
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="undercarriage-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('undercarriage_shield_cover_images')}}</div>
                                                            <span id="undercarriage_shield_cover_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "undercarriage_shield_cover")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Bonnet Hinge & Holder</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_bonnet_hinge" value="Bonnet Hinge & Holder Cover">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-hinge-pass" name="bonnet_hinge" id="bonnet_hinge_pass" type="radio" value="Pass" {{ old('bonnet_hinge') == 'Pass' || ($car && $car->bonnet_hinge == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label radio-btn-label" for="bonnet_hinge_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-hinge-missing" name="bonnet_hinge" id="bonnet_hinge_missing" value="Missing/Unavailable" type="radio" {{ old('bonnet_hinge') == 'Missing/Unavailable' || ($car && $car->bonnet_hinge == 'Missing/Unavailable') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="bonnet_hinge_missing">Missing/Unavailable</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-hinge-smoothly" name="bonnet_hinge" id="bonnet_hinge_smoothly" value="Not opening smoothly, cable and/or lock needs to be repaired" type="radio" {{ old('bonnet_hinge') == 'Not opening smoothly, cable and/or lock needs to be repaired' || ($car && $car->bonnet_hinge == 'Not opening smoothly, cable and/or lock needs to be repaired') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="bonnet_hinge_smoothly">Not opening smoothly, cable and/or lock needs to be repaired.</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-hinge-aftermarket" name="bonnet_hinge" id="bonnet_hinge_aftermarket" value="Aftermarket" type="radio" {{ old('bonnet_hinge') == 'Aftermarket' || ($car && $car->bonnet_hinge == 'Aftermarket') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="bonnet_hinge_aftermarket">Aftermarket</label>
                                                            </div>

                                                            <div class="form-check"> 
                                                                <input class="form-check-input rb-hinge-other" name="bonnet_hinge" id="bonnet_hinge_other" value="Other" type="radio" {{ old('bonnet_hinge') == 'Other' || ($car && $car->bonnet_hinge == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="bonnet_hinge_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input hinge-other" id="bonnet_hinge_other" name="bonnet_hinge_other" placeholder="Please type another option here" type="text" value="{{ old('bonnet_hinge_other') ?? ($car ? $car->bonnet_hinge_other : '') }}">
                                                            </div>

                                                            <div class="error-message">{{$errors->first('bonnet_hinge')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Bonnet Holder Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="bonnet_hinge_images[]" id="bonnet_hinge_images" multiple/>
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="bonnethinge-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('bonnet_hinge_images')}}</div>
                                                            <span id="bonnet_hinge_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "bonnet_hinge")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Fender Liners</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_fenders" value="Fender Liners Covers">

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fenderliners-pass" name="fenders" id="fenders_pass" type="radio" value="Pass" {{ old('fenders') == 'Pass' || ($car && $car->fenders == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="fenders_pass">Pass</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fenderliners-scratched" name="fenders" id="fenders_scratched" value="Scratched" type="radio" {{ old('fenders') == 'Scratched' || ($car && $car->fenders == 'Scratched') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="fenders_scratched">Scratched</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fenderliners-minor" name="fenders" id="fenders_minor" value="Minor Damaged/Cracked" type="radio" {{ old('fenders') == 'Minor Damaged/Cracked' || ($car && $car->fenders == 'Minor Damaged/Cracked') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="fenders_minor">Minor Damaged/Cracked</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fenderliners-major" name="fenders" id="fenders_major" value="Major Damaged/Cracked" type="radio" {{ old('fenders') == 'Major Damaged/Cracked' || ($car && $car->fenders == 'Major Damaged/Cracked') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="fenders_major">Major Damaged/Cracked</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fenderliners-missing" name="fenders" id="fenders_missing" value="Missing clips" type="radio" {{ old('fenders') == 'Missing clips' || ($car && $car->fenders == 'Missing clips') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="fenders_missing">Missing clips</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fenderliners-liners" name="fenders" id="fenders_liners" value="Liners missing" type="radio" {{ old('fenders') == 'Liners missing' || ($car && $car->fenders == 'Liners missing') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="fenders_liners">Liners missing</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-fenderliners-other" name="fenders" id="fenders_other" value="Other" type="radio" {{ old('fenders') == 'Other' || ($car && $car->fenders == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="fenders_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input fenderliners-other" id="fenders_other" name="fenders_other" placeholder="Please type another option here" type="text" value="{{ old('fenders_other') ?? ($car ? $car->fenders_other : '') }}">
                                                            </div>

                                                            <div class="error-message">{{$errors->first('fenders')}}</div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Fender Liners Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="fenders_images[]" id="fenders_images" multiple />
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="fen-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('fenders_images')}}</div>
                                                            <span id="fenders_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "fenders")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-12 radiatorinspection mb-5">
                                                            <h6>Radiator Inspection</h4>
                                                            <p>Check for Leaks: Visually inspect for any signs of coolant leaks in the vehicle's parking area or under the chassis. Coolant leaks could indicate issues with the cooling system's hoses, connections, or the radiator itself.</p>
                                                            <p>Inspect Hoses and Connections: Look at the coolant hoses and connections for signs of wear, damage, or corrosion. Make sure all connections are secure.</p>
                                                    </div>

                                                    <div class="col-md-7">
                                                        <div class="engine-uppe radiator">
                                                            <h6>Radiator</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_radiator_cover" value="Radiator Cover">

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiatorinspection-pass" name="radiator_cover" id="radiator_cover_pass" value="Pass" type="radio" {{ old('radiator_cover') == 'Pass' || ($car && $car->radiator_cover == 'Pass') ? 'checked' : '' }} checked />
                                                                <label class="form-check-label label" for="radiator_cover_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiatorinspection-external" name="radiator_cover" id="radiator_cover_external" value="Visible external damage" type="radio" {{ old('radiator_cover') == 'Visible external damage' || ($car && $car->radiator_cover == 'Visible external damage') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="radiator_cover_external">Visible external damage</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiatorinspection-clogged" name="radiator_cover" id="radiator_cover_clogged" value="Symptoms of clogged radiator" type="radio" {{ old('radiator_cover') == 'Symptoms of clogged radiator' || ($car && $car->radiator_cover == 'Symptoms of clogged radiator') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="radiator_cover_clogged">Symptoms of clogged radiator</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiatorinspection-hose" name="radiator_cover" id="radiator_cover_hose" value="Hose(s) damaged, need to be replaced" type="radio" {{ old('radiator_cover') == 'Hose(s) damaged, need to be replaced' || ($car && $car->radiator_cover == 'Hose(s) damaged, need to be replaced') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="radiator_cover_hose">Hose(s) damaged, need to be replaced</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiatorinspection-clamps" name="radiator_cover" id="radiator_cover_clamps" value="Hose clamps missing" type="radio" {{ old('radiator_cover') == 'Hose clamps missing' || ($car && $car->radiator_cover == 'Hose clamps missing') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="radiator_cover_clamps">Hose clamps missing</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiatorinspection-visible" name="radiator_cover" id="radiator_cover_visible" value="Leakage visible" type="radio" {{ old('radiator_cover') == 'Leakage visible' || ($car && $car->radiator_cover == 'Leakage visible') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="radiator_cover_visible">Leakage visible</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiatorinspection-cap" name="radiator_cover" id="radiator_cover_cap" value="Radiator cap damaged/broken" type="radio" {{ old('radiator_cover') == 'Radiator cap damaged/broken' || ($car && $car->radiator_cover == 'Radiator cap damaged/broken') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="radiator_cover_cap">Radiator cap damaged/broken</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiatorinspection-missing" name="radiator_cover" id="radiator_cover_missing" value="Radiator cap missing" type="radio" {{ old('radiator_cover') == 'Radiator cap missing' || ($car && $car->radiator_cover == 'Radiator cap missing') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="radiator_cover_missing">Radiator cap missing</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-radiatorinspection-other" name="radiator_cover" id="radiator_cover_other" value="Other" type="radio" {{ old('radiator_cover') == 'Other' || ($car && $car->radiator_cover == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="radiator_cover_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input radiatorinspection-other" id="radiator_cover_other" name="radiator_cover_other" placeholder="Please type another option here" type="text" value="{{ old('radiator_cover_other') ?? ($car ? $car->radiator_cover_other : '') }}">
                                                            </div>

                                                            <div class="error-message">{{$errors->first('radiator_cover')}}</div>
                                                            

                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Radiator Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="radiator_cover_images[]" id="radiator_cover_images" multiple/>
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="rad-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('radiator_cover_images')}}</div>
                                                            <span id="radiator_cover_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "radiator_cover")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-12 coolantelectric mb-3">
                                                            <h6>Coolant Level and Condition</h4>
                                                            <p>Check Coolant Level: Ensure the coolant reservoir is at the proper level. Low coolant levels might suggest a leak or that the system needs servicing.Examine Coolant Condition: If possible, check the condition of the coolant. It should be clean and free of debris. Contaminated coolant can reduce the efficiency of the cooling system.</p>
                                                            
                                                    </div>
                                                    <div class="col-md-12 coolantelectric mb-5">
                                                            <h6>System Operation</h4>
                                                            <p>Monitor Temperature Gauges: While driving, keep an eye on any temperature gauges or warnings on the dashboard. Overheating warnings can indicate a malfunctioning cooling system.Listen for Pump Operation: In liquid-cooled systems, the coolant is circulated by electric pumps. Listen for the operation of these pumps to ensure they are working correctly.</p>
                                                            
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="engine-upper coolant-condition">
                                                            <h6>Coolant Condition</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_coolant_condition_cover" value="Coolant Condition Cover">

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcondition-pass" name="coolant_condition_cover" id="coolant_condition_cover_pass" value="Pass" type="radio" {{ old('coolant_condition_cover') == 'Pass' || ($car && $car->coolant_condition_cover == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label" for="coolant_condition_cover_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcondition-topped" name="coolant_condition_cover" id="coolant_condition_cover_topped" value="Needs to be topped up" type="radio" {{ old('coolant_condition_cover') == 'Needs to be topped up' || ($car && $car->coolant_condition_cover == 'Needs to be topped up') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="coolant_condition_cover_topped">Needs to be topped up</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcondition-flushed" name="coolant_condition_cover" id="coolant_condition_cover_flushed" value="Needs to be flushed (Looks colorless/rusty)" type="radio" {{ old('coolant_condition_cover') == 'Needs to be flushed (Looks colorless/rusty)' || ($car && $car->coolant_condition_cover == 'Needs to be flushed (Looks colorless/rusty)') ? 'checked' : '' }}>
                                                                <label class="form-check-label label label-coolantcondition" for="coolant_condition_cover_flushed">Needs to be flushed (Looks colorless/rusty)</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcondition-surface" name="coolant_condition_cover" id="coolant_condition_cover_surface" value="Looks sludgy/oil surface (Might be head gasket leakage)" type="radio" {{ old('coolant_condition_cover') == 'Looks sludgy/oil surface (Might be head gasket leakage)' || ($car && $car->coolant_condition_cover == 'Looks sludgy/oil surface (Might be head gasket leakage)') ? 'checked' : '' }}>
                                                                <label class="form-check-label label label-coolantcondition" for="coolant_condition_cover_surface">Looks sludgy/oil surface (Might be head gasket leakage)</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcondition-bulgy" name="coolant_condition_cover" id="coolant_condition_cover_bulgy" value="Coolant hose needs to be replaced (Leaking/cracked/bulgy)" type="radio" {{ old('coolant_condition_cover') == 'Coolant hose needs to be replaced (Leaking/cracked/bulgy)' || ($car && $car->coolant_condition_cover == 'Coolant hose needs to be replaced (Leaking/cracked/bulgy)') ? 'checked' : '' }}>
                                                                <label class="form-check-label label label-cstm" for="coolant_condition_cover_bulgy">Coolant hose needs to be replaced (Leaking/cracked/bulgy)</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcondition-filler" name="coolant_condition_cover" id="coolant_condition_cover_filler" value="Oil filler cap damaged/broken" type="radio" {{ old('coolant_condition_cover') == 'Oil filler cap damaged/broken' || ($car && $car->coolant_condition_cover == 'Oil filler cap damaged/broken') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="coolant_condition_cover_filler">Oil filler cap damaged/broken</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcondition-other" name="coolant_condition_cover" id="coolant_condition_cover_other" value="Other" type="radio" {{ old('coolant_condition_cover') == 'Other' || ($car && $car->coolant_condition_cover == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="coolant_condition_cover_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input coolantcondition-other" id="coolant_condition_cover_other" name="coolant_condition_cover_other" placeholder="Please type another option here" type="text" value="{{ old('coolant_condition_cover_other') ?? ($car ? $car->coolant_condition_cover_other : '') }}">
                                                            </div>
                                                            <div class="error-message">{{$errors->first('coolant_condition_cover')}}</div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Coolant Condition Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="coolant_condition_cover_images[]" id="coolant_condition_cover_images"  multiple/>
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="coolant-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('coolant_condition_cover_images')}}</div>
                                                            <span id="coolant_condition_cover_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "coolant_condition_cover")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Coolant Cap</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_coolant_cap_cover" value="Coolant Cap Cover">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcap-pass" name="coolant_cap_cover" id="coolant_cap_cover_pass" value="Pass" type="radio" {{ old('coolant_cap_cover') == 'Pass' || ($car && $car->coolant_cap_cover == 'Pass') ? 'checked' : '' }} checked />
                                                                <label class="form-check-label label" for="coolant_cap_cover_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcap-missing" name="coolant_cap_cover" id="coolant_cap_cover_missing" value="Filler cap missing" type="radio" {{ old('coolant_cap_cover') == 'Filler cap missing' || ($car && $car->coolant_cap_cover == 'Filler cap missing') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="coolant_cap_cover_missing">Filler cap missing</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcap-broken" name="coolant_cap_cover" id="coolant_cap_cover_broken" value="Filler cap damaged/broken" type="radio" {{ old('coolant_cap_cover') == 'Filler cap damaged/broken' || ($car && $car->coolant_cap_cover == 'Filler cap damaged/broken') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="coolant_cap_cover_broken">Filler cap damaged/broken</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-coolantcap-other" name="coolant_cap_cover" id="coolant_cap_cover_other" value="Other" type="radio" {{ old('coolant_cap_cover') == 'Other' || ($car && $car->coolant_cap_cover == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="coolant_cap_cover_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input coolantcap-other" id="coolant_cap_cover_other" name="coolant_cap_cover_other" placeholder="Please type another option here" type="text" value="{{ old('coolant_cap_cover_other') ?? ($car ? $car->coolant_cap_cover_other : '') }}">
                                                            </div>
                                                            <div class="error-message">{{$errors->first('coolant_cap_cover')}}</div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Coolant Cap Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="coolant_cap_cover_images[]"  id="coolant_cap_cover_images" multiple/>
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="coolantcap-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('coolant_cap_cover_images')}}</div>
                                                            <span id="coolant_cap_cover_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "coolant_cap_cover")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Hoses & Pipes</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_hoses_cover" value="Hoses & Pipes Cover">

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-hosespipes-pass" name="hoses_cover" id="hoses_cover_pass" value="Pass" type="radio" {{ old('hoses_cover') == 'Pass' || ($car && $car->hoses_cover == 'Pass') ? 'checked' : '' }} checked />
                                                                <label class="form-check-label label" for="hoses_cover_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-hosespipes-other" name="hoses_cover" id="hoses_cover_other" value="Other" type="radio" {{ old('hoses_cover') == 'Other' || ($car && $car->hoses_cover == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="hoses_cover_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input hosespipes-other" id="hoses_cover_other" name="hoses_cover_other" placeholder="Please type another option here" type="text" value="{{ old('hoses_cover_other') ?? ($car ? $car->hoses_cover_other : '') }}">
                                                            </div>

                                                            <div class="error-message">{{$errors->first('hoses_cover')}}</div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Hose Damage Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="hoses_cover_images[]" id="hoses_cover_images" multiple />
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="hoses-cover-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('hoses_cover_images')}}</div>
                                                            <span id="hoses_cover_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "hoses_cover")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Visible Rust</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_visible_cover" value="Visible Rust Cover">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-visiblerust-pass" name="visible_cover" id="visible_cover_pass" value="Pass" type="radio" {{ old('visible_cover') == 'Pass' || ($car && $car->visible_cover == 'Pass') ? 'checked' : '' }} checked />
                                                                <label class="form-check-label label" for="visible_cover_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-visiblerust-other" name="visible_cover" id="visible_cover_other" value="Other" type="radio" {{ old('visible_cover') == 'Other' || ($car && $car->visible_cover == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label" for="visible_cover_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input visiblerust-other" id="visible_cover_other" name="visible_cover_other" placeholder="Please type another option here" type="text" value="{{ old('visible_cover_other') ?? ($car ? $car->visible_cover_other : '') }}">
                                                            </div>


                                                            <div class="error-message">{{$errors->first('visible_cover')}}</div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Visible Rust Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="visible_cover_images[]" id="visible_cover_images" multiple />
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="visiblecover-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('visible_cover_images')}}</div>
                                                            <span id="visible_cover_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "visible_cover")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">
                                                </div>
                                                <div class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div> 

                                    <!----------- steps 13 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step13">
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form14') : route('inspector.store_car_form14') }}" method="POST"  name="form14" enctype="multipart/form-data" id="form14">
                                                 @csrf 
                                                <input type="hidden" name="step" value="14">
                                                <h2 class="text-center">Battery & Components</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="row all-info-container">

                                                    <div class="col-md-12">
                                                        <div class="battery_condition">
                                                            <ul class="battery_list">
                                                                <li>Step 1: <span> Determine the Original (New) Battery Range</span></li>
                                                                <li>Step 2:<span> Check the Current Maximum Range</span></li>
                                                                <li>Step 3:<span> Calculate the Battery Degradation</span></li>
                                                            </ul>
                                                            <p>You can use the following formula to calculate the battery health percentage:</p>
                                                            <p>Battery Health(%)= Current Maximum Range Divided By Original Maximum Range ×100</p>
                                                            
                                                        </div>
                                                        <div class="battery_range">
                                                            <h4>Battery Health</h4>
                                                            <div class="range mt-5  ">
                                                                <input type="range" name="batterypoints"  id="batterypoints" min="0" max="100" value="{{ $car ? $car->batterypoints : '' }}" class="count" style="background-color: green;">


                                                                <div class="slice left">
                                                                    <div class="blocker"></div>
                                                                </div>
                                                                <div class="slice right">
                                                                    <div class="blocker"></div>
                                                                </div>
                                                                <span class="info">
                                                                    <span class="count">{{ $car ? $car->batterypoints : '0' }}</span>%
                                                                </span>
                                                                <div class="dial" tabindex="0"></div>
                                                            </div>
                                                            <div class="error-message">{{$errors->first('batterypoints')}}</div>
                                                            <span id="batterypoints_error" style="color: red;"></span>
                                                        </div>
                                                    
                                                    </div>
                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Charging Port</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_charging" value="Charging Port">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingport-pass" name="charging" id="charging_pass" value="Pass" type="radio" {{ old('charging') == 'Pass' || ($car && $car->charging == 'Pass') ? 'checked' : '' }} checked />
                                                                <label class="form-check-label label radio-btn-label" for="charging_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingport-damage" name="charging" id="charging_damage" value="Physical Damage" type="radio" {{ old('charging') == 'Physical Damage' || ($car && $car->charging == 'Physical Damage') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="charging_damage">Physical Damage</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingport-debris" name="charging" id="charging_debris" value="Excess Debris" type="radio" {{ old('charging') == 'Excess Debris' || ($car && $car->charging == 'Excess Debris') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="charging_debris">Excess Debris</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingport-faded" name="charging" id="charging_faded" value="Faded" type="radio" {{ old('charging') == 'Faded' || ($car && $car->charging == 'Faded') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="charging_faded">Faded</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingport-components" name="charging" id="charging_components" value="Charging Cable Damaged" type="radio" {{ old('charging') == 'Charging Cable Damaged' || ($car && $car->charging == 'Charging Cable Damaged') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="charging_components">Charging Cable Damaged</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingport-other" name="charging" id="charging_other" value="Other" type="radio" {{ old('charging') == 'Other' || ($car && $car->charging == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="charging_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input chargingport-other" id="charging_other" name="charging_other" placeholder="Please type another option here" type="text" value="{{ old('charging_other') ?? ($car ? $car->charging_other : '') }}" />
                                                            </div>
                                                            <div class="error-message">{{$errors->first('charging')}}</div>
                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Charging Port- Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="charging_images[]" id="charging_images" multiple />
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="charging-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('charging_images')}}</div>
                                                            <span id="charging_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "charging")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Charging Feature</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_charging_feature" value="Charging Feature">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingfeature-pass" name="charging_feature" id="charging_feature_pass" value="Pass" type="radio" {{ old('charging_feature') == 'Pass' || ($car && $car->charging_feature == 'Pass') ? 'checked' : '' }} checked/>
                                                                <label class="form-check-label label radio-btn-label" for="charging_feature_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingfeature-slow" name="charging_feature" id="charging_feature_slow" value="Charging Slow" type="radio" {{ old('charging_feature') == 'Charging Slow' || ($car && $car->charging_feature == 'Charging Slow') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="charging_feature_slow">Charging Slow</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingfeature-not" name="charging_feature" id="charging_feature_not" value="Not Charging" type="radio" {{ old('charging_feature') == 'Not Charging' || ($car && $car->charging_feature == 'Not Charging') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="charging_feature_not">Not Charging</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingfeature-inspect" name="charging_feature" id="charging_feature_inspect" value="Could Not Inspect, No Charger" type="radio" {{ old('charging_feature') == 'Could Not Inspect, No Charger' || ($car && $car->charging_feature == 'Could Not Inspect, No Charger') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="charging_feature_inspect">Could Not Inspect, No Charger</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-chargingfeature-other" name="charging_feature" id="charging_feature_other" value="Other" type="radio" {{ old('charging_feature') == 'Other' || ($car && $car->charging_feature == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="charging_feature_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input chargingfeature-other" id="charging_feature_other" name="charging_feature_other" placeholder="Please type another option here" type="text" value="{{ old('charging_feature_other') ?? ($car ? $car->charging_feature_other : '') }}" />
                                                            </div>
                                                            <div class="error-message">{{$errors->first('charging_feature')}}</div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Charging Feature Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="charging_feature_images[]" id="charging_feature_images" multiple />
                                                                
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="chargingfeatre-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('charging_feature_images')}}</div>
                                                            <span id="charging_feature_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "charging_feature")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5 mb-5">

                                                    <div class="col-md-12 electric_motor mb-5">
                                                            <h6>Electric Motor</h4>
                                                            <p>Error Messages: Pay attention to the dashboard for any warning lights or error messages related to the electric motor(s). These indicators can reveal issues with the motor system.
                                                    Driving Test: During a test drive, listen for unusual noises from the motor area and feel for unexpected vibrations or power fluctuations, which could indicate motor issues.</p>
                                                            
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="engine-upper">
                                                            <h6>Electric Motor</h6>
                                                            <br>
                                                            <input type="hidden" name="section_title_electric_motor" value="Electric Motor">
                                                            <div class="form-check">
                                                                <input class="form-check-input rb-electricmotor-pass" name="electric_motor" id="electric_motor_pass" value="Pass" type="radio" {{ old('electric_motor') == 'Pass' || ($car && $car->electric_motor == 'Pass') ? 'checked' : '' }} checked />
                                                                <label class="form-check-label label radio-btn-label" for="electric_motor_pass">Pass</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-electricmotor-lights" name="electric_motor" id="electric_motor_lights" value="Dashboard Warning Lights" type="radio" {{ old('electric_motor') == 'Dashboard Warning Lights' || ($car && $car->electric_motor == 'Dashboard Warning Lights') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="electric_motor_lights">Dashboard Warning Lights</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-electricmotor-noise" name="electric_motor" id="electric_motor_noise" value="Unusual Noise" type="radio" {{ old('electric_motor') == 'Unusual Noise' || ($car && $car->electric_motor == 'Unusual Noise') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="electric_motor_noise">Unusual Noise</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-electricmotor-vibration" name="electric_motor" id="electric_motor_vibration" value="Vibration" type="radio" {{ old('electric_motor') == 'Vibration' || ($car && $car->electric_motor == 'Vibration') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="electric_motor_vibration">Vibration</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-electricmotor-test" name="electric_motor" id="electric_motor_test" value="Could not test" type="radio" {{ old('electric_motor') == 'Could not test' || ($car && $car->electric_motor == 'Could not test') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="electric_motor_test">Could not test</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input rb-electricmotor-other" name="electric_motor" id="electric_motor_other" value="Other" type="radio" {{ old('electric_motor') == 'Other' || ($car && $car->electric_motor == 'Other') ? 'checked' : '' }}>
                                                                <label class="form-check-label label radio-btn-label" for="electric_motor_other">Other</label>
                                                                <br>
                                                                <input class="cstm-form_input electricmotor-other" id="electric_motor_other" name="electric_motor_other" placeholder="Please type another option here" type="text" value="{{ old('electric_motor_other') ?? ($car ? $car->electric_motor_other : '') }}" />
                                                            </div>
                                                            <div class="error-message">{{$errors->first('electric_motor')}}</div>             
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="fault-photo">
                                                            <label>Electric Motor Fault - Photo</label>
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="electric_motor_images[]" id="electric_motor_images" multiple />
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="electric-motor-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('electric_motor_images')}}</div>
                                                            <span id="electric_motor_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "electric_motor")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5">

                                                </div>
                                                <div class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                                
                                            </form>
                                        </div> 
                                        

                                    <!----------- steps 15 form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="step14">
                                            
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_form15') : route('inspector.store_car_form15') }}" method="POST"  name="form15" enctype="multipart/form-data" id="form15">
                                                @csrf 
                                                <input type="hidden" name="step" value="15">
                                                <h2 class="text-center">Frunk & Trunk</h2>
                                                <hr class="mt-5 mb-5">
                                                <div class="all-info-container">
                                                <input type="hidden" name="section_title_frunk_trunk" value="Frunk & Trunk Form 15">

                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <label>Frunk & Trunk Images</label>
                                                            
                                                            <div class="form-group text-center image_upload cstm-file-upload mt-3">
                                                                <input type="file" class="cstm-file-upload" name="frunk_trunk_images[]" id="frunk_trunk_images" multiple  />
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="frunktrunk-img-preview"></div>
                                                            <div class="error-message">{{$errors->first('frunk_trunk_images')}}</div>
                                                            <span id="frunk_trunk_images_error" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    @if($carmedia && $carmedia->isNotEmpty())
                                                        <div class="col-md-12 mt-5 mb-4">
                                                            @foreach($carmedia as $media)
                                                                @if($media->type === "frunk_trunk")
                                                                    @php
                                                                        $images = explode(',', $media->images);
                                                                    @endphp
                                                                    @foreach($images as $img)
                                                                        @if(!empty($img)) <!-- Check if image URL is not empty -->
                                                                            <div class="image-container" data-section-title="{{ $media->type }}">
                                                                                <img src="{{ asset($img) }}" alt="Car Image" width="150px" height="80px">
                                                                                <a href="#" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $media->id }}" data-img="{{ $img }}" data-section-title="{{ $media->type }}">X</a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <hr class="mt-5">
                                                </div>

                                                <div class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                    <a href="#"><button type="submit"  class="default-btn Sbmit-btn">Continue to next step</button></a>
                                                </div>
                                            </form>
                                        </div> 

                                    <!---------------- end new steps --------------->


                                    <!----------- step end form ---------------->

                                        <div class="tab-pane" role="tabpanel" id="End">           
                                            <form action="{{ auth()->user()->type == 'admin' ? route('admin.store_car_end') : route('inspector.store_car_end') }}" method="POST"  name="form16" enctype="multipart/form-data" id="form16">
                                                @csrf 
                                                <input type="hidden" name="step" value="16">
                                                    <h5 class="text-center">Exterior Photos</h5> 
                                                <hr class="mt-5 mb-5"> 
                                                <div class="all-info-container">
                                                    <div class="row">
                                                        <div class="col-md-12 mt-5">
                                                            <label for="">Vehicle Summary</label>
                                                            <div class="vehicle-group">
                                                                <span class="input-group-text">With textarea</span> 
                                                                <textarea class="form-control" aria-label="With textarea" name="summary"  id="summary"  value="" placeholder="What do you think about the car overall? What are the main issues to worry about? How was the test drive? Recommended questions to ask the seller?" >{{ $car ? $car->summary : old('summary') }}</textarea>
                                                                <div class="error-message">{{$errors->first('summary')}}</div>
                                                                <span id="summary_error" style="color: red;"></span>
                                                            </div>
                                                        </div>
                                                    
                                                        <hr class="mt-5 mb-5">

                                                        <div class="col-md-12">
                                                            <label for="">Terms of Service</label>
                                                            <div class="terms-group mt-2">
                                                                <p>All services from Car Arbab are provided on an "as is, with all defects" and "as available" basis without warranties of any kind, either expressed or implied, including without limitation, warranties of title, non-infringement, or implied warranties of merchantability or fitness for a particular purpose. Nothing in these terms or in any description of products or services in the services shall constitute a representation or warranty with respect to such products or services.</p>
                                                                <p>The inspection of the vehicle described in this report is external and we are unable to accept responsibility for failure to identify defects not present or apparent at the time of the inspection. Odometer readings may have been tampered with, although we report any signs that we notice of this happening during inspection. You acknowledge, by your use of the services, that such use is at your sole risk. In the event of dissatisfaction or a complaint, we reserve the right to re-examine the vehicle prior to any rectifications to the vehicle. You agree that Car Arbab liability is limited to refunding the price you pay for the inspection in the event you are dissatisfied with Car Arbab service, or injuries occur due to an unreported defect in the vehicle. All requests should be sent to hello@Cararbab.com within 7 days notice of receiving the report.</p>
                                                                <p>in no event shall either Car Arbab or its affiliates or agents be liable for any direct, indirect, punitive, incidental, special or consequential damages arising out of or in any way connected with the use of the services, whether based on contract, tort, strict liability or otherwise, even if advised of the possibility of any such damages.</p>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-5">
                                                    </div>

                                                    <!-- <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="repair_cost">Repair Cost</label>
                                                            <input type="number" class="form-control" id="repair_cost" name="repair_cost" placeholder="Repair Cost" value="{{ $car ? $car->repair_cost : old('repair_cost') }}" >
                                                        </div> 

                                                        <div class="col">
                                                            <label for="Buy Now">Buy Now</label>
                                                            <input type="number" class="form-control" id="buy_now" name="buy_now" placeholder="Buy Now Cost" value="{{ $car ? $car->buy_now : old('buy_now') }}" >
                                                        </div> 
                                                    </div> -->
                                                    <!-- <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="Estimated Market Value">Estimated Market Value</label>
                                                            <input type="number" class="form-control" id="estimated_market_value" placeholder="Estimated Market Cost" name="estimated_market_value" value="{{ $car ? $car->estimated_market_value : old('estimated_market_value') }}" >
                                                        </div> 

                                                        <div class="col">
                                                            <label for="reserve_price">Reserve Price</label>
                                                            <input type="number" class="form-control" id="reserve_price" name="reserve_price" placeholder="Reserve Price" value="{{ $car ? $car->reserve_price : old('reserve_price') }}" >
                                                        </div> 
                                                    </div> -->

                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="warranty cost">Warranty Cost</label>
                                                            <input type="number" class="form-control" id="warranty_cost"  name="warranty_cost" placeholder="Warranty Cost" value="{{ $car ? $car->warranty_cost : old('warranty_cost') }}" >
                                                        </div> 

                                                        <div class="col">
                                                            <label for="warranty_period">Warranty Period</label>
                                                            <input type="number" class="form-control" id="warranty_period" name="warranty_period" placeholder="Warranty Cost" value="{{ $car ? $car->warranty_period : old('warranty_period') }}" >
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="features_availability">INTERIOR</label>
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <label for="air_conditioner"> Air Conditioner </label>
                                                                    <input class="form-check-input" type="checkbox" id="air_conditioner" name="air_conditioner" value="1" {{ $car && $car->air_conditioner == 1 ? 'checked' : '' }}>
                                                   
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="digital_odometer"> Digital Odometer </label>
                                                                    <input class="form-check-input" type="checkbox" id="digital_odometer" name="digital_odometer" value="1" {{ $car && $car->digital_odometer == 1 ? 'checked' : '' }}>
                                                          
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="heater"> Heater </label>
                                                                    <input class="form-check-input" type="checkbox" id="heater" name="heater" value="1" {{ $car && $car->heater == 1 ? 'checked' : '' }}>
                                                     
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="leather_seats_interior"> Leather Seats </label>
                                                                    <input class="form-check-input" type="checkbox" id="leather_seats_interior" name="leather_seats_interior" value="1" {{ $car && $car->leather_seats_interior == 1 ? 'checked' : '' }}>
                                                        
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="tachometer"> Tachometer </label>
                                                                    <input class="form-check-input" type="checkbox" id="tachometer" name="tachometer" value="1" {{ $car && $car->tachometer == 1 ? 'checked' : '' }}>
                                                              
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="panoramic_moonroof"> Panoramic Moonroof </label>
                                                                    <input class="form-check-input" type="checkbox" id="panoramic_moonroof" name="panoramic_moonroof" value="1" {{ $car && $car->panoramic_moonroof == 1 ? 'checked' : '' }}>
                                                       
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="touchscreen_display"> Touchscreen Display </label>
                                                                    <input class="form-check-input" type="checkbox" id="touchscreen_display" name="touchscreen_display" value="1" {{ $car && $car->touchscreen_display == 1 ? 'checked' : '' }}>
                                                     
                                                                </div>
                                                            </div>
                                                        </div>
                                                     
                                                        <div class="col">
                                                      
                                                            <div class="form-group">
                                                            <label for="safety">SAFETY</label>
                                                                <div class="form-check">
                                                                    <label for="anti_lock_bracking"> Anti-lock Braking </label>
                                                                    <input class="form-check-input" type="checkbox" id="anti_lock_bracking" name="anti_lock_bracking" value="1" {{ $car && $car->anti_lock_bracking == 1 ? 'checked' : '' }}>
                                                              
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="brake_assist"> Brake Assist </label>
                                                                    <input class="form-check-input" type="checkbox" id="brake_assist" name="brake_assist" value="1" {{ $car && $car->brake_assist == 1 ? 'checked' : '' }}>
                                                          
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="child_safety_locks"> Child Safety Locks </label>
                                                                    <input class="form-check-input" type="checkbox" id="child_safety_locks" name="child_safety_locks" value="1" {{ $car && $car->child_safety_locks == 1 ? 'checked' : '' }}>
                                                                
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="driver_air_bag"> Driver Air Bag </label>
                                                                    <input class="form-check-input" type="checkbox" id="driver_air_bag" name="driver_air_bag" value="1" {{ $car && $car->driver_air_bag == 1 ? 'checked' : '' }}>
                                                      
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="power_door_locks">  Power Door Locks </label>
                                                                    <input class="form-check-input" type="checkbox" id="power_door_locks" name="power_door_locks" value="1" {{ $car && $car->power_door_locks == 1 ? 'checked' : '' }}>
                                                             
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="stability_control"> Stability Control </label>
                                                                    <input class="form-check-input" type="checkbox" id="stability_control" name="stability_control" value="1" {{ $car && $car->stability_control == 1 ? 'checked' : '' }}>
                                                                 
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="traction_control">Traction Control </label>
                                                                    <input class="form-check-input" type="checkbox" id="traction_control" name="traction_control" value="1" {{ $car && $car->traction_control == 1 ? 'checked' : '' }}>
                                                 
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                    </div> 
                                                    <div class="row mt-5">
                                                        <div class="col">
                                                            <label for="features_availability">EXTERIOR</label>
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <label for="fog_lights_front"> Fog Lights Front </label>
                                                                    <input class="form-check-input" type="checkbox" id="fog_lights_front" name="fog_lights_front" value="1" {{ $car && $car->fog_lights_front == 1 ? 'checked' : '' }}>
                                                   
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="rain_sesing_wiper">  Rain Sensing Wiper </label>
                                                                    <input class="form-check-input" type="checkbox" id="rain_sesing_wiper" name="rain_sesing_wiper" value="1" {{ $car && $car->rain_sesing_wiper == 1 ? 'checked' : '' }}>
                                                          
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="rear_spoiler"> Rear Spoiler </label>
                                                                    <input class="form-check-input" type="checkbox" id="rear_spoiler" name="rear_spoiler" value="1" {{ $car && $car->rear_spoiler == 1 ? 'checked' : '' }}>
                                                     
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="windows_electric"> Windows - Electric </label>
                                                                    <input class="form-check-input" type="checkbox" id="windows_electric" name="windows_electric" value="1" {{ $car && $car->windows_electric == 1 ? 'checked' : '' }}>
                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                     
                                                        <div class="col">
                                                      
                                                            <div class="form-group">
                                                            <label for="features_availability">COMFORT & CONVENIENCE</label>
                                                                <div class="form-check">
                                                                    <label for="android_auto">Android Auto</label>
                                                                    <input class="form-check-input" type="checkbox" id="android_auto" name="android_auto" value="1" {{ $car && $car->android_auto == 1 ? 'checked' : '' }}>
                                                              
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="digital_odometer_cc">Digital Odometer</label>
                                                                    <input class="form-check-input" type="checkbox" id="digital_odometer_cc" name="digital_odometer_cc" value="1" {{ $car && $car->digital_odometer_cc == 1 ? 'checked' : '' }}>
                                                          
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="heater_cc">Heater</label>
                                                                    <input class="form-check-input" type="checkbox" id="heater_cc" name="heater_cc" value="1" {{ $car && $car->heater_cc == 1 ? 'checked' : '' }}>
                                                                
                                                                </div>
                                                                <div class="form-check">
                                                                    <label for="leather_seats_cc">Leather Seats</label>
                                                                    <input class="form-check-input" type="checkbox" id="leather_seats_cc" name="leather_seats_cc" value="1" {{ $car && $car->leather_seats_cc == 1 ? 'checked' : '' }}>
                                                      
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div> 
                                                
                                                <div class="list-inline pull-right">
                                                     <li><button type="button" class="default-btn prev-step">Back</button></li>

                                                    <a href="#"><button type="submit"  class="default-btn Sbmit-btn">Finish</button></a>
                                                </div>
                                            </form>  
                                        </div> 
                                            
                                        <div class="clearfix"></div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    // $(document).ready(function() {
        
    //     var color = "#000000";
    //     var context = $("canvas")[0].getContext("2d");
    //     var canvas = $("canvas");
    //     var lastEvent;
    //     var mouseDown = false;
    //     var weight = "3";

    //     // //Bind weight val to selection on click
    //     var updateWeight = function() {
    //         return weight;
    //     };

    //     //Draw on the canvas on mouse events
    //     canvas.mousedown(function(e) {
    //         lastEvent = e;
    //         mouseDown = true;
    //     }).mousemove(function(e) {
    //         if (mouseDown) {
    //             context.beginPath();
    //             context.moveTo(lastEvent.offsetX, lastEvent.offsetY);
    //             context.lineTo(e.offsetX, e.offsetY);
    //             context.strokeStyle = color;
    //             context.lineWidth = updateWeight();
    //             context.stroke();
    //             lastEvent = e;
    //         }
    //     }).mouseup(function() {
    //         mouseDown = false;
    //     }).mouseleave(function() {
    //         canvas.mouseup();
    //     });

    //     //Download your drawing
    //     var downloadImg = function() {
    //         var img = canvas[0].toDataURL("image/png");
    //         var $imgLink = $("#download").attr("href", img);
    //     }

    //     var clearSig = function() {
    //         context.clearRect(0, 0, 300, 200);
    //     }

    //     // Prevent default behavior of the button click event
    //     $("#download").click(function(e) {
    //         e.preventDefault();
    //         downloadImg();
    //     });

    //     $("#clearSig").click(function(e) {
    //         e.preventDefault();
    //         clearSig();
    //         saveImageDataToHiddenInput();
    //     });

      
    //     // ----------------------------------------------


    //     function download(canvas, filename) {
    //         var lnk = document.createElement('a'),
    //             e;
    //         lnk.download = filename;
    //         lnk.href = canvas.toDataURL("image/png;base64");

    //         if (document.createEvent) {
    //             e = document.createEvent("MouseEvents");
    //             e.initMouseEvent("click", true, true, window,
    //                 0, 0, 0, 0, 0, false, false, false,
    //                 false, 0, null);

    //             lnk.dispatchEvent(e);
    //         } else if (lnk.fireEvent) {
    //             lnk.fireEvent("onclick");
    //         }
    //     }

    //     // Function to save the image data to the hidden input field
    //     function saveImageDataToHiddenInput() {
    //         var imageData = canvas[0].toDataURL("image/png");

    //         console.log(imageData);
    //         $("#signatureData").val(imageData); // Set the value of the hidden input field
    //     }
        
    //     // Call saveImageToServer() function when you want to save the image
      

    //     $("#saveform1").submit(function(e) {
    //         e.preventDefault();
    //         saveImageDataToHiddenInput(); // This should save the signature data before form submission
    //     });

    // });

    $(function() {
    var color = "#000000";
    var context = $("#canvas")[0].getContext("2d");
    var canvas = $("#canvas");
    var lastEvent;
    var mouseDown = false;
    var weight = "3";
    var signatureFilled = false;

    // Function to update signature data
    function updateSignatureData() {
        var signatureData = canvas[0].toDataURL("image/png");
        $("#signatureData").val(signatureData);
        signatureFilled = true;
    }

    // Bind mouse events for drawing on the canvas
    canvas.mousedown(function(e) {
        lastEvent = e;
        mouseDown = true;
    }).mousemove(function(e) {
        if (mouseDown) {
            context.beginPath();
            context.moveTo(lastEvent.offsetX, lastEvent.offsetY);
            context.lineTo(e.offsetX, e.offsetY);
            context.strokeStyle = color;
            context.lineWidth = weight;
            context.stroke();
            lastEvent = e;
        }
    }).mouseup(function() {
        mouseDown = false;
        updateSignatureData(); 
    }).mouseleave(function() {
        canvas.mouseup(); 
    });

    // Event handler for clearing signature on "Clear" button click
    $("#clearSig").click(function(e) {
        e.preventDefault();
        if (signatureFilled) {
            clearSignature();
            signatureFilled = false;
        }
    });

    // Function to clear signature
    function clearSignature() {
        context.clearRect(0, 0, canvas[0].width, canvas[0].height);
        $("#signatureData").val(""); 
    }

    // Bind form submission to update signature data before submission
    $("#saveform1").submit(function(e) {
        if (signatureFilled) {
            updateSignatureData();
        }
    });
});

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.bar').on('click', function() {

            var url;

            @if(auth()->check())
                @if(auth()->user()->type == 'admin')
                    url = '{{ route('admin.store_car_form2.battery_Store') }}';
                @elseif(auth()->user()->type == 'inspector')
                    url = '{{ route('inspector.store_car_form2.battery_Store') }}';
                @endif
            @endif

            var powerValue = $(this).data('power');
            $.ajax({
                url: url,
                method: 'POST',
                data: { powerValue: powerValue },
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(data) {
                  
                },
                error: function(xhr, status, error) {
                   
                }
            });
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('#veh_fueltype_id').change(function() {
            var selectedFuelType = $(this).val();
            if (selectedFuelType == '3') {
                $('#no_of_cylinder').closest('.col').hide();
                $('#vehicle_transmission_id').closest('.col').hide();
                $('#cc').closest('.col').hide();
                
            } else {
                $('#no_of_cylinder').closest('.col').show();
                $('#vehicle_transmission_id').closest('.col').show();
                $('#cc').closest('.col').show();

            }
        });
    });
</script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// $(document).ready(function() {
//     $(document).on('click', '.remove-image', function(e) {
//         e.preventDefault();
//         var imageId = $(this).data('image-id');
//         var imageUrl = $(this).data('img');
//        var sectionTitle = $(this).data('section-title');
//         var imageContainer = $(this).closest('.image-container'); // Get reference to the image container

      
//         $.ajax({
//             type: 'POST',
//             url: '{{ route("admin.delete_images") }}',
//             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//             data: {
//                 image_id: imageId,
//                 image_url: imageUrl,
//                 section_title: sectionTitle 
//             },
//             success: function(response) {
//                 // Remove the image container from the DOM
//                 imageContainer.remove();
//             },
//             error: function(xhr, status, error) {
                   
//                 }
//         });
//     });
// });



$(document).ready(function() {
    $(document).on('click', '.remove-image', function(e) {
        e.preventDefault();
        var imageId = $(this).data('image-id');
        var imageUrl = $(this).data('img');
        var sectionTitle = $(this).data('section-title');
        var imageContainer = $(this).closest('.image-container'); 
        
        var url;

        @if(auth()->check())
            @if(auth()->user()->type == 'admin')
                url = '{{ route("admin.delete_images") }}';
            @elseif(auth()->user()->type == 'inspector')
                url = '{{ route("inspector.delete_images") }}';
            @endif
        @endif

        // Display confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to delete this image?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
            
                $.ajax({
                    type: 'POST',
                    url: url,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        image_id: imageId,
                        image_url: imageUrl,
                        section_title: sectionTitle 
                    },
                    success: function(response) {
                        // On success, remove the image container from the DOM
                        
                        imageContainer.remove();
                    },
                    error: function(xhr, status, error) {
                        // Handle error if needed
                    }
                });
            } else {
                // If user cancels deletion, do nothing
                console.log('Deletion canceled.');
            }
        });
    });
});

</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
    $(document).ready(function() {
        var input = document.querySelector("#seller_phone_no");
        var countryInput = document.querySelector("#country_code");

        var iti = window.intlTelInput(input, {
            separateDialCode: true
        });

        input.addEventListener('input', function() {

            var selectedCountryData = iti.getSelectedCountryData();
            if (selectedCountryData) {
                
                countryInput.value = '+' + selectedCountryData.dialCode;
            }
        });
    });
</script>
@endsection