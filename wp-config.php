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
define( 'DB_NAME', 'web_17_4' );

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
define( 'AUTH_KEY',         '.<#HFyYkb|n_hB;4f_zt: uX*c{mh%dVFk:ng&M%bYAnhCp0S|V%z=pbnt&9nwTr' );
define( 'SECURE_AUTH_KEY',  'z_52Jk9M-?@r9k_>jPJhtw&G?oQ#?)@9BZY+>Ag_AUKu<`[gqHp5~-N#c|`uKu9E' );
define( 'LOGGED_IN_KEY',    '64ot+n:l0tb;F| ])&>Nig<?78 X)!B5S:,(6Lo:W*&->tMG=WK#ujNbop&NDEvm' );
define( 'NONCE_KEY',        '|aa9V~@8Ap-4vswt3vGo:Nb-mTVg47B:%M5e!xyUMSZC~7>^2eS1`C?+(C%VLx e' );
define( 'AUTH_SALT',        'q:+|/SJ4&2}>p&q~LVia`@Yh+?ac_z$A>I$oRnioND|Vto,&uJvku-cL&zcn#`,=' );
define( 'SECURE_AUTH_SALT', 'l6,I@n*u8tHsp{?_<rWll|UFlBv=TJGdz[hgs@6A45Q+.)^+|-79/=_1M58cbFtU' );
define( 'LOGGED_IN_SALT',   'Vw;LKd$*~7ry&RTRkP20u!hF*^~W;^GT@*Qw6/rs&]cW$j+s2*?hlWn[m/U|JUFb' );
define( 'NONCE_SALT',       '0u:ECPt3n]:zIngH*%.%.mQ(h}<4KCrG3lHW63Xl?dOt8qJ|7@7FcF2>s7QKS67z' );

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
define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/web_17_4/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
