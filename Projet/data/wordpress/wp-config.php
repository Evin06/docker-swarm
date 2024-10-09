<?php
/**
 * Fichier de configuration de base pour WordPress.
 */

// ** Paramètres MySQL ** //
define('DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'db_swarm');

/** Nom utilisateur de la base de données */
define('DB_USER', getenv('WORDPRESS_DB_USER') ?: 'swarm');

/** Mot de passe de la base de données */
define('DB_PASSWORD', file_get_contents('/run/secrets/db_password'));

/** Hôte de la base de données MySQL */
define('DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'db:3306');

/** Jeu de caractères de la base de données */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d'authentification et de salage.
 * Remplacez ces valeurs par celles générées par WordPress : https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY',         '-T(gIfxU,?952-fx&:dKxli;yws7LRi:5v0+m[+0ZtF?ZY{v*kmF:|)B%0]~$m11');
define('SECURE_AUTH_KEY',  '|a4#6kRTCFG+5]i?[iY^E{+|nQxA!E6||V>EqjIE%-Bk2`j_5~a)X7]( X(9`ssc');
define('LOGGED_IN_KEY',    'xg^igo|-%AYm>_02$L=7QUl-fOr^<X9#o`(U-vMEX8|oVE8!P.~!_C-nPz_@/),1');
define('NONCE_KEY',        'sQyA<-^yx`_DZOii5-2{R^WlR+V`.XFP0|LG`][!~uMRm29oy?AvA)v$r~$]J}JV');
define('AUTH_SALT',        ']L~cDZNP<dEC#Wc6uscEVDSCPH^Aj&.jk-N)24Qy:a,A_z+*EJF!*!:Fv*L|QGKu');
define('SECURE_AUTH_SALT', '].d|(+y}=:*SV3.Qw`tu Dn3(>3ZN#t#B-ET<}0`B>4Ac8G%YM|`Pq*3=**/%z]/');
define('LOGGED_IN_SALT',   'GSN6h(fI{d2f.XM+c_:Dxf}<_M`2-~V}KO-]Y$GwBqzE:J${{$R]]a^#o6hzqOJ}');
define('NONCE_SALT',       'e)Swo+i}++r,7|@43-!LtOD3$H;8~&LVrr?4aJW#[5ZUM/Vy D~@c6Ap?|mTR^O+');

/**#@-*/

/** Préfixe des tables dans la base de données */
$table_prefix = 'wp_';

/** Mode de débogage */
define('WP_DEBUG', false);

/** Désactiver l'édition de fichiers dans le tableau de bord */
define('DISALLOW_FILE_EDIT', true);

/** Spécifier le chemin absolu à la racine de WordPress */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Inclure les fichiers WordPress */
require_once(ABSPATH . 'wp-settings.php');
