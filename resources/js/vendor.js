const { isEmpty } = require('lodash');

window.$ = window.JQuery = require('jquery')

/*--------------------------------------------------------------
# ANIMATION
--------------------------------------------------------------*/
window.AOS = require('aos');

window.addEventListener('load', () => {
    AOS.init({
        duration: 1200, // values from 0 to 3000, with step 50ms
        easing: 'ease-in-out', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
    });
});


// const navButton = document.querySelector('#hamburger')
// const mobileMenu = document.querySelector('#mobile-menu')
//     isClosed = true 

// // navButton.addEventListener('click', () => {
// //     burgerTime();
// //     mobileMenu.classList.toggle('md:hidden')
// // });
// function burgerTime() {
//     if (isClosed == true) {
//         navButton.classList.remove('is-open');
//         navButton.classList.add('is-closed');
//         isClosed = false;
//     } else {
//         navButton.classList.remove('is-closed');
//         navButton.classList.add('is-open');
//         isClosed = true;
//     }
// }

// // HEADER AND BACK TO TOP
// var didScroll;
// var lastScrollTop = 0;
// var delta = 5;
// var navbarHeight = $('header').outerHeight();

// $(window).on('scroll', function(event) {
//     didScroll = true
// })

// $('#back-to-top').on('click', function(event) {
//     event.preventDefault()
//     $('html, body').animate({scrollTop:0}, '300');
//     if($("#hamburger").hasClass('is-closed')) {
//         navButton.click(function() {
//             burgerTime()
//         })
//     }
//     mobileMenu.classList.add('md:hidden')
// })

// setInterval(function() {
//     if (didScroll) {
//         hasScrolled();
//         didScroll = false;
//     }

//     if(lastScrollTop) {
//         $('#back-to-top').removeClass('hidden')
//     } else {
//         $('#back-to-top').addClass('hidden')
//     }
// }, 250)

// function hasScrolled() {
//     var st = $(this).scrollTop()
//     if(Math.abs(lastScrollTop - st) <= delta)
//         return
//     if (st > lastScrollTop && st > navbarHeight){
//         $('header').addClass('navbarHide')
//     } else {
//         if(st + $(window).height() < $(document).height()) {
//             $('header').removeClass('navbarHide')
//         }
//     }
//     lastScrollTop = st
// }


/*--------------------------------------------------------------
# DARK MODE
--------------------------------------------------------------*/
var darkObj = {
    btn: $('#darkMode'),
    icon: $('#icon_figure')
}
darkObj.btn.on('click', function(event) {
    event.preventDefault()
    darkMode()
})
function darkMode() {
    darkObj.icon.text(function(i,v) { return v === 'brightness_5' ? 'brightness_2' : 'brightness_5' })
    $('html').toggleClass("dark")
}


/*--------------------------------------------------------------
# NAVBAR
--------------------------------------------------------------*/
$(function() {

  const select = (el, all = false) => {
      el = el.trim()
      if (all) {
          return [...document.querySelectorAll(el)]
      } else {
          return document.querySelector(el)
      }
  }
  const on = (type, el, listener, all = false) => {
      let selectEl = select(el, all)
      if (selectEl) {
          if (all) {
              selectEl.forEach(e => e.addEventListener(type, listener))
          } else {
              selectEl.addEventListener(type, listener)
          }
      }
  }
  const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener)
  }

  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
      let position = window.scrollY + 200
      navbarlinks.forEach(navbarlink => {
          if (!navbarlink.hash) return
              let section = select(navbarlink.hash)
          if (!section) return
          if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
              navbarlink.classList.add('active')
          } else {
              navbarlink.classList.remove('active')
          }
      })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  const selectHeader = document.querySelector('header')
  let backtotop = select('#back-to-top');
  if (backtotop) {
      const toggleBacktotop = () => {
          if (window.scrollY > 100) {
              backtotop.classList.remove('hidden')
          } else {
              backtotop.classList.add('hidden')
          }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
  }

/*--------------------------------------------------------------
# PRELOADER
--------------------------------------------------------------*/
    let preloader = select('#preloader');
    if (preloader) {
            window.addEventListener('load', () => {
            preloader.remove()
        });
    }
}); 

/*--------------------------------------------------------------
# NAVBAR MOBILE
--------------------------------------------------------------*/
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
            this.classList.toggle("is-active");
        }, false);
    });
} 

const headerObj = {
  header: document.querySelector('header'),
  hamburger: document.querySelector('.hamburger-navbar-icon-toggler'),
}
headerObj.hamburger.addEventListener('click', () => {
  headerObj.header.classList.toggle('active-left-0')
  if($(this).hasClass('is-active')) {
    headerObj.hamburger.classList.toggle('is-active')
  }
})

