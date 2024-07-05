<!DOCTYPE html>
<html lang="en">

<head>
    <title> Car Arbab</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- Css Meta Url-css Style Include -->

      @include('frontend.include.cssinclude')
    <!-- /Css Include -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body>

    <!-- Header -->

 
    <!-- /Header -->

    @yield('content')
   

    <!-- Footer -->
 
    <!-- /Footer -->


    <!-- JS Include -->

    @include('frontend.include.jsinclude')
    <!-- /JS Include -->




</body>

</html>