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
define( 'DB_NAME', 'stanford_wp' );

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
define( 'AUTH_KEY',         '0@oJ1RJzO~Rk}}X,%!+yHiS(oTR~[@Dx8wn,GCjj+OVvO<XX:9t58jld)UkoHygX' );
define( 'SECURE_AUTH_KEY',  '+`[[wM,@N^XZl2Pe=96~}u}>4[90z1uCYO2[w1/2}NaMkL3Xp}Y Y5${Pizae/fN' );
define( 'LOGGED_IN_KEY',    'NGNL[_}j=XFk;Ho1)8qg,Q<K`Mce#~f2`U@h&]0^86~?430rn_m/VN=bb0%@F)@<' );
define( 'NONCE_KEY',        '{^jZXm4e?+JW)*>vx+Bbr-%oD.C<2WCP}G@:~gT)_J`{2;v_<aqPOWylQyXUBR;(' );
define( 'AUTH_SALT',        'tm&l(<7J>PffI2Th!]!YSBL:dNa^o.RwS]bzTe-&~I&Er$dpF:TsiXKM>_BnR7y/' );
define( 'SECURE_AUTH_SALT', 'cv/4/RWQot#uu8jwQ-&S:*t+>a/+#urF#|Bxl?Se+8?F)A&:cky63Pzb/g+mC+|.' );
define( 'LOGGED_IN_SALT',   '074+lV4ElrFWM=B!lM@c3Muv&~y|dE$+Q)C ,|,K}4-[kG8~`3G*j=)Fk$5Ek_76' );
define( 'NONCE_SALT',       'ZT60&%ww_w4w]4u&qJ&3BM7= % 7Ny.E]>aIs_m~?#lhh0}2,ZRl,@~C9bNA8I}_' );

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
