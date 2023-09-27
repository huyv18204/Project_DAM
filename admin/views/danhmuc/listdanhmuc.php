<body>
<div class="container-admin">
    <?php
    require_once 'views/sidebar.php';
    ?>
    <div class="col-2-admin">
        <div class="commodities-title">
            <h4>Quản lí danh mục<h4>
        </div>
        <div class="commodities-container">
            <div class="function-commodities">
                <button class="add-commodities" type="submit"><a href="index.php?act=add-dm">Tạo danh mục mới</a>
                </button>
                <button class="select-all-commodities" type="submit"><a href="">Chọn tất cả</a></button>
                <button class="unchecker-commodities" type="submit"><a href="">Bỏ chọn tất cả</a></button>
                <button class="delete-all-commodities" type="submit"><a href="">Xoá tất cả</a></button>
            </div>

            <div class="line-commodities"></div>


            <div class="table-commodities">
            <span style="color: #7AC142;" class="cookie-notify"><?php if (isset($_COOKIE["thong_bao"])) {
                    $thong_bao = $_COOKIE["thong_bao"];
                    echo "<p>$thong_bao</p>";
                }
                ?></span>
                <table class="commodities">
                    <thead>
                    <tr>
                        <th width="10"><input type="checkbox"></th>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Chức năng</th>
                    </tr>
                    </thead>
                    <tbody class="product-list">
                    <?php foreach ($listdm as $value) {
                        extract($value);
                        $path_edit = 'index.php?act=edit-dm&id=' . $id_danhmuc;
                        $path_del = 'index.php?act=del-dm&id=' . $id_danhmuc;
                        echo '
                            <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td>' . $id_danhmuc . '</td>
                        <td>' . $ten_danhmuc . '</td>
                        <td>
     
                       <button class="delete">
                                <a href="' . $path_del . '"><i class="fas fa-trash-alt"></i></a>
                       </button>
                       <button class="edit">
                                <a href="' . $path_edit . '"><i class="fas fa-edit"></i></a>
                       </button>
                        </td>
                    </tr>
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