<?php
include("admin/config/dbcon.php");
$qry = "select * from pandit where status='accept'";
$result = $con->query($qry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assest\css\main.css" />
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/29a66b8514.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="popular_courses">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h1 class="mb-3 text-center">Our Pandit</12>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel active_course owl-loaded owl-drag">
            <div class="owl-stage-outer">
              <div class="owl-stage" style="
                    transform: translate3d(-1520px, 0px, 0px);
                    transition: all 1.5s ease 0s;
                    width: 3420px;
                  ">
                <?php while ($row = $result->fetch_assoc()): ?>
                  <div class="owl-item cloned" style="width: 350px; margin-right: 30px">
                    <div class="single_course">
                      <div class="course_head">
                        <a href="pills.php?id=<?= $row['pid'] ?>"><img class="img-fluid" src="<?= 'image/' . $row['pimage']; ?>" alt="" /></a>
                      </div>
                      <div class="course_content">
                        <span class="tag mb-4 d-inline-block">Pandit</span>
                        <h4 class="mb-3">
                          <a href="pills.php?id=<?= $row['pid'] ?>">
                            <?= $row['fname'] . " " . $row['lname']; ?>
                          </a>
                        </h4>
                        <p>
                          One make creepeth man bearing their one firmament
                          won't fowl meat over sea
                        </p>
                        <div
                          class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            <i class="fa fa-envelope fa-duotone fa-shake fa-2x"
                              style="--fa-primary-color: #d12e11; --fa-secondary-color: #e25050;"></i>
                            <span class=" d-inline-block">
                              <?= $row['email'] ?>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assest\js\main.js"></script>
</body>

</html>