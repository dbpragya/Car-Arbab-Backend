

<!DOCTYPE html>
<html lang="en">

<head>
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <!-- Css Meta Url-css Style Include -->

    @include('admin.include.css')
    <!-- /Css Include -->
    <!-- dropify -->
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->

   
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <style>
    .error-message {
    color: red; 
    font-weight: bold; 
    }
    </style>

</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">


        <!-- Sidebar Include -->
        @include('admin.include.sidebar')
        <!-- /Sidebar Include -->

        <div class="app-container">

            <!-- Sidebar Include -->
            @include('admin.include.header')
            <!-- /Sidebar Include -->
            <div class="app-content">
                @yield('content')
            </div>
        </div>
    </div>
    <!--signature--->
    <!-- <script>
        function updateSignatureData() {
        var canvas = document.getElementById("canvas");
        var signatureData = canvas.toDataURL("image/png");
        document.getElementById("signatureData").value = signatureData;
    }
        </script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){
       
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        var canvas_data = document.getElementById("signature_data");

        var painting = false;

        function startPosition(e){
            painting = true;
            draw(e);
        }

        function endPosition(){
            painting = false;
            ctx.beginPath();
        }

        function draw(e){
            if(!painting) return;
            ctx.lineWidth = 2;
            ctx.lineCap = "round";

            ctx.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);

            // Update hidden input field with the data
            canvas_data.value = canvas.toDataURL();
        }

        canvas.addEventListener("mousedown", startPosition);
        canvas.addEventListener("mouseup", endPosition);
        canvas.addEventListener("mousemove", draw);

        $('#clearSig').on('click', function(e){
            e.preventDefault();
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            canvas_data.value = '';
        });
    });
