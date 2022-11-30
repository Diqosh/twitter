<div class="news">
    <div class="news__item">
        <div class="news__header">
            <h3>Search results:</h3>
        </div>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/twitter/config/all.php";
    if (isset($_REQUEST['pattern'])) {
        $pattern = '%'.$_REQUEST['pattern'].'%';
        $sql = "select id, login from users where login like '$pattern';";
        $result  = mysqli_query($connect,$sql);
        $cur_user = $_SESSION['user_id'];
        $sql2 = "select user2_id from friends where user1_id='$cur_user';";
        $result2  = mysqli_query($connect,$sql2)->fetch_all();
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_array($result)) {
?>            
        <div class="news__body attach">
            <div class="news__creator-avatar">
            </div>
            <div class="news__content">
                <div class="content__header">
                    <div class="content__title"><?php echo $row['login'];?></div>
                </div>
            </div>
            <?php
                $equal = false;
                foreach ($result2 as $value) {
                    if ($value[0] == $row['id']) {
                        $equal = true;
                        break;
                    }
                }
                if ($equal) {
            ?>
                <a href="friend.php?follow=0&pattern=<?php echo $_REQUEST['pattern'];?>&user_id=<?php echo $row['id'];?>"><button>Followed</button></a>
            <?php
                } else {
            ?>
                <a href="friend.php?follow=1&pattern=<?php echo $_REQUEST['pattern'];?>&user_id=<?php echo $row['id'];?>"><button>Follow</button></a>
            <?php
                }
            ?>
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