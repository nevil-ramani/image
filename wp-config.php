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
define( 'DB_NAME', 'image_db' );

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
define( 'AUTH_KEY',         'b-AOATIqU(yrB;cB:)b=w_pdLErUMuL8_tKP.++[]W(#a<3))% t#z1<Aa#Fm sA' );
define( 'SECURE_AUTH_KEY',  '#p>TTEWed.tGm<G+-t,5y*l^,h3+?g0EauW9<)$;xH9o)P`#{2HpvTIl)PJH8ydh' );
define( 'LOGGED_IN_KEY',    '9Y2q!Pd93^:mxNjK+gAECwJGqKn JAo@Iu#o!3%z6{s)`/8-czN~i5On#_Z~myi}' );
define( 'NONCE_KEY',        'gTT3+Q@~eC:?l~j]/3Dt4(Dl$3:E7V}hf@eSH1`%$ #LXj*kldgJWrs?)d+])7B ' );
define( 'AUTH_SALT',        '8&Lj5nhsHn=0;SM/psW^KE{I67cFU%6Jm*~q>p/~ !Jdobo,:J>!k!NSUIcj5Gb}' );
define( 'SECURE_AUTH_SALT', '*!_|kLLRaGy]Lw/8rcOB/-o?xmwTkGIBn3wVfeVcv7b#c=K]o={Z{!hC7S2rnfF9' );
define( 'LOGGED_IN_SALT',   'c6jl_51}SN$}]h#6.XBY0@SZl7&@*w-tW{sz{ySh:skD!!y+I`ON*AfS5TuLoct/' );
define( 'NONCE_SALT',       'FUJf;&07<W:m-6+^ykoYH]hu(N=I$Xal0Y^|=g@PwfZl-SX=I#H5HuO/i}w:%XzH' );

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
