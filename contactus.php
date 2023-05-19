<?php
include("includes/header.php");
include("includes/navbar.php");
if (isset($_POST['btnsubmit'])) {

  $to = "harnilkadia99@gmail.com";
  $sub = "Contact Us";
  $body = '<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
    
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width,initial-scale=1" />
      <meta name="x-apple-disable-message-reformatting" />
      <title></title>
      <!--[if mso]>
          <noscript>
            <xml>
              <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
              </o:OfficeDocumentSettings>
            </xml>
          </noscript>
        <![endif]-->
      <style>
        table,
        td,
        div,
        h1,
        p {
          font-family: Arial, sans-serif;
        }
      </style>
    </head>
    
    <body style="margin: 0; padding: 0">
      <table role="presentation" style="
            width: 100%;
            border-collapse: collapse;
            border: 0;
            border-spacing: 0;
            background: #ffffff;
          ">
        <tr>
          <td align="center" style="padding: 0">
            <table role="presentation" style="
                  width: 602px;
                  border-collapse: collapse;
                  border: 1px solid #cccccc;
                  border-spacing: 0;
                  text-align: left;
                ">
              <tr>
                <td align="center" style="padding: 20px 0 20px 0; background: #e2e7e8">
                <h2 class="p-2 text-danger">Pooja.com</h2>
                </td>
              </tr>
              <tr>
                <td style="padding: 36px 30px 42px 30px">
                  <table role="presentation" style="
                        width: 100%;
                        border-collapse: collapse;
                        border: 0;
                        border-spacing: 0;
                      ">
                    <tr>
                      <td style="padding: 0 0 36px 0; color: #153643">
                        <h1 style="
                              font-size: 24px;
                              margin: 0 0 20px 0;
                              font-family: Arial, sans-serif;
                            ">
                          Creating Email Magic
                        </h1>
    
                        <p><span>Name:</span>' . "$_POST[txtname]" . '</p>
                        <p><span>Email:</span>' . "$_POST[txtemail]" . '</p>
                        <p><span>Mobileno:</span>' . "$_POST[txtmobile]" . '</p>
                        <p><span>Message:</span>' . "$_POST[txtmessage]" . '</p>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding: 0">
                        <table role="presentation" style="
                              width: 100%;
                              border-collapse: collapse;
                              border: 0;
                              border-spacing: 0;
                            ">
                          <tr>
                            <td style="
                                  width: 260px;
                                  padding: 0;
                                  vertical-align: top;
                                  color: #153643;
                                ">
                              <p style="
                                    margin: 0 0 25px 0;
                                    font-size: 16px;
                                    line-height: 24px;
                                    font-family: Arial, sans-serif;
                                  "></p>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px; background: #e2e7e8">
                  <table role="presentation" style="
                        width: 100%;
                        border-collapse: collapse;
                        border: 0;
                        border-spacing: 0;
                        font-size: 9px;
                        font-family: Arial, sans-serif;
                      ">
                    <tr>
                      <td style="padding: 0; width: 50%" align="left">
                        <p style="
                              margin: 0;
                              font-size: 14px;
                              line-height: 16px;
                              font-family: Arial, sans-serif;
                              color: #df6969;
                            ">
                          &reg; Someone, Somewhere 2021<br /><a href="http://www.example.com"
                            style="color: #df4f4f; text-decoration: underline">Unsubscribe</a>
                        </p>
                      </td>
                      <td style="padding: 0; width: 50%" align="right">
                        <table role="presentation" style="
                              border-collapse: collapse;
                              border: 0;
                              border-spacing: 0;
                            ">
                          <tr>
                            <td style="padding: 0 0 0 10px; width: 38px">
                              <a href="http://www.twitter.com/" style="color: #c55656"><img
                                  src="https://assets.codepen.io/210284/tw_1.png" alt="Twitter" width="38"
                                  style="height: auto; display: block; border: 0" /></a>
                            </td>
                            <td style="padding: 0 0 0 10px; width: 38px">
                              <a href="http://www.facebook.com/" style="color: #ffffff"><img
                                  src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38"
                                  style="height: auto; display: block; border: 0" /></a>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </body>
    
    </html>';
  $header = array(
    'From' => 'harnilkadia99@gmail.com',
    'MIME-Versio' => '1.0',
    'Content-type' => 'text/html; charset=iso-8859-1'
  );
  if (mail($to, $sub, $body, $header)) {
    echo "
        <script>
        alert('Mail sent successfully.......');
        </script>
        ";
  }
}
?>


<section class="ftco-section ">
  <div class="container mx-">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center mb-5">
        <h1 style="color:red; text-decoration: underline;">Contact Us</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="wrapper">
          <div class="row no-gutters mb-5">
            <div class="col-md-6">
              <div class="contact-wrap w-100 p-md-5 p-4">
                <h3 class="mb-4">Contact Us</h3>
                <div id="form-message-warning" class="mb-4"></div>
                <div id="form-message-success" class="mb-4">
                  Your message was sent, thank you!
                </div>
                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="label" for="name">Full Name</label>
                        <input type="text" class="form-control" name="txtname" id="name" placeholder="Name" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="label" for="email">Email Address</label>
                        <input type="email" class="form-control" name="txtemail" id="email" placeholder="Email"
                          required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="mobile">Mobile No</label>
                        <input type="text" class="form-control" name="txtmobile" id="mobile" placeholder="mobile"
                          required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="#">Message</label>
                        <textarea class="form-control" name="txtmessage" id="message" cols="30" rows="4"
                          placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <button class="btn btn-danger" name="btnsubmit" value="submit">Submit</button>
                        <div class="submitting"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-5 d-flex align-items-stretch">
              <div id="map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.3467468217195!2d72.53128717443255!3d23.04774591538998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84a538c7ede3%3A0xb31c13f9dbf13b9d!2sRaju%20Complex%2C%20Gurukul%20Rd%2C%20Memnagar%2C%20Ahmedabad%2C%20Gujarat%20380052!5e0!3m2!1sen!2sin!4v1682302051075!5m2!1sen!2sin"
                  width="600" height="570" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-map-marker"></span>
                </div>
                <div class="text">
                  <p><span>Address:</span> Raju Complex
                    Gurukul Rd, Memnagar, Ahmedabad, Gujarat 380052
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-phone"></span>
                </div>
                <div class="text">
                  <p><span>Phone:</span> <a href="tel://1234567920">+91 7069285585</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text">
                  <p><span>Email:</span> <a href="mailto:salesforcearyan@gmail.com">pooja.com@gmail.com</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-globe"></span>
                </div>
                <div class="text">
                  <p><span>Website</span> <a href="">pooja.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include("includes/scripts.php"); ?>

<?php include("includes/footer.php"); ?>