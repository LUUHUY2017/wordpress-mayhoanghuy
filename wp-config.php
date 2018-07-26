<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'mayhoanghuy');

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
define( 'WP_MEMORY_LIMIT', '256M' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',4bsb4Lxs(@,Bg{WUPMW:zh*]1b(|:7}eo0Yap#aPeZ:ua-J_d7rP)T/JuMg<5m|');
define('SECURE_AUTH_KEY',  '%ApLuJkImuNM$Glp7qw? g>C9b2qGvIq5p6AYm51fi,GN$PDUQ}/L^Mg/2Cx)0`U');
define('LOGGED_IN_KEY',    'j63ruDksbEAD(9$un1Ye ]BZCAHo71B{eih?YeP[Z8zvc;UM!_Q5T<IN%.(j!GQL');
define('NONCE_KEY',        'YOd<$3zsZ)FO0:.~C~B<a@sAEBUce-jIl:d24zU[$1HMPR7PG<0Mz0}5DC~9~`zd');
define('AUTH_SALT',        ']ZhPPt7&S$#P|_n?}luI=xbGYM]u.3^w6Q2BM<o5n4*P3VcX#?H8o`@<$LkoN1H<');
define('SECURE_AUTH_SALT', 'p|3={@E,t/[Y~^sX4vI.bdb;5$LQf{,=~$J%l!bHu_m@B4ww1$<*T^4k)qw%Yw:,');
define('LOGGED_IN_SALT',   'oc:kBxf26wB[pDKPj7yv_<OrP}/31xa9+a9.8cSB1CoGmEJSD{!FGAH}RnE5|xj;');
define('NONCE_SALT',       '3F/upX!i*E54_K]1,)]_C+6t }fp($?:Dr0SI&mnFEcaw)w9/QDpxZ46K_IIxx@U');

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
