@extends('frontend.layouts.app')

@section('content')

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!--pusher link-->
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<!-- Bootstrap 5 requires the following JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>-->
<link href="https://cdn.jsdelivr.net/npm/lightgallery@2.5.0/css/lightgallery-bundle.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css"> 

 <style>

        body {

            background-color: #f8f9fa;

            font-family: Arial, sans-serif;

        }

        .car-auction-details-gallery .car-gallery-container {

            padding: 1rem;

            position: relative;

        }

        .pswp-gallery {

            position: relative;

            overflow: hidden;

        }

        .car-main-image {

            position: relative;

            background-color: #efefef;

            overflow: hidden;

        }

        .image-wrapper {

            height: 0;

            padding-bottom: 56.25%; /* 16:9 aspect ratio */

            position: relative;

            

        }

        .image-wrapper img {

            position: absolute;

            top: 0;

            left: 0;

            width: 100%;

            height: 100%;

            object-fit: cover;

            border-radius: 15px;

            transition: transform 0.2s;

            cursor: pointer;

            object-position: top;

        }

        .image-wrapper img:hover {

            /*transform: scale(1.05);*/

               border-radius: 15px;

        }

        .gallery-container {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 0.5rem;

        }

        .gallery-container .photo {

            position: relative;

            overflow: hidden;

        }

        .gallery-container .photo img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: transform 0.2s;

            cursor: pointer;

        }

        .gallery-container .photo img:hover {

            transform: scale(1.05);

        }

        .all-photos-wrapper {

            position: relative;

            overflow: hidden;

        }

        .all-photos-button {

            position: absolute;

            bottom: 0;

            right: 0;

            background-color: rgba(0, 0, 0, 0.5);

            color: white;

            padding: 10px;

            text-decoration: none;

            text-align: center;

            font-weight: bold;

            width: 100%;

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            opacity: 0;

            transition: opacity 0.3s;

        }

        .all-photos-wrapper:hover .all-photos-button {

            opacity: 1;

        }

        .buttons-wrapper {

            padding: 1rem 0.75rem 0 0.75rem;

        }

        .radio-container {

            display: flex;

            gap: 1rem;

        }

        .radio-item {

            display: flex;

            align-items: center;

            gap: 0.5rem;

        }

        .radio-item input[type=radio] {

            display: none;

        }

        .radio-item label {

            padding: 0.5rem 1rem;

            background-color: #efefef;

            border: 1px solid transparent;

            cursor: pointer;

            transition: background-color 0.2s, border-color 0.2s;

        }

        .radio-item input:checked + label {

            background-color: #ecf8ff;

            border-color: #ad9d6f;

        }

        .auction-viewer-wrap .auction-wrapper {

            display: flex;

            align-items: center;

            gap: 1rem;

            margin-top: 1rem;

        }

        .auction-viewer-wrap a {

            color: #007bff;

            text-decoration: none;

            font-weight: bold;

        }

        .auction-viewer-wrap a:hover {

            text-decoration: underline;

        }

        .vertical-line {

            width: 1px;

            height: 20px;

            background-color: #000;

        }

/*== start of code for tooltips ==*/
.tool {
    cursor: help;
    position: relative;
}


/*== common styles for both parts of tool tip ==*/
.tool::before,
.tool::after {
    left: 50%;
    opacity: 0;
    position: absolute;
    z-index: -100;
}

.tool:hover::before,
.tool:focus::before,
.tool:hover::after,
.tool:focus::after {
    opacity: 1;
    transform: scale(1) translateY(0);
    z-index: 100; 
}


/*== pointer tip ==*/
.tool::before {
    border-style: solid;
    border-width: 1em 0.75em 0 0.75em;
    border-color: #33e990 transparent transparent transparent;
    bottom: 100%;
    content: "";
    margin-left: -0.5em;
    transition: all .65s cubic-bezier(.84,-0.18,.31,1.26), opacity .65s .5s;
    transform:  scale(.6) translateY(-90%);
} 

.tool:hover::before,
.tool:focus::before {
    transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
}


/*== speech bubble ==*/
.tool::after {
    background: #33e990;
    border-radius:10px;
    bottom: 110%;
    color: #EDEFF0;
    content: attr(data-tip);
    margin-left: -8.75em;
    padding: 5px 30px;
   /* transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
    transform:  scale(.6) translateY(50%) ;  */
    width: auto;
    z-index: 99999;
    text-align: center;
    margin: 0px;
    position: absolute;
    left: 0;
}

/*.tool:hover::after,
.tool:focus::after  {
    transition: all .65s cubic-bezier(.84,-0.18,.31,1.26);
}*/

@media (max-width: 760px) {
  .tool::after { 
        font-size: .75em;
        margin-left: -5em;
        width: 10em; 
  }
}


    </style>

<style>

/*ncss*/

.container-csst {

            max-width: 900px;

            background-color: #fff;

            padding: 20px;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            overflow: hidden;

        }

        .main-image {

            width: 100%;

            height: auto;

            display: block;

            margin-bottom: 20px;

            cursor: pointer;

        }

        .swiper-container {

            width: 100%;

            padding-top: 10px;

            padding-bottom: 10px;

        }

        .swiper-wrapper {

            display: flex;

            align-items: center;

        }

        .swiper-slide {

            width: 100px;

            height: 100px;

            overflow: hidden;

            display: flex;

            justify-content: center;

            align-items: center;

        }

        .swiper-slide img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            cursor: pointer;

            transition: transform 0.3s ease;

        }

        .swiper-slide img:hover {

            transform: scale(1.1);

        }

        .buttons {

            display: flex;

            justify-content: center;

            margin-top: 20px;

        }

        .button {

            background-color: #ccc;

            border: none;

            padding: 10px 20px;

            margin: 0 5px;

            cursor: pointer;

            transition: background-color 0.3s ease;

        }

        .button:hover {

            background-color: #aaa;

        }

/*ncss*/



.product-img-box {

    position: relative;

    width: 100%;

    height: 280px;

    overflow: hidden;

}

.product-img-box img {

    width: 100%;

    height: 100%;

    object-fit: cover;

}



  #canvasContainer {

        width: 100%;

        max-width: 800px;

        margin: 0 auto;

    }



    #baseImageCanvas {

        width: 100%;

/*        border: 1px solid #000;*/

    }

    

    .hover-image {

        position: absolute;

        display: none;

        border: 2px solid #000;

        border-radius: 4px;

        transition: all 0.2s ease-in-out;

    }



    .hover-image img {

        width: 300px;

        height: 300px;

        object-fit: cover;

        border-radius: 8px;

    }



    #fileInput {

        display: none;

    }

</style>

<style>

.right-text ul,

.right-text ol {

    list-style-position: inside; /* Ensure the list style is inside the container */

    padding-left: 20px; /* Adjust padding for better indentation */

}



.right-text li {

    margin-bottom: 5px; /* Add spacing between list items */

}



.d-flex {

    display: flex;

}



.justify-content-between {

    justify-content: space-between;

}



.left-text {

    font-weight: bold;

}



.w-225 {

    width: 225px; /* Adjust width as needed */

}

 .overflow-hidden {

    overflow: hidden !important;

}

.card-body> :last-child {

    margin-bottom: 0;

}

.product-slider .carousel {

    margin: 0;

}

.carousel {

    position: relative;

}

.carousel-inner {

    position: relative;

    width: 100%;

    overflow: hidden;

}

.h-auto {

    height: auto !important;

}

.product-slider .carousel-item img {

    width: 100%;

    height: auto;

}

.h-100 {

    height: 100% !important;

}

.product-slider .thumbcarousel {

    margin: 10px 0 0 0;

    padding: 0;

}

.product-slider .carousel {

    margin: 0;

}

.carousel-inner {

    position: relative;

    width: 100%;

    overflow: hidden;

}

.product-slider .thumbcarousel .carousel-item {

    text-align: center;

    overflow-x: scroll;

    white-space: nowrap;

}

.carousel-item-next, .carousel-item-prev, .carousel-item.active {

    display: block;

}

.carousel-item-next, .carousel-item-prev, .carousel-item.active {

    display: block;

}

.carousel-item {

    position: relative;

    display: none;

    -ms-flex-align: center;

    align-items: center;

    width: 100%;

    transition: -webkit-transform .6s ease;

    transition: transform .6s ease;

    transition: transform .6s ease, -webkit-transform .6s ease;

    -webkit-backface-visibility: hidden;

    backface-visibility: hidden;

    -webkit-perspective: 1000px;

    perspective: 1000px;

}

.carousel-item {

    position: relative;

    display: none;

    float: left;

    width: 100%;

    margin-right: -100%;

    -webkit-backface-visibility: hidden;

    backface-visibility: hidden;

    transition: -webkit-transform .6s ease-in-out;

    transition: transform .6s ease-in-out;

    transition: transform .6s ease-in-out,-webkit-transform .6s ease-in-out;

}

.product-slider .thumbcarousel .carousel-item .thumb {

    width: 100%;

    /* height: 110px; */

    height: auto;

    margin: 0 2px;

    display: inline-block;

    vertical-align: middle;

    cursor: pointer;

    max-width: 130px;

    margin-bottom: 2px;

    border: 2px solid transparent;

}

.product-slider .carousel-item img {

    width: 100%;

    height: auto;

    border-radius: 10px;

}

.buttons {

            display: flex;

            justify-content: center;

            margin-top: 20px;

        }

        .button {

            background-color: #ccc;

            border: none;

            padding: 10px 20px;

            margin: 0 5px;

            cursor: pointer;

            transition: background-color 0.3s ease;

        }

        .button:hover {

            background-color: #aaa;

        }

         .thumb {

            cursor: pointer;

            border-radius:10px;

            border-radius: 10px;

            border: 2px solid transparent;

            transition: border 0.1s ease;

        }



        .thumb.active {

              border: 2px solid #21e78

        }



        .carousel-main .carousel-inner img {

            max-height: 500px;

            object-fit: cover;

        }



        .carousel-thumb .carousel-inner {

            display: flex;

            justify-content: center;

            align-items: center;

            gap: 1rem;

        }



        .carousel-thumb .thumb {

            width: 100px;

            height: 75px;

            overflow: hidden;

        }



        .carousel-thumb .thumb img {

            width: 100%;

            height: 100%;

            object-fit: cover;

        }



        .carousel-control-prev-icon,

        .carousel-control-next-icon {

            background-color: rgba(0, 0, 0, 0.5);

        }

        div#carouselThumb {

    display: block !important;

}

.thumb {

    padding: 0;

}


/* Image gallery stlyling */
.containerss {
  max-width: 900px;
  margin: 80px auto 0;
  text-align: center;
}

.containerss__img-holder {
    display: inline-block;
    vertical-align: middle;
    margin: 5px 2.5px;
    cursor: pointer;
}

.containerss .containerss__img-holder:nth-child(3n+1) {
  margin-left: 0;
}

.containerss__img-holder img {
     width: 40px;
    height: 40px;
  display: block;
}


/* Popup Styling */
.img-popup {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(255, 255, 255, .5);
  display: flex;
  justify-content: center;
  align-items: center;
  display: none;
  z-index: 989;
}

.img-popup img {
  max-width: 900px;
  width: 100%;
  opacity: 0;
  transform: translateY(-100px);
  -webkit-transform: translateY(-100px);
  -moz-transform: translateY(-100px);
  -ms-transform: translateY(-100px);
  -o-transform: translateY(-100px);
}

.close-btn {
  width: 35px;
  height: 30px;
  display: flex;
  justify-content: center;
  flex-direction: column;
  position: absolute;
  top: 20px;
  right: 20px;
  cursor: pointer;
}

.close-btn .bar {
  height: 4px;
  background: #333;
}

.close-btn .bar:nth-child(1) {
  transform: rotate(45deg);
}

.close-btn .bar:nth-child(2) {
  transform: translateY(-4px) rotate(-45deg);
}

.opened {
  display: flex;
}

.opened img {
  animation: animatepopup 1s ease-in-out .8s;
  -webkit-animation: animatepopup .3s ease-in-out forwards;
}

@keyframes animatepopup {

  to {
    opacity: 1;
    transform: translateY(0);
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
  }

}

@media screen and (max-width: 880px) {

  .containerss .containerss__img-holder:nth-child(3n+1) {
    margin-left:6px;
  }

}


