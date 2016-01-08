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
          <a href="http://108.163.184.34/crowdeyes-parallax"> English | </a>
          <a class="slct" href="#"> Dansk </a>
        </div>
    </div>
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href=""> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="<?php echo get_template_directory_uri(); ?>/img-responsive" /> </a> </div>
    <div class="navbar-collapse collapse navbar-right scroll-me">
     <ul class="nav navbar-nav ">
        <li><a href="#home22" class="selected">Hjem</a></li>
        <li><a href="#featuresDD">Funktionalitet</a></li>
        <li><a href="#pricings">Priser</a></li>
        <li><a href="#downloadApp">Download</a></li>
         <li><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=147">FAQ</a></li>
       <li><a href="#contactus">Kontakt os</a></li>
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
<?php echo do_shortcode('[rev_slider maind]'); ?>
<div class="bannerImg"> <img src="http://108.163.184.34/crowdeyes-parallax/wp-content/uploads/2015/09/21.png"></div>
<div id="home">
  <div class="container banner-text">
    <div class="container">
      <p class="p-cls">
          <label><?php the_title(); ?></label>
          <?php echo get_post_meta($post->ID, 'header_text', true); ?>
      <span class="downLoadLinks">
         <a class="btn btn-info btn-lg" target="_blank" href="http://www.apple.com"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ios.png" /> <span>Download fra App Store</span></a>
         <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/android.png" /> <span>Google Play kommer snart</span></a>
      </span>
      </p>

    </div>
  </div>

</div>

<!--HOME SECTION END  -->


