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
define( 'DB_NAME', 'alphatrims' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p@ssw0rd' );

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
define( 'AUTH_KEY',         'fD6w(oV;_/)_1~cx`hP(,C@l+WNg^@Ny#^!vKT$ZLXT1*]D4~)5UtY=12)p,FLa%' );
define( 'SECURE_AUTH_KEY',  'S?($^2.J)wFNc3hP5G2T&Orx_eH:rceaK,vKy~4ah>9(|G#gIt50f1#dwSr>oBW&' );
define( 'LOGGED_IN_KEY',    '#Cq<8mO}Jfp8AYO>rV^Iu2AS{?LP#7TnrT:4N|^cdL;W}CoH.:+i?QdZI&wfo(~8' );
define( 'NONCE_KEY',        '$Z6~l$ih=ywN;Etk#|K9*_yj&yrEcM(A5jTRoHxauqj7p>Hnuy|~(*{yI7/Z<wgV' );
define( 'AUTH_SALT',        'z,0xj6/qP;SN<dj`qg|r7BvZZrM7ub8++UktvNA0:g.>G6*Q/^#*d2MdKBXLL{Ly' );
define( 'SECURE_AUTH_SALT', '4:GitU*+wSE0x-s;nCwbm*H]Mio;0yBG:j^pq^>0CJU&~gtyZs:*sUx[/Z^A;I$%' );
define( 'LOGGED_IN_SALT',   '`7QUeVb[VJohfABqyXF_6q:xcA*CgPHr;(V1ndex$tR7i{JAq>*7&r9n+P^|OnOH' );
define( 'NONCE_SALT',       '`p[Ny1OeNNFivm(0;&es47FO`1&!hibhau,,VG$,&f$|&W+Z~e)cka(fh{Hk<Jis' );

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
