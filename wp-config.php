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
define('DB_NAME', 'dji');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'LAsoLQ!rJ{+rC,mx1.6V|W)36t3%qu@z+XypcDyhp,BvV{zB6r4/ce|~_`|;s*RT');
define('SECURE_AUTH_KEY',  '|arm(Qs(^ J|rt+iR|MK|$SqrG-;WZ;04QG^x|7sot#;&<Q1COs), A0-HG]Rq0{');
define('LOGGED_IN_KEY',    ';!Y@j:&Uo}NhxPl1/#Bsa<Sqx~w;JV.T+tF91CjX ){MUCs.jb4W;Yg^LvyYF$OS');
define('NONCE_KEY',        ' ]HJeh%GYLsoefFhS;5xFa45& k+,z?SB$+MB+:c@$;&NM -r} %goiH.3^^a|cq');
define('AUTH_SALT',        'mXq#<ST.(k+>PfDzak&(Ldy)7@]H0$8Fy.?U)csGj#<HO$z}T>J2U<We$,dnz-vI');
define('SECURE_AUTH_SALT', 'm}5O;I?!&Cclp/$,1e0F;c&eZ)#9RQ8>kC3SC7B-1G`{Cr4nfdX~`qErfkj<-ZTk');
define('LOGGED_IN_SALT',   'DY?:k+)|+LVNCHf;|SA2X=#6v:fU(+Bk;l~N>Qr35|!bTWPI+M,2(a6H|2YL#hyY');
define('NONCE_SALT',       ']tyfa>an:d|e1kVLpe&pE~9[ut46]h>:c 54i`OiqZ{$tx~02(4e396wI-7gsR[n');

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
