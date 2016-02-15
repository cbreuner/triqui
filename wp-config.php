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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'h9?r#~clyISd^k-zl~`F64{DL$vt[e7p%S%P#K%#[9372|r^j3<t.g#fTtI!SE`K');
define('SECURE_AUTH_KEY',  'LF4B_M=`0J|#BZx*OMfwQglmgK|;^?1Fa4l^c#W)* }FQCYZoLH6<6fWwj}kUYx+');
define('LOGGED_IN_KEY',    ':aD|`=+Y+}e-bID1q{c/fv&&*6g^q<{v-$vB,uY-2/C<IihGkij_Hy[HT<Jj,ocf');
define('NONCE_KEY',        'N!iSiTjpxdj(B+G~,;N-W j#<.~C.6V6Fx:9Oh=VFuzj>yV-+A[UUPxT<`c[wu>.');
define('AUTH_SALT',        '|3,S#t90D9w|%6M[( wpEKDL%jt0Dwj5:rb:{8x,OsG-u{a#s_b_rS{AgeoWccO,');
define('SECURE_AUTH_SALT', 'r^YM8&#hFX+0=`2~/YtC LE~o$d*=y:yB@lmU[$q|9XV!:[`qp)z6$ nx<Qi@+tX');
define('LOGGED_IN_SALT',   'v+tR#eW2+p83=MZ^G.C2@z4jZ[-W3zL{@/1r-bCeVSh=4Rts-e8mY-*|fP>u[Y5p');
define('NONCE_SALT',       'R%-)DhHJY,}thn)Pt^PKJ/{&l}ps;O&Nc=aVXqw]v,i3 1>Tu$=sSQp8z;%W2T(O');

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
