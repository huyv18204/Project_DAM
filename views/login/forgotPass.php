
<div class="auth-wrapper">
    <div class="updateInfo-container">
        <div class="auth-action-left">
            <div class="auth-updateInfo">
                <h2 class="auth-title">
                    Quên mật khẩu
                </h2>
                <form class="login-form" method="post" action="index.php?act=forgot_pass">
                    <div class="inFor">
                        <div><lable>Tên Tài Khoản: </lable></div>
                        <div class="inFor_input"><input name="account" type="text" class="form-updateInfo" value="" placeholder=""></div>
                    </div>
                    <div class="inFor">
                        <div><lable>Email:</lable></div>
                        <div><input class="inFor_input" name="email" type="email" class="form-updateInfo" value="" placeholder=""></div>
                    </div>
                    <div class="notify inFor">
                        <?php if (isset($notify)) {
                            echo $notify;
                        }
                        ?></div>
                    <div class="footer-updateInfo">
                        <div></div>
                        <input type="hidden" name = "id_user" value="">
                        <input name="btn-submit" type="submit" value="Gửi" class="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>