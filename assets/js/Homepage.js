// Header Scroll
window.onscroll = function() {
    windowScroll()
    myFunction()

};
var navbar = document.getElementById("nav");
var stick = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= 33) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}

//function when scroll Top greater 20
var scrollButtonTop = document.getElementById("scrollTops");

function windowScroll() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollButtonTop.style.display = "block";
    } else {
        scrollButtonTop.style.display = "none";
    }
}



// function button click scroll to Top and button
function buttonScrollTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// Dropdown Toogle Navbar
$(document).ready(function() {
    $(".main-menu").click(function() {
        var num = $(this).find("#hiden").val();
        if (num == 1) {
            $(this).parent().find("#sub-menu").slideDown("fast");
            $(this).find(".icon-chevron").addClass("rotate");
            $(this).find("#hiden").val(2);
        } else {
            $(this).parent().find("#sub-menu").slideUp("fast");
            $(this).find(".icon-chevron").removeClass("rotate");
            $(this).find("#hiden").val(1);
        }
    });
});

//Responsive nav bar click outside  sub-menu

$(document).ready(function() {
    $(".nav-bar").on("click", ".icon-user-1", function() {
        $(this).parents().find(".navbar-box-2").hide("fast");
        $(this).parents().find(".navbar-box-1").slideToggle("fast");
    });
});

$(document).ready(function() {
    $(".nav-bar").on("click", ".icon-user-2", function() {
        $(this).parents().find(".navbar-box-1").hide("fast");
        $(this).parents().find(".navbar-box-2").slideToggle("fast");
    });
});

// menuToggle
$(document).ready(function() {
    $(".menuToggle").on("click", function() {
        var num_down = $(this).find("#id-chevron-down").val();
        if (num_down == 1) {
            $(this).find(".subToggle").slideDown("fast");
            $(this).find(".icon-chevron-down").addClass("rotate");
            $(this).find("#id-chevron-down").val(2);
        } else {
            $(this).find(".subToggle").slideUp("fast");
            $(this).find(".icon-chevron-down").removeClass("rotate");
            $(this).find("#id-chevron-down").val(1);
        }
    });
});

// js
var modal = document.getElementById("id01");

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});
// Modal Registr 2
var modal_resgister = document.getElementById("id02");

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(events) {
    if (events.target == modal_resgister) {
        modal_resgister.style.display = "none";
    }
});

// Window Email forgetPassword
var modal_forgotPassword = document.getElementById("id05");

window.addEventListener("click", function(event1) {
    if (event1.target == modal_forgotPassword) {
        modal_forgotPassword.style.display = "none";
    }
});

// click to login
function backtologin() {
    document.getElementById("id01").style.display = "block";
    document.getElementById("id02").style.display = "none";
}

// Modal Email look like theses
var modal_email = document.getElementById("id03");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event_s) {
    if (event_s.target == modal_email) {
        modal.style.display = "none";
    }
};


// 
function forgetPassword() {
    document.getElementById("id05").style.display = "block";
    document.getElementById('id01').style.display = 'none'
}

// Modal logo

function modalLogo() {
    document.getElementById("id06").style.display = "block"
}

var modallogo = document.getElementById("id06");