<?php
include '../model/admin/sanpham.php';
include '../model/admin/danhmuc.php';
include '../model/model.php';
include 'views/header.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
//        ---------------------sp--------
        case 'list-sp':
            $listsp = select_all_sanpham();
            include 'views/sanpham/listsanpham.php';
            break;
        case 'add-sp' :
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_category = $_POST['category'];
                $name_product = $_POST['name-product'];
                $price = $_POST['price'];
                $decription = $_POST['decription'];
                $img = $_FILES['img']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    $image = $_FILES["img"]["name"];
                } else {
//                    echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($name_product, $price, $image, $id_category, $decription);
                setcookie("thong_bao", "Thêm thành công.", time() + 2);
                header('location:index.php?act=list-sp');
            }

            $listdm = select_all_danhmuc();
            include 'views/sanpham/addsanpham.php';
            break;
        case 'edit-sp' :
            if (isset($_GET['id'])) {
                $listsp = select_one_sanpham($_GET['id']);
            }
            $listdm = select_all_danhmuc();
            include 'views/sanpham/editsanpham.php';
            break;
        case 'update-sp':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo 'aa';
                if (empty($_POST['name-product']) || empty($_POST['price'])) {

                } else {
                    $id_category = $_POST['category'];
                    $name_product = $_POST['name-product'];
                    $price = $_POST['price'];
                    $decription = $_POST['decription'];
                    $id = $_POST['id'];
                    $img = $_FILES['img']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        $image = $_FILES["img"]["name"];
                    } else {
//                    echo "Sorry, there was an error uploading your file.";
                    }

                    update_sanpham($name_product,$price,$image,$id_category,$decription,$id);
                    setcookie("thong_bao", "Update thành công.", time() + 2);
                    header('location:index.php?act=list-sp');
                }
            }
            $listdm = select_all_danhmuc();
            break;
        case 'del-sp':
            if (isset($_GET['id'])) {
                del_sanpham($_GET['id']);
                setcookie("thong_bao", "Xoá thành công.", time() + 2);
            }
            header("location:index.php?act=list-sp");
            break;


//            ----------------danhmục-----------
        case 'list-dm':
            $listdm = select_all_danhmuc();
            include 'views/danhmuc/listdanhmuc.php';
            break;
        case 'add-dm' :
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (empty($_POST['name-category'])) {
                } else {
                    $name_category = $_POST['name-category'];
                    insert_danhmuc($name_category);
                    setcookie("thong_bao", "Thêm thành công.", time() + 2);
                    header('location:index.php?act=list-dm');
                }
            }
            include 'views/danhmuc/adddanhmuc.php';
            break;
        case 'edit-dm' :
            if (isset($_GET['id'])) {
                $listdm = select_one_danhmuc($_GET['id']);
            }

            include 'views/danhmuc/editdanhmuc.php';
            break;
        case 'update-dm':
            if (isset($_POST['btn-edit'])) {
                if (empty($_POST['name-category'])) {

                } else {
                    $name_category = $_POST['name-category'];
                    $id = $_POST['id'];
                    setcookie("thong_bao", "Cập nhật thành công.", time() + 2);
                    update_danhmuc($name_category, $id);
                }
                header('location:index.php?act=list-dm');
            }
            break;
        case 'del-dm':
            if (isset($_GET['id'])) {
                del_danhmuc($_GET['id']);
                setcookie("thong_bao", "Xoá thành công.", time() + 2);
            }
            header("location:index.php?act=list-dm");
            break;

//        ---------------------kh--------
        case 'list-kh':
            include 'views/khachhang/listkhachhang.php';
            break;
        case 'add-kh' :
            include 'views/khachhang/addkhachhang.php';
            break;
        case 'edit-kh' :
            include 'views/khachhang/editkhachhang.php';
            break;
        case 'bieu-do':
            include 'views/thongke/bieudo.php';
            break;
        case 'thong-ke' :
            include 'views/thongke/thongke.php';
            break;
        case 'list-bl' :
            include 'views/binhluan/listbinhluan.php';
            break;
        case 'chi-tiet-bl' :
            include 'views/binhluan/chitietbinhluan.php';
            break;
    }
} else {
    include 'views/sanpham/listsanpham.php';
}
include 'views/footer.php';
?>