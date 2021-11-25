<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Business Development | CIKO & AKO NIGERIA ENTERPRISES LIMITED</title>
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
   <section class="w3l-about-breadcrumb position-relative text-center"  style="background: url(assets/images/dev.jpg) no-repeat;">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title" style= "text-transform: uppercase;"><b>Business Development</b></h2>
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
							
							<h3 class="hny-title">Business Development</h3>
						</div>
						<p class="mt-3">We Provide advisory and technical services that business needs in today's market— Developing process, application analysis, styling and marketing strategy for your company.</p>

                        <p class="mt-3">We are meticulous about the presentation of your products or services; and we understand how important the internet is to the top and bottom line of your business. Our goal is not to simply create a website.</p>

                        <p class="mt-3">We want to carve a business platform that is completely unique, improves your work flow processes, reduces paperwork, appeals to your target audience, and becomes the foundation for an expedited growth.</p>

                        <p class="mt-3">We also provide a vast array of technical assistance to small businesses and aspiring entrepreneurs. By supporting business growth, sustainability and enhancing the creation of new businesses entities.</p>

						
					</div>
					<div class="col-lg-6 mt-5 pl-lg-4">
						<img src="assets/images/ab4.jpg" alt="" class="img-fluid">
					</div>


				    </div>
                        <p class="mt-3">We foster local and regional economic development through job creation and retention. As a result of the no cost, extensive, one-on-one, long-term professional business advising.</p>

                        <p class="mt-3">We provide services through professional business advisors such as: development of business plans; manufacturing assistance; financial packaging and lending assistance; exporting and importing support; disaster recovery assistance; procurement and contracting aid; market research services.</p>

                        <p class="mt-3">Providing advisory and technical services that business needs in today's market—developing process, application analysis, styling and marketing strategy for your company.</p>

                        <p class="mt-3">We are meticulous about the presentation of your products or services; and we understand how important the internet is to the top and bottom line of your business. Our goal is not to simply create a website.</p>

                        <p class="mt-3">We want to carve a business platform that is completely unique, improves your work flow processes, reduces paperwork, appeals to your target audience, and becomes the foundation for an expedited growth.</p>

                        <p class="mt-3">CIKO & AKO provides outside advisory and consulting services from a real-world aspect for growing your top and bottom lines. We will challenge your management and critical staff to determine and develop improved processes and flow in your business.</p>

                        <p class="mt-3">We work with Sales and Marketing to review current methods, pertaining to your key accounts. We help define new markets for a very conservative view of attainable sales that will better define your current budget and five-year growth. Phase 2 in the process of market development will be critical support for assessment and observation feedback to ensure that processes stay on track and consumer potential growth.</p>

                        

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