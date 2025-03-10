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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u2652182_wp737' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'AndiMandi2003' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         'm2ngc3slkurxolrke1tzhgxevrw4voezqmmi2oeqpozedeefxsvw7rbdfk6jpwg5' );
define( 'SECURE_AUTH_KEY',  'rclo7dhyfmnzdmdbbapoha8sftltuffzi2p6elj3hfdgjqeqn9ru8gamu6uabn3p' );
define( 'LOGGED_IN_KEY',    'tuziuh7eiwfa9o87z00pheib2qzjdib4mh0xhyiep3wpd0rms6fkrdql86zcowhq' );
define( 'NONCE_KEY',        'mipe6v4gsxwtiuxv0wklirsxaiiuyvo6flmrzwokwnuxmum0syhbkeym3dwiztms' );
define( 'AUTH_SALT',        'cyeuo2pvlq9liwmng6bowjbljyfv0hsxwv55g03hwo9fwm5wa22qs9hezukq1vn7' );
define( 'SECURE_AUTH_SALT', 'tqcwlyza6hk0qrqiknvc3hgqotw0udiauvmmdjdqfybgmsyjmf7wicjat1dclf7s' );
define( 'LOGGED_IN_SALT',   '23fhz8nqerxbsnd8zy10d4ofwdbohnbgbldqzufkxe5scl6pflupx827vdwwadht' );
define( 'NONCE_SALT',       'mpiw3dawkoagn4jia35sdgu5xcf00kfd3qhhn9rkbzdnnd0xcjmrgmmxly2g2wbu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpo7_';

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
