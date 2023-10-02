<?php
ob_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();
require_once 'model/users/login.php';
require_once 'model/model.php';
require_once 'model/users/homepage.php';
require_once 'views/header.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'deltail':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $list_sp = select_one_sanpham($id);
                extract($list_sp);
                $list_samekind = select_sp_samekind($id, $id_danhmuc);
                $decription = select_decription($id);
            }
            require_once 'views/deltail.php';
            break;
        case 'result_search':
            if (isset($_POST['btn-search'])) {
                $search_sp = $_POST['search_sp'];
                $list_sp = search_sp($search_sp);
            }
            $list_dm = select_all_danhmuc();
            require_once 'views/resultsearch.php';
            break;
        case 'category':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $list_sp = select_sp_by_dm($id);
            }
            $list_dm = select_all_danhmuc();
            require_once 'views/category.php';
            break;
        case 'home':
            $list_sp = select_all_sp();
            $sp_macbook_air = select_macbookair_sp();
            $sp_macbook_pro = select_macbookpro_sp();
            $sp_imac = select_imac_sp();
            require_once 'views/home.php';
            break;
        case 'register':
            if (isset($_POST['btn-register'])) {
                $account = $_POST['account'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                if (empty($account) || empty($email) || empty($pass) || empty($repass)) {
                    $notify = "Vui lòng điền thông tin";
                } else {
                    if ($pass == $repass) {
                        insert_account($account, $pass, $email);
                        $notify = "Đăng kí thành công";
                        header("location:index.php?act=login");
                    } else {
                        $notify = "Mật khẩu không khớp";
                    }
                }
            }
            require_once 'views/login/register.php';
            break;
        case 'login':

            if (isset($_POST['btn-login'])) {
                $account = $_POST['account'];
                $pass = $_POST['password'];
                if (!empty($account) && !empty($pass)) {
                    $login = select_account($account, $pass);
                    if (is_array($login)) {
                        $_SESSION['account'] = $login;
//                        header("Location: $_SERVER[REQUEST_URI]");
                        header("location:index.php?act=home");
                        exit;

                    } else {
                        $notify = "Tài khoản không tồn tại";
                    }
                }
            }
            require_once 'views/login/login.php';
            break;
        case 'logout':
            if (isset($_SESSION['account'])) {
                unset($_SESSION['account']);
            }
            header("Location: $_SERVER[REQUEST_URI]");
            header("location:index.php?act=home");
            break;
        case 'update_information':
            if (isset($_POST['btn-updateInfo'])) {
                $id_user = $_POST['id_user'];
                $account = $_POST['account'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                update_user($id_user, $pass, $name, $email, $phone, $address);
                $_SESSION['account'] = select_account($account, $pass);
                $notify = "Cập nhật thành công";

            }
            require_once 'views/login/updateInformation.php';
            break;
        case 'forgot_pass':
            if (isset($_POST['btn-submit'])) {
                $account = $_POST['account'];
                $email = $_POST['email'];
                $check_Infor = check_inFor($account, $email);
                if (is_array($check_Infor)) {
                    $notify = "Mật khẩu của bạn là: " . $check_Infor['pass'];
                } else {
                    $notify = "Thông tin không chính xác";
                }
            }
            require_once 'views/login/forgotPass.php';
            break;
    }
} else {
    $list_sp = select_all_sp();
    $sp_macbook_air = select_macbookair_sp();
    $sp_macbook_pro = select_macbookpro_sp();
    $sp_imac = select_imac_sp();
    include 'views/home.php';
}

require_once 'views/footer.php';

?>