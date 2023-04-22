<?php include("includes/header.php");
include("admin/config/dbcon.php");
$qry = "select poojaid,poojatitle from pooja";
$result = $con->query($qry);

$qry1="select * from states";
$result1=$con->query($qry1);
?>
<section class="intro">
    <div class="mask d-flex align-items-center h-100 gradient-custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-2 pb-2">Registration Form For Poojari</h3>
                            <?php include("poojari/message.php"); ?>
                            <form action="panditregistrationcode.php" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6 mb-1">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control" name="txtpfname" />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-1">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control" name="txtplname" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 mb-1">

                                        <div class="form-outline">
                                            <input type="email" id="emailAddress" name="txtpemail"
                                                class="form-control" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-1">

                                        <div class="form-outline">
                                            <input type="password" id="password" name="txtppass" class="form-control" />
                                            <label class="form-label" for="password">Passwrod</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-1">

                                        <div class="form-outline">
                                            <input type="password" id="conpassword" name="txtpconpass"
                                                class="form-control" />
                                            <label class="form-label" for="conpassword">confirm password</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-outline mb-2">
                                    <textarea class="form-control" id="address" name="txtpdetails" rows="4"></textarea>
                                    <label class="form-label" for="address">Pandit Details</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">+91</span>
                                            <input type="tel" id="phnumber" name="txtpphno" class="form-control" />
                                            <label class="form-label" for="phnumber">Phone number</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline">
                                            <input type="date" id="doj" name="txtpdoj" class="form-control" />
                                            <label class="form-label" for="doj">Date of join</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-outline mb-1">
                                    <textarea class="form-control" id="address" name="txtpaddress" rows="4"></textarea>
                                    <label class="form-label" for="address">Address</label>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-1">

                                        <select class="form-select" id="states1"aria-label="Default select example"
                                            name="txtpstate1">
                                            <option selected>----States----</option>
                                            <?php while($row=$result1->fetch_assoc()):?>
                                            <option value="<?= $row['id'];?>"><?=$row['name'];?></option>
                                            <?php endwhile; ?>
                                        </select>

                                    </div>
                                    <div class="col-md-6 mb-1">

                                        <select class="form-select" id="city1" aria-label="Default select example" name="txtpcity1">
                                            <option value="">--Cities--</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-1">


                                        <label class="form-label" for="customFile">Pandit Image
                                        </label>
                                        <input type="file" class="form-control" name="pimage" id="customFile" />

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">


                                        <div class="mt-2">
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
<?php include("includes/scripts.php"); ?>