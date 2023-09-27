<body>
<div class="container-admin">
    <?php
    require_once 'views/sidebar.php';
    ?>
    <div class="col-2-admin">
        <div class="commodities-title">
            <h4>Sửa hàng hoá<h4>
        </div>
        <div class="notification"></div>
        <div class="table-commodities">
            <form action="index.php?act=update-sp" method="post" enctype="multipart/form-data">
                <table class="commodities">
                    <tbody class="product-list">
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td><input value="<?php echo $listsp['ten_sanpham'] ?>" name="name-product" type="text"></td>
                    </tr>
                    <tr>
                        <td>Ảnh</td>
                        <td>
                            <img src="../uploads/<?php echo $listsp['anh_sanpham'] ?>" alt="" width="60px">
                            <input type="file" name="img">
                        </td>
                    </tr>
                    <tr>
                        <td>Giá tiền</td>
                        <td><input value="<?php echo $listsp['gia'] ?>" name="price" type="number"></td>
                    </tr>
                    <tr>
                        <td>Danh mục</td>
                        <td><select style="width: 100%" name="category" id="">
                                <option value="0"> Chọn danh mục</option>
                                <?php
                                foreach ($listdm as $value) {
                                    extract($value);
                                    if ($value['id_danhmuc'] == $listsp['id_danhmuc']) {
                                        echo '<option value="' . $id_danhmuc . '"selected>' . $ten_danhmuc . '</option>';
                                    } else {
                                        echo '<option value="' . $id_danhmuc . '">' . $ten_danhmuc . '</option>';
                                    }
                                } ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td><textarea rows="10" cols="80" name="decription"><?php echo $listsp['mo_ta'] ?></textarea>
                        </td>
                    </tr>
                    </tbody>

                </table>

                <div class="add">
                    <input type="hidden" name="id" value="<?php echo $listsp['id_sanpham'] ?>">
                    <button class="btn-list" type="submit"><a href="index.php?act=list-sp">Danh sách sản phẩm</a>
                    </button>
                    <button name="btn-edit" class="btn-add" type="submit">Sửa</button>

                </div>
            </form>
        </div>

    </div>
</div>
</div>
</body>