<section id="features">
  <div class="container">
    <div class="row text-center pad-bottom">
      <div class="container">
          <h1 class="topHeadL"><?php echo get_post_meta($post->ID, 'feeds_heading', true); ?></h1>
          <h2 class="head-set"><?php echo get_post_meta($post->ID, 'feeds_sub_heading', true); ?></h2>
      </div>
    </div>


      <?php
      $url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=4412550d3b0efa3aa92c6560acd857b6dbd45d82456feee448559e743094cadd&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
      $lat1 = $url->latitude;
      $lon1 = $url->longitude;
      $country = $url->countryName;
      ?>


      <script>

          var app = angular.module('myApp', []);
          app.controller('customersCtrl', function($scope, $http) {

              $scope.timinterval=500;
              getcatdata1();
              function getcatdata1() {
                  var userData1 = $http({
                      method: "post",
                      url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",

                      data: {
                          Count: "1",
                          ProfileID: "771",
                          CategoryID:"11",
                          SubCategories:"true",
                          Location_GPS:"<?php echo $lat1; ?>, <?php echo $lon1; ?>",
                          MaxDistanceKM:$scope.timinterval,
                          SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"
                      },

                      headers: {'Content-Type': 'application/json'}
                  });
                  userData1.success(function (userdataobject) {
                      //  userdataobject[0].CategoryID
                      if(userdataobject!=""){

                          $scope.catadata1 = userdataobject;
                      }else{
                          $scope.timinterval=$scope.timinterval+500;
                          getcatdata1();
                      }
                  });
              }
              setInterval(getcatdata1, 60000);


              $scope.timinterval2=500;
              getcatdata2();
              function getcatdata2() {
                  var userData2 = $http({
                      method: "post",
                      url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",
                      data: {
                          Count: "1",
                          ProfileID: "771",
                          CategoryID:"2",
                          SubCategories:"true",
                          Location_GPS:"<?php echo $lat1; ?>, <?php echo $lon1; ?>",
                          MaxDistanceKM:$scope.timinterval2,
                          SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"
                      },

                      headers: {'Content-Type': 'application/json'}
                  });
                  userData2.success(function (userdataobject) {

                      if(userdataobject!=""){

                          $scope.catadata2 = userdataobject;
                      }else{
                          $scope.timinterval2=$scope.timinterval2+500;
                          getcatdata2();
                      }

                  });
              }
              setInterval(getcatdata2, 60000);

              $scope.timinterval3=500;
              getcatdata3();
              function getcatdata3() {
                  var userData3 = $http({
                      method: "post",
                      url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",
                      data: {
                          Count: "1",
                          ProfileID: "771",
                          CategoryID:"12",
                          SubCategories:"true",
                          Location_GPS:"<?php echo $lat1; ?>, <?php echo $lon1; ?>",
                          MaxDistanceKM:$scope.timinterval3,
                          SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"
                      },

                      headers: {'Content-Type': 'application/json'}
                  });
                  userData3.success(function (userdataobject) {
                      if(userdataobject!=""){

                          $scope.catadata3 = userdataobject;
                      }else{
                          $scope.timinterval3=$scope.timinterval3+500;
                          getcatdata3();
                      }
                  });
              }
              setInterval(getcatdata3, 60000);
              $scope.timinterval4=500;
              getcatdata4();
              function getcatdata4() {
                  var userData4 = $http({
                      method: "post",
                      url: "https://crowdeyews-test.azurewebsites.net/WCFService.svc/GetLatestAnnouncements",
                      data: {
                          Count: "1",
                          ProfileID: "771",
                          CategoryID:"13",
                          SubCategories:"true",
                          Location_GPS:"<?php echo $lat1; ?>, <?php echo $lon1; ?>",
                          MaxDistanceKM:$scope.timinterval4,
                          SecurityToken: "7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN"
                      },
                      headers: {'Content-Type': 'application/json'}
                  });
                  userData4.success(function (userdataobject) {
                      if(userdataobject!=""){

                          $scope.catadata4 = userdataobject;
                      }else{
                          $scope.timinterval4=$scope.timinterval4+500;
                          getcatdata4();
                      }
                  });
              }
              setInterval(getcatdata4, 60000);

          });
          /*Count = 50;
           ProfileID = 771;
           SecurityToken = 7sGxjfhYAf8iet8qg0ukdP45LeMPGeBN;*/
      </script>



      <style>
          .imgFirst{ height:30px; width:30px;}
          .lostImg2{max-height:87px; max-width:95px; border-radius: 5px; border: solid 0px #fff;}
      </style>

      <div id="searchCategory" class="row text-center searchCategory" ng-app="myApp" ng-controller="customersCtrl">
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-object.png" /> <span>Genstande</span> </div>

              <div class="greenBox" ng-repeat="cat1 in catadata1" ng-cloak>
                  <div class="greenBoxB1">

                      <div class="greenInner2">

		  <span>
		      <img ng-if="cat1.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/mistet.png" />
			  <img ng-if="cat1.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/fundet.png" />

              <img class="lostImg2" ng-show="cat1.PictureURIs[0].URI" alt="{{cat1.PictureURIs[0].URI}}" src="{{cat1.PictureURIs[0].URI}}" />
            <img class="lostImg2" ng-hide="cat1.PictureURIs[0].URI"  alt="{{cat1.PictureURIs[0].URI}}"  src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-44.png">

		  </span>
                          <div class="rightGreen">
                              <h4>{{cat1.Title | limitTo: 18}}</h4>
                              <p>
                                  {{cat1.Desciption | limitTo: 45}}...
                              </p>
                          </div>
                      </div>
                      <div class="greenInner3">
                          <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/loc-1.png" />
                          <span>{{cat1.Location | limitTo: 35}}</span>
                      </div>
                      <div class="greenInner1">
                          <img class="imgFirst" ng-show="cat1.CreatedBy_Profile.Picture.URI" src="{{cat1.CreatedBy_Profile.Picture.URI}}" />
                          <img class="imgFirst" ng-hide="cat1.CreatedBy_Profile.Picture.URI" src="<?php echo get_template_directory_uri(); ?>/assets/img/user.png" />
<span>
			{{cat1.CreatedBy_Profile.Name | limitTo: 14}}{{cat1.CreatedBy_Profile.Name.length > 14 ? '...' : ''}}

		   </span><font> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat1.When | date:'d-M-y HH:mm'}}</font>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-pet.png" /> <span>Kæledyr</span> </div>

              <div class="greenBox boxColor4" ng-repeat="cat2 in catadata2" ng-cloak>
                  <div class="greenBoxB2">

                      <div class="greenInner2">
		  <span>
			  <img ng-if="cat2.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/mistet.png" />
			  <img ng-if="cat2.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/fundet.png" />

              <img class="lostImg2" ng-show="cat2.PictureURIs[0].URI" alt="{{cat2.PictureURIs[0].URI}}" src="{{cat2.PictureURIs[0].URI}}" />
            <img class="lostImg2" ng-hide="cat2.PictureURIs[0].URI"  alt="{{cat2.PictureURIs[0].URI}}"  src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-22.png">

		  </span>
                          <div class="rightGreen">
                              <h4>{{cat2.Title | limitTo: 18}}</h4>
                              <p>
                                  {{cat2.Desciption | limitTo: 45}}...
                              </p>
                          </div>
                      </div>
                      <div class="greenInner3"> <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/loc-2.png" /> <span>{{cat2.Location | limitTo: 35}}</span> </div>
                      <div class="greenInner1">
                          <img class="imgFirst" ng-show="cat2.CreatedBy_Profile.Picture.URI" src="{{cat2.CreatedBy_Profile.Picture.URI}}" />
                          <img class="imgFirst" ng-hide="cat2.CreatedBy_Profile.Picture.URI" src="<?php echo get_template_directory_uri(); ?>/assets/img/user.png" />

              <span>
			{{cat2.CreatedBy_Profile.Name | limitTo: 14}}{{cat2.CreatedBy_Profile.Name.length > 14 ? '...' : ''}}

		   </span><font>
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat2.When | date:'d-M-y HH:mm'}}</font>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-people.png" /> <span>Personer</span> </div>

              <div class="greenBox boxColor2" ng-repeat="cat3 in catadata3" ng-cloak>
                  <div class="greenBoxB3">

                      <div class="greenInner2">
		  <span>
		     <img ng-if="cat3.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/mistet.png" />
			  <img ng-if="cat3.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/fundet.png" />
			  <img class="lostImg2" ng-show="cat3.PictureURIs[0].URI" alt="{{cat3.PictureURIs[0].URI}}" src="{{cat3.PictureURIs[0].URI}}" />
            <img class="lostImg2" ng-hide="cat3.PictureURIs[0].URI"  alt="{{cat3.PictureURIs[0].URI}}"  src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-33.png">

		  </span>
                          <div class="rightGreen">
                              <h4>{{cat3.Title | limitTo: 18}}</h4>
                              <p>
                                  {{cat3.Desciption | limitTo: 45}}...
                              </p>
                          </div>
                      </div>
                      <div class="greenInner3"> <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/loc-3.png" /> <span>{{cat3.Location | limitTo: 35}}</span> </div>
                      <div class="greenInner1">
                          <img class="imgFirst" ng-show="cat3.CreatedBy_Profile.Picture.URI" src="{{cat3.CreatedBy_Profile.Picture.URI}}" />
                          <img class="imgFirst" ng-hide="cat3.CreatedBy_Profile.Picture.URI" src="<?php echo get_template_directory_uri(); ?>/assets/img/user.png" />
