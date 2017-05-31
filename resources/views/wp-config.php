<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wan13wan');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '(4<t/ag~>x^t=[J@(R{x4+r8fd=n]pf10ns}G.9bcUwJ1/0Xu| st+NQ#kvTxs-o');
define('SECURE_AUTH_KEY',  'sGx3R[d_)^}l]ZJKZ ;R~2}=TlTH(bO+GH/%c@EqCS~r3?v1$1H.?< ^ISYbK(B ');
define('LOGGED_IN_KEY',    'pUrH=|PYh{67G7;i@`qA%t1+!>Gv=^TPgpXIQ@QA_PgL)+j(sSBySBJizilE3Jo!');
define('NONCE_KEY',        'X@A^FqI3bLU%9dO>r;(7!r<k[dS4$7y*v,F?jZd;EUmR%x7YLxC`6&hL}hCqCuKv');
define('AUTH_SALT',        '$A};gfJ_P>n6`/Fre7a$Le_lI:W18VfA[57Hi:1-mXGlR/HYV$A`pIS<eg%mbkT_');
define('SECURE_AUTH_SALT', '/SERTe%*@{k6`[.M)) BF%XY2Ue:86_Wl~jla#~3]7,pNiHn@kv}rp/)4`!A>13+');
define('LOGGED_IN_SALT',   '+}#XD;3}*%0)|Be`&O&513|BdMc}rp9sU@O8zu-JI4_T<,x!1!JFQRgd9:|-lF?J');
define('NONCE_SALT',       'Q`jl&,vE1T3a,<6%md]uM;DSLo21.A#Z{_7|?pOo={ny>*)cMVxxk;X*L.!)~ OY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
