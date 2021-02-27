/*
 * =============================================================================
 *  Required Dependencies by Bootstrap's JavaScript Components
 * =============================================================================
 */

import $ from 'jquery'
// import 'popper.js'

/*
 * =============================================================================
 *  Bootstrap JavaScript Components
 * =============================================================================
 */

import AOS from 'aos'
import 'bootstrap/js/dist/util'
// import 'bootstrap/js/dist/alert'
import 'bootstrap/js/dist/button'
import 'bootstrap/js/dist/carousel'
import 'bootstrap/js/dist/collapse'
// import 'bootstrap/js/dist/dropdown'
// import 'bootstrap/js/dist/modal'
// import 'bootstrap/js/dist/popover'
// import 'bootstrap/js/dist/scrollspy'
import 'bootstrap/js/dist/tab'
// import 'bootstrap/js/dist/toast'
// import 'bootstrap/js/dist/tooltip'

import loadGoogleMapsApi from 'load-google-maps-api'

/*
 * =============================================================================
 *  Application Styles
 * =============================================================================
 */

import '../scss/app.scss'

/*
 * =============================================================================
 *  Asset files
 * =============================================================================
 */

/*
 * =============================================================================
 *  Application Scripts
 * =============================================================================
 */

window.$ = $

$(document).ready(function () {
  $('.navbar-main__show, .navbar-main__hide').click(function () {
    $('.navbar-main').toggleClass('d-none')
  })

  loadGoogleMapsApi().then(function (googleMaps) {
    // Append maps image on contact
    $('.location-maps').css({
      'background': `url("https://maps.googleapis.com/maps/api/staticmap?key=${process.env.GOOGLEMAPS_KEY}&center=-6.266217,106.818359&zoom=16&size=720x720&scale=2&markers=-6.266217,106.818359")`,
      'background-size': 'cover',
      'background-position': 'center',
      'background-repeat': 'no-repeat',
    })
  }).catch(function (error) {
    console.error(error)
  })
})

$(document).ready(function(){
  $(window).on("scroll",function(){
    var wn = $(window).scrollTop();
    if(wn > 120){
      $(".navbar").css("background","#4285F4");
    }
    else{
      $(".navbar").css("background","#4285F4");
    }
  });
});

// $('#leadinModal-content-wrapper-968052').modal({backdrop: 'static', keyboard: false});

// $(document).ready(function () {
//   $('#form_subscribe_post').on('click', function (e) {
//     e.preventDefault();

//     $.ajax({
//       type: "GET",
//       url: "../../insert-data.php",
//       data: {
//         nama : $('#subs_name').val(),
//         email : $('#subs_email').val()
//       },
//       success: function(data) {
//         console.log(data)
//       }
//     });
//   })
// })

// $(document).ready(function () {
//   const second = 1000
//   const minute = second * 60
//   const hour = minute * 60
//   const day = hour * 24

//   const countDown = new Date("Feb 04, 2021 09:00:00").getTime()
//   const x = setInterval(function() {
//     const now = new Date().getTime()
//     const distance = countDown - now

//     document.getElementById("countdown-days").innerText = Math.floor(distance / (day)),
//     document.getElementById("countdown-hours").innerText = Math.floor((distance % (day)) / (hour)),
//     document.getElementById("countdown-minutes").innerText = Math.floor((distance % (hour)) / (minute)),
//     document.getElementById("countdown-seconds").innerText = Math.floor((distance % (minute)) / second);

//     //do something later when date is reached
//     if (distance < 0) {
//       clearInterval(x);
//     }
//     //seconds
//   }, 0)
// })



// You can also pass an optional settings object
// below listed default settings
$(document).ready(function () {
  AOS.init({
  duration:1200,
  });
})