<div class="auth-wrapper">
    <div class="updateInfo-container">
        <div class="auth-action-left">
            <div class="auth-updateInfo">
                <h2 class="auth-title">
                    Hồ sơ của tôi
                </h2>
                <?php if(isset($_SESSION['account']) && is_array($_SESSION['account'])){
                    extract($_SESSION['account']);
                } ?>
                <form class="login-form" method="post" action="">
                    <div class="inFor">
                        <div><lable>Tên Tài Khoản: </lable></div>
                        <div class="inFor_input"><input name="account" type="text" class="form-updateInfo" value="<?=$account?>" placeholder=""></div>
                    </div>
                    <div class="inFor">
                        <div><lable>Họ Và Tên:</lable></div>
                        <div><input class="inFor_input" name="name" type="text" class="form-updateInfo" value="<?=$name?>" placeholder=""></div>
                    </div>
                    <div class="inFor">
                        <div><lable>Email:</lable></div>
                        <div><input class="inFor_input" name="email" type="email" class="form-updateInfo" value="<?=$email?>" placeholder=""></div>
                    </div>
                    <div class="inFor">
                        <div><lable>Số Điện Thoại:</lable></div>
                        <div><input class="inFor_input" name="phone" type="text" class="form-updateInfo" value="<?=$phone?>" placeholder=""></div>
                    </div>
                    <div class="inFor">
                        <div><lable>Mậu Khẩu:</lable></div>
                        <div><input class="inFor_input" name="pass" type="password" class="form-updateInfo" value="<?=$pass?>" placeholder=""></div>
                    </div>
                    <div class="inFor">
                        <div><lable>Địa Chỉ:</lable></div>
                        <div><input class="inFor_input" name="address" type="text" class="form-updateInfo" value="<?=$address?>" placeholder=""></div>
                    </div>
                    <div class="notify inFor">
                        <?php if (isset($notify)) {
                            echo $notify;
                        }
                        ?></div>
                    <div class="footer-updateInfo">
                        <div></div>
                        <input type="hidden" name = "id_user" value="<?=$id_user?>">
                        <input name="btn-updateInfo" type="submit" value="Cập Nhật" class="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>