</script> -->

    <!-- Css Include -->
    
    @include('admin.include.js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
   
    <!-- jquery file -->
    <!-- /Css Include -->
    
        <script>
         // ------------step-wizard-------------
         $(document).ready(function() {
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

                var target = $(e.target);

                if (target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function(e) {

                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);

            });
            $(".prev-step").click(function(e) {

                var active = $('.wizard .nav-tabs li.active');
                prevTab(active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }


        $('.nav-tabs').on('click', 'li', function() {
            $('.nav-tabs li.active').removeClass('active');
            $(this).addClass('active');
        });

        $(".flatpickr1").flatpickr();
        $(".flatpickr2").flatpickr();
        $(".flatpickr3").flatpickr();
        $(".flatpickr4").flatpickr();
    </script>

  
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script>
 
    $(document).ready(function(){
       
        $("select").change(function(){
           
            var selectedValue = $(this).val();
           
            if(selectedValue == 3) {
                $("li.disabled").filter(function() {
                    return $(this).find("a").attr("href") === "#step2" || $(this).find("a").attr("href") === "#step3" || $(this).find("a").attr("href") === "#step10";
                }).hide();
            } else {
                $("li.disabled").show();
            }
        });
    });
</script> -->

 <!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
     //js validatoion Form 1
    document.getElementById("saveform1").addEventListener("click", function (event) {

            var sellerphoneno = document.getElementById('seller_phone_no').value;
            var Image = document.getElementById('upload-img').value;
            var cusFirstName = document.getElementById('cus_first_name').value.trim();
            var cusLastName = document.getElementById('cus_last_name').value.trim();
            var sellerTypes = document.querySelectorAll('.seller-type');
             var sellerTypeSelected = false;
            var cusDate = document.getElementById('cus_date').value;
            var cusTime = document.getElementById('cus_time').value;
            var vehCarMake = document.getElementById('veh_car_make').value;
            var vehCarModel = document.getElementById('veh_car_model').value;
            var vehYear = document.getElementById('veh_year').value;
            var vehicleEngineSize = document.getElementById('vehicle_engine_size').value;
            var vehicleRegionalSpec = document.getElementById('vehicle_regional_spec').value;
            var vehMileage = document.getElementById('veh_mileage').value;
            var vehicleTransmission = document.getElementById('vehicle_transmission').value;
            var vehFuelType = document.getElementById('veh_fueltype').value;
            var vehicleInterior = document.getElementById('vehicle_interior').value;
            var vehVinNumber = document.getElementById('veh_vin_number').value;
            var vehNoOfKeys = document.getElementById('veh_no_of_keys').value;
            var vehicleapretire = document.getElementById('vehicle_apretire').value;
            sellerTypes.forEach(function (sellerType) {
            if (sellerType.checked) {
                sellerTypeSelected = true;
                }
             });

            if (Image === '' || sellerphoneno === '' || cusFirstName === '' || cusLastName === '' || !sellerTypeSelected || cusDate === '' || cusTime === '' || vehCarMake === '' || vehCarModel === '' || vehYear === '' || vehicleEngineSize === '' || vehicleRegionalSpec === '' || vehMileage === '' || vehicleTransmission === '' || vehFuelType === '' || vehicleInterior === '' || vehVinNumber === '' || vehNoOfKeys === 'Please Select' || vehicleapretire === '') {
          
                if (cusFirstName === '') {
                    document.getElementById("cus_first_name_error").innerHTML = "First name is required";
                } else {
                    document.getElementById("cus_first_name_error").innerHTML = ""; 
                }

                document.getElementById("seller_type_id_error").innerHTML = !sellerTypeSelected ? "Type Of Seller is required" : "";

                if (Image === '') {
                    document.getElementById("image_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("image_error").innerHTML = ""; 
                }

                
                if (cusLastName === '') {
                    document.getElementById("cus_last_name_error").innerHTML = "Last name is required";
                } else {
                    document.getElementById("cus_last_name_error").innerHTML = ""; 
                }

                if (sellerphoneno === '') {
                    document.getElementById("seller_phone_no_error").innerHTML = "Phone number is required";
                } else {
                    document.getElementById("seller_phone_no_error").innerHTML = ""; 
                }
                                
                if (cusDate === '') {
                    document.getElementById("cus_date_error").innerHTML = "Please select date";
                } else {
                    document.getElementById("cus_date_error").innerHTML = ""; 
                }
                
                if (cusTime === '') {
                    document.getElementById("cus_time_error").innerHTML = "Please Select time";
                } else {
                    document.getElementById("cus_time_error").innerHTML = ""; 
                }
                
                if (vehCarMake === '') {
                    document.getElementById("veh_car_make_error").innerHTML = "Please select car make";
                } else {
                    document.getElementById("veh_car_make_error").innerHTML = ""; 
                }
                
                if (vehCarModel === '') {
                    document.getElementById("veh_car_model_error").innerHTML = "Vehicle car model is required";
                } else {
                    document.getElementById("veh_car_model_error").innerHTML = ""; 
                }
        
                if (vehYear === '') {
                    document.getElementById("veh_year_error").innerHTML = "Year is required";
                } else {
                    document.getElementById("veh_year_error").innerHTML = ""; 
                }
                
                if (vehicleEngineSize === '') {
                    document.getElementById("vehicle_engine_size_error").innerHTML = "Please select vehicle engine size";
                } else {
                    document.getElementById("vehicle_engine_size_error").innerHTML = ""; 
                }
                
                if (vehicleRegionalSpec === '') {
                    document.getElementById("vehicle_regional_spec_error").innerHTML = "Please select car vehicle regional spec";
                } else {
                    document.getElementById("vehicle_regional_spec_error").innerHTML = ""; 
                }
    
                if (vehMileage === '') {
                    document.getElementById("veh_mileage_error").innerHTML = "Vehicle Mileague is required";
                } else {
                    document.getElementById("veh_mileage_error").innerHTML = ""; 
                }
                
                if (vehicleTransmission === '') {
                    document.getElementById("vehicle_transmission_error").innerHTML = "Please select car vehicle transission";
                } else {
                    document.getElementById("vehicle_transmission_error").innerHTML = ""; 
                }
                
                if (vehFuelType === '') {
                    document.getElementById("veh_fueltype_error").innerHTML = "Please select car vehicle fuel type";
                } else {
                    document.getElementById("veh_fueltype_error").innerHTML = ""; 
                }
            
                if (vehicleInterior === '') {
                    document.getElementById("vehicle_interior_error").innerHTML = "Please select car vehicle interior";
                } else {
                    document.getElementById("vehicle_interior_error").innerHTML = ""; 
                }
                
                if (vehVinNumber === '') {
                    document.getElementById("veh_vin_number_error").innerHTML = "Vehicle vin number is required";
                } else {
                    document.getElementById("veh_vin_number_error").innerHTML = ""; 
                }
                
                if (vehNoOfKeys === '') {
                    document.getElementById("veh_no_of_keys_error").innerHTML = "Please Select vehicle no of keys";
                } else {
                    document.getElementById("veh_no_of_keys_error").innerHTML = ""; 
                }
                
                if (vehicleapretire === '') {
                    document.getElementById("vehicle_apretire_error").innerHTML = "Please select vehicle apretire";
                } else {
                    document.getElementById("vehicle_apretire_error").innerHTML = ""; 
                }
                
                event.preventDefault(); 
            } 
    });

    //form2
    document.getElementById("saveform2").addEventListener("click", function (event) {
 
            var EngineUpperCoverImage = document.getElementById('engine_upper_cover_images').value;
            var EngineShieldCoverImage = document.getElementById('engine_shield_cover_images').value;
            var EngineMountsImage = document.getElementById('engine_mounts_images').value;
            var BonnetHingeHolderImage = document.getElementById('bonnet_hinge_holder_images').value;
            var TurboPreferenceImage = document.getElementById('turbo_preference_images').value;
            var FenderLinerImage = document.getElementById('fender_liners_images').value;
            var DrivebeltpulleysImage = document.getElementById('drive_belt_pulleys_images').value;
            var EngineOilfillercapImage = document.getElementById('engine_oil_filler_cap_images').value;
            var RadiatorImage = document.getElementById('radiator_images').value;
            var EngineOilLeaksImage = document.getElementById('engine_oil_leaks_images').value;
            var EngineOilConditionImage = document.getElementById('engine_oil_condition_images').value;
            var CoolantConditionImage = document.getElementById('coolant_condition_images').value;
            var CoolantCapImage = document.getElementById('coolant_cap_images').value;            
            var HosesPipesImage = document.getElementById('hoses_pipes_images').value;    
            var ExhaustsystemImage = document.getElementById('exhaust_system_images').value;   
            var VisibleRust = document.getElementById('visible_rust_images').value; 
           
        
        
            if(EngineUpperCoverImage ===''  || EngineShieldCoverImage === ''|| EngineMountsImage === ''|| BonnetHingeHolderImage ==='' || TurboPreferenceImage===''||FenderLinerImage===''||DrivebeltpulleysImage===''||EngineOilfillercapImage==='' ||RadiatorImage===''||EngineOilLeaksImage ===''||EngineOilConditionImage === ''||CoolantConditionImage===''||CoolantCapImage===''||HosesPipesImage===''|| ExhaustsystemImage ==='' || VisibleRust ==='' ){
           

                if (EngineUpperCoverImage === '') {
                        document.getElementById("engine_upper_cover_images_error").innerHTML = "Image is required";
                } else {
                        document.getElementById("engine_upper_cover_images_error").innerHTML = ""; 
                }

             

                if(EngineShieldCoverImage === ''){

                    document.getElementById("engine_shield_cover_images_error").innerHTML = "Image is required";
                } else {
                        document.getElementById("engine_shield_cover_images_error").innerHTML = ""; 
                }

                if(EngineMountsImage === ''){

                    document.getElementById("engine_mounts_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("engine_mounts_images_error").innerHTML = ""; 
                }

                if(BonnetHingeHolderImage === ''){

                    document.getElementById("bonnet_hinge_holder_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("bonnet_hinge_holder_images_error").innerHTML = ""; 
                }
                
                if(TurboPreferenceImage === ''){

                document.getElementById("turbo_preference_images_error").innerHTML = "Image is required";
                } else {
                document.getElementById("turbo_preference_images_error").innerHTML = ""; 
                }
                if(FenderLinerImage === ''){

                    document.getElementById("fender_liners_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("fender_liners_images_error").innerHTML = ""; 
                }

                if(DrivebeltpulleysImage === ''){

                document.getElementById("drive_belt_pulleys_images_error").innerHTML = "Image is required";
                } else {
                document.getElementById("drive_belt_pulleys_images_error").innerHTML = ""; 
                }

                if(EngineOilfillercapImage === ''){

                document.getElementById("engine_oil_filler_cap_images_error").innerHTML = "Image is required";
                } else {
                document.getElementById("engine_oil_filler_cap_images_error").innerHTML = ""; 
                }
                if(RadiatorImage === ''){

                document.getElementById("radiator_images_error").innerHTML = "Image is required";
                } else {
                document.getElementById("radiator_images_error").innerHTML = ""; 
                }

                if(EngineOilLeaksImage === ''){

                document.getElementById("engine_oil_leaks_images_error").innerHTML = "Image is required";
                } else {
                document.getElementById("engine_oil_leaks_images_error").innerHTML = ""; 
                }

                if(EngineOilConditionImage === ''){

                document.getElementById("engine_oil_condition_images_error").innerHTML = "Image is required";
                } else {
                document.getElementById("engine_oil_condition_images_error").innerHTML = ""; 
                }

                if(CoolantConditionImage === ''){

                document.getElementById("coolant_condition_images_error").innerHTML = "Image is required";
                } else {
                document.getElementById("coolant_condition_images_error").innerHTML = ""; 
                }
                if(CoolantCapImage === ''){

                document.getElementById("coolant_cap_images_error").innerHTML = "Image is required";
                } else {
                document.getElementById("coolant_cap_images_error").innerHTML = ""; 
                }
                
                if(HosesPipesImage === ''){

                    document.getElementById("hoses_pipes_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("hoses_pipes_images_error").innerHTML = ""; 
                }

                if(ExhaustsystemImage === ''){

                    document.getElementById("exhaust_system_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("exhaust_system_images_error").innerHTML = ""; 
                }

                if(VisibleRust === ''){

                document.getElementById("visible_rust_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("visible_rust_images_error").innerHTML = ""; 
                }

                event.preventDefault();
            }
    });

    document.getElementById("saveform3").addEventListener("click", function (event) {
 
            var TransfluidImage = document.getElementById('fluid_level_condition_images').value;
            var TransfluidleakImage = document.getElementById('transmission_fluid_leaks_images').value;
            var TransgearImage = document.getElementById('gear_selector_images').value;

           if(TransfluidImage === ''|| TransfluidleakImage ===''|| TransgearImage ===''){

            if(TransfluidImage === ''){

            document.getElementById("fluid_level_condition_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("fluid_level_condition_images_error").innerHTML = ""; 
            }

            if(TransfluidleakImage === ''){

            document.getElementById("transmission_fluid_leaks_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("transmission_fluid_leaks_images_error").innerHTML = ""; 
            }
            if(TransgearImage === ''){

            document.getElementById("gear_selector_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("gear_selector_images_error").innerHTML = ""; 
            }
            event.preventDefault();
           }
    });

    //form 4
    document.getElementById("saveform4").addEventListener("click", function (event) {
          
            var frontsusImage = document.getElementById('front_suspension_images').value;
            var rearsusImage = document.getElementById('rear_suspension_images').value;
            var feontlefttyrImage = document.getElementById('front_left_tyre_images').value;
            var rearlefttyreImage = document.getElementById('rear_left_tyre_images').value;
            var rearrighttireImage = document.getElementById('rear_right_tyre_images').value;
            var frontrighttireImage = document.getElementById('front_right_tyre_images').value;

            var frontleftmanufac = document.getElementById('front_left_manufac').value;
            var frontleftdate = document.getElementById('front_left_date').value;
            var frontleftsize = document.getElementById('front_left_size').value;
            var frontleftcondition = document.getElementById('front_left_condition').value;

            var frontrightmanufac = document.getElementById('front_right_manufac').value;
            var frontrightdate = document.getElementById('front_right_date').value;
            var frontrightsize = document.getElementById('front_right_size').value;
            var frontrightcondition = document.getElementById('front_right_condition').value;
            
            var rearleftmanufac = document.getElementById('rear_left_manufac').value;
            var rearleftdate = document.getElementById('rear_left_date').value;
            var rearleftsize = document.getElementById('rear_left_size').value;
            var rearleftcondition = document.getElementById('rear_left_condition').value;

            var rearrightmanufac = document.getElementById('rear_right_manufac').value;
            var rearrightdate = document.getElementById('rear_right_date').value;
            var rearrightsize = document.getElementById('rear_right_size').value;
            var rearrightcondition = document.getElementById('rear_right_condition').value;

            var sparemanufac = document.getElementById('spare_manufac').value;
            var sparedate = document.getElementById('spare_date').value;
            var sparesize = document.getElementById('spare_size').value;
            var sparecondition = document.getElementById('spare_condition').value;
            
            var flbrand = document.getElementById('front_left_brand').value;
            var flrimcondition = document.getElementById('front_left_rim_condition').value;
            var frbrand = document.getElementById('front_right_brand').value;
            var frrimcondition = document.getElementById('front_right_rim_condition').value;
            var rlbrand = document.getElementById('rear_left_brand').value;
            var rlrimcondition = document.getElementById('rear_left_rim_condition').value;
            var rrbrand = document.getElementById('rear_right_brand').value;
            var rrrimcondition = document.getElementById('rear_right_rim_condition').value;
            var sparebrand = document.getElementById('spare_brand').value;
            var sparerimcondition = document.getElementById('spare_rim_condition').value;

            if(rrrimcondition === '' || rlbrand === '' || rlrimcondition === '' || rrbrand === '' || rrrimcondition === '' || sparebrand === '' || sparerimcondition === '' || flbrand === ''|| flrimcondition === '' ||frbrand === ''|| frrimcondition === '' || sparemanufac === '' ||  sparedate === '' || sparesize === '' || sparecondition === ''|| frontsusImage ==='' ||rearsusImage === '' || feontlefttyrImage === ''|| rearlefttyreImage === '' || rearrighttireImage === '' ||frontrighttireImage === ''|| frontleftmanufac === ''|| frontleftdate === ''||frontleftsize === '' ||frontleftcondition === '' || frontrightmanufac === ''|| frontrightdate === '' || frontrightsize === ''||frontrightcondition === ''|| rearleftmanufac === '' || rearleftdate === '' || rearleftsize === '' || rearleftcondition === '' || rearrightmanufac === ''|| rearrightdate === ''|| rearrightsize === ''||rearrightcondition === '' ){

               
                if(rrrimcondition === ''){

            document.getElementById("rear_right_rim_condition_error").innerHTML = "Image is required";
            } else {
                document.getElementById("rear_right_rim_condition_error").innerHTML = ""; 
            } 

                if(sparebrand === ''){

                document.getElementById("spare_brand_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("spare_brand_error").innerHTML = ""; 
                }
                if(sparerimcondition === ''){

                document.getElementById("spare_rim_condition_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("spare_rim_condition_error").innerHTML = ""; 
                }
                if(rrbrand === ''){

                document.getElementById("rear_right_brand_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("rear_right_brand_error").innerHTML = ""; 
                }
                if(rlrimcondition === ''){

                document.getElementById("rear_left_rim_condition_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("rear_left_rim_condition_error").innerHTML = ""; 
                }

                if(rlbrand === ''){

                document.getElementById("rear_left_brand_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("rear_left_brand_error").innerHTML = ""; 
                }

                if(frrimcondition === ''){

                document.getElementById("front_right_rim_condition_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("front_right_rim_condition_error").innerHTML = ""; 
                }

                if(frbrand === ''){

                document.getElementById("front_right_brand_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("front_right_brand_error").innerHTML = ""; 
                }

                if(flbrand === ''){

                document.getElementById("front_left_brand_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("front_left_brand_error").innerHTML = ""; 
                }

                if(flrimcondition === ''){

                document.getElementById("front_left_rim_condition_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("front_left_rim_condition_error").innerHTML = ""; 
                }

                if(sparemanufac === ''){

                document.getElementById("spare_manufac_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("spare_manufac_error").innerHTML = ""; 
                }

                if(sparedate === ''){

                document.getElementById("spare_date_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("spare_date_error").innerHTML = ""; 
                }

                if(sparesize === ''){

                document.getElementById("spare_size_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("spare_size_error").innerHTML = ""; 
                }
                if(sparecondition === ''){

                document.getElementById("spare_condition_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("spare_condition_error").innerHTML = ""; 
                }

                if(frontsusImage === ''){

                document.getElementById("front_suspension_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("front_suspension_images_error").innerHTML = ""; 
                }
                
                if(rearsusImage === ''){

                document.getElementById("rear_suspension_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("rear_suspension_images_error").innerHTML = ""; 
                }

                if(feontlefttyrImage === ''){

                document.getElementById("front_left_tyre_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("front_left_tyre_images_error").innerHTML = ""; 
                }

                if(rearlefttyreImage === ''){

                document.getElementById("rear_left_tyre_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("rear_left_tyre_images_error").innerHTML = ""; 
                }
                if(rearrighttireImage === ''){

                document.getElementById("rear_right_tyre_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("rear_right_tyre_images_error").innerHTML = ""; 
                }

                if(frontrighttireImage === ''){

                document.getElementById("front_right_tyre_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("front_right_tyre_images_error").innerHTML = ""; 
                }

                if(frontleftmanufac === ''){

                document.getElementById("front_left_manufac_error").innerHTML = "This field is required";
                } else {
                    document.getElementById("front_left_manufac_error").innerHTML = ""; 
                }
                if(frontleftdate === ''){

                document.getElementById("front_left_date_error").innerHTML = "This field is required";
                } else {
                    document.getElementById("front_left_date_error").innerHTML = ""; 
                }
                if(frontleftsize === ''){

                document.getElementById("front_left_size_error").innerHTML = "This field is required";
                } else {
                    document.getElementById("front_left_size_error").innerHTML = ""; 
                }
                if(frontleftcondition === ''){

                    document.getElementById("front_left_condition_error").innerHTML = "This field is required";
                } else {
                    document.getElementById("front_left_condition_error").innerHTML = ""; 
                }

                if(frontrightmanufac === ''){

                document.getElementById("front_right_manufac_error").innerHTML = "This field is required";
                } else {
                document.getElementById("front_right_manufac_error").innerHTML = ""; 
                }
                if(frontrightdate === ''){

                document.getElementById("front_right_date_error").innerHTML = "This field is required";
                } else {
                document.getElementById("front_right_date_error").innerHTML = ""; 
                }
                if(frontrightsize === ''){

                document.getElementById("front_right_size_error").innerHTML = "This field is required";
                } else {
                document.getElementById("front_right_size_error").innerHTML = ""; 
                }

                if(frontrightcondition === ''){

                document.getElementById("front_right_condition_error").innerHTML = "This field is required";
                } else {
                document.getElementById("front_right_condition_error").innerHTML = ""; 
                }

                if(rearleftmanufac === ''){

                document.getElementById("rear_left_manufac_error").innerHTML = "This field is required";
                } else {
                document.getElementById("rear_left_manufac_error").innerHTML = ""; 
                }
                if(rearleftdate === ''){

                document.getElementById("rear_left_date_error").innerHTML = "This field is required";
                } else {
                document.getElementById("rear_left_date_error").innerHTML = ""; 
                }
                if(rearleftsize === ''){

                document.getElementById("rear_left_size_error").innerHTML = "This field is required";
                } else {
                document.getElementById("rear_left_size_error").innerHTML = ""; 
                }
                if(rearleftcondition === ''){

                document.getElementById("rear_left_condition_error").innerHTML = "This field is required";
                } else {
                document.getElementById("rear_left_condition_error").innerHTML = ""; 
                }
                if(rearrightmanufac === ''){

                document.getElementById("rear_right_manufac_error").innerHTML = "This field is required";
                } else {
                document.getElementById("rear_right_manufac_error").innerHTML = ""; 
                }
                if(rearrightdate === ''){

                document.getElementById("rear_right_date_error").innerHTML = "This field is required";
                } else {
                document.getElementById("rear_right_date_error").innerHTML = ""; 
                }
                if(rearrightsize === ''){

                document.getElementById("rear_right_size_error").innerHTML = "This field is required";
                } else {
                document.getElementById("rear_right_size_error").innerHTML = ""; 
                }
                if(rearrightcondition === ''){

                document.getElementById("rear_right_condition_error").innerHTML = "This field is required";
                } else {
                document.getElementById("rear_right_condition_error").innerHTML = ""; 
                }

                event.preventDefault();
         }
    });

        // form 5 validations
    document.getElementById("saveform5").addEventListener("click", function (event) {

            var Keyremote = document.getElementById('key_remote_images').value;
            var Entertainment = document.getElementById('entertainment_system_images').value;
            var Windows = document.getElementById('windows_operation_images').value;
            var Seats = document.getElementById('seats_adjustment_images').value;
            var Doorlock = document.getElementById('door_lock_unlock_images').value;
            var Accontrol = document.getElementById('ac_control_cooling_images').value;
            var Centerconsole = document.getElementById('center_console_buttons_images').value;
            var Camera = document.getElementById('cameras_images').value;
            var Guages = document.getElementById('gauges_images').value;
            var RearView = document.getElementById('rear_view_side_mirror_elec_images').value;
            var Acgrills = document.getElementById('ac_grilles_images').value;
            var Starting = document.getElementById('starting_ignition_system_images').value;
            var Brake = document.getElementById('brake_lights_images').value;
            var Headlights = document.getElementById('headlights_images').value;
            var Foglights = document.getElementById('fog_lights_images').value;
            var Reverselights = document.getElementById('reverse_lights_images').value;
            var HighBeam = document.getElementById('high_beams_images').value;
            var Noofplates = document.getElementById('no_plates_lights_images').value;
            var Indicator = document.getElementById('indicators_hazards_images').value;
            var Wipers = document.getElementById('wipers_images').value;
            var Soft  = document.getElementById('soft_closing_doors_images').value;
            var Sunroof = document.getElementById('sunroof_moonroof_images').value;
            var Interior = document.getElementById('interior_lights_images').value;
            var Cruise = document.getElementById('cruise_control_images').value;

             if(Soft === '' ||Sunroof === '' ||Interior === '' || Cruise === '' || HighBeam === ''|| Noofplates === ''|| Indicator === ''|| Wipers === '' || Brake === '' ||Headlights === ''||Foglights === ''||Reverselights === '' ||RearView === '' || Acgrills === '' ||Starting === '' ||Centerconsole === '' || Camera === '' || Guages === '' || Keyremote ==='' || Entertainment === ''|| Windows === '' || Seats=== ''|| Doorlock === '' || Accontrol === ''){

    
                if(Soft === ''){

                document.getElementById("soft_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("soft_images_error").innerHTML = ""; 
                }
                if(Sunroof === ''){

                document.getElementById("sunroof_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("sunroof_images_error").innerHTML = ""; 
                }
                if(Interior === ''){

                document.getElementById("interior_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("interior_images_error").innerHTML = ""; 
                }
                if(Cruise === ''){

                document.getElementById("cruise_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("cruise_images_error").innerHTML = ""; 
                }
                if(HighBeam === ''){

                document.getElementById("high_beams_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("high_beams_images_error").innerHTML = ""; 
                }
                if(Noofplates === ''){

                document.getElementById("no_plates_lights_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("no_plates_lights_images_error").innerHTML = ""; 
                }
                if(Indicator === ''){

                document.getElementById("indicators_hazards_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("indicators_hazards_images_error").innerHTML = ""; 
                }
                if(Wipers === ''){

                document.getElementById("wipers_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("wipers_images_error").innerHTML = ""; 
                }

                if(Headlights === ''){

                document.getElementById("headlights_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("headlights_images_error").innerHTML = ""; 
                }
                if(Foglights === ''){

                document.getElementById("fog_lights_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("fog_lights_images_error").innerHTML = ""; 
                }
                if(Reverselights === ''){

                document.getElementById("reverse_lights_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("reverse_lights_images_error").innerHTML = ""; 
                }
                if(Brake === ''){

                document.getElementById("brake_lights_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("brake_lights_images_error").innerHTML = ""; 
                }

                if(RearView === ''){

                document.getElementById("rear_view_side_mirror_elec_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("rear_view_side_mirror_elec_images_error").innerHTML = ""; 
                }
                if(Acgrills === ''){

                document.getElementById("ac_grilles_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("ac_grilles_images_error").innerHTML = ""; 
                }
                if(Starting === ''){

                document.getElementById("starting_ignition_system_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("starting_ignition_system_images_error").innerHTML = ""; 
                }
                if(Centerconsole === ''){

                document.getElementById("center_console_buttons_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("center_console_buttons_images_error").innerHTML = ""; 
                }
                if(Camera === ''){

                document.getElementById("cameras_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("cameras_images_error").innerHTML = ""; 
                }
                if(Guages === ''){

                document.getElementById("gauges_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("gauges_images_error").innerHTML = ""; 
                }
                if(Accontrol === ''){

                document.getElementById("ac_control_cooling_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("ac_control_cooling_images_error").innerHTML = ""; 
                }

                if(Doorlock === ''){

                document.getElementById("door_lock_unlock_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("door_lock_unlock_images_error").innerHTML = ""; 
                }
                if(Seats === ''){

                document.getElementById("seats_adjustment_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("seats_adjustment_images_error").innerHTML = ""; 
                }
                 if(Windows === ''){

                document.getElementById("windows_operation_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("windows_operation_images_error").innerHTML = ""; 
                }
                if(Entertainment === ''){

                document.getElementById("entertainment_system_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("entertainment_system_images_error").innerHTML = ""; 
                }
                if(Keyremote === ''){

                document.getElementById("key_remote_images_error").innerHTML = "Image is required";
                } else {
                    document.getElementById("key_remote_images_error").innerHTML = ""; 
                }

                 event.preventDefault();
             }  
     });
        // form 6 validations

     document.getElementById("saveform6").addEventListener("click", function (event) {
       
        var Roof = document.getElementById('roof_lining_images').value;
        var Rear = document.getElementById('rear_view_mirror_images').value;
        var Sterring = document.getElementById('steering_wheel_upholstery_images').value;
        var Saets = document.getElementById('seats_upholstery_images').value;
        var Gear = document.getElementById('gear_lever_images').value;
        var Trunk = document.getElementById('trunk_lining_images').value;
        var Armest = document.getElementById('amrest_side_pockets_images').value;
        var Dashboard= document.getElementById('dashboard_images').value;
        var Floormates= document.getElementById('floor_mates_images').value;
        var Door = document.getElementById('doors_images').value;
        var Windowscreen= document.getElementById('front_windscreen_images').value;
        var Rearwindow= document.getElementById('rear_windscreen_images').value;
         if( Door === '' || Windowscreen === '' || Rearwindow === '' ||Floormates === '' ||Dashboard === '' || Roof ==='' || Rear === '' ||Sterring === '' || Saets === '' || Gear === '' || Trunk === '' || Armest === ''){
            
            if(Windowscreen === ''){

            document.getElementById("front_windscreen_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("front_windscreen_images_error").innerHTML = ""; 
            }
            if(Rearwindow === ''){

            document.getElementById("rear_windscreen_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("rear_windscreen_images_error").innerHTML = ""; 
            }
            if(Door === ''){

            document.getElementById("doors_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("doors_images_error").innerHTML = ""; 
            }
            if(Floormates === ''){

            document.getElementById("floor_mates_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("floor_mates_images_error").innerHTML = ""; 
            }
            if(Dashboard === ''){

            document.getElementById("dashboard_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("dashboard_images_error").innerHTML = ""; 
            }
            if(Armest === ''){

            document.getElementById("amrest_side_pockets_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("amrest_side_pockets_images_error").innerHTML = ""; 
            }
            if(Trunk === ''){

            document.getElementById("trunk_lining_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("trunk_lining_images_error").innerHTML = ""; 
            }
            if(Gear === ''){

            document.getElementById("gear_lever_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("gear_lever_images_error").innerHTML = ""; 
            }

            if(Saets === ''){

            document.getElementById("seats_upholstery_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("seats_upholstery_images_error").innerHTML = ""; 
            }

            if(Sterring === ''){

            document.getElementById("steering_wheel_upholstery_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("steering_wheel_upholstery_images_error").innerHTML = ""; 
            }
            if(Rear === ''){

            document.getElementById("rear_view_mirror_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("rear_view_mirror_images_error").innerHTML = ""; 
            }
            if(Roof === ''){

            document.getElementById("roof_lining_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("roof_lining_images_error").innerHTML = ""; 
            }
            event.preventDefault();
         }
    });
    // form  8 validations
    
    document.getElementById("saveform8").addEventListener("click", function (event) {

        var Exteriorimg = document.getElementById('exterior_images').value;
         if(Exteriorimg ===''){

            if(Exteriorimg === ''){

            document.getElementById("exterior_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("exterior_images_error").innerHTML = ""; 
            }
            event.preventDefault();
         }
    });

     // form  9 validations
    document.getElementById("saveform9").addEventListener("click", function (event) {

        var Interiorimg = document.getElementById('interior_images_form9').value;
        if(Interiorimg ===''){

            if(Interiorimg === ''){

            document.getElementById("interior_images_form9_error").innerHTML = "Image is required";
            } else {
                document.getElementById("interior_images_form9_error").innerHTML = ""; 
            }
            event.preventDefault();
        }
    });
     // form  10  validations
     document.getElementById("saveform10").addEventListener("click", function (event) {

        var Enginebay = document.getElementById('engine_bay_undercarriage_images').value;
        if(Enginebay ===''){

            if(Enginebay === ''){

            document.getElementById("engine_bay_undercarriage_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("engine_bay_undercarriage_images_error").innerHTML = ""; 
            }
            event.preventDefault();
        }
    });

     // form  11  validations
    document.getElementById("saveform11").addEventListener("click", function (event) {

        var Vehicle = document.getElementById('vehicle_diagnostic_report_images').value;
        if(Vehicle ===''){

            if(Vehicle === ''){

            document.getElementById("vehicle_diagnostic_report_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("vehicle_diagnostic_report_images_error").innerHTML = ""; 
            }
            event.preventDefault();
        }
    });

    // form 13 validations
    document.getElementById("saveform13").addEventListener("click", function (event) {
       
       var Frunkcondition = document.getElementById('frunk_condition_images').value;
       var Undercarriage = document.getElementById('undercarriage_shield_cover_images').value;
       var Bonnet = document.getElementById('bonnet_hinge_images').value;
       var Fenderimg = document.getElementById('fenders_images').value;
       var Radiatior = document.getElementById('radiator_cover_images').value;
       var Coolantconsition = document.getElementById('coolant_condition_cover_images').value;
       var Coolantcap = document.getElementById('coolant_cap_cover_images').value;
       var hosescover = document.getElementById('hoses_cover_images').value;
       var Visiblecover= document.getElementById('visible_cover_images').value;
   
        if(Visiblecover === '' || Frunkcondition === '' || Undercarriage === '' || Bonnet === '' ||Fenderimg === '' ||Radiatior === '' || Coolantconsition ==='' || Coolantcap === '' ||hosescover === ''){
           
           if(Frunkcondition === ''){

           document.getElementById("frunk_condition_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("frunk_condition_images_error").innerHTML = ""; 
           }
           if(Undercarriage === ''){

           document.getElementById("undercarriage_shield_cover_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("undercarriage_shield_cover_images_error").innerHTML = ""; 
           }
           if(Bonnet === ''){

           document.getElementById("bonnet_hinge_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("bonnet_hinge_images_error").innerHTML = ""; 
           }
           if(Fenderimg === ''){

           document.getElementById("fenders_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("fenders_images_error").innerHTML = ""; 
           }
           if(Radiatior === ''){

           document.getElementById("radiator_cover_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("radiator_cover_images_error").innerHTML = ""; 
           }
           if(Coolantconsition === ''){

           document.getElementById("coolant_condition_cover_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("coolant_condition_cover_images_error").innerHTML = ""; 
           }
           if(Coolantcap === ''){

           document.getElementById("coolant_cap_cover_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("coolant_cap_cover_images_error").innerHTML = ""; 
           }
           if(hosescover === ''){

           document.getElementById("hoses_cover_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("hoses_cover_images_error").innerHTML = ""; 
           }

           if(Visiblecover === ''){

           document.getElementById("visible_cover_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("visible_cover_images_error").innerHTML = ""; 
           }

           event.preventDefault();
        }
    });
   // saveform 14
   document.getElementById("saveform14").addEventListener("click", function (event) {
       
       var chrgingport = document.getElementById('charging_images').value;
       var chargingfeature = document.getElementById('charging_feature_images').value;
       var electricbonnet = document.getElementById('electric_motor_images').value;
       var batteryInput = document.getElementById('batterypoints');
        var batterypoint = batteryInput.value;
        var interacted = false;

        // Add event listener to track user interaction
        batteryInput.addEventListener('input', function() {
            interacted = true;
        });

        if(chrgingport === '' || chargingfeature === '' || electricbonnet === ''){
           
            if (!interacted) {
                document.getElementById("batterypoints_error").innerHTML = "Battery health is required";
            }
           

           if(chrgingport === ''){

           document.getElementById("charging_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("charging_images_error").innerHTML = ""; 
           }
           if(chargingfeature === ''){

           document.getElementById("charging_feature_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("charging_feature_images_error").innerHTML = ""; 
           }
           if(electricbonnet === ''){

           document.getElementById("electric_motor_images_error").innerHTML = "Image is required";
           } else {
               document.getElementById("electric_motor_images_error").innerHTML = ""; 
           }
        
           event.preventDefault();
        }
   });

    //form 16 validations
    document.getElementById("saveform16").addEventListener("click", function (event) {
        updateSignatureData();
        var Summary = document.getElementById('summary').value;
         if(Summary ===''){

            if(Summary === ''){

            document.getElementById("summary_error").innerHTML = "Summary is required";
            } else {
                document.getElementById("summary_error").innerHTML = ""; 
            }
            event.preventDefault();
         }
    });
    // form 15 validations
    document.getElementById("saveform15").addEventListener("click", function (event) {
    
        var Frunkcondition = document.getElementById('frunk_trunk_images').value;
         if(Frunkcondition ===''){

            if(Frunkcondition === ''){

            document.getElementById("frunk_trunk_images_error").innerHTML = "Image is required";
            } else {
                document.getElementById("frunk_trunk_images_error").innerHTML = ""; 
            }
            event.preventDefault();
         }
    });
     
});
</script> -->

<!-- battery condition savedata -->


<!-- if fueltype is electric then hide the vehicle engine div -->
<!-- <script>
    $(document).ready(function() {
        $('#veh_fueltype').change(function() {
            var selectedFuelType = $(this).val();
            if (selectedFuelType == '3') {
                $('#no_of_cylinder').closest('.col').hide();
                $('#vehicle_transmission').closest('.col').hide();
            } else {
                $('#no_of_cylinder').closest('.col').show();
                $('#vehicle_transmission').closest('.col').show();

            }
        });
    });
</script> -->
</body>

</html>