@extends('frontend.layouts.app')
@section('content')

   <!-- for tab bar -->
   <div class="fillter-btn bg-f7 mt-50 input-group-checkout text-center">
        <div class="scroll-x scroll-lg-none justify-content-lg-center">
            <div class="btn-group ml-20" role="group" aria-label="Basic checkbox toggle button group">

                <div class="at">
                    <a href="{{ route('user.dashboard') }}">
                        <button class="btn btn-outline-primary ">Dashboard</button>
                    </a>
                </div>

                <div class="at">
                    <a href="{{ route('user.award') }}">
                        <button class="btn btn-outline-primary active-btn-at">Award Pending</button>
                    </a>
                </div>


                <div class="at">
                    <a href="{{ route('user.wonvehicles') }}">
                        <button class="btn btn-outline-primary ">Won Vehicles</button>
                    </a>
                </div>


                <div class="at">
                    <a href="{{ route('user.lostbid') }}">
                        <button class="btn btn-outline-primary">Lost Pre-Bids</button>
                    </a>
                </div>


                <div class="at">
                    <a href="{{ route('user.myvehicle') }}">
                        <button class="btn btn-outline-primary">My Vehicles</button>
                    </a>
                </div>


                <div class="at">
                    <a href="{{ route('user.profile') }}">
                        <button class="btn btn-outline-primary">Profile</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- for table  -->

    <section class="position-relative mt-50 mb-50">
        <button class="btn position-absolute top-0 start-0 side-icon" data-bs-toggle="offcanvas"
            data-bs-target="#left-toggle-filter" aria-controls="left-toggle-filter">
            <img src="assets/images/icon/tune.svg" />
        </button>
        <div class="container">

            <div class="table-award table-responsive mx-xxl-5">

                <table class="table table-borderless mb-0">

                    <tr class="bg-table-award">
                        <td scope="col" class="col-1 border-top-left">S.NO.</td>
                        <td scope="col" class="col-1">Image</td>
                        <td scope="col" class="col-2">Award Title</td>
                        <td scope="col" class="col-2">Branch</td>
                        <td scope="col" class="col-2">Won Date</td>
                        <td scope="col" class="col-2">Payment Due</td>
                        <td scope="col" class="border-top-right col-3">Pay Now</td>
                    </tr>


                    <tbody class="table-body-award">
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="table-img">
                                    <img src="assets/images/livebidding/car8.png" />
                                </div>
                            </td>
                            <td>AVEO LS AUTOMATIC A/A</td>
                            <td>Phoenix</td>
                            <td>Nov 21, 2023</td>
                            <td>AED 10,000</td>
                            <td><button class="btn set-payment set-payment-bg">
                                    Set Payment
                                </button></td>
                        </tr>


                    </tbody>
                </table>

            </div>
        </div>
    </section>

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

                <select class="form-select" aria-label="">
                    <option selected>Make</option>
                    <option value="1">BMW</option>
                    <option value="2">Audi</option>
                    <option value="3">Tata</option>
                    <option value="">Maruti Suzuki</option>
                    <option value="">Ford</option>
                    <option value="">Chevrolet</option>
                    <option value="">Nissan</option>

                </select>

                <select class="form-select" aria-label="">
                    <option selected>Model</option>
                    <option value="1">A4</option>
                    <option value="2">F-150</option>
                    <option value="3">Camry</option>
                    <option value="">Civic</option>
                    <option value="">Sedan</option>
                    <option value="">SUV</option>
                    <option value="">Hatchback</option>

                </select>


                <select class="form-select" aria-label="">
                    <option selected>Trim</option>
                    <option value="1">Base Trim</option>
                    <option value="2">SE (Special Edition)</option>
                    <option value="3">Sport</option>
                    <option value="">Electric</option>
                    <option value=""></option>

                </select>


                <select class="form-select" aria-label="">
                    <option selected>Start Code</option>
                    <option value="1">Can’t Test</option>
                    <option value="2">Run & Drive</option>
                    <option value="3">Starts</option>
                    <option value="">Stationary</option>Stationary
                </select>


                <select class="form-select" aria-label="">
                    <option selected>Fuel Type</option>
                    <option value="1">Petrol</option>
                    <option value="2">Diesel</option>
                    <option value="3">Hybrid</option>
                    <option value="">Electric</option>
                </select>


                <select class="form-select" aria-label="">
                    <option selected>Cylinders</option>
                    <option value="1">1 Cyl</option>
                    <option value="2">2 Cyl</option>
                    <option value="3">3 Cyl</option>
                    <option value="">4 Cyl</option>
                    <option value="">5 Cyl</option>
                    <option value=""></option>
                </select>

                <select class="form-select" aria-label="">
                    <option value="">Engine Size</option>
                    <option value="">0.65L</option>
                    <option value="">1 L</option>
                    <option value="">1.5 L</option>
                    <option value="">2 L</option>
                    <option value="">2.5 L</option>

                </select>

                <select class="form-select" aria-label="">
                    <option value="">Transmission</option>
                    <option value="">Automatic</option>
                    <option value="">CVT</option>
                    <option value="">Manual</option>
                    <option value="">Missing</option>
                    <option value=""> Unknown</option>

                </select>

                <select class="form-select" aria-label="">
                    <option value="">Drivetrain Type</option>
                    <option value="">All-Wheel Drive</option>
                    <option value="">Four Wheel Drive</option>
                    <option value="">Four Wheel Drive</option>
                    <option value="">Rear Wheel Drive</option>

                </select>

                <select class="form-select" aria-label="">
                    <option value="">Odometer Range</option>
                    <option value=""></option>

                </select>

                <div class="year-range">
                    Year
                    <div class="year-input">
                        <div class="field">
                            <input type="number" class="input-min rounded-pill text-black font-500 font-14 font-termina"
                                value="1990">
                        </div>
                        <div class="separator">To</div>
                        <div class="field">
                            <input type="number" class="input-max rounded-pill " value="2025">
                        </div>
                    </div>
                    <div class="slider">
                        <div class="progress"></div>
                    </div>
                    <div class="range-input">
                        <input type="range" class="range-min" min="1900" max="10000" value="1990" step="100">
                        <input type="range" class="range-max" min="0" max="10000" value="2500" step="100">
                    </div>
                </div>

                <select class="form-select" aria-label="">
                    <option value="">Body Type</option>
                    <option value="">Sedan</option>
                    <option value="">SUV</option>
                    <option value="">Four Wheel Drive</option>
                    <option value="">Electric</option>

                </select>
            </div>

            <div class="toggele-dropdownbox d-flex justify-content-between toggle-2">
                <div class="title align-items-start">Sale Filter</div>
                <div class="icon align-items-end"><i class="fa-light fa-angles-down"></i></div>
                <!-- <i class="material-icons">downloading</i> -->

            </div>
            <div class="car-filter filter-2" style="display:none;">

                <select class="form-select" aria-label="">
                    <option selected>Auction Type</option>
                    <option value="1">Live Auction</option>
                    <option value="2">Auction Starting Soon</option>

                </select>

                <div class="year-range">
                    Price
                    <div class="year-input">
                        <div class="field">
                            <input type="number" class="input-min" value="1990">
                        </div>
                        <div class="separator">To</div>
                        <div class="field">
                            <input type="number" class="input-max" value="2025">
                        </div>
                    </div>
                    <div class="slider">
                        <div class="progress"></div>
                    </div>
                    <div class="range-input">
                        <input type="range" class="range-min" min="1900" max="10000" value="1990" step="100">
                        <input type="range" class="range-max" min="0" max="10000" value="2500" step="100">
                    </div>
                </div>
                <select class="form-select" aria-label="">
                    <option selected>Regional Specifications</option>
                    <option value="1">GCC Specs</option>
                    <option value="2">American Specs</option>
                    <option value="">European Specs</option>
                    <option value="">Japanese Specs</option>
                    <option value="">Korean Specs</option>
                    <option value="">Chinese Specs</option>
                </select>
            </div>
        </div>
        <!----Offcanvas-body------>
    </div>
@endsection