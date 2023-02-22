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
define( 'DB_NAME', 'levquiz_site' );

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
define( 'AUTH_KEY',         'hJ:3`I.ZwH)T=E%U2q)F]TX[Gfw?#5RlG {x&|CS~k;q/[6f|~[7Sud$Xyht:!TG' );
define( 'SECURE_AUTH_KEY',  'MwZV|$YK-++QSpbEd T^o;tyqCFcYb~b5/Tl_L[}f2z8kO/>&(/vL3PxgDQS:uIB' );
define( 'LOGGED_IN_KEY',    'bn>)J^n@#VQ}[c#SnX4hp,hN$%:HjW1E&Ulwm7`0TA9%6G;E=!!Nn3#:5|ck1!&{' );
define( 'NONCE_KEY',        '@$FQ]-aL;`Y3:[[jbd2Ue[q80.}+@s=_z2n^_NV%C$aZkXNG$1+Wwe26*u.(Xs6#' );
define( 'AUTH_SALT',        'ck7~;E<q6Dv@LMhQnJS9?~pT<-T+|z*4V=NGS*r?2NKiX=|I7I-K.P|8;ZhRR0~A' );
define( 'SECURE_AUTH_SALT', '{*{{:c/|{[zuBZvOyCm@DBA@Q:5*rB#7&naCk_ETpS,mWtR(4^{Ym2#}C$;sHc),' );
define( 'LOGGED_IN_SALT',   'ZRM!;gnvn>OTk<6dwdznnW:MFc0^]l=lE^z`.+n5kdWFpnC]o>19k4ia,>mNCq%/' );
define( 'NONCE_SALT',       'SSKe.^sV945kJ%YIn02BzJp%F9ZXtvZFY,d#CCnx{:xe7NDHeB~S#r0T9Zqw~G/>' );

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
