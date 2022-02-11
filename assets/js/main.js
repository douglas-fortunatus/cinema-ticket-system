/*==scroll-progress-bar======================*/
let scrollPrecentage = () =>{
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round(pos * 100 / calcHeight);
    scrollProgress.style.background = `conic-gradient(#e70634 ${scrollValue}%, #2b2f38 ${scrollValue}%)`;
}

window.onscroll = scrollPrecentage;
window.onload = scrollPrecentage;


var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});


/*--menu-btn-fixed-when-scroll============*/
$(window).scroll(function(){
    if($(document).scrollTop() > 20){
        $('.navigation').addClass('fix-icon');
    }
    else{
        $('.navigation').removeClass('fix-icon');
    }
});

/*==popup-open==================================*/
$(document).on('click','.play-btn a',function(){
    $('.play').addClass('active-popup');
});

/*==popup-Close==================================*/
$(document).on('click','.close-movie',function(){
    $('.play').removeClass('active-popup');
});

/*==auto-play-when-popup-open===================*/
$('.play-btn a').click(function(){
    $('#m-video')[0].play();
});

/*==Close-video-when-popup-close==============*/
$('.close-movie').click(function(){
    $('#m-video')[0].pause();
});

// Click function for show the Modal

$(".show").on("click", function(){
    $(".mask").addClass("active");
});

// Function for close the Modal
function closeModal(){
    $(".mask").removeClass("active");
}

// Call the closeModal function on the clicks/keyboard

$(".close, .mask").on("click", function(){
    closeModal();
});

$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        closeModal();
    }
});


