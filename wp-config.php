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
define('DB_NAME', 'the_heckle');

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
define('AUTH_KEY',         '~3`B*ovTl#^|WXF?Keg.xUgn0;a>bpza!fH!=,#*>,l)S,v@1tNpXiR(Hvq/IdZ)');
define('SECURE_AUTH_KEY',  '-(LR1B9&@rW?7*9b5g_)Ko|4NERE<QhvnN[PYI0[}.e]ox,Uzh!eoNs,LDClBc2R');
define('LOGGED_IN_KEY',    'w_bN%lPy$TY+5UAZu:4sqe@#A*!N[~K]i;5Noex!o1Xqn,:9K!RDba({%K^l_{:N');
define('NONCE_KEY',        '=|Sc]m C(X>q:!KBY;%#>COTb;r*~r8ZH#GA K$.LX*v}`M;M#l+`s61I4 l@tX2');
define('AUTH_SALT',        '1er7>t)PGnK`V%`UDV8Fb4@lE!5C=<0T)}K-j8tRd2!Y% TXH6uerTI$rO7+GK+y');
define('SECURE_AUTH_SALT', ',%17J)pv^!?%W&p%*:z?x$M=T3+.w&Q84636V~|wkGPU+M$*82fbrky?cXM[_}N-');
define('LOGGED_IN_SALT',   'n?|2j4<W.i2/U)IEaZfcIPHFs^Q_|@p;C[-&0wSI2)d1|FEl$fvKhy >`o:mP+Ij');
define('NONCE_SALT',       '}b61j%hZZyZM3[jZtfIFu#FKL3vT]Upby);6k}dl(q[*)Ab%UhAa-1s7yY[y{(uO');

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
