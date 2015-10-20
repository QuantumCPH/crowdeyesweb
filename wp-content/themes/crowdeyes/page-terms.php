<?php
/**
 * Template Name: Terms
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

//get_header(); ?>

	<!DOCTYPE html>
<html>

<head>
<title>CrowdEyes</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
<link rel="icon" href="http://108.163.184.34/crowdeyes-parallax/wp-content/themes/crowdeyes/assets/img/fav.png" type="image/png" />
<link rel="shortcut icon" href="http://108.163.184.34/crowdeyes-parallax/wp-content/themes/crowdeyes/assets/img/fav.png" type="image/png" />

<style type="text/css">
body{ float:left; margin:0; padding:0; width:100%; font-family: Open Sans;}
div#sections {
    float:right;
    clear:right;
    width:75%;
}
h2{ font-weight:600;}
#about-us, #privacy, #terms{ float:left; padding-top:80px; margin-top:-70px; width:100%;}

.left-tabs-terms li{ float:left; width:100%; list-style:none; margin-top:12px;}
.left-tabs-terms li a{ float:left; width:90%; font-size:14px; font-weight:600; height:20px; color:#333; padding-left: 8px; font-family: Open Sans; padding:9px 5%; text-decoration:none;}
.left-tabs-terms li a:hover, .selectedAA{ float:left; background:#00AFF0; border-radius:4px; color:#fff !important; font-size:14px;  }

.header-terms{background-color: #00aff0; height: 46px;  width: 100%;  padding: 10px 0;}
.left-tabs-terms{background-color:#e8f4fa; position:relative; z-index:9999; margin:0; float:left; min-height:600px; padding:30px 20px; list-style:none; width:20%;}
 .headingdoc {
        border-bottom: solid 1px #ECECEC;
        width: 95%;
        margin-left: 20px;
        padding-bottom: 15px;
        margin-top: 40px;
        font-family: Open Sans;
        margin-bottom: 10px;
        font-size: 16px;
        color: #666;
        font-weight: 600;
    }

    .desDocs {
        float: left;
        width: 100%;
        font-family: Open Sans;
        font-size: 14px;
        font-weight: 600;
        color: #666;
        margin-bottom: 7px;
    }

    .points-terms {
        font-family: Open Sans;
        font-size: 14px;
        font-weight: 600;
        color: #666;
        margin-bottom: 8px;
        margin-top: 16px;
    }
	.logoCE{ width:160px; margin-left:20px;}
@media (max-width: 1000px) {
div#sections{ width:70%;}
}
@media (max-width: 800px) {
div#sections{ width:92%; float:left; margin-left:4%;}
.left-tabs-terms{ width:92%; min-height:auto; padding:10px 4%;}
.logoCE{ margin-left:4%;}
.left-tabs-terms li{ width:20%; margin:0; text-align:center;}
.left-tabs-terms li a{ padding:5px;}
}
@media (max-width: 500px) {
.left-tabs-terms li{ width:100%; margin:0;}
.left-tabs-terms li a{ padding:5px; width:98%;}
}
</style>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
function showSection( sectionID ) {
    $('div.section').css( 'display', 'none' );
    $('div'+sectionID).css( 'display', 'block' );
}
$(document).ready(function(){
    if (
        $('ul#verticalNav li a').length &&
        $('div.section').length
    ) {
        $('div.section').css( 'display', 'none' );
        $('ul#verticalNav li a').each(function() {
            $(this).click(function() {
                showSection( $(this).attr('href') );
            });
        });
        $('ul#verticalNav li:first-child a').click();
    }
});
</script>

<script>
$(document).ready(function(){
    $("#tab1").click(function(){
        $("#tab1").addClass("selectedAA");
		$("#tab2").removeClass("selectedAA");
		$("#tab3").removeClass("selectedAA");
    });
	$("#tab2").click(function(){
        $("#tab2").addClass("selectedAA");
		$("#tab1").removeClass("selectedAA");
		$("#tab3").removeClass("selectedAA");
    });
	$("#tab3").click(function(){
        $("#tab3").addClass("selectedAA");
		$("#tab2").removeClass("selectedAA");
		$("#tab1").removeClass("selectedAA");
    });
});
</script>

</head>
<body>
    
    <div class="header-terms">
    	<img class="logoCE" src="http://localhost/crowdeyesweb/wp-content/uploads/2015/10/logo.png">
    </div>
	
	
	<ul id="verticalNav" class="left-tabs-terms">
        <li><a href="#about-us" id="tab1" class="selectedAA">About Us</a></li>
        <li><a href="#privacy" id="tab2">Privacy</a></li>
        <li><a href="#terms" id="tab3" >Terms</a></li>
    </ul>
    <div id="sections">
        <div class="section" id="about-us">
            <h2>About</h2>
            <p>Coming Soon</p>
        </div>
        <div class="section" id="privacy">
            <h2>Privacy</h2>
            <p>Coming Soon</p>
        </div>
        <div class="section" id="terms">
           <h2>Terms</h2>
            <p>Coming Soon</p>
        </div>
    </div>
	
	
</body>
</html>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>