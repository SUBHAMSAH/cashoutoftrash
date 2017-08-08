<?php include("CONNECTTODATABASE.php"); ?>
<!DOCTYPE html PUBLIC "" ""><HTML
lang="en"><HEAD>     <!--===============================================
   
    ====================================================-->
    <!-- Basic Page Needs
    ================================================== -->


<META http-equiv="X-UA-Compatible" content="IE=edge">
<TITLE>CASHOUTOFTRASH</TITLE>
<META name="GENERATOR" content="WDL-Website-Builder">     <!-- Mobile Specific Metas
    ================================================== -->

<META name="viewport" content="width=device-width, initial-scale=1">     <!-- CSS
    ================================================== -->
 <LINK href="http://fonts.googleapis.com/css?family=Merriweather"
rel="stylesheet" type="text/css">       <LINK href="http://fonts.googleapis.com/css?family=Varela"
rel="stylesheet" type="text/css"> 
          <!-- Bootstrap css file-->     <LINK href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->     <LINK href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->     <LINK href="css/superslides.css" rel="stylesheet">
    <!-- Slick slider css file -->     <LINK href="css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->     <LINK href="https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css"
rel="stylesheet prefetch">      <!-- smooth animate css file -->     <LINK href="css/animate.css"
rel="stylesheet">     <!-- preloader -->      <!-- gallery slider css -->     <LINK
href="css/jquery.tosrus.all.css" rel="stylesheet" type="text/css" media="all"
     <!-- Default Theme css file -->     <LINK id="switcher" href="css/themes/default-theme.css"
rel="stylesheet">     <!-- Main structure css file -->     <LINK href="style.css"
rel="stylesheet">   <LINK href="engine1/style.css" rel="stylesheet" type="text/css">

<style>
	.siz{
		height:550px;
	}
	</style>
<SCRIPT src="engine1/jquery.js" type="text/javascript"></SCRIPT>
          <!-- Google fonts -->           <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


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
              <A class="navbar-brand" href="index.html">CaSH OUT <SPAN>OF TRaSH</SPAN></A>                            <!-- IMG BASED LOGO  -->
    <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->
                                            </DIV>
<DIV class="navbar-collapse collapse" id="navbar">
<UL class="nav navbar-nav navbar-right main-nav" id="top-menu">
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
    <LI><A href="casestudy.php">Case Studies</A></LI></UL></LI></UL></DIV><!--/.nav-collapse -->
          </DIV></NAV></DIV>       <!-- END MENU -->        </HEADER>	     <!--=========== END HEADER SECTION ================-->
    <!--=========== BEGIN SLIDER SECTION ================-->
<br>
	<br>
	<br>
<div id="wowslider-container1">
	<div class="ws_images">
		<img src="img/download2.jpg"  width="100%" class="siz" alt="garbage-bag-1256041_1280" title="GENERATE CASH OUT OF TRASH" id="wows1_0"/>
		</div>
	</div>
<!--<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/garbagebag1256041_1280.jpg" alt="garbage-bag-1256041_1280" title="GENERATE CASH OUT OF TRASH" id="wows1_0"/></li>
		<li><img src="data1/images/cash1169650_1280.jpg" alt="cash-1169650_1280" title="SAVE TREES" id="wows1_1"/></li>
		<li><img src="data1/images/newpic.jpg" alt="newpic" title="OUR INITIATIVE TO AWARE PEOPLE" id="wows1_2"/></li>
		<li><img src="data1/images/newpic2.jpg" alt="newpic2" title="OUR WORK TO AWARE PEOPLE" id="wows1_3"/></li>
		<li><img src="data1/images/newpic3.jpg" alt="newpic3" title="RECYCLED PRODUCT" id="wows1_4"/></li>
		<li><img src="data1/images/newpic4.jpg" alt="newpic4" title="RECYCLED PRODUCT" id="wows1_5"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/43.png" alt="bootstrap carousel" title="CLEAN GAS(BIOGAS)" id="wows1_6"/></a></li>
		<li><img src="data1/images/54.jpg" alt="54" title="SAVE NATURE" id="wows1_7"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="garbage-bag-1256041_1280"><span><img src="data1/tooltips/garbagebag1256041_1280.jpg" alt="garbage-bag-1256041_1280"/>1</span></a>
		<a href="#" title="cash-1169650_1280"><span><img src="data1/tooltips/cash1169650_1280.jpg" alt="cash-1169650_1280"/>2</span></a>
		<a href="#" title="newpic"><span><img src="data1/tooltips/newpic.jpg" alt="newpic"/>3</span></a>
		<a href="#" title="newpic2"><span><img src="data1/tooltips/newpic2.jpg" alt="newpic2"/>4</span></a>
		<a href="#" title="newpic3"><span><img src="data1/tooltips/newpic3.jpg" alt="newpic3"/>5</span></a>
		<a href="#" title="newpic4"><span><img src="data1/tooltips/newpic4.jpg" alt="newpic4"/>6</span></a>
		<a href="#" title="43"><span><img src="data1/tooltips/43.png" alt="43"/>7</span></a>
		<a href="#" title="54"><span><img src="data1/tooltips/54.jpg" alt="54"/>8</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wowslider</a> by WOWSlider.com v8.7</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>-->
	      <!-- End WOWSlider.com BODY section -->     <!--=========== END SLIDER SECTION ================-->
    <!--=========== BEGIN ABOUT US SECTION ================-->     <SECTION id="aboutUs">
