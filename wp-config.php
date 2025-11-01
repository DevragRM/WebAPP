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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         '5EiR5Ga(i#$w:2/D?}&&1b?.#,I}{G{Z.fRtswsTO<UeScsJu-+/6OOT316yun^3' );
define( 'SECURE_AUTH_KEY',  '6SZ$%/n:~ct$f:gWSlm@,m3,g|4X$Dy # en[`FQ`y$05k:~$x)lQ&rmk7_lk*r_' );
define( 'LOGGED_IN_KEY',    '<-~,_Y`+8K3a:]80aJc-^Q8`SA+z>ziEO,iE|fZJwKMA~+AH{kh1a, n*`z7ygB;' );
define( 'NONCE_KEY',        '7<]4q*/7!g_]1k,4!53qxFRs}!WsW~X,{<W(VqC%<}*Wsj+sfJOao&LAXKeXk)N?' );
define( 'AUTH_SALT',        '{U<0!Nun}Q/>w~6HwWv{oHQ;`To091wUuA/Y;*:nI&e~aVnumuU=>r8p>jpRX4tx' );
define( 'SECURE_AUTH_SALT', 'fBFfP=elk,{KrcfaC9Ye(m{GKP^u:F(8}a~,OX*FQr^T%6#R|(?QBz&ELXJvrlan' );
define( 'LOGGED_IN_SALT',   '22=FK/~?DRr1HqQ7Pq@x9|y{iWS4y<&(r.DEKlQ=&&{&A| Jd^n}MNM;x@:,S]>U' );
define( 'NONCE_SALT',       '6:0ir&<g2Q%LiOIH|siU=M-JeQGdr-8U[!Sg9^!A9ohb#mIkqN_2~HiN51/0.M0W' );

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
