<body>
<div class="container-admin">
    <?php
    require_once 'views/sidebar.php';
    ?>
    <div class="col-2-admin">
        <div class="commodities-title">
            <h4>Chi tiết</h4>
        </div>
        <div class="commodities-container">
            <div class="function-commodities">
                <button class="add-commodities" type="submit"><a href="index.php?act=list-bl">Danh sách bình luận</a>
                </button>

            </div>
            <div class="line-commodities"></div>
            <div class="table-commodities">
                <table class="commodities">
                    <thead>
                    <tr>
                        <th width="10"><input type="checkbox"></th>
                        <th>Nội dung</th>
                        <th>Ngày bình luận</th>
                        <th>Người bình luận</th>
                        <th>Chức năng</th>
                    </tr>
                    </thead>
                    <tbody class="product-list">
                    <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td>Macbook Air M1</td>
                        <td>2021</td>
                        <td>admin</td>
                        <td><button class="delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                    </tr>
                    </tbody>
                </table>
                <div id="pagination"></div>
            </div>
        </div>
    </div>
</div>
</body>