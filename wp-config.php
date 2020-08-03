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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thehoth' );

/** MySQL database username */
define( 'DB_USER', 'thehoth' );

/** MySQL database password */
define( 'DB_PASSWORD', 'thehoth#03#' );

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
define( 'AUTH_KEY',         'sAl,A(E8kTYHuW^rX}ZI )l6KG*_cV_a2&O+;yylF(Dm:1{U1,0=H!t~Qgm.$8LR' );
define( 'SECURE_AUTH_KEY',  'W)wkAJi$!OjUN6jCX=54^sh^BU]zZM`^n) WU6O*auD1u**>r[+CN3_Q0e?BPI(}' );
define( 'LOGGED_IN_KEY',    'XS@Q?XKQ3%Fy_X=Y1G%1:dWgg#0ly/(P6.N*QEZBmoCx&?%quq,?VQo>920#KLq{' );
define( 'NONCE_KEY',        '@0bq#Kk*S..B)+]`(N>Q?!)pT%5-VShL]BSo*(uGe]x/wq>W{Oo>eMIx+Q(Uy@gk' );
define( 'AUTH_SALT',        'kU?NfdANkG`B1j5i&Yh,cUa>xG_1G;y,V$/`)I}|)I[Fy?-7+U!eoX{Y,=:vd$3b' );
define( 'SECURE_AUTH_SALT', 'H=|o+n*aT(^~?Rui*MC. DbD0WDYWi72gwFNkyfqsO<JjdU%i-{fV@O MPHMn>=7' );
define( 'LOGGED_IN_SALT',   '.xp:c(w.nDz2l?!Fn(rPE|a-8,c=ZyD>-`[,n& 0n;}J+^Y+S7g=YWL t*7$Z6L#' );
define( 'NONCE_SALT',       '<Idy6  5cC)Kcy?#.a!K.BoFJ|-I2`EkU<W?ZV8lt{3J::sZ<M#`w)q(p-m`DI(x' );

define('FS_METHOD', 'direct');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M');