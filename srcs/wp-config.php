<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define( 'DB_NAME', 'newdb' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'mama' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '4-H&aNX9X/>;[k{0C1bE.7,BAo4uj:`FoHjjjhZwOd_8{miE+_ivatI&W.+@.Zxf');
define('SECURE_AUTH_KEY',  'NbdQrpf8=i5[?^B6${DqB2G4=JGs34=~;,w-{y{.Ju>V&%-xz.y_4jp2E:Q_=zW8');
define('LOGGED_IN_KEY',    'FtjXF$C:kB}M%}{o_U@}h5D$`MR4Qad_6e|W+0R%=FHkD.l!?;/MYI&0@`Y1]Y.Z');
define('NONCE_KEY',        'VdkH/L|Lo}0cO_ByQtUGY<tDaXFI|H!f!1q>XFi^o++m5vQvb<]-%.lS;lBfO me');
define('AUTH_SALT',        ',oWh5XTB?Y.B~3M?l>+ZCtIirXV+PdvNS+.+|zg_7Oo6-~^&1tDYwcUT=a7s(Wb-');
define('SECURE_AUTH_SALT', 'e(=J),fi+I}ySDG|_SRruXK2N]zP@OB;o|IuS9f=M).nr(d41(q$W9X5O|6sh?|1');
define('LOGGED_IN_SALT',   ',jOHE[VBQl(c9^?j~;Kc:>]>BX32f~})7+v Bo$<^[PH_W_%ea(V+8xs]Aj0UG%h');
define('NONCE_SALT',       'n#z7-rt17$r)@RW/|=JvEcw7YTV>XVRj[78tl8*rM7v(=D]u+MYc1v65EOdt?$m9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
