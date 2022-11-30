<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/twitter/config/all.php";

if(validate($_POST["login"], $_POST["password"])){

    $login =$_POST['login'];
    $password = $_POST['password'];
    $hash = sha1($password);

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

}else {
    header("Location: " . BASE_URL . '/pages/register.php?error=3');
}