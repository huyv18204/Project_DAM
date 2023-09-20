
$(document).ready(function () {
    $('.row-product').slick(
        {
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false
        }
    );

});

$(document).ready(function () {
    $('.banner').slick(
        {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false
        }
    );

});



// ------------deltail----------

$('.img-deltail-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.img-deltail-nav'
});
$('.img-deltail-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.img-deltail-for',
    // dots: true,
    // centerMode: true,
    focusOnSelect: true,
    arrows: false
});

