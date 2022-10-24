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
define('AUTH_KEY',         'uVYawU8KLv2NPPA3s2xdeOrb3LcascOv1GB3A3gBdd1UxwqvHRv8avLAVinYTILdhmm6WOKG+a4wA56IEXzTYg==');
define('SECURE_AUTH_KEY',  'Wr6aGaoQrHP6+v/rqbrwInUoX2ffir0U+MdS1d4ppzYrZrljP/xk6X6F0+LDtbKWfOsp3TyulEyoiEqob4+YVw==');
define('LOGGED_IN_KEY',    'puapXpIWHs+Hm5qttSXa2ivnjmooiGXM5O7Qh6RlqNHQV7DY9mNe0GL7REXm2twtGmXvANd0ZKUufQcPYQ/8rA==');
define('NONCE_KEY',        'KYwcnCapbSAmT+BrolKnjTVnEDE1/YOOrq24qQDOLKkSYURthGXwyFm8q/B2iZ6+b8Empk81jN/Ed476l/HKjA==');
define('AUTH_SALT',        'NWVPiXpfRhYUfWHyt2Jl7qIU89wgZzSLdbbq+OWq2FA5tUpe/QzUKA7pMmpkokp22CrMcZUhhQDgIWQrRcDLXg==');
define('SECURE_AUTH_SALT', 'bidarABKKocR5K++uWbLSeGwB84bL0gitA8/wad2ZRf0qTywM13gj8PRREEMN9yApLuvsM0KoYO/rAsTZOmDrQ==');
define('LOGGED_IN_SALT',   'EczWhr/kXU1RPv7UO3noBLKsbWK+g5gH8GzLKSXiC0b9s/X61a9EL9G4wGEc0QmhlJasAQVxiox75705DW2GlQ==');
define('NONCE_SALT',       '71+E7ql4VDyGjq0XiLuTa2zIR9Vm3NT2STJ6Pe2G90MuXo4rFquuCcxXZW0qNVqy3qSG1gFryYF7xRJP02iJWg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
