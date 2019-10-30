<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carlos-francisco' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '9552835eeaebba2f9536196dce73d5be0de0a09fc5de3e6f' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?=ozO^_$Yq(h#ZEZrp?_M~<EN{UG/Bn2Pf2.X71@AuWoh7lam6<6?VA%/wX+QK&0' );
define( 'SECURE_AUTH_KEY',  'qIa6<~5VJReDayPIH-_]1WUo% ({-4$i3:?1<=$?]4un$r|Zgoc%p{o[n7U3ev{/' );
define( 'LOGGED_IN_KEY',    '(-|C}cmiGSxat+#zH&vBlxU{mq[Tdy=-^f?Mfi{hZxQdQ2<q<%eiPKH18@Avi$Hq' );
define( 'NONCE_KEY',        ' Ud.#iSjiriU3!bz_4VVFs7<q1?F&$=a$TcMIdH/DmA&5CnX~q*Fwk|(3IdTyTc!' );
define( 'AUTH_SALT',        'o>U$U+,7wI,s.ws>301}>{Ir&979YadccpQyLv{@:-M.+^AQ;2_ QZ=O{4Kq?p/0' );
define( 'SECURE_AUTH_SALT', 'oIJ@kol@FNBbVn_#2`Hij!#?ey/bcS.Gux;dnt@M3R5]m/Zv$_:GV;Q?yJuB}~lb' );
define( 'LOGGED_IN_SALT',   '2qtEcHK?ilcR|yP2^]<HPelTSh3.{k9O&))aCd;<^$Em<QbXTK[n|QZn Y&j1x#}' );
define( 'NONCE_SALT',       'QT7I1ThTKk]eb5?O}I_A]_Q ^={[ktc3tNBvVA GLq &2SH{~ub<vcRuv|ej&2dR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
