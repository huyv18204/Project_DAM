<main class="deltail">
    <div class="container-deltail">
        <div class="row-1-deltail">
            <div></div>
            <div class="col-1-deltail">
                <div class="img-deltail">
                    <div class="img-deltail-for">
                        <div class="img-deltail-content">
                            <img src="uploads/<?php echo $list_sp['anh_sanpham'] ?>" alt="">
                        </div>
                        <!--                        <div class="img-deltail-content">-->
                        <!--                            <img src="image/deltail_1.jpeg" alt="">-->
                        <!--                        </div>-->
                        <!--                        <div class="img-deltail-content">-->
                        <!--                            <img src="image/deltail_3.png" alt="">-->
                        <!--                        </div>-->
                        <!--                        <div class="img-deltail-content">-->
                        <!--                            <img src="image/deltail_2.png" alt="">-->
                        <!--                        </div>-->

                    </div>
                    <div class="img-deltail-nav">
                        <div class="img-deltail-content">
                            <img src="uploads/<?php echo $list_sp['anh_sanpham'] ?>" alt="">
                        </div>
                        <!--                        <div class="img-deltail-content">-->
                        <!--                            <img src="image/deltail_1.jpeg" alt="">-->
                        <!--                        </div>-->
                        <!--                        <div class="img-deltail-content">-->
                        <!--                            <img src="image/deltail_3.png" alt="">-->
                        <!--                        </div>-->
                        <!--                        <div class="img-deltail-content">-->
                        <!--                            <img src="image/deltail_2.png" alt="">-->
                        <!--                        </div>-->
                    </div>
                </div>
                <div class="information-deltail">
                    <h1><?php echo $list_sp['ten_sanpham'] ?></h1>
                    <div class="deltail-content">
                        <ul>
                            <li><span><strong>Chip:</strong>Apple M2 8-Core GPU 8 nhân</span></li>
                            <li><span><strong>Ram:</strong>8GB, LPDDR4, 3200 Mhz</span></li>
                            <li><span><strong>Ổ cứng:</strong>SSD 256GB</span></li>
                            <li><span><strong>Màn hình:</strong>13.6inchs Liquid Retina 2560x1664 pixcels</span>
                            </li>
                            <li><span><strong>Cổng kết nối:</strong>2x USB TypeC, 1 Jack tai nghe 3.5mm</span></li>
                            <li><span><strong>Hệ điều hành:</strong>MacOS</span></li>
                            <li><span><strong>Kích thước:</strong>304.1 x 215 x 113 mm</span></li>
                            <li><span><strong>Trọng lượng:</strong>1.24kg</span></li>
                            <li><span><strong>Màu sắc:</strong>MLY13 (Starlight)</span></li>
                        </ul>
                    </div>
                    <div class="price-deltail">
                        <s class="price-old-deltail">26,000,000<p>VNĐ</p>
                        </s>

                        <div class="price-new-deltail"><?php echo $list_sp['gia'] ?>
                            <p>VNĐ</p>
                        </div>
                    </div>
                    <div class="btn-add-buy">
                        <button class="add-product"><a href="">THÊM VÀO GIỎ HÀNG</a></button>
                        <button class="buy-product"><a href="">MUA NGAY</a></button>
                    </div>
                </div>
            </div>
            <div class="col-2-deltail">
                <img src="image/side-bar.jpeg" alt="">
                <div class="side-bar-deltail">
                    <h2>Chính sách bán hàng</h2>
                    <div class="policy">
                        <p><img src="image/tick-green.png" alt="">
                            Lỗi 1 đổi 1 trong 15 ngày đầu (Macbook like new)</p>
                        <p><img src="image/tick-green.png" alt="">
                            Hỗ trợ Ship COD toàn quốc, FreeShip nội thành HN</p>
                        <p><img src="image/tick-green.png" alt="">
                            Thanh toán khi nhận hàng (nội thành)</p>
                        <p><img src="image/tick-green.png" alt="">
                            Hỗ trợ trả góp, duyệt hồ sơ online cực nhanh</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-2-deltail">
            <section class="main">
                <div class="title-container">
                    <div class="line"></div>
                    <h1 class="title-main">SẢN PHẨM CÙNG LOẠI</h1>
                    <div class="line"></div>
                </div>

                <div class="product-container">
                    <div class="row-product">
                        <?php foreach ($list_samekind as $samekind) {
                            extract($samekind);
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
        <div class="row-3-deltail">
            <div></div>
            <div>
                <h4>Bình Luận</h4>
                <div class="line-deltail"></div>
                <div class="comment-container">
                    <img src="image/User.png" alt="">
                    <div class="comment-form">
                        <form id="comment-form">
                            <input id="comment" placeholder="    Nhập bình luận của bạn..." type="text">
                        </form>
                        <form id="btn-comment" action="">
                            <button class="btn-comment" type="submit">Gửi</button>
                        </form>
                    </div>

                </div>

                <div class="list-comment">
                    <h4>12 Comment</h4>
                    <div class="line-deltail"></div>
                    <div id="comment-section">
                        <div class="comment">
                            <div class="content-comment">
                                <img src="image/User.png" alt="">
                                <h4>Quốc Huy</h4>
                            </div>
                            <p>Material là mẫu quản trị được lấy cảm hứng từ phương pháp tiếp cận của Google đối
                                với thiết kế giao diện người dùng.

                                Material có 60 thành phần thủ công giúp bạn có mọi thứ bạn cần để tạo một trang
                                quản trị website độc đáo và phù hợp cho website.

                                Một số thành phần cơ bản bao gồm: Hiển thị chỉ số truyền thông xã hội, đồ thị và
                                biểu đồ trong một loạt các định dạng, danh sách công việc và hộp kiểm, bảng và
                                nhiều tùy chọn khác.

                                Người hâm mộ Typography không nên thất vọng với các tùy chọn Font chữ từ
                                Material. Họ Font chữ Roboto cổ điển được sử dụng làm kiểu chữ mặc định trong
                                suốt mẫu quản trị Bootstrap này. Việc thêm các hộp thông báo vào thiết kế tùy
                                chỉnh của bạn cũng được đề cập, nhờ vào việc lựa chọn các tùy chọn dựng sẵn.</p>
                        </div>

                        <div class="comment">
                            <div class="content-comment">
                                <img src="image/User.png" alt="">
                                <h4>Huy Hoàng</h4>
                            </div>
                            <p>Material là mẫu quản trị được lấy cảm hứng từ phương pháp tiếp cận của Google đối
                                với thiết kế giao diện người dùng.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div></div>
        </div>
    </div>
</main>
<!-- ------------------------ -->