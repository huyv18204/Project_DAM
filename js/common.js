
var showButton = document.getElementById("showButton");
var categoryList = document.getElementById("categoryList");

showButton.addEventListener("click", function () {
    if (categoryList.style.display === "none" || categoryList.style.display === "") {
        categoryList.style.display = "block";
    } else {
        categoryList.style.display = "none";
    }
});
