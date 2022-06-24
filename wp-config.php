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
define( 'DB_NAME', 'mysite_wp' );

/** Database username */
define( 'DB_USER', 'testuser' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '{VK|QvN~t/@,;8nwOb2~-~NH%hVBkKNfg7FpWyX!?q|/zNo#fweE#F!ya9N^G,9U' );
define( 'SECURE_AUTH_KEY',  'z8Rq>8kC&|TbJh=y6C!Z,:2[]y-)E3pMj#ecNhM7^R^>EeR0Vy*(cYlk<YV%&j:q' );
define( 'LOGGED_IN_KEY',    'w/w?+HV`qN(]A#${VOGhV@zAIbJ*JU-EJgrs;{<eAQjHhUd{q0!9(V9G_n( 0yLG' );
define( 'NONCE_KEY',        'eic_^{R+-M:{Fd7ACSZJkthZ,A`gNYQa&xc=D]jRmK.3ySP/m]a2lt*0l%+GTmGh' );
define( 'AUTH_SALT',        'bT^Qx -R+jacNl5:/D4jntN6P}^m4&GY].=|wy>R,)v6u7$EZ2%R5W:$h[YX+YrL' );
define( 'SECURE_AUTH_SALT', 'W`T2x14S8Sadv&cjcZLSxDRPif].aq=WDb5R[o.CkIrcXkGoLd.KS+++Rz0gD(Q@' );
define( 'LOGGED_IN_SALT',   '=ubCb/::7l3}|}4~NK~jVHT:y||qQ:JWP=H}pAqx|7]O=?&l#sz8*Fd@`pLj8%E<' );
define( 'NONCE_SALT',       'dwPdZT5tbyO|nQ3?B~l-ro aGM!w&M4ZRCHUAK*qZ(vjvjj6uqkW|?PtK%t>5<-t' );

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
