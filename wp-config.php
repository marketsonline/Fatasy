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
define('DB_NAME', 'fatasy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '6f~etUHBw-cEQd{Z(s=j*[h&f!nn B^?Kg^Y1moC@pY16jTYu@`qo%IAzL+hJ@-v');
define('SECURE_AUTH_KEY',  'TrPpQ)!6f{7;<4ah9r~-x~)w,[zA/1<S:w<%UcB6%!uKLwvEm=1D>)W%i5mJdVD~');
define('LOGGED_IN_KEY',    'j`5A5.rPoT{B,V3f-bH&pg)eWvJ7t:#hmaxB$QI8]l0S7 +[^!?Kjs5H]R^s?>sq');
define('NONCE_KEY',        '15[h||1py:I&XZkKRs$8]Q9u/V5Bp&ps,F?0aE<7{hH_^S3,;0G445I~W<H[L$^Y');
define('AUTH_SALT',        ',pP?1pj16U%?|NN=wb?ji`k V<~k_5, l5xZ!S[U@i~,WSc9t^)(4hpec!3(JTHa');
define('SECURE_AUTH_SALT', 'Q1I`@22oMKa75}Rj`OaE[a.aUER!~m0u&QpkGQVv3n~55~r5=a3o[Rq%1;`I.,>U');
define('LOGGED_IN_SALT',   'm>+O;3oHbk~Y+NqGSVd1nS_Mx]#oTR$>?@NU+UvWS1[wVwaB{E7bl>fR>`W=^Bb ');
define('NONCE_SALT',       'pJc9u,hx2_I~`R*~(k>qu]RfggC%$G=k7? WhuJzFps9I1z~rdk5~AF0GUO@U7py');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
