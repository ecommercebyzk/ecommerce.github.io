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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'eFEH.KzudnSD;t+$49>y|!9U:o`]Vkak`$7JHL>&kaS5~e,gHl|Nb?yiz2{rCcrc' );
define( 'SECURE_AUTH_KEY',  'TErWSm?<]@&OG>3so*xNY!vq@CZ[0pJLd`;m6e:^WeYA7oXS9VUWejiFEJ1iVoZw' );
define( 'LOGGED_IN_KEY',    'ZFZ4B(m]SvMZ]mrO:`M;Tx9R0 8|rm6YiZdj$w>RAuxk)^sH)?hc5oISwc59&<,/' );
define( 'NONCE_KEY',        'o.udYXcD}#]Cgy*!TfHA2%u`0B$Mhf1fjD:V)#_!O9zXgT1QNysy^:J`n;f!P`MD' );
define( 'AUTH_SALT',        '((a&i^cz/8X(N/RE;G1}#t7_Z%=7GB~:u Y:5vZi]H#E-78YKA<ybe2-~bUEs&1h' );
define( 'SECURE_AUTH_SALT', '09(Z^zai%9*IHy2{4.%E.~Y({;iOW9]vG O#$ZqhbYFW(Pj[CDmAShmX<N1E)c4<' );
define( 'LOGGED_IN_SALT',   '&$R6`ay2^DCTmKYVf.{z^trV&$p+^?|Sk;!/c=BHIVK~L:-<2.w8Dc#+MiOjQ@Ka' );
define( 'NONCE_SALT',       'X;F:j}ii$ROqZ~XO. vNkW.&]KBtNNP;(}@D6B{Jejr]?}*+uz>FxtoY3DURt[eh' );

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
