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
define( 'DB_NAME', 'u746845997_gardnerconfere' );

/** Database username */
define( 'DB_USER', 'u746845997_gardnerconfere' );

/** Database password */
define( 'DB_PASSWORD', 'auMpDp/w@0X' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '()tK`wvBG64Zg|oyh72q{3C#Y`0 A9yfzI($r*ase!>*@P),4#Yaf~>[L5(fu1iN' );
define( 'SECURE_AUTH_KEY',   'NzIu<rZR;2t|~J*_=T`]JurA.HS`3xkI~8W<sIy-lUI.w1<)geqa/gI}]OGDu8So' );
define( 'LOGGED_IN_KEY',     'jIra]>@835eSzHx,<hg>KSrr/CAv1z-=Q!b6b%%L{wU|:[^J@Rv+Pv_Yn#`XfXu?' );
define( 'NONCE_KEY',         ']D~Y<,MxUS}ZooNkQAoq2@^ft?Z!gLK.UmC>9<qtzb5Eou!grQ[9p@4]0Mug$Y :' );
define( 'AUTH_SALT',         'v,~^-@q2ceYaA!W8@/nx`4sMdC1e#`4.k0DCRg&Lh97$d_oHGyJ)Z@H>U8z!CB$;' );
define( 'SECURE_AUTH_SALT',  '<#63I6?Ou^uhZ>u2)1LgdM]6VSoCaJEVYa/6-z(p|N_C I!m~8YWGQj{[f^4Cg*v' );
define( 'LOGGED_IN_SALT',    'Pxm!~l~)/1G]z4bXw2q_z7m<xr{O{%wzr<%_mP2/:QDUUp#y9wZ3@2H/K-qaea?c' );
define( 'NONCE_SALT',        'bCv;[4PPT{iGr2MHgmIJT.(Ojr@3Wh$;7yuH~d#$zc{m;KRsncck.9uI]ZO6MK02' );
define( 'WP_CACHE_KEY_SALT', ' ^3Kw|Nd+Qb(Ty^XYIYevP15h()=|8BF4kabNX9aO^P[+qB>QL$FAi9`Vz~AQcU{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
