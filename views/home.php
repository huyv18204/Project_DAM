<section class="main-body">
    <div class="banner">

        <div class="slide active">
            <a href=""><img src="image/Banner_4.png" alt=""></a>
        </div>
        <div class="slide active">
            <a href=""><img src="image/Banner_6.jpeg" alt=""></a>
        </div>
        <div class="slide active">
            <a href=""><img src="image/Banner_7.jpeg" alt=""></a>
        </div>
        <div class="slide active">
            <a href=""><img src="image/Banner_8.jpeg" alt=""></a>
        </div>
    </div>
    <main>
        <section class="main">

            <!-- --------------------- -->
            <div class="new">
                <div class="title-container">
                    <div class="line"></div>
                    <h1 class="title-main">SẢN PHẨM NỔI BẬT</h1>
                    <div class="line"></div>
                </div>

                <div class="product-container">
                    <div class="row-product">
                        <?php foreach ($list_sp as $sp_new) {
                            extract($sp_new);
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
            <!-- -------------------------------- -->
            <div class="macbook_air">
                <div class="title-container">
                    <div class="line"></div>
                    <h1 class="title-main">MACBOOK AIR</h1>
                    <div class="line"></div>
                </div>

                <div class="product-container">
                    <div class="row-product">
                        <?php foreach ($sp_macbook_air as $macbookair) {
                            extract($macbookair);
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

            <div class="macbook_pro">
                <div class="title-container">
                    <div class="line"></div>
                    <h1 class="title-main">MACBOOK PRO</h1>
                    <div class="line"></div>
                </div>

                <div class="product-container">
                    <div class="row-product">
                        <?php foreach ($sp_macbook_pro as $macbook_pro) {
                            extract($macbook_pro);
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

            <div class="imac">
                <div class="title-container">
                    <div class="line"></div>
                    <h1 class="title-main">MAC DESKTOP</h1>
                    <div class="line"></div>
                </div>

                <div class="product-container">
                    <div class="row-product">
                        <?php foreach ($sp_imac as $imac) {
                            extract($imac);
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


        </section>
    </main>
</section>