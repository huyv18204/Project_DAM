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
                <form class="login-form" method="post" action="">
                    <input name="account" type="text" class="auth-form-input" placeholder="Tên tài khoản">
                    <input name="email" type="email" class="auth-form-input" placeholder="Email">
                    <div class="input-icon">
                        <input name="pass" type="password" class="auth-form-input" placeholder="Mật khẩu">
                        <i class="fa fa-eye show-password"></i>
                    </div>
                    <input name="repass" type="password" class="auth-form-input" placeholder="Nhập lại mật khẩu">
                    <div class="notify">
                        <?php if (isset($notify)) {
                            echo $notify;
                        }
                        ?></div>
                    <div class="footer-action">
                        <input name="btn-register" type="submit" value="Đăng kí" class="auth-submit">
                        <a href="index.php?act=login" class="auth-btn-direct">Đăng nhập</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
