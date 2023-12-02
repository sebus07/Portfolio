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
define( 'DB_NAME', 'cv_koenig' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '`4>.PkhzFwGzc26}rC<khfaL#@eZA6>=>jdOa7en&Uw,[.<J7FPRoJeP~=Og)@5G' );
define( 'SECURE_AUTH_KEY',  '5OT:21!4jCN- !!;Rt)^j:FJ&wL5L|0^TBnDmKt%~i%Zw~oLxcL7Kg4eqNyy93,K' );
define( 'LOGGED_IN_KEY',    '5fp$xv8EmV6QI/Q{dm|0DD6GpQZPk^m`Qdp7^![43`=p^oHB{3nxY0b+H bEujQe' );
define( 'NONCE_KEY',        '@OWfn]0}~EY Z,9&RyUl|j!`:(w?~c]c|strb=8W4tAmCWO^]@Q:4e!^f?@NfwA~' );
define( 'AUTH_SALT',        '5rh)xwp5E*Phl)EcJ7PK=PdItA2,S1 *1`_l^MVagJ`90|tI,Tu~q)&f@jp,7hmB' );
define( 'SECURE_AUTH_SALT', 's$Rf-m5%*Hf2wl{b;4%Me5d@bd-6IAH=U/]^IH_uJCd#pezM=^Xz=[s,&h/x|n2|' );
define( 'LOGGED_IN_SALT',   'M2_1s0b;Jm&HFVQ/sViv)v-sMiH8!jJkL8bmFv;D>Aj>zwr(Nip^ Dd3S2.C$U8Z' );
define( 'NONCE_SALT',       'I(-.18?`7I$_<}/}Zrg Um7SrO5k2YS4zB&-(l$sT5sJ@o+yT@?v+VuOsnK|vOwW' );
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
