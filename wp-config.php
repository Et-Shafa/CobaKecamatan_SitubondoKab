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
define( 'DB_NAME', 'db_cobakeca' );

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
define( 'AUTH_KEY',         'e|NcoYiA8MtNoO !CON8(eU/5FJUnF8nApWE]Lfx#rT(spK4|4m%76^FHCygtNq1' );
define( 'SECURE_AUTH_KEY',  'SKU6bh!#kbOZj g:;u?,2DICf,-DZ$f-A;Q&cpI|mGX9}hzCgnnB>ImN Z<d>r6[' );
define( 'LOGGED_IN_KEY',    'Hu*E_yP@h<Ui{TFvi/q4{0 z<ab%F<]rsz$c %Itfxi;30MREo-moGAjgP0xNIiC' );
define( 'NONCE_KEY',        'j(~GmpYk}MhMyEWk[cb_?lj)/+62rH11N.:Ek#ewN?JOe3Mzim-8e5mQcGEjJ!C8' );
define( 'AUTH_SALT',        '29SR~ZzV0Ac#3l({gwFpbfbhh&g#zAoP[y=_cf^pf;b7@wsXQ&X&d$Z29(MCH&.{' );
define( 'SECURE_AUTH_SALT', ' 1?_CyY}R5GXJFJ}50s:nVjC/ck815u/us#dsJOjx (bCyQfcNq(X96hvk:<aQ.n' );
define( 'LOGGED_IN_SALT',   '%1.XcG@UeO:$?1A_6|Y;3l(:le6:1oX>8dg?ABCBe8~~,xtP~Q92RN^s$WTr~q9g' );
define( 'NONCE_SALT',       'sR{4LNfS*qy2JoEH>pM)w*(uey]l)RR><0^:*y MuCx& 5]{B5%M-++]rb&p!c}N' );

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
