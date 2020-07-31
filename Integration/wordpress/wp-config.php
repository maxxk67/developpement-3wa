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
define( 'DB_NAME', 'live-33_maxxk67_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'maxxk67' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '1ddc8ff8YzFjZjAxNDMwMzZmZGY4NjVhMzY4MjM06ff4ebde' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'home.3wa.io:3307' );

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
define( 'AUTH_KEY',         'y,Fg6AP H?@aTD$?}!`r|4+o+_8}zOUc?GtvOrXRXm_bBz{{F)!}sEXb9pr0]^/e' );
define( 'SECURE_AUTH_KEY',  '|_lM/aI*N8DiR=AhJFU4t+k]_@se=BqRohHy?.c`Ok?SaTXU@+zz#P/[ZoJcji}V' );
define( 'LOGGED_IN_KEY',    '0-2[?Cg1X19B@g+N3i)c~dc<XQYl@Q-?-E+v$BH0R:Cxz->(s}^6]UcMD}FW_m$F' );
define( 'NONCE_KEY',        's&>J!wlfK$Kae@lQp^3-V-%3bNW8L:9[=P,NX R?@8J;F[mUrLDBe552A`iLc6e%' );
define( 'AUTH_SALT',        'c%)S^MsMcRop^X{|#%vXc~74nt>qN@v7ed%QqOvwFz,d!?x(u%*<c97YCUd_-RB8' );
define( 'SECURE_AUTH_SALT', 'N$X%e):rdMJ`=*6IVP[y>+ BtKo!h!fEF,CM,C_AtdhEoFwQ=_68Ohzv[q|ib5z:' );
define( 'LOGGED_IN_SALT',   '5rm.IMmAj<6sv[v3}o*nK=(dt&_9sx/$9QD3!kC;NoYDD8D kE59}Ba6)rXt`tB~' );
define( 'NONCE_SALT',       '|Q$`K(=e0x%]K4x>d%q8{#|{j;Sh>Cg4~];PBpx-}q|35pb2x0}2c4Y+DBnMoIy>' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
