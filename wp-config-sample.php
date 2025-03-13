<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'overboard' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mF4.cog dQ{fOo:#u.1TglEm:CyYU4Y@)_D-(/RM.GDqU<S&tGs1!jS47~}AtcDc' );
define( 'SECURE_AUTH_KEY',  '4w:J@pqe685^ID|sFvtiKIlAAZS%zhSIf=w?edh`M[4gr!eFf??uuBLHXmCyZ+>h' );
define( 'LOGGED_IN_KEY',    'MII7o6|A&As`ZAU95E?xzHKi<$T@L-305PX+X19FHs7T3{fsYur;,/Eqy~[ #,.`' );
define( 'NONCE_KEY',        '$oTL>:?%uu@r_x[e8w>[|k[#$Y.jc_V:{p[~e=&9T.T@?&WYpJf?$C,c{1tnlSaL' );
define( 'AUTH_SALT',        'W&:<)tqU$hS{mY}K:h1D6w4<1l{+Q+E(-PgG(qwX05nL:H)D[JE!m6|l%8<9?]6l' );
define( 'SECURE_AUTH_SALT', '=40RU((LDua(YL_8X#6w8`5BJJ1@=F-VhU@q_RwaIDq6D)HU_;gb: v0hS(HOgH3' );
define( 'LOGGED_IN_SALT',   '!tEVx?I6 os?.iE tQVi?I %MFGJS)g)l/u[6gES^vk$C WoRfM|dN.PJ-aKET?R' );
define( 'NONCE_SALT',       '98.N8~<R+Ai3]zbGPIPdfo|)7~lv%r@t-t_?ogoI-LZOkA ;q8d.JEtk#|Xi;rhh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
