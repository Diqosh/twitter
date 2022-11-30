<div class="tweet">
    <div class="close" onclick="window.location.href='http://localhost:8888/twitter/'"><i class="fa-solid fa-xmark"></i></div>
    <form action="tweet.php" method="post">
        <div class="info">
            <img src="assets/images/Artboard_Copy_3_2.png" alt="">
            <div class="data">
                <select name="" id="">
                    <option value="0">Everyone</option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <textarea name="text" rows="3" placeholder="What's happening?"></textarea>
                <a href=""><i class="fa-sharp fa-solid fa-earth-americas"></i> Everyone can reply</a>
                <hr>
                <div class="attach">
                    <div class="icons">
                        <i class="fa-solid fa-image"></i>
                        <i class="fa-solid fa-gif"></i>
                        <i class="fa-solid fa-chart-gantt"></i>
                        <i class="fa-regular fa-face-smile"></i>
                        
                    </div>
                    <button>Tweet</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
    if (isset($_POST['text'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'twitter');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $text = $_POST['text'];
        $sql = "insert into posts(text) values('$text')";
        $db  = mysqli_query($conn,$sql);
        header('Location: index.php');
    }
?>