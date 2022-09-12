<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// 此設定是必需的，以確保 WordPress 更新可以在 WordPress Toolkit 中正確管理。如果此 WordPress 網站不再由 WordPress Toolkit 管理，請移除此行。
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jackysin_wp_hgjlo' );

/** MySQL database username */
define( 'DB_USER', 'jacky_wp_7g1t3' );

/** MySQL database password */
define( 'DB_PASSWORD', '2tC9$gd6JG' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'sK[8#g3gn!_Buj9P0JtM7b4b-~B35CZ312UzpoHh_7&8H+#%#62p0WN1;dj[[V74');
define('SECURE_AUTH_KEY', '42r2jX]!)K[4Nyuze[)44]]+vcOqFlBSy2B5kVL94ad;brjA+__pH|txSha68|82');
define('LOGGED_IN_KEY', 'o]tmZ6E/gg]7!8SB/5[lhUs!V:7_gy0205tY]/_BR*uk@Vr+mk_75kro_8F:&Pf0');
define('NONCE_KEY', '8_(X6qHYFzoNd94;&3+y4+/a1EM#WjKr]9_y~2]5;H;9#[!I3d8:T4MP4+-5X#Gq');
define('AUTH_SALT', '87nj*]q91E_d6R*XHt:K!:1F3!@s]an1e6A7yI1(oD2onu:V4Vx!:brd/4:2L|g+');
define('SECURE_AUTH_SALT', '&*_gn#:59t_7l]0m*2Ox!6|2+rtbgN7_[022|Q60i0pJP7e49+9s[As1)5d74bGV');
define('LOGGED_IN_SALT', 'wJM:;q/ao%)gXf6(&U*2%5iDk2t2hhSKiXM*27_x;X)3ygD]|9f#CF&r!If8a)4y');
define('NONCE_SALT', '~%y/iDDiImW%1[45[BusS[*ds8C++26@aiVN0O%Y2f1ua)Mdn9FzUc7lN88x:0_9');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bNLyV2x_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
