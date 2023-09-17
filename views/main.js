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


// document.addEventListener("DOMContentLoaded", function () {
//     const commentForm = document.getElementById("comment-form");
//     const commentSection = document.getElementById("comment-section");

//     commentForm.addEventListener("submit", function (event) {
//         event.preventDefault();

//         // Lấy dữ liệu từ form
//         const name = document.getElementById("name").value;
//         const commentText = document.getElementById("comment").value;
//         const currentDate = new Date().toLocaleDateString();

//         // Tạo phần tử bình luận mới
//         const commentElement = document.createElement("div");
//         commentElement.innerHTML = `<strong>${name}</strong> (${currentDate}): ${commentText}`;

//         // Thêm phần tử bình luận vào phần bình luận
//         commentSection.appendChild(commentElement);

//         // Xóa nội dung trong ô nhập bình luận sau khi gửi
//         document.getElementById("name").value = "";
//         document.getElementById("comment").value = "";
//     });
// });