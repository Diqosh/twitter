<div class="news">
    <div class="news__item">
        <div class="news__header">
            Popular images · See more
        </div>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/twitter/config/all.php";
    $cur_user = $_SESSION['user_id'];
    $sql = "select p.id, login, likes, text, dislikes, views from posts as p join friends as f join users as u on f.user2_id = p.user_id and f.user2_id = u.id and f.user1_id = '$cur_user';";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
?>

        <div class="news__body" id="<?php echo $row['id'];?>">
            <div class="news__creator-avatar">
            </div>
            <div class="news__content">
                <div class="content__header">
                    <div class="content__title"><?php echo $row['login'];?></div>
                    <div class="content__option"><i class="fa-solid fa-ellipsis"></i></div>
                </div>
                <p><?php echo $row['text'];?></p>
                <div class="content__image">

                </div>
            </div>
        </div>
        <div class="news__footer">
            <div class="footer__item"><a href="comment.php?post=<?php echo $row['id'];?>"><i class="fa-regular fa-comment"></i></a></div>
            <div class="footer__item"><i class="fa-regular fa-circle-down"></i> <?php echo $row['views'];?></div>
            <div class="footer__item"><a href="like.php?type=0&post=<?php echo $row['id'];?>"><i class="fa-regular fa-heart"></i></a> <?php echo $row['likes'];?></div>
            <div class="footer__item"><a href="like.php?type=1&post=<?php echo $row['id'];?>"><i class="fa-regular fa-share"></i></a> <?php echo $row['dislikes'];?></div>
        </div>
<?php
    }
?>
    </div>
</div>