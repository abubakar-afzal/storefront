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
define( 'DB_NAME', 'Database_001' );

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
define( 'AUTH_KEY',         '-faWZ9<e?qVXQ<M?|,$]wp6/QD<tgsvy=s4`zAL>xO-< -DdY #<3FneZY;z,DG:' );
define( 'SECURE_AUTH_KEY',  'd|-9G&a&(z1TWg+/4nn,5=D#[5I/H)).F3PocM90e1M|tZ!766<dJ2W=#f~CfwQW' );
define( 'LOGGED_IN_KEY',    'F5&`NX-|?-8Pc#1Ob:XK8@TEx&GCl`R4.N15))g%]f0~N[Ry Hu9dwmvZT(!Q]RF' );
define( 'NONCE_KEY',        'T8x61*zfIhSX4GKTIl2mvry94qt~AGyM|{2cN[!@NYw<H{ZgP=b1bdxh:Fpg0R7!' );
define( 'AUTH_SALT',        'HSNW#HL[(*2g>J<n(9>D/JHf)&DZtg@/=r T)W<=ztUU/c+Kp3jV]-#8;EZT{O!2' );
define( 'SECURE_AUTH_SALT', '8-q*dC6<9S2uW-/9eTw:3bR4uFZg49[`1%A;Rk=>jlwaIMrYq/eyd3{hezV8MVwm' );
define( 'LOGGED_IN_SALT',   'qwK3?Io=R| {DR]#v;Pk CD6xJsT95B E-yAAj=Gy,crKkr4fiyq47YMnJS<-Q$f' );
define( 'NONCE_SALT',       '|;L~#jG.1]uNz!*.kHU>-u(ZA2|H;%HSm<b/g2qm(HEzrIn@ppE?d?U}73C8CM&6' );

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
