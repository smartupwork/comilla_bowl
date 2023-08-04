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
define( 'DB_NAME', 'comillabowl_new' );

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
define( 'AUTH_KEY',         '8aaCkPqQ{VhbSM4<!$-5c/XZdGuga>j!Yu| 3Bla$bZ;D3f.e577AfP4oPwU?49O' );
define( 'SECURE_AUTH_KEY',  'yM.)*E~vSQY7{VHP:b{^5<w$E`k,55|pj?ru!qn^>$o7NKECOulCi:RDJY::`&8Q' );
define( 'LOGGED_IN_KEY',    '*Gm{@oc,X&M9FpMC3-}I.c9;,~{OoWq/0_jP@ZhRzx2!2B~tKYkNGgWZdQN`UJ)5' );
define( 'NONCE_KEY',        '5a0[VUo.WQ&gl379A09($`:tp[`d@VWXkOxv;y:_JP;osyfa@cl`}YFY:@PwgkIc' );
define( 'AUTH_SALT',        '(Pbg@SXw{bkbt([ w}&#`3DI</B$=}9ptWgB|?W;$30yzLj2&l8)!RX1m`N+|nZ3' );
define( 'SECURE_AUTH_SALT', 'V<:|a:2t?mD(-d~znW{@lR*6J)E&fyk9vF`(t=ObNm55vhjRgwg|1FRnSzct[$Po' );
define( 'LOGGED_IN_SALT',   ')[6#P!bG{,0#rs2&c:e%YGtT(%q:rMUX>>/Hp8O2c}_O(6[oNjnpd{w_1 7#u:>{' );
define( 'NONCE_SALT',       'Nc~gCP vrbZIz7l+ar!vo?5GacZU^s}T/fK-Uvfufst?ycwoX5d,yi 1oxY6I15!' );

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
