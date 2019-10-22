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
define( 'DB_NAME', 'amk_wp01' );

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
define( 'AUTH_KEY',         '[tbH=c3Wi));uXUpoWFve:7q](+JgbR/$~WI4-w.RA?aIIsyM )KOj0:KVaG//0L' );
define( 'SECURE_AUTH_KEY',  '.$d_fFCkYI0gf=6<u)t,V(^PPC,4{1n%6@Qd%Tyb7{|sEwaf l88J-#?,JAS_Oa+' );
define( 'LOGGED_IN_KEY',    '40.S*L$Y2TXua{3)w(Sm?#k;uMmtj99u]D1,(UCPXD9*^U0u|Xw$,?AK[>d7 Gm3' );
define( 'NONCE_KEY',        'x+hi!McHX)H7{m._SD DLAr$n&!msgETS@#f>gpA.^4>BtE_Fh_lPf:u(dumOjF%' );
define( 'AUTH_SALT',        'sgE?<YBDiUdSDnKkBCP(.)z=fUfbU/oQGCFom9|+7uO]@zbks!X:#ZXwo@<FuwHZ' );
define( 'SECURE_AUTH_SALT', 'E+1Zui 8GW-}V-0k:DEtxs[IpHO^4m4MIsX DCYUk#uw`~D7Yy4c+EXHzB3K#jms' );
define( 'LOGGED_IN_SALT',   'b$ey3Jk5M_u$2I<,m_j>M;%>xbt{^3cIwQk-s0(2$I1P53mmk%%F0# e;#7,bi=Q' );
define( 'NONCE_SALT',       'aO{N<j8te36J5h&#UKp>8$x]uij+Q)o`aKDg6Bs?Z1:N9{_;cPzuu}n5g5%]%@Jy' );

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
