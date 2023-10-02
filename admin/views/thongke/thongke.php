<body>
<div class="container-admin">
    <?php
    require_once 'views/sidebar.php';
    ?>
    <div class="col-2-admin">
        <div class="commodities-title">
            <h4>Thống kê<h4>
        </div>
        <div class="commodities-container">
            <div class="function-commodities">
                <button class="add-commodities" type="submit"><a href="index.php?act=bieu-do">Xem biểu đồ</a></button>
            </div>
            <div class="line-commodities"></div>
            <div class="table-commodities">
                <table class="commodities">
                    <thead>
                    <tr>
                        <th>Loại hàng</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhân</th>
                        <th>Giá trung bình</th>
                    </tr>
                    </thead>
                    <tbody class="product-list">
                    <tr>
                        <td>Macbook</td>
                        <td>31</td>
                        <td>4.000.000</td>
                        <td>8.000.000</td>
                        <td>6.000.000</td>
                    </tr>

                    </tbody>
                </table>
                <div id="pagination"></div>
            </div>
        </div>
    </div>
</div>
</body>