<span>
			{{cat3.CreatedBy_Profile.Name | limitTo: 14}}{{cat3.CreatedBy_Profile.Name.length > 14 ? '...' : ''}}

		   </span><font> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat3.When | date:'d-M-y HH:mm'}}</font>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="topHead"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-incident.png" /> <span>Hændelser</span> </div>


              <div class="greenBox boxColor3" ng-repeat="cat4 in catadata4" ng-cloak>
                  <div class="greenBoxB4">
                      <div class="greenInner2">
		  <span>

		      <img ng-if="cat4.TypeID == 1" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/mistet.png" />
			  <img ng-if="cat4.TypeID == 2" class="lostImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/fundet.png" />
			  <img class="lostImg2" ng-show="cat4.PictureURIs[0].URI" alt="{{cat4.PictureURIs[0].URI}}" src="{{cat4.PictureURIs[0].URI}}" />
            <img class="lostImg2" ng-hide="cat4.PictureURIs[0].URI"  alt="{{cat4.PictureURIs[0].URI}}"  src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-11.png">

		  </span>
                          <div class="rightGreen">
                              <h4>{{cat4.Title | limitTo: 18}}</h4>
                              <p>
                                  {{cat4.Desciption | limitTo: 45}}...
                              </p>
                          </div>
                      </div>
                      <div class="greenInner3"> <img class="mapImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/loc-4.png" /> <span>{{cat4.Location | limitTo: 35}}</span> </div>
                      <div class="greenInner1">
                          <img class="imgFirst" ng-show="cat4.CreatedBy_Profile.Picture.URI" src="{{cat4.CreatedBy_Profile.Picture.URI}}" />
                          <img class="imgFirst" ng-hide="cat4.CreatedBy_Profile.Picture.URI" src="<?php echo get_template_directory_uri(); ?>/assets/img/user.png" />
