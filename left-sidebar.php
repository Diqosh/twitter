<div class="left">
    <div class="logo">
    <i class="fa-brands fa-twitter"></i>
    </div>
    <ul>
        <li><a href="home.php"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
        <li><a href="explore.php"><i class="fa-sharp fa-solid fa-hashtag"></i> Explore</a></li>
        <li><a href="notification.php"><i class="fa-regular fa-bell"></i> Notifications</a></li>
        <li><a href="message.php"><i class="fa-regular fa-bell"></i>Message</a></li>
        <li><a href="profile.php"><i class="fa-regular fa-bell"></i> Profile</a></li>
    </ul>
    <button onclick="window.location.href='tweet.php'">Tweet</button>
    <div class="profile_button">
        <img src="assets/images/Artboard_Copy_3_2.png" alt="">
        <div class="name">
            <h3><?php if(isset($_SESSION['user_id'])){
                echo $_SESSION['login'];
                }else{
                    echo 'no user';
                }?></h3>
            <p>@username</p>
        </div>
        <a class="btn" href="<?=BASE_URL?>/api/auth/signout.php">logout</a>
    </div>
</div>
