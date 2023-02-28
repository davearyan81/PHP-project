<?php include("includes/header.php"); ?>
<section class="intro">
    <div class="mask d-flex align-items-center h-90 gradient-custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="card-body p-3 p-md-5">
                            <h3 class="mb-4 pb-2" style="color: #d12e11;">Registration Form For Poojari</h3>
                            <?php include("admin/message.php"); ?>
                            <form action="panditregistrtioncode.php" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control" name="txtpfname" />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control" name="txtplname" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-2">

                                        <div class="form-outline">
                                            <input type="email" id="emailAddress" name="txtpemail"
                                                class="form-control" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline">
                                            <input type="password" id="password" name="txtppass" class="form-control" />
                                            <label class="form-label" for="password">Passwrod</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-2">

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

                                <div class="form-outline mb-2">
                                    <textarea class="form-control" id="address" name="txtpaddress" rows="4"></textarea>
                                    <label class="form-label" for="address">Address</label>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-2">

                                        <select class="form-select" aria-label="Default select example"
                                            name="txtpstate">
                                            <option selected>----States----</option>
                                            <option value="Gujarat">Gujarat</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6 mb-2">

                                        <select class="form-select" aria-label="Default select example" name="txtpcity">
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
                                    <div class="col-md-12 mb-2">


                                        <label class="form-label" for="customFile">Pandit Image
                                        </label>
                                        <input type="file" class="form-control" name="pimage" id="customFile" />

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">


                                        <div class="mt-2">
                                            <input class=" btn btn-lg" type="submit" name="submit" value="Submit"
                                                style="background-color: #d12e11;" />
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