<span>
			{{cat4.CreatedBy_Profile.Name | limitTo: 14}}{{cat4.CreatedBy_Profile.Name.length > 14 ? '...' : ''}}

		   </span><font> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock-small.png" />{{cat4.When | date:'d-M-y HH:mm'}}</font> </div>

                  </div>
              </div>


          </div>
      </div>
  </div>


    <div class="featuresFirstS">
        <div id="featuresDD" style="float: left; margin-top: -80px; visibility: hidden; width: 100%;"></div>
        <div class="container">
            <h1 class="topHeadL"><?php echo get_post_meta($post->ID, 'features', true); ?></h1>
            <h2 class="head-set"><?php echo get_post_meta($post->ID, 'features_sub_heading', true); ?></h2>
        </div>

        <div class="col-xs-12">
            <div class="container">
                <div class="col-sm-4 col-sm-6 col-xs-12">
                    <div class="f_inner">
                        <div class="imgDD"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ce-1.png" alt=""/></div>
                        <p><?php echo get_post_meta($post->ID, 'first_feature_heading', true); ?>
                            <span><?php echo get_post_meta($post->ID, 'first_feature_text', true); ?></span></p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-6 col-xs-12">
                    <div class="f_inner">
                        <div class="imgDD"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ce-2.png" alt=""/></div>
                        <p><?php echo get_post_meta($post->ID, 'second_feature_heading', true); ?>
                            <span><?php echo get_post_meta($post->ID, 'second_feature_text', true); ?></span></p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-6 col-xs-12">
                    <div class="f_inner">
                        <div class="imgDD"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ce-3.png" alt=""/></div>
                        <p><?php echo get_post_meta($post->ID, 'third_feature_heading', true); ?>
                            <span><?php echo get_post_meta($post->ID, 'third_feature_text', true); ?></span></p>
                    </div>
                </div>
                <div class="col-sm-2 col-sm-6 col-xs-12"> </div>
                <div class="col-sm-4 col-sm-6 col-xs-12">
                    <div class="f_inner">
                        <div class="imgDD"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ce-4.png" alt=""/></div>
                        <p><?php echo get_post_meta($post->ID, 'fourth_feature_heading', true); ?>
                            <span><?php echo get_post_meta($post->ID, 'fourth_feature_text', true); ?></span></p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-6 col-xs-12">
                    <div class="f_inner">
                        <div class="imgDD"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ce-5.png" alt=""/></div>
                        <p><?php echo get_post_meta($post->ID, 'fifth_feature_heading', true); ?>
                            <span><?php echo get_post_meta($post->ID, 'fifth_feature_text', true); ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <div  class="featuresDD">
    <div class="container">
        <h1><?php echo get_post_meta($post->ID, 'feature_image_heading', true); ?></h1>
        <h3><?php echo get_post_meta($post->ID, 'feature_image_sub_heading', true); ?></h3>
        <div class="col-xs-12 featImg">
          <img class="leftImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/website-2.png" alt="" />
      </div>
    </div>
  </div>
