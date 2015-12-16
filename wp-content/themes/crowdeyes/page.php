<?php
/**
 * Template Name: Default Page
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
h2{ font-weight:600; margin-bottom:5px;}
h4{margin-bottom: 10px; margin-top: 25px;}
p{ margin-top:10px;}
#about-us, #privacy, #terms{ float:left; padding-top:80px; margin-left:5%; margin-top:-70px; width:90%;}

.left-tabs-terms li{ float:left; width:100%; list-style:none; margin-top:12px;}
.left-tabs-terms li a{ float:left; width:90%; font-size:14px; font-weight:600; height:20px; color:#333; padding-left: 8px; font-family: Open Sans; padding:9px 5%; text-decoration:none;}
.left-tabs-terms li a:hover, .selectedAA{ float:left; background:#00AFF0; border-radius:4px; color:#fff !important; font-size:14px;  }

.header-terms{background-color: #00aff0;  width: 90%;  padding: 10px 5%;}
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
	.logoCE{ width:160px; margin-left:0px;}

</style>

</head>
<body>
    
    <div class="header-terms">
    <a href="http://108.163.184.34/crowdeyes-parallax">
    	<img class="logoCE" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
        </a>
    </div>
	
        <div class="section" id="about-us">
            <h2><?php the_title(); ?></h2>
            <p><?php echo $post->post_content; ?></p>
        </div>
        
	
	
</body>
</html>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>