<DIV class="container">
<DIV class="row"><!-- Start about us area -->
<DIV class="col-lg-6 col-md-6 col-sm-6">
<DIV class="aboutus_area wow fadeInLeft">
<H2 class="titile">About Us</H2>
<P>We are the 'CASH OUT OF TRASH' community.We aim to aware people on how to
 generate income from their waste or use their waste to genenrate income.We are the growing community now.We appreciate useful blogs and photos
  to our community blog site.This initiative was started by a few green thinkers
   who thought it is necessary to aware people about waste managment.They
believed   that even waste can be utitlised.So we aim to work on this idea
.Anyone who    thinks they can generate cash out of trash,they belong to
us.</P></DIV>         </DIV>
<DIV class="col-lg-6 col-md-6 col-sm-6">
<DIV class="newsfeed_area wow fadeInRight">
<UL class="nav nav-tabs feed_tabs" id="myTab2">
  <LI class="active"><A href="#news" data-toggle="tab">News</A></LI>
  <LI><A href="#notice" data-toggle="tab">Notice</A></LI>
  <LI><A href="#events" data-toggle="tab">Events</A></LI></UL><!-- Tab panes -->

<DIV class="tab-content"><!-- Start news tab content -->
<DIV class="tab-pane fade in active" id="news">
<UL class="news_tab"><?php

				$query="SELECT * FROM posts LIMIT 3";
				$select_all_news=mysqli_query($connection,$query);

				while($row=mysqli_fetch_assoc($select_all_news)){
				$title=$row['title'];
				$date=$row['date'];
				$image=$row['image'];

				?>

  <LI>
  <DIV class="media">
  <DIV class="media-left"><A class="news_img" href="#"><IMG class="media-object"
  alt="img" src="img/<?php echo $image ?>"></A></DIV>
  <DIV class="media-body"><A href="events-archive.php"><?php echo $title ?></A><SPAN class="feed_date"><?php echo $date ?></SPAN>
                                  </DIV></DIV></LI><?php }
				?>
              </UL><A class="see_all" href="events-archive.php">See All</A>
       </DIV><!-- Start notice tab content -->
<DIV class="tab-pane fade " id="notice">
<UL class="news_tab"><?php

				$query="SELECT * FROM posts LIMIT 3";
				$select_all_news=mysqli_query($connection,$query);

				while($row=mysqli_fetch_assoc($select_all_news)){
				$title=$row['title'];
				$date=$row['date'];
				$image=$row['image'];

				?>

  <LI>
  <DIV class="media">
  <DIV class="media-left"><A class="news_img" href="#"><IMG class="media-object"
  alt="img" src="img/<?php echo $image ?>"></A></DIV>
  <DIV class="media-body"><A href="#"><?php echo $title ?></A><SPAN class="feed_date"><?php echo $date ?></SPAN>
                                  </DIV></DIV></LI><?php }
				?>
              </UL><A class="see_all" href="events-archive.php">See All</A>
                   </DIV><!-- Start events tab content -->
