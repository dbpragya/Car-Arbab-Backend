<section class="pr-80 pb-17 home-header top-0 overflow-visible">
    <header class="top-header z-1 justify-content-center justify-content">
        <div class="container">


            <nav class="navbar navbar-light navbar-expand-lg align-content-center pl-40 py-xs-1">
                <a href="index.php" class="navbar-brand d-flex mr-auto"><img src="{{ asset('frontend/assets/images/Logo.svg')}}"
                        class="logo"></a>
                <div class="d-lg-none pe-sm-3">
                    <button class="navbar-toggler p-0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#nav-bar-toggle-filter" aria-controls="nav-bar-toggle-filter">
                        <span class="navbar-toggler-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#nav-bar-toggle-filter" aria-controls="nav-bar-toggle-filter"></span>
                    </button>

                </div>
                <div class="navbar-collapse collapse w-100 pr-105" id="collapsingNavbar3">

                    <ul class="nav navbar-nav ml-auto w-100 justify-content-end head-menu">
                        <li class="nav-item"><a href="{{ route('user.home') }}" class="" id="home-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('list') }}" id="list-link" class="">Find Your Car</a></li>
                        <li class="nav-item"><a href="{{ route('calender') }}" id="calendar-link" class="">Calendar</a></li>
                        <li class="nav-item"><a href="{{ route('liveauction') }}" id="liveauction-link" class="">Live Auction</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('aboutus') }}" id="aboutus-link" class="">About Us</a></li>
                        <li class="nav-item"><a href="{{ route('contactus') }}" id="contactus-link" class="">Contact Us</a></li>
                        <li class="nav-item ">
                            <div class="dropdown">
                                <button class="btn btn-usrhub d-flex align-items-center gap-10"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div>
                                        @auth
                                            <div>{{ auth()->user()->name }}</div>
                                        @else
                                            <div>Guest User</div>
                                        @endauth
                                    </div>
                                    <div>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="person_2">
                                                <mask id="mask0_2470_1247" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="-1" y="0" width="25" height="25">
                                                    <rect id="Bounding box" x="-0.477051" y="0.0471191" width="24"
                                                        height="24" fill="#D9D9D9" />
                                                </mask>
                                                <g mask="url(#mask0_2470_1247)">
                                                    <path id="person_2_2"
                                                        d="M7.74829 10.0393C7.24829 10.0393 6.83162 9.85176 6.49829 9.47676C6.16496 9.10176 6.03301 8.66426 6.10246 8.16426L6.37329 6.12259C6.4844 5.33092 6.84551 4.67467 7.45662 4.15384C8.06774 3.63301 8.78301 3.37259 9.60246 3.37259C10.4219 3.37259 11.1372 3.63301 11.7483 4.15384C12.3594 4.67467 12.7205 5.33092 12.8316 6.12259L13.1025 8.16426C13.1719 8.66426 13.04 9.10176 12.7066 9.47676C12.3733 9.85176 11.9566 10.0393 11.4566 10.0393H7.74829ZM7.74829 8.37259H11.4566L11.1858 6.37259C11.1302 5.9837 10.9532 5.66426 10.6545 5.41426C10.3559 5.16426 10.0052 5.03926 9.60246 5.03926C9.19968 5.03926 8.84899 5.16426 8.55037 5.41426C8.25176 5.66426 8.07468 5.9837 8.01912 6.37259L7.74829 8.37259ZM2.93579 16.7059V14.3726C2.93579 13.9004 3.05732 13.4663 3.30037 13.0705C3.54343 12.6747 3.86635 12.3726 4.26912 12.1643C5.13024 11.7337 6.00524 11.4108 6.89412 11.1955C7.78301 10.9802 8.68579 10.8726 9.60246 10.8726C10.5191 10.8726 11.4219 10.9802 12.3108 11.1955C13.1997 11.4108 14.0747 11.7337 14.9358 12.1643C15.3386 12.3726 15.6615 12.6747 15.9045 13.0705C16.1476 13.4663 16.2691 13.9004 16.2691 14.3726V16.7059H2.93579ZM4.60246 15.0393H14.6025V14.3726C14.6025 14.2198 14.5643 14.0809 14.4879 13.9559C14.4115 13.8309 14.3108 13.7337 14.1858 13.6643C13.4358 13.2893 12.6788 13.008 11.915 12.8205C11.1511 12.633 10.3802 12.5393 9.60246 12.5393C8.82468 12.5393 8.05385 12.633 7.28996 12.8205C6.52607 13.008 5.76912 13.2893 5.01912 13.6643C4.89412 13.7337 4.79343 13.8309 4.71704 13.9559C4.64065 14.0809 4.60246 14.2198 4.60246 14.3726V15.0393Z"
                                                        fill="white" />
                                                </g>
                                            </g>
                                        </svg>

                                    </div>
                                </button>
                                <ul class="dropdown-menu border-0">
                                @auth
                                    <li class="p-0">
                                        <a class="dropdown-item d-flex gap-2" href="{{ route('user.dashboard') }}">
                                            <img src="{{ asset('frontend/assets/images/icon/dashboard.svg')}}" />
                                            <div class="text-14 font-500 text-gray font-termima">Dashboard</div>
                                        </a>
                                    </li>
                                    <li class="p-0">
                                        <a class="dropdown-item d-flex gap-2" href="{{ route('user.myvehicle') }}">
                                            <img src="{{ asset('frontend/assets/images/icon/myvehicles.svg')}}" />
                                            <div class="text-14 font-500 text-gray font-termima">My Vehicles</div>
                                        </a>
                                    </li>
                                    <li class="p-0">
                                        <a class="dropdown-item d-flex gap-2" href="{{ route('user.wonvehicles') }}">
                                            <img src="{{ asset('frontend/assets/images/icon/wonvehicles.svg')}}" />
                                            <div class="text-14 font-500 text-gray font-termima">Won Vehicles</div>
                                        </a>
                                    </li>
                                    <li class="p-0">
                                        <a class="dropdown-item d-flex gap-2" href="{{ route('user.lostbid') }}">
                                            <img src="{{ asset('frontend/assets/images/icon/lostprebids.svg')}}" />
                                            <div class="text-14 font-500 text-gray font-termima">Lost Pre-Bids</div>
                                        </a>
                                    </li>
                                    <li class="p-0">
                                        <a class="dropdown-item d-flex gap-2" href="{{ route('user.profile') }}">
                                            <img src="{{ asset('frontend/assets/images/icon/person_2.svg')}}" />
                                            <div class="text-14 font-500 text-gray font-termima">Profile</div>
                                        </a>
                                    </li>
                                    <li class="p-0">
                                        <a class="dropdown-item d-flex gap-2" href="{{ route('user.pricingplan') }}">
                                            <img src="{{ asset('frontend/assets/images/icon/person_2.svg')}}" />
                                            <div class="text-14 font-500 text-gray font-termima">Pricing Plan</div>
                                        </a>
                                    </li>
                                    <li class="p-0">
                                        <a class="dropdown-item d-flex gap-2" href="{{ route('user.logout') }}">
                                            <img src="{{ asset('frontend/assets/images/icon/logout2.svg')}}" />
                                            <div class="text-14 font-500 text-gray font-termima">Logout</div>
                                        </a>
                                    </li>
                                 
                                    @else
                                    <li class="p-0">
                                        <a class="dropdown-item d-flex gap-2" href="{{ route('user.login') }}">
                                            <img src="{{ asset('frontend/assets/images/icon/logout2.svg')}}" />
                                            <div class="text-14 font-500 text-gray font-termima">SignIn</div>
                                        </a>
                                    </li>
                                    @endauth
                            
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</section>

<div class="offcanvas offcanvas-start w-320" data-bs-scroll="true" tabindex="-1" id="nav-bar-toggle-filter"
    aria-labelledby="nav-bar-toggle-filterLabel">

    <div class="offcanvas-body">

        <div class="head-menu p-4">
            <div class="d-flex align-items-center justify-content-between">
                <a href="index.php" class="navbar-brand d-flex mr-auto"><img src="{{ asset('frontend/assets/images/Logo.svg')}}"
                        class="logo-nav"></a>

                <div class="dropdown">
                    <button class="btn btn-usrhub d-flex align-items-center gap-10" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div>
                        @auth
                            <div>{{ auth()->user()->name }}</div>
                        @else
                            <div>Guest User</div>
                        @endauth
                        </div>
                        <div>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="person_2">
                                    <mask id="mask0_2470_1247" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1"
                                        y="0" width="25" height="25">
                                        <rect id="Bounding box" x="-0.477051" y="0.0471191" width="24" height="24"
                                            fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_2470_1247)">
                                        <path id="person_2_2"
                                            d="M7.74829 10.0393C7.24829 10.0393 6.83162 9.85176 6.49829 9.47676C6.16496 9.10176 6.03301 8.66426 6.10246 8.16426L6.37329 6.12259C6.4844 5.33092 6.84551 4.67467 7.45662 4.15384C8.06774 3.63301 8.78301 3.37259 9.60246 3.37259C10.4219 3.37259 11.1372 3.63301 11.7483 4.15384C12.3594 4.67467 12.7205 5.33092 12.8316 6.12259L13.1025 8.16426C13.1719 8.66426 13.04 9.10176 12.7066 9.47676C12.3733 9.85176 11.9566 10.0393 11.4566 10.0393H7.74829ZM7.74829 8.37259H11.4566L11.1858 6.37259C11.1302 5.9837 10.9532 5.66426 10.6545 5.41426C10.3559 5.16426 10.0052 5.03926 9.60246 5.03926C9.19968 5.03926 8.84899 5.16426 8.55037 5.41426C8.25176 5.66426 8.07468 5.9837 8.01912 6.37259L7.74829 8.37259ZM2.93579 16.7059V14.3726C2.93579 13.9004 3.05732 13.4663 3.30037 13.0705C3.54343 12.6747 3.86635 12.3726 4.26912 12.1643C5.13024 11.7337 6.00524 11.4108 6.89412 11.1955C7.78301 10.9802 8.68579 10.8726 9.60246 10.8726C10.5191 10.8726 11.4219 10.9802 12.3108 11.1955C13.1997 11.4108 14.0747 11.7337 14.9358 12.1643C15.3386 12.3726 15.6615 12.6747 15.9045 13.0705C16.1476 13.4663 16.2691 13.9004 16.2691 14.3726V16.7059H2.93579ZM4.60246 15.0393H14.6025V14.3726C14.6025 14.2198 14.5643 14.0809 14.4879 13.9559C14.4115 13.8309 14.3108 13.7337 14.1858 13.6643C13.4358 13.2893 12.6788 13.008 11.915 12.8205C11.1511 12.633 10.3802 12.5393 9.60246 12.5393C8.82468 12.5393 8.05385 12.633 7.28996 12.8205C6.52607 13.008 5.76912 13.2893 5.01912 13.6643C4.89412 13.7337 4.79343 13.8309 4.71704 13.9559C4.64065 14.0809 4.60246 14.2198 4.60246 14.3726V15.0393Z"
                                            fill="white" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                    </button>
                    <ul class="dropdown-menu border-0 position-nav-dropdown">
                        @auth
                        <li class="p-0">
                            <a class="dropdown-item d-flex gap-2" href="{{ route('user.dashboard') }}">
                                <img src="{{ asset('frontend/assets/images/icon/dashboard.svg')}}" />
                                <div class="text-14 font-500 text-gray font-termima">Dashboard</div>
                            </a>
                        </li>
                        <li class="p-0">
                            <a class="dropdown-item d-flex gap-2" href="{{ route('user.myvehicle') }}">
                                <img src="{{ asset('frontend/assets/images/icon/myvehicles.svg')}}" />
                                <div class="text-14 font-500 text-gray font-termima">My Vehicles</div>
                            </a>
                        </li>
                        <li class="p-0">
                            <a class="dropdown-item d-flex gap-2" href="{{ route('user.wonvehicles') }}">
                                <img src="{{ asset('frontend/assets/images/icon/wonvehicles.svg')}}" />
                                <div class="text-14 font-500 text-gray font-termima">Won Vehicles</div>
                            </a>
                        </li>
                        <li class="p-0">
                            <a class="dropdown-item d-flex gap-2" href="{{ route('user.lostbid') }}">
                                <img src="{{ asset('frontend/assets/images/icon/lostprebids.svg')}}" />
                                <div class="text-14 font-500 text-gray font-termima">Lost Pre-Bids</div>
                            </a>
                        </li>
                        <li class="p-0">
                            <a class="dropdown-item d-flex gap-2" href="{{ route('user.profile') }}">
                                <img src="{{ asset('frontend/assets/images/icon/person_2.svg')}}" />
                                <div class="text-14 font-500 text-gray font-termima">Profile</div>
                            </a>
                        </li>
                        <li class="p-0">
                            <a class="dropdown-item d-flex gap-2" href="{{ route('user.pricingplan') }}">
                                <img src="{{ asset('frontend/assets/images/icon/person_2.svg')}}" />
                                <div class="text-14 font-500 text-gray font-termima">Pricing Plan</div>
                            </a>
                        </li>
                        <li class="p-0">
                            <a class="dropdown-item d-flex gap-2" href="{{ route('user.logout') }}">
                                <img src="{{ asset('frontend/assets/images/icon/logout2.svg')}}" />
                                <div class="text-14 font-500 text-gray font-termima">Logout</div>
                            </a>
                        </li>
                        
                      
                        @else
                        <li class="p-0">
                            <a class="dropdown-item d-flex gap-2" href="{{ route('user.login') }}">
                                <img src="{{ asset('frontend/assets/images/icon/logout2.svg')}}" />
                                <div class="text-14 font-500 text-gray font-termima">SignIn</div>
                            </a>
                        </li>
                        @endauth
                    </ul>
                </div>

            </div>
            <ul class="navbar-collapse w-100 ps-0 pt-3">
                <li class="nav-item py-2 ps-0"><a href="{{ route('user.home') }}" class="" id="home-link">Home</a></li>
                <li class="nav-item py-2 ps-0"><a href="{{ route('list') }}" id="list-link" class="">Find Your Car</a></li>
                <li class="nav-item py-2 ps-0"><a href="{{ route('calender') }}" id="calendar-link" class="">Calendar</a></li>
                <li class="nav-item py-2 ps-0"><a href="{{ route('liveauction') }}" id="liveauction-link" class="">Live
                        Auction</a>
                </li>
                <li class="nav-item py-2 ps-0"><a href="{{ route('aboutus') }}" id="aboutus-link" class="">About Us</a></li>
                <li class="nav-item py-2 ps-0"><a href="{{ route('contactus') }}" id="contactus-link" class="">Contact Us</a></li>
            </ul>

        </div>

    </div>

</div>
<!----Offcanvas-body------>
</div>