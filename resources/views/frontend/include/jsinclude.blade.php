<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script
    src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.js">
</script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script type="text/javascript">
// for favorite is check or uncheck



// latest code 

$(document).ready(function() {
    $('.clickable-image').click(function() {

        var targetId = $(this).data('target');
        var currentColor = $('#' + targetId).data('current-color');

        var newColor = currentColor === "rgb(255, 255, 255)" ? "#21E786" : "rgb(255, 255, 255)";

        $('#' + targetId).css('background-color', newColor);
        $('#' + targetId).data('current-color', newColor);
    });
});

// end favorite is check or uncheck


$(document).ready(function() {
    $('.bid-submit').click(function() {

        $('#live-success').css('display', 'block');

        setTimeout(function() {
            $('#live-success').css('display', 'none');
            $('#bid-done-alert').css('display', 'block');
        }, 3000);
    });
});


// for accordion 
$(document).ready(function() {
    $('.accordion-button').click(function() {
        var target = $($(this).data('bs-target'));
        if (target.hasClass('show')) {
            target.collapse('hide');
        } else {
            target.collapse('show');
        }
    });
});

// end /accordion 

// for active header 
// $(document).ready(function() {

//     var path = window.location.pathname;

//     console.log(path)
//     if (path === "/") {
//         $("#home-link").addClass("active");
//     } else if (path === "/list.php") {
//         $("#list-link").addClass("active");
//     } else if (path === "/calender.php") {
//         $("#calendar-link").addClass("active");
//     } else if (path === "/liveauction.php") {
//         $("#liveauction-link").addClass("active");
//     } else if (path === "/aboutus.php") {
//         $("#aboutus-link").addClass("active");
//     } else if (path === "/contactus.php") {
//         $("#contactus-link").addClass("active");
//     } else if (path === "/livebidding.php") {
//         $(".home-header").addClass("bg-white");
//     }

// });
//  end active header 

// for input phone number and country code
/*

*/
// $(document).ready(function() {
//     var input = $('#phone')[0];
//     window.intlTelInput(input, {
//         separateDialCode: true
//     });
// });

       


// end input phone number and country code


// for type password toggle


$(document).ready(function() {
    $('.password-toggle').click(function() {
        var passwordInput = $('#passwordInput');
        var icon = $('.password-toggle img');

        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye.svg')}}');
        } else {
            passwordInput.attr('type', 'password');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye-closed.svg')}}');
        }
    });
});

$(document).ready(function() {
    $('.confirm-password-toggle').click(function() {
        var passwordInput = $('#confirmPasswordInput');
        var icon = $('.confirm-password-toggle img');

        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye.svg')}}');
        } else {
            passwordInput.attr('type', 'password');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye-closed.svg')}}');
        }
    });
});

$(document).ready(function() {
    $('.password-toggle-black').click(function() {
        var passwordInput = $('#passwordInputBlack');
        var icon = $('.password-toggle-black img');

        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye-black.svg')}}');
        } else {
            passwordInput.attr('type', 'password');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye-closed-black.svg')}}');
        }
    });
});


$(document).ready(function() {
    $('.confirm-password-toggle-black').click(function() {
        var passwordInput = $('#confirmPasswordInput');
        var icon = $('.confirm-password-toggle-black img');

        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye-black.svg')}}');
        } else {
            passwordInput.attr('type', 'password');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye-closed-black.svg')}}');
        }
    });
});

$(document).ready(function() {
    $('.new-password-toggle-black').click(function() {
        var passwordInput = $('#newPasswordInput');
        var icon = $('.new-password-toggle-black img');

        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye-black.svg')}}');
        } else {
            passwordInput.attr('type', 'password');
            icon.attr('src', '{{ asset('frontend/assets/images/icon/eye-closed-black.svg')}}');
        }
    });
});
// for otp 

$(document).ready(function() {
    $('.otp-input').on('input', function() {
        if ($(this).val().length == 1) {
            $(this).next('.otp-input').focus();
        }

    });

    $('.otp-input:last').on('input', function() {
        if ($(this).val().length == 1) {
            $(this).blur();
        }
    });
});

// for sign in form redirect 

// $(document).ready(function() {
//     $('#signin-form').submit(function(event) {
//         event.preventDefault();

//         window.location.href = '/';
//     });
// });

// $(document).ready(function() {
//     $('#signup-form').submit(function(event) {
//         event.preventDefault();

//         window.location.href = '/otp.php';
//     });
// });




// for chang tab in another file 


$(document).ready(function() {
    $('.dashboard-vehicles').click(function() {
        let tabId = $(this).data('tab-id');
        if (tabId) {
            sessionStorage.setItem('activeTab', tabId);

            window.location.href = 'wonvehicles.php';
        }
    });
});

