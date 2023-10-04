
<div class="auth-wrapper">
    <div class="updateInfo-container">
        <div class="auth-action-left">
            <div class="auth-updateInfo">
                <h2 class="auth-title">
                    Đổi mật khẩu
                </h2>
                <?php if(isset($_SESSION['account']) && is_array($_SESSION['account'])){
                    extract($_SESSION['account']);
                } ?>
                <form class="login-form" method="post" action="index.php?act=change_pass">
                    <div class="inFor">
                        <div><lable>Tên Tài Khoản: </lable></div>
                        <div class="inFor_input"><input name="account" type="text" class="form-updateInfo" value="<?=$account?>" placeholder=""></div>
                    </div>
                    <div class="inFor">
                        <div><lable>Nhập mật khẩu: </lable></div>
                        <div class="inFor_input"><input name="pass" type="text" class="form-updateInfo" value="" placeholder=""></div>
                    </div>
                    <div class="inFor">
                        <div><lable>Nhập mật khẩu mới</lable></div>
                        <div><input class="inFor_input" name="new_pass" type="text" class="form-updateInfo" value="" placeholder=""></div>
                    </div>
                    <div class="notify inFor">
                        <?php if (isset($notify)) {
                            echo $notify;
                        }
                        ?></div>
                    <div class="footer-updateInfo">
                        <div></div>
                        <input type="hidden" name = "id_user" value="">
                        <input name="btn-submit" type="submit" value="Đổi mật khẩu" class="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>