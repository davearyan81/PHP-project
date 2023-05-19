<?php
if (isset($_SESSION['auth'])) {
    header("location:index.php");
}
include('includes/header.php');
include('includes/navbar.php');
?>
<section class="intro">
    <div class="bg-image h-100">
        <div class="mask d-flex align-items-center h-40">
            <div class=" container">
                <?php include("poojari/message.php"); ?>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-9 col-xl-9">
                        <div class="card" style="border-radius: 1rem; background:white;">
                            <div class="row g-3">
                                <div class="col-md-6 d-none d-md-block">
                                    <img src="image\poojacom new logo.png" alt="login form" class="img"
                                        style="border-top-left-radius:1rem; border-bottom-left-radius: 1rem;" />
                                </div>
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="card-body py-5 px-4 p-md-5">

                                        <form action="logincode.php" class="needs-validation" method="post" novalidate>
                                            <h4 class="fw-bold mb-4" style="color:  #d12e11;">Log in into your account
                                            </h4>
                                            <p class="mb-4" style="color: #45526e;">To log in, please fill in these
                                                text fiels with your e-mail address and password.</p>

                                            <div class="form-outline mb-5">
                                                <input type="email" name="txtemail" id="form2Example1"
                                                    class="form-control" required />
                                                <label class="form-label" for="form2Example1">Email address</label>
                                                <div class="invalid-feedback">
                                                    This Email field can't be Empty!!!!! </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="form-outline mb-4 mt-2">
                                                <input type="password" id="form2Example2" name="txtpass"
                                                    class="form-control" required />
                                                <label class="form-label" for="form2Example2">Password</label>
                                                <div class="invalid-feedback">
                                                    This password field can't be Empty!!!!!
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mt-2">
                                                        <input class=" btn btn-lg" type="submit" name="btnlogin"
                                                            value="Login" style="background: #d12e11;" />
                                                    </div>

                                                </div>
                                            </div>
                                            <hr>
                                            <a class="link float-end" href="#!" data-mdb-toggle="modal"
                                                data-mdb-target="#exampleModal">Forgot password</a><br>
                                            <a class="link float-end" href="userregistration.php">Signup As User</a><br>
                                            <a class="link float-end" href="panditregistration.php">Signup As Pojari</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog" style="width: 300px;">
        <div class="modal-content text-center">
            <div class="modal-header h5 text-white bg-danger justify-content-center">
                Password Reset
            </div>
            <div class="modal-body px-5">
                <p class="py-2">
                    Enter your email address and we'll send you an email with instructions to reset your password.
                </p>
                <form action="forget.php" method="post">
                    <div class="form-outline">
                        <input type="email" id="typeEmail" name="txtemail" class="form-control my-3" />
                        <label class="form-label" for="typeEmail">Email input</label>
                    </div>
                    <button type="submit" class="btn btn-danger w-100" name="btnsubmit">Reset password</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<?php
include('includes/scripts.php');
?>