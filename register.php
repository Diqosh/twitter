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
        <button  type="button" class="btn btn-primary signin" data-bs-toggle="modal" data-bs-target="#exampleModal" class="">Sign in</button>
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
                <form action="<?=BASE_URL?>/api/auth/signup.php" class="register__form" method="post">
                    <div class="input-group mb-3">
                        <input name="login" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>