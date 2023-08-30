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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'broken_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '192.168.1.2' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+xh=Kpd>/0U0UEP9?Dw[[UGEX/|1x :zYRHeFAI0b<(?OX|/# ><Y}5y}h^kgPsc' );
define( 'SECURE_AUTH_KEY',  'J&al!WkancZ`AwNNGyN_cGBN/gK@(/s16aWdA-8=U1@yJ=cethyA-Oly$>eu)N1u' );
define( 'LOGGED_IN_KEY',    'M.Wiz%dq>y%rlaPq)Z[(#xW$_iK%/ W:.B{>1Vll(.4;duV?_e2,>tf?pqbz/E!n' );
define( 'NONCE_KEY',        'GDu`.@cPCWjebhhUXJI;ov7(A/(l97?(hFn|tv7bLnwW}=-w_<5-rai+8Ed_:Rip' );
define( 'AUTH_SALT',        'HPxEy7i31:+-k7~f@fGO`%meCO=*C:UXo8`!JfJS,3wn?TBx4.`Vv6:aCp=Rk!6{' );
define( 'SECURE_AUTH_SALT', 'wQ$:?>9NSR_AVce`/16d<* }ufl.P1zOqnjlA1,zcyMFW@2laSD/hbB|#~#<$`2=' );
define( 'LOGGED_IN_SALT',   'ZDqZhwL) gfg?d1vytoB0_+;:&?xQ:/Hm5*JDph*{lycj[3:z^SB~MFtSRvbT?O.' );
define( 'NONCE_SALT',       '6@Cv?)pBZ[TfL2U$)pC}pH}~3.+hWO6(Abzz=4]O-+/!}Mh*hHJs51FJB#1ZF5Ob' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

