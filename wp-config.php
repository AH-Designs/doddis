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
define('DB_NAME', 'doddis');

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
define('AUTH_KEY',         '4dw,(&qkyA3p)wW5m,1ZzSsd%<G0pKms+3v~[XDw9 cZy$te&%m#RMZVTfPYR~zH');
define('SECURE_AUTH_KEY',  '!i4F^0p$2HSAM~m+JVNwBdVOjjwDt_NYE{#X~FFVc,u^3M_ R;jtH5F~]JPOtk=x');
define('LOGGED_IN_KEY',    'F#K9T[r` [/u`22n,3fQnbd/&%G<1T0QngyG%NJ^7#RwQMw@^5jR{fZ9jS$`(3?e');
define('NONCE_KEY',        'H:]D++SR0y<J<<0,MrqVraA4Tm^SYVe$82q*ETU`U]W@D#uv{<JY^-e~Ncig-F _');
define('AUTH_SALT',        '4AskEFy.6Z[Nr_0%u=`gdKJD[MloK*&At;`cz>x4dnTIMnO)]6SnI=X)}N6@}syj');
define('SECURE_AUTH_SALT', 'uYI R+<pJU=%zg[8~*u[)}-MOad9h$ID0uR#ab_Ncq`|89J<Two3)e|<9srCT8Mp');
define('LOGGED_IN_SALT',   'x{z7n1<BvI9@h6$^uoS5Aa!z*Y_b}|k(5#ZUTS3TcA.FQqI9(dU[P~i#24aw`-s;');
define('NONCE_SALT',       'p^)Cac4H}A/8;eIQV8j~JB)}wOw]o6QU{@2H_hcWJOk$@}?5$+6y7/.@7P>3@.^<');

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
