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
define( 'DB_NAME', 'surveillanceprogram' );

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
define( 'AUTH_KEY',         'oj1HH+y|,S:}ru/%p2^)vu5{ -iNRn16=JX& H!fI*JdZdBm,1YB~{<o5`&f>/+ ' );
define( 'SECURE_AUTH_KEY',  'Us~dpx?:*{y7_>Y6oB4g[^a2>}-NR0=*^q3ZR0nH:rxGhnV/P}cwQg{gzQ7t2baD' );
define( 'LOGGED_IN_KEY',    '3% l Py|`ltaw7~+Z45Qfd&|??ve~!s:v>dJ3rn~!l2ie_}ryO>vLc8YwBsD1VLb' );
define( 'NONCE_KEY',        '0Hw,8CM2n<UjaF|u>(-&WW5`)B[%qu/~v0}7bHz~6^&FK,Mx|?mP?<*_tEe&$@Qr' );
define( 'AUTH_SALT',        'AJmgbab=$9<cM2p7A19&.9GuY~V%df;0>QSLY!RrC0yd#QorFCwcqeW=fd#YTBzI' );
define( 'SECURE_AUTH_SALT', '(l|4!>zV ae];E5%O2HZv@QXbw?@,^1ret-k@HSvSYv-Vf/ffBQaZwkWfzafR!w$' );
define( 'LOGGED_IN_SALT',   'Rh^`W_/2Z{W8,z-p+)nK-c,:[g%X|xIj:k/b%K b*QqiwHu@;zJ+Y69=PA$?RtM^' );
define( 'NONCE_SALT',       '&f<RSdm{%(c3#lm9WVSFLpvi9T%7Dl%;`i3>*l])FQ@Q86iOpL@<,sTlZ! ~sgAE' );

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
