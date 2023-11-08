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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'ac-u{Xj5L>FC!N-pTQElN0*-I4w!2|Q81O<ik%=i8a2 [l-p<fX9<Um}$FO-/pC+' );
define( 'SECURE_AUTH_KEY',  '#*_^]Z4^a#J4aDz]2_RpAu|[v-E?w5,t(8.XK7pR;ffAFtl)Exq|a&gsAXD.()%_' );
define( 'LOGGED_IN_KEY',    'g3G9gN_hr__l[)Qi=A%jupaq()Q^t:[tE6(_iDSJGKR9<hniW4&aTJnHWfbkn/`6' );
define( 'NONCE_KEY',        'X6zQvqHL Th0j1m$_Sfs2aM<5owc:Ga|LFr[;=qGq}zw4B_%W$jzJ.? -,p|&U2?' );
define( 'AUTH_SALT',        'tO5 !W@VG4T$a]Wg<*)OL[UkM .ic!,JPafnV13U?Ls<DDwc,0y{p/)N2#o=a7nm' );
define( 'SECURE_AUTH_SALT', 'v-.tzN2n=^r5Pu:@H(p9mGH1(>f_6nk6@bS.>pG)S!_W?]l%Q%uEWl>zWsbQ~zrg' );
define( 'LOGGED_IN_SALT',   'l2p]GA6]>&d?kWQ9J72UeGQKwDiF8V)VAN*1s|yx?f#uaED?EZLeVAcC@_5E{0D ' );
define( 'NONCE_SALT',       '<*..]lb;0rf8V0?5-#ZKk3#@fK(oseV;bg|AW!Cp)oa^H_lEz5s2@`<}=u5[]<$=' );

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