$(document).ready(function() {
    let activeTab = sessionStorage.getItem('activeTab');
    if (activeTab) {
        $(`#${activeTab}`).tab('show');
        sessionStorage.removeItem('activeTab');
    }
});

// for chang tab in another file 



//===========================calendar==================//

$(document).ready(function() {
    var calendarEl = $('.calendar')[0];

    if (calendarEl) {
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: [{
                    title: 'Event 1',
                    start: '2024-03-10',
                    classNames: ["first-event"]
                },
                {
                    title: 'Event 2',
                    start: '2024-03-10',
                    classNames: ["second-event"]
                },
                {
                    title: 'Event 3',
                    start: '2024-03-10',
                    classNames: ["third-event"]
                },
                {
                    title: 'Event 2',
                    start: '2024-03-15',
                    classNames: ["first-event"]
                },
            ],
        });
        calendar.render();
    } else {
        console.error('Calendar element not found');
    }
});

// for image drag

$(document).ready(function() {
    $('.dropify').dropify({
        messages: {
            'default': 'Drag Or Upload Your Payment Receipt Here',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happened.'
        }
    });
});

$(document).ready(function() {
    $('.dropify-profile').dropify({
        messages: {
            'default': 'Drag Or Upload Your Image/Video Here',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happened.'
        }
    });
});


// end image drag


// $(document).ready(function() {
//     $('.bid-amount').on('keydown', function(event) {
//         // Check if the key pressed is the "+" key
//         if (event.key === '+' || event.key === '-') {
//             event.preventDefault();
//         }
//     });
// });



$(document).ready(function() {
    let value = 250;

    function updateValue(newValue) {
        $('#bid-amount1').val(newValue);
        $('#bid-amount2').val(newValue);
        $('#bid-amount3').val(newValue);
        value = newValue;
    }

    function increment() {
        const newValue = value + 250;
        updateValue(newValue);
    }

    function decrement() {
        const newValue = value - 250;
        if (newValue >= 250) { // Check if the new value is valid before updating
            updateValue(newValue);
        }
    }

    $('.decrement-btn').on('click', decrement);
    $('.increment-btn').on('click', increment);

    $('#bid-amount1, #bid-amount2, #bid-amount3').on('input', function() {
        const newValue = parseInt($(this).val());
        if (!isNaN(newValue)) {
            updateValue(newValue);
        }
    });
});



