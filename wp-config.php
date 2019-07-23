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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_fakenews' );

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
define( 'AUTH_KEY',         'Q{`f {Z8)c9hX}?CU~i-QMf[n{Oo$JMG]O.3m@@K^5cc5u,v%7xci3![b{yH#z=1' );
define( 'SECURE_AUTH_KEY',  'joSv#G]P5+0&I7e@MoMa^MN9g,oOJm4hSe6 67ZNlX7$.IF{: 7ccawdqnj!5{-J' );
define( 'LOGGED_IN_KEY',    '/aTlcb9r`G=_9kAt{9$Rj2%YI}G9j`hkRFXBQhmLM$:&zkm>yHjA><%oyR}j{w^f' );
define( 'NONCE_KEY',        '{7KE^bpbmP`H0[Q^SKdvy*dp%a`gy<qRB=+&M,~r}dQ$T-K?wr_]_r_VDBVqv6NV' );
define( 'AUTH_SALT',        '~lm57I@xh)v`Dj%Gh9OVfBW{XC$PoL=OYkm sok|GgwIVp)W [Q@3^ZKO%G;s&g#' );
define( 'SECURE_AUTH_SALT', '~hquK85&P]Z:tK*&wi:U9/n;t;~~8{[|C:U[/VM,5l0|ys$qafA)oj*LP+nXjd=#' );
define( 'LOGGED_IN_SALT',   '+fdx@nc,x7Y^rs`Eea9{SwIJ9t|M*y@eySL|>(QNw#C~8o<+m):WZwj$Qd,mo56~' );
define( 'NONCE_SALT',       '5)Fg^Nux17ezYm9cbBOp_M+OPHCa!d1nSgTLNcsGrk[;fx`&l5q[,V3j}[?{aGrM' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
