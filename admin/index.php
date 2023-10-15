<?php
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
include '../model/admin/sanpham.php';
include '../model/admin/danhmuc.php';
include '../model/admin/khachhang.php';
include '../model/admin/statistical.php';
include '../model/comment.php';
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
                    $notify = "Không thể upload file";
                }
                if(empty($name_product) || empty($price) || empty($id_category)){
                    $notify = "Không được để trống thông tin";
                }else{
                    insert_sanpham($name_product, $price, $image, $id_category, $decription);
                    $notify = "Không được để trống thông tin";
                    header('location:index.php?act=list-sp');
                }
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

                    update_sanpham($name_product, $price, $image, $id_category, $decription, $id);
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
                    $notify = "Không được bỏ trống tên danh mục";
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
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (empty($_POST['name-category'])) {
                    $notify = "Không được bỏ trống tên danh mục";
                    header('location:index.php?act=edit-dm');
                } else {
                    $name_category = $_POST['name-category'];
                    $id = $_POST['id'];
                    setcookie("thong_bao", "Cập nhật thành công.", time() + 2);
                    update_danhmuc($name_category, $id);
                    header('location:index.php?act=list-dm');
                }
            }else{
                echo "nhucc";
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
            $listkh = select_all_user();
            include 'views/khachhang/listkhachhang.php';
            break;
        case 'add-kh':
            if (isset($_POST['btn-add'])) {
                $name = $_POST['name'];
                $account = $_POST['account'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                if ($_POST['role'] == 1) {
                    $role = 1;
                } else {
                    $role = 0;
                }
                if (empty($email) || empty($account) || empty($pass)) {
                    setcookie("thong_bao", "Vui lòng điền thông tin.", time() + 2);
                } else {
                    insert_user($name, $account, $pass, $email, $phone, $address, $role);
                    setcookie("thong_bao", "Thêm khách hành thành công.", time() + 2);
                    header('location:index.php?act=list-kh');
                }

            }
            include 'views/khachhang/addkhachhang.php';
            break;
        case 'edit-kh' :
            if (isset($_GET['id'])) {
                $list_user = select_one_user($_GET['id']);
            }
            include 'views/khachhang/editkhachhang.php';
            break;
        case 'update-kh':
            if (isset($_POST['btn-edit'])) {
                $name = $_POST['name'];
                $account = $_POST['account'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                if ($_POST['role'] == 1) {
                    $role = 1;
                } else {
                    $role = 0;
                }
                $id = $_POST['id'];
                setcookie("thong_bao", "Cập nhật thành công.", time() + 2);
                update_kh($name, $account, $pass, $email, $phone, $address, $role, $id);
                header('location:index.php?act=list-kh');
            }
            break;
        case 'del-kh':
            if (isset($_GET['id'])) {
                del_user($_GET['id']);
                setcookie("thong_bao", "Xoá thành công.", time() + 2);
            }
            header("location:index.php?act=list-kh");
            break;
        case 'bieu-do':
            $list_statistical = select_statistical();
            include 'views/thongke/bieudo.php';
            break;
        case 'thong-ke' :
            $list_statistical = select_statistical();
            include 'views/thongke/thongke.php';
            break;
        case 'list-bl' :
            $list_comment = select_all_comment();
            include 'views/binhluan/listbinhluan.php';
            break;

        case 'del-comment':
            if (isset($_GET['id'])) {
                del_comment($_GET['id']);
                setcookie("thong_bao", "Xoá thành công.", time() + 2);
            }
            header("location:index.php?act=list-bl");
            break;
        case 'logout':
            if (isset($_SESSION['account'])) {
                unset($_SESSION['account']);
            }
            header("Location: $_SERVER[REQUEST_URI]");
            header("location:../index.php?act=home");
            break;
    }
} else {
    include 'views/sanpham/listsanpham.php';
}
include 'views/footer.php';
?>