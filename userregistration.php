<?php
session_start();
if (isset($_SESSION['auth_user'])) {
    header("location:index.php");
}
include('includes/header.php');
include("admin/config/dbcon.php");
$qry = "select * from states";
$result = $con->query($qry);
?>
<section class="intro">
    <div class="mask d-flex align-items-center h-100 gradient-custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-lg-8 col-xl-7">
                    <div class="card">
                        <div class="card-body p-3 p-md-4">
                            <h2 class="mb-3 pb-2">Registration Form</h2>
                            <?php include("poojari/message.php"); ?>
                            <form action="userregistrtioncode.php" class="needs-validation" method="post" novalidate>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control" name="txtfname" required />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control" name="txtlname" required />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline datepicker">
                                            <input type="date" class="form-control" id="birthdayDate" name="txtdate" required />
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6 mb-2">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="txtgen" id="femaleGender" 
                                                value="Female" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="txtgen" id="maleGender" 
                                                value="Male" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-2">

                                        <div class="form-outline">
                                            <input type="email" id="emailAddress" name="txtemail" required
                                                class="form-control" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline">
                                            <input type="password" id="password" name="txtpass" class="form-control" required />
                                            <label class="form-label" for="password">Passwrod</label>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline">
                                            <input type="password" id="conpassword" name="txtconpass" required
                                                class="form-control" />
                                            <label class="form-label" for="conpassword">confirm password</label>
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="form-outline mb-2">
                                    <textarea class="form-control" id="address" name="txtaddress" rows="4" required></textarea>
                                    <label class="form-label" for="address">Address</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <select class="form-select" aria-label="Default select example" id="states" required
                                            name="txtstate">
                                            <option selected>----States----</option>
                                            <?php
                                            while ($row = $result->fetch_assoc()):
                                                ?>
                                                <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                        
                                    </div>
                                    <div class="col-md-6 mb-2">

                                        <select class="form-select" aria-label="Default select example" id="city" 
                                            name="txtcity">
                                            <option >----City----</option>
                                        </select>
                                        
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">


                                        <div class="input-group mb-3 form-outline mb-4">
                                            <span class="input-group-text" id="basic-addon1">+91</span>
                                            <input type="tel" id="phonenumber" name="txtphone" class="form-control" required />
                                            <label class="form-label" for="phonenumber">Phone Number</label>
                                        </div>
                                        <div class="invalid-feedback">
                                            This Email field can't be Empty!!!!! </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-2">
                                            <input class=" btn btn-lg " type="submit" name="submit" value="Submit" />
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