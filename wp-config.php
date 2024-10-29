<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'FmOk#uK,cl,d@z`{8S4BKVEy>YJ]|p[O$.)se,&)=U8c}fj`]>1-xztc.yWYhv=s' );
define( 'SECURE_AUTH_KEY',  'W>3?{rXgr8l1(E/SAX(,Yp|1)gVb7(ajz^m8W :cX%`r 19S%vOj_C}?TQak;=M>' );
define( 'LOGGED_IN_KEY',    'h.#;bk^o@ow)4z%zd|l9W}`.U7rqWa5(M2q? owpMoS;hZ#J~=vAreKi/-^EWX,.' );
define( 'NONCE_KEY',        '7tr}:l<4YD/TPD@xF^%KYgjgRl.Ni_}*Z6SY-=cwYFQ<Km-MawV;k9%k5t1av2sI' );
define( 'AUTH_SALT',        '_33+2lQ[jTTWb781w<~jO>`k8u(0R*=#W`*X&_= TLc.l92 ^fj#TXCm2gavIXQV' );
define( 'SECURE_AUTH_SALT', 'U#y5~&SQwgQjEIE4<m-bTA7UJ_WE&qv?GXA=0-4Tvd!J^kRSq?[5 &nJgX`xeneH' );
define( 'LOGGED_IN_SALT',   '<$6{>c g7];w{pc|kPwU<B*q_bG!FVvl0HWa2agu]jN^dP)-,V^.CN8sR?I,GDY ' );
define( 'NONCE_SALT',       '4I0WdTcypR@x3Wz<;HULC(|RS3p/M*1+FhhOV3<kS+8MX<.tU6SgB=Zv4P%PAq;i' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
