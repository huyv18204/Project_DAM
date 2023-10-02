<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="fonts/fontawesome-free-6.4.0-web/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
          crossorigin="anonymous" />
</head>
<body>
<div class="container">
    <header>
        <div class="top-bar">
            <div class="top-bar-left">
                <div class="address">
                    <h1><b>JIN Store: Uy tín trong từng sản phẩm |</b></h1>
                </div>
                <div class="hotline">
                    <span>Hotline:</span>
                    <i class="fa-solid fa-phone fa-xs" style="color: #ffffff;"></i>
                    <span>0936 096 900</span>
                </div>
            </div>
            <div class="top-bar-right">
                <div class="info">
                    <ul>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="">Liên Hệ</a></li>
                    </ul>
                </div>
                <div id="menu" class="user-info">
                    <ul>
                        <li><a id="showButton" href="#"> <i class="fa-solid fa-user fa-lg" style="color: #ffffff;"></i></a>
                            <ul id="categoryList" style="display: none;">
                                <?php if (!isset($_SESSION['account'])) {?>
                                    <li><a  id="loginBtn" href="index.php?act=login">Đăng Nhập</a></li>
                                    <li><a  id="registerBtn" href="index.php?act=register">Đăng Kí</a></li>
                                <?php } else { ?>
                                    <li><a href="index.php?act=update_information">Thông Tin Tài Khoản</a></li>
                                    <?php if($_SESSION['account']['role'] == 1){
                                        echo '<li><a href="admin/index.php?act=list-sp">Quản Lí Trang Web</a></li>';
                                    }?>
                                    <li><a href="index.php?act=forgot_pass">Quên Mật Khẩu</a></li>
                                    <li>
                                        <form action="index.php?act=home" method="post">
                                            <a name="btn-logout" href="index.php?act=logout">Đăng Xuất</a>
                                        </form>
                                    </li>
                                <?php  } ?>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <nav class="header-home-page">
            <div class="container-header">
                <div class="logo">
                    <a href="index.php?act=home">
                        <img src="image/JIn Store 1.png" alt="">
                    </a>
                </div>
                <div class="menu-nav">
                    <ul>
                        <li><a class="hover-nav" href="index.php?act=category&id=1">MACBOOK AIR</a>
                            <ul class="macbook-nav">
                                <li><a href="#">Macbook Air M1</a></li>
                                <li><a href="#">Macbook Air M2</a></li>
                            </ul>
                        </li>
                        <li><a class="hover-nav" href="index.php?act=category&id=2">MACBOOK PRO</a>
                            <ul class="diffirent-nav">
                                <li><a href="#">Macbook Pro M1</a></li>
                                <li><a href="#">Macbook Pro M2</a></li>
                            </ul>
                        </li>
                        <li><a class="hover-nav" href="index.php?act=category&id=3">IMAC</a>
                            <ul class="imac-nav">
                                <li><a href="#">iMac M1</a></li>
                                <li><a href="#">Mac mini</a></li>
                                <li><a href="#">Mac Studio</a></li>
                            </ul>
                        </li>
                        <li><a class="hover-nav" href="index.php?act=category&id=4">IPHONE</a>
                            <ul class="iphone-nav">
                                <li><a href="#">iPhone 14 Series</a></li>
                                <li><a href="#">iPhone 13 Series</a></li>
                                <li><a href="#">iPhone 12 Series</a></li>
                                <li><a href="#">iPhone 11 Series</a></li>
                            </ul>
                        </li>
                        <li><a class="hover-nav" href="index.php?act=category&id=5">IPAD</a>
                            <ul class="ipad-nav">
                                <li><a href="#">iPad Air</a></li>
                                <li><a href="#">iPad Pro</a></li>
                                <li><a href="#">iPad Mini</a></li>
                            </ul>
                        </li>
                        <li><a class="hover-nav" href="index.php?act=category&id=9">APPLE WATCH</a>
                            <ul class="watch-nav">
                                <li><a href="#">Apple Watch Ultra</a></li>
                                <li><a href="#">Apple Watch Series 8</a></li>
                                <li><a href="#">Apple Watch SE</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="search-form">
                    <form action="index.php?act=result_search" method="post">
                        <input name="search_sp" class="input-search" placeholder="    Tìm kiếm sản phẩm ..."
                               type="text">

                        <button name="btn-search" class="btn-search" type="submit">
                            <a href="index.php?act=result_search"><i class="fa-solid fa-magnifying-glass"
                                                                     style="color: #ffffff;"></i></a>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
