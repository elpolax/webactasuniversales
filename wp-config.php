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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'I9S9B$o<mLpcm;4r6u2s,jUvvM^nA> OYLH/3T{( o=5..?h~86|jO$:|T@|RMRj' );
define( 'SECURE_AUTH_KEY',  'CtA>6L8d/#o J)}p>.+)9UFFWoKJ5q$.Kn NvB};_e8K{FeGiCK9cI=&<J|co57e' );
define( 'LOGGED_IN_KEY',    '0qMLdYixm9|$}x[c#b2(M|w<$#JssS$E.zk*Mp/6$f)`Nwz[}7s|1TOrAbMX>6nR' );
define( 'NONCE_KEY',        '~+7 oR,% ZTM`eeRz5cG.=CLATk{PP;gx6p!r0G q3 w;J1wu?^kiq~+uw,/OX6c' );
define( 'AUTH_SALT',        'm# ey,mEy!wGi}faYi1M3-^__rjjZ7[#[`+QRk<o5Z%?[t*z@rJl<WFp2]F7#]W+' );
define( 'SECURE_AUTH_SALT', 'tSw!CXgEbye~P)XWI,el4(~d-z&S]8:bG`mcE.U-w!v,P(@8Rrb]&xN]oJKz..x~' );
define( 'LOGGED_IN_SALT',   '{u= xU;.u2J35wPRv&h`&>[KM=x]h4TeJ%Y<vXgtk92uCtAP.~[8.tZG4;:nNXu@' );
define( 'NONCE_SALT',       '4]bUWkX6;[3rDy9.nzGG#b[.R^EN<mUW*JD[;@r<Q_JRR-Sj+8bXV0G^iUO<0*9x' );

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
