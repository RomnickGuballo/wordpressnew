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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yF@pn3+sBqb((hAX9tEuvrJ.pDYz3@@+4qNJlB3#_#3k?7F#VeR9+AL=~4s PuSv' );
define( 'SECURE_AUTH_KEY',  'wD^KL^WK<jry5`i.D<j4Q3MMNA}-h!]%&[=C2m]vZ9.A d.5 96`kUP1o@O}R==h' );
define( 'LOGGED_IN_KEY',    '=e,w4pMIgrD/~WL{j?lR9M@3[lx6GDVL;sG.y<VV`;ior^MDfRD;C;D||rqrpFZ,' );
define( 'NONCE_KEY',        'ek$gLs63-Wg^}evQ2#okB3duZZaawVnI</|~02[`7#IN>GKn>OWe#-^[[+Z1,&Dv' );
define( 'AUTH_SALT',        '-[K@wzE0bm#(q=q6#JwFs%mjuM@hUcDiun;jcOf^s8Q%iQaOa]$.o>PnKM&zr e$' );
define( 'SECURE_AUTH_SALT', 'k_teM,X51>Z} )&UG?+cZf-zLxhm]Ws7rJzo=@R7@LY^Ix8yD.la>|_Gbc,iM~?>' );
define( 'LOGGED_IN_SALT',   'qv%j9s?fl6Z$Ay/(hQm4)vBP&DJzh>BJG5<b@K*%Aqp0%P5daNBW9LP:>Ha]HJ<z' );
define( 'NONCE_SALT',       '{b^1a]O;R>Nu|4r{Tavc@UANkEKT ,XE)7kl}[fF+;=iXlLZ&c;okie +QJ?]Dbn' );

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
