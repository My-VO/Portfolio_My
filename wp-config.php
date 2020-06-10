<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '68He>^->vwIAG2U2lxC~-S|U-(} L!_.E;?(:,`]j]V2Bq#+7NkTws_#qQ43*S4_' );
define( 'SECURE_AUTH_KEY',  'h~`3zb&V|P5ra6{i43`;)E.@tB {n$UP9<K&ty8jMI-).Iw*y^NC;ajZq+gl;Kc3' );
define( 'LOGGED_IN_KEY',    'Wrt4i!&3-I|v`u!DUFJ74l3H.^|!G#=n<x&eM47%@Hf$nE)yd0 q[i/::vir-LkO' );
define( 'NONCE_KEY',        'OHf2Fk&|IG9Hox.hxRfG:Y&m)Jd?H6m%e)pTujW+A/5FM>@{u.d93)(Bfrh}%Ed ' );
define( 'AUTH_SALT',        'XFgaBMVc&_xWE1a3qd/yLd {O>/B=7nq,2D1vq*bj]D:(~B],`SL%DOfWV+42DL(' );
define( 'SECURE_AUTH_SALT', '-G8jlgm5u]=Zq!rJ(<=CWcECTEm~2a08eNW7UQAg*jtQ;}^mteJDW26`^xa-8ZOl' );
define( 'LOGGED_IN_SALT',   'YSO$(1eMU2McFv%%yZWQt| @b:Z&K9?0iK6D`cPZDsQamR,yeLc<7sU]8-t^,:L?' );
define( 'NONCE_SALT',       '#o5}o3)&5W&rhA55Lq]b#B18.rneA?^%.6V4vPt(R?BTjiV`LK~h8z~/v*W&N*Z ' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpportfolio_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
