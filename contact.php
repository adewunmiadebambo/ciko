<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Contact | CIKO & AKO NIGERIA ENTERPRISES LIMITED</title>
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="icon" href="assets/images/ico.png" />
  <!-- Template CSS -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V31TGWPTLG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V31TGWPTLG');
</script>
</head>

<body>
  <!--header-->
  <?php include ("menu.php") ; ?>
  <!--/header-->
   <!-- about breadcrumb -->
   <section class="w3l-about-breadcrumb position-relative text-center"  style="background: url(assets/images/cont.jpg) no-repeat;">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title" style= "text-transform: uppercase;"><b>Contact Us</b></h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="index.php">Home</a></li>
          <!-- <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Contact </li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <section class="w3l-contact-11">
		<div class="form-41-mian py-5">
			<div class="container py-lg-4">
			  <div class="row align-form-map">
				<div class="col-lg-6 contact-left pr-lg-4" >
					<div class="partners">
					  <div class="cont-details">
						<div class="title-content text-left" >
							<h6 class="sub-title">Contact Us</h6>
							<h3 class="hny-title">Get In Touch</h3>
						</div>
						<p class="mt-3 mb-4 pr-lg-5">We are available 24/7 by e-mail or by phone.</p>
						<h6 class="mb-4"> For more info or inquiry about our projects, please feel free to get in touch with us.</h6>
					  </div>
					  <div class="hours">
						<h6 class="mt-4">Email:</h6>
						<p> <a href="mailto:info@cikoako.com">
            info@cikoako.com</a></p>
            <p> <a href="mailto:services@cikoako.com">
            services@cikoako.com</a></p>
						<!-- <h6 class="mt-4">Address (Lekki)</h6>
						<p> 14A Chris Madueke drive, Off 14 road Lekki Phase 1, Lekki, Lagos.</p>
            <h6 class="mt-4">Address (Surulere)</h6>
            <p>12 Itire road, Surulere, Lagos.</p> -->
						<h6 class="mt-4">Tel: Nigeria</h6>
						<p class="margin-top"><a href="tel:+234 704 778 5136">+234 704 778 5136</a></p>
            <p class="margin-top"><a href="tel:+234 813 966 9889">+234 813 966 9889</a></p>
            <h6 class="mt-4">Tel: North America</h6>
						<p class="margin-top"><a href="tel:+1-780-666-3807">+1-780-666-3807</a></p>
					  </div>
					</div>
				  </div>
				<div class="col-lg-6 form-inner-cont">
					<div class="title-content text-left">
						<h3 class="hny-title mb-lg-5 mb-4">Send Us A Message</h3>
					</div>
				  <form action="proc-contact.php" method="post" class="signin-form">
          <?php if($msg)
          {
              echo '<div class="text-success"><i class="fa fa-check"></i> '.$msg.'</div>';
          }
          ?>
					<div class="form-input">
					  <input type="text" name="name" id="w3lName" placeholder="Name" />
					</div>
					<div class="row con-two">
					<div class="col-lg-6 form-input">
					  <input type="email" name="email" id="w3lSender" placeholder="Email" required="" />
					</div>
					<div class="col-lg-6 form-input">
						<input type="text" name="subect" placeholder="Subject" class="contact-input" />
					</div>
					</div>
					<div class="form-input">
					  <textarea placeholder="message" name="w3lMessage" id="w3lMessage" required=""></textarea>
					</div>
					<div class="submit-button text-lg-right">
					   <button type="submit" class="btn btn-style">Submit</button>
				    </div>
				  </form>
				</div>
			  </div>
			</div>
		  </div>
		  <!-- <div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6368675848953!2d3.4602958147702862!3d6.440656595340315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf454e2ace80f%3A0xf4a6378433f03feb!2sCiko%20%26%20Ako%20Nigeria%20Ltd.!5e0!3m2!1sen!2sng!4v1622740922605!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		  </div> -->
	  </section>
	<!-- //contact-form -->
  <!-- footer-66 -->
  <?php include ("footer.php") ; ?>
      <!-- copyright -->
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-long-arrow-up" aria-hidden="true"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->

    </section>
  </footer>
  <!--//footer-66 -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>