<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/twitter/config/all.php";
if (validate( $_POST['bio'], $_SESSION['user_id'])) {


    $bio = $_POST['bio'];
    $id = $_SESSION['user_id'];

    $prep = mysqli_prepare($connect, "select * from users where id=?");
    mysqli_stmt_bind_param($prep, "s", $id);
    mysqli_stmt_execute($prep);
    $query = mysqli_stmt_get_result($prep);

    if(mysqli_num_rows($query) > 1){
        header("Location: ".BASE_URL.'/pages/register.php?error=2');
        exit();
    }
    $prep1 = mysqli_prepare($connect, "UPDATE users
                                SET bio = ?
                                WHERE id=?;");
    mysqli_stmt_bind_param($prep1, "ss",  $bio,$id);
    mysqli_stmt_execute($prep1);


    $row = mysqli_fetch_assoc($query);

    mysqli_stmt_bind_param($prep, "s", $id);
    mysqli_stmt_execute($prep);
    $query = mysqli_stmt_get_result($prep);
    if(mysqli_num_rows($query) != 1){
        header("Location: ".BASE_URL.'/pages/register.php?error=4');
        exit();
    }
    $row = mysqli_fetch_assoc($query);
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["login"] = $row["login"];
    $_SESSION["bio"] = $row["bio"];

    header("Location: ".BASE_URL."/index.php");

}else{
    header("Location: ".BASE_URL.'/register.php?error=1');
}
