<?php
/**
 * Template Name: Standard Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav.png" type="image/png" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav.png" type="image/png" />

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Crowed Eyes</title>
    <!-- BOOTSTRAP STYLE SHEET -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS STYLE SHEET -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type='text/javascript' src='https://code.jquery.com/jquery-1.11.1.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,300,900,700,500,800' rel='stylesheet' type='text/css'>

    <style>
      @media screen and (max-width: 768px){
        div#login-trigger{
          color:#fff !important;
        }
      }
      .tp-bgimg{
        opacity: .7 !important;}

      @media screen and (max-width: 768px){
        div#login-trigger{
          color:#000 !important;
        }
      }
      @media screen and (max-width: 767px){
        div#login-trigger{
          color:#000 !important;
        }
      }
    </style>

  </head>
  <body>
  <div style="float: left; height: 0; visibility: hidden; width: 100%;" id="home22"></div>
  <div class="navbar navbar-default" id="fixedNav">
    <?php //wp_nav_menu( array('menu' => 'Languages' )); ?>

    <div id="flags_language_selector">
      <div class="container">
        <a class="slct" href="#"> English | </a>
        <a href="http://108.163.184.34/crowdeyes-parallax/?page_id=72"> Dansk </a>
      </div>
    </div>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href=""> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="<?php echo get_template_directory_uri(); ?>/img-responsive" /> </a> </div>
      <div class="navbar-collapse collapse navbar-right scroll-me">
        <ul class="nav navbar-nav ">
          <li><a href="#home22" class="selected">Home</a></li>
          <li><a href="#featuresDD">Features</a></li>
          <li><a href="#pricings">Pricing</a></li>
          <li><a href="#downloadApp">Download</a></li>
          <li><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=154">FAQ</a></li>
          <li><a href="#contactus">Contact Us</a></li>
        </ul>
      </div>
      <div id="login-content">
        <div class="liginBtm">
          <form>
            <input type="text" name="username" required="required" placeholder="User Name / Email">
            <input type="password" name="password" required="required" placeholder="Password">
            <a href="#" class="btnLogin">Login </a>
          </form>
          <a href="#" class="forgotPass">Forgot Password?</a>
          <a href="#" class="btnSignup"> Sign Up</a>
        </div>
      </div>
    </div>
  </div>
  <!-- NAVBAR CODE END -->
<div class="detailPages">
  <div class="container">
    <div class="row">
<div class="innerDePages">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <p><?php echo get_the_content(); ?></p>
    <?php endwhile;
  else :
    echo wpautop( 'Sorry, no page found' );
  endif;
  ?>
</div>
    </div>
  </div>
  </div>
  <!--CONTACT END-->

  <!--site-footer-->
  <footer class="site-footer section-spacing">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">

          <!--social-->

          <ul class="footer_links">

            <?php echo wp_nav_menu( array('menu' => 'Bottom Menu En' )); ?>
            <!--social
            <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=76" >About Us</a></li>
            <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=81" >Terms of Use</a></li>
            <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=83" >Privacy</a></li>
            <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=93" >Cookies</a></li>
            <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=154" >FAQ</a></li>
            -->
          </ul>

          <ul class="social">
            <li class="wow fadeInUp"><a href="https://twitter.com/CrowdEyes" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li class="wow fadeInUp"><a href="https://www.facebook.com/CrowdEyes" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="wow fadeInUp"><a href="https://plus.google.com/u/0/116737434126664185854/about" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          </ul>

          <!--social end-->

          <small class="wow fadeInUp">&copy; Copyright CrowdEyes. All Rights Reserved.</small>
        </div>



      </div>


    </div>
  </footer>
  <!--site-footer end-->

  <!-- FOOTER SECTION END-->
  <!-- CORE JQUERY FILE -->

  <script>
    $('.navbar-nav > li > a').on('click', function(){
      $('.navbar-nav > li > a.selected').removeClass('selected');
      $(this).addClass('selected');
    });
  </script>

  <script>
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
  </script>

  <script>
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
        $("#fixedNav").addClass("hideDiv");

      } else {
        $("#fixedNav").removeClass("hideDiv");
      }

      if (scroll >= 20) {
        $("#downFixed").removeClass("fixedDown");

      } else {
        $("#downFixed").addClass("fixedDown");
      }
    });
  </script>


  <script>
    $(document).ready(function(){

      $(".navbar-collapse a").click(function(){
        $(".navbar-collapse").removeClass("in");
      });

      $("#hideLogin").click(function(){
        $("#login-content").hide();
        $("#hideLogin").hide();
        $(".collapse.in").hide();
      });

      $("#login").click(function(){
        $("#hideLogin").show();
      });

      $("#moveTop").hide();
      $(window).scroll(function() {
        if ($(window).scrollTop() > 500) {
          $("#moveTop").fadeIn("slow");
        }
        else {
          $("#moveTop").fadeOut("fast");
        }
      });

    });

  </script>


  <a id="moveTop" href="#home22" class="selected"><i class="fa fa-2x fa-arrow-circle-up"></i></a>
  <!-- REQUIRED BOOTSTRAP SCRIPTS -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gmap.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js"></script>

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <?php wp_footer(); ?>
  <!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="float: left; width: 100%; padding: 5px 5px 30px 5px">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Subscribe To Get Notified</h4>
        </div>
        <div class="modal-body">
          <?php echo do_shortcode('[contact-form-7 id="107" title="CS Android"]'); ?>
        </div>

      </div>
    </div>
  </div>

  </body>
  </html>
<?php //get_sidebar(); ?>
<?php //get_footer(); ?>