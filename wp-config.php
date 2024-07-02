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
define( 'DB_NAME', 'lab2' );

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
define( 'AUTH_KEY',         'FN)+nA~@oqaPQsvfA]AAcw_fi~ c3-$=`V]#k|dWES|:eAoL/HLZ/d[3&g(w)1D{' );
define( 'SECURE_AUTH_KEY',  ']o.wy<}Z)WgM)4.{*3i FusWNMeLA.T%GP_3~bQbp!A4vikBTA`OY#gvhf{3lPl&' );
define( 'LOGGED_IN_KEY',    'r$rMGKdGEk=m*j!&5~Frfi6GVih?mTl=4>F`&=2D$E]ZClD7yR*Urc:Xo79vzdR,' );
define( 'NONCE_KEY',        'zHb,HYkPslf0t<..%Kaxi;|3faN/RjJ[1_e5@>/H0J:#R1W~38aiMYU.dI^;`Lqm' );
define( 'AUTH_SALT',        '}O-V>jgW!v$;)e+fpg3sdJk]=;PnG<a:n:^ht3v?g$-hB<&^TPt;wkQd^*:.H[r0' );
define( 'SECURE_AUTH_SALT', 'g3I==5joNS 0?.MMS;AlDX5^iXaZNKo0z3X1~{z|#]kHVVA*1P{}~xx?54(@3[UJ' );
define( 'LOGGED_IN_SALT',   'qCb:g9|3-HeepHuATUC@6YPk%7I&wp+ YfaC&O= 1P(N<OnktH)4Y3bNUU{[3Mvc' );
define( 'NONCE_SALT',       'l>r173N&!4{)}[si`fYh+]Z6Wh%`HgWSI(O@sFrlZ[/T!l#[P?$8?v^=Z4@f?K=J' );

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
