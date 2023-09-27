<body>
<div class="container-admin">
    <?php
    require_once 'views/sidebar.php';
    ?>
    <div class="col-2-admin">
        <div class="commodities-title">
            <h4>Quản lí khách hàng<h4>
        </div>
        <div class="commodities-container">
            <div class="function-commodities">
                <button class="add-commodities" type="submit"><a href="index.php?act=add-kh">Tạo khách hàng mới</a>
                </button>
                <button class="select-all-commodities" type="submit"><a href="">Chọn tất cả</a></button>
                <button class="unchecker-commodities" type="submit"><a href="">Bỏ chọn tất cả</a></button>
                <button class="delete-all-commodities" type="submit"><a href="">Xoá tất cả</a></button>
            </div>
            <div class="line-commodities"></div>
            <div class="table-commodities">
                <table class="commodities">
                    <thead>
                    <tr>
                        <th width="10"><input type="checkbox"></th>
                        <th>Mã khách hàng</th>
                        <th>Họ và tên</th>
                        <th>Hình ảnh</th>
                        <th>Email</th>
                        <th>Vai trò</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                    </thead>
                    <tbody class="product-list">
                    <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td>71309005</td>
                        <td>Vũ Quốc Huy</td>
                        <td><img src="image/Macbook.jpeg" alt="" width="60px"></td>
                        <td>vqh8124@gmail.com</td>
                        <td>Quản trị viên</td>
                        <td>Đã kích hoạt</td>
                        <td>
                            <button class="delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="edit">
                                <a href="index.php?act=edit-kh"> <i class="fas fa-edit"></i></a>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div id="pagination"></div>
            </div>
        </div>
    </div>
</div>
</body>