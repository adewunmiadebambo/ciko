<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Construction | CIKO & AKO NIGERIA ENTERPRISES LIMITED</title>
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
   <section class="w3l-about-breadcrumb position-relative text-center"  style="background: url(assets/images/cons.jpg) no-repeat;">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title" style= "text-transform: uppercase;"><b>Construction</b></h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="index.php">Home</a></li>
        </ul>
      </div>
    </div>
  </section>


  <section class="w3l-content-6">
		
		<div class="content-6-mian py-5">
			<div class="container py-lg-5">
				<div class="content-info-in row">
					<div class="col-lg-6 mt-5 about-right-faq align-self order2">
						<div class="title-content text-left mb-2">
							
							<h3 class="hny-title">Construction</h3>
						</div>
						<p class="mt-3">CIKO & AKO is one of the most experienced and respected building and civil construction firms in the Nigeria. we have been transforming the ideas and visions of our clients into award-winning projects. We build with the intention of exceeding our clients' expectations for safety, quality, functionality, and aesthetics, and deliver finished products that stand the test of time.</p>

                        <p class="mt-3">We offer a standardized concept in construction; this concept-strategy guarantees a high level of flexibility. Your possibilities are almost endless.</p>

                        <p class="mt-3">Industrial buildings, industrial hangars, storage room, airplane hangars, agricultural sheds, showrooms, office buildings, riding schools or riding arenas, the prefabricated industrial buildings.</p>

						
					</div>
					<div class="col-lg-6 mt-5 pl-lg-4">
						<img src="assets/images/ab1.jpg" alt="" class="img-fluid">
					</div>


				    </div>
                        <p class="mt-3">Nigerian owned and operated since 2000, we have grown from a small local excavator into one of the most capable and trusted providers of construction services. As one of the nation's most established firms, we have a long-term perspective that is invaluable in our industry.</p>

                        <p class="mt-3">We pride ourselves on being a local builder with national reach, Our presence today is larger than ever before, we are deeply rooted in the communities where we build and live.</p>

                        <p class="mt-3">Our portfolio features projects of all sizes and levels of complexity — from intricate interior renovations to some of the most complex civil operations in the country; we can build it all — and we do. CIKO & AKO breadth of capabilities ensures that we are able to meet our clients' needs every time, on every front.</p>

                        <p class="mt-3">But, more than our extensive portfolio, what truly set us apart from our competition is our people. Their dedication to providing world-class service to our clients, resolve for delivering exceptional work, capacity for innovation and problem solving, and unwavering commitment to improving the communities we serve, not only make CIKO & AKO a great place to work, but a company with which our clients want to work.</p>
			        </div>
	</section>
 

	<!-- //content-6-section -->

	<!--//content-5-->
	
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