</section>
<!--PARALLAX LIKE / STATS SECTION END  -->
<div id="pricings" style="float: left; margin-top: -40px; width: 100%; visibility: hidden;"></div>
<section id="pricing">



    <div class="container">
        <div class="col-md-2 col-sm-6 col-xs-12"></div>
        <div class="col-sm-8 col-xs-12">

            <h1 class="topHeadL"><?php echo get_post_meta($post->ID, 'register_heading', true); ?></h1>
            <h2 class="head-set"><?php echo get_post_meta($post->ID, 'register_sub_heading', true); ?></h2>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12"></div>
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


  </div>
</section>
<footer>

  <div class="downloadApp">
      <a href="#" id="downloadApp" style="float: left; width: 100%; visibility: hidden; margin-top: -120px;"></a>
    <div class="container">
        <div class="inn_download">
            <a class="gPlay1 btn btn-info btn-lg" target="_blank" href="http://www.apple.com"> <span>Download fra App Store</span></a>

            <a href="#" class="gPlay2 btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> <span>Google Play kommer snart</span></a>

        </div>
    </div>
  </div>
</footer>


<section class="contact section-spacing" id="contact">
    <div id="contactus" style="float: left; margin-top: -80px; width: 100%; visibility: hidden;"></div>
  <div class="container">
      <h1 class="topHeadL"><?php echo get_post_meta($post->ID, 'contact_us_heading', true); ?></h1>
      <h2 class="head-set"><?php echo get_post_meta($post->ID, 'contact_sub_heading', true); ?></h2>
    <div class="row">
      <div class="col-md-6">
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
      <div class="col-md-6">
        
        <!--contact form-->
        
        <div class="contact-form">

            <?php echo do_shortcode('[contact-form-7 id="216" title="Contact Form Dn"]'); ?>

            <!-----
          <form role="form" action="#" method="post" id="contact-form">
            <input type="text" class="wow fadeInUp form-control" name="name" id="name" placeholder="Dit navn" required>
            <input type="email" class="wow fadeInUp form-control" name="email" id="email" placeholder="Email adresse" required>
            <textarea class="wow fadeInUp form-control" name="message" id="message" rows="6" placeholder="Skriv din besked" required></textarea>
            <button type="submit" class="wow fadeInUp btn btn-default submit-btn" id="submit-btn" value="Send">SEND</button>
          </form>

          <div class="success-cf">
            <p>Tak! Din besked er blevet sendt.</p>
          </div>
          <div class="error-cf">
            <p>Vi beklager der skete en fejl, prøv at opdatere hjemmesiden og indsend din besked igen. Vi beklager ulejligheden.</p>
          </div>

          -->
            <!--contact form end-->

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
            <?php echo wp_nav_menu( array('menu' => 'Bottom Menu Danish' )); ?>
            <!--social
          <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=85" >Om os</a></li>
          <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=87" >Brugsvilkår</a></li>
          <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=91" >Fortrolighed</a></li>
          <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=93" >Cookies</a></li>
            <li class="wow fadeInUp"><a href="http://108.163.184.34/crowdeyes-parallax/?page_id=147" >FAQ</a></li>

            -->

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

<!---

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

-->

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
                <h4 class="modal-title">Abonnér at få besked</h4>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="237" title="CS Android Dn"]'); ?>
            </div>
        </div>
    </div>
</div>



</body>
</html>
<?php //get_sidebar(); ?>
<?php //get_footer(); ?>