</style>

    <!-----Breadcrumb------->

    <section class="breadcrumb pt-50 pb-50 mb-0">



        <div class="container">

            <div class="row mx-0 px-0">

                <div class="col-xl-8 col-lg-7 mx-0 px-0">



                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">Home</li>

                            <li class="breadcrumb-item" aria-current="page">Listing</li>

                            <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ $cardetails->veh_car_model }}</a></li>

                        </ol>

                    </nav>

                    <!--<div class="visitor">-->

                    <!--    <div class="v-cion"> <span class="count-visitor">{{ $cardetails->views_count }}</span></div>-->

                    <!--</div>-->



                    <div class="heading d-flex justify-content-lg-start justify-content-between align-items-center">

                    {{ $cardetails->title }} 

                    <div class="tag1" style=" border: 1px solid #21E786; border-radius: 50px; box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.25);color: #000;font-family: &quot;Termina Test&quot;;font-size: 14px;font-style: normal;font-weight: 500;line-height: 18px;padding: 9px 15px;  margin-left: 10px;">

                             <!--<img class="" src="{{ asset('frontend/assets/images/icon/eye-detail.svg')}}" style=" margin-bottom: 2px;">-->

                             <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="margin-bottom: 2px;"><path fill="black" d="M11.5 18c4 0 7.46-2.22 9.24-5.5C18.96 9.22 15.5 7 11.5 7s-7.46 2.22-9.24 5.5C4.04 15.78 7.5 18 11.5 18m0-12c4.56 0 8.5 2.65 10.36 6.5C20 16.35 16.06 19 11.5 19S3 16.35 1.14 12.5C3 8.65 6.94 6 11.5 6m0 2C14 8 16 10 16 12.5S14 17 11.5 17S7 15 7 12.5S9 8 11.5 8m0 1A3.5 3.5 0 0 0 8 12.5a3.5 3.5 0 0 0 3.5 3.5a3.5 3.5 0 0 0 3.5-3.5A3.5 3.5 0 0 0 11.5 9"/ ></svg>

                             <span class="count-visitor" style="font-size:14px;">{{ $cardetails->views_count }}</span> </div>

                     <div class="tag2">MUV</div>

                    </div>

                    <p class="p">{{ $cardetails->trimdata }}</p>

                </div>



                <div

                    class="d-md-flex d-none col-xl-4 col-lg-5 mx-0 px-0 align-items-center  breadcrumb-right mt-4 pt-lg-3 d-flex gap-lg-4 gap-2 justify-content-lg-start justify-content-between">

                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn buy-now"> Buy Now 

                        <span> {{ $cardetails->carAuction->buyCurrency->code ?? '' }} {{ $cardetails->carAuction->buy_now_price ?? '' }}</span></button>

                    <button data-bs-toggle="modal" data-bs-target="#bid-now-modle" class="btn bid-now">Bid

                        Now</button>

                </div>

            </div>

        </div>

    </section>



    <!-----Breadcrumb------->

 <!--black box-->

 <section class="black-top-box pb-50">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

                    <div class="black-tile">

                        <div class="row">

                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">

                                <div class="d-flex justify-evenly align-center">

                                    <div class="bt-head">

                                        <h6>Repair It Through Us</h6>

                                        <p class="mb-0">We will repair it for you with 1 Year Guarantee (Optional)</p>

                                    </div>

                                    <div class="btact-btn ">

                                        <button class="bactbutton btn mx-2" type="button">Learn More

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 31" fill="none">

                                              <path d="M18.2007 2.37502C18.2006 2.17959 18.1396 1.98904 18.0259 1.83003C17.9123 1.67103 17.7518 1.55151 17.5669 1.48819C17.382 1.42487 17.182 1.42092 16.9947 1.47689C16.8074 1.53285 16.6424 1.64594 16.5225 1.80033L4.88442 16.8003C4.7769 16.9389 4.71041 17.1049 4.69252 17.2794C4.67462 17.4539 4.70603 17.6299 4.78318 17.7874C4.86033 17.9449 4.98012 18.0776 5.12894 18.1705C5.27777 18.2633 5.44964 18.3125 5.62504 18.3125H12.4463V28.625C12.4464 28.826 12.5111 29.0216 12.6308 29.183C12.7505 29.3444 12.9188 29.4631 13.1111 29.5215C13.3034 29.58 13.5093 29.5751 13.6986 29.5076C13.8879 29.4401 14.0505 29.3136 14.1624 29.1467L25.1541 12.7405C25.2486 12.5994 25.3031 12.4352 25.3115 12.2655C25.32 12.0959 25.2822 11.9271 25.2022 11.7772C25.1222 11.6274 25.003 11.5021 24.8573 11.4147C24.7116 11.3274 24.5449 11.2812 24.375 11.2813H18.2007V2.37502Z" fill="black"/>

                                             <path d="M25.1541 12.7405C25.2682 12.5703 25.3234 12.3674 25.3112 12.1628C25.299 11.9583 25.2201 11.7633 25.0865 11.6079C24.953 11.4524 24.7723 11.3449 24.5719 11.302C24.3715 11.259 24.1626 11.2829 23.9771 11.3699L12.9854 16.5262C12.8241 16.6019 12.6878 16.7219 12.5924 16.8722C12.4969 17.0226 12.4462 17.197 12.4463 17.3751V28.6251C12.4464 28.826 12.5111 29.0216 12.6308 29.183C12.7505 29.3444 12.9188 29.4631 13.1111 29.5216C13.3034 29.58 13.5093 29.5751 13.6986 29.5077C13.8879 29.4402 14.0505 29.3137 14.1624 29.1468L25.1541 12.7405Z" fill="#21E786"/>

                                            </svg>

                                        </button>

                                    </div>

                               

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">

                               <div class="d-flex justify-evenly align-center">

                                    <div class="bt-head">

                                        <h6>Car Arbab's Extended Warranty</h6>

                                        <p class="mb-0">Opt-in for our warranty & drive like a boss! (Optional)</p>

                                    </div>

                                    <div class="btact-btn">

                                        <button class="bactbutton btn mx-2" type="button">Learn More

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 31" fill="none">

                                                <path d="M18.2007 2.37502C18.2006 2.17959 18.1396 1.98904 18.0259 1.83003C17.9123 1.67103 17.7518 1.55151 17.5669 1.48819C17.382 1.42487 17.182 1.42092 16.9947 1.47689C16.8074 1.53285 16.6424 1.64594 16.5225 1.80033L4.88442 16.8003C4.7769 16.9389 4.71041 17.1049 4.69252 17.2794C4.67462 17.4539 4.70603 17.6299 4.78318 17.7874C4.86033 17.9449 4.98012 18.0776 5.12894 18.1705C5.27777 18.2633 5.44964 18.3125 5.62504 18.3125H12.4463V28.625C12.4464 28.826 12.5111 29.0216 12.6308 29.183C12.7505 29.3444 12.9188 29.4631 13.1111 29.5215C13.3034 29.58 13.5093 29.5751 13.6986 29.5076C13.8879 29.4401 14.0505 29.3136 14.1624 29.1467L25.1541 12.7405C25.2486 12.5994 25.3031 12.4352 25.3115 12.2655C25.32 12.0959 25.2822 11.9271 25.2022 11.7772C25.1222 11.6274 25.003 11.5021 24.8573 11.4147C24.7116 11.3274 24.5449 11.2812 24.375 11.2813H18.2007V2.37502Z" fill="black"/>

                                                <path d="M25.1541 12.7405C25.2682 12.5703 25.3234 12.3674 25.3112 12.1628C25.299 11.9583 25.2201 11.7633 25.0865 11.6079C24.953 11.4524 24.7723 11.3449 24.5719 11.302C24.3715 11.259 24.1626 11.2829 23.9771 11.3699L12.9854 16.5262C12.8241 16.6019 12.6878 16.7219 12.5924 16.8722C12.4969 17.0226 12.4462 17.197 12.4463 17.3751V28.6251C12.4464 28.826 12.5111 29.0216 12.6308 29.183C12.7505 29.3444 12.9188 29.4631 13.1111 29.5216C13.3034 29.58 13.5093 29.5751 13.6986 29.5077C13.8879 29.4402 14.0505 29.3137 14.1624 29.1468L25.1541 12.7405Z" fill="#21E786"/>

                                             </svg>

                                        </button>

                                    </div>

                               

                                </div>

                                

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--black box-->



    <!-----Gallery Images section------->

    <section class="gallery-section">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <!--new gallery-->

                    <div class="px-0">

                        <div class="row">

                            <div class="col-md-12 ">

                                <div class="tab-content ">
                                    
                                    @php
                                    
                                        $thumbnail = $cardetails->carMedia->where('type', 'thmnail')->first();
                                        
                                        $carMedia = $cardetails->carMedia->whereIn('type', ['image_form1'])->first();
                                    
                                        $carExterior = $cardetails->carMedia->whereIn('type', 'exterior_photos')->first();

                                        $carInterior = $cardetails->carMedia->whereIn('type', 'interior_photos')->first();

                                        $enginebay =  $cardetails->carMedia->whereIn('type', 'engine_bay_undercarriage')->first();
                                        
                                    @endphp

                                    <!-- Add other tab car images here -->
                                    <div class="tab-pane fade show active" id="all">

                                        <div class="car-auction-details-gallery mt-4">

                                            <div class="car-gallery-container">

                                                <div class="pswp-gallery pswp-gallery--single-column lightgallery">

                                                    <div class="row gx-3">

                                                        <div class="col-12 col-lg-9">

                                                           <div class="car-main-image">
                                                               
                                                               

                                                                @if($thumbnail && $thumbnail->images)

                                                                    @php

                                                                        $imagePaths = explode(',', $thumbnail->images);

                                                                        $firstImage = $imagePaths[0] ?? null;

                                                                    @endphp

                                                                    @if($firstImage)

                                                                        <a href="{{ asset('public/' . $firstImage) }}" class="gallery-item">

                                                                            <div class="image-wrapper">

                                                                                <img src="{{ asset('public/' . $firstImage) }}" alt="Car Image">

                                                                            </div>

                                                                        </a>

                                                                    @endif

                                                                @endif

                                                            </div>



                                                        </div>

                                                        <div class="col-12 col-lg-3 car-images-wrapper">

                                                            <div class="wrapper">

                                                                <div class="gallery-container h-100 align-items-center justify-content-center">

                                                                   



                                                                    @if($carMedia && $carMedia->images)

                                                                        @php

                                                                            $imagePath = explode(',', $carMedia->images);

                                                                        @endphp

                                                                        @foreach($imagePath as $index => $image)

                                                                            @if($index < 12)

                                                                                <a href="{{ asset('public/' . $image) }}" class="gallery-item">

                                                                                    <div class="image-wrapper">

                                                                                        <img src="{{ asset('public/' . $image) }}" alt="Car image">

                                                                                    </div>

                                                                                </a>

                                                                            @else

                                                                                @break

                                                                            @endif

                                                                        @endforeach

                                                                    @endif

                                                                </div>

                                                            </div>

                                                        </div>

                                                        

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- Add other tab exterior here -->

                                    <div class="tab-pane fade" id="exterior">

                                        <div class="car-auction-details-gallery mt-4">

                                            <div class="car-gallery-container">

                                                <div class="pswp-gallery pswp-gallery--single-column lightgallery">

                                                    <div class="row gx-3">

                                                        <div class="col-12 col-lg-9">

                                                            <div class="car-main-image">

                                                                @if($carExterior && $carExterior->images)

                                                                    @php

                                                                        $imagePath = explode(',', $carExterior->images);

                                                                        $firstImage = $imagePath[0] ?? null;

                                                                    @endphp

                                                                    @if($firstImage)

                                                                        <a href="{{ asset('public/' . $firstImage) }}" class="gallery-item">

                                                                            <div class="image-wrapper">

                                                                                <img src="{{ asset('public/' . $firstImage) }}" alt="Exterior Image">

                                                                            </div>

                                                                        </a>

                                                                    @endif

                                                                @endif

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 car-images-wrapper">

                                                            <div class="wrapper">

                                                                <div class="gallery-container h-100 align-items-center justify-content-center">

                                                                        @if($carExterior && $carExterior->images)

                                                                        @php

                                                                            $imagePathsexterior = explode(',', $carExterior->images);

                                                                        @endphp

                                                                        @foreach($imagePathsexterior as $index => $image)

                                                                            @if($index < 12)

                                                                                <a href="{{ asset('public/' . $image) }}" class="gallery-item">

                                                                                    <div class="image-wrapper">

                                                                                        <img src="{{ asset('public/' . $image) }}" alt="Exterior Image">

                                                                                    </div>

                                                                                </a>

                                                                            @else

                                                                                @break

                                                                            @endif

                                                                        @endforeach

                                                                    @endif



                                                                    <!--<div class="all-photos-wrapper">-->

                                                                    <!--    <a class="photo gallery-item" href="https://i.sbxcars.com/cdn-cgi/image/width=400,height=400,quality=80/auctions/096a3219-026e-4db9-9790-948b969735be/SBX_BMW3.0CSL_009.JPG">-->

                                                                    <!--        <img src="https://i.sbxcars.com/cdn-cgi/image/width=400,height=400,quality=80/auctions/096a3219-026e-4db9-9790-948b969735be/SBX_BMW3.0CSL_009.JPG" alt="Car Image">-->

                                                                    <!--    </a>-->

                                                                    <!--    <a class="all-photos-button" href="#">-->

                                                                    <!--        +15 photos-->

                                                                    <!--    </a>-->

                                                                    <!--</div>-->

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                            
                                     <!-- Add other tab interior here -->

                                    <div class="tab-pane fade" id="interior">

                                        <div class="car-auction-details-gallery mt-4">

                                            <div class="car-gallery-container">

                                                <div class="pswp-gallery pswp-gallery--single-column lightgallery">

                                                    <div class="row gx-3">

                                                        <div class="col-12 col-lg-9">

                                                            <div class="car-main-image">

                                                                @if($carInterior && $carInterior->images)

                                                                    @php

                                                                        $imagePaths = explode(',', $carInterior->images);

                                                                        $firstImage = $imagePaths[0] ?? null;

                                                                    @endphp

                                                                    @if($firstImage)

                                                                        <a href="{{ asset('public/' . $firstImage) }}" class="gallery-item">

                                                                            <div class="image-wrapper">

                                                                                <img src="{{ asset('public/' . $firstImage) }}" alt="Interior Image">

                                                                            </div>

                                                                        </a>

                                                                    @endif

                                                                @endif

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 car-images-wrapper">

                                                            <div class="wrapper">

                                                                <div class="gallery-container h-100 align-items-center justify-content-center">

                                                                    @if($carInterior && $carInterior->images)

                                                                        @php

                                                                            $imagePaths = explode(',', $carInterior->images);

                                                                        @endphp

                                                                        @foreach($imagePaths as $index => $image)

                                                                            @if($index < 12)

                                                                                <a href="{{ asset('public/' . $image) }}" class="gallery-item">

                                                                                    <div class="image-wrapper">

                                                                                        <img src="{{ asset('public/' . $image) }}" alt="Interior Image">

                                                                                    </div>

                                                                                </a>

                                                                            @else

                                                                                @break

                                                                            @endif

                                                                        @endforeach

                                                                    @endif
                                                                    

                                                                    <!--<div class="all-photos-wrapper">-->

                                                                    <!--    <a class="photo gallery-item" href="https://i.sbxcars.com/cdn-cgi/image/width=400,height=400,quality=80/auctions/096a3219-026e-4db9-9790-948b969735be/SBX_BMW3.0CSL_009.JPG">-->

                                                                    <!--        <img src="https://i.sbxcars.com/cdn-cgi/image/width=400,height=400,quality=80/auctions/096a3219-026e-4db9-9790-948b969735be/SBX_BMW3.0CSL_009.JPG" alt="Car Image">-->

                                                                    <!--    </a>-->

                                                                    <!--    <a class="all-photos-button" href="#">-->

                                                                    <!--        +15 photos-->

                                                                    <!--    </a>-->

                                                                    <!--</div>-->

                                                                </div>

                                                            </div>

                                                        </div>

                                                        

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                     <!--Add other tab enginebay here -->

                                    <div class="tab-pane fade" id="enginebay">

                                            <div class="car-auction-details-gallery mt-4">

                                                <div class="car-gallery-container">

                                                        <div class="pswp-gallery pswp-gallery--single-column lightgallery">

                                                            <div class="row gx-3">

                                                                <div class="col-12 col-lg-9">

                                                                    <div class="car-main-image">

                                                                          @if($enginebay && $enginebay->images)

                                                                            @php

                                                                                $imagePaths = explode(',', $enginebay->images);

                                                                                $firstImage = $imagePaths[0] ?? null;

                                                                            @endphp

                                                                            @if($firstImage)

                                                                                <a href="{{ asset('public/' . $firstImage) }}" class="gallery-item">

                                                                                    <div class="image-wrapper">

                                                                                        <img src="{{ asset('public/' . $firstImage) }}" alt="Engine Bay and undercarriage Image">

                                                                                    </div>

                                                                                </a>

                                                                            @endif

                                                                        @endif

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 car-images-wrapper">

                                                                    <div class="wrapper">

                                                                        <div class="gallery-container h-100 align-items-center justify-content-center">

                                                                              @if($enginebay && $enginebay->images)

                                                                                @php

                                                                                    $imagePaths = explode(',', $enginebay->images);

                                                                                @endphp

                                                                                @foreach($imagePaths as $index => $image)

                                                                                    @if($index < 12)

                                                                                        <a href="{{ asset('public/' . $image) }}" class="gallery-item">

                                                                                            <div class="image-wrapper">

                                                                                                <img src="{{ asset('public/' . $image) }}" alt="Engine Bay and undercarriage Image">

                                                                                            </div>

                                                                                        </a>

                                                                                    @else

                                                                                        @break

                                                                                    @endif

                                                                                @endforeach

                                                                            @endif

                                                                            

                                                                            <!--<div class="all-photos-wrapper">-->

                                                                            <!--    <a class="photo gallery-item" href="https://i.sbxcars.com/cdn-cgi/image/width=400,height=400,quality=80/auctions/096a3219-026e-4db9-9790-948b969735be/SBX_BMW3.0CSL_009.JPG">-->

                                                                            <!--        <img src="https://i.sbxcars.com/cdn-cgi/image/width=400,height=400,quality=80/auctions/096a3219-026e-4db9-9790-948b969735be/SBX_BMW3.0CSL_009.JPG" alt="Car Image">-->

                                                                            <!--    </a>-->

                                                                            <!--    <a class="all-photos-button" href="#">-->

                                                                            <!--        +15 photos-->

                                                                            <!--    </a>-->

                                                                            <!--</div>-->

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                

                                                            </div>

                                                        </div>

                                                    </div>

                                        </div>

                                    </div>

                                    </div>

                                <div class="mt-3 scroll-x gap-3 d-flex">
                                    
                              
                                            

                                    <button class="btn btn-primar btn-tag ongallaryclick" data-bs-toggle="tab" data-bs-target="#all">All Images</button>

                                    <button class="btn btn-primar btn-tag ongallaryclick" data-bs-toggle="tab" data-bs-target="#exterior">Exterior Images</button>

                                    <button class="btn btn-primar btn-tag ongallaryclick" data-bs-toggle="tab" data-bs-target="#interior">Interior Images</button>

                                    <button class="btn btn-primar btn-tag ongallaryclick" data-bs-toggle="tab" data-bs-target="#enginebay">Mechanical Images </button>

                                </div>
                        </div>

                    </div>

                </div>


                    <!--new gallery-->

                    <!-- tab gallery section-->

                    <div class="row mt-3 d-none">

                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 ">

                            <!--tabs switch start here-->

                            <div class="tabs scroll-x gap-3 ">

                             <button class="tab btn btn-tag m-0" onclick="showSlide(0)">Exterior Images</button>

                             <button class="tab btn btn-tag m-0" onclick="showSlide(1)">Interior  Images</button>

                             <!--<button class="tab btn btn-tag m-0" onclick="showSlide(2)">Tab button</button>-->

                             </div>

                            <!--tabs switch end here-->

                            

                            <!--gallery start from here-->

                            <div id="lightgallery" class="slides mt-2">

                                <div class="slide swiper-container" style="display: flex;">

                                      @php

                                         $carMedia = $cardetails->carMedia->where('type', 'exterior_photos')->first(); 

                                      @endphp

                                    <div class="swiper-wrapper">

                                          @if($carMedia && $carMedia->images)

                                            @php

                                                $imagePaths = explode(',', $carMedia->images);

                                            @endphp

                                            @foreach($imagePaths as $index => $image)

                                                  <div class="swiper-slide"><a href="{{ asset('public/' .$image) }}">

                                                    <img src="{{ asset('public/' .$image) }}" alt="Image 1"></a>

                                                </div>

                                            @endforeach

                                        @endif

        

                                    </div>

                                    <!-- Add Pagination -->

                                    <div class="swiper-pagination">

                

                                    </div>

                                </div>

                                

                                <!--tab slide 02-->

                                <div class="slide swiper-container">

                                      @php

                                         $carMedia = $cardetails->carMedia->where('type', 'interior_photos')->first(); 

                                      @endphp

                                        <div class="swiper-wrapper">

                                             @if($carMedia && $carMedia->images)

                                            @php

                                                $imagePaths = explode(',', $carMedia->images);

                                            @endphp

                                            @foreach($imagePaths as $index => $image)

                                                  <div class="swiper-slide"><a href="{{ asset('public/' .$image) }}">

                                                    <img src="{{ asset('public/' .$image) }}" alt="Image 2"></a>

                                                </div>

                                            @endforeach

                                        @endif

                                        </div>

                                    <!-- Add Pagination -->

                                    <div class="swiper-pagination"></div>

                                </div>

                                

                                <!--tab slide 03-->

                                <div class="slide swiper-container">

                                    <div class="swiper-wrapper">

                                            <div class="swiper-slide"><a href="https://d38b044pevnwc9.cloudfront.net/cutout-nuxt/enhancer/3.jpg">

                                                <img src="https://d38b044pevnwc9.cloudfront.net/cutout-nuxt/enhancer/3.jpg" alt="Image 2"></a>

                                            </div>

                                            <div class="swiper-slide"><a href="https://d38b044pevnwc9.cloudfront.net/cutout-nuxt/enhancer/3.jpg">

                                                <img src="https://d38b044pevnwc9.cloudfront.net/cutout-nuxt/enhancer/3.jpg" alt="Image 2"></a>

                                            </div>

                                    </div>

                                     <!-- Add Pagination -->

                                     <div class="swiper-pagination"></div>

                                </div>

                            </div>

                            <!--gallery end ffrom here-->

                        </div>

                    </div>

                    <!--tab gallery section-->

                </div>

            </div>

            <!---row----->

        </div>

        <!---container---->



    </section>

    <!-----Gallery Images section------->





    <!-----Auction-timer------->

    <section class="auction-timer pt-50">

        <div class="container countdown-bg unset px-2" id="Fx">

            <div class="d-flex align-items-center justify-content-between">



                <div class="">

                    <div class="timer">

                        <div class="">

    @if(isset($cardetails->quick_auction_start_time))

        <div class="timer">

            <div id="quickCountdown" class="countdown">

                <div class="countdown-number">

                    <span class="days countdown-time"></span>

                    <span class="countdown-text">Days</span>

                </div>

                <div class="countdown-number">

                    <span class="hours countdown-time"></span>

                    <span class="countdown-text">Hours</span>

                </div>

                <div class="countdown-number">

                    <span class="minutes countdown-time"></span>

                    <span class="countdown-text">Minutes</span>

                </div>

                <div class="countdown-number">

                    <span class="seconds countdown-time"></span>

                    <span class="countdown-text">Seconds</span>

                </div>

            </div>

        </div>

    @else

        <div class="timer">

            <div id="extendedCountdown" class="countdown">

                <div class="countdown-number">

                    <span class="days countdown-time"></span>

                    <span class="countdown-text">Days</span>

                </div>

                <div class="countdown-number">

                    <span class="hours countdown-time"></span>

                    <span class="countdown-text">Hours</span>

                </div>

                <div class="countdown-number">

                    <span class="minutes countdown-time"></span>

                    <span class="countdown-text">Minutes</span>

                </div>

                <div class="countdown-number">

                    <span class="seconds countdown-time"></span>

                    <span class="countdown-text">Seconds</span>

                </div>

            </div>

        </div>

    @endif

