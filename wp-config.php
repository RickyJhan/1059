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
define('DB_NAME', '1059');

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
define('AUTH_KEY',         'h,XI=bw$.{}|ZQ}eFZuop!{YC;DpIR9 vRGVWdhl37I-O3Sw[==b ta=mjZU|W=s');
define('SECURE_AUTH_KEY',  'kw%p`&<d^pG:~+h7!zYNkl<R:s7.am4S4D=}NW3!^,!DG)ODso0jO+q/:;Pv/~aJ');
define('LOGGED_IN_KEY',    '*C-H^B0e$,!VXXK@z}Gu]&?3D5,!G.z>1w?4K!%tveDR h6AKL[QLne!1KAr2dx%');
define('NONCE_KEY',        '$dbX^6$(vmh]HKd%~%(f7Y~~45)yR93uyM<JtNrn?{1Lh|1xmG&T,=HdZc)fnmlr');
define('AUTH_SALT',        'AmAN:,+L`V3p/:Nkp[2 nd5i]lU7&?t{|6}&g99rz(e#vsC-=t[wpxtZZ1rfUM|i');
define('SECURE_AUTH_SALT', 'rFzB!lO0<UfytaqL>-tB! NkSYU}v9F40Uv&SFXxU`{,o]_{JcGpM0G(t2[]?_l]');
define('LOGGED_IN_SALT',   '3%tukk)MW`~sA9JpG?h)|/W=rwh,igzzXaP+$<X#yKoav5x9xH_inIGgZv0{Oh$}');
define('NONCE_SALT',       '#)1{}hdJkq,s8v-fnqoYf%>C-K4@U~~P`z9:HdYEWW.)W,e|G(P`9b3fm;O{.guZ');

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
