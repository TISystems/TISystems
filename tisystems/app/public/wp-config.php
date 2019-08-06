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
define('AUTH_KEY',         'PNFlJDN4qGkfatn/NtkoIJCQ4AcemTPNPRG/0hdEMVs20SEMl9VDlvUTuMv1EaMjQc2HpB/S4g3+toc5VTzTOQ==');
define('SECURE_AUTH_KEY',  'LaQxMu/etcLf3M+kk/flRnszitFcvc37lo+Q8FrphVPCU9Zlrc2O+0v8KNXPhAiqXHJ6qKDOia2Ze8j7bl8LLA==');
define('LOGGED_IN_KEY',    'kbS5Vr2YM6vfckNHSZfKxSPY/+oHndkDT/Wj970fyyKjUW3EDgrsOiWVbEeTcGXOp7DRgzNDxrqaGBWpuA6c1A==');
define('NONCE_KEY',        '9228s83g7ei0esu0MU1CBz5nY8FgCGSYXnZQmGM7S1CF1fTJqW9YdjTsm5m/wnenwvkYqC0xHBwEelmEKYBfqg==');
define('AUTH_SALT',        'L+XIr/ihdspaT1yPpBZhx0KqnkkT11eTHAewmqSDDS7q06JCMaEYeXy9WXEgY0BbXyDgkRQUbwUL2ck8dlGvgA==');
define('SECURE_AUTH_SALT', '91oSC2WTimbVW5Y9cin1pH8KUzTzzk4bVb7tfSkhPoKxWcgGajoA4g+/k8IulRgh0c+noyR6IUkuOzfHjN6hBA==');
define('LOGGED_IN_SALT',   'kgUXM9qveE1F12z3kkFlgxBWiMSLE2ivvVvlSz1CYWZQDrT2sVAfnk9y2HLUz4GtJPwfG7fGBS498CRZskhvJA==');
define('NONCE_SALT',       'esdmYGKxfdpbLrrq93tzUfdLGwQ1Et28AP371WOGi8p9cIyCYy2YycwQraz86DQrQL3CW5um4beBiBa3nrcheQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
