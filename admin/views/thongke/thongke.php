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
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                    </tr>
                    </thead>
                    <tbody class="product-list">
                    <?php foreach ($list_statistical as $value){

                        extract($value);
                        echo '
                    <tr>
                        <td>'.$ten_danhmuc.'</td>
                        <td>'.$count.'</td>
                        <td>'.$max.'</td>
                        <td>'.$min.'</td>
                        <td>'.$avg.'</td>
                    </tr>
                        ';
                    }?>

                    </tbody>
                </table>
                <div id="pagination"></div>
            </div>
        </div>
    </div>
</div>
</body>