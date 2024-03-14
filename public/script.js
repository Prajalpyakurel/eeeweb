//hero section text changing animation
const firstSpans = document.querySelectorAll(".hero-left-info-first span");
const secondSpans = document.querySelectorAll(".hero-left-info-second span");

function toggleVisibility(spans, index) {
    spans.forEach((span, i) => {
        if (i === index) {
            span.style.visibility = "visible";
            span.style.animation = "fadeInOut 2s ease-in-out infinite";
        } else {
            span.style.visibility = "hidden";
            span.style.animation = "none";
        }
    });
}

//button hover effect
let currentIndex = 0;

function changeSpans() {
    toggleVisibility(firstSpans, currentIndex);
    toggleVisibility(secondSpans, currentIndex);
    currentIndex = (currentIndex + 1) % firstSpans.length;
    setTimeout(changeSpans, 2000);
}

changeSpans();

$(window).ready(function () {
    $(".boton").wrapInner("<div class=botontext></div>");

    $(".botontext").clone().appendTo($(".boton"));

    $(".boton").append(
        '<span class="twist"></span><span class="twist"></span><span class="twist"></span><span class="twist"></span>'
    );

    $(".twist").css("width", "25%").css("width", "+=3px");
});

//what we do slider
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    centeredSlides: true,
    loop: true,
    spaceBetween: 30,
    pagination: {
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//Counter animation
$(document).ready(function () {
    $(".count").counterUp({
        delay: 10,
        time: 1000,
    });
});

//testimonial section
// nav slider
$(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    asNavFor: ".slider-nav",
});
$(".slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: true,
    arrows: false,
    fade: true,
    focusOnSelect: true,
});

$("a[data-slide]").click(function (e) {
    e.preventDefault();
    var slideno = $(this).data("slide");
    $(".slider-nav").slick("slickGoTo", slideno - 1);
});

$("a[data-slide]").click(function (e) {
    e.preventDefault();
    var slideno = $(this).data("slide");
    $(".slider-nav").slick("slickGoTo", slideno - 1);
});

//number with target counter
const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerText = "0";
  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;
    const increment = target / 200;
    if (count < target) {
      counter.innerText = `${Math.ceil(count + increment)}`;
      setTimeout(updateCounter, 1);
    } else counter.innerText = target;
  };
  updateCounter();
});


