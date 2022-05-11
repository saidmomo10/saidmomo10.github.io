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
define( 'DB_NAME', 'face' );

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
define( 'AUTH_KEY',         'qM*G~DsUSe?~%|Hl&NOV4]LAMMug+3Nf~_,uA#~@^+ulIQ5#wKP#m251FH$MGY8n' );
define( 'SECURE_AUTH_KEY',  '1Jdy.xx5(.~cM`_p&9A D~6g$(yHaN}6Gj8p/;MR7_{t*D^0*Bg&X`Umfqy~3D0#' );
define( 'LOGGED_IN_KEY',    '2ga][<M6}_tk{Ls{,}ZYa@9.9~fzu}{p#10?&|2AGa%a1y Y*Uv/fv*2IHDPoSVq' );
define( 'NONCE_KEY',        'H{1cf^rcOCf MIfBje,Ne6{dpEarL5RAtV_f||w/)M;uMM#@)0wh0_VWr*|Q(V_R' );
define( 'AUTH_SALT',        'Fg!47j#N-48~94J`5e)`xAe)M%0dx5NCC?r}.$ymI y_5Bc1_a&Jg_jU1!$jzkea' );
define( 'SECURE_AUTH_SALT', 'lZ)s@+o1OBz-G1k AvOE9X/ES%s[RT)`1Y|wh<m |Qm0Oq~aN/kJt>4J6Vv;AsUF' );
define( 'LOGGED_IN_SALT',   '.9I9lp8[z%h|YMF-MoqWOG4CDcw)2qZTMu4Z5}Gsp_,P4TDfYw%^b7eTV>X`|EFz' );
define( 'NONCE_SALT',       'YDZ4H{G#v$x&@f(9WYD:Ry.];.O/<!]!a[lXj|833U%o}Y4U/va31@1u9gN-|(:P' );

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
