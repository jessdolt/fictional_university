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


if(strstr($_SERVER['SERVER_NAME'],'localhost')){
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'wordpress' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', '' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}

else{

	/** The name of the database for WordPress */
	define( 'DB_NAME', 'dbbbxhgyyft7ns' );

	/** MySQL database username */
	define( 'DB_USER', 'u9g7fmeuc2d9w' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'Jessea123' );

	/** MySQL hostname */
	define( 'DB_HOST', '127.0.0.1' );

}



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
define( 'AUTH_KEY',         '.Wb@uD$SWKCc: U+zKZYRb7.b;GfbxsI&6iZ#a2biY-e~-JGPdZQmy2j69FW^}IN' );
define( 'SECURE_AUTH_KEY',  '(RFSb!z((B(om2:,n?qT9>?B$9$N27u`tG,UPOu9&v^`=?Hk^U9#,wZonRAJ8#3q' );
define( 'LOGGED_IN_KEY',    'Q4H<;8A.6C>FeB@UIaUMzeA3n,ASt^7X!n5|%`Tt#TYq`WVotLG0({6,2PqMbhvY' );
define( 'NONCE_KEY',        'yZ]0/t]>KrSCQ$lx|Boeof{6,kuqq|O[g/&nCmETp8{|P9E=K<RzU`%DakJyBTd^' );
define( 'AUTH_SALT',        ']oh(!~U*v*>qMI+`_xv2f`_f*^uamh|4zboF[*ftl,Cm=fw/X/~z;}EX{Y_LCJo|' );
define( 'SECURE_AUTH_SALT', 'GrqSF2*wvwxu JsX{*Pp}Bk.FI@Wv,_6h<[zbk)3v*2DH)#O<~]vvF-N/k0Ts@[!' );
define( 'LOGGED_IN_SALT',   'zamy8 Oum:QjO]erJ|&L697-YP0),_>6M!!9zQp<!H3&OBc>)+i9NgK]XGB)?#0D' );
define( 'NONCE_SALT',       'f{f.@@(2-Ym0tRvjIwJKv{AekUvzWTV(*^_2nr6kV=b=Oz[Tvjt:Js/0>1z(2J~T' );

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
