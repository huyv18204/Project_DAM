<?php
require_once 'views/header.php';
if (isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'deltail':
            require_once 'views/deltail.php';
            break;
        case 'category':
            require_once 'views/category.php';
            break;
        case 'home':
            require_once 'views/home.php';
            break;
    }
}else{
    require_once 'views/home.php';
}

require_once 'views/footer.php';
?>