/*--------------------------------------------------------------
# FORM
--------------------------------------------------------------*/
// const conBTN = document.querySelector('#contactBTN')
// conBTN.addEventListener('click', () => {
//     var name = $('#name').val();
//     var email = $('#email').val();
//     var phone = $('#phone').val();
//     var msg = $('#message').val();


// })

// if($("#contact_form").length > 0) {
//     $('#contact_form').validate({
//         rules:{
//             name : {
//                 required : true,
//                 maxlength : 50
//             },
//             email : {
//                 required : true,
//                 maxlength : 50, 
//                 email : true
//             },
//             phone :  {
//                 number : true
//             },
//             message : {
//                 required : true,
//                 minlength : 1,
//                 maxlength : 500
//             }
//         },
//         messages : {
//             name : {
//                 required : 'Enter Name Detail',
//                 maxlength : 'Name should not be more than 50 character'
//             },
//             email : {
//                 required : 'Enter Email Detail',
//                 email : 'Enter Valid Email Detail',
//                 maxlength : 'Email should not be more than 50 character'
//             },
//             message : {
//                 required : 'Enter Message Detail',
//                 minlength : 'Message Details must be minimum 50 character long',
//                 maxlength : 'Message Details must be maximum 500 character long'
//             }
//         }
//     });
// }

// UNDERT_TEST
// $(function(){
//     $('form').on('submit', function(e) {
//         e.preventDefault();

//         $.ajax({
//             url: $(this).attr('action'),
//             method: $(this).attr('method'),
//             data: new FormData(this),
//             processData:false,
//             dataType:'json',
//             contentTyoe:false,
//             beforeSend:function() {
//                 $(document).find('span.error-text').text('')
//             },
//             success:function(data) {
//                 if(data.status == 0) {
//                     $.each(data.error, function(prefix, val) {
//                         $('span.'+prefix+'_error').text(val[0])
//                     });
//                 } else {
//                     $('email_author_form')[0].requestFullscreen()
//                 }
//             }
//         });
//     })
// })




function validateName() {
    $('#nameJS').keyup(function() {
        var fname = $('#nameJS').val()
        var x = fname.trim()
        var char = x.replace(/\s+/gi, '').length;
        // console.log(char)
        if(char > 0) {
            $("label:first").html('<i class="material-icons min-w-fit min-h-fit mr-2">person</i> Your name.').css("color", "#1c183f")
            $('#nameJS').css("border-bottom-color", "#1c183f")
        }
    })

    $('#nameJS').keyup(function(){
        var fname = $('#nameJS').val()
        var x = fname.trim()
        var char = x.replace(/\s+/gi, '').length;
        // console.log(char)
        if(char == 0) {
            $("label:first").html('<i class="material-icons min-w-fit min-h-fit mr-2">person</i> Required name.').css("color", "#eb8188")
            $('#nameJS').css("border-bottom-color", "#eb8188")
        }
    })
}  

function validateTextarea() {
    $('#messageJS').keyup(function() {
        var msg = $('#messageJS').val()
        var x = msg.trim()
        var char = x.replace(/\s+/gi, '').length;
        // console.log(char)
        if(char > 0) {
            $("label:last").html('<i class="material-icons min-w-fit min-h-fit mr-2">edit</i> Message.').css("color", "#1c183f")
            $('#messageJS').css("border-bottom-color", "#1c183f")
        } else {
            $("label:last").html('<i class="material-icons min-w-fit min-h-fit mr-2">edit</i> Required message.').css("color", "#eb8188")
            $('#messageJS').css("border-bottom-color", "#eb8188")
        }
    })

    // $('#messageJS').keyup(function(){
    //     var msg = $('#messageJS').val()
    //     var x = msg.trim()
    //     var char = x.replace(/\s+/gi, '').length;
    //     // console.log(char)
    //     if(char == 0) {
    //         $("label:last").html('<i class="material-icons min-w-fit min-h-fit mr-2">edit</i> Required message.').css("color", "#eb8188")
    //         $('#messageJS').css("border-bottom-color", "#eb8188")
    //     }
    // })
}


$(function() {

    validateName()
    validateTextarea()

    var fname = $('#nameJS').val()
    var mail = $('#emailJS')
    var mobile = $('#phoneJS')
    var msg = $('#messageJS')

    $("#contactBTN").on('click', function(event) { 
        event.preventDefault()
        // $('#name').attr("placeholder", " ")

        // if(fname == "") {
        //     $("label:first").html('<i class="material-icons min-w-fit min-h-fit mr-2">person</i> Required name.').css("color", "#eb8188")
        //     $('#nameJS').css("border-bottom-color", "#eb8188")
        // } 
        if(msg == "") {
            $("label").html('<i class="material-icons min-w-fit min-h-fit mr-2">edit</i> Required message.').css("color", "#eb8188")
            $('textarea').css("border-bottom-color", "#eb8188")
        }
        
        else {
           
        }
    });
});
