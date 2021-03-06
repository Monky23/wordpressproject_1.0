<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'WordPress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Choubidoo3344%' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',}2-q>XJ_4tH;L,><^ckTm3dQ}<=kq=<zBFsP1gb<Fu~Z]j#|aij^rM_%5]O(a{l' );
define( 'SECURE_AUTH_KEY',  '2%i-IeH 4Oj. -nMvYrcE# u[xpZHZqSsh6no3ei`4V@_!A4THd(]:q--}*Rl@l6' );
define( 'LOGGED_IN_KEY',    'DNu=+T]PjRAlW7P L_7ikd]SV/]yBdkVI%P{:~5.]JaK[g(6F_%Zybp1g@][])Tq' );
define( 'NONCE_KEY',        '+]0z78Grzd`]pnP16g[VX|FRC&o+-f}c9Q%1I-mEGK|Q*o06s8Fo&%,@$qmRp!?/' );
define( 'AUTH_SALT',        'qP%|45D%{hon*L=gw0gq $t20,]<)ou.afI5qL(;[:i)ZWuAcjjH=T5t7.RRK_?l' );
define( 'SECURE_AUTH_SALT', '?W/os&qqoecF_YhzXVy5W`^1Dbu<b4:{;rl rO<T|Ni>ZZ 3DWOKk7pbeB4P}/C,' );
define( 'LOGGED_IN_SALT',   '@O2`c?$H5q)0I9Wg#]o9qD)8!ny2srmZ^M#8I>2VGa1x$v~p=ybgqSW8CH!&gfI-' );
define( 'NONCE_SALT',       '=(ZE;?K<7Jp[1(K*CY]$mCiZ;?18|[lWx=Y@|_*r2`H>~m|W1?0huPR!)cGY+hV)' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
