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
        $('ul#verticalNav li:nth-child(3) a').click();
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
        <li><a href="#about-us" id="tab1" >About Us</a></li>
        <li><a href="#privacy" id="tab2">Privacy</a></li>
        <li><a href="#terms" id="tab3" class="selectedAA">Terms</a></li>
    </ul>
    <div id="sections">
    	<div class="section" id="terms">
           <h2>Terms</h2>
            <p>Coming Soon</p>
        </div>
        <div class="section" id="about-us">
            <h2>About</h2>
            <p>Coming Soon</p>
        </div>
        <div class="section" id="privacy">
            <h2>Privacy</h2>
            <p>Coming Soon</p>
        </div>
        
    </div>
	
	
</body>
</html>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>