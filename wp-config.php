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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('WP_CACHE', false);
define( 'WPCACHEHOME', '' );
define( 'DB_NAME', 'bdd' );

/**Augmenter la taille memoire limite*/
define('WP_MEMORY_LIMIT', '96M');

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1YEPMqBkMMFtkAcyangWKb48nYGoSG4tMTY9sDdnpnZBlCGobLarFt9D+LnG+vLtFadSzDmpBLx9uKw6KUlXrQ==');
define('SECURE_AUTH_KEY',  'z5yItv7VK3mcPSlr8koSNYstF/ssAYPK/amabwCOIRQDlclEyK04x6CfB/167w39OTdSb+oWxN+T42JFkwdMdQ==');
define('LOGGED_IN_KEY',    'grxle7LCqmfVeUpITVdsEytzkLj5jUSO8Khz9Mr0KNd1PpXEUg0y3Dy0ZX8/f/8+MbtfZVoC/vCPe5McF6X+IA==');
define('NONCE_KEY',        'OFmVPXoyBqdtePt5yPhQZ7pDxW9SKJmMP6kLu7xnM7FpRm39W6ImfT0jlEtlOOYITnJJMkpktodhNng+E35TKA==');
define('AUTH_SALT',        'TwW6315Emiq7RMFMMuGVbAo1tO9KcOJUpHHVr45CWb3HjbkwNI8CoKkHFw9ZF0JnGHrj0pDqa5/KWJ8sLyGn0Q==');
define('SECURE_AUTH_SALT', 'xAXGF/O6wEJzx2ckh44WDK7zjaycS23dFhTwmiDiBg+mGA3RNu6gMNE7I5Yw1j8yHv0nEJ3u3oUUKXFx6uFJMQ==');
define('LOGGED_IN_SALT',   'YD5VysQg6uLB300dNIVmEJ+4Nku4AbhLf/a5sf/jy0GMostdPV/Sekcgp5rh+Pro0z26GfdhjnV+UDq/gP5BtQ==');
define('NONCE_SALT',       'igg09oRHfgppIqE6sAsIKOnJzZcKz67x6U4DhqcOPxQu4MrLfJpUClG1+l0syn9qLgh04rWgHMn4jHIwb0fedA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
