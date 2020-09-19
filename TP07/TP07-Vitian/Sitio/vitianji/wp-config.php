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
define( 'DB_NAME', 'vitianji' );

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
define( 'AUTH_KEY',         '6YrD,7*B+V?/L!npF&#--ytNx/m,hAJ(5=W-1?gx]v=LT)%,-`beXsReSoWY__Y{' );
define( 'SECURE_AUTH_KEY',  '!;I Z]v%#72jxj4eE#]sEK#lXd9#[JEv:Q:^7GoB{(Iq+E[mz/agea>L[8T~-oO7' );
define( 'LOGGED_IN_KEY',    'nY>+XsV`rWC{C6dX`u`cjgBuc(5pd4#,E}yz@.I5vrg#]OxY`!b003{JtrZ1mA3x' );
define( 'NONCE_KEY',        '>@A%7+guoX9/#9<7&iN{%hpT~.:v33Obq*1(>gj%*r)hcuS, =N&.v@khQW>#2^n' );
define( 'AUTH_SALT',        'A$r lD5-b1?r} iK!s#,[F_q Gh:K+hE:SQ#LHESD>v4f@.4X|=~`{t bZ;#%w:J' );
define( 'SECURE_AUTH_SALT', '_jc=UudS#t^,N@5VI<E`);$OIA=[u;1Ga4l6?SPs+W4bYCB)kjG4z/)ZNya]P[GC' );
define( 'LOGGED_IN_SALT',   ':bRu#k:$ybxtQOkJm0#Nl_`LOO4|5GgsAb-eR59f.{ 3H=c~.^}X|Y.3(nxl S5W' );
define( 'NONCE_SALT',       'F]K/XwrZDYRg6N^a|&;L-~kRTo1)IfG35B<dRjvbln9Uy~H RF;-sAQ~P1xv#Q!6' );

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
