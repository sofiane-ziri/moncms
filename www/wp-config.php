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
define( 'DB_NAME', 'boutique_wordpress' );

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
define( 'AUTH_KEY',         '0_qK<J+t50oNpO.jA&?t(_D(9Nxa;fj%o5Jv2k*ewI9nY`#))Ic2U=ojjDfI^.I)' );
define( 'SECURE_AUTH_KEY',  '#MU+8$/2Yi]glG0i6VBQXo8W$p^kf+;^plA[W#Z:aUR)l{Lz<2h$b|4?C=8@7+[F' );
define( 'LOGGED_IN_KEY',    'Fc (i~MwV+j;[pWY*SiC_YztB/wZO1:-<(}:*v=nN5zflHv:<tgZe}Y>V5lQe}:B' );
define( 'NONCE_KEY',        '>GdYs* -Q^plKlrQ 2a=:vDr@qq{odi-2FrL8kw3CBDz7%YApZsmz08:E{F:.n/}' );
define( 'AUTH_SALT',        'iDbWl&^z~}dR`4c8B#W.@Ui8Lnlic^#[$PBHYQi>osV6fP##8Kzk&C-gJ  kk<(e' );
define( 'SECURE_AUTH_SALT', 'lN($nd{~V:/8s@G2HG-&IU*$2lZT2JM(4DT M:<3{PkzVdob}jX7D r2^RBH[,R3' );
define( 'LOGGED_IN_SALT',   '}RfOO2L)f$45?0W-^>|1;M;kV8N}H#.yK_Q/D ,6Rs%.;COR3R|RSb5}bPaTvHwM' );
define( 'NONCE_SALT',       'i]~kuTN.X_-.Vp9`nLDGLGDGFrcoLM7|Yf>:uGF<jbdo?%(Sfrl55S 1N/7oi _X' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
