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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cafeine' );

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
define( 'AUTH_KEY',         'MR+!b=-6v3;qvO,GvZv#7m+rm<N&Z*3l*6rcuU0;}@c<.9AK>}T 8#coLTPYiUPR' );
define( 'SECURE_AUTH_KEY',  'Z)O[`r@nf)&,U$qW-c<#~W}%d$|io/JG4JjIjt/pFY)F`]Y&up`<L&@w{o/8~HQ<' );
define( 'LOGGED_IN_KEY',    'gz[D(eV`zYF.~nw1dnM3|q!?fM0,{GFJr[=00b5h|_~T./e-@^`nQ@yzA=}D/dS_' );
define( 'NONCE_KEY',        'd-]U+&EtS*:9^!V-c,x:3.:-#8l#@lA#R25AN=6~~Q9,+FH&B[~9kc~d&N:wd-=~' );
define( 'AUTH_SALT',        'EfQ#AEmY,G$u?^XY+.]{x]SI&N;/;x@B55$-rCL/ez|kn7Y7H^_S6=yKNf;_oJf=' );
define( 'SECURE_AUTH_SALT', ';Pc}:+P^^wTd%Ql[dn2AOcx2+ zzf+Y)GAEnq3R4nt&^UoHNkOhJ5UpJmVu:}{bL' );
define( 'LOGGED_IN_SALT',   '-j@X^,=yh8U(p1 FXl>o C A%xnj4wAxW(QS*`~Y/3)I`=8v}mra]f~7Pd]#bTAd' );
define( 'NONCE_SALT',       '<5:80T%gsg{Q0L)~Xo</e#c>6?pg`@^m,J:+tr5e*-X4dq<d}UeKa+LM~8F~u>nA' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