<DIV class="tab-pane fade " id="events">
<UL class="news_tab"><!--?php

				$query="SELECT * FROM posts LIMIT 3";
				$select_all_news=mysqli_query($connection,$query);

				while($row=mysqli_fetch_assoc($select_all_news)){
				$title=$row['title'];
				$date=$row['date'];
				$image=$row['image'];

				?-->

  <LI>
  <DIV class="media">
  <DIV class="media-left"><A class="news_img" href="#"><IMG class="media-object"
  alt="img" src="img/<?php echo $image ?>"></A></DIV>
  <DIV class="media-body"><A href="#"><!--?php echo $title ?--></A><SPAN class="feed_date"><!--?php echo $date ?--></SPAN>
                                  </DIV></DIV></LI><!--?php }
				?-->
              </UL><A class="see_all" href="events-archive.php">See All</A>
       </DIV></DIV></DIV>         </DIV></DIV></DIV></SECTION>     <!--=========== END ABOUT US SECTION ================-->
    <!--=========== BEGIN WHY US SECTION ================-->     <SECTION id="whyUs"><!-- Start why us top -->

<DIV class="row">
<DIV class="col-lg-12 col-sm-12">
<DIV class="whyus_top">
<DIV class="container"><!-- Why us top titile -->
<DIV class="row">
<DIV class="col-lg-12 col-md-12">
<DIV class="title_area">
<H2 class="title_two">Why We</H2><SPAN></SPAN>                   </DIV>
       </DIV></DIV><!-- End Why us top titile -->               <!-- Start Why us top content  -->

<DIV class="row">
<DIV class="col-lg-3 col-md-3 col-sm-3">
<DIV class="single_whyus_top wow fadeInUp">
<DIV class="whyus_icon"><SPAN class="fa fa-users "></SPAN>
</DIV>
<H3>Largest Community</H3>
<P>We are the largest green thinking community now and we aim to expand our
 thinking throughout the world.</P></DIV>                 </DIV>
<DIV class="col-lg-3 col-md-3 col-sm-3">
<DIV class="single_whyus_top wow fadeInUp">
<DIV class="whyus_icon"><SPAN class="fa fa-desktop"></SPAN>
</DIV>
<H3>Non-Profitable</H3>
<P>We are a helping community.So,we aim to generate awareness which could led to better future.</P></DIV>                 </DIV>
<DIV class="col-lg-3 col-md-3 col-sm-3">
<DIV class="single_whyus_top wow fadeInUp">
<DIV class="whyus_icon"><SPAN class="fa fa-flask"></SPAN>
</DIV>
<H3>E-thinking</H3>
<P>Our main motto is to generate cash out of trash.So we aim to sell
 eco-friendly pots,plates and other stuff at cheap rates.</P></DIV>
   </DIV>
<DIV class="col-lg-3 col-md-3 col-sm-3">
<DIV class="single_whyus_top wow fadeInUp">
<DIV class="whyus_icon"><SPAN class="fa fa-support"></SPAN>
</DIV>
<H3>24X7 SUPPORT</H3>
<P>We aim to provide 24X7 support help to people who wish to join our community
 or wish to purchase something from our community.</P></DIV>
</DIV></DIV><!-- End Why us top content  -->             </DIV></DIV>
</DIV></DIV><!-- End why us top -->       <!-- Start why us bottom -->
<DIV class="row">
<DIV class="col-lg-12 col-sm-12">
<DIV class="whyus_bottom">
<DIV class="slider_overlay"></DIV>
<DIV class="container">
<DIV class="skills"><!-- START SINGLE SKILL-->
<DIV class="col-lg-3 col-md-3 col-sm-3">
<DIV class="single_skill wow fadeInUp">
<DIV id="myStat" data-dimension="100" data-info="" data-width="10"
data-fontsize="25" data-percent="35" data-fgcolor="#999" data-bgcolor="#fff"
></DIV>
<H4>Campaining</H4></DIV></DIV><!-- START SINGLE SKILL-->
<DIV class="col-lg-3 col-md-3 col-sm-3">
<DIV class="single_skill wow fadeInUp">
<DIV id="myStathalf2" data-dimension="150" data-info=""
data-width="10" data-fontsize="25" data-percent="90" data-fgcolor="#999"
data-bgcolor="#fff"></DIV>
<H4>People Satisfaction</H4></DIV></DIV><!-- START SINGLE SKILL-->

