<?php
    $post_id = $_GET['post'];
    $conn = mysqli_connect('localhost', 'root', '', 'twitter');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['comment'])) {
        $message = $_POST['comment'];
        $sql = "insert into comments(message, post_id, user_id) values('$message', '$post_id', '1')";
        $db  = mysqli_query($conn,$sql);
    }
    $sql = "select * from posts where id='$post_id'";
    $db  = mysqli_query($conn,$sql);
    $res = mysqli_fetch_assoc($db);
    if ($res == NULL) {
        echo "<h1>Post doesn't exist</h1>";
    }
?>
<div class="news">
    <div class="news__item">
        <div class="news__body">
            <div class="news__creator-avatar">
            </div>
            <div class="news__content">
                <div class="content__header">
                    <div class="content__title">wild TikTok screenshots</div>
                    <div class="content__option"><i class="fa-solid fa-ellipsis"></i></div>
                </div>
                <div class="content__image">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="tweet">
    <form action="comment.php?post=<?php echo $_GET['post'];?>" method="post">
        <div class="info">
            <div class="data">
                <textarea name="comment" rows="3" placeholder="Write your comment..."></textarea>
                <hr>
                <div class="attach">
                    <button>Comment</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
    $sql = "select c.message, u.login from comments as c join users as u on u.id = c.user_id and c.post_id = '$post_id';";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
?>
    <div class="tweet">
    <div class="info">
        <div class="data">
            <h4><?php echo $row['login'];?>:</h4>
            <p style="margin-left: 20px;"><?php echo $row['message'];?></p>
            <hr>

        </div>
    </div>
</div>
<?php
    }
?>