//===========Count Slider===================//
$(function() {
    // Owl Carousel
    var owl = $("#slider-1");
    owl.owlCarousel({
        items: 5,
        margin: 25,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoWidth: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            960: {
                items: 2
            },
            1200: {
                items: 3
            },

            1500: {
                items: 3
            }

        }
    });

    var owl = $("#slider-2");
    owl.owlCarousel({
        items: 5,
        margin: 25,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoWidth: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            960: {
                items: 2
            },
            1200: {
                items: 3
            },

            1500: {
                items: 3
            }

        }
    });

    var owl = $("#slider-3");
    owl.owlCarousel({
        items: 4,
        margin: 10,
        loop: true,
        autoplay: true,
        nav: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoWidth: false,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            960: {
                items: 3
            },
            1200: {
                items: 4.5
            },

            1500: {
                items: 4.5
            }

        }
    });


    var owl = $("#slider-5");
    owl.owlCarousel({
        items: 4,
        margin: 10,
        loop: true,
        autoplay: true,
        nav: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoWidth: false,
        dots: false,
        responsive: {
            0: {
                items: 1.2
            },
            600: {
                items: 1.5
            },
            991: {
                items: 3
            },
            1200: {
                items: 4.5
            },

            1500: {
                items: 4.5
            }

        }
    });


    //===========Count Function===================


    $('.count').each(function() {
        var targetCount = parseInt($(this).text());
        targetCount = isNaN(targetCount) ? 0 : targetCount;
        var startCount = 0;
        $(this).prop('Counter', startCount).animate({
            Counter: targetCount
        }, {
            duration: 3000,
            easing: 'swing',
            step: function(now) {
                var currentCount = Math.ceil(now);
                $(this).text(currentCount.toLocaleString());
                if (currentCount >= targetCount) {
                    $(this).stop();
                }
            }
        });
    });


    /////////////////////////////////////////////////////

    const slider = document.querySelector('.scroll-x');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
    });


    ////////////////////////////////////////////////


    $('#slide').on('click', function() {
        var container = $('.scroll-x');
        sideScroll(container, 'right', 25, 100, 10);
    });

    $('#slideBack').on('click', function() {
        var container = $('.scroll-x');
        sideScroll(container, 'left', 25, 100, 10);
    });

    function sideScroll(element, direction, speed, distance, step) {
        var scrollAmount = 0;
        var slideTimer = setInterval(function() {
            if (direction === 'left') {
                element.scrollLeft(element.scrollLeft() - step);
            } else {
                element.scrollLeft(element.scrollLeft() + step);
            }
            scrollAmount += step;
            if (scrollAmount >= distance) {
                clearInterval(slideTimer);
            }
        }, speed);
    }


    /////////////////////////////////////


    $(".toggle-1").click(function() {
        $(".filter-1").toggle();
    });

    $(".toggle-2").click(function() {
        $(".filter-2").toggle();
    });

    /////////////////////////////////////////////////
    function updateProgress(range, rangeInput) {
        let minVal = parseInt(rangeInput.eq(0).val()),
            maxVal = parseInt(rangeInput.eq(1).val());

        let rangeMin = parseInt(rangeInput.eq(0).attr('min'));
        let rangeMax = parseInt(rangeInput.eq(0).attr('max'));

        let left = ((minVal - rangeMin) / (rangeMax - rangeMin)) * 100;
        let right = 100 - ((maxVal - rangeMin) / (rangeMax - rangeMin)) * 100;

        range.css('left', left + '%');
        range.css('right', right + '%');
    }

    $('.year-range').each(function() {
        const rangeInput = $(this).find('.range-input input'),
            yearInput = $(this).find('.year-input input'),
            range = $(this).find('.slider .progress');
        let priceGap = 2;

        yearInput.on('input', function(e) {
            let minYear = parseInt(yearInput.eq(0).val()),
                maxYear = parseInt(yearInput.eq(1).val());

            if (maxYear - minYear >= priceGap && maxYear <= rangeInput.eq(1).attr('max')) {
                if ($(e.target).hasClass("input-min")) {
                    rangeInput.eq(0).val(minYear);
                    updateProgress(range, rangeInput);
                } else {
                    rangeInput.eq(1).val(maxYear);
                    updateProgress(range, rangeInput);
                }
            }
        });

        updateProgress(range, rangeInput); // Initialize progress
    });

    $('.range-input input').on('input', function(e) {
        let rangeInput = $(this).closest('.range-input').find('input'),
            priceInput = $(this).closest('.year-range').find('.year-input input'),
            range = $(this).closest('.year-range').find('.slider .progress');
        let priceGap = 2;

        let minVal = parseInt(rangeInput.eq(0).val()),
            maxVal = parseInt(rangeInput.eq(1).val());

        if (maxVal - minVal < priceGap) {
            if ($(this).hasClass("range-min")) {
                rangeInput.eq(0).val(maxVal - priceGap);
            } else {
                rangeInput.eq(1).val(minVal + priceGap);
            }
        } else {
            priceInput.eq(0).val(minVal);
            priceInput.eq(1).val(maxVal);
            updateProgress(range, rangeInput);
        }
    });



    ////////////////////////////////////////////

    /*=======Onscroll fixed Section==========*/

    $(document).ready(function() {
        var mobileNavToggler = $('#mobileNavToggler');
        var mobileNav = $('#mobileNav');

        mobileNavToggler.click(function() {
            mobileNav.toggleClass('open');
        });
    });


    // $(document).ready(function() {
    //     $('.redirect-details').click(function() {
    //         window.location.href = "/details.php";
    //     });
    // });

    $(document).ready(function() {
        $('.redirect-details').click(function() {
            var carId = $(this).data('car-id');
        
            var redirectUrl = detailsRoute.replace(':id', carId);
       
            window.location.href = redirectUrl;
        });
    });



    $(document).ready(function() {
        $('.redirect-livebidding').click(function() {
            // window.location.href = "/livebidding.php";
            var carId = $(this).data('car-id');
            var redirectUrl = detailsRoute.replace(':id', carId);
            window.location.href = redirectUrl;
        });
    });


    var elementPosition = $('.onscroll-fixed').offset();
    var howItSection = $('.scroll-none').offset().top + $('.scroll-none').outerHeight();
    $(window).scroll(function() {
        var scrollPosition = $(window).scrollTop();
        if (scrollPosition > elementPosition.top && scrollPosition < howItSection) {
            $('.onscroll-fixed').css({
                'position': 'fixed',
                'top': '0'
            });

            $('.home-header').css({
                'position': 'unset',
                'top': '0'
            });

        } else {
            $('.onscroll-fixed').css('position', 'static');
            $('.home-header').css({
                'position': 'sticky',
                'top': '0'
            });
        }
    });


});

new WOW().init();


