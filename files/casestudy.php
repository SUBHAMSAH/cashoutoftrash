<?php ob_start(); ?><?php  include("init.php");  ?><!DOCTYPE html PUBLIC "" ""><HTML
lang="en"><HEAD>     <!-- Basic Page Needs
    ================================================== -->

<META charset="utf-8">
<META http-equiv="X-UA-Compatible" content="IE=edge">
<TITLE>CASHOUTOFTRASH</TITLE>
<META name="GENERATOR" content="WDL-Website-Builder">     <!-- Mobile Specific Metas
    ================================================== -->

<META name="viewport" content="width=device-width, initial-scale=1">     <!-- CSS
    ================================================== -->
          <!-- Bootstrap css file-->     <LINK href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->     <LINK href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->     <LINK href="css/superslides.css" rel="stylesheet">
    <!-- Slick slider css file -->     <LINK href="css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->     <LINK href="https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css"
rel="stylesheet prefetch">      <!-- smooth animate css file -->     <LINK href="css/animate.css"
rel="stylesheet">     <!-- preloader -->     <LINK href="css/queryLoader.css"
rel="stylesheet" type="text/css">     <!-- gallery slider css -->     <LINK
href="css/jquery.tosrus.all.css" rel="stylesheet" type="text/css" media="all">
     <!-- Default Theme css file -->    <LINK id="switcher" href="css/themes/default-theme.css"
rel="stylesheet">     <!-- Main structure css file -->     <LINK href="style.css"
rel="stylesheet">   <!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->

<SCRIPT src="js3/cufon-yui.js" type="text/javascript"></SCRIPT>

<SCRIPT src="js3/georgia.js" type="text/javascript"></SCRIPT>

<SCRIPT src="js3/cuf_run.js" type="text/javascript"></SCRIPT>
            <!-- Google fonts -->     <LINK href="http://fonts.googleapis.com/css?family=Merriweather"
rel="stylesheet" type="text/css">       <LINK href="http://fonts.googleapis.com/css?family=Varela"
rel="stylesheet" type="text/css">        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<STYLE>
.message {
  margin: 15px 0 0;
  color: #4CAF50;
  font-size: 15px;
}
.mov{
	position:relative;
	left:400px;
}

</STYLE>
	         </HEAD>
<BODY><!-- SCROLL TOP BUTTON -->     <A class="scrollToTop" href="#"></A>     <!-- END SCROLL TOP BUTTON -->
    <!--=========== BEGIN HEADER SECTION ================-->     <HEADER id="header"><!-- BEGIN MENU -->

<DIV class="menu_area"><NAV class="navbar navbar-default navbar-fixed-top" role="navigation">
<DIV class="container">
<DIV class="navbar-header"><!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
  <BUTTON class="navbar-toggle collapsed" aria-expanded="false" aria-controls="navbar"
type="button" data-toggle="collapse" data-target="#navbar"><SPAN
class="sr-only">Toggle navigation</SPAN>                 <SPAN
class="icon-bar"></SPAN><SPAN class="icon-bar"></SPAN><SPAN
class="icon-bar"></SPAN></BUTTON>               <!-- LOGO -->               <!-- TEXT BASED LOGO -->
              <A class="navbar-brand" href="index.html">CASH OUT <SPAN>OF
 TRASH</SPAN></A>                          <!-- IMG BASED LOGO  -->
  <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->
                                         </DIV>
<DIV class="navbar-collapse collapse" id="navbar">
<UL class="nav navbar-nav navbar-right main-nav" id="top-menu"><?php


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
    <LI><A href="casestudy.php">Case Studies</A></LI></UL></LI></UL></DIV><!--/<!--/.nav-collapse -->
          </DIV></NAV></DIV>       <!-- END MENU -->        </HEADER>     <!--=========== END HEADER SECTION ================-->
    <!--=========== BEGIN COURSE BANNER SECTION ================-->     <SECTION
src="">
<H2>Events Archive</H2></SECTION><!--=========== END COURSE BANNER SECTION ================-->
        <!--=========== BEGIN COURSE BANNER SECTION ================-->
