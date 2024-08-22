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
define( 'DB_NAME', 'darshanvadher' );

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
define( 'AUTH_KEY',         ')*1J=($H5Ih^<H.c{^rPP1i=sz~o%ibhsq[=(P9i@S,)MYOsfW)+mFB8X9+IG3qI' );
define( 'SECURE_AUTH_KEY',  'Z*x~d6z;eaO=u!L4tpey]5(=F7q=p13s]sL0%t;7V),&+I7/%-hVb?i.J]Bz^848' );
define( 'LOGGED_IN_KEY',    'cI*[r^3|H9FtjpvRDK9qk6Q*ch$Fo3oiLb!v|r|GX#le(XjJ6Dc44_gA6j@ KKK3' );
define( 'NONCE_KEY',        'Y!LH>O7mp@y]o334t1+LeG:B-PmW+lT_Wc+!n2GNoSq,!vSMH#GP{M}Z1Qd6B ?e' );
define( 'AUTH_SALT',        '8Ewuhkv:07B6{Gt*+:XXt1)x%|7>nThHFFh@lm8`/x9mx~HT_vN);G9r*rOww#V<' );
define( 'SECURE_AUTH_SALT', 'l+7(OP9UNhV]u=Y_yzhGA[0_bhEKi5dJO[&aw~;.HkdE8H^ef(-0WT4%5f~JZ919' );
define( 'LOGGED_IN_SALT',   '#byyKJJ&*a8ab#3<U$QtIOp-$ 4$t(M8 a ?Y#d3N3rc=}Vbn7 76;OHS53zzGi&' );
define( 'NONCE_SALT',       'xTrN#kg:nVt|V9Z4ZdWa];:}|>si,Xqs)o-M.!-,dM,Hjz|jx72DI+0 w9n(`IHx' );

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