</div>



                    </div>

                </div>

                <!----col--->





                <div class="">

                    <ul class="custom-list">



                        <li class="d-lg-block d-none">

                            <div class="top-tit">Lot Number:</div>

                            <div class="deta"> {{ $cardetails->carAuction->lot_number ?? '' }}



                            </div>

                        </li>

                        <li>

                            <div class="top-tit">Current Bid Price:</div>

                            <div class="deta">AED <span id="current_bid_price_li"></span></div>

                        </li>

                        <li class="d-lg-block d-none">

                            <div class="top-tit">Est. Market Value:</div>

                            <div class="deta">AED {{ $cardetails->carAuction->estimated_market_value ?? '' }}</div>

                        </li>





                        <li class="d-lg-block d-none">

                            <div class="top-tit">Ext. Warranty Package Cost</div>

                            <div class="deta">AED {{ $cardetails->carAuction->estimated_repair_cost ?? '' }}</div>

                        </li>



                       



                        <li class="d-xl-block d-none">

                            <div class="top-tit">Auction Date and Time:</div>

                            <div class="deta">

                            @if (isset($cardetails->carAuction->auction_date))

                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_date)->format('d-m-Y') }}, 

                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_time)->format('H:i') }} 

                              

                               @if (isset($cardetails->carAuction->timezone))

                                    @php

                                        $timezone = $cardetails->carAuction->timezone;

                                       

                                    @endphp

                                      {{$timezone->utc_offset }} 

                                @endif

                              

                            @endif

                           

                            </div>

                        </li>



                    </ul>

                </div>

                <!----col--->

            </div>

            <!---row---->

        </div>

        <!----container--->





        <div class="container">

            <!-- row  -->

            <div class="row gx-5 gy-5">

                <!-- col 1 -->

                <div class="col-xl-8 col-md-6 col-lg-7 ">

                    <div class="row">

                        <div class="col-lg-12  tag-group ">



                            <div class="scroll-x gap-3 d-flex">

                            

                             @if($cardetails->carAuction->chassis_perfect == 1)

                                <a class="btn btn-tag m-0" href="#">Chassis Perfect</a>

                             @endif

                             

                              @if($cardetails->carAuction->gcc_specs == 1)

                                <a class="btn btn-tag m-0" href="#">Gcc Perfect</a>

                             @endif

                             

                             @if($cardetails->carAuction->warranty_available == 1)

                                <a class="btn btn-tag m-0" href="#">Warranty Available</a>

                             @endif

                             

                             @if($cardetails->carAuction->bank_loan_available == 1)

                                <a class="btn btn-tag m-0" href="#">Bank Loan Available</a>

                            @endif

                            

                            

                            @if($cardetails->carAuction->low_mileage == 1)

                                <a class="btn btn-tag m-0" href="#">Low Mileage</a>

                            @endif

                            

                             @if($cardetails->carAuction->accident_free == 1)

                                <a class="btn btn-tag m-0" href="#">Accident Free</a>

                            @endif

                            

                            @if($cardetails->carAuction->brand_new_car == 1)

                                <a class="btn btn-tag m-0" href="#">Brand new car</a>

                            @endif

                            

                            @if($cardetails->carAuction->high_end_vehicle == 1)

                                <a class="btn btn-tag m-0" href="#">High end vehicle</a>

                            @endif

                            

                            @if($cardetails->carAuction->no_air_bag == 1)

                                <a class="btn btn-tag m-0" href="#">No Air Bag</a>

                            @endif

                            

                            @if($cardetails->carAuction->eligible_car_arbab_repair == 1)

                                <a class="btn btn-tag m-0" href="#">Eligible Car Arbab Repair</a>

                            @endif

                            

                            @if($cardetails->carAuction->limited_edition == 1)

                                <a class="btn btn-tag m-0" href="#">Limited Edition</a>

                            @endif

                            

                            @if($cardetails->carAuction->car_play_android_auto == 1)

                                <a class="btn btn-tag m-0" href="#">Car Play Andriod Auto</a>

                            @endif

                            

                            @if($cardetails->carAuction->climate_control == 1)

                                <a class="btn btn-tag m-0" href="#">Climate Control</a>

                            @endif

                            

                            @if($cardetails->carAuction->sports_exhaust == 1)

                                <a class="btn btn-tag m-0" href="#">Sports Exhaust</a>

                            @endif

                            

                            @if($cardetails->carAuction->keyless_entry == 1)

                                <a class="btn btn-tag m-0" href="#">Keyless Entry</a>

                            @endif

                            

                            @if($cardetails->carAuction->panoramic_sunroof == 1)

                                <a class="btn btn-tag m-0" href="#">Panoramic sunroof</a>

                            @endif

                           

                            @if($cardetails->carAuction->clean_title == 1)

                                <a class="btn btn-tag m-0" href="#">Clean Title</a>

                            @endif

                           

                            @if($cardetails->carAuction->ending_soon == 1)

                                <a class="btn btn-tag m-0" href="#">Ending Soon</a>

                            @endif

                            

                            

                            @if($cardetails->carAuction->rear_wheel_drive == 1)

                                <a class="btn btn-tag m-0" href="#">Rear wheel drive</a>

                            @endif

                            

                            @if($cardetails->carAuction->front_wheel_drive == 1)

                                <a class="btn btn-tag m-0" href="#">Wheel Drive</a>

                            @endif

                            

                          

                                <!--<a class="btn btn-tag m-0" href="#">Accident Free</a>-->

                                <!--<a class="btn btn-tag m-0" href="#">GCC Specs</a>-->

                                <!--<a class="btn btn-tag m-0" href="#">Warranty Available</a>-->

                                <!--<a class="btn btn-tag m-0" href="#">Bank Loan Available</a>-->

                                

                            </div>





                        </div>

                        <!----col--->

                    </div>

                    <!----row---->





                    <div class="row">

                        <div class="col-lg-12 ">

                            <h2 class="car-overv" Car Overview>Car Overview</h2>

                        </div>

                        <div class="col-lg-12 tag-group pt-0">

                            <div class="scroll-x gap-3 d-flex" style="padding-top: 50px;">

                                <div class="px-0 mx-0">

                                     <div class="tile-green tool" style="background: var(--Linear, linear-gradient(134deg, #8FF2C2 0.14%, #21E786 99.86%)); width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; margin-top:8px;" data-tip=" {{ $cardetails->carArbabRepair->name ?? '' }}" tabindex="1">

                                        <div class="tile-title" style="text-align: center; text-transform: uppercase;">

                                             <img class="" src="{{ asset('frontend/assets/images/icon/detail-icon01.svg')}}">

                                        </div>

                                        <div class="tile-icon" style="/* text-align: center; */color: #000;font-family: Montserrat;font-size: 15px;font-style: normal;font-weight: 500;/* line-height: 15px; */">

                                                 

                                        </div>

                                    </div>

                                </div>



                                <div class="px-0 mx-0">



                                     <div class="tile-green tool" style="background: var(--Linear, linear-gradient(134deg, #8FF2C2 0.14%, #21E786 99.86%)); width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px;  margin-top:8px;" data-tip="{{ $cardetails->carArbabExtendedWarranty->name ?? '' }}" tabindex="2">

                                        <div class="tile-title" style="text-align: center; text-transform: uppercase;">

                                             <img class="" src="{{ asset('frontend/assets/images/icon/detail-icon02.svg')}}">

                                        </div>

                                        <div class="tile-icon" style="/* text-align: center; */color: #000;font-family: Montserrat;font-size: 15px;font-style: normal;font-weight: 500;/* line-height: 15px; */">

                                            <!-- {{ $cardetails->carArbabExtendedWarranty->name ?? '' }} -->

                                         </div>



                                         


                                    </div>

                                </div>

                                

                                

                                <div class="px-0 mx-0">

                                   <div class="tbg tool" style="background-image:  url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;" data-tip=" {{ $cardetails->veh_car_model ?? '' }}" tabindex="3">

                                        <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items:     center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">

                                             <div class="tile-title" style="text-align: center; text-transform: uppercase;">

                                                    <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-3.svg')}}">

                                             </div>

                                            <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">

                                               <!--  {{ $cardetails->veh_car_model ?? '' }} -->

                                            </div>

                                        </div>

                                    </div>



                                </div>







                                <div class="px-0 mx-0">

                                   <div class="tbg tool" style="background-image:  url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;" data-tip=" {{ $cardetails->vehiclemake->name ?? '' }}" tabindex="4">

                                        <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items:     center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">

                                             <div class="tile-title" style="text-align: center; text-transform: uppercase;">

                                                    <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-3.svg')}}">

                                             </div>

                                            <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">

                                                <!-- {{ $cardetails->vehiclemake->name ?? '' }} -->

                                            </div>

                                        </div>

                                    </div>



                                </div>





                                <div class="px-0 mx-0">

                                     <div class="tbg tool" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;" data-tip="{{ $cardetails->trimdata ?? '' }}" tabindex="5">

                                          <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">

                                         <div class="tile-title" style="text-align: center; text-transform: uppercase;">

                                                 <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-4.svg')}}">

                                            </div>

                                            <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">

                                                 <!-- {{ $cardetails->trimdata ?? '' }} -->

                                             </div>

                                        </div>

                                     </div>

                                </div>

                                

                                <div class="px-0 mx-0">

                                     <div class="tbg tool" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;" data-tip="{{ $cardetails->veh_year ?? '' }} " tabindex="6">

                                          <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">

                                             <div class="tile-title" style="text-align: center; text-transform: uppercase;">

                                                <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-6.svg')}}">

                                              </div>

                                              <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">

                                                     <!-- {{ $cardetails->veh_year ?? '' }}  -->

                                                </div>

                                        </div>

                                     </div>

                                </div>

                                



                                <div class="px-0 mx-0">

                                     <div class="tbg tool" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;" data-tip="{{ $cardetails->veh_mileage ?? ''}} Km " tabindex="7">

                                         <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">

                                              <div class="tile-title" style="text-align: center; text-transform: uppercase;">

                                                 <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-5.svg')}}">

                                                     </div>

                                              <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">

                                                <!-- {{ $cardetails->veh_mileage ?? ''}} Km -->

                                              </div>

                                        </div>

                                     </div>

                                </div>



                                

                                <div class="px-0 mx-0">

                                     <div class="tbg tool" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;" data-tip="{{ $cardetails->vehicleregionalspec->name ?? '' }}" tabindex="8">

                                         <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">

                                             <div class="tile-title" style="text-align: center; text-transform: uppercase;">

                                                <img class="" src="{{ asset('frontend/assets/images/icon/diconblack-7.svg')}}">

                                              </div>

                                             <div class="tile-icon" style="color: #000; font-family: Montserrat; font-size: 15px; font-style: normal; font-weight: 500;">

                                                      <!-- {{ $cardetails->vehicleregionalspec->name ?? '' }} -->

                                             </div>

                                        </div>

                                      </div>

                                </div>

                                

                                <div class="px-0 mx-0">

                                    <div class="tbg tool" style="background-image: url('{{ asset('frontend/assets/images/icon/detail-icb.svg') }}'); padding: 9px; background-repeat: no-repeat;" data-tip=" {{ $cardetails->vehicle_engine_size ?? '' }} Ltr" tabindex="9">

                                         <div class="tile-green" style="background: #fff; width: 92.253px; height: 92.253px; display: flex; justify-content: center; align-items: center; flex-direction: column; border-radius: 10px; filter: drop-shadow(3.505px 3.505px 3.505px rgba(0, 0, 0, 0.25));">

                                                  <div class="tile-title" style="text-align: center; text-transform: uppercase;">

                                                     <img src="{{asset('frontend/assets/images/icon/diconblack-8.svg')}}" alt="Icon">

                                                      </div>

                                                          <div class="tile-icon" style="color: #000; font-family: Montserrat, sans-serif; font-size: 15px; font-style: normal; font-weight: 500;">

                                                          <!-- {{ $cardetails->vehicle_engine_size ?? '' }} Ltr -->

                                                  </div>

                                                     </div>

                                        </div>

                                    

                                </div>



                            </div>

                            <!----inner--row--->



                        </div>

        </div>

                    <!----row--->





                    <div class="row">

                        <div class="col-lg-12 ">



                            <h2 class="car-overv" Car Overview>Vehicle Details</h2>

                        </div>

                        <div class="col-lg-12 tag-group border-bottom-0">

                        <div class="row gy-4">

                            <div class="col-xl-6 pr-xl-20">

                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">Title</div>

                                        <div class="right-text">{{ $cardetails->title ?? ''}} </div>

                                    </div>

                                </div>



                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">VIN Number</div>

                                        <div class="right-text">{{ $cardetails->veh_vin_number ?? ''}}</div>

                                    </div>

                                </div>



                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">Title Code</div>

                                        <div class="right-text">{{ $cardetails->CarTitle->name ?? ''}}</div>

                                    </div>

                                </div>



                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">Vehicle Type</div>

                                        <div class="right-text">{{ $cardetails->VehicleType->name ?? ''}}</div>

                                    </div>

                                </div>



                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">Key Availability</div>

                                        <div class="right-text">{{ $cardetails->VehicleNoofKeys->no_of_keys ?? ''}}</div>

                                    </div>

                                </div>



                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">Body Type</div>

                                        <div class="right-text">{{ $cardetails->vehicleBodyType->name ?? ''}}</div>

                                    </div>

                                </div>



                                <!--<div class="list">-->

                                <!--    <div class="d-flex justify-content-between">-->

                                <!--        <div class="left-text">Drive Type</div>-->

                                <!--        <div class="right-text">{{ $cardetails->DriveType->name ?? '' }}</div>-->

                                <!--    </div>-->

                                <!--</div>-->

                            </div>





                            <div class="col-xl-6 pl-xl-20">



                               

                            <div class="list">

                                <div class="d-flex justify-content-between">

                                    <div class="left-text">Primary Damage</div>

                                    <div class="right-text">

                                        @php

                                            // Retrieve primary_damage and decode the JSON string to an array

                                            $primaryDamageJson = $cardetails->primary_damage ?? '[]';

                                            $primaryDamage = json_decode($primaryDamageJson, true);

                            

                                            // Check if decoding was successful and primaryDamage is an array

                                            if (is_array($primaryDamage)) {

                                                $primaryDamageString = implode(', ', $primaryDamage);

                                            } else {

                                                $primaryDamageString = '';

                                            }

                                        @endphp

                                        {{ $primaryDamageString }}

                                    </div>

                                </div>

                            </div>











                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">Car Color</div>

                                        <div class="right-text">{{ $cardetails->CarColor->name ?? '' }}</div>

                                    </div>

                                </div>



                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">No Of Cylinder</div>

                                        <div class="right-text">{{ $cardetails->vehicleNoOfCylinder->size ?? '' }}</div>

                                    </div>

                                </div>



                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">Transmission</div>

                                        <div class="right-text">{{ $cardetails->vehicleTransmission->name ??'' }}</div>

                                    </div>

                                </div>



                                <div class="list">

                                    <div class="d-flex justify-content-between">

                                        <div class="left-text">Interior Trim</div>

                                        <div class="right-text">{{ $cardetails->vehicleInterior->name ?? '' }}</div>

                                    </div>

                                </div>



                                <!--<div class="list">-->

                                <!--    <div class="d-flex justify-content-between">-->

                                <!--        <div class="left-text">Highlights</div>-->

                                <!--        <div class="right-text w-225">{{ $cardetails->vehicle_highlights ?? '' }}</div>-->

                                <!--    </div>-->

                                <!--</div>-->

                                <div class="list">

    <div class="d-flex justify-content-between">

        <div class="left-text">Highlights</div>

        <div class="right-text w-225">

            {!! $cardetails->vehicle_highlights ?? '' !!}

        </div>

    </div>

