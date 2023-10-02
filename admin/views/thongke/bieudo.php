<body>
<div class="container-admin">
    <?php
    require_once 'views/sidebar.php';
    ?>
    <div class="col-2-admin">
        <div class="commodities-title">
            <h4>Biểu đồ<h4>
        </div>
        <div class="commodities-container">
            <div class="table-commodities">
            </div>
            <div
                    id="myChart" style="width:100%; max-width:600px; height:500px;">
            </div>
            <script>
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    const data = google.visualization.arrayToDataTable([
                        ['Danh mục', 'Số lượng sản phẩm'],
                        <?php
                        $total_category = count($list_statistical);
                        $i = 1;
                        foreach ($list_statistical as $charts){
                        extract($charts);
                        if ($i = $total_category) {
                            $comma = "";
                        } else {
                            $comma = ',';
                        }
                        ?>
                        ['<?php echo $charts['ten_danhmuc'] ?>', <?php echo $charts['count'] . $comma ?>],
                        <?php }?>
                    ]);

                    const options = {
                        title: 'Biểu đồ danh mục'
                    };
                    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                    chart.draw(data, options);
                }
            </script>
            <div class="add">
                <button class="btn-list" type="submit"><a href="index.php?act=thong-ke">Thống kê</a></button>

            </div>
        </div>

    </div>
</div>
</body>