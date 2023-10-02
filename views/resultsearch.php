<div class="product-container-main">
    <div class="product-col-1">
        <div class="main-product">
            <div class="product-list">
                <?php foreach ($list_sp as $sp_by_dm) {
                    extract($sp_by_dm);
                    $path_deltail = 'index.php?act=deltail&id=' . $id_sanpham;
                    echo '
                         <div class="product">
                        <span class="discount">Giảm 16%</span>
                        <div class="img-product">
                            <a href="' . $path_deltail . '"><img src="uploads/' . $anh_sanpham . '" alt=""></a>
                        </div>
                        <div class="price-product">
                            <s class="price-old">29,000,000<p>VNĐ</p></s>

                            <div class="price-new">' . $gia . '<p>VNĐ</p>
                            </div>
                        </div>
                        <h4><a href="' . $path_deltail . '">' . $ten_sanpham . '</a></h4>
                    </div>
';
                } ?>


            </div>
        </div>
    </div>
    <div class="product-col-2">
        <div class="nav-bar-product">
            <ul class="nav-bar-product-menu">
                <?php
                foreach ($list_dm as $dm) {
                    extract($dm);
                    $path_deltail = 'index.php?act=category&id=' . $id_danhmuc;
                    echo '
                <li>
                    <img src="image/navbar_1.svg" alt="">
                    <a href="' . $path_deltail . '">' . $ten_danhmuc . '</a>
                </li>
                ';
                }
                ?>
            </ul>
        </div>
    </div>
</div>