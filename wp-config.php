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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '^r;JSxVazn_#no8?57wL`b43Pn]eqaqH-N/^bF!A6-cdwbWn.S[*>>*K)2]U*ea.' );
define( 'SECURE_AUTH_KEY',  '[v;6T6U~&-FkBi2M2&+kNJeTqIEK.x8`khMN?NHx ?Z~U&NG*^Ui&4`<,s$y2hs5' );
define( 'LOGGED_IN_KEY',    '/zBi}F|V*{e6xEqr/@bPi9+OW-}R,UcoyhH`=V1CDSNNXQ!IIMp&j>4GzmM&DpTL' );
define( 'NONCE_KEY',        '|]^7 ;x@!2Mrp@WxlF&V>`;|=ei^kzzc%QmYwc4P LDMB1~:xKZL`@7RI};8Cbxg' );
define( 'AUTH_SALT',        ']X.gRJjG*;Zi!!8z>]wCec8e@5LyYC*5diEQxNPO4H*CSra?0V?P^.KE2L,G[l-f' );
define( 'SECURE_AUTH_SALT', 'e=OR>>[E56us,tJ?wMQXQ.p^D i#JEO-nwxao;[p8D(MYe:&GUE#!^3,nC2/q$X<' );
define( 'LOGGED_IN_SALT',   '&$g@e|Qy#xxwQ-=&/T1qZ>`=wy,_8t| S4g/<.o$as,NGsib,N^F2np)d-{B|4`-' );
define( 'NONCE_SALT',       '[^&}vHXwnoslr%QsxqL;hlvGBkcc0|wKlKjY1EdA; 8Qd<g/SNdSH,1wC!C*tqT7' );

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
@ini_set('upload_max_size' , '256M' );
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
