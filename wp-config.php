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
define('DB_NAME', 'immunoconcept');

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
define('AUTH_KEY',         'dq|l]]2{iKH4UzpIgILA{3Nh6cv?lno{Txh{9QIM2BV0DS-6igj-YXhww]~0%(5S');
define('SECURE_AUTH_KEY',  'B7{Zfpf|YO?2cOZNAf(.sQ1?>XVCSnn^`g,>L.O@v}2~,Iu7-4F^e64HJOe?$D&2');
define('LOGGED_IN_KEY',    '-Yt?z9G<.7(N$Zl9kEs3=PX,:e Bd=44tTDY3QLD8=~g7d^EqDNjOhOD~T(wq*eq');
define('NONCE_KEY',        ':(1ME7X#qE&[k|bgSX^7Yf&&!2o2J}LjzOn$,m@V3-)qS+$Fjcrx}e*Mjlz[.0XH');
define('AUTH_SALT',        '%4LQ)GZ~FeoDgJKvyOUmx)BSGL3ee9k9*5`ScyxG=HZcdE=J#/;/ZQ~i|I]$uitB');
define('SECURE_AUTH_SALT', 'EG*FnT8mu,*NV(![+V~(uj/-]0S?KV#U;(o*uWp`%z@`%@fPQICT$_`moddqlW*t');
define('LOGGED_IN_SALT',   'Ge]S}LXLFH1>eCeiVI$s*L6}E8@RL?7Hm:+Ym6HGeDt%uB)+?2Y:iXC<g(P%RQM5');
define('NONCE_SALT',       'a9=HW/x{qsB9i=X|QF1Q`SMxib&9Kcc`u_<[ 2=i:GcD=~<0-bA2RPP+-jSo^G_w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ic_';

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
