<?php
/**
 * Template Name: Home Page Danish
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
        color:#000 !important;
      }
    }
    @media screen and (max-width: 767px){
      div#login-trigger{
        color:#000 !important;
      }
      }

    @media screen and (max-width: 415px) {
      #home, .banner-text {
        height: 220px !important;
        top: 0;
        min-height: 220px !important;
      }
      .p-cls{ padding-top: 30px;}
      }
    @media screen and (max-width: 320px) {
      #home, .banner-text {
        height: 210px !important;
        top: 0;
        min-height: 210px !important;
      }
    }

  </style>

</head>
<body>
<div class="navbar navbar-default" id="fixedNav">
<?php //wp_nav_menu( array('menu' => 'Languages' )); ?>
  <div class="container">
    <div id="flags_language_selector">
      <a href="http://108.163.184.34/crowdeyes-parallax"> English | </a>
      <a class="slct" href="#"> Dansk </a>
    </div>

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="<?php echo get_template_directory_uri(); ?>/img-responsive" /> </a> </div>
    <div class="navbar-collapse collapse navbar-right scroll-me">
     <ul class="nav navbar-nav ">
        <li><a href="#home" class="selected">Hjem</a></li>
        <li><a href="#featuresDD">Funktionalitet</a></li>
        <li><a href="#pricings">Priser</a></li>
        <li><a href="#downloadApp">Download</a></li>
         <li><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=95">FAQ</a></li>
       <li><a href="#contact">Kontakt os</a></li>
      </ul>
    </div>
    <div id="login-content">
      <div class="liginBtm">
        <form>
          <input type="text" name="username" required="required" placeholder="User Name / Email">
          <input type="password" name="password" required="required" placeholder="Password">
          <a href="#" class="btnLogin">Login </a>
        </form>
        <a href="#" class="forgotPass">Glemt kodeord?</a>
        <a href="#" class="btnSignup"> Sign Up</a>
      </div>
    </div>
  </div>
</div>
<!-- NAVBAR CODE END -->
<div id="home">
  <div class="container banner-text">
    <div class="container">
      <p class="p-cls"> En søgeplatform, som gør det muligt at få hjælp når du søger efter genstande, personer, kæledyr eller vidner til hændelser - eller hjælpe andre i samme situation. </p>
    </div>
  </div>
  <div class="overlay">
    <!-- overylay class usage -->
  </div>
  <div class="downloadApp fixedDown" id="downFixed" >
    <div class="container">
      <p>Tilgængelig på App Store</p>
      <div class="inn_download"> 
	  <?php /*?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ios.png" />
	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/android.png" /><?php */?>
	  <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/android1.png" /> <span>Kommer snart</span></a>
	  <a target="_blank" href="http://www.apple.com"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ios1.png" /> <span>Download</span></a>
	  
	  </div>
    </div>
  </div>
</div>
<?php echo do_shortcode('[rev_slider maind]'); ?>
<!--HOME SECTION END  -->

 

<section id="features">
  <div class="container">
    <div class="row text-center pad-bottom">
      <div class="container">
        <h2 class="head-set">Live Feed</h2>
      </div>
    </div>
	
	<script>

var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {



 var userData = $http({
                method: "post",
                url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",
                data: {
                    Count: "150",
                    ProfileID: "76",
					SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"

                },
                headers: {'Content-Type': 'application/json'}
            });
            userData.success(function (userdataobject) {
                  $scope.catadata = userdataobject;
				$scope.quantity1 = 1;
            });

 $scope.getData = function(){
 var userData = $http({
                method: "post",
                url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",
                data: {
                    Count: "150",
                    ProfileID: "771",
					SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"

                },
                headers: {'Content-Type': 'application/json'}
            });
            userData.success(function (userdataobject) {
                  $scope.catadata = userdataobject;
				$scope.quantity1 = 1;
            });
 };
 
 
 setInterval($scope.getData, 30000); 
 
 

});
 /*Count = 50;
    ProfileID = 76;
    SecurityToken = iW7rfat55SPjpUBEAjsZKKgucYR8ya38;*/
