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
define( 'DB_NAME', 'envx_db' );

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
define( 'AUTH_KEY',         '!UH7+8,k=Nj/Si`-v if,G]+ciU=ZF/VI;T(HqbEsx1@u9ay*+]@IY3nD42).=lS' );
define( 'SECURE_AUTH_KEY',  'u?b,mb_Ufp2xAy|S3Q^AwVe:42}`L2lVl2=9xbM]1)l*+6U*1h*&1I,ZK;v.g:u/' );
define( 'LOGGED_IN_KEY',    '!@o30u>GA4yPJIdk3iR9T?50EWYJm~U5;P5LgE8?9g4]i,JuPYfaYz-YcL-MS%@W' );
define( 'NONCE_KEY',        '(djp+T1qDrITA{m>r&dobqta:L[&yGdXwbvBP_cxh{jcN&wC2bUpn~<E0mh|R!0L' );
define( 'AUTH_SALT',        ';c+smC#FzPHY]w$jKfg[Hr;^|WL#P.*Ts{Chc}Da<k7#i9xp|hf${;&J@p]LGvEK' );
define( 'SECURE_AUTH_SALT', 'k4@e7j`gq7n}Vs>m{RX@,9qro90^Wn|*IjxoWn|7ht_kyYTkz<<AvNp?zJ;l2r3B' );
define( 'LOGGED_IN_SALT',   '%o[vL qz&n.CO-<kmK(7p1.P1aXr.+iUBL$OH0f6/Cp4bDJ2fQ!}PS2?ck%|_nFJ' );
define( 'NONCE_SALT',       'cQ9M[v$n/$[?7hdKv?qsA%XO`pB[9n[I=v)>k3YUa[B*LL;g,z0bSdD4CJUxVn&8' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
