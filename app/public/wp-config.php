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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'gTqf3VPljPlBKFYvqrkMmB+geyrzOVQgLQrV3uCLhUlhHQMqzrKWqD70iELr9lZ1FYf6lDBPcPOlu+ivn2MfBg==');
define('SECURE_AUTH_KEY',  'XAXF4W9B2ir5aJMU+QZ4CPXyeygWCTn5GAC3J/wE2QLxmlhnwJVfjHKAhTVo6QnxrkTmEQgo5TsclAzsyc7bVg==');
define('LOGGED_IN_KEY',    'yEPpdqhSWnu6jp+ya6bZ1GOLGREOyWtYSKhx4+Bw7py8xXnGQDQ4M/YdQ8aJcqh6xOlBKNP3cCcWVpw0af7E5Q==');
define('NONCE_KEY',        'utjfnPiel4sVV+OW0DPXkBZ5DLBvW6henXGjjG4LJe1f0I1pAD9VyXT0SgKkvpXRe0EFXXmWZgZKoX7FMvW/RA==');
define('AUTH_SALT',        '0cjrteWDHJIhZIzImcRR91r5zByGHtpGqWTE7CgkuLpgrFpAtFw9T3EDIguuUj4J0z9lOofj3z6ygjbhpPKNSg==');
define('SECURE_AUTH_SALT', 'hun1enuIvQwqsGc/xRe1NdcRfPtaCgAfNw3LDldRxp6bvLSC+isr/UatiKBDVkjKRODHennbzJ6N4B5oprVBlA==');
define('LOGGED_IN_SALT',   'xlsSZPYgHMaD4Y635CgxcHPDu9PCo6aE6jNu58Tc5eOEcZQ+FHFtkriDALogC1vihaNvhvkZrABOiUaj2G7aUA==');
define('NONCE_SALT',       '8cbyPKwSE6TVQWvFBpPxheqLGCD1sswhbFYwphc2EWh+elUdhkszj18KmfattJ1VHS08/cb6OkbX2geiSvK1Ng==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_7cvvjsoaqg_';





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
