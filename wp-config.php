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
define( 'AUTH_KEY',          'P^0uqc-q/3vfVcyM:Eko hzVJ0dbs1%dr#OO1bjF$@;{r/o!IBl|=sxV{G.9??{U' );
define( 'SECURE_AUTH_KEY',   '>-TWn;6/K}1bIdQedp?tRAD3r=jmp*Q9=gf+1?q9B6T/@<j#ZvuI)Mh5D]:jLu|k' );
define( 'LOGGED_IN_KEY',     '9r,E[XLwrvi_[JW@gY#?V$+ SCMpFDA8$Y.|Y3qnmvra0<0~ui(EtGJ(wl_<132u' );
define( 'NONCE_KEY',         '0oL0/r^SVgYy-2J-fUXQ&vj;s|A1jSJS(awJd4W?<&I`O(D%,vb{?]v-P6-tTSoX' );
define( 'AUTH_SALT',         ']sn0)u,*RFK@g/bt^l?eNeq(D+T4hHA]JEmdDavF4f=2XPD [|[Lfr3!VCufRg`H' );
define( 'SECURE_AUTH_SALT',  ')K~O)w720U/<^DS1??3m/.,z$nb%/nM:5`>y [:lCah2#H]58sg 4{s0T7~z`]JK' );
define( 'LOGGED_IN_SALT',    'eU?mC,VByG7cG^PaO+a3N3aLDINzgfe@ NR`!r(jsFzO|}no$MqC*Z6!,hv:1!r/' );
define( 'NONCE_SALT',        '~2Lp@P^M@P;U`KWe5wQ+7-m=@PJ:vQx^SH^2NiCNAtRib~MqOIxm; I,`*bd7Ud_' );
define( 'WP_CACHE_KEY_SALT', 'akUl7K-i^FgZLD^.z>wb%*=81maSCb0HCi(g{#z:szyM8x,<<>M}=Cf5G1lZg&4_' );


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