</script>



		<style>
.imgFirst{ height:30px; width:30px;}
.lostImg2{ height:110px; width:110px;}
</style>
	
    <div id="searchCategory" class="row text-center searchCategory" ng-app="myApp" ng-controller="customersCtrl">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-object.png" /> <span>Genstand</span> </div>
      
        <div class="greenBox" ng-repeat="cat in catadata | filter: {TopCategoryID : 11} | limitTo:quantity1">
          <div class="greenInner1"> 
		  <img class="imgFirst" src="{{cat.CreatedBy_Profile.Picture.URI}}" /><span>
			{{cat.CreatedBy_Profile.Name}}
	
		   </span><font> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat.Created_Timestamp | date:'d-M-y HH:mm'}}</font> </div>
          <div class="greenInner2">
		  <span> 
		      <img ng-if="cat.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/mistet.png" />
			  <img ng-if="cat.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/fundet.png" />
			  <img class="lostImg2" src="{{cat.PictureURIs[0].URI}}" />
		  </span>
            <div class="rightGreen">
              <h4>{{cat.Title}}</h4>
              <p>
			 {{cat.Desciption | limitTo: 50}}...
			  </p>
            </div>
          </div>
          <div class="greenInner3"> <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/address-marker.png" /> <span>{{cat.Location | limitTo: 35}}</span> </div>
		</div>
		</div>
	  
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-people.png" /> <span>Mennesker</span> </div>
	
        <div class="greenBox boxColor2" ng-repeat="cat in catadata | filter: {TopCategoryID : 12} | limitTo:quantity1">
          <div class="greenInner1"> 
		  <img class="imgFirst" src="{{cat.CreatedBy_Profile.Picture.URI}}" /><span>
			{{cat.CreatedBy_Profile.Name}}
	
		   </span><font> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat.Created_Timestamp | date:'d-M-y HH:mm'}}</font> </div>
          <div class="greenInner2">
		  <span> 
		      <img ng-if="cat.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/mistet.png" />
			  <img ng-if="cat.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/fundet.png" />
			  <img class="lostImg2" src="{{cat.PictureURIs[0].URI}}" />
		  </span>
            <div class="rightGreen">
              <h4>{{cat.Title}}</h4>
              <p>
			 {{cat.Desciption | limitTo: 50}}...
			  </p>
            </div>
          </div>
          <div class="greenInner3"> <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/address-marker.png" /> <span>{{cat.Location | limitTo: 35}}</span> </div>
        </div>
      </div>
	  
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-pet.png" /> <span>Kæledyr</span> </div>
        
        <div class="greenBox boxColor3" ng-repeat="cat in catadata | filter: {TopCategoryID : 2} | limitTo:quantity1">
           <div class="greenInner1"> 
		  <img class="imgFirst" src="{{cat.CreatedBy_Profile.Picture.URI}}" /><span>
			{{cat.CreatedBy_Profile.Name}}
	
		   </span><font> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat.Created_Timestamp | date:'d-M-y HH:mm'}}</font> </div>
          <div class="greenInner2">
		  <span> 
		      <img ng-if="cat.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/mistet.png" />
			  <img ng-if="cat.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/fundet.png" />
			  <img class="lostImg2" src="{{cat.PictureURIs[0].URI}}" />
		  </span>
            <div class="rightGreen">
              <h4>{{cat.Title}}</h4>
              <p>
			 {{cat.Desciption | limitTo: 50}}...
			  </p>
            </div>
          </div>
          <div class="greenInner3"> <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/address-marker.png" /> <span>{{cat.Location | limitTo: 35}}</span> </div>
        </div>
		
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-incident.png" /> <span>Hændelse</span> </div>
        
	
        <div class="greenBox boxColor4" ng-repeat="cat in catadata | filter: {TopCategoryID : 13} | limitTo:quantity1">
           <div class="greenInner1"> 
		  <img class="imgFirst" src="{{cat.CreatedBy_Profile.Picture.URI}}" /><span>
			{{cat.CreatedBy_Profile.Name}}
	
		   </span><font> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat.Created_Timestamp | date:'d-M-y HH:mm'}}</font> </div>
          <div class="greenInner2">
		  <span> 
		      <img ng-if="cat.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/mistet.png" />
			  <img ng-if="cat.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/fundet.png" />
			  <img class="lostImg2" src="{{cat.PictureURIs[0].URI}}" />
		  </span>
            <div class="rightGreen">
              <h4>{{cat.Title}}</h4>
              <p>
			 {{cat.Desciption | limitTo: 50}}...
			  </p>
            </div>
          </div>
          <div class="greenInner3"> <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/address-marker.png" /> <span>{{cat.Location | limitTo: 35}}</span> </div>
        </div>
		
		
      </div>
    </div>
  </div>
  <div id="featuresDD" style="float: left; visibility: hidden; width: 100%;"></div>
  <div  class="featuresDD">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-6"> <img class="leftImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/website-2.png" alt="" /> </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="f_inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/live-news-feed.png" alt=""/>
          <p>Live nyhedsfeed<span>Få de seneste søgninger og nye opdateringer øjeblikkeligt.</span></p>
        </div>
        <div class="f_inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/announce.png" alt=""/>
          <p>Annoncere<span>Lav et opslag i et par enkelte trin.</span></p>
        </div>
        <div class="f_inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/claim.png" alt=""/>
          <p>Gør krav på din ejendele<span>Understøt dit krav ved at besvare sikkerhedsspørgsmål.</span></p>
        </div>
        <div class="f_inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/chat.png" alt=""/>
          <p>Kommunikér sikkert<span>Snak privat og aftal udveksling.</span></p>
        </div>
        <div class="f_inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-activities.png" alt=""/>
          <p>Aktivitetsoverblik<span>Hold styr på egne opslag og krav.</span></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--PARALLAX LIKE / STATS SECTION END  -->
