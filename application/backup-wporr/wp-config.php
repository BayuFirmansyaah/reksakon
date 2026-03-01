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
define( 'DB_NAME', 'reksakon_wp80' );

/** Database username */
define( 'DB_USER', 'reksakon_wp80' );

/** Database password */
define( 'DB_PASSWORD', '[SK]]-M@z@h.(.Fk72(8-p]b][Ac.g..@s]YF!n]nuc-Hv-.pVOTpj.74.!7x1)r!' );

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
define( 'AUTH_KEY',         'gqwmpphwyejfllm2xjdax2a9jnqrf4yyx597g0pzdzlhzgg6xgzfovyg4hllseqm' );
define( 'SECURE_AUTH_KEY',  'pjl3a03f8hurbn4ettzeowtbenhpgpfiyueh9ud2ys7qmq9ebtnmlpvzimtmllzk' );
define( 'LOGGED_IN_KEY',    'gttzcxztdkdy9nfnabc3ljlm1kytiurnvx2ge7j16uroxd9gluryeg5nfjtxtx76' );
define( 'NONCE_KEY',        'yiddohegcmmkwwbn7zlvmyvv3kd9gkqucglb2qoapyoofxbfuywthapahhkuyuvh' );
define( 'AUTH_SALT',        'gttyabdwdidjko4r7ehrpdghczczb9mqe8cxzmno7q9ylvikiemiylhky9w410cw' );
define( 'SECURE_AUTH_SALT', 'jtexp2ena4axoj5l9l1rx7zcsayjtvmknbmq1k7l4kzosbip00cgsdhb8yhjcel6' );
define( 'LOGGED_IN_SALT',   'aj6seuaf1obdlocoxx5krfplkbo78leuxh9lpxa2nnru1fk8huvp0vgqgu600zzh' );
define( 'NONCE_SALT',       '6yxqdmnkequvvoqti96r4a4uhcyig4fzrsqzen7wvbpmi9vgnecpuphk9yo3yzul' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp5c_';

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
