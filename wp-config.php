<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
//$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host * //
/* The name of the database for WordPress */
define('DB_NAME', "dbname");

/** MySQL database username */
define('DB_USER', "dbuser");

/** MySQL database password */
define('DB_PASSWORD', "dbuserpassword");

/** MySQL hostname */
define('DB_HOST', "localhost");

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IT,_1R#mn[-p~&L_@Wr|p)#$*K2]v-iWqg_eQInv;-5tOt{Jx@VnH4{@KbkXCA4?');
define('SECURE_AUTH_KEY',  'oU^?(a1hBD/%%-820bnjwdIG2;L6b4@|K2{Z)z{=O?8)CL>(LM#>|FxEeWb6Y#+B');
define('LOGGED_IN_KEY',    'F!Q!(FJ KG|Z=FWzq:hQ^c;9qPZ4Nl^|s(d)*h6G/Fz_ATzf->D@oQ,jqcB#-])j');
define('NONCE_KEY',        '+bj@s]W~?PD:HX&w_>[R*^!Q <)u_cB2t}-X< d+E2SU2di}JEhR?.1[8b&dU3b)');
define('AUTH_SALT',        '|Y4p86rZM_3Qxj T^qc3#{!-SC$&xMu#PnaJZUcNL!j,foqWce)|S`Do+yz=-m9}');
define('SECURE_AUTH_SALT', '3.x$a;oY-F||(J`>7l3(fZG(9jWUn4+?b]`hDf_`bDD,;_lE.Yvcr^)`c3=`1|J^');
define('LOGGED_IN_SALT',   'A,g+4{uJ5at.vN:)H-cV?XE$1+}V*m8z3%!;>I6}.|0c~405k6xEzQx?o[p_7p-$');
define('NONCE_SALT',       '$gRvJ,m#G}@ul<P;y+ P,Q/4bzP#O5@?kPCGB=6d-YURD-#Pq.@Q0W&B5i^G?/W/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