<div id="pricings" style="float: left; margin-top: -15px; width: 100%; visibility: hidden;"></div>
<section id="pricing">

    <div class="container">
      <div class="row text-center pad-bottom">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
          <h2 class="pricPackages">Planer & Priser</h2>
        </div>
      </div>
    </div>

    <div class="planSubH">
        Registrér dig for at få mere at vide om vores løsning til virksomheder
    </div>
    <div class="container">
      <div class="regPlan">
        <?php echo do_shortcode('[contact-form-7 id="106" title="Plan Register Danish"]'); ?>
      </div>
    </div>


  <!---

    <div class="row text-center portfolio-item">
      <div class="col-md-4 col-sm-4 ">
        <div class="plan_pricing1">
          <h3>BASIC</h3>
          <div class="pricDD">
            <div class="price_in">
              <p>kr<span>19</span></p>
              <font>måned</font> </div>
          </div>
          <ul>
            <li>25 Opslag</li>
            <li>Ubegrænset antal brugere</li>
            <li>10GB plads</li>
            <li>100 km søgning</li>
            <li>Offentlig profil</li>
            <li>10 krav</li>
            <li>1 Region</li>
            <li>100 Aktiviteter</li>
          </ul>
          <a href="#" class="hvr-sweep-to-bottom1">Tilmeld</a> </div>
      </div>
      <div class="col-md-4 col-sm-4 ">
        <div class="plan_pricing1" style="background:#178EB6;">
          <h3>STANDARD</h3>
          <div class="pricDD">
            <div class="price_in">
              <p>kr<span>39</span></p>
              <font>måned</font> </div>
          </div>
          <ul>
            <li>50 Opslag</li>
            <li>Ubegrænset antal brugere</li>
            <li>50GB plads</li>
            <li>500 km søgning</li>
            <li>Offentlig profil</li>
            <li>25 krav</li>
            <li>5 Region</li>
            <li>250 Aktiviteter</li>
          </ul>
          <a href="#" class="hvr-sweep-to-bottom">Tilmeld</a> </div>
      </div>
      <div class="col-md-4 col-sm-4 ">
        <div class="plan_pricing1">
          <h3>PREMIUM</h3>
          <div class="pricDD">
            <div class="price_in">
              <p>kr<span>99</span></p>
              <font>måned</font> </div>
          </div>
          <ul>
            <li>Ubegrænset Opslag</li>
            <li>Ubegrænset antal brugere</li>
            <li>Ubegrænset plads</li>
            <li>1000 km søgning</li>
            <li>Offentlig profil</li>
            <li>Ubegrænset krav</li>
            <li>10 Region</li>
            <li>Ubegrænset Aktiviteter</li>
          </ul>
          <a href="#" class="hvr-sweep-to-bottom1">Tilmeld</a> </div>
      </div>
    </div>

     -->

    <a href="#" id="downloadApp" style="float: left; width: 100%; visibility: hidden; margin-top: -10px;"></a>
  </div>
