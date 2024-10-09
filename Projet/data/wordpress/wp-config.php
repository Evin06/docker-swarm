#!/bin/sh

# Attendre que la base de données soit prête
until mysql -h "db" -u "root" -p"$MYSQL_ROOT_PASSWORD" -e ""; do
  >&2 echo "La base de données n'est pas prête - attente..."
  sleep 5
done

# Créez le fichier wp-config.php
cat <<EOF > /var/www/html/wp-config.php
<?php
/**
 * The base configuration for WordPress
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
define( 'DB_NAME', '$MYSQL_DATABASE' );
define( 'DB_USER', '$MYSQL_USER' );
define( 'DB_PASSWORD', '$MYSQL_USER_PASSWORD' );
define( 'DB_HOST', 'db:3306' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// Authentication unique keys and salts.
define( 'AUTH_KEY',         'lpoQ74esp6Gn6;)o=b>Pw=`C`C/259LZp8>bs^r[mX}K$x%^AXs3LiZoC7vQ;%@F' );
define( 'SECURE_AUTH_KEY',  '2vRZ,94FDv{<[:n;-rsFT(=PQTmvR>|7f?)Af-*IZp^O_L`L;45rEB{W^ljW{kSX' );
define( 'LOGGED_IN_KEY',    '`_-`Nz8re!!JAFEJzmzX`Bk%)mj%D/J7U~scwET>2~qu/4} 5`)}JpNy6qhuU[8y' );
define( 'NONCE_KEY',        'W{A$Wo$l`o>r3gBZGPv,}(5>nSOr5RtRN$jsN-bBQb{K%4;)^7pTs.09Mn-F-~fE' );
define( 'AUTH_SALT',        '!PqP#7,tx@>_91?YZn=7XfLqaFm7JkHt:8kmi^GqzcFe7?MQ u`}@aBVjc)(!Ksh' );
define( 'SECURE_AUTH_SALT', 'Ce[~hyp9@f]gt)dF9-vQgq<)NrOJw!%:O~T_1KKSDR.VI07)>*r6qP[xb1-9_{ z' );
define( 'LOGGED_IN_SALT',   'ELj3W|p&:47Y)C.2QW[!`GbM579d]`o=xgEjCzl#;s/{Y,$Ee{hk7cpgBw{0xczP' );
define( 'NONCE_SALT',       '7?yUNQ=}@EE)g[qQ$%jg=|)K9,?G[LAad&DB4Lma[0JgFFydmrLG}Ng{a7/=34)b' );

// WordPress database table prefix.
$table_prefix = 'wp_';

// For developers: WordPress debugging mode.
define( 'WP_DEBUG', false );

// Absolute path to the WordPress directory.
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

// Sets up WordPress vars and included files.
require_once ABSPATH . 'wp-settings.php';
EOF
