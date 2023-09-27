<body>
<div class="container-admin">
    <?php
    require_once 'views/sidebar.php';
    ?>
    <div class="col-2-admin">
        <div class="commodities-title">
            <h4>Quản lí bình luận<h4>
        </div>
        <div class="commodities-container">
            <div class="line-commodities"></div>
            <div class="table-commodities">
                <table class="commodities">
                    <thead>
                    <tr>
                        <th width="10"><input type="checkbox"></th>
                        <th>Hàng hoá</th>
                        <th>Số BL</th>
                        <th>Mới nhất</th>
                        <th>Cũ nhất</th>
                        <th>Chức năng</th>
                    </tr>
                    </thead>
                    <tbody class="product-list">
                    <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td>Macbook Air M1</td>
                        <td>10</td>
                        <td>2021</td>
                        <td>2022</td>
                        <td><a class="deltail-comment" href="index.php?act=chi-tiet-bl">Chi tiết</a></td>
                    </tr>
                    </tbody>
                </table>
                <div id="pagination"></div>
            </div>
        </div>
    </div>
</div>
</body>