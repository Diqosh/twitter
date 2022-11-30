<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/twitter/config/all.php";

if (validate($_POST['login'], $_POST['password'], $_POST['bio'])) {

    $login =$_POST['login'];
    $password = $_POST['password'];
    $bio = $_POST['bio'];

    $prep = mysqli_prepare($connect, "select id from users where login=?");
    mysqli_stmt_bind_param($prep, "s", $login);
    mysqli_stmt_execute($prep);
    $query = mysqli_stmt_get_result($prep);

    if(mysqli_num_rows($query) > 0){
        header("Location: ".BASE_URL.'/pages/register.php?error=2');
        exit();
    }
    $hash = sha1($password);
    $prep1 = mysqli_prepare($connect, "insert into users(login, password, bio) values (?, ? , ?)");
    mysqli_stmt_bind_param($prep1, "sss",  $login,$hash, $bio);
    mysqli_stmt_execute($prep1);

    $row = mysqli_fetch_assoc($query);

    $prep = mysqli_prepare($connect, "select * from users where login=? and password=?");
    mysqli_stmt_bind_param($prep, "ss", $login, $hash);
    mysqli_stmt_execute($prep);
    $query = mysqli_stmt_get_result($prep);
    if(mysqli_num_rows($query) != 1){
        header("Location: ".BASE_URL.'/pages/register.php?error=4');
        exit();
    }
    $row = mysqli_fetch_assoc($query);
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["login"] = $row["login"];
    header("Location: ".BASE_URL."/index.php");

}else{
    header("Location: ".BASE_URL.'/index.php?error=1');
}
