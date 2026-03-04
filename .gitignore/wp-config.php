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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '>rRQuZ6Uz$.QthkOf@hkC0vX#MEgd C(e<Ppp`7~`h+,)Q%(fr4$p+p)Y^$IX$l[' );
define( 'SECURE_AUTH_KEY',   '$-n[A~c8C^Ia|hW(B$IEr&k|~X502;nuB@>5&>.qSvM#/g{8.I=(dt{9{EoQK5aW' );
define( 'LOGGED_IN_KEY',     'D{/T:D)>bJsb6q3(*hH?pdC;Hi$wMrB4ZtoDmRLxP<e~OXRA+B5R}$a/#0eCI~I4' );
define( 'NONCE_KEY',         'nP-{Ly<Qmm,V6[6M#@E/7#`-rPM86U)VO/kcIfyIB-I_Dkzao$sU}PPWVAVW4hfZ' );
define( 'AUTH_SALT',         '( iNA3~Ul5G(7E;dJU~{ICjA4O~9a.`^*Oy2ETpakoa;|_(YZsdVL>?k*g7k#QPN' );
define( 'SECURE_AUTH_SALT',  ':Ja*:t~vXV1woEhVEe7I3;6d@x9i36>O{B)[5.HW8Rq3=W+E:ks!2nF+[ |[?;*>' );
define( 'LOGGED_IN_SALT',    'A?c(VR{@GTV[lXM]445I>H[E!+(WFp3_;nk_bGpoV7WNToz}5Yenl9N?vX$)`+DD' );
define( 'NONCE_SALT',        '4>s8M+(C/$#LOm_(/ ?v5jaQ,}HUwDyxBeru9aRMM|qWf/I 8,q`fF8?<>jC54uc' );
define( 'WP_CACHE_KEY_SALT', 'JpTJz5@Ef-3]mXOT&;i?UiUYn,$ PL_d5wVY1 lkDiW1vcT;|p#zhbu?<HC|$0x<' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
