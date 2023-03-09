<?php

include('includes/header.php');
include('includes/navbar.php');
?>
<div class="row p-2 bg-white border rounded mt-2">
    <div class="col-md-3 mt-1 mx-5"><img class="img-fluid img-responsive rounded product-image"
            src="image\Shivji Brass murti.jpg"></div>
    <div class="col-md-6 mt-1">
        <h5>Shiv Bhagwan 3ft tall Murti(Pure Brass)</h5>
        <div class="d-flex flex-row">
            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i></div><span>110</span>
        </div>
        <div class="mt-1 mb-1 spec-1"><span>100% pure Brass</span><span class="dot"></span><span>Light
                weight</span><span class="dot"></span><span>Best finish<br></span></div>
        <div class="mt-1 mb-1 spec-1"><span>Unique design</span></div>

        <div class="d-flex flex-row align-items-center">
            <h4 class="mr-1">Rs:4,500/-</h4><span class="strike-text">Rs:5,500/-</span>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="form2Example2" name="txtpass" class="form-control" />
            <label class="form-label" for="form2Example2">Your Name:</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" id="email" name="txtpass" class="form-control" />
            <label class="form-label" for="email">Your E-mail</label>
        </div>

        <div class="form-outline mb-4">
            <input type="number" id="mobileno" name="txtpass" class="form-control" />
            <label class="form-label" for="mobileno">Mobile Number:</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="subject" name="txtpass" class="form-control" />
            <label class="form-label" for="subject">Your Sybject:</label>
        </div>

        <div class="row ">
            <div class="col-12 ">
                <div class="mt-2 d-flex justify-content-md-end">
                    <input class=" btn btn-lg" type="submit" name="btnlogin" value="Submit"
                        style="background: #d12e11;" />
                </div>
            </div>
        </div>

        <!-- Pills navs -->
        <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab"
                    aria-controls="ex1-pills-1" aria-selected="true">Description</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab"
                    aria-controls="ex1-pills-2" aria-selected="false">Reviews</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab"
                    aria-controls="ex1-pills-3" aria-selected="false">Procedure </a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
                Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et
                Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor
                sit amet..", comes from a line in section 1.10.32.
            </div>
            <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                Tab 2 content:
                <p> Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical
                    Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
                    a
                    Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et
                    Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                    theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                    dolor
                    sit amet..", comes from a line in section 1.10.32.</p>
            </div>
            <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                Tab 3 content:
                <p> Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical
                    Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
                    a
                    Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et
                    Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                    theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                    dolor
                    sit amet..", comes from a line in section 1.10.32.</p>
            </div>
        </div>
        <!-- Pills content -->

    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>