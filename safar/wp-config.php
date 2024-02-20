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
define( 'DB_NAME', 'galaxy' );

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
define( 'AUTH_KEY',         ']iLids?:mthD 6B+5sc`Cfm~.,k{+x*.=<~%4oi41)EC$Pq1,?C^#D@.H)5;?:;M' );
define( 'SECURE_AUTH_KEY',  'n{ithp3A@5zv:wZ$}3e6SL24%&y.Ng.>2.>L_]4(OAR NubwzaG48!<NJ>GmJbnx' );
define( 'LOGGED_IN_KEY',    'ch0;[jni<g8Jfy2E N*-^o;Ov67z4^GM(Juaa_Y87y< u)v7f:3*=L34NT8!rIY5' );
define( 'NONCE_KEY',        'IDmoe:UP)7iG[@,dvcwat1|{?v?`gMc(#dHqX4UxT,#?*)pDO}.A<]Kq(<;&xk~V' );
define( 'AUTH_SALT',        'z%s_-6@4Oo[H#Y=(|XmYbce<L:V(~9>w&s.Z{@+b9RL`LDHRW-2Cr6iW9*1PUQ7i' );
define( 'SECURE_AUTH_SALT', 'aVf)seW8y-8-qDi)[5W0($.RJyDAZ6]6*C; &eCw2b+Hodb7s3<NL:{3SvQ8a>_C' );
define( 'LOGGED_IN_SALT',   '&+]VNjDX}e]B 3&)]wq*{&uD,Y$Lo1{#HZv?lz)4qRfX@VN,:]V`PoG^CK(7,6/M' );
define( 'NONCE_SALT',       ' /0o-B5,~R2}j%kDqfd6*hU]6J~.z5&Hz^<iQup@SoklGQzD#scP9&gs1^i+{o!_' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
