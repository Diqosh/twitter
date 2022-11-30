<div class="news">
    <div class="news__item">
        <div class="news__header">
            <h3>Search results:</h3>
        </div>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/twitter/config/all.php";
    if (isset($_POST['pattern'])) {
        $pattern = '%'.$_POST['pattern'].'%';
        $sql = "select id, login from users where login like '$pattern';";
        $result  = mysqli_query($connect,$sql);
        // echo var_dump($result);
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_array($result)) {
?>            
        <div class="news__body">
            <div class="news__creator-avatar">
            </div>
            <div class="news__content">
                <div class="content__header">
                    <div class="content__title"><?php echo $row['login'];?></div>
                </div>
            </div>
        </div>
<?php
            }
        } else {
            echo "No user found";
        }
    }
?>
    </div>
</div>