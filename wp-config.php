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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'h`qmL62:cn>?,8~IMRiA->=IeraPluNL(/Wr]5%}D#N{]8dGo5tkUb4mKKpxScc!' );
define( 'SECURE_AUTH_KEY',  'F{Pa*8wV oqICFdKq40nF)HMTOF,6Ws1k6Jor,@83UYITEhRkfSHRYM6Eg0d4&;;' );
define( 'LOGGED_IN_KEY',    'T6T=}O|7D?Dlz`7} %Qnh 0IW4o]t:mB{?_/ag:/).a;&EFV&HM&SK|:mnI%sc2D' );
define( 'NONCE_KEY',        'G][1Q`&KqXabhl8PArFXI,GpA`g7$C4>+@}sp`jx%BOwy~$>E-qy{DE_z tN0N?Q' );
define( 'AUTH_SALT',        'j12zJ3=tpSJ)VhNi[Aegr!S!z_mtE|#Nh^y;*iiM}N@l=bc:md^/P<d9{DP!C9,P' );
define( 'SECURE_AUTH_SALT', ' .WF16J:S:@?.-pG-nDLlz}0F:FsAJLdFz7p}:g86ubM>;9.4h;n]ec;LOkt?n2S' );
define( 'LOGGED_IN_SALT',   '%~Q_upzW@SRI^+ykfNpeH!9gdlv(>7{-~6 AB(cs(;gcx4xna!/AZ.kKaS(&!:W#' );
define( 'NONCE_SALT',       'hY0&U)y-^Go aq^NS&^y^=xQ/`N5s|@Qu>E&JYpnX-z^4!g},^5NCP-h?/ YqD.B' );

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

define('FS_METHOD','direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';