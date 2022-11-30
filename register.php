<?php
    include 'header.php';
?>
<div class="register">
    <div class="poster">
    </div>
    <div class="content">
        <i class="fa-brands fa-twitter"></i>
        <h1>Happening now</h1>
        <h3>Join Twitter today.</h3>
        <button>Sign up with phone or email</button>
        <p>By signing up, you agree to the <a href="#">Terms of Service</a>  and <a href="#">Privacy Policy</a>, including <a href="#">Cookie Use</a>.</p>
        <h5>Already have an account?</h5>
        <button  type="button" class="btn btn-primary signin" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign in</button>
    </div>
</div>
<div class="modal fade mymodal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?BASE_URL?>/api/auth/signup.php" method="post">
                    <div class="input-group mb-3">
                        <input name="login" type="text" class="form-control" placeholder="login">
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="text" class="form-control" placeholder="password">
                    </div>
                    <div class="input-group mb-3">
                        <input name="bio" type="text" class="form-control" placeholder="bio">
                    </div>
                    <button class="btn btn-primary" type="submit" onclick="">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>