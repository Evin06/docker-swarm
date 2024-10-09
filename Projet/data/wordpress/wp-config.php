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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_swarm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         'lpoQ74esp6Gn6;)o=b>Pw=`C`C/259LZp8>bs^r[mX}K$x%^AXs3LiZoC7vQ;%@F' );
define( 'SECURE_AUTH_KEY',  '2vRZ,94FDv{<[:n;-rsFT(=PQTmvR>|7f?)Af-*IZp^O_L`L;45rEB{W^ljW{kSX' );
define( 'LOGGED_IN_KEY',    '`_-`Nz8re!!JAFEJzmzX`Bk%)mj%D/J7U~scwET>2~qu/4} 5`)}JpNy6qhuU[8y' );
define( 'NONCE_KEY',        'W{A$Wo$l`o>r3gBZGPv,}(5>nSOr5RtRN$jsN-bBQb{K%4;)^7pTs.09Mn-F-~fE' );
define( 'AUTH_SALT',        '!PqP#7,tx@>_91?YZn=7XfLqaFm7JkHt:8kmi^GqzcFe7?MQ u`}@aBVjc)(!Ksh' );
define( 'SECURE_AUTH_SALT', 'Ce[~hyp9@f]gt)dF9-vQgq<)NrOJw!%:O~T_1KKSDR.VI07)>*r6qP[xb1-9_{ z' );
define( 'LOGGED_IN_SALT',   'ELj3W|p&:47Y)C.2QW[!`GbM579d]`o=xgEjCzl#;s/{Y,$Ee{hk7cpgBw{0xczP' );
define( 'NONCE_SALT',       '7?yUNQ=}@EE)g[qQ$%jg=|)K9,?G[LAad&DB4Lma[0JgFFydmrLG}Ng{a7/=34)b' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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