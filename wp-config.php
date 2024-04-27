<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '8Um7xN@p;*^Q</-|rZOS5{P*P0KKxOdC=*Qjfh2qZ;-Sq4wN(]r[uC+P+6m^<$f=' );
define( 'SECURE_AUTH_KEY',   '!6kuP[fSb@z[PNpx{/ Q?(;L|?1]*Xetm8F&sLQG|%?+]{?_o{+6Sz &C*-.]d3^' );
define( 'LOGGED_IN_KEY',     'yQ.cgj4egi0hx.s5vv[IuH`%(Y3PhyRfKKzM:UA!2L}$aPH,GBwWL@h]y8?DesZ/' );
define( 'NONCE_KEY',         '3S:nN=sB,p|zbMGi+9~;%7bM_X|y,E}q!)Rl3{d[{Hq?rw.<qbf$rm.y++H4LK$$' );
define( 'AUTH_SALT',         '2KaD=d,~xxdU6J]NBA2LCB&@qnwp7qe@iN1T(Hq?T8-P~6v#WScUrct,kXvHAs U' );
define( 'SECURE_AUTH_SALT',  '8dA9,_,-4R(t,[DDuWX[:{Z&(G]D{ht/5lRq,sW#NY@MM^l?qEWrrB$!@5A@&g+&' );
define( 'LOGGED_IN_SALT',    'x&/2#DkBHVwRU4Wgf1e,9e_@q%#n_wuGMZ~k4t,D^l=AuKCFnt~7EcW#$u)S@O<~' );
define( 'NONCE_SALT',        'PE86PscMBdksCoNVbam$,F(rS?BG8nngzqb:NoWyfuQhf92G@8S^e$.;{2kp<Jg%' );
define( 'WP_CACHE_KEY_SALT', '@M>p4(@xNws<$[UydhBF1SXmMFBv$:U201r6BFA`1SgM+E|kES>z/rOIaO;-~x,Q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
