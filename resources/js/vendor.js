import intlTelInput from 'intl-tel-input';
const { isEmpty } = require('lodash');
window.$ = window.JQuery = require('jquery')
window.Swal = require('Sweetalert2');

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
$(function() {
    validatePhone()

    const intlPhone = document.querySelector('#phoneJS')
    
    var name = $('#nameJS').val()
    var mail = $('#emailJS').val()
    var mobile = $('#phoneJS').val()
    var msg = $('#messageJS').val()
    
    var iti = intlTelInput(intlPhone, {
        separateDialCode:true,
        initialCountry: 'us',
        // onlyCountries: [ 'cn', 'us', 'ca', 'gr', 'es', 'pt', 'hu', 'fk' ]
        autoHideDialCode: true,
        // autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['US'],
        separateDialCode: true
    })
    
    $("#feedbackMail").on('submit', function(event) { 
        event.preventDefault()
        let formData = new FormData(this)
        let url = $(this).attr('data-action')

        // iti.getNumber(intlTelInputUtils.numberFormat.E164)
        // iti.isValidNumber()
        console.log(iti.getNumber())
        console.log(iti.isValidNumber())


        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend:function() {
                $('#feedbackButton').attr('disabled', 'disabled');
                $('#feedbackButton').html('sending...');
            },
            success:function(data)
            {            
                $('#feedbackButton').attr('disabled', false);
                $('#feedbackButton').html('send message');
                $('#feedbackMail')[0].reset()
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Something went wrong.',
                    text: 'Please try again.',
                    footer: 'Error: ' + data.message,
                    showConfirmButton: false,
                    timer: 1800
                });
                console.log(data)
            },
            error: function(data) 
            {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Something went wrong.',
                    text: 'Please try again.',
                    footer: 'Error: ' + data.message,
                    showConfirmButton: false,
                    timer: 1800
                }.then(function() {
                    console.log(data)
                }));
                
                
            }
        });











        
        // $.ajax({
        //     url: "/index",
        //     type:"POST",
        //     data:{
        //         "_token": "{{ csrf_token() }}",
        //         name:fname,
        //         email:mail,
        //         mobile:mobile,
        //         message:msg,
        //     },
        //     success:function(response){
        //         console.log(response);
        //         if (response) {
        //             alert(response.success); 
        //             $("#feedbackMail")[0].reset(); 
        //         }
        //     },
        //     error: function(response) {
        //         // alert(response.responseJSON.errors.name);
        //         // alert(response.responseJSON.errors.email);
        //         // alert(response.responseJSON.errors.mobile);
        //         // alert(response.responseJSON.errors.message);
        //     }
        // });

        
        // let url = $(this).attr('action');

        // $.post(url, {
        //     '_token': $("#token").val(),
        //     name: $("#nameJS").val(),
        //     email: $("#emailJS").val(),
        //     phone: $("#phoneJS").val(),
        //     message: $("#messageJS").val()
        // }, function (response) {
        //     if(response.code == 400){
        //         $("#feedbackButton").attr('disabled', false);
        //         let error = '<span class="alert alert-danger">'+response.msg+'</span>';
        //         $("#res").html(error);
        //     }else if(response.code == 200){
        //         $("#feedbackButton").attr('disabled', false);
        //         let success = '<span class="alert alert-success">'+response.msg+'</span>';
        //         $("#res").html(success);
        //     }
        // });

        

        




        // if(!regEx_patterns.email.test(mail)) {
        //     $("#emailLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">email</i> Invalid email format.')
        //     $('#emailJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")
        // }

        // if(!fname || !msg || !mail) {
        //     if(fname == '') {
        //         validateName()
        //     } 
        //     if(mail == '') {
        //         validateEmail()
        //     }
        //     if(msg == '') {
        //         validateTextarea()
        //     }
        // } 
        // else if(!regEx_patterns.email.test(mail)) {
        //     $("#emailLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">email</i> Invalid email format.')
        //     $('#emailJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")
        //     validateEmail()
        // } 
        // else if(!regEx_patterns.phone.test(mobile)) {
        //     $("#phoneLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">phone_android</i>')
        //     $('#phoneJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")
        // } 
        // else {
            
        // }
        
    });
});

