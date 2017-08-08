<?php ob_start(); ?>
<?php  include("init.php");  ?>



<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>CASHOUTOFTRASH</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
   <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.message {
  margin: 15px 0 0;
  color: #4CAF50;
  font-size: 15px;
}

</style>
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html">CASH OUT <span>OF TRASH</span></a>
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->

            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <?php


				$query="SELECT * FROM head_categories";
				$select_all_category=mysqli_query($connection,$query);

				while($row=mysqli_fetch_assoc($select_all_category)){
				$cat_name=$row['cat_name'];
				$cat_address=$row['cat_addrss'];
				echo "<li><a href={$cat_address}>{$cat_name}</a></li>";
				}
				?>
				<LI class="dropdown"><A class="dropdown-toggle" role="button" aria-expanded="false"
				  href="#" data-toggle="dropdown">SmartCity<SPAN class="caret"></SPAN></A>
				  <UL class="dropdown-menu" role="menu">
				    <LI><A href="education.php">Smart Education</A></LI>
				    <LI><A href="environment.php">Smart Environment</A></LI>
				    <LI><A href="governance.php">E-governance</A></LI>
				    <LI><A href="health.php">Smart Health</A></LI>
				    <LI><A href="living.php">Smart Living</A></LI>
				    <LI><A href="waste.php">E-Waste Management</A></LI>
				    <LI><A href="water.php">E-Water Management</A></LI>
				    <LI><A href="transportation.php">Smart Transportation</A></LI>
    <LI><A href="casestudy.php">Case Studies</A></LI></UL></LI>
              </ul>
            </div><!--/<!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section src="">
      <h2>Events Archive</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
    <?php
						if(isset($_GET['source'])){
							$source=$_GET['source'];

						}else{
							$source='';
						}
						switch($source){
							case 'course-single';
							include "single_archivetry.php";
							break;
							case 'edit_post';
							include "edit_posttry.php";
							break;
							case 'admin';
							include "admin_try.php";
							break;
							default:
							include "event_archivetry.php";
						}
						?>

          <!-- End course content -->


          <!--<div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar
              <div class="single_sidebar">
                 <div class="well">

                    <h4>To add or edit blog,login:</h4>
					<h4>include php sign around this activate_user()</h4>
					<h4> include php sign around this validate_user_login()</h4>
					<form action="" method="post">

                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Enter email">

                    </div>
					<div class="input-group">
                        <input name="password" type="password" class="form-control" placeholder="Enter Password">
                        <span class="input-group-btn">
						<button class="btn btn-primary" name="login" type="submit">Submit</button>
						</span>

                    </div>
					<!--<div class="input-group">
					<br>
					<input type="checkbox">Remember Me
					                    </div>
					<div class="form-group">
					<br>
					 <p >Not registered ? <a href="registration.php" class="message">Create an account</a></p>

					</div>
					<div class="form-group">

					 <p >Forgot Password? <a href="recover.php" class="message">Recover</a></p>

					</div>
					</form>

                </div>

              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <!--<div class="single_sidebar">
                <h2>Category <span class="fa fa-angle-double-right"></span></h2>
                <ul>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Fashion</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Games</a></li>
                </ul>
              </div>-->
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <!--<div class="single_sidebar">
                <h2>Tags <span class="fa fa-angle-double-right"></span></h2>
                <ul class="tags_nav">
                  <li><a href="#"><i class="fa fa-tags"></i>Creative</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>News</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Technology</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Art</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>Audio</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>video</a></li>
                </ul>
              </div>-->
              <!-- End single sidebar -->
              <!-- start single sidebar -->
             <!--  <div class="single_sidebar">
                <h2>Sponsor Add <span class="fa fa-angle-double-right"></span></h2>
                <a class="side_add" href="#"><img src="img/side-add.jpg" alt="img"></a>
              </div>

            </div>
          </div>-->






          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>

    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
                <p>We are the 'CASH OUT OF TRASH' community.We aim to aware people on how to generate income from their waste or use their waste to genenrate income.We even sell eco-friendly products on our website to encourage the use of ecoproducts.</p>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Community</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Our Tutors</a></li>

                  <li><a href="#">Our Team</a></li>

                  <li><a href="#">News &amp; Media</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Others</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Donate</a></li>
                  <li><a href="#">Organise Camp</a></li>

                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->

      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================-->



    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
  <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

  </body>
</html>