<SECTION id="courseArchive">
<DIV class="container">
<DIV class="row"><!-- start course content -->
<H1 class="col-md-12 mov">CASE STUDIES</H1></DIV></DIV>
<DIV class="container">
<DIV class="row featurette">
<DIV class="col-md-7 col-md-push-5">
<P class="lead">
</P>
<P class="lead">All talking but no reality is of no use for the people of this era.
This is the era of facts and data. Even if a project has a very good content, scope and use but doesn't provide a reality check is useless.
<BR/>We at Cash Out Of Trash bring to you the best case studies related to the upcoming technical advances and scope of development with respect to the Smart Cities.
<BR/>These are some of the Case Studies on different perspectives of Smart Cities by the leading technical, manufacturing and services companies of the world.
Please have a look on what these Pioneers in the field of development have to say.</P>
<P class="lead">i.	Approaches to Urban Planning - by IBM<br/><A href="Approaches to Urban Planning- IBM.pdf">Download  pdf</A><br/>
ii.	Perspectives on Intelligent Cities - by Accenture<br/><A href="Perspectives on Intelligent Cities- Accenture.pdf">Download  pdf</A><br/>
iii.	Role of IT in Smart Cities - by CISCO<br/><A href="Role of IT in Smart Cities- CISCO.pdf">Download  pdf</A><br/>
</P>
</DIV>
<DIV class="col-md-5 col-md-pull-7"><IMG class="featurette-image img-responsive center-block"
alt="Generic placeholder image" src="img/waste.jpg"></DIV></DIV><!-- End course content -->
          <!-- start course archive sidebar -->                   <!-- start course archive sidebar -->
        </DIV></SECTION>	      <!--=========== END COURSE BANNER SECTION ================-->
        <!--=========== BEGIN FOOTER SECTION ================-->     <FOOTER id="footer"><!-- Start footer top area -->

<DIV class="footer_top">
<DIV class="container">
<DIV class="row">
<DIV class="col-ld-3  col-md-3 col-sm-3">
<DIV class="single_footer_widget">
<H3>About Us</H3>
<P>We are the 'CASH OUT OF TRASH' community.We aim to aware people on how to
 generate income from their waste or use their waste to genenrate income.We even
  sell eco-friendly products on our website to encourage the use of
 ecoproducts.</P></DIV>             </DIV>
<DIV class="col-ld-3  col-md-3 col-sm-3">
<DIV class="single_footer_widget">
<H3>Community</H3>
<UL class="footer_widget_nav">
  <LI><A href="#">Our Tutors</A></LI>
  <LI><A href="#">Our Team</A></LI>
  <LI><A href="#">News &amp; Media</A></LI></UL></DIV>             </DIV>
<DIV class="col-ld-3  col-md-3 col-sm-3">
<DIV class="single_footer_widget">
<H3>Others</H3>
<UL class="footer_widget_nav">
  <LI><A href="#">Contact Us</A></LI>
  <LI><A href="#">Donate</A></LI>
  <LI><A href="#">Organise Camp</A></LI></UL></DIV>             </DIV>
<DIV class="col-ld-3  col-md-3 col-sm-3">
<DIV class="single_footer_widget">
<H3>Social Links</H3>
<UL class="footer_social">
  <LI><A title="Facebook" class="soc_tooltip" href="#" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-facebook"></I></A></LI>
  <LI><A title="Twitter" class="soc_tooltip" href="#" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-twitter"></I></A></LI>
  <LI><A title="Google+" class="soc_tooltip" href="#" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-google-plus"></I></A></LI>
  <LI><A title="Linkedin" class="soc_tooltip" href="#" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-linkedin"></I></A></LI>
  <LI><A title="Youtube" class="soc_tooltip" href="#" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-youtube"></I></A></LI></UL></DIV>
  </DIV></DIV></DIV></DIV>       <!-- End footer top area -->       <!-- Start footer bottom area -->
           <!-- End footer bottom area -->     </FOOTER>     <!--=========== END FOOTER SECTION ================-->
      <!-- Javascript Files
    ================================================== -->
    <!-- initialize jQuery Library -->
<SCRIPT src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></SCRIPT>
            <!-- Preloader js file -->
<SCRIPT src="js/queryloader2.min.js" type="text/javascript"></SCRIPT>
            <!-- For smooth animatin  -->
<SCRIPT src="js/wow.min.js"></SCRIPT>
             <!-- Bootstrap js -->
<SCRIPT src="js/bootstrap.min.js"></SCRIPT>
            <!-- slick slider -->
<SCRIPT src="js/slick.min.js"></SCRIPT>
            <!-- superslides slider -->
<SCRIPT src="js/jquery.easing.1.3.js"></SCRIPT>

<SCRIPT src="js/jquery.animate-enhanced.min.js"></SCRIPT>

<SCRIPT src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></SCRIPT>
              <!-- for circle counter -->
<SCRIPT src="https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js"></SCRIPT>
            <!-- Gallery slider -->
<SCRIPT language="javascript" src="js/jquery.tosrus.min.all.js" type="text/javascript"></SCRIPT>
                 <!-- Custom js-->
<SCRIPT src="js/custom.js"></SCRIPT>
          <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->
  </BODY></HTML>

