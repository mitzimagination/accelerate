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
define('DB_NAME', 'accelerate');

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
define('AUTH_KEY',         'G7r]cbxs0s>G_528r3yp;JQ>o#g:d6YMi9q .;T**jkQV[*)~`00ZLhj@ h#Nb>#');
define('SECURE_AUTH_KEY',  ' `1@o544#$P&ov(bt8zT]UE1<XKC:y|?vlG5;s$jGV.Xxhf|&V[tNQseJ`=7#43*');
define('LOGGED_IN_KEY',    ',&[vhL7a~s/8LzGwN S~o!(~~)XxoV>m1%~-T,b^6BBeLifDn5t8}`@?3q7okaUk');
define('NONCE_KEY',        'uT~deFk_6[LyAr51f*ok^rRtcFG6G&HAh^}Rm<Ht$<OGT#InN/M$W59{+ 8:u0~$');
define('AUTH_SALT',        'brbP$QE`3Z6v~YOw@IoK|l&(v2RJ8/%g|2Bebk*Tx{[E3Vk&ex8}Fb&uDi~xXWHP');
define('SECURE_AUTH_SALT', '5}wUN1CQW+/Ae2,Rn.RbAVb~zQx_%>b}tXJ:8(VIQ*JpMs1M*R7+*h?2:i9s.hK0');
define('LOGGED_IN_SALT',   '^HD215TO^] KC)c/W4 8K:)b5Ho4Uxb.~[I$NzVPme0--Ve+6` L1wN:1uCoLRa$');
define('NONCE_SALT',       'K?8VO84>a;><4LVRwaUwgOI[[^<9%9u%KW$%JQj&m}TpS_|aD[szR8k`JlXOuMp^');

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
