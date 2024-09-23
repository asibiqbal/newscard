<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newscard' );

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
define( 'AUTH_KEY',         '%[REBThRjeXbGQ7:!.?$snQ[Bk[E$8Tn,0=EN9LNwh(LyNXyM `rLA`M^Ifo9-l#' );
define( 'SECURE_AUTH_KEY',  'G7epP$V#&$DVxz}E3[+xUrEP,; +IL0Knz>BFV_/cP&<2pHMswTtaB)<u9P^u)Y3' );
define( 'LOGGED_IN_KEY',    'uD8%LEj_x OrH=Z)AR<m50TM:|k2]>z ?e96e$n8khvs6x$mM<?/E-d8_s&gQ0)7' );
define( 'NONCE_KEY',        't,]l:%&n`jJS%BcrU#(&y]w>qUVIlZEk%U_O^z_54_FAQd(7 |tg b<pJS6zUeu2' );
define( 'AUTH_SALT',        '1m<HGZzvSl#$KsCvG5]=oZ#@Mp!xJb,X?4U+O~V%,r;t[jxlcmVJYN(>@ApoA9L#' );
define( 'SECURE_AUTH_SALT', '3nXY3^KUcJ_#va7r&PN<T8U|k.$WpM(|s{v,HeB1MC!&}}8:5&i0(-hVQqZql6Dl' );
define( 'LOGGED_IN_SALT',   'sKOAIu+&EF/EyG|5mx4@/K8jO,pAr%uwj8tIoy4PfY{3F+[zk7h`#?hP{gyFU;]:' );
define( 'NONCE_SALT',       '[h$VwjcLzM3x!aAhy|r5883pNBNHZSG+8S3_DF2. stU0Gk~bQM)+kAioI$]Ia!,' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