function validateName() {
    $("#nameLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">person</i> Required name.')
    $('#nameJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")

    $('#nameJS').keyup(function() {
        var fname = $('#nameJS').val()
        var x = fname.trim()
        var char = x.replace(/\s+/gi, '').length;
        // console.log(char)
        if(char > 0) {
            $("#nameLabel").removeClass("text-red-300 dark:text-red-300").addClass("text-white").html('<i class="material-icons min-w-fit min-h-fit mr-2">person</i> Your name.')
            $('#nameJS').removeClass("border-red-300 dark:border-red-300").addClass("border-white")
        } else {
            $("#nameLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">person</i> Required name.')
            $('#nameJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")
        }
    })
} 
function validateTextarea() {
    $("#messageLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">edit</i> Required message.')
    $('#messageJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")
    
    $('#messageJS').keyup(function() {
        var msg = $('#messageJS').val()
        var x = msg.trim()
        var char = x.replace(/\s+/gi, '').length;
        // console.log(char)
        if(char > 0) {
            $("#messageLabel").removeClass("text-red-300 dark:text-red-300").addClass("text-white").html('<i class="material-icons min-w-fit min-h-fit mr-2">edit</i> Message.')
            $('#messageJS').removeClass("border-red-300 dark:border-red-300").addClass("border-white")
        } else {
            $("#messageLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">edit</i> Required message.')
            $('#messageJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")
        }
    })
}
function validateEmail() {    
    $("#emailLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">email</i> Required email.')
    $('#emailJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")

    $('#emailJS').keyup(function() {
        var mail = $('#emailJS').val()
        var regEx = /^([a-z0-9\d_\.-]+)@([a-z0-9\d-]+)\.([a-z0-9]{2,8})(\.[a-z0-9]{2,8})?$/
        var x = mail.trim()
        var char = x.replace(/\s+/gi, '').length;
        if(char > 0) {
            $("#emailLabel").removeClass("text-red-300 dark:text-red-300").addClass("text-white").html('<i class="material-icons min-w-fit min-h-fit mr-2">email</i> Your email.')
            $('#emailJS').removeClass("border-red-300 dark:border-red-300").addClass("border-white")
        } 
        if(!regEx.test(mail)) {
            $("#emailLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">email</i> Invalid email format.')
            $('#emailJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")
        } 
        if(char == "") {
            $("#emailLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">email</i> Required email.')
            $('#emailJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")
        }
    })
} 
function validatePhone() {    
    $('#phoneJS').on("keyup", function() {
        var mobile = $('#phoneJS').val()
        var regEx = /^([\d\s\-\+\(\)]*)$/
        var x = mobile.trim()
        var char = x.replace(/\s+/gi, '').length
        
        if(char == "") {
            $("#phoneLabel").removeClass("text-red-300 dark:text-red-300").addClass("text-white").html('<i class="material-icons min-w-fit min-h-fit mr-2">phone_android</i>')
            $('#phoneJS').removeClass("border-red-300 dark:border-red-300").addClass("border-white")
        } 
        if(regEx.test(mobile)) {
            $("#phoneLabel").removeClass("text-red-300 dark:text-red-300").addClass("text-white").html('<i class="material-icons min-w-fit min-h-fit mr-2">phone_android</i>')
            $('#phoneJS').removeClass("border-red-300 dark:border-red-300").addClass("border-white")
        } else {
            $("#phoneLabel").removeClass("text-white").addClass("text-red-300 dark:text-red-300").html('<i class="material-icons min-w-fit min-h-fit mr-2">phone_android</i> Invalid phone number.')
            $('#phoneJS').removeClass("border-white").addClass("border-red-300 dark:border-red-300")
        }
    })
} 
const regEx_patterns = {
    email: /^([a-z0-9\d_\.-]+)@([a-z0-9\d-]+)\.([a-z0-9]{2,8})(\.[a-z0-9]{2,8})?$/,
    phone: /^([\d\s\-\+\(\)]*)$/,
    space: /\s+/gi
}
