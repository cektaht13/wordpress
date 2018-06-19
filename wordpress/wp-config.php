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
define('DB_NAME', 'wordpress-org');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'example');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'H*i13(}O!prC?0D%AQA^Pe[3^>?ke6OCc[>aHei.r68E?w[-KrS8!(8ym+bO455T');
define('SECURE_AUTH_KEY',  'e=MvkotxO}*@=XeS)@5s$95oA4f4#@ig;[EHf^j:bXs/H9^w)#76#{-@?b@_sNKG');
define('LOGGED_IN_KEY',    '5qwpo~3|L@UB)^wEh%|.tr%Yc;UrupAv81n`vJZ*Uk%@2t%-ioL/Wh9flGvPNmYH');
define('NONCE_KEY',        '+acrH4nMGpCl-5vy]QlH^LaZm3+=QPT64A*Xd0V0`4dK38RfI9SJ5PS*l/NQ}WAR');
define('AUTH_SALT',        '95[n/u/?+g|eNc6_7K4uHGvP%<2~M6u!%33y)Md[tF[ OZx8D2LW!NB]w+!Y6eVV');
define('SECURE_AUTH_SALT', '=J|@yw[;Op) />@vZE S^H2(Q.U48=PWGLQhugHRp EsUsxj$W~++JIj2C+w$uk~');
define('LOGGED_IN_SALT',   '=2J[[-R{1c.iy^UL9`W]J!G~8s(b*B*-+[wm[cQ|RR1#F?mN2mvOq*Bb`uP@/B,R');
define('NONCE_SALT',       'u**0m9+AX]ZJ:K~eJJX@5/q3@TR>5{5owiA,#?5E:Y4Wc>A{I=hj;vAP)0HJgy^8');

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
