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
define( 'DB_NAME', 'shopdongho' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '!K?n$OA^8oeuHt$u[I=},Xz~ROF0I6+.^[$Hp?5Zu>-bj5T,_O0T <{-ro>H}QGG' );
define( 'SECURE_AUTH_KEY',  '[o7K+~f5c`*Q?D|x_o+13f04Uq]/pV8x?i8)h}xb};Kurm262_S|D1ufUE(m;DEU' );
define( 'LOGGED_IN_KEY',    'kNbyj6=4VJ<Zucejz-!<2=g@4c}^|(cG1%w2To%&y #M1[e|pc_xiNuDsfI19_Du' );
define( 'NONCE_KEY',        'MU/A}?=zFKd^6%D12%@;A?j!MP,%wk(CR[+mqg+w,2af4`X~rdk8y!ec{ljh_zg)' );
define( 'AUTH_SALT',        'yk=>7Br&M3pSvD>Q.Ix_A<_^zg]J=/66?QyI`;p-+lLiq:1g}YEy}<Qa%msjm<mb' );
define( 'SECURE_AUTH_SALT', 'ewsC$p.`C6k7v38F_cn^mAoL<1C/WbM*Ca~`VA}+PpmR=w(q7aCnQnz?GQlstt2^' );
define( 'LOGGED_IN_SALT',   '#&;]`w<gN{vFFC::tmw)*_V(;xP(jrQ![UT`pB$yQY=L:erIzo`{lh~J4I.saux#' );
define( 'NONCE_SALT',       'E`TWkpDechUF|tbRr{#rf|DRDunA^0{1y% n-J7s}qd,SC?J+VvM8{tzz/a_}CZ+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dongho_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
