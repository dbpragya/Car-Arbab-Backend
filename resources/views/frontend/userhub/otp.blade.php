@extends('frontend.userhub.layouts.app')
@section('content')

 <!-- Section -->
 <section>
        <div class="signin-section">
            <div class="container">
                <div class="pe-sm-5 pe-0">
                    <div class=" align-items-center w-100 h-100 justify-content-end py-258 max-w-450">
                        <div class="form-signin">

                            <div class="font-montserrat font-25 font-900 text-uppercase fst-italic text-center mt-30">
                                Verify Your Identity
                            </div>
                            <div class="font-termina text-center font-500">
                                Secure Your Account with OTP Verification
                            </div>
                       
                            <p class="otp-message">Your OTP is {{ $otp }}</p>

                            @if ($errors->any())
                                    <p class="alert alert-danger font-weight-bold" role="alert">
                                        {{ $errors->first('otp') }}
                                    </p>
                                @endif
                            
                            <form action="{{ route('user.store_otp')}}" id="otp-form" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <div class="pt-25 d-flex gap-4 max-w-314">

                                    <input type="number" maxlength="1" name="otp[]" id="otp1"
                                        class="otp-input form-control input-field-checkout input-field-signin fw-bold text-center">
                                    <input type="number" maxlength="1"name="otp[]"  id="otp2"
                                        class="otp-input form-control input-field-checkout input-field-signin fw-bold text-center">
                                    <input type="number" maxlength="1" name="otp[]" id="otp3"
                                        class="otp-input form-control input-field-checkout input-field-signin fw-bold text-center">
                                    <input type="number" maxlength="1" name="otp[]" id="otp4"
                                        class="otp-input form-control input-field-checkout input-field-signin fw-bold text-center">
                                </div>
                                <input type="hidden" name="user_id" value="{{ $userId }}">
                           
                                <div class="text-center pt-25">
                                    <button type="submit" class="btn place-bid-btn py-3 shadow-btn">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section -->

@endsection