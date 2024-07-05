@extends('frontend.layouts.app')
@section('content')

<section class="overflow-visible section-aboutus">
        <!-- <div class="container"> -->
        <div class="row m-0 p-0">
            <div class="col-lg-8 p-0">
                <div class="banner-text-section ">
                    <div class="w-lg-75 pl-50">
                        <div class="heading">
                            We Value Our Clients And Want Them To Have A Nice Experience
                        </div>
                        <div class="aboutus-banner-desc mt-4">
                            Lorem ipsum dolor sit amet consectetur. Aliquet vitae amet duis mattis tristique
                            turpis.
                            Odio
                            turpis sed mauris vel. Faucibus congue scelerisque dignissim dui.
                        </div>
                    </div>
                </div>
                <div class="banner-bottom-section">
                    <div class="row m-0 p-0">
                        <div class="col-md-6 p-0">
                            <div class="banner-bottom-img w-100 h-100">
                                <img src="{{ asset('frontend/assets/images/aboutus/car1.png')}}" />
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div
                                class="p-md-5 py-4 d-flex justify-content-center h-100 flex-column right-side-text-banner">
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="{{ asset('frontend/assets/images/aboutus/rocket.png')}}">
                                    <div class="our-mission-text">
                                        Our Mission
                                    </div>
                                </div>
                                <div class="mission-desc">
                                    Our mission is to revolutionize the way people buy and sell cars by creating a
                                    trustworthy and efficient online auction platform.
                                </div>

                                <div class="d-flex gap-2 align-items-center pt-25 justify-content-end">
                                    <div class="our-mission-text">
                                        Our Vision
                                    </div>
                                    <img src="{{ asset('frontend/assets/images/aboutus/eye.png')}}">
                                </div>
                                <div class="mission-desc">
                                    We envision a future where anyone, anywhere can easily access and participate in
                                    car auctions, making the process simple, enjoyable, and secure.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 -mt-130 p-0">
                <div class="section-about w-100 h-100 position-relative">
                    <!-- <img src="assets/images/aboutus/bg_car.png"> -->
                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>

    <section class="our-customer pt-50 pb-50">

        <div class="container px-0">
            <div class="row mx-0 px-0 mx-auto">

                <div class="col-lg-6 mx-0 px-0">

                    <div class="since-text -mb-12">Since</div>
                    <div class="d-flex align-items-end">
                        <div class="year-text">2003</div>
                        <div class="text-end">
                            <div class="since-text">20 YEARS OF </div>
                            <div class="experience-text">
                                EXPERIENCE
                            </div>
                        </div>
                    </div>

                    <p class="section-pera w-100 pt-25 mb-0 ps-0 pr-84">We have been using Car Arbaby for our trips
                        needs for
                        several years
                        now and have always been happy with their service. Their customer support is Excellent Service!
                        and they
                        are always available to help with any issues we have. Their prices are also very competitive.
                    </p>
                </div>
                <!---/col-->


                <div class="row mx-0 px-0">
                    <div class="col-lg-12 mx-0 px-0 pt-50">
                        <h4 class="why-car">Why Cars & Bids</h4>
                    </div>

                    <div class="row mx-0 px-0 pt-md-4">
                        <div class="col-lg-3 col-6">
                            <div class="bids-box">
                                <div class="number-box"><span class="count com">17000</span>+</div>
                                <div class="number-detail">Auctions Completed</div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <div class="bids-box">
                                <div class="number-box">$<span class="count">365M</span>+</div>
                                <div class="number-detail">Value Of Cars Sold</div>
                            </div>
                        </div>



                        <div class="col-lg-3 col-6">
                            <div class="bids-box">
                                <div class="number-box"><span class="count">85</span>%+</div>
                                <div class="number-detail">Sell-Through Rate</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="bids-box">
                                <div class="number-box"><span class="count">475K</span>+</div>
                                <div class="number-detail">Registered Members</div>
                            </div>
                        </div>


                    </div>
                </div>
                <!---/row--->
            </div>
            <!---/inner row---->


        </div>
        <!---/row--->


    </section>

    <section class="expertise-section">
        <div class="container">

            <div class="heading text-center">
                Collaborative Excellence, Unparalleled Expertise
            </div>
            <div class="since-text pt-3 text-center">
                Meet the Driving Force Behind [Your Company Name]
            </div>
            <div class="pt-50">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="ceo-img position-relative">
                            <img src="{{ asset('frontend/assets/images/aboutus/team1.svg')}}" class="w-100 h-100" />
                            <div class="hover-overlay">
                                <div class="hover-text-bg">
                                    henry@boxcars.com
                                </div>
                                <div class="d-flex gap-1 align-items-center hover-text-bg icon-hover">
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/facebook.svg')}}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/instagram-outlined.svg')}}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/linkedin-filled.svg')}}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/x-outlined.svg')}}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="since-text pt-1 text-center">
                            Wm Langosh
                        </div>
                        <div class="car-company-name text-center">
                            Founder and CEO
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ceo-img position-relative">
                            <img src="{{ asset('frontend/assets/images/aboutus/team2.svg')}}" class="w-100 h-100" />
                            <div class="hover-overlay">
                                <div class="hover-text-bg">
                                    Kristine@boxcars.com
                                </div>
                                <div class="d-flex gap-1 align-items-center hover-text-bg icon-hover">
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/facebook.svg')}}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/instagram-outlined.svg')}}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/linkedin-filled.svg')}}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/x-outlined.svg')}}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="since-text pt-1 text-center">
                            Kristine Ruecker
                        </div>
                        <div class="car-company-name text-center">
                            Chief Technology Officer
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ceo-img position-relative">
                            <img src="{{ asset('frontend/assets/images/aboutus/team3.svg')}}" class="w-100 h-100" />
                            <div class="hover-overlay">
                                <div class="hover-text-bg">
                                    Kristine@boxcars.com
                                </div>
                                <div class="d-flex gap-1 align-items-center hover-text-bg icon-hover">
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/facebook.svg')}}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/instagram-outlined.svg')}}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/linkedin-filled.svg')}}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/icon/x-outlined.svg')}}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="since-text pt-1 text-center">
                            Lowell Kertzmann
                        </div>
                        <div class="car-company-name text-center">
                            Head of Operations
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection