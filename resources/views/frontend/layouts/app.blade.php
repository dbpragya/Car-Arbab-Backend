<!DOCTYPE html>
<html lang="en">

<head>
    <title> Car Arbab</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('public/frontend/assets/images/favicon.ico')}}">
    <!-- Css Meta Url-css Style Include -->

      @include('frontend.include.cssinclude')
    <!-- /Css Include -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    
</head>
<body>
    <!-- Header -->

    @include('frontend.include.header')
    <!-- /Header -->

    @yield('content')

    <!-- Footer -->
    @include('frontend.include.footer')
    <!-- /Footer -->

    <!-- JS Include -->

    @include('frontend.include.jsinclude')
    <!-- /JS Include -->

</body>
</html>