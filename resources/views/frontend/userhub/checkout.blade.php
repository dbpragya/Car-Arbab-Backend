@extends('frontend.layouts.app')
@section('content')
<section class="pt-50 pb-50">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="/cart.php" class="text-decoration-none">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Checkout</a></li>
                </ol>
            </nav>

            <div class="heading">
                Checkout
            </div>

            <div class="p">
                Complete Your Purchase with Confidence
            </div>

            <div class="checkout-section mt-50">
                <input type="hidden" id="car_id" name="car_id" value="{{ $car_id }}">
                <input type="hidden" id="user_id" name="user_id" value="{{ $user_id}}">
                <input type="hidden" id="total_amount" name="total_amount" value="{{ $total_amount}}">


                <div class="header-checkout nav nav-tabs" id="myTab" role="tablist">
                    <button class="btn btn-credit-card active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="false">
                        Credit Card
                    </button>

                    <button class="btn btn-credit-card" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="true">
                        Bank Transfer
                    </button>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="input-group-checkout tab-pane show active fade" id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="row gx-5 gy-4">
                            <div class="col-lg-6">
                                <div>
                                    <label class="form-label label-checkout">Name on card
                                    </label>
                                    <input type="text" class="form-control input-field-checkout"
                                        placeholder="Enter card holder name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div>
                                    <label class="form-label label-checkout">
                                        Card information
                                    </label>
                                    <input type="text" class="form-control input-field-checkout"
                                        placeholder="Enter card information">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div>
                                    <label class="form-label label-checkout">Expiration
                                    </label>
                                    <div class="d-flex month-year-input">
                                        <input type="number" class="form-control input-field-checkout-month"
                                            placeholder="MM">
                                        <input type="number" class="form-control input-field-checkout-year"
                                            placeholder="YYYY">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div>
                                    <label class="form-label label-checkout">
                                        CVV
                                    </label>
                                    <input type="number" class="form-control input-field-checkout"
                                        placeholder="Enter your card CVV no.">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <label class="form-label label-checkout">
                                        Email Address
                                    </label>
                                    <input type="email" class="form-control input-field-checkout"
                                        placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center mt-2">
                                    <button class="btn bid-now" data-bs-toggle="modal" id="total_amount"
                                        data-bs-target="#paymentmethod">Pay AED {{ $total_amount }}</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane input-group-checkout fade" id="profile-tab-pane" role="tabpanel"
                        aria-labelledby="profile-tab" tabindex="0">
                        <div class="bank-account-text">
                            Bank Account Information
                        </div>

                        <div class="row gx-5 gy-2">
                            <div class="col-lg-6">
                                <div class="d-flex justify-content-between">
                                    <div class="pri">
                                        Bank Name:
                                    </div>
                                    <div class="pri font-600 text-end">
                                        ABC Bank
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex justify-content-between">
                                    <div class="pri">
                                        Account Number:
                                    </div>
                                    <div class="pri font-600 text-end">
                                        234567890
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex justify-content-between">
                                    <div class="pri">
                                        Routing Number:
                                    </div>
                                    <div class="pri font-600 text-end">
                                        0987654321
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex justify-content-between">
                                    <div class="pri">
                                        Account Holder Name:
                                    </div>
                                    <div class="pri font-600 text-end">
                                        Car Arbab PVT. LTD
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-bank"></div>

                        <div>
                            <label class="form-label label-checkout">Lot #
                            </label>
                            <input type="text" class="form-control input-field-checkout" placeholder="Enter Lot #">
                        </div>

                        <div class="pt-30">
                            <input type="file" class="dropify" data-max-file-size="100kb" />
                            <div class="drag-img-text mt-10">Image should not bigger than 100 KB</div>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn bid-now" data-bs-toggle="modal"  id="total_amount" data-bs-target="#paymentmethod">Pay AED
                                {{ $total_amount }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- For Thank you  -->
    <div class="modal fade" id="paymentmethod" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="paymentmethodLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal model-dialog-addcard thank-you-modal">

            <div class="modal-content border-0 redius-25">

                <div class="modal-body p-20 pt-0">
                    <div class="max-w-414">
                        <img src="{{ asset('frontend/assets/images/background/car.gif')}}" />
                    </div>
                    <div class="">
                        <div class="font-20 font-800 text-black font-montserrat fst-italic text-center">
                            Thank You for Your Purchase!
                        </div>
                    </div>
                    <div class="pl-20 pr-20 mt-10 text-gray font-termina font-16 font-600 text-center">
                        Congratulations on your new car! 🚗 We are thrilled that you chose [Company Name] for your
                        automotive needs. Your trust means the world to us, and we're here to ensure your satisfaction
                        every step of the way.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        $(document).ready(function(){
        
        $('.bid-now').on('click', function(event){
     
            var carId = $('#car_id').val();
            var userId = $('#user_id').val();
            var totalAmount = $('#total_amount').val();
            
            // alert(total_amount);
            $.ajax({
                type: 'POST',
                url: '{{ route('user.checkout-buy-car') }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    total_amount: totalAmount,
                    car_id:carId,
                    user_id:userId,
                    
                },
                    success: function(response) {
                        alert(response.message);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    });
    </script>
@endsection