<?php
require_once 'model/model.php';
require_once 'model/users/homepage.php';
require_once 'views/header.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'deltail':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $list_sp = select_one_sanpham($id);
                extract($list_sp);
                $list_samekind = select_sp_samekind($id,$id_danhmuc);
            }
            require_once 'views/deltail.php';
            break;
        case 'category':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $list_sp = select_sp_by_dm($id);
            }
            $list_dm = select_all_danhmuc();
            require_once 'views/category.php';
            break;
        case 'home':
            $list_sp = select_all_sp();
            $sp_macbook_air = select_macbookair_sp();
            $sp_macbook_pro = select_macbookpro_sp();
            $sp_imac = select_imac_sp();
            require_once 'views/home.php';
            break;
    }
} else {
    $list_sp = select_all_sp();
    $sp_macbook_air = select_macbookair_sp();
    $sp_macbook_pro = select_macbookpro_sp();
    $sp_imac = select_imac_sp();
    require_once 'views/home.php';
}

require_once 'views/footer.php';
?>