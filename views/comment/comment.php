<?php
session_start();
include '../../model/model.php';
include '../../model/comment.php';
$id_pro = $_REQUEST['idpro'];
$list = select_user_comment($id_pro);
$count_comment = coutn_comment($id_pro);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="comment-container">
    <?php if (isset($_SESSION['account'])) {?>
    <img src="image/User.png" alt="">
    <div class="comment-form">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div id="comment-form">
                <input type="hidden" name="id_pro" value="<?php echo $id_pro; ?>">
                <input name="content-comment" id="comment_input" placeholder="    Nhập bình luận của bạn..." type="text">
            </div>
            <div id="btn-comment">
                <button name="btn-submit" class="btn-comment" type="submit">Gửi</button>
            </div>
        </form>
    </div>
<?php } else { ?>
        <p><a href="index.php?act=login">Đăng nhập</a> để bình luận.</p>
    <?php } ?>
</div>

<div class="list-comment">
    <h4><?php echo $count_comment ?> Bình luận</h4>
    <div class="line-deltail"></div>
    <div id="comment-section">
        <?php
        foreach ($list as $comment) {
            extract($comment);
            echo '
                        <div class="comment">
            <div class="content-comment">
                <img src="image/User.png" alt="">
                <h4>'.$name.'</h4>
            </div>
            <p>' . $content . '</p>
        </div>            
            ';
        }
        ?>
    </div>
    <?php
    if (isset($_POST['btn-submit'])) {
        $content = $_POST['content-comment'];
        $id_user = $_SESSION['account']['id_user'];
        $id_pro = $_POST['id_pro'];
        $date_comment = date("h:i:sa Y/m/d");
        insert_comment($content,$id_user, $id_pro, $date_comment);
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
    ?>
</div>
</body>
</html>