<body>
<div class="container-admin">
    <?php
    require_once 'views/sidebar.php';
    ?>
    <div class="col-2-admin">
        <div class="commodities-title">
            <h4>Quản lí hàng hoá<h4>
        </div>
        <div class="commodities-container">
            <div class="function-commodities">
                <button class="add-commodities" type="submit"><a href="index.php?act=add-sp">Tạo sản phẩm mới</a>
                </button>
                <button class="select-all-commodities" type="submit"><a href="">Chọn tất cả</a></button>
                <button class="unchecker-commodities" type="submit"><a href="">Bỏ chọn tất cả</a></button>
                <button class="delete-all-commodities" type="submit"><a href="">Xoá tất cả</a></button>
            </div>
            <div class="line-commodities"></div>
            <div class="table-commodities">
                            <span style="color: #7AC142;"
                                  class="cookie-notify"><?php if (isset($_COOKIE["thong_bao"])) {
                                    $thong_bao = $_COOKIE["thong_bao"];
                                    echo "<p>$thong_bao</p>";
                                }
                                ?></span>
                <table class="commodities">
                    <thead>
                    <tr>
                        <th width="10"><input type="checkbox"></th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Số lượng</th>
                        <th>Tình trạng</th>
                        <th>Giá tiền</th>
                        <th>Danh mục</th>
                        <th>Chức năng</th>
                    </tr>
                    </thead>
                    <tbody class="product-list">
                    <?php
                    foreach ($listsp as $value) {
                        extract($value);
                        $path_edit = 'index.php?act=edit-sp&id=' . $id_sanpham;
                        $path_del = 'index.php?act=del-sp&id=' . $id_sanpham;
                        echo '
                    <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td>' . $id_sanpham . '</td>
                        <td>' . $ten_sanpham . '</td>
                        <td><img width="70px" src="../uploads/' . $anh_sanpham . '" alt=""></td>
                        <td>40</td>
                          <td><span class="status">Còn hàng</span></td>
                        <td>' . $gia . ' đ</td>
                        <td>' . $ten_danhmuc . '</td>
                        <td>
                       <button class="delete">
                                <a href="' . $path_del . '"><i class="fas fa-trash-alt"></i></a>
                       </button>
                       <button class="edit">
                                <a href="' . $path_edit . '"><i class="fas fa-edit"></i></a>
                       </button>

                        </td>
                    ';
                    } ?>

                    </tbody>
                </table>
                <div id="pagination"></div>
            </div>
        </div>
    </div>
</div>
</body>