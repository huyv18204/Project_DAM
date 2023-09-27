<body>
<div class="container-admin">
    <?php
    require_once 'views/sidebar.php';
    ?>
        <div class="col-2-admin">
            <div class="commodities-title">
                <h4>Thêm khách hàng<h4>
            </div>
            <div class="notification"></div>
            <div class="table-commodities">
                <table class="commodities">
                <tbody class="product-list">
                        <tr>
                            <td>Mã khách hàng</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Tên khách hàng</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Mật khẩu</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Hình ảnh</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Vai trò</td>

                            <td>
                                <div class="radio">
                                    <label for="">Khách hàng</label>
                                    <input name="vai_tro" type="radio" value="Khách hàng">
                                    <label for="">Nhân viên</label>
                                    <input name="vai_tro" type="radio" value="Nhân viên">
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td>Kích hoạt</td>

                            <td>
                                <div class="radio"><label for="">Đã kích hoạt</label>
                                    <input name="kich_hoat" type="radio" value="Đã kích hoạt">
                                    <label for="">Chưa kích hoạt</label>
                                    <input name="kich_hoat" type="radio" value="Chưa kích hoạt">
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>
                <div class="add">
                    <button class="btn-list" type="submit"><a href="index.php?act=list-kh">Danh sách khách hàng</a></button>
                    <button class="btn-add" type="submit"><a href="">Thêm</a></button>

                </div>
            </div>


        </div>
    </div>
    </div>
</body>