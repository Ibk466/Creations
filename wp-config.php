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
define( 'AUTH_KEY',          'sCst& 6Cn<Cox|vwJ`c(i;UB>RoDIcWVi3M)ct*#}Tp2dw7LEEe;Yto3o=rf%64@' );
define( 'SECURE_AUTH_KEY',   'X&1564&j!M!v >f)vD3^eVa.Js,32IAk=t/o.gDs`,+q},72:OGmb8}ZqM;{^U:7' );
define( 'LOGGED_IN_KEY',     'y4S(avIb_&gg{L$Xfkm5fDBm;_2aJ6&65<uI0M9Gr/4_!l-Vc-bJ0?NNbi6[ZPT:' );
define( 'NONCE_KEY',         'i^;%vMKd?p~pEjj)].2i*J*sGS(7f[6%dQMh|!i.*AdcOM}]3z/TNOXq}|x|+SG/' );
define( 'AUTH_SALT',         'WT{e1]<5Kc})C&m/(zm/8qeq&KW0f(x+:Ycp(41H5k`=F/wzp-(V{k,eaF6/>JTG' );
define( 'SECURE_AUTH_SALT',  'Y)G+|WOf7h-C_a2Yu>;/1t5ed-%YL:Hye2D*X#lJ4XFDKgz*T15+;-//kN_MIggV' );
define( 'LOGGED_IN_SALT',    'x&1r.P-jol@@z$u A]bUKXTF)<+D{_^C9<x:Bz 2JM*kjJNbY<EkAt%H-bH@Gv.a' );
define( 'NONCE_SALT',        'pLA~q$r{B6):5q:tGVTMDK4/}YAKW|J=d]L@8QRZTS/j%[v7j]bOXA]u#AZ~lq,G' );
define( 'WP_CACHE_KEY_SALT', 'Y1~gHBcXD0JV!Ha.z]|a{]g;Ys~vZh6Kp553*FGyPYQG|x=JCzxUSFQjvJ^EY _b' );


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
