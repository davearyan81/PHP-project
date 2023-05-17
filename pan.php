<?php
include("admin/config/dbcon.php");
if (isset($_POST['pooja_id'])) {
  $qry = "SELECT * FROM ((`poojapandit` INNER JOIN `pandit` ON poojapandit.pid=pandit.pid) 
INNER JOIN `pooja` ON poojapandit.poojaid=pooja.poojaid) WHERE pooja.poojaid='$_POST[pooja_id]'";
  $result = $con->query($qry);
  $count = mysqli_num_rows($result);
  // echo $_POST['pooja_id'];
  $output = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
    <style>
    body{
        background:#f5f5f5;
        margin-top:20px;}
    
    /* ===== Career ===== */
    .career-form {
      background-color: #4e63d7;
      border-radius: 5px;
      padding: 0 16px;
    }
    
    .career-form .form-control {
      background-color: rgba(255, 255, 255, 0.2);
      border: 0;
      padding: 12px 15px;
      color: #fff;
    }
    
    .career-form .form-control::-webkit-input-placeholder {
      /* Chrome/Opera/Safari */
      color: #fff;
    }
    
    .career-form .form-control::-moz-placeholder {
      /* Firefox 19+ */
      color: #fff;
    }
    
    .career-form .form-control:-ms-input-placeholder {
      /* IE 10+ */
      color: #fff;
    }
    
    .career-form .form-control:-moz-placeholder {
      /* Firefox 18- */
      color: #fff;
    }
    
    .career-form .custom-select {
      background-color: rgba(255, 255, 255, 0.2);
      border: 0;
      padding: 12px 15px;
      color: #fff;
      width: 100%;
      border-radius: 5px;
      text-align: left;
      height: auto;
      background-image: none;
    }
    
    .career-form .custom-select:focus {
      -webkit-box-shadow: none;
              box-shadow: none;
    }
    
    .career-form .select-container {
      position: relative;
    }
    
    .career-form .select-container:before {
      position: absolute;
      right: 15px;
      top: calc(50% - 14px);
      font-size: 18px;
      color: #ffffff;
      content: "\F2F9";
      font-family: "Material-Design-Iconic-Font";
    }
    
    .filter-result .job-box {
      -webkit-box-shadow: 10px 10px 35px 0 rgba(130, 130, 130, 0.2);
              box-shadow: 10px 10px 35px 0 rgba(130, 130, 130, 0.2);
      border-radius: 10px;
      padding: 10px 35px;
    }
    
    ul {
      list-style: none; 
    }
    
    .list-disk li {
      list-style: none;
      margin-bottom: 12px;
    }
    
    .list-disk li:last-child {
      margin-bottom: 0;
    }
    
    .img-holder img {
      height: 65px;
      width: 65px;
      font-family: "Open Sans", sans-serif;
      color: #fff;
      font-size: 22px;
      font-weight: 700;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      border-radius: 65px;
    }
    
    .career-title {
      background-color: #4e63d7;
      color: #fff;
      padding: 15px;
      text-align: center;
      border-radius: 10px 10px 0 0;
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
      background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
    }
    
    .job-overview {
      -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
              box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
      border-radius: 10px;
    }
    
    @media (min-width: 992px) {
      .job-overview {
        position: -webkit-sticky;
        position: sticky;
        top: 70px;
      }
    }
    
    .job-overview .job-detail ul {
      margin-bottom: 28px;
    }
    
    .job-overview .job-detail ul li {
      opacity: 0.75;
      font-weight: 600;
      margin-bottom: 15px;
    }
    
    .job-overview .job-detail ul li i {
      font-size: 20px;
      position: relative;
      top: 1px;
    }
    
    .job-overview .overview-bottom,
    .job-overview .overview-top {
      padding: 35px;
    }
    
    .job-content ul li {
      font-weight: 600;
      opacity: 0.75;
      border-bottom: 1px solid #ccc;
      padding: 10px 5px;
    }
    
    @media (min-width: 768px) {
      .job-content ul li {
        border-bottom: 0;
        padding: 0;
      }
    }
    
    .job-content ul li i {
      font-size: 20px;
      position: relative;
      top: 1px;
    }
    .mb-30 {
        margin-bottom: 30px;
    }
    .location,.price{
        margin-right: 50px;
        margin-left: 50px;
    }
    .sp{
      margin-right: 10px;
    }
    </style>
    <div class="container">
                <div class="row">
                     <div class="col-lg-10 mx-auto mb-4">
                        <div class="section-title text-center ">
                            <h3 class="top-c-sep" style="color:red;">Avialable Purohit</h3>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="career-search mb-60">
                            <div class="filter-result">
                                <p class="mb-30 ff-montserrat">Total Job Openings : ' . "$count" . '</p>
                                ';
  while ($row = $result->fetch_assoc()) {
    $output .= '<div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                        <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                            <img src="image/' . $row["pimage"] . '" height="65px" width="65px" />
                                        </div>
                                        
                                        <div class="job-content">
                                            <h5 class="text-center text-md-left">' . "$row[fname] " . "$row[lname]" . '</h5>
                                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                <li class="mr-md-4 location">
                                                    <i class="zmdi zmdi-pin mr-2 sp"></i>' . "$row[state]" . ' 
                                                </li>
                                                <li class="mr-md-4 price">
                                                Rs.' . "$row[pprice]" . '
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <form action="booking.php" method="post">
                                      <div class="job-right my-4 flex-shrink-0">
                                        <button class="btn d-block w-100 d-sm-inline-block btn-light" name="submit" type="submit">Apply Now</button>    
                                        <input type="hidden" name="txttitile" value="' . $row["poojatitle"] . '"/>    
                                        <input type="hidden" name="txtname" value="' . $row["pid"] . '"/>    
                                      </div>
                                    </form>
                                </div>';

  }
  $output .= '</div>
                        </div>
    
                        
                    </div>
                </div>
                ';
  echo $output;
  // <a href="booking.php?id='.$row["pid"].'" class="btn d-block w-100 d-sm-inline-block btn-light">Apply now</a>
}
?>