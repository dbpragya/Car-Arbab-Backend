@extends('frontend.userhub.layouts.app')
@section('content')

  <!-- Section -->
  <section>
        <div class="signin-section">
            <div class="container">
                <div class="pe-sm-5 pe-0">
                    <div class=" align-items-center w-100 h-100 justify-content-end py-4 max-w-450">
                        <div class="form-signin">
                            <div class="font-montserrat font-25 font-900 text-uppercase fst-italic text-center">
                                Join the Excitement
                            </div>
                            <div class="font-termina text-center font-500">
                                Start Bidding and Driving Your Dream
                            </div>
                        
                           
                            <form id="signup-form" action="{{ route('user.store_signup')}}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                 <input type="hidden" id="type" name="type" value="0">
                                <div class="pt-25">
                                    <label class="form-label label-checkout text-white">
                                        Email Address:
                                    </label>
                                    <input type="text" id="email" name="email" class="form-control input-field-checkout input-field-signin"
                                        placeholder="dummy@login.com">
                                        <div class="error-message">{{$errors->first('email')}}</div>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                </div>

                                <div class="pt-25 position-relative">
                                    <label class="form-label label-checkout text-white">
                                        Phone Number:
                                    </label>
                                    <input type="hidden" id="country_code" name="country_code" />
                                    <input type="number" id="phone" name="mobile_no" placeholder="99999-99999"
                                        class="form-control input-field-checkout input-field-signin" />
                                        <div class="error-message">{{$errors->first('mobile_no')}}</div>
                                </div>

                                <div class="pt-25">
                                    <label class="form-label label-checkout text-white">Password</label>
                                    <div class="password-container d-flex align-items-center">
                                        <input type="password" id="passwordInput" name="password"
                                            class="form-control input-field-checkout input-field-signin input-password"
                                            placeholder="✱✱✱✱✱✱✱✱">
                                        <div class="password-toggle password-icon"><img
                                                src="{{ asset('frontend/assets/images/icon/eye-closed.svg')}}" alt="Dropped Image"></div>
                                    </div>
                                    <div class="error-message">{{$errors->first('password')}}</div>
                                </div>


                                <div class="pt-25">
                                    <label class="form-label label-checkout text-white">Confirm Password</label>
                                    <div class="password-container d-flex align-items-center">
                                        <input type="password" id="confirmPasswordInput" name="password_confirmation" 
                                            class="form-control input-field-checkout input-field-signin input-password"
                                            placeholder="✱✱✱✱✱✱✱✱">
                                        <div class="confirm-password-toggle password-icon"><img
                                                src="{{ asset('frontend/assets/images/icon/eye-closed.svg')}}" alt="Dropped Image"></div>
                                    </div>
                                    <div class="error-message">{{$errors->first('repassword')}}</div>
                                </div>

                                <div class="text-center pt-25">
                                    <button type="submit" class="btn place-bid-btn py-3 px-5">
                                        Sign Up
                                    </button>
                                </div>
                            </form>
                            <div class="d-flex gap-10 align-items-center pt-25">
                                <div class="bg-white w-100 or-side-div"></div>
                                <div class="font-500 font-noto">Or</div>
                                <div class="bg-white w-100 or-side-div"></div>
                            </div>

                            <div class="pt-3 group-button-signin pb-30">
                                <button class="btn-google">
                                    <img src="{{ asset('frontend/assets/images/icon/flat-color-icons_google.svg')}}" />
                                    Login With Google
                                </button>

                                <button class="btn-google mt-3">
                                    <img src="{{ asset('frontend/assets/images/icon/logos_facebook.svg')}}" />
                                    Login With Facebook
                                </button>
                            </div>
 
                            <div class="font-montserrat font-500 font-14 text-center">
                                Already have An Account?
                                <span><a href="{{ route('user.login') }}" class="signin-singn-up-text text-decoration-none">Sign In
                                        Now</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    $(document).ready(function() {
        var input = document.querySelector("#phone");
        var countryInput = document.querySelector("#country_code");

        // alert(countryInput);
        var iti = window.intlTelInput(input, {
            separateDialCode: true
        });

        // Update hidden input with country code on input change
        input.addEventListener('input', function() {
           
            var selectedCountryData = iti.getSelectedCountryData();
            if (selectedCountryData) {
               
                countryInput.value = '+' + selectedCountryData.dialCode;
            }
        });
    });
    </script>

    @endsection