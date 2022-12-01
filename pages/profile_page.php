<div class="profile">
    <div class="profile__head">

    </div>
    <div class="profile__avatar">
        D
    </div>
    <div class="profile__foot">
        <div class="edit__btn">
            <button><a href="#ex1"  rel="modal:open" onclick="console.log('asf')">Edit profile</a></button>
        </div>
        <p class="profile__name">Dinmukhammed Tleuzhanuly</p>
        <p class="profile__nickname">@Diqosh</p>
        <p class="profile__nickname"><i class="fa-regular fa-calendar"></i> Joined November 2021</p>
        <p class="profile__nickname"><i class="fa-regular fa-calendar"></i><?=$_SESSION['bio']?></p>
        <div class="follow">
            <p>1 Following</p>
            <p>0 Followers</p>
        </div>
        <form action="<?=BASE_URL?>/api/auth/bio.php" method="post">
            <div class="input-group mb-3">
                <input name="bio" type="text" class="form-control" placeholder="bio">
            </div>
            <button class="btn btn-primary" type="submit" onclick="">Save changes</button>
        </form>
    </div>
</div>]
