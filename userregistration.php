<?php
session_start();
if (isset($_SESSION['auth'])) {
    header("location:index.php");
}

include('includes/header.php');
?>

<section class="intro">
    <div class="mask d-flex align-items-center h-100 gradient-custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2">Registration Form</h3>
                            <?php include("admin/message.php"); ?>
                            <form action="userregistrtioncode.php" method="post">

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control" name="txtfname" />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control" name="txtlname" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline datepicker">
                                            <input type="date" class="form-control" id="birthdayDate" name="txtdate" />
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="txtgen" id="femaleGender"
                                                value="Female" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="txtgen" id="maleGender"
                                                value="Male" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">

                                        <div class="form-outline">
                                            <input type="email" id="emailAddress" name="txtemail"
                                                class="form-control" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="password" id="password" name="txtpass" class="form-control" />
                                            <label class="form-label" for="password">Passwrod</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="password" id="conpassword" name="txtconpass"
                                                class="form-control" />
                                            <label class="form-label" for="conpassword">confirm password</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <textarea class="form-control" id="address" name="txtaddress" rows="4"></textarea>
                                    <label class="form-label" for="address">Address</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <select class="form-select" aria-label="Default select example" name="txtstate">
                                            <option selected>----States----</option>
                                            <option value="Gujarat">Gujarat</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <select class="form-select" aria-label="Default select example" name="txtcity">
                                            <option selected>----City----</option>
                                            <option value="Abrama">Abrama</option>
                                            <option value="Adalaj">Adalaj</option>
                                            <option value="Ahmedabad">Ahmedabad</option>
                                            <option value="Ahwa">Ahwa</option>
                                            <option value="Amod">Amod</option>
                                            <option value="Amreli">Amreli</option>
                                            <option value="Amroli">Amroli</option>
                                            <option value="Anand">Anand</option>
                                            <option value="Anjar">Anjar</option>
                                            <option value="Ankleshwar">Ankleshwar</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">


                                        <div class="input-group mb-3 form-outline mb-4">
                                            <span class="input-group-text" id="basic-addon1">+91</span>
                                            <input type="tel" id="phonenumber" name="txtphone" class="form-control" />
                                            <label class="form-label" for="phonenumber">Phone Number</label>
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">


                                        <div class="mt-4">
                                            <input class=" btn btn-lg" type="submit" name="submit" value="Submit" />
                                        </div>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
// include('includes/footer.php');
include('includes/scripts.php');
?>