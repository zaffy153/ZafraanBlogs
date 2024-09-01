<?php
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
define( 'DB_NAME', 'ZafraanBlog' );

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
define( 'AUTH_KEY',         'U]Fge}jKx<+PClA!Fz3*Z+Jak}_V~,.)$PCL/vVonU*[r[Y]2s+G~^$BCQsqW_oV' );
define( 'SECURE_AUTH_KEY',  'n+&}!Kd_#JV<s,$tp?0D5;,lB/-[MD!5kOv:I~.=]}FsT$cF(pP|w{i*&U*?R?E-' );
define( 'LOGGED_IN_KEY',    'c8Dge.:HB0~kL]uJa_ ,Ex4WP9MRq]vj3=.2 LYtI:M(CC&aVYFu~#?,RR%NCrEW' );
define( 'NONCE_KEY',        '90Yl{<EA<M3!PS86<A,Yza``e}eX>wBwAf&f)zY@$a$IBZQ,]&ry?pvq$kF~Cp43' );
define( 'AUTH_SALT',        'gL*CyG+MGS71g7&08Fb%NUTpGaHlNPf.#r,uS<rk>8pz*68fv3*~;htW^QcY7Df*' );
define( 'SECURE_AUTH_SALT', 'zME{=Vt7*9z|qz5:gw|Yw$ChXCQ$yTXMkEn=8QFqE8.Pf+2(q]-v;}}6PsWF2CS6' );
define( 'LOGGED_IN_SALT',   'N#L5,wfV9m-XY~TDU-jS[|o@Q[{#wRL1E.&7(-I?C)9BjX#<fMU!q&VTTt64vQ[p' );
define( 'NONCE_SALT',       'P`BL,{M@K7J$>[AWq$W(-(]NBNAYw(f-E:>lf09t[$F4Up7g@~wy7zyEs{vC,cT&' );

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
