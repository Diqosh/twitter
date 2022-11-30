<div class="news">
    <div class="news__item">
        <div class="news__header">
            <h3>Search results:</h3>
        </div>
<?php
    if (isset($_POST['pattern'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'twitter');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $pattern = '%'.$_POST['pattern'].'%';
        $sql = "select id, login from users where login like '$pattern';";
        $result  = mysqli_query($conn,$sql);
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