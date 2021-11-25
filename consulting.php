<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Consulting | CIKO & AKO NIGERIA ENTERPRISES LIMITED</title>
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
   <section class="w3l-about-breadcrumb position-relative text-center"  style="background: url(assets/images/consu.jpg) no-repeat;">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title" style= "text-transform: uppercase;"><b>Consulting</b></h2>
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
							
							<h3 class="hny-title">Consulting</h3>
						</div>
						<p class="mt-3"><b>We strive for world-shaping client impact.</b> <br>
                        We are the trusted advisor and counselor to many of the most influential businesses and institutions in the world.</p>

                        <p class="mt-3">We work with leading organizations across the private, public and social sectors. Our scale, scope, and knowledge allow us to address problems that no one else can. We have deep functional and industry expertise as well as breadth of geographical reach.</p>

                        <p class="mt-3">We are passionate about taking on immense challenges that matter to our clients and, often, to the world.</p>

                        <p class="mt-3">We work with our clients as we do with our colleagues. We build their capabilities and leadership skills at every level and every opportunity.</p>

						
					</div>
					<div class="col-lg-6 mt-5 pl-lg-4">
						<img src="assets/images/ab5.jpg" alt="" class="img-fluid">
					</div>


				    </div>
                        <p class="mt-3">We do this to help build internal support, get to real issues, and reach practical recommendations. We bring out the capabilities of clients to fully participate in the process and lead the ongoing work.</p>

                        <p class="mt-3">Our mission is to help our clients make distinctive, lasting, and substantial improvements in their performance and to build a great firm that attracts, develops, excites, and retains exceptional people. For all of our engagements we are committed to providing the highest quality work, providing mentoring to teams that we work with and maintaining a high ethical standard.</p>

                        <p class="mt-3"><b>Technical Strategy.</b> <br>
                        CIKO & AKO has years of experience in all aspects of enterprise architecture planning, including technology roadmaps, platform recommendations, process reengineering and in-house versus package solutions. Based on your needs, we can audit your current technical situation and provide a strategy paper and high-level design that you can take to us or any other consultancy to build out your next generation solutions.</p>

                        <p class="mt-3"><b>Focused, iterative projects.</b> <br>
                        Projects with a clearly stated goal are set up for success. Projects that deliver results early and often help manage risk, can be clearly measured against goals and milestones, and provide better time to market.</p>

                        <p class="mt-3">CIKO & AKO, with the help a client's executive sponsor, helps keep projects focused and on track We will propose and execute projects that are aligned with your needs and objectives, not our needs and objectives.</p>

                        <p class="mt-3"><b>Smaller, highly experienced teams.</b> <br>
                        As a team grows, so does the communication overhead; less experienced consultants need more management, and are more prone to making costly mistakes.</p>

                        <p class="mt-3">Our small teams of highly experienced consultants can create more with less risk, and at a lower total cost than a larger group of less experienced consultants.</p>

                        

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