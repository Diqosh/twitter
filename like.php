<?php
    if ($_REQUEST['type'] == 0) {
        if ($_REQUEST['post']) {
            $conn = mysqli_connect('localhost', 'root', '', 'twitter');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $post_id = $_REQUEST['post'];
            $sql = "update posts set likes = likes + 1 where id='$post_id';";
            $db  = mysqli_query($conn,$sql);
            header('Location: index.php#'.$post_id);
        }
    } 
    if ($_REQUEST['type'] == 1) {
        if ($_REQUEST['post']) {
            $conn = mysqli_connect('localhost', 'root', '', 'twitter');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $post_id = $_REQUEST['post'];
            $sql = "update posts set dislikes = dislikes + 1 where id='$post_id';";
            $db  = mysqli_query($conn,$sql);
            header('Location: index.php#'.$post_id);
        }
    } 
    
?>