<DIV class="col-lg-3 col-md-3 col-sm-3">
<DIV class="single_skill wow fadeInUp">
<DIV id="myStat2" data-dimension="150" data-info="" data-width="10"
data-fontsize="25" data-percent="100" data-fgcolor="#999" data-bgcolor="#fff"
></DIV>
<H4>People Rating</H4></DIV></DIV><!-- START SINGLE SKILL-->
<DIV class="col-lg-3 col-md-3 col-sm-3">
<DIV class="single_skill wow fadeInUp">
<DIV id="myStat3" data-dimension="150" data-info="" data-width="10"
data-fontsize="25" data-percent="65" data-fgcolor="#999" data-bgcolor="#fff"
></DIV>
<H4>Users</H4></DIV></DIV></DIV></DIV></DIV>         </DIV></DIV><!-- End why us bottom -->
    </SECTION>     <!--=========== END WHY US SECTION ================-->     <!--=========== BEGIN OUR COURSES SECTION ================-->

   <SECTION id="ourCourses">
<DIV class="container"><!-- Our courses titile -->
<DIV class="row">
<DIV class="col-lg-12 col-md-12">
<DIV class="title_area">
<H2 class="title_two">Our Works</H2><SPAN></SPAN>             </DIV>
</DIV></DIV><!-- End Our courses titile -->         <!-- Start Our courses content -->

