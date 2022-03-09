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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'EventListing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$sHv^@vJkI<acpo22lF@,;~gXCW;9DM:k><S<z(@j?Z)||{zMlPWIV5?dv(E!<YW' );
define( 'SECURE_AUTH_KEY',  '4zCZF{K*c<#oRRsIp=d[OzEa+V9|o&W>&:idAsVfr+%2 $f#+|:$s1yxkIw`5Z Q' );
define( 'LOGGED_IN_KEY',    '|p>32x7W#i 5wv@[0 8m?V]@Im1/s{,wv-D_wK]9t#&;kkDHd9~cH2N6A>}0lfjB' );
define( 'NONCE_KEY',        ',E2U4r86x] kh|`(}(v?m.~doL&@En9}uP~uW79y 1wl1lT-Dan^*:H9}jfwMe&B' );
define( 'AUTH_SALT',        '`1U9bvtt.p$])4>+X5~exg.GQ=?e&]PV|tm{C:HED<n{Y 4VUzm,W0/}?(7f4m${' );
define( 'SECURE_AUTH_SALT', '96C(?:o0Qh`18^X[.n|Cdf$n$PH8v<vV4(+f!Sv[K-sz}Gje*&~$ SJ)Y Fx[?e}' );
define( 'LOGGED_IN_SALT',   '.~:-)w-Wsj0TIWO*%+;Gp8HljH`]@zguh z55-l(Hcg<Ho=4q%)}nW2P,[0)>U81' );
define( 'NONCE_SALT',       '3,+H-`~6nZ9wCiA/=9u<)~ZE#]*!!M^;)mmU4[;ZcskHyjW.)=<Bt3)cd3h B|M[' );

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
