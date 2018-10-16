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
define('DB_NAME', 'iefvietnam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'o!ai(7NT&/nG$W~$a.r 5>IQK-I93Vam6Z)!kbVq(4Is6U8EcfUw0)/3Y>kO^?xt');
define('SECURE_AUTH_KEY',  'oBV5byHt #Q,&RXR%yu# 17lH=g,!YKr@e*G2j(|E<&DBz#IVGb~JaaARyrwd%M8');
define('LOGGED_IN_KEY',    'R]>-P2gm(8r 80$M{;~vb<}-8dV/(4U]zwf!nV>)cC>.lmW:so_X|e{qPw2{TV&b');
define('NONCE_KEY',        'DY|!Kc[[B#TfF7G Oy;)h91Pm*/]6bWgEjdluD761;|Ow}Q58#><-Yo1Wgj~R9qg');
define('AUTH_SALT',        'CE]]Hu*CIuzB&8&[zv-= Oa|F1[&E}JumF*;s+av7No6_x4qYcz~gQ0#Sfp>i9?(');
define('SECURE_AUTH_SALT', '7qt>A{aThN?mc,0@h*i|.Ra:*J~*sBtdsi}gDCh[meVCXlu5-;yj:JQ0XezXz-v3');
define('LOGGED_IN_SALT',   'ib^[sHX*[|/d@NMz*9&Dm|.*-/gX%!L2SkBP#-#@]`o1znNXN+o]2@ke&W`_=$rf');
define('NONCE_SALT',       'qN|G`Un;+zJ%CMJ~c9PP;Z@01Jh-_bI})620H%%PO-eym3L;wqf~R+ep56_abK2o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ief_';

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
define('WP_MEMORY_LIMIT', '3000M');