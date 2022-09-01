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
define( 'DB_NAME', 'omkar1-db' );

/** Database username */
define( 'DB_USER', 'Omkar1-Home' );

/** Database password */
define( 'DB_PASSWORD', 'Omkar1-Home' );

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
define( 'AUTH_KEY',         '?!IQijof=DLz0>Xa?)!l4:ecO(L?:}%SVB1_.uL2gdYx{2D#3tDj;Fk=j.4S^2.@' );
define( 'SECURE_AUTH_KEY',  'euZ%g<iaRsR4`5V7GVz%R=1w8*5`sB:&668U)G?u6z&=0a)-]HiL^,!$4 x,dtT%' );
define( 'LOGGED_IN_KEY',    '.C(FP^.E~T.2HiQ&xJ13xgPgE|RE`}tElR=!76>`we|Vd0u~kCQ]*xKI~q6-RIB,' );
define( 'NONCE_KEY',        'yoah<pmFK=lWENFz6nY.^B@!Edr`?D{a/9%c0EAZqv5XmF7sR]9$<T$?2Q&7w*IN' );
define( 'AUTH_SALT',        '7q$j*|1Cqxn1H`km2CRJ7&~hC_vn0+OYE{w{E[0$)aN=+kB~jY,&I_[>yn;A2/v@' );
define( 'SECURE_AUTH_SALT', 'd?<%gy5hdGCC-WIRQ{*y72c?}7[%BjfRV%Ph7[tW2v4X0qQ/M]if/Ob`;FO^c2t[' );
define( 'LOGGED_IN_SALT',   '|!1TRSnIlpu!w)/Q:!b?|4kAeP/(HDt!U4Gp6 }CAr{}~s8>g6r!X!1CH~,?-f_]' );
define( 'NONCE_SALT',       '>&`0I&$0r@1B)U}a7i]`W..D1H)jXxt/=6z}.,c0iR$E`&trp;/)c#=%m28}zEL|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define ('WP_HOME','http://localhost/omkar1/');
define ('WP_SITEURL','http://localhost/omkar1/');

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
