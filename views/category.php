<div class="product-container-main">

    <div class="product-col-1">
<!---->
<!--        <div class="title-product">-->
<!--            <div class="line-product"></div>-->
<!--            <h1 class="title-product-main">--><?php //echo $sp_by_dm['ten_danhmuc']?><!--</h1>-->
<!--            <div class="line-product"></div>-->
<!--        </div>-->
        <div class="main-product">
            <div class="product-list">
                <?php foreach ($list_sp as $sp_by_dm) {
                    extract($sp_by_dm);
                    $path_deltail = 'index.php?act=deltail&id=' . $id_sanpham;
                    echo '
                         <div class="product">
                        <span class="discount">Giảm 16%</span>
                        <div class="img-product">
                            <a href="'.$path_deltail.'"><img src="uploads/' . $anh_sanpham . '" alt=""></a>
                        </div>
                        <div class="price-product">
                            <s class="price-old">29,000,000<p>VNĐ</p></s>

                            <div class="price-new">' . $gia . '<p>VNĐ</p>
                            </div>
                        </div>
                        <h4><a href="'.$path_deltail.'">' . $ten_sanpham . '</a></h4>
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
                foreach ($list_dm as $dm){
                    extract($dm);
                    $path_deltail = 'index.php?act=category&id=' . $id_danhmuc;
                echo '
                <li>
                    <img src="image/navbar_1.svg" alt="">
                    <a href="'.$path_deltail.'">' . $ten_danhmuc . '</a>
                </li>
                ';
                }
                ?>
<!--                <li>-->
<!--                    <img src="image/navbar_2.svg" alt="">-->
<!--                    <a href="#">MACBOOK PRO</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="image/navbar_3.svg" alt="">-->
<!--                    <a href="#">IMAC & MAC DESKTOP</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="image/navbar_4.svg" alt="">-->
<!--                    <a href="#">iPHONE</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="image/navbar_5.svg" alt="">-->
<!--                    <a href="#">iPAD</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="image/navbar_6.svg" alt="">-->
<!--                    <a href="#">SẢN PHẨM KHÁC</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="image/navbar_7.svg" alt="">-->
<!--                    <a href="#">PHỤ KIỆN</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="image/navbar_8.svg" alt="">-->
<!--                    <a href="#">GIẢM GIÁ SỐC</a>-->
<!--                </li>-->
            </ul>
        </div>
    </div>
</div>