</section>
<footer>

  <div class="downloadApp">
    <div class="container">
      <p>Tilgængelig på App Store</p>
      
	  <div class="inn_download"> 
	  <?php /*?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ios.png" />
	  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/android.png" /><?php */?>
	  <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/android1.png" /> <span>Kommer snart</span></a>
	  <a target="_blank" href="http://www.apple.com"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ios1.png" /> <span>Download</span></a>
	  
	  </div>
	  
    </div>
  </div>
</footer>


<section class="contact section-spacing" id="contact">
  <div class="container">
    <h2 class="text-center">Kontakt os</h2>
    <div class="row">
      <div class="col-md-7"> 
        <!--map-->
        <div class="wow fadeInUp map">
          <div id="map-canvas"></div>
          
          <!--address-->
          
          <ul class="wow fadeInUp address">
            <li><i class="fa fa-map-marker"></i>Kildegårds Plads 1<br/>
<span>DK-2820 Gentofte</span>
</li>
            <li><i class="fa fa-phone"></i>+45 70 22 60 42</li>
            <li><i class="fa fa-envelope"></i>info@crowdeyes.com</li>
          </ul>
          
          <!--address end--> 
          
        </div>
        <!--map end--> 
      </div>
      <div class="col-md-5"> 
        
        <!--contact form-->
        
        <div class="contact-form">
          <form role="form" action="#" method="post" id="contact-form">
            <input type="text" class="wow fadeInUp form-control" name="name" id="name" placeholder="Dit navn" required>
            <input type="email" class="wow fadeInUp form-control" name="email" id="email" placeholder="Email adresse" required>
            <textarea class="wow fadeInUp form-control" name="message" id="message" rows="6" placeholder="Skriv din besked" required></textarea>
            <button type="submit" class="wow fadeInUp btn btn-default submit-btn" id="submit-btn" value="Send">SEND</button>
          </form>
          
          <!--contact form end-->
          <div class="success-cf">
            <p>Tak! Din besked er blevet sendt.</p>
          </div>
          <div class="error-cf">
            <p>Vi beklager der skete en fejl, prøv at opdatere hjemmesiden og indsend din besked igen. Vi beklager ulejligheden.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--CONTACT END--> 

<!--site-footer-->
<footer class="site-footer section-spacing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
       
        <!--social-->
        <ul class="footer_links">
          <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=76" >Om os</a></li>
          <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=81" >Brugsvilkår</a></li>
          <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=83" >Fortrolighed</a></li>
          <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=93" >Cookies</a></li>
            <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=95" >FAQ</a></li>
        </ul>

        <ul class="social">
          <li class="wow fadeInUp"><a href="https://twitter.com/CrowdEyes" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li class="wow fadeInUp"><a href="https://www.facebook.com/CrowdEyes" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li class="wow fadeInUp"><a href="https://plus.google.com/u/0/116737434126664185854/about" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>
        
        <!--social end--> 
        
        <small class="wow fadeInUp">&copy; Copyright CrowdEyes . Alle rettigheder forbeholdes.</small> </div>
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
<a id="moveTop" href="#home" class="selected"><i class="fa fa-2x fa-arrow-circle-up"></i></a>
<!-- REQUIRED BOOTSTRAP SCRIPTS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gmap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js"></script>



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