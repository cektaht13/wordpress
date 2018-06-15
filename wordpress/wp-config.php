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
define('DB_NAME', 'wordpress_test');

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
define('AUTH_KEY',         '*eja|+bX6lH5r#<gE!n_.a[S^kbETCCI0o$H!Lqr2Z6gRjw=4gOXmK_5{ssiDQJJ');
define('SECURE_AUTH_KEY',  '1w[V;A m6[So$N|~r.3DW[il^gE*?}@tVR?/i3w)7+k9a%}1UnPs3)1%IqU7S:;w');
define('LOGGED_IN_KEY',    '*KL89*)ITy2(BWm{uO4KU%8Rkq5V-17&Ng-`b=?|DaTxnP6aUZ<Vo.I/2GGb,XD+');
define('NONCE_KEY',        'hk?PjaiYx?57m *AP=A@R&f9|v$nHWY47;0n#j[neFJC 6x:@QwNx~-cgOU{MVP;');
define('AUTH_SALT',        'U{oeZX0}z3@-Cm@FPL<sYhJN1~5 n@$g(H/a/htl(Ej32+V.)7a_VR<Mi>:e$Y+t');
define('SECURE_AUTH_SALT', 'vkzjRx-6PoH/HeTQqxYvtD3}Ws5$k=)A2[~>kyywHpQTU8F>wmJLo^u[)&I[c=Bo');
define('LOGGED_IN_SALT',   'q<b{yoszONe!s*i^#~_n+Woy1Cs.3dFx8mMc|}+@1~ PWVpl)/+K&DHo1>ug990I');
define('NONCE_SALT',       '*_|y%gYMJm^4`{H_Jg8N`@8o/&I+w,_0H}Xdo>a{v$M3]Qkf00@Oo-nH[R1Y#Jt;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wt_';

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