var owl = $("#slider-4");
owl.owlCarousel({
    items: 5,
    margin: 25,
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    autoWidth: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        960: {
            items: 3
        },
        1200: {
            items: 3
        },
        1400: {
            items: 4
        }
    }
});

///////////////////////////////////////




// function getTimeRemaining(endtime) {
//     var t = Date.parse(endtime) - Date.parse(new Date());
//     var seconds = Math.floor((t / 1000) % 60);
//     var minutes = Math.floor((t / 1000 / 60) % 60);
//     var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
//     var days = Math.floor(t / (1000 * 60 * 60 * 24));
//     return {
//         total: t,
//         days: days,
//         hours: hours,
//         minutes: minutes,
//         seconds: seconds
//     };
// }

// /////////////////////////////////////

// function initializeClock(id, endtime) {
//     var clock = document.getElementById(id);
//     var daysSpan = clock.querySelector(".days");
//     var hoursSpan = clock.querySelector(".hours");
//     var minutesSpan = clock.querySelector(".minutes");
//     var secondsSpan = clock.querySelector(".seconds");

//     function updateClock() {
//         var t = getTimeRemaining(endtime);

//         if (t.total <= 0) {
//             clearInterval(timeinterval);

//             var newTime = Date.parse(endtime);
//             var nowTime = Date.parse(new Date());

//             while (newTime <= nowTime) {
//                 newTime = newTime + 1 * 24 * 60 * 60 * 1000; // add 24hours
//             }

//             var deadline = new Date(newTime);
//             initializeClock('countdown', deadline);
//         } else {
//             daysSpan.innerHTML = t.days;
//             hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
//             minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
//             secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
//         }
//     }

//     updateClock();
//     var timeinterval = setInterval(updateClock, 1000);
// }

// var deadline = "February 22 2024 00:00:00 GMT+0200";
// initializeClock("countdown", deadline);


/*=================skill-per==========*/



var skillPers = document.querySelectorAll(".skill-per");

skillPers.forEach(function(skillPer) {
    var per = parseFloat(skillPer.getAttribute("per"));
    skillPer.style.width = per + "%";

    var animatedValue = 0;
    var startTime = null;

    function animate(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = timestamp - startTime;
        var stepPercentage = progress / 1000; // Dividing by duration in milliseconds (1000ms = 1s)

        if (stepPercentage < 1) {
            animatedValue = per * stepPercentage;
            skillPer.setAttribute("per", formatPercentage(animatedValue));
            requestAnimationFrame(animate);
        } else {
            animatedValue = per;
            skillPer.setAttribute("per", formatPercentage(animatedValue));
        }
    }

    function formatPercentage(value) {
        // Append a decimal point if the value is a decimal
        return Number.isInteger(value) ? Math.floor(value) + "%" : value.toFixed(1) + "%";
    }

    requestAnimationFrame(animate);
});


//   var elementPosition = $('#fixed').offset();

// $(window).scroll(function(){
//         if($(window).scrollTop() > elementPosition.top){
//               $('#fixed').css('position','fixed').css('top','50');
//         } else {
//             $('#fixed').css('position','static');
//         }    
// });



var Fx = $("#Fx");

var myScrollFunc = function() {
    var y = $(window).scrollTop();
    if (y >= 80) {

        Fx.addClass("countdown-bg fixed").removeClass("countdown-bg unset");
        $('.home-header').css({
            'position': 'unset',
            'top': '0'
        });
    } else {
        Fx.addClass("countdown-bg unset").removeClass("countdown-bg fixed");
        $('.home-header').css({
            'position': 'sticky',
            'top': '0'
        });

    }
};

$(window).scroll(myScrollFunc);

/*=======Onscroll fixed Section==========*/

// const toggleButton = document.getElementById('accordion-btn');
// const myTable = document.getElementById('accordion-body');

// toggleButton.addEventListener('click', function() {
//     if (myTable.style.display === 'none') {
//         myTable.style.display = 'block';
//     } else {
//         myTable.style.display = 'none';
//     }
// });

// const setLabel = (lbl, val) => {
//     const label = $(`#slider-${lbl}-label`);
//     label.text(val);
//     const slider = $(`#slider-div .${lbl}-slider-handle`);
//     const rect = slider[0].getBoundingClientRect();
//     label.offset({
//         top: rect.top - 30,
//         left: rect.left
//     });
// }

// const setLabels = (values) => {
//     setLabel("min", values[0]);
//     setLabel("max", values[1]);
// }


// $('#ex2').slider().on('slide', function(ev) {
//     setLabels(ev.value);
// });
// setLabels($('#ex2').attr("data-value").split(","));


// for livebigging page
</script>