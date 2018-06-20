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
define('DB_NAME', 'epik_wp');

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
define('AUTH_KEY',         'OcV?`%HQp)XKChcO*O#r#qnz4=%t78!a,.aJ=8t&/D@<aee a0D[SvE3nUR2&T;g');
define('SECURE_AUTH_KEY',  'qpw#mpkVLCd{+<3%F|uG4yCDi#*|>sXuW|5H+NWn87j/DH5vzSA{cAaz7!m-8wJ=');
define('LOGGED_IN_KEY',    ']|Tz2+ Sod}>}cKJXr*>;dUcyf&q0a>1AlLr@J:@Lq(UP9p?{lyCbYchp4#imx?V');
define('NONCE_KEY',        'JLP7RX@9l=yd/JXzF31QAY?$V$$/BdrMi7/a`7lPNTT_;o15<d8|O.H}UQRC{A76');
define('AUTH_SALT',        'ARF=fzEnD:I:F<_zRDv<KMCcR!HkQ>nL$~KBO.49.RbPMGZQM@S[#&~PeT4BT;#L');
define('SECURE_AUTH_SALT', 'E1Dy{=)nmc bt3G^tn>m,!{I?_6_h{AmZ7xt:iyL2DT-CPp(T9IFefL}xr.ySIL#');
define('LOGGED_IN_SALT',   'vW$b>K P?N(pGq2j1%g#Y#c`<-9ZV;i-3IL49gNi8mC[5p S0t@94}vP@7u+#F#F');
define('NONCE_SALT',       'L4`tp[ FiN}egwZEF^W-;G::]H2`_Mgk@0Bu+tjjrp!Yzj +A`,u0[7^3,VgxI@J');

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