</div>





                            </div>



                            </div>

                        </div>



                    </div>

                    <!----row----->

                        <!--tile vert-->

                         <div class="row">

                              <div class="col-lg-12 ">



                                <!--<h2 class="car-overv" Car Overview>Car Overview Score</h2>-->

                                 </div>

                            <div class="col-lg-12  px-4 px-md-0 tile-x h-300 mb-h-fitcontent border-0 pt-0" style="position: relative; background: #ffffff; border-radius: 10px !important; margin-bottom: 20px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">

                            <div class="tile-body">

                                <div class="case-status text-center" style="border-bottom: 1px solid #333; background: #21E786;; color: #000; display: flex; padding: 15px 0px 12px 0px; justify-content: center; align-items: center; gap: 10px; border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -ms-border-radius: 10px 10px 0px 0px; -o-border-radius: 10px 10px 0px 0px;">

                                       <h2 class="car-overv pt-2 pb-0" Car Overview>Car Overview</h2>

                                     </div>

                            </div>

                           



                            <div class="row gx-5">

                                <div class="col-lg-12 text-center">

                                   <div class="warn-cnt"style="color: #000;font-family: &quot;Termina Test&quot;;font-size: 14px;font-style: normal;font-weight: 500;line-height: 18px;background: #EFF2F5;padding-top: 13px;padding-bottom: 13px;">

                                     <span>  <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon">Passed</span> <span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">Imperfection</span></div>

                                </div>

                                <div class="col-lg-12 card-cc" style="padding: 17px 40px 25px 40px;">

                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                          

                                            

                                            <!--ac-->

                                            

                                            <!--<div class="accordion accordion-flush cst-acc " id="accordionFlushExample">-->

                                            <!--    <div class="accordion-item ">-->

                                            <!--         <h2 class="accordion-header " id="flush-headingOne">-->

                                            <!--             <button class="accordion-button collapsed tile-x" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">-->

                                            <!--               <img class="mx-1" src="{{ asset('frontend/assets/images/icon/engine-icon.svg')}}" alt="Icon"> <div class="cst-acc-text">Engine</div>-->

                                            <!--               </button>-->

                                                           

                                            <!--            </h2>-->

                                            <!--         <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">-->

                                            <!--        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>-->

                                            <!--      </div>-->

                                                 

                                            <!--    </div>-->

                                            <!--</div>-->

                                            

                                            <!--accordian main for engine-->

                                            <div class="accordion ">

                                                <div class="accordion-item">

                                                    <div class="accordion-header ">

                                                         <div>

                                                             <div class="acc-motive">

                                                              <img class="mx-1" src="{{ asset('frontend/assets/images/icon/engine-icon.svg')}}" alt="Icon"> <div class="cst-acc-text">Engine</div>



                                                         

                                                            </div>

                                                         <div class="report-acc mt-1">

                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countsengine['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countsengine['Imperfection'] }}</span>

                                                         </div>

                                                         </div>

                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>

                                                    </div>

                                                    <div class="accordion-content">

                                                        <p class="collapse_title">Caution indicates damage / leak</p>


                                                        

                                                        

                                                        <!--report value-->

                                                       @if(count($imperfectionDetailsEngine) > 0)

                                                            <ul class="report-list">

                                                                @foreach($imperfectionDetailsEngine as $column => $details)

                                                                    <li class="r-drop">

                                                                        <div class="lcontent">

                                                                            <span>{{ ucfirst(str_replace('_', ' ', $column)) }}</span> 

                                                                            <span>{{ $details['value'] }}</span> 

                                                                            @if(!empty($details['images']))

                                                                                <div class="image-area">

                                                                                    @foreach($details['images'] as $imageUrl)

                                                                                        @if(!empty($imageUrl))


                                                                                       
                                                                                            <div class="containerss__img-holder">
                                                                                            <img class="mx-1 list-image" src="{{ $imageUrl }}" alt="Imperfection Image" data-toggle="tooltip" title="Your Tooltip Text" data-src="{{ $imageUrl }}">
                                                                                          </div>

                                                                                          <div class="img-popup">
                                                                                          <img src="" alt="Popup Image">
                                                                                          <div class="close-btn">
                                                                                            <div class="bar"></div>
                                                                                            <div class="bar"></div>
                                                                                          </div>
                                                                                        </div>


                                                                                        @endif

                                                                                    @endforeach

                                                                                </div>

                                                                            @else

                                                                                <span>No images available</span>

                                                                            @endif

                                                                        </div>

                                                                    </li>

                                                                @endforeach

                                                            </ul>

                                                        @else

                                                            <p>No imperfections found.</p>

                                                        @endif


                                                      



                                                    </div>


                                                </div>

                                            </div>

                                            <!--accordian main for engine end-->

                                        </div>

                                       <!--tile 02-->

                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">

                                           

                                            

                                            <!--accordian 02-->

                                            <div class="accordion ">

                                                <div class="accordion-item">

                                                    <div class="accordion-header ">

                                                         <div>

                                                             <div class="acc-motive">

                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}" alt="Icon"> <div class="cst-acc-text">Transmission</div>

                                                         </div>

                                                         <div class="report-acc mt-1">



                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countstransmission['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countstransmission['Imperfection'] }}</span>

                                                         </div>

                                                         </div>

                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>

                                                    </div>

                                                    <div class="accordion-content">

                                                        <p class="collapse_title">Caution indicates damage / leak</p>

                                                        

                                                        <!--report value-->

                                                       @if(count($imperfectionDetailsTransmission) > 0)

                                                            <ul class="report-list">

                                                                @foreach($imperfectionDetailsTransmission as $column => $details)

                                                                    <li class="r-drop">

                                                                        <div class="lcontent">

                                                                            <span>{{ ucfirst(str_replace('_', ' ', $column)) }}</span> <!-- Converts column name to readable format -->

                                                                            <span>{{ $details['value'] }}</span> <!-- Display the imperfection value -->

                                                                            @if(!empty($details['images']))

                                                                                <div class="image-area">

                                                                                    @foreach($details['images'] as $imageUrl)

                                                                                        @if(!empty($imageUrl))

                                                                                            <img class="mx-1 list-image" src="{{ $imageUrl }}" alt="Imperfection Image" data-toggle="tooltip" title="Your Tooltip Text" data-src="{{ $imageUrl }}">

                                                                                        @endif

                                                                                    @endforeach

                                                                                </div>

                                                                            @else

                                                                                <span>No images available</span>

                                                                            @endif

                                                                        </div>

                                                                    </li>

                                                                @endforeach

                                                            </ul>

                                                        @else

                                                            <p>No imperfections found.</p>

                                                        @endif



                                                    </div>

                                                </div>

                                            </div>

                                            

                                            <!--accordian-->

                                        </div>

                                        <!--tile 03-->

                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">  

                                            <!--accordian 03-->

                                            <div class="accordion ">

                                                <div class="accordion-item">

                                                    <div class="accordion-header ">

                                                         <div>

                                                             <div class="acc-motive">

                                                              <img class="mx-1" src="{{ asset('frontend/assets/images/icon/break-icon.svg')}}" alt="Icon"> <div class="cst-acc-text"><div>Break System,<br> Suspension and Tyres</div></div>

                                                         </div>

                                                         <div class="report-acc mt-1">

                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countsbrakesystem['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countsbrakesystem['Imperfection'] }}</span>

                                                         </div>

                                                         </div>

                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>

                                                    </div>

                                                    <div class="accordion-content">

                                                        <p class="collapse_title">Caution indicates damage / leak</p>

                                                        

                                                        <!--report value-->

                                                      @if(count($imperfectionDetailsBrakesystem) > 0)

                                                            <ul class="report-list">

                                                                @foreach($imperfectionDetailsBrakesystem as $column => $details)

                                                                    <li class="r-drop">

                                                                        <div class="lcontent">

                                                                            <span>{{ ucfirst(str_replace('_', ' ', $column)) }}</span> <!-- Converts column name to readable format -->

                                                                            <span>{{ $details['value'] }}</span> <!-- Display the imperfection value -->

                                                                            @if(!empty($details['images']))

                                                                                <div class="image-area">

                                                                                    @foreach($details['images'] as $imageUrl)

                                                                                        @if(!empty($imageUrl))

                                                                                            <img class="mx-1 list-image" src="{{ $imageUrl }}" alt="Imperfection Image" data-toggle="tooltip" title="Your Tooltip Text" data-src="{{ $imageUrl }}">

                                                                                        @endif

                                                                                    @endforeach

                                                                                </div>

                                                                            @else

                                                                                <span>No images available</span>

                                                                            @endif

                                                                        </div>

                                                                    </li>

                                                                @endforeach

                                                            </ul>

                                                        @else

                                                            <p>No imperfections found.</p>

                                                        @endif



                                                    </div>

                                                </div>

                                            </div>

                                            <!--accordian 03-->

                                        </div>

                                        

                                        <!--tile 04-->

                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">                

                                             <!--accordian 04-->

                                            <div class="accordion ">

                                                <div class="accordion-item">

                                                    <div class="accordion-header ">

                                                         <div>

                                                             <div class="acc-motive">

                                                              <img class="mx-1" src="{{ asset('frontend/assets/images/icon/electricchip-icon.svg')}}" alt="Icon">  <div class="cst-acc-text">Electrical System</div>

                                                         </div>

                                                         <div class="report-acc mt-1">

                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countsElectricalsystem['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countsElectricalsystem['Imperfection'] }}</span>

                                                         </div>

                                                         </div>

                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>

                                                    </div>

                                                    <div class="accordion-content">

                                                        <p class="collapse_title">Caution indicates damage / leak</p>

                                                        

                                                         <!--report value-->

                                                        @if(count($imperfectionDetailsElectricalsystem) > 0)

                                                            <ul class="report-list">

                                                                @foreach($imperfectionDetailsElectricalsystem as $column => $details)

                                                                    <li class="r-drop">

                                                                        <div class="lcontent">

                                                                            <span>{{ ucfirst(str_replace('_', ' ', $column)) }}</span> <!-- Converts column name to readable format -->

                                                                            <span>{{ $details['value'] }}</span> <!-- Display the imperfection value -->

                                                                            @if(!empty($details['images']))

                                                                                <div class="image-area">

                                                                                    @foreach($details['images'] as $imageUrl)

                                                                                        @if(!empty($imageUrl))

                                                                                            <img class="mx-1 list-image" src="{{ $imageUrl }}" alt="Imperfection Image" data-toggle="tooltip" title="Your Tooltip Text" data-src="{{ $imageUrl }}">

                                                                                        @endif

                                                                                    @endforeach

                                                                                </div>

                                                                            @else

                                                                                <span>No images available</span>

                                                                            @endif

                                                                        </div>

                                                                    </li>

                                                                @endforeach

                                                            </ul>

                                                        @else

                                                            <p>No imperfections found.</p>

                                                        @endif



                                                    </div>

                                                </div>

                                            </div>

                                            <!--accordian 04-->

                                            

                                        </div>

                                        <!--tile 05-->

                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">

 

                                             <!--accordian 05-->

                                            <div class="accordion ">

                                                <div class="accordion-item">

                                                    <div class="accordion-header ">

                                                         <div>

                                                             <div class="acc-motive">

                                                            <img class="mx-1" src="{{ asset('frontend/assets/images/icon/interior-icon.svg')}}" alt="Icon"> <div class="cst-acc-text"> Interior</div>

                                                         </div>

                                                         <div class="report-acc mt-1">

                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text">{{ $countsInterior['Pass'] }}</span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">{{ $countsInterior['Imperfection'] }}</span>

                                                         </div>

                                                         </div>

                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>

                                                    </div>

                                                    <div class="accordion-content">

                                                        <p class="collapse_title">Caution indicates damage / leak</p>

                                                        

                                                        <!--report value-->

                                                        @if(count($imperfectionDetailsInterior) > 0)

                                                            <ul class="report-list">

                                                                @foreach($imperfectionDetailsInterior as $column => $details)

                                                                    <li class="r-drop">

                                                                        <div class="lcontent">

                                                                            <span>{{ ucfirst(str_replace('_', ' ', $column)) }}</span> <!-- Converts column name to readable format -->

                                                                            <span>{{ $details['value'] }}</span> <!-- Display the imperfection value -->

                                                                            @if(!empty($details['images']))

                                                                                <div class="image-area">

                                                                                    @foreach($details['images'] as $imageUrl)

                                                                                        @if(!empty($imageUrl))

                                                                                            <img class="mx-1 list-image" src="{{ $imageUrl }}" alt="Imperfection Image" data-toggle="tooltip" title="Your Tooltip Text" data-src="{{ $imageUrl }}">

                                                                                        @endif

                                                                                    @endforeach

                                                                                </div>

                                                                            @else

                                                                                <span>No images available</span>

                                                                            @endif

                                                                        </div>

                                                                    </li>

                                                                @endforeach

                                                            </ul>

                                                        @else

                                                            <p>No imperfections found.</p>



                                                        @endif

                                                        <p><strong>Note:</strong> A basic inspection was conducted at the seller's premises. Only the points above were checked, and results are not guaranteed. Buyers should conduct a comprehensive review before the transfer.</p>



                                                    </div>

                                                </div>

                                            </div>

                                            <!--accordian 05-->

                                        </div>

                                        <!--tile 06-->

                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">

                                            <!--<div class="tile-x" style="background: #E3FBEF;border-radius: 10px;padding :15px 15px">-->

                                            <!--    <div class="tilex-cnt d-flex" style="justify-content: space-between; align-items: center;">-->

                                            <!--        <div class="x-left d-flex"  style="color: #444343; font-family: Montserrat; font-size: 14px; font-style: normal; font-weight: 600; line-height: 18px; align-items: center;"> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/vd-icon.svg')}}" alt="Icon"> <div>Vehicle Diagnostics <br>Report</div></div>-->

                                            <!--        <div class="x-right" style=" color: #000; font-family: &quot;Termina Test&quot;; font-size: 14px; font-style: normal; font-weight: 500; line-height: 18px;"> <span>  <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon">10</span> <span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon">02</span></div>-->

                                            <!--    </div>-->

                                            <!--</div>-->

                                            

                                             <!--accordian 06-->

                                            <div class="accordion ">

                                                <div class="accordion-item">

                                                    <div class="accordion-header ">

                                                         <div>

                                                             <div class="acc-motive">

                                                            <img class="mx-1" src="{{ asset('frontend/assets/images/icon/vd-icon.svg')}}" alt="Icon"><div class="cst-acc-text"><div> Vehicle Diagnostics,<br>  Report </div></div>

                                                         </div>

                                                         <div class="report-acc mt-1">

                                                             <img class="mx-1" src="{{ asset('frontend/assets/images/icon/perf-icon.svg')}}" alt="Icon"><span class="report-text"></span><span> <img class="mx-1" src="{{ asset('frontend/assets/images/icon/imperf-icon.svg')}}" alt="Icon"></span>

                                                         </div>

                                                         </div>

                                                        <div> <span class="chevron fas fa-chevron-down"></span></div>

                                                    </div>

                                                    <div class="accordion-content">

                                                        <p class="collapse_title">Caution indicates damage / leak</p>

                                                        

                                                        <!--report value-->

                                                       @if(isset($imperfectionVehiclediagnostic['vehicle_diagnostic_report']) && !empty($imperfectionVehiclediagnostic['vehicle_diagnostic_report']['images']))

                                                            <ul class="report-list">

                                                                <li class="r-drop">

                                                                    <div class="lcontent">

                                                                        <span>Vehicle Diagnostic Report</span>

                                                                        <div class="image-area">

                                                                            @foreach($imperfectionVehiclediagnostic['vehicle_diagnostic_report']['images'] as $fileUrl)

                                                                                @if(!empty($fileUrl))

                                                                                    @php

                                                                                        $extension = pathinfo($fileUrl, PATHINFO_EXTENSION);

                                                                                    @endphp

                                                                                    @if(in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif']))

                                                                                       

                                                                                        <img class="mx-1 list-image" src="{{ $fileUrl }}" alt="Diagnostic Report Image" data-toggle="tooltip" title="Your Tooltip Text" data-src="{{ $fileUrl }}">

                                                                                    @elseif(strtolower($extension) === 'pdf')

                                                                                      

                                                                                        <a href="{{ $fileUrl }}" class="btn btn-primary btn-sm mx-1" target="_blank" download>Download PDF</a>

                                                                                    @else

                                                                                        <!-- Handle other file types if necessary -->

                                                                                        <p>Unsupported file type: {{ $extension }}</p>

                                                                                    @endif

                                                                                @endif

                                                                            @endforeach

                                                                        </div>

                                                                    </div>

                                                                </li>

                                                            </ul>

                                                        @else

                                                            <p>Not available.</p>

                                                        @endif





                                                    </div>

                                                </div>

                                            </div>

                                            <!--accordian 06-->

                                        </div>

                                    </div>

                                </div>

                                

                                <!--<div class="col-xl-6 ">-->



                                <!--    <div class="skill-main">-->

                                <!--        <div class="skill-wrrap">-->

                                <!--            <div class="skill-name">Exterior Body Damage Diagram</div>-->

                                <!--            <div class="skill-bar">-->

                                <!--                <div class="skill-per bg-chanege" per="66.6"></div>-->

                                <!--            </div>-->

                                <!--        </div>-->

                                <!--    </div>-->



                                <!--    <div class="skill-main">-->

                                <!--        <div class="skill-wrrap">-->

                                <!--            <div class="skill-name">Brakes</div>-->

                                <!--            <div class="skill-bar">-->

                                <!--                <div class="skill-per" per="80"></div>-->

                                <!--            </div>-->

                                <!--        </div>-->

                                <!--    </div>-->





                                <!--    <div class="skill-main">-->

                                <!--        <div class="skill-wrrap">-->

                                <!--            <div class="skill-name">Suspension/Steering</div>-->

                                <!--            <div class="skill-bar">-->

                                <!--                <div class="skill-per" per="91.7"></div>-->

                                <!--            </div>-->

                                <!--        </div>-->

                                <!--    </div>-->



                                <!--    <div class="skill-main">-->

                                <!--        <div class="skill-wrrap">-->

                                <!--            <div class="skill-name">Road Test And Final Checks</div>-->

                                <!--            <div class="skill-bar">-->

                                <!--                <div class="skill-per" per="95.2"></div>-->

                                <!--            </div>-->

                                <!--        </div>-->

                                <!--    </div>-->





                                <!--    <div class="skill-main">-->

                                <!--        <div class="skill-wrrap">-->

                                <!--            <div class="skill-name">Tyres</div>-->

                                <!--            <div class="skill-bar">-->

                                <!--                <div class="skill-per" per="92.8"></div>-->

                                <!--            </div>-->

                                <!--        </div>-->

                                <!--    </div>-->



                                <!--</div>-->

                                <!-----col----6--->





                                <!--<div class="col-xl-6">-->



                                <!--    <div class="skill-main">-->

                                <!--        <div class="skill-wrrap">-->

                                <!--            <div class="skill-name">Engine & Transmission</div>-->

                                <!--            <div class="skill-bar">-->

                                <!--                <div class="skill-per" per="86.6"></div>-->

                                <!--            </div>-->

                                <!--        </div>-->

                                <!--    </div>-->





                                <!--    <div class="skill-main">-->

                                <!--        <div class="skill-wrrap">-->

                                <!--            <div class="skill-name">Electrical Controls</div>-->

                                <!--            <div class="skill-bar">-->

                                <!--                <div class="skill-per" per="99"></div>-->

                                <!--            </div>-->

                                <!--        </div>-->

                                <!--    </div>-->





                                <!--    <div class="skill-main">-->

                                <!--        <div class="skill-wrrap">-->

                                <!--            <div class="skill-name">Interior</div>-->

                                <!--            <div class="skill-bar">-->

                                <!--                <div class="skill-per" per="94"></div>-->

                                <!--            </div>-->

                                <!--        </div>-->

                                <!--    </div>-->



                                <!--    <div class="skill-main">-->

                                <!--        <div class="skill-wrrap">-->

                                <!--            <div class="skill-name">Exterior Body Damage Diagram</div>-->

                                <!--            <div class="skill-bar">-->

                                <!--                <div class="skill-per bg-chanege" per="66.6%"></div>-->

                                <!--            </div>-->

                                <!--        </div>-->

                                <!--    </div>-->





                                <!--    <div class="float-right d-flex justify-content-md-end mt-10">-->



                                <!--        <a href="#" class="full-insp">Full Inspection Report</a>-->



                                <!--    </div>-->



                                <!--</div>-->











                            </div>

                            <!----row---->



                        </div>

                        <!----col-12------>



                    </div>

                    <!----row---->

                    

                    <!--chasis perfect section begining-->

                    <div class="row">

                        <div class="col-lg-12  px-4 px-md-0  h-300 mb-h-fitcontent" style="position: relative;  border-radius: 10px !important; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">

                            <div class="tile-body">

                                <div class="case-status text-center" style="border-bottom: 1px solid #333; background: #21E786;; color: #000; display: flex; padding: 15px 0px 12px 0px; justify-content: center; align-items: center; gap: 10px; border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px; -moz-border-radius: 10px 10px 0px 0px; -ms-border-radius: 10px 10px 0px 0px; -o-border-radius: 10px 10px 0px 0px;">

                                    <h2 class="car-overv pt-2 pb-0" car="" overview="">Body Condition</h2>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row bg-white" style="border-radius: 10px !important; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">


                        <div class="col-lg-2 text-center mt-3 mb-3"></div>
                        <div class="col-lg-8 text-center mt-3 mb-3">

                            <input type="hidden" id="car_id" name="car_id" value="{{ $cardetails->id }}">

                            <input type="hidden" id="auction_type_id" value="{{ $cardetails->carAuction->auction_type_id }}">


                            <div id="canvasContainer">

                                <canvas id="baseImageCanvas"></canvas>

                            </div>

                            <div id="hoverImageContainer" class="hover-image"></div>

                        </div>
                        <div class="col-lg-2 text-center mt-3 mb-3"></div>

                    </div>

                    <!--end of chassis perfect section-->

                    <div class="mt-30">

                        <div class="row">

                            <button

                                class="text-black font-900 btn-car-history bg-white w-100 py-10 px-4 d-flex align-items-center justify-content-between fst-italic font-montserrat border rounded-pill"

                                type="button" id="accordion-btn">

                                Complete Car Auction Historyy:

                                <div>

                                    <img src="{{ asset('frontend/assets/images/icon/Down2.svg')}}">

                                </div>

                            </button>



                            <div id="accordion-body">

                                <div class="row d-none d-lg-flex">

                                    <div class="col-lg-12 table-responsive p-0">

                                        <table class="table ctm-table m-0">

                                            <tr class="bg-ctm bg-table-award">

                                                <td class="border-top-left">Auction Date</td>

                                                <td>Auction Platform</td>

                                                <td>Lot No</td>

                                                <td>Price of Auction</td>

                                                <td>Place of Auction</td>

                                                <td class="border-top-right">Mileage</td>

                                            </tr>



                                            <tbody class="table-body-award">

                                                <tr>

                                                    <td>2024-01-01</td>

                                                    <td>Online Auction</td>

                                                    <td>101</td>

                                                    <td>AED 15,000</td>

                                                    <td>Virtual</td>

                                                    <td>50,000 mi.</td>

                                                </tr>

                                                <tr>

                                                    <td>2023-02-02</td>

                                                    <td>Local Auction</td>

                                                    <td>101</td>

                                                    <td>AED 15,000</td>

                                                    <td>Virtual</td>

                                                    <td>50,000 mi.</td>

                                                </tr>

                                                <tr>

                                                    <td>2024-01-01</td>

                                                    <td>Online Auction</td>

                                                    <td>101</td>

                                                    <td>AED 15,000</td>

                                                    <td>Virtual</td>

                                                    <td>50,000 mi.</td>

                                                </tr>

                                                <tr>

                                                    <td>2023-02-02</td>

                                                    <td>Online Auction</td>

                                                    <td>101</td>

                                                    <td>AED 15,000</td>

                                                    <td>Virtual</td>

                                                    <td>50,000 mi.</td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>



                                <div class="d-block d-lg-none table-responsive">

                                    <table class="table ctm-table m-0">



                                        <tr class="bg-ctm bg-table-award">

                                            <td class="border-top-left">Auction Date</td>

                                            <td>Auction Platform</td>

                                            <td class="border-top-right">Lot No</td>

                                        </tr>



                                        <tbody class="table-body-award font-500">

                                            <tr>

                                                <td>2024-01-01</td>

                                                <td>Online Auction</td>

                                                <td>101</td>

                                            </tr>

                                            <tr>

                                                <td>2023-02-02</td>

                                                <td>Local Auction</td>

                                                <td>101</td>

                                            </tr>

                                            <tr>

                                                <td>2024-01-01</td>

                                                <td>Online Auction</td>

                                                <td>101</td>

                                            </tr>

                                            <tr>

                                                <td>2023-02-02</td>

                                                <td>Online Auction</td>

                                                <td>101</td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>



                        <div class="row">

                            <div class="col-lg-12 ">

                                <h2 class="car-overv" Car Overview>Features</h2>

                            </div>

                            <div class="col-lg-12 tag-group">

                                <div class="row">

                                    <div class="col-xxl-3 col-6 col-xl-4 checklist">

                                        <span class="heading">Interior</span>

                                        <ul class="list-features">

                                        <li>

                                            <input type="checkbox" id="air_conditioner" name="air_conditioner" value="1" {{ $cardetails && $cardetails->air_conditioner == 1 ? 'checked' : '' }} disabled>

                                            <label for="air_conditioner">Air Conditioner</label>

                                        </li>

                                        <li>

                                            <input type="checkbox" id="digital_odometer" name="digital_odometer" value="1" {{ $cardetails && $cardetails->digital_odometer == 1 ? 'checked' : '' }} disabled>

                                            <label for="digital_odometer"> Digital Odometer</label>

                                        </li>

                                        <li>

                                            <input type="checkbox" id="heater" name="heater" value="1" {{ $cardetails && $cardetails->heater == 1 ? 'checked' : '' }} disabled>

                                            <label for="heater"> Heater</label>

                                        </li>

                                        <li>

                                            <input type="checkbox" id="leather_seats_interior" name="leather_seats_interior" value="1" {{ $cardetails && $cardetails->leather_seats_interior == 1 ? 'checked' : '' }} disabled>

                                            <label for="leather_seats_interior"> Leather Seats</label>

                                        </li>

                                        <li>

                                            <input type="checkbox" id="tachometer" name="tachometer" value="1" {{ $cardetails && $cardetails->tachometer == 1 ? 'checked' : '' }} disabled>

                                            <label for="tachometer"> Tachometer</label>

                                        </li>

                                        <li>

                                            <input type="checkbox" id="panoramic_moonroof" name="panoramic_moonroof" value="1" {{ $cardetails && $cardetails->panoramic_moonroof == 1 ? 'checked' : '' }} disabled>

                                            <label for="panoramic_moonroof">  Panoramic Moonroof</label>

                                        </li>

                                        <li>

                                            <input type="checkbox" id="touchscreen_display" name="touchscreen_display" value="1" {{ $cardetails && $cardetails->touchscreen_display == 1 ? 'checked' : '' }} disabled>

                                            <label for="touchscreen_display"> Touchscreen Display</label>

                                        </li>   

                                        </ul>

                                    </div>

                             

                                    <div class="col-xxl-3 col-6 col-xl-4 checklist">

                                        <span class="heading">Safety</span>

                                        <ul class="list-features">

                                            <li>

                                                <input type="checkbox" id="anti_lock_bracking" name="anti_lock_bracking" value="1" {{ $cardetails && $cardetails->anti_lock_bracking == 1 ? 'checked' : '' }} disabled>

                                                <label for="anti_lock_bracking"> Anti-lock Braking</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="brake_assist" name="brake_assist" value="1" {{ $cardetails && $cardetails->brake_assist == 1 ? 'checked' : '' }} disabled>

                                                <label for="brake_assist"> Brake Assist</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="child_safety_locks" name="child_safety_locks" value="1" {{ $cardetails && $cardetails->child_safety_locks == 1 ? 'checked' : '' }} disabled>

                                                <label for="child_safety_locks"> Child Safety Locks</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="driver_air_bag" name="driver_air_bag" value="1" {{ $cardetails && $cardetails->driver_air_bag == 1 ? 'checked' : '' }} disabled>

                                                <label for="driver_air_bag"> Driver Air Bag</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="power_door_locks" name="power_door_locks" value="1" {{ $cardetails && $cardetails->power_door_locks == 1 ? 'checked' : '' }} disabled>

                                                <label for="power_door_locks"> Power Door Locks</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="stability_control" name="stability_control" value="1" {{ $cardetails && $cardetails->stability_control == 1 ? 'checked' : '' }} disabled>

                                                <label for="stability_control">Stability Control</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="traction_control" name="traction_control" value="1" {{ $cardetails && $cardetails->traction_control == 1 ? 'checked' : '' }} disabled>

                                                <label for="traction_control">Traction Control</label>

                                            </li>

                                        </ul>

                                    </div>

                                    <!---col-lg-3---->



                                    <div class="col-xxl-3 col-6 col-xl-4 checklist">

                                        <span class="heading">Exterior</span>

                                        <ul class="list-features">

                                             <li>

                                                <input type="checkbox" id="fog_lights_front" name="fog_lights_front" value="1" {{ $cardetails && $cardetails->fog_lights_front == 1 ? 'checked' : '' }} disabled>

                                                <label for="fog_lights_front">Fog Lights Front</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="rain_sesing_wiper" name="rain_sesing_wiper" value="1" {{ $cardetails && $cardetails->rain_sesing_wiper == 1 ? 'checked' : '' }} disabled>

                                                <label for="rain_sesing_wiper"> Rain Sensing Wiper</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="rear_spoiler" name="rear_spoiler" value="1" {{ $cardetails && $cardetails->rear_spoiler == 1 ? 'checked' : '' }} disabled>

                                                <label for="rear_spoiler"> Rear Spoiler</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="windows_electric" name="windows_electric" value="1" {{ $cardetails && $cardetails->windows_electric == 1 ? 'checked' : '' }} disabled>

                                                <label for="windows_electric">Windows - Electric</label>

                                            </li>

                                        </ul>

                                    </div>

                                    



                                    <div class="col-xxl-3 col-6 col-xl-4 checklist">

                                        <span class="heading">Comfort & Convenience</span>

                                        <ul class="list-features">

                                            <li>

                                                <input type="checkbox" id="android_auto" name="android_auto" value="1" {{ $cardetails && $cardetails->android_auto == 1 ? 'checked' : '' }} disabled>

                                                <label for="android_auto">Android Auto</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="digital_odometer_cc" name="digital_odometer_cc" value="1" {{ $cardetails && $cardetails->digital_odometer_cc == 1 ? 'checked' : '' }} disabled>

                                                <label for="digital_odometer_cc">Digital Odometer</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="heater_cc" name="heater_cc" value="1" {{ $cardetails && $cardetails->heater_cc == 1 ? 'checked' : '' }} disabled>

                                                <label for="heater_cc">Heater</label>

                                            </li>

                                            <li>

                                                <input type="checkbox" id="leather_seats_cc" name="leather_seats_cc" value="1" {{ $cardetails && $cardetails->leather_seats_cc == 1 ? 'checked' : '' }} disabled>

                                                <label for="leather_seats_cc">Leather Seats </label>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                

                <div class="col-xl-4 col-md-6 col-lg-5 position-relative">

                    <div class="card-positionss">

                        <div class="announcements-card">

                            <div class="text-black font-montserrat font-800 fst-italic fs-6 mb-20 text-center">

                                Bidding History

                            </div>

                            <div class="d-flex flex-column gap-20 mt-20">

                                <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                                    <div>Lot No:</div>

                                    <div class="font-600">

                                        {{ $cardetails->carAuction->lot_number ?? '' }}

                                    </div>

                                </div>



                                <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                                    <div>Live Auction </br>Date & Time:</div>

                                    <div class="font-600 text-end">

                                    @if (isset($cardetails->carAuction->auction_date))

                                        {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_date)->format('d-m-Y') }}<br>

                                        {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_time)->format('H:i') }} 

                                          @if (isset($cardetails->carAuction->timezone))

                                            @php

                                                $timezone = $cardetails->carAuction->timezone;

                                               

                                            @endphp

                                             {{$timezone->utc_offset }}

                                        @endif

                                    @endif

                                    </div>

                                </div>



                                <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500 " id="current_bid_price">

                                    <div>Current Bid:</div>

                                    <div class="font-600" id="bid_price_value"></div>

                                </div>



                                <!-- <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">-->

                                <!--    <div>Pre-bid Closes In:</div>-->

                                <!--    <div class="font-600" id="countdownContainer">-->

                                     

                                <!--    </div>-->

                                <!--</div> -->

                                <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" id="">

                                    <div>Pre-bid Closes: <span id=""></span></div>

                                    <div class="font-600">

                                        @if (isset($cardetails->carAuction->auction_end_date))

                                            {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_end_date)->format('d-m-Y') }}<br>

                                        @endif

                                    </div>

                                </div>

                               

                                <div class="text-black fs-6 font-500 font-montserrat">

                                    If you are awarded this vehicle on Feb 13 (GMT), then

                                </div>



                                <div id="paymentDueContainer" class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500"  style="display: none;">

                                    <div>Payment is due:</div>

                                    <div class="font-600" id="paymentDueDate"></div>

                                </div>



                                <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                                    <div>Pick up by:</div>

                                    <div class="font-600" >

                                        @if (isset($cardetails->carAuction->pick_up_by))

                                        {{ \Carbon\Carbon::parse($cardetails->carAuction->pick_up_by ?? '')->format('d-m-Y') }}<br>

                                         @endif

                                    </div>

                                </div>

                                <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" id="no_of_bids">

                                    <div>No of Bids: </div>

                                    <div class="font-600">

                                            <!-- {{ $cardetails->carAuction->no_of_bids ?? '' }} -->

                                    </div>

                                </div>



                                <div>

                                <div class="text-black fs-6 fst-italic font-800 font-montserrat">

                                    Your Bid:

                                </div>

                            

                            @auth

                            <input type="hidden" id="car_id" name="car_id" value="{{ $cardetails->carAuction->car_id }}">

                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">

                                <div class="d-flex gap-10 mt-10">       

                                    <div class="w-100">

                                        <input type="number" placeholder="Enter Amount" name="new_bid_price" id="new_bid_price" 

                                            class="input-field form-control p-12 text-center rounded-pill mw-100 w-100"  required>

                                            <input type="hidden" name="hidden_bid_price" id="hidden_bid_price">

                                        </div>

                                    <div class="min-w-fit">

                                        <button  type="submit" id="place-bid" class="btn place-bid-btn px-3">

                                            Place Bid 

                                        </button>

                                    </div>

                                </div>
                                
                                      <div id="bid-error-message" style="color: red; display: none;"></div>

                            @else

                      

                            @if (isset($cardetails->carAuction->car_id))

                                <input type="hidden" id="car_id" name="car_id" value="{{ $cardetails->carAuction->car_id }}">

                            @endif

                                <div class="d-flex gap-10 mt-10">       

                                    <div class="w-100">

                                        <input type="number" placeholder="Enter Amount" name="new_bid_price" id="new_bid_price" class="input-field form-control p-12 text-center rounded-pill mw-100 w-100"  required  >

                                        <input type="hidden" name="hidden_bid_price" id="hidden_bid_price">

                                    </div>

                                    <div class="min-w-fit">

                                        <a href="{{ route('user.login') }}" class="btn buy-now">Login to Place Bid</a>

                                    </div>

                                </div>

                            @endauth

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-----Auction-timer------->



    <section class="related-list pb-50 pt-50 mt-3">

        <div class="container">

            <div class="title-section pt-0 pb-0">

                <div class="heading pt-0 text-capitalize">Related Listings</div>

            </div>

              <div class="pt-50">

                <div class="owl-carousel owl-theme mx-0 px-0" id="slider-1">

                    @foreach($relatedListings as $car)

                    <div class="item">

                        <div class="position-relative">

                            <script>

                                var detailsRoute = "{{ route('details', ':id') }}";

                            </script>

                                <div class="inner-box redirect-details" data-car-id="{{ $car->id }}">

                                <div class="car-modal tag">MUV</div>

                                <div class="product-img-box">

                                    <!-- <img class="w-100" src="assets/images/product/product-3.jpg" alt=""> -->

                                    @php

                                           $carMedia = $car->carMedia->where('type', 'thmnail')->first(); 

                                        @endphp



                                        @if($carMedia && $carMedia->images)

                                            @php

                                                $imagePaths = explode(',', $carMedia->images); 

                                            @endphp

                                            @foreach($imagePaths as $image)

                                                <img class="w-100" src="{{ asset('public/' .$image) }}" alt="">

                                                @break 

                                            @endforeach

                                        @else

                                            <img class="w-100" src="{{ asset('frontend/assets/images/product/product-11.png') }}" alt="">

                                        @endif



                                       <div class="car-value tag">Estimated Market Value: <span class="text-black">AED

                                         {{ $car->carAuction->estimated_market_value ?? '' }}</span>

                                      </div>



                                </div>



                                <div class="details">

                                    <div class="model-name">{{ $car->veh_car_model }}</div>

                                    <div class="brand-name">{{ $car->vehicleMake->name?? '' }}</div>

                                    <div class="row">

                                        <div class="col-6">

                                            <span class="d-flex align-items-center icon-box">

                                                <img class="ico" src="{{ asset('frontend/assets/images/icon/calander-icon.svg')}}"> {{ $car->veh_year }} 

                                            </span>

                                        </div>

                                        <div class="col-6">

                                            <span class="d-flex align-items-center icon-box">

                                                <img class="ico" src="{{ asset('frontend/assets/images/icon/meter-icon.svg')}}"> {{ $car->veh_mileage }} Km

                                            </span>

                                        </div>

                                        <div class="col-6">

                                            <span class="d-flex align-items-center icon-box">

                                                <img class="ico" src="{{ asset('frontend/assets/images/icon/note-icon.svg')}}"> {{ $car->title }} 

                                            </span>

                                        </div>

                                        <div class="col-6">

                                            <span class="d-flex align-items-center icon-box">

                                                <img class="ico" src="{{ asset('frontend/assets/images/icon/location-icon.svg')}}"> {{ $car->vehicleregionalspec->name ?? '' }}

                                            </span>

                                        </div>

                                        <div class="col-6">

                                            <span class="d-flex align-items-center icon-box">

                                                <img class="ico" src="{{ asset('frontend/assets/images/icon/gear-icon.svg')}}"> {{ $car->vehicleTransmission->name ?? '' }}

                                            </span>

                                        </div>



                                        <div class="col-6">

                                            <span class="d-flex align-items-center icon-box">

                                                <img class="ico" src="{{ asset('frontend/assets/images/icon/cyclnder-icon.svg')}}">{{ $car->vehicleNoOfCylinder->size ?? '' }}

                                            </span>

                                        </div>



                                        <div class="col-12 m-auto">

                                            <div class="divider"> </div>

                                        </div>

                                        

                                        <div class="col-6 cost-box">

                                            <div class="pri">Repair Cost:</div>

                                            <div class="amou d-flex justify-content-between">

                                             {{ $car->carAuction->RepairCostCurrency->code ?? '' }} {{ $car->carAuction->estimated_repair_cost ?? '' }}

                                            </div>

                                        </div>



                                        <div class="col-6 cost-box">

                                            <div class="pri">Current Bid Price:</div>

                                              <div class="amou d-flex justify-content-between">

                                                 {{ $car->carAuction->bidstartcurrency->code ?? '' }}

                                                 {{ $car->carAuction->current_bid_price ?? '' }}

                                             </div>

                                        </div>



                                        <div class="col-12">

                                            <a href="#" class="btn bid-btn">Bid Now</a>

                                        </div>
                                        
                                       


                                        <div class="col-12 text-center">

                                            <a href="#" class="ctm-link">  Buy Now {{ $car->carAuction->buy_now_price ?? '' }}</a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="like-car">

                                <div class="form-check">

                                    <input type="checkbox" id="customCheckBox13"

                                        class="custom-checkbox form-check-input">

                                    <label for="customCheckBox13" class="form-check-label"></label>

                                </div>

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

        </div>

    </section>



    <!-----End of Related Listings------->





    <!-- for buy now modle  -->

    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"

        aria-labelledby="staticBackdropLabel" aria-hidden="true">



        <div class="modal-dialog mt-0 mb-0 h-100 modal-lg model-licensesdocuments ">

            <div class="modal-content p-3 model-licensesdocuments-body">



                <div class="modal-body p-0 p-sm-3">

                    <div class="text-dark-gray font-16 font-montserrat font-600 fst-italic line-base">

                        Buy Now

                    </div>

                    <h4

                        class="fs-4 mb-0 d-flex align-items-center justify-content-sm-start justify-content-between text-black font-montserrat text-uppercase fst-italic font-900 mt-3 pb-1">

                        {{ $cardetails->veh_car_model }} <div class="tag2">MUV</div>

                    </h4>

                    <div class="text-gray font-termina font-12 font-600 mt-3">

                        3.5 D5 PowerPulse Momentum 5dr AWD Geartronic Estate

                    </div>

                    <div class="modle-buy-now">

                    @php

                     $carMedia = $cardetails->carMedia->where('type', 'thmnail')->first(); 

                    @endphp



                    @php

                        $latestImagePath = null;

                        if ($carMedia && $carMedia->images) {

                            $imagePaths = explode(',', $carMedia->images);

                            $latestImagePath = reset($imagePaths);

                        }

                    @endphp

                                    

                    @if($latestImagePath)

                    <img src="{{ asset('public/' .$latestImagePath) }}" class="main_narrow_gallary ag-photo-gallery_img h-100" class="w-100 h-100">

                        @else

                    <img src="{{ asset('frontend/assets/images/livebidding/car4.png') }}" class="ag-photo-gallery_img h-100" class="w-100 h-100">

                    @endif

                    

                    </div>  

                    <div class="d-flex flex-column gap-10">

                        <div

                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Lot No:</div>

                            <div class="font-600">

                            {{ $cardetails->carAuction->lot_number ?? '' }}

                            </div>

                        </div>



                        <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Live Auction </br>

                                Date & Time:</div>

                            <div class="font-600 text-end">

                              @if (isset($cardetails->carAuction->auction_date))

                                        {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_date)->format('d-m-Y') }}<br>

                                        {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_time)->format('H:i') }} 

                                          @if (isset($cardetails->carAuction->timezone))

                                            @php

                                                $timezone = $cardetails->carAuction->timezone;

                                               

                                            @endphp

                                             {{$timezone->utc_offset }}

                                        @endif

                                    @endif

                            </div>

                        </div>



                        <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" id="current_bid_price">

                            <div>Current Bid:</div>

                            <div class="font-600">

                            </div>

                        </div>



                        <div id="preBidContainerModal" class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" >

                            <div>Pre-bid Closes :</div>

                            <div class="font-600" id="">

                                 @if (isset($cardetails->carAuction->auction_end_date))

                                    {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_end_date)->format('d-m-Y') }}<br>

                                @endif

                            </div>

                        </div>

                    

                        <div

                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" >

                            <div>Buy Now Price:</div>

                            <div class="font-600">

                            AED {{ $cardetails->carAuction->buy_now_price ?? '' }}

                            </div>

                        </div>



                        <!-- <div

                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Time Left to Buy:</div>

                            <div class="font-600">

                                1d 19h

                            </div>

                        </div> -->



                        <div class="border-bottom"></div>



                        <div class="text-black fs-6 font-500 font-montserrat">

                            If you are awarded this vehicle on Feb 13 (GMT), then

                        </div>



                        <div id="paymentDueContainerModal"

                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Payment is due:</div>

                                <div class="font-600" id="paymentDueDateModal">

                              

                            </div>

                        </div>



                        <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Pick up by:</div>

                            <div class="font-600">

                            @if (isset($cardetails->carAuction->pick_up_by))

                                     {{ \Carbon\Carbon::parse($cardetails->carAuction->pick_up_by ?? '')->format('d-m-Y') }}<br>

                             @endif

                            </div>

                        </div>

                                       

                        @auth

                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="mt-10">

                                <button type="submit" class="btn buy-now" id="buy-now-car">Buy Now AED

                                    <span>{{ $cardetails->carAuction->buy_now_price ?? '' }}</span>

                                </button>

                            </div>

                       @else

                            <div class="mt-10">

                                <a href="{{ route('user.login') }}" class="btn buy-now">Login to Buy</a>

                            </div>

                       @endauth

                      

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- /for buy now modle  -->

                                 

    <!-- for Bid Now Side Slider  -->

    <div class="modal fade" id="bid-now-modle" data-bs-keyboard="false" tabindex="-1" aria-labelledby="BidNow"

        aria-hidden="true">



        <div class="modal-dialog mt-0 mb-0 h-100 modal-lg model-licensesdocuments ">

            <div class="modal-content p-3 model-licensesdocuments-body">



                <div class="modal-body p-0 p-sm-3">

                   

                    <div class="text-dark-gray font-16 font-montserrat font-600 fst-italic line-base">

                        Bid Now

                    </div>

                    <h4

                        class="fs-4 mb-0 d-flex align-items-center justify-content-sm-start justify-content-between text-black font-montserrat text-uppercase fst-italic font-900 mt-3 pb-1">

                        {{ $cardetails->veh_car_model }} <div class="tag2">MUV</div>

                    </h4>

                    <div class="text-gray font-termina font-12 font-600 mt-3">

                        3.5 D5 PowerPulse Momentum 5dr AWD Geartronic Estate

                    </div>

                    <div class="modle-buy-now">

                    @php

                     $carMedia = $cardetails->carMedia->where('type', 'thmnail')->first(); 

                    @endphp



                    @php

                        $latestImagePath = null;

                        if ($carMedia && $carMedia->images) {

                            $imagePaths = explode(',', $carMedia->images);

                            $latestImagePath = reset($imagePaths);

                        }

                    @endphp

                                    

                    @if($latestImagePath)

                    <img src="{{ asset('public/' .$latestImagePath) }}" class="main_narrow_gallary ag-photo-gallery_img h-100" class="w-100 h-100">

                        @else

                    <img src="{{ asset('frontend/assets/images/livebidding/car4.png') }}" class="ag-photo-gallery_img h-100" class="w-100 h-100">

                    @endif

                    </div>

                    <div class="d-flex flex-column gap-10">

                        <div

                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Lot No:</div>

                            <div class="font-600">

                                {{ $cardetails->carAuction->lot_number ?? '' }}

                            </div>

                        </div>



                        <div

                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Live Auction </br>

                                Date & Time:</div>

                            <div class="font-600 text-end">

                            @if (isset($cardetails->carAuction->auction_date))

                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_date)->format('d-m-Y') }}<br>

                                {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_time)->format('H:i') }} 

                                    @if (isset($cardetails->carAuction->timezone))

                                        @php

                                            $timezone = $cardetails->carAuction->timezone;

                                        @endphp

                                        {{$timezone->utc_offset }}

                                    @endif

                            @endif

                            </div>

                        </div>



                        <div class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500" id="current_bid_price">

                            <div>Current Bid:</div>

                            <div class="font-600">

                             

                            </div>

                        </div>



                        <div id="preBidContainerBidModal"

                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Pre-bid Closes In:</div>

                            <div class="font-600" id="">

                                @if (isset($cardetails->carAuction->auction_end_date))

                                 {{ \Carbon\Carbon::parse($cardetails->carAuction->auction_end_date)->format('d-m-Y') }}

                            

                                @endif

                            </div>

                        </div>



                        <div class="text-gray font-termina font-14 font-500">

                            <div>Your Bid:</div>

                            <div class="mt-10">

                                <input type="number" name="new_bid_price" id="new_bid_price_id" class="form-control input-field-checkout p-2" placeholder="Enter amount eg. AED XXXX">

                                <input type="hidden" name="hidden_bid_price_id" id="hidden_bid_price_id">

                            </div>

                        </div>



                        <div class="d-flex gap-10 text-gray font-termina font-14 font-500">

                            <div>Note:</div>

                            <div class="font-montserrat">

                                Lorem ipsum dolor sit amet consectetur. In fringilla rhoncus felis euismod velit eu.

                            </div>

                        </div>



                        <div class="border-bottom"></div>

                        <div class="text-black fs-6 font-500 font-montserrat">

                            If you are awarded this vehicle on Feb 13 (GMT), then

                        </div>



                        <div id="paymentDueContainerBidModal" class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Payment is due:</div>

                            <div class="font-600" id="paymentDueDateBidModal"></div>

                        </div>



                        <div

                            class="d-flex justify-content-between align-items-center text-gray font-termina font-14 font-500">

                            <div>Pick up by:</div>

                            <div class="font-600">

                                @if (isset($cardetails->carAuction->pick_up_by))

                                {{ \Carbon\Carbon::parse($cardetails->carAuction->pick_up_by)->format('d-m-Y') }}

                                @endif

                            </div>

                        </div>

                        @auth

                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="mt-10">

                                <button type="submit" class="btn buy-now" id="buy-now-bid">Bid Now</button>

                            </div>

                       @else

                            <div class="mt-10">

                                <a href="{{ route('user.login') }}" class="btn buy-now">Login to Buy</a>

                            </div>

                       @endauth





                        <!-- <div class="mt-10">

                        <button type="submit" class="btn buy-now"  id="buy-now-bid">Bid Now</button>

                        </div> -->

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- /for Bid Now Side Slider  -->



    <div class="position-sticky blur-background z-3 left-0 bottom-0 d-md-none d-block">

        <div class="container py-2">

            <div class="align-items-center breadcrumb-right d-flex gap-2 justify-content-between">

                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn buy-now"> Buy Now AED

                    <span>XXXX</span></button>

                <button data-bs-toggle="modal" data-bs-target="#bid-now-modle" class="btn bid-now">Bid

                    Now</button>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!--get car data--->

    <script>

        $(document).ready(function(){
            var carId = $('#car_id').val();
            $.ajax({

            type: 'post',
            url: '{{ route('get_car_data') }}', 
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                car_id: carId
            },
            success: function(response) {

                var updatedBidPrice = response.current_bid_price;
                var bidStartPrice = response.bid_start_price;
                var bid_strt_crr = response.buy_currency;

                if (updatedBidPrice) {

                    var updatedBidPriceWithAddition = parseFloat(updatedBidPrice);

                     if (updatedBidPrice < 50000) {
                            updatedBidPriceWithAddition += 250;
                        } else if (updatedBidPrice >= 50000 && updatedBidPrice < 200000) {
                            updatedBidPriceWithAddition += 500;
                        } else if (updatedBidPrice >= 200000 && updatedBidPrice < 1000000) {
                            updatedBidPriceWithAddition += 1000;
                        } else {
                            updatedBidPriceWithAddition += 2000;
                        }

                    $('#current_bid_price .font-600').text('AED ' + updatedBidPrice);
                    $('#current_bid_price_li').text(updatedBidPrice);
                    $('#new_bid_price').val(updatedBidPriceWithAddition);
                    $('#hidden_bid_price').val(updatedBidPriceWithAddition);

                    // bid now model
                    $('#new_bid_price_id').val(updatedBidPriceWithAddition);
                    $('#hidden_bid_price_id').val(updatedBidPriceWithAddition);

                } else {

                    var updatedBidPriceWithAdditionBidstartPrice = parseFloat(bidStartPrice);

                    if (bidStartPrice < 50000){
                        updatedBidPriceWithAdditionBidstartPrice += 250;
                    } else if (bidStartPrice >= 50000 && bidStartPrice < 200000) {
                        updatedBidPriceWithAdditionBidstartPrice += 500;
                    } else if (bidStartPrice >= 200000 && bidStartPrice < 1000000) {
                        updatedBidPriceWithAdditionBidstartPrice += 1000;
                    } else {
                        updatedBidPriceWithAdditionBidstartPrice += 2000;
                    }

                    $('#current_bid_price .font-600').text('AED ' + bidStartPrice);
                    $('#current_bid_price_li').text(bidStartPrice);
                    $('#new_bid_price').val(updatedBidPriceWithAdditionBidstartPrice);
                    $('#hidden_bid_price').val(updatedBidPriceWithAdditionBidstartPrice);

                    //bid now model
                    $('#new_bid_price_id').val(updatedBidPriceWithAdditionBidstartPrice);
                    // $('#hidden_bid_price_id').val(updatedBidPriceWithAdditionBidstartPrice);
                    }

                    $('#no_of_bids .font-600').text(response.no_of_bids);
       
                    $('#pre_bid_closes .font-600').text(response.auction_end_date);

                    $('#pre_bid_closes_on').text(response.auction_end_date); 

                    $('#pre_bid_closes_bid_now').text(response.auction_end_date); 

                  

            },

            error: function(error) {

                console.log(error);

            }

         });

        });

    </script>

    </script>

    <!---buy now  bid price--->

    <script>
        $(document).ready(function(){
            $('#buy-now-bid').on('click', function(event){
                var carId = $('#car_id').val();
                var hiddenBidPriceId = $('#hidden_bid_price_id').val(); 
                $.ajax({
                    type: 'POST',
                    url: '{{ route('user.store_bid') }}',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        hidden_bid_price: hiddenBidPriceId,
                        car_id:carId
                    },
                    success: function(response) {
    
                        // alert(response.message)
                        // window.location.href = '{{ route("user.pricingplan") }}';
                    },
                    error: function(error) {
                      console.log(error);
                    }
                });
            });
        });
    </script>

    <!-- buy-now-car -->
    <script>
        $(document).ready(function(){
            $('#buy-now-car').on('click', function(event){
                event.preventDefault();
                var carId = $('#car_id').val();
                var userId = $('#user_id').val();
                var buyNowPrice = $('#buy_now_price_modal .font-600').text().trim(); 
                var buyNowPrice = $(this).find('span').text().trim();
    
                $.ajax({
    
                    type: 'POST',
                    url: '{{ route('user.buy_now_car') }}',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        buy_now_price: buyNowPrice,
                        car_id:carId,
                        user_id:userId,
                    },
    
                        success: function(response) {
                        window.location.href = '{{ route("user.cart") }}' + '?car_id=' + response.car_id + '&user_id=' + response.user_id;
                    },
    
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>    
    
    <!---timer code-->
    <script>
         $(document).ready(function(){
    
        var totalBids = 0; 
        var bidCountLast60Seconds = 0;
        var endTime; 
        var quickEndTime; // New variable for quick auction end time
        var timeinterval; 
        var quickTimeinterval; // New variable for quick auction timer interval
    
        // Function to parse auction time into milliseconds
        function parseAuctionTime(auctionTime) {
            return new Date(auctionTime).getTime();
        }
    
        // Function to calculate remaining time until endtime
        function getTimeRemaining(endtime) {
            var currentTime = Date.now();
            var t = endtime - currentTime;
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
    
            return {
                total: t,
                days: days,
                hours: hours,
                minutes: minutes,
                seconds: seconds
            };
        }
    
        // Function to initialize countdown clock
        function initializeClock(id, endtime) {
            var clock = document.getElementById(id);
            if (!clock) return;
    
            var daysSpan = clock.querySelector(".days");
            var hoursSpan = clock.querySelector(".hours");
            var minutesSpan = clock.querySelector(".minutes");
            var secondsSpan = clock.querySelector(".seconds");
    
            function updateClock() {
                var t = getTimeRemaining(endtime);
    
                if (t.total <= 0) {
                    clearInterval(timeinterval);
                    clock.innerHTML = "Auction Ended";
                } else {
                    daysSpan.innerHTML = t.days;
                    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
                    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
                }
            }
    
            updateClock();
            if (id === "extendedCountdown") {
                timeinterval = setInterval(updateClock, 1000); 
            } else if (id === "quickCountdown") {
                quickTimeinterval = setInterval(updateClock, 1000); 
            }
        }
    
        // Function to reset the timer based on auction type
        function resetTimer(auctionType) {
            clearInterval(timeinterval); 
            clearInterval(quickTimeinterval); 
    
            if (auctionType === "extended") {
                endTime = Date.now() + (2 * 60 * 1000); 
                initializeClock("extendedCountdown", endTime);
                console.log("Extended Auction Timer reset to 2 minutes");
            } else if (auctionType === "quick") {
                quickEndTime = Date.now() + (1 * 60 * 1000); 
                initializeClock("quickCountdown", quickEndTime);
                console.log("Quick Auction Timer reset to 1 minute");
            }
    
            bidCountLast60Seconds = 0; 
    
            // Format the new end date and time to 'YYYY-MM-DD HH:MM:SS'
            var endDate = new Date(auctionType === "extended" ? endTime : quickEndTime);
            var year = endDate.getFullYear();
            var month = ('0' + (endDate.getMonth() + 1)).slice(-2);
            var day = ('0' + endDate.getDate()).slice(-2);
            var hours = ('0' + endDate.getHours()).slice(-2);
            var minutes = ('0' + endDate.getMinutes()).slice(-2);
            var seconds = ('0' + endDate.getSeconds()).slice(-2);
            var formattedDateTime = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
    
            // Update in database
            var auction_type_id = $('#auction_type_id').val();
            var carId = $('#car_id').val();
    
            $.ajax({
                type: 'POST',
                url: '{{ route('update_timer') }}', // Route to update timer
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    new_end_time: formattedDateTime,
                    car_id: carId,
                    auction_type_id: auction_type_id // Send action type to the server
                },
                success: function(response) {
                    console.log("Timer updated in the database for " + auctionType + " auction");
                },
                error: function(xhr, status, error) {
                    console.error("Error updating timer in the database:", error);
                }
            });
        }
    
        // Function to reset timer if needed for extended auction
        function resetExtendedTimerIfNeeded() {
            var remainingTime = getTimeRemaining(endTime).total;
            if (bidCountLast60Seconds > 8 && remainingTime <= 60000) {
                resetTimer("extended"); // Reset timer when conditions are met for extended auction
            }
        }
    
        // Function to reset timer if needed for quick auction
        function resetQuickTimerIfNeeded() {
            var remainingTime = getTimeRemaining(quickEndTime).total;
            if (bidCountLast60Seconds > 8 && remainingTime <= 60000) {
                resetTimer("quick"); // Reset timer when conditions are met for quick auction
            }
        }
    
        // Event handler for placing a bid
        $('#place-bid').on('click', function(event){
            event.preventDefault();
    
            var carId = $('#car_id').val();
            var userId = $('#user_id').val();
            var userBidPrice = parseFloat($('#new_bid_price').val()); 
            var currentBidPrice = parseFloat($('#bid_price_value').text().replace('AED ', ''));
    
            if (userBidPrice <= currentBidPrice) {
                $('#bid-error-message').text('Your bid must be greater than the current bid price.').show();
                return; // Prevent the AJAX request if the condition is not met
            }
    
            $('#bid-error-message').hide(); 
    
            $.ajax({
                type: 'POST',
                url: '{{ route('user.store_bid') }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    hidden_bid_price: userBidPrice,
                    car_id: carId,
                    user_id: userId
                },
                success: function(response) {
                    // Update UI with new bid information
                    $('#bid_price_value').text('AED ' + userBidPrice); // Update bid price
                    $('#current_bid_price_li').text('AED ' + userBidPrice);
                    $('#new_bid_price').val(response.next_bid_price);
                    $('#new_bid_price_id').val(response.next_bid_price);
                    $('#current_bid_price_bid').text('AED ' + userBidPrice);
    
                    // Update totalBids and bidCountLast60Seconds
                    totalBids = response.no_of_bids;
                    bidCountLast60Seconds += 1;
    
                    // Check if conditions are met to reset the timer
                    resetExtendedTimerIfNeeded(); // Check for extended auction
                    resetQuickTimerIfNeeded(); // Check for quick auction
                },
                error: function(xhr, status, error) {
                    console.error("Error placing bid:", error);
                }
            }); 
        });
    
        // Initialize Pusher for real-time updates
        Pusher.logToConsole = true;
        var pusher = new Pusher('311704ea9b62255a706a', {
            cluster: 'ap2',
            encrypted: true
        });
    
        var channel = pusher.subscribe('bids');
        channel.bind('bid.placed', function(data) {
            console.log('Event received:', data);
    
            // Update UI with new bid information
            $('#bid_price_value').text(data.bidPrice);
            $('#current_bid_price_li').text(data.bidPrice);
            $('#new_bid_price').val(data.nextBidPrice);
            $('#new_bid_price_id').val(data.nextBidPrice);
            $('#hiddenBidPrice').val(data.nextBidPrice);
            $('#no_of_bids .font-600').text(data.noOfBids);
    
            // Update totalBids and bidCountLast60Seconds
            totalBids = data.noOfBids;
            bidCountLast60Seconds += 1;
    
            // Check if conditions are met to reset the timers
            resetExtendedTimerIfNeeded(); // Check for extended auction
            resetQuickTimerIfNeeded(); // Check for quick auction
        });
    
        // Subscription success and error handling
        channel.bind('pusher:subscription_succeeded', function() {
            console.log('Subscription succeeded');
        });
    
        channel.bind('pusher:subscription_error', function(status) {
            console.error('Subscription error:', status);
        });
    
        // Initialize auction timers based on server data
        @if (isset($cardetails->carAuction->auction_date) && isset($cardetails->carAuction->auction_time))
            var auctionDate = "{{ $cardetails->carAuction->auction_date }}";
            var auctionTime = "{{ $cardetails->carAuction->auction_time }}";
            var auctionDateTime = auctionDate + 'T' + auctionTime;
            endTime = parseAuctionTime(auctionDateTime);
            initializeClock("extendedCountdown", endTime);
        @endif
    
        @if (isset($cardetails->quick_auction_start_time) && isset($cardetails->quick_auction_start_date))
            var quickAuctionTime = "{{ $cardetails->quick_auction_start_time }}";
            var quickAuctionDate = "{{ $cardetails->quick_auction_start_date }}";
             
            // var currentDate = new Date();
            // var year = currentDate.getFullYear();
            // var month = ('0' + (currentDate.getMonth() + 1)).slice(-2);
            // var day = ('0' + currentDate.getDate()).slice(-2);
            // var hours = quickAuctionTime.substr(0, 2);
            // var minutes = quickAuctionTime.substr(3, 2);
            // var seconds = quickAuctionTime.substr(6, 2);
            var currentDateTime = quickAuctionDate + 'T' + quickAuctionTime ;
            quickEndTime = parseAuctionTime(currentDateTime);
            initializeClock("quickCountdown", quickEndTime);
        @endif
    });
    </script>

    <!-- // shown in payment due container modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            function displayPaymentDueDate(paymentDueContainer, paymentDueDateElement, paymentDueTime) {
    
                var paymentDueDate = new Date(paymentDueTime);
                var day = paymentDueDate.getDate();
                var month = paymentDueDate.getMonth() + 1; 
                var year = paymentDueDate.getFullYear();
                if (day < 10) {
                    day = '0' + day;
                }
    
                if (month < 10) {
                    month = '0' + month;
                }
    
                var paymentDueDateString = day + '-' + month + '-' + year;
                paymentDueDateElement.textContent = paymentDueDateString;
                paymentDueContainer.style.display = "block";
            }
            var currentTime = Date.now();
            var paymentDueTime = currentTime + (48 * 60 * 60 * 1000);

            // Display payment due date in #paymentDueContainer
    
            var paymentDueContainer = document.getElementById("paymentDueContainer");
            var paymentDueDateElement = document.getElementById("paymentDueDate");
            displayPaymentDueDate(paymentDueContainer, paymentDueDateElement, paymentDueTime);
      
            var paymentDueContainerModal = document.getElementById("paymentDueContainerModal");
            var paymentDueDateElementModal = document.getElementById("paymentDueDateModal");
            displayPaymentDueDate(paymentDueContainerModal, paymentDueDateElementModal, paymentDueTime);
        
            var paymentDueContainerBidModal = document.getElementById("paymentDueContainerBidModal");
            var paymentDueDateElementBidModal = document.getElementById("paymentDueDateBidModal");
            displayPaymentDueDate(paymentDueContainerBidModal, paymentDueDateElementBidModal, paymentDueTime);
    
            $('#staticBackdrop').on('shown.bs.modal', function (e) {
                paymentDueDateElementModal.textContent = paymentDueDateElement.textContent;
                paymentDueContainerModal.style.display = "block";
            });

            $('#bid-now-modle').on('shown.bs.modal', function (e) {
    
                paymentDueDateElementBidModal.textContent = paymentDueDateElement.textContent;
                paymentDueContainerBidModal.style.display = "block";
    
            });
        });

    </script>

    <!-- car overview score -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const accordionItems = document.querySelectorAll('.accordion-item');
            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                const content = item.querySelector('.accordion-content');
                const chevron = item.querySelector('.chevron');
                // Close accordion content and set chevron icon to up by default
                content.style.display = 'none';
                chevron.classList.add('fa-chevron-up');
                header.addEventListener('click', () => {
                item.classList.toggle('active');
                if (content.style.display === 'none') {
                    content.style.display = 'block';
                    chevron.classList.remove('fa-chevron-down');
                    chevron.classList.add('fa-chevron-up');
                } else {
                    content.style.display = 'none';
                    chevron.classList.remove('fa-chevron-up');
                    chevron.classList.add('fa-chevron-down');
                }
                });
            });
        });
    </script>


    <!--chassis perefect -->
    <script>

        document.addEventListener('DOMContentLoaded', async () => {
        let hoverImages = [];
            const fetchData = async () => {
                try {
    
                    const carId = document.getElementById('car_id').value;
    
                    const response = await fetch(`https://pragya.dbtechserver.online/car_arbab/details_images?car_id=${carId}`);
    
                    const data = await response.json();
    
                    hoverImages = data.map(item => ({
    
                        x: parseFloat(item.xcord),
    
                        y: parseFloat(item.ycord),
    
                        src: `https://pragya.dbtechserver.online/car_arbab/public/${item.image}`
    
                    }));
    
                    console.log(hoverImages); 
    
                    drawBaseImage(); 
    
                } catch (error) {
    
                    console.error('Error fetching data:', error);
                }
            };
            await fetchData();
    
            const canvasContainer = document.getElementById('canvasContainer');
            const canvas = document.getElementById('baseImageCanvas');
            const ctx = canvas.getContext('2d');
            const hoverImageContainer = document.getElementById('hoverImageContainer');
            const fileInput = document.getElementById('fileInput');
            const carIdInput = document.getElementById('car_id');
            const baseImage = new Image();
    
            baseImage.src = 'https://pragya.dbtechserver.online/car_arbab/public/frontend/assets/images/background/car-right.png';
    
            const resizeCanvas = () => {
                canvas.width = canvasContainer.clientWidth;
                canvas.height = canvasContainer.clientWidth * (baseImage.height / baseImage.width);
                drawBaseImage();
            };

            const drawBaseImage = () => {
    
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(baseImage, 0, 0, canvas.width, canvas.height);
    
                ctx.fillStyle = 'red';
                hoverImages.forEach(img => {
    
                    ctx.beginPath();
    
                    ctx.arc(img.x * canvas.width, img.y * canvas.height, 5, 0, Math.PI * 2);
    
                    ctx.fill();
    
                });
            };

            baseImage.onload = () => {
    
                resizeCanvas();
                window.addEventListener('resize', resizeCanvas);
    
            };

            canvas.addEventListener('mousemove', (e) => {
    
                const rect = canvas.getBoundingClientRect();
                const mouseX = e.clientX - rect.left;
                const mouseY = e.clientY - rect.top;
                let hoveredImage = null;
    
                hoverImages.forEach(img => {
    
                    const distance = Math.sqrt((mouseX - img.x * canvas.width) ** 2 + (mouseY - img.y * canvas.height) ** 2);
    
                    if (distance < 10) { 
    
                        hoveredImage = img;
                    }
    
                });
    
                if (hoveredImage) {
    
                    hoverImageContainer.innerHTML = `<img src="${hoveredImage.src}" alt="Hovered Image">`;
                    hoverImageContainer.style.display = 'block';
                    hoverImageContainer.style.top = `${e.pageY + 10}px`;
                    hoverImageContainer.style.left = `${e.pageX + 10}px`;
    
                } else {
    
                    hoverImageContainer.style.display = 'none';
    
                }
            });
        });
    </script>
    
    <script>

    document.addEventListener("DOMContentLoaded", function() {

        const buttons = document.querySelectorAll('.btn.btn-primar');
        const tabPanes = document.querySelectorAll('.tab-pane');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-bs-target').substring(1);
                tabPanes.forEach(pane => {
                    pane.classList.remove('active', 'show');
                });
                const targetPane = document.getElementById(filter);
                targetPane.classList.add('active', 'show');
            });
        });
    });
    </script>



    <!--// for lightgallery-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlBpujFJyeyqZMrN2To7RgpHgjg7K4hSoo4pIx9PhjDnp+c0ZNsP7/Jp4yu" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGfifoISpH+3PnhomrL+7/8A6qOK4h0pbBOKuqie03JRBflO8abdpYBhlp5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.5.0/lightgallery.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.5.0/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const galleries = document.querySelectorAll('.lightgallery');
            galleries.forEach(gallery => {
                lightGallery(gallery, {
                    plugins: [lgThumbnail],
                    thumbnail: true,
                    selector: '.gallery-item'
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterButtons = document.querySelectorAll('.buttons-wrapper .button');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterValue = this.getAttribute('data-filter');
                    galleryItems.forEach(item => {
                        const tags = item.getAttribute('data-tags');
                        if (filterValue === 'all' || tags.includes(filterValue)) {
                            item.style.display = 'inline-block'; 
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
        
          var imgPopup = $('.img-popup');
          var imgCont  = $('.containerss__img-holder');
          var popupImage = $('.img-popup img');
          var closeBtn = $('.close-btn');
        
          // handle events
          imgCont.on('click', function() {
            var img_src = $(this).children('img').attr('src');
            imgPopup.children('img').attr('src', img_src);
            imgPopup.addClass('opened');
          });
        
          $(imgPopup, closeBtn).on('click', function() {
            imgPopup.removeClass('opened');
            imgPopup.children('img').attr('src', '');
          });
        
          popupImage.on('click', function(e) {
            e.stopPropagation();
          });
          
        });
    </script>

@endsection 