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
define('DB_NAME', 'epik');

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
define('AUTH_KEY',         'pzMy+ziZXDw|--(ic7VV-sg`z;l5^sF#bGRIR5]}kLH=~H>$a<b[-vy-y3==R,] ');
define('SECURE_AUTH_KEY',  'B~SSsDGWk{%kC|uagZ0N<;)K`o.|e90iN/}{0Ru]B/ID@nz9IC3$MOHCC+!)s,V6');
define('LOGGED_IN_KEY',    'LMmN>,a]faL7 IbW>JdAVel!m `3$%pTWm6s@cW|`oahW(=q-M*}W7H6~tj_#)s=');
define('NONCE_KEY',        'p2Vs>Q7@/za%v)%2D*qV2dCM}qocWD?Kz47(=[h)e|?@t7j}E?Fi5({T.$8$LOv ');
define('AUTH_SALT',        'phltMl@g)]SN.t;X$aR)2tv;:`FqJgmTDR~ >#uAs{Ny?9y^XF0:>f*O+lG;i@W^');
define('SECURE_AUTH_SALT', '?,XI[Ena=w4h|Uiwz7>,)ix;J H!oN|9u57Bz-*d1o i.5 }8TGkC^VmvkfAKVOC');
define('LOGGED_IN_SALT',   'A*4wZY:$tZSHRHn,#:dBtjN4xQ1.p`<d}%z.T=X&PaZQ@8oEWVlXF)rXUA=U}*w9');
define('NONCE_SALT',       '+z4.sTi/z/KGD{dn?OzX:P)u?tn$FG70!e<*c:1|#Vx=I1rk7SN}BPzL>EA>7hCJ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
