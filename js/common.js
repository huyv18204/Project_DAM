
var showButton = document.getElementById("showButton");
var categoryList = document.getElementById("categoryList");

// Thêm sự kiện click cho button
showButton.addEventListener("click", function () {
    // Kiểm tra trạng thái hiển thị của danh sách
    if (categoryList.style.display === "none" || categoryList.style.display === "") {
        // Nếu ẩn, hiển thị danh sách
        categoryList.style.display = "block";
    } else {
        // Nếu đang hiển thị, ẩn danh sách
        categoryList.style.display = "none";
    }
});

// window.addEventListener("load", function () {
//     const loginForm = document.querySelector(".login-form");
//     const showPasswordIcon =
//         loginForm && loginForm.querySelector(".show-password");
//     const inputPassword =
//         loginForm && loginForm.querySelector('input[type="password"');
//     showPasswordIcon.addEventListener("click", function () {
//         const inputPasswordType = inputPassword.getAttribute("type");
//         inputPasswordType === "password"
//             ? inputPassword.setAttribute("type", "text")
//             : inputPassword.setAttribute("type", "password");
//     });
// });

// Lấy tham chiếu đến button và danh sách