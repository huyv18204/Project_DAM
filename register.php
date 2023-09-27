<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
</head>

<body>
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Đăng kí
                    </h2>
                    <div class="auth-external-container">
                        <div class="auth-external-list">
                            <ul>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <p class="auth-sgt">hoặc:</p>
                    </div>
                    <form class="login-form">
                        <input type="text" class="auth-form-input" placeholder="Họ và tên">
                        <input type="email" class="auth-form-input" placeholder="Email">
                        <div class="input-icon">
                            <input type="password" class="auth-form-input" placeholder="Mật khẩu">
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        <input type="password" class="auth-form-input" placeholder="Nhập lại mật khẩu">
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                            <span> Tôi đồng ý với <a href="#">Điều khoản</a> và <a href="#">Chính sách</a> quyền riêng
                                tư.</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="Đăng kí" class="auth-submit">
                            <a href="login.html" class="auth-btn-direct">Đăng nhập</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image">
                    <img src="image/vector.jpg" alt="login">
                </div>
            </div>
        </div>
    </div>
    <script src="js/common.js"></script>
</body>

</html>