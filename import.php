<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Import & Export | CIKO & AKO NIGERIA ENTERPRISES LIMITED</title>
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
   <section class="w3l-about-breadcrumb position-relative text-center"  style="background: url(assets/images/imp.jpg) no-repeat;">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title" style= "text-transform: uppercase;"><b>Import & Export</b></h2>
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
							
							<h3 class="hny-title">Import & Export</h3>
						</div>
						<p class="mt-3">Nigeria is endowed with a lot of natural resources that makes export very lucrative for the few that are into it.</p>

                        <p class="mt-3">For decades, crude oil, which rakes in billions of dollars annually, has continued to be the country’s major revenue earner.</p>

                        <p class="mt-3">But the instability in its global price and anxiety over how long we shall continue to depend on a single product as major revenue earner, has fueled the need for diversification, hence the attention to Non-Oil Export.</p>

                        <p class="mt-3">It is worth ensuring that the goods you are exporting are allowable for import. Used tyres, soap, cassava, fruit juice in retail packs and used vehicles over 10 years old are all among some of the currently banned items.</p>

						
					</div>
					<div class="col-lg-6 mt-5 pl-lg-4">
						<img src="assets/images/ab6.jpg" alt="" class="img-fluid">
					</div>


				    </div>
                       

                        

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