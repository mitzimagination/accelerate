<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'accelerate2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ';3*&Osp[!|Vf+A[dc@Ru+-kNgSDE,<Ca]%HE+K3lHe<Sh+}5uALH]m0Y|G`)m==q');
define('SECURE_AUTH_KEY',  'CHV{S/e#)*;g(8O%v2n(p=k0,wIys2<Zg_|qUc_,>(%C+8WrcW=W`_&KAN&~|_Q9');
define('LOGGED_IN_KEY',    'Ieue _(FbN<X#^Ey|n&O#Oph*i}#ogS2+ggC$.TAC5kBfEq(!(e!P~1X9=Q;k5vf');
define('NONCE_KEY',        'UU//18]CYQi -aYvuy#-{#<_De~Y{Pc!cZngan8JZ-/=C<DPWb+_wn2vQK sO6#f');
define('AUTH_SALT',        'Qed,6_g9(dkWzaMv3+ryqR%+9%U1K5lwneFrx1aNa4TSEnv`4s5).3=?-b;;g+=]');
define('SECURE_AUTH_SALT', 'd]~)3i@+_O8gKr?B-u2yP|;] cyP,MIwPxa5a?CTr@UBis*V<EhNEX~s)&DxtjE/');
define('LOGGED_IN_SALT',   '&@w`->FrV&5p0)4JJ&NqVik~@EI0z@$;4~$Bw91W/NQ1?m-Yd@p-=J@Ct,cJE7v9');
define('NONCE_SALT',       '4X ^8IUc|@jC@G ^+O#! M/kd2fNOpbY}to2i~{ZPZY1_)Rvv9Ap+*u]n|6Q+?j%');

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
