<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/twitter/config/all.php";
    if ($_REQUEST['type'] == 0) {
        if ($_REQUEST['post']) {
            $post_id = $_REQUEST['post'];
            $sql = "update posts set likes = likes + 1 where id='$post_id';";
            $db  = mysqli_query($connect,$sql);
            header('Location: index.php#'.$post_id);
        }
    } 
    if ($_REQUEST['type'] == 1) {
        if ($_REQUEST['post']) {
            $post_id = $_REQUEST['post'];
            $sql = "update posts set dislikes = dislikes + 1 where id='$post_id';";
            $db  = mysqli_query($connect,$sql);
            header('Location: index.php#'.$post_id);
        }
    } 
    
?>