<DIV class="row">
<DIV class="col-lg-12 col-md-12 col-sm-12">
<DIV class="ourCourse_content">
<UL class="course_nav">
  <LI>
  <DIV class="single_course">
  <DIV class="singCourse_imgarea"><IMG src="img/plasticroad.jpg">
  <DIV class="mask"><A class="course_more" href="#">View Image</A>
                    </DIV></DIV>
  <DIV class="singCourse_content">
  <H3 class="singCourse_title"><A href="http://www.cips.org.in/documents/Published_Documents/e-Books/2015/Urban-Governance/Use-of-Plastics/use-of-plastics.html">Plastic Road Initiative</A></H3>
  <P class="singCourse_price">Jamshedpur</P>
  <P>Plastic road inititative was introduced at jamshedpur by Gaurav Anand,Chief
         Manager Jusco under the guidance of Dr.R.Vasudevan.</P></DIV>
  <DIV class="singCourse_author"><IMG alt="img" src="img/sir.jpg">

  <P>Gaurav Anand,Jamshedpur</P></DIV>                   </DIV>
           </LI>
  <LI>
  <DIV class="single_course">
  <DIV class="singCourse_imgarea"><IMG src="img/biogas.jpg">
  <DIV class="mask"><A class="course_more" href="#">View Image</A>
                    </DIV></DIV>
  <DIV class="singCourse_content">
  <H3 class="singCourse_title"><A href="#">Biogas Inititative</A></H3>
  <P class="singCourse_price">Jamshedpur</P>
  <P>The process of biogas generation is called anaerobic digestion (AD) and has a lot of salient features.</P></DIV>
  <DIV class="singCourse_author"><IMG alt="img" src="img/sir.jpg">

  <P>Gaurav Anand</P></DIV>                   </DIV>                 </LI>
  <LI>
  <DIV class="single_course">
  <DIV class="singCourse_imgarea"><IMG src="img/waste.jpg">
  <DIV class="mask"><A class="course_more" href="#">View Image</A>
                    </DIV></DIV>
  <DIV class="singCourse_content">
  <H3 class="singCourse_title"><A href="#">GPRS Monitoring</A></H3>
  <P class="singCourse_price">Jamshedpur</P>
  <P>With the help of the GPRS (General Packet Radio Service) information transmission technology; the proposed system can remote monitor electric power system’s devices (i.</P></DIV>
  <DIV class="singCourse_author"><IMG alt="img" src="img/sir.jpg">

  <P>Shakib </P></DIV>
   </DIV>                 </LI>
  </UL></DIV>           </DIV></DIV><!-- End Our courses content -->
     </DIV></SECTION>     <!--=========== END OUR COURSES SECTION ================-->




     <!--=========== BEGIN OUR TUTORS SECTION ================-->     <SECTION
id="ourTutors">
<DIV class="container"><!-- Our courses titile -->
<DIV class="row">
<DIV class="col-lg-12 col-md-12">
<DIV class="title_area">
<H2 class="title_two">Our Mentors</H2><SPAN></SPAN>             </DIV>
</DIV></DIV><!-- End Our courses titile -->         <!-- Start Our courses content -->

<DIV class="row">
<DIV class="col-lg-12 col-md-12 col-sm-12">
<DIV class="ourTutors_content"><!-- Start Tutors nav -->
<UL class="tutors_nav">
  <LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/sir.jpg">
                        </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Gaurav Anand</H3><SPAN>Environmentalist</SPAN>

  <P>The founder of Cash Out Of Trash initiative. He is a young and super enthusiastic individual who works tirelessly in the field of innovation and sustainable development.</P></DIV>

  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="https://www.facebook.com/gaurav.anand.526875"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
  <LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/40.jpg">
                       </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Shashank Shekhar</H3><SPAN>Chemical Engineer</SPAN>

  <P>A chemical engineer who has worked in upstream energy sector. He enjoys working on technical stuff trying to find solutions for wells which are not able to produce.</P></DIV>
  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
  <LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/41.jpg">
                       </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Nitin Surendra Sahai </H3><SPAN>Safety Professional
              </SPAN>
  <P>A motivated and culturally fluent in Operations, Environment, Occupational Health and Safety Professional with 16 years of diverse and progressive experience.</P></DIV>
  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
<LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/Nilesh.jpg">
                       </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name"> Nilesh P.Inamdar</H3><SPAN>Patpert Teknow System Pvt. Ltd.</SPAN>

  <P>PATPERT started dealing in various segments like process engineering, design support, waste

treatment technology supplies, Past 8 years. </P></DIV>
  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                     </DIV>                 </LI>
	<LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/Rishi.jpg">
                        </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Mr. Arun Rishi </H3><SPAN> Health Guru</SPAN>

  <P>Founder, Ayushmanbhava</P></DIV>

  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
  <LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/gaurav.jpg">
                       </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Gaurav Kapoor</H3><SPAN>Entrepreneur</SPAN>

  <P>The founder of paisavasool.biz. A motivated and highly innovative individual who is optimistic towards the goal of achieving sustainable development and works hard for it.</P></DIV>
  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
<LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/42.jpg">
                        </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Vighnesh Jha </H3><SPAN> Co walkers of PATH...</SPAN>

  <P>A young, enthusiastic person devoted to the cause of social welfare and uplift. He is a legendary in the field of innovation.</P></DIV>

  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
  <LI>

  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/43.jpg">
                        </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Shiv Arora</H3><SPAN>Mind and Thrive coach</SPAN>

  <P>Shiv Arora...Mind and Thrive coach. Speaker and founder @yogyai</P></DIV>
  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>	
                 </UL></DIV>                   </DIV>
</LI></UL></DIV>           </DIV></DIV><!-- End Our courses content -->
</DIV></SECTION>     <!--=========== END OUR TUTORS SECTION ================-->


   <!--=========== BEGIN MENTORS TESTIMONIAL SECTION ================-->
<SECTION id="studentsTestimonial">
<DIV class="container"><!-- Our courses titile -->
<DIV class="row">
<DIV class="col-lg-12 col-md-12">
<DIV class="title_area">
<H2 class="title_two">What our Mentors says</H2><SPAN></SPAN>             </DIV>
          </DIV></DIV><!-- End Our courses titile -->         <!-- Start Our courses content -->

<DIV class="row">
<DIV class="col-lg-12 col-md-12 col-sm-12">
<DIV class="studentsTestimonial_content">
<DIV class="row"><!-- start single student testimonial -->
<DIV class="col-lg-4 col-md-4 col-sm-4">
<DIV class="single_stsTestimonial wow fadeInUp">
<DIV class="stsTestimonial_msgbox">
<P>I dream about finding energy solutions for the future especially excited to
 work on renewable sources of energy. I am passionate about protecting and
 cleaning the environment.</P></DIV>                     <IMG class="stsTesti_img"
alt="img" src="img/sir.jpg">
<DIV class="stsTestimonial_content">
<H3>Gaurav Anand</H3><SPAN>Chief Manager</SPAN>
<P>JUSCO</P></DIV>                   </DIV>                 </DIV><!-- End single student testimonial -->
                <!-- start single student testimonial -->
<DIV class="col-lg-4 col-md-4 col-sm-4">
<DIV class="single_stsTestimonial wow fadeInUp">
<DIV class="stsTestimonial_msgbox">
<P>. I dream about finding energy solutions for the future especially excited to
 work on renewable sources of energy. I am passionate about protecting and
 cleaning the environment.</P></DIV>                     <IMG class="stsTesti_img"
alt="img" src="img/40.jpg">
<DIV class="stsTestimonial_content">
<H3>Shashank Shekhar</H3><SPAN>Chemical Engineer</SPAN>
<P>INDIA</P></DIV>                   </DIV>                 </DIV><!-- End single student testimonial -->
                <!-- start single student testimonial -->
<DIV class="col-lg-4 col-md-4 col-sm-4">
<DIV class="single_stsTestimonial wow fadeInUp">
<DIV class="stsTestimonial_msgbox">
<P>Our Motive is to work as a facilitator to give momentum to the ongoing
 process of sustainable development. We intend to empower the people to become
 the carrier of development of their own as well as the community. </P></DIV>
                 <IMG class="stsTesti_img" alt="img" src="img/41.jpg">

<DIV class="stsTestimonial_content">
<H3>Nitin Surendra Sahai </H3><SPAN>Environment Engineer</SPAN>
<P>Software Department</P></DIV>                   </DIV>                 </DIV><!-- End single student testimonial -->
              </DIV></DIV>           </DIV></DIV><!-- End Our courses content -->
      </DIV></SECTION>     <!--=========== END MENTORS TESTIMONIAL SECTION ================-->




     <!--=========== BEGIN OUR STUDENT TEAM SECTION ================-->     <SECTION
id="ourTutors">
<DIV class="container"><!-- Our courses titile -->
<DIV class="row">
<DIV class="col-lg-12 col-md-12">
<DIV class="title_area">
<H2 class="title_two">Our TEAM</H2><SPAN></SPAN>             </DIV>
</DIV></DIV><!-- End Our courses titile -->         <!-- Start Our courses content -->

<DIV class="row">
<DIV class="col-lg-12 col-md-12 col-sm-12">
<DIV class="ourTutors_content"><!-- Start Tutors nav -->
<UL class="tutors_nav">

  <LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/shubham.jpg">
                       </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Subham Sahay</H3><SPAN>Student at VIT, vellore</SPAN>

  <P>We don’t want to protect the environment, we want to create a world where the environment doesn’t need protecting.</P></DIV>
  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>

    <LI>
	  <DIV class="single_tutors">
	  <DIV class="tutors_thumb"><IMG src="img/rashmi.jpg">
	                        </DIV>
	  <DIV class="singTutors_content">
	  <H3 class="tutors_name">Rashmi Kumari</H3><SPAN>Student at NIST, berhampur</SPAN>

	  <P>At least do not ruin the life of those trees, depending on whom we live. Let's prove that we are humans.</P></DIV>

	  <DIV class="singTutors_social">
	  <UL class="tutors_socnav">
	    <LI><A class="fa fa-facebook" href="#"></A></LI>

	    <LI><A class="fa fa-twitter" href="#"></A></LI>

	    <LI><A class="fa fa-instagram" href="#"></A></LI>

	    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
				 <LI>
	  <DIV class="single_tutors">
	  <DIV class="tutors_thumb"><IMG src="img/ankit.jpg">
	                        </DIV>
	  <DIV class="singTutors_content">
	  <H3 class="tutors_name">Ankit Kishore</H3><SPAN>Student at ITM University, Gwalior</SPAN>

	  <P>There is no smart city without smart people.</P></DIV>

	  <DIV class="singTutors_social">
	  <UL class="tutors_socnav">
	    <LI><A class="fa fa-facebook" href="https://www.facebook.com/ankit.kishore"></A></LI>

	    <LI><A class="fa fa-twitter" href="#"></A></LI>

	    <LI><A class="fa fa-instagram" href="#"></A></LI>

	    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
  <LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/ayush.jpg">
                       </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Ayush Lal</H3><SPAN>Student at VIT, vellore
              </SPAN>
  <P>The Earth is not dying, it is being killed. And the people who are killing it have names and addresses.</P></DIV>
  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
  <LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/priyanka.jpg">
                        </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Priyanka</H3><SPAN>Student at GEC, bbsr</SPAN>

  <P>The world is a dangerous place, not because of those who do evil, but because of those who look and do nothing.</P></DIV>

  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
  <LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/shantanu.jpg">
                       </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Shantanu </H3><SPAN>Student at VIT, vellore</SPAN>

  <P>The environment and the economy are really both two sides of the same coin. If we cannot sustain the environment, we cannot sustain ourselves.</P></DIV>
  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
  <LI>
    <DIV class="single_tutors">
    <DIV class="tutors_thumb"><IMG src="img/ritika.jpg">
                         </DIV>
    <DIV class="singTutors_content">
    <H3 class="tutors_name">Ritika Das</H3><SPAN>Student at RCET, Bhilai</SPAN>

    <P>We make the world we live in and shape our own environment.</P></DIV>
    <DIV class="singTutors_social">
    <UL class="tutors_socnav">
      <LI><A class="fa fa-facebook" href="#"></A></LI>

      <LI><A class="fa fa-twitter" href="#"></A></LI>

      <LI><A class="fa fa-instagram" href="#"></A></LI>

      <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
<LI>
  <DIV class="single_tutors">
  <DIV class="tutors_thumb"><IMG src="img/Ujala.jpg">
                       </DIV>
  <DIV class="singTutors_content">
  <H3 class="tutors_name">Ujala Parmar</H3><SPAN>Student at RCET, Bhilai</SPAN>

  <P>The environment and the economy are really both two sides of the same coin. If we cannot sustain the environment, we cannot sustain ourselves.</P></DIV>
  <DIV class="singTutors_social">
  <UL class="tutors_socnav">
    <LI><A class="fa fa-facebook" href="#"></A></LI>

    <LI><A class="fa fa-twitter" href="#"></A></LI>

    <LI><A class="fa fa-instagram" href="#"></A></LI>

    <LI><A class="fa fa-google-plus" href="#"></A></LI>
                 </UL></DIV>                   </DIV>                 </LI>
</UL></DIV>           </DIV></DIV><!-- End Our courses content -->
</DIV></SECTION>     <!--=========== END OUR STUDENT TEAM SECTION ================-->












           <!--=========== BEGIN FOOTER SECTION ================-->     <FOOTER
id="footer"><!-- Start footer top area -->
<DIV class="footer_top">
<DIV class="container">
<DIV class="row">
<DIV class="col-ld-3  col-md-3 col-sm-3">
<DIV class="single_footer_widget">
<H3>About Us</H3>
<P>We are the 'CASH OUT OF TRASH' community.We aim to aware people on how to
 generate income from their waste or use their waste to genenrate income.This initiative was started by a few green thinkers
   who thought it is necessary to aware people about waste managment..</P></DIV>             </DIV>
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
  <LI><A title="Facebook" class="soc_tooltip" href="https://www.facebook.com/cashoutoftrash/" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-facebook"></I></A></LI>
  <LI><A title="Twitter" class="soc_tooltip" href="https://twitter.com/" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-twitter"></I></A></LI>
  <LI><A title="Google+" class="soc_tooltip" href="#" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-google-plus"></I></A></LI>
  <LI><A title="Linkedin" class="soc_tooltip" href="#" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-linkedin"></I></A></LI>
  <LI><A title="Youtube" class="soc_tooltip" href="#" data-toggle="tooltip"
  data-placement="top"><I class="fa fa-youtube"></I></A></LI></UL></DIV>
  </DIV></DIV></DIV></DIV>       <!-- End footer top area -->       <!-- Start footer bottom area -->

<DIV class="footer_bottom">
<DIV class="container">
<DIV class="row">
<DIV class="col-lg-6 col-md-6 col-sm-6">
<DIV class="footer_bootomLeft">
<P> Copyright Â© All Rights Reserved</P></DIV>
</DIV></DIV></DIV></DIV>       <!-- End footer bottom area -->     </FOOTER>
<!--=========== END FOOTER SECTION ================-->       <!-- Javascript Files
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

    ====================================================-->
  </BODY></HTML>

