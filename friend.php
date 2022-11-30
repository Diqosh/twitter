<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/twitter/config/all.php";
    if (isset($_REQUEST['user_id'])) {
        $user2 = $_REQUEST['user_id'];
        $user1 = $_SESSION['user_id'];
        if ($_REQUEST['follow'] == 1) {
            $sql = "insert into friends values ('$user1', '$user2');";
        } else {
            $sql = "delete from friends where user1_id='$user1' and user2_id='$user2';";
        }
        $db  = mysqli_query($connect,$sql);
        header('Location: search.php?pattern='.$_REQUEST['pattern']);
    } 
?>