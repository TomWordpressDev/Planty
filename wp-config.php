<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '%UMfz2a#N%L9#X#*5Zeg]Y~FVL/7?yc5%T`iv1i]%3[VGV-<iAk_JPiTUa1UdRH3' );
define( 'SECURE_AUTH_KEY',  '8{Y0Y,fX$iLZo^yz=0TU|S%XDqdQq[$K4=[6(!5ke[EVjcR6#bL3f+Tro:G=)lCG' );
define( 'LOGGED_IN_KEY',    '&t}!l[c]y}W01$TcW-=Tt<%rYj(*0>G[>j#piFfn2Xg}uSDCAp9PCaVPzvnnj6&:' );
define( 'NONCE_KEY',        '`TEKaM2)Q0C%WOGz<yaos%9xz,qF/$?&ak(_q-Qa/nCC$:0({]2!xG#63wL <{Ir' );
define( 'AUTH_SALT',        ')b6t$zu$_^B|2I3qd&c!/L]4 LBd} xXc4H)^Z1Bo{I<YG]=5T=iu{rSqb*.3JLj' );
define( 'SECURE_AUTH_SALT', 'BrWl@[RqwWAXAfdZb7E +p$VNUWeLtL}K~O3 +J<XbF]!NgFeZ11l3Gnjv>[Y-4y' );
define( 'LOGGED_IN_SALT',   '<<oC@!IH^o+UYsuB/c4^VK-2XrK(QsJCYqoTvMC,BJ9?`ro>tAm%OU@f-ol#~ 4/' );
define( 'NONCE_SALT',       'o<sT$oc.-~QEaj%o-XM,kwbED/+xT@{(O^^Un1|Y%-W0cj(*Wfov8~rEWPo75*+K' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

