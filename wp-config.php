<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u996384981_p2RCK' );

/** Database username */
define( 'DB_USER', 'u996384981_W0xmv' );

/** Database password */
define( 'DB_PASSWORD', 'SQAcRkmhi0' );

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
define( 'AUTH_KEY',          'uc)~m[<$@.w(1zX(.,<S)Guf.}/Du+wtV2_KkwM<7C}VIF? =AB;x.lm%nbf,?bs' );
define( 'SECURE_AUTH_KEY',   '~7:&Xn(4Z;ZStc 7mUl_ cUFOBwio5}GD7fnORBino0lDnLX$(7g$ZtgGhe=G.]5' );
define( 'LOGGED_IN_KEY',     '-I@Ew6`dB]r7OIr2OUU5eg2}j_P/eT4ts}h!P]vPB8.L5H`);Hvam+kb8LTK8^~^' );
define( 'NONCE_KEY',         'h)1-Hu2@M*>tKD+QR>LwKi6n_;ynR3nG%_d`Z-qjCAaJ? &zV3jS*RP}o TMC>74' );
define( 'AUTH_SALT',         'i~1#3:~x%v W+sfo`:~FFACWi<hDk3F2& 9QIKfZ%@6Oa~0K5^^/Zo5%rr5Y?(hE' );
define( 'SECURE_AUTH_SALT',  '#F*09rMa<JD`E~#/22MkhfGJ~<3e(U*( U2%;#o]V^FkA:}Q!<,T;GC<pu)^<M2g' );
define( 'LOGGED_IN_SALT',    ']mc,!Q3 R650G3=Sn_>.O*UkxlcXl8>S4QQL^LIwf9.N!k&:6GdUUnO!>!ELyhCz' );
define( 'NONCE_SALT',        '9?~ATKqGd%KQ261_44V^&} %-2Lo + LZ1#VgJ[~czhCZ0:GWMH55DG{!^}/2d &' );
define( 'WP_CACHE_KEY_SALT', 'jOy>49BTN3cr%B_THdjJ_v{ufM7>/CfDzBv9LwIGioj_f^ia!u:#52^T8V^iosDb' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
