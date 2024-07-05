@extends('frontend.userhub.layouts.app')
@section('content')

 <section>
        <div class="signin-section">
            <div class="container">
                <div class="pe-sm-5 pe-0">
                    <div class=" align-items-center w-100 h-100 justify-content-end py-258 max-w-450">
                        <div class="form-signin">
                            <div class="text-center">
                                <a href="/signIn.php"
                                    class="d-flex align-items-center text-white gap-1 text-decoration-none back-login-text">
                                    <img src="{{ asset('frontend/assets/images/icon/ep_back.svg') }} " />
                                    <div>
                                        Back to login
                                    </div>
                                </a>
                            </div>
                            <div class="font-montserrat font-25 font-900 text-uppercase fst-italic text-center mt-30">
                                Recover Your Access
                            </div>
                            <div class="font-termina text-center font-500">
                                Regain Entry to Your Account

                            </div>
                             <form id="" action="{{ route('store.forgotpassword')}}" method="POST" enctype="multipart/form-data">
                                 @csrf
                            <div class="">
                                <div class="pt-25">
                                    <label class="form-label label-checkout text-white">
                                        Email Address:
                                    </label>
                                    <input type="text" class="form-control input-field-checkout input-field-signin" name="email"
                                        placeholder="dummy@login.com">
                                </div>


                                <div class="text-center pt-25">
                                    <button class="btn place-bid-btn py-3 shadow-btn">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection