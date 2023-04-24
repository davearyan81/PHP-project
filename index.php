<?php
if (isset($_SESSION['auth_user1'])) {
    header('location:admin/index.php');
}
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Carousel wrapper -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="image\image1.webp" alt="First slide">
            <!-- <video width="500" height="240" autoplay muted>
                <source src="image/book.mp4" type="video/mp4">
            </video> -->
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="image\image2.webp" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="image\image3.webp" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="text-center">
    <h1 style="color:red" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000">Categories</h1>
</div>
<div class="container text-center mb-1 ">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" data-aos="flip-up" data-aos-duration="2000">
        <div class="col">
            <img src="image\bells.jpg" class="  d-block w-100" alt="Sunset Over the City" height=350px; />

        </div>
        <div class="col">
            <img src="image\artidiya.png" class="d-block w-100" alt="Sunset Over the City" height=350px; />

        </div>
        <div class="col">
            <img src="image\poojathali.jpg" class="d-block w-100" alt="Sunset Over the City" height=350px; />

        </div>
        <div class="col"> <img src="image\inscence.png" class="d-block w-100" alt="Sunset Over the City"
                height=350px; />
        </div>

    </div>
    <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <div class="col" style="">Pooja Bell</div>
            <div class="col">Pooja Diya</div>
            <div class="col">Pooja Thali</div>
            <div class="col">Incense stands</div>
        </div>
    </div>
</div>

<hr>
<!--  ============================================= new added carousel============================ -->
<?php include("main.php"); ?>

<!-- ===========================================about us ================================================= -->
<div class="container mb-5" id="aboutus">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-3 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden" data-aos="zoom-in"
                                data-aos-duration="3000">
                                <img src="image\inscence.png" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden" data-aos="zoom-in"
                                data-aos-duration="3000">
                                <img src="image\poojathali.jpg" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden" data-aos="zoom-in"
                                data-aos-duration="3000">
                                <img src="image\bells.jpg" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end col-->

        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
            data-aos-duration="2000">
            <div class="section-title ml-lg-5">
                <h2 class="text-custom font-weight-normal mb-3" style="color:red;">About Us</h2>
                <h4 class="title mb-4">
                    Our mission is to <br />
                    make your life easier.
                </h4>
                <h2 style="color:red">Pooja.com<h2>
                        <h4 class="text-muted mb-0">Brings you the best pooja experience with our best services
                            and make
                            your life more delight and joyfull. </h4>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--enr row-->
</div>

<!-- ====================================================================about us end ===================================== -->

<a href="https://web.whatsapp.com/" class="float" target="_blank">
    <i class="fa fa-whatsapp fa-x my-float"></i>
</a>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>