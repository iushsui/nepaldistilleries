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
define( 'DB_NAME', 'nepaldistilleries_db' );

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
define( 'AUTH_KEY',         'g18YW]jPL~8g(s2!pZiXz6|M&1984I0mre4,O:jQ]/`C-^%str]0PA))TpQcaBbY' );
define( 'SECURE_AUTH_KEY',  'fCPw1q>vd,4zspGj)#}*=2z%%%Q$Osd)G60&+sBr.-4bSPn_1%S1Mj=y8eJg:&=k' );
define( 'LOGGED_IN_KEY',    '(gOgA35T.(Rfg8/mkO9G7j:-Wbm-<H.Zryk_1:!kmH~=wZ]H(hpvZ~V16oHhFczY' );
define( 'NONCE_KEY',        ':L)9k$68&:0cD9[Q D@7My>gR<C&K;|).wN[Z$038nF[N4G7V$4tmUpKHIu`=@ja' );
define( 'AUTH_SALT',        ']&[NYdw(RC#O:r/aJ,zc|+fe5= D&cX,3}m8mY8D|Edar`lJDnW1@GR`.^I|Zh(*' );
define( 'SECURE_AUTH_SALT', '7=yKW]qx_vogiU@ZDn`qg;*o([8YeZ*hFKuX%#KVJ,tjPk|IzWOmDhU`C+)SB:~l' );
define( 'LOGGED_IN_SALT',   'x$+sKG6mc]NV&`7d_:B}fixxY/X{,!pJf~s 0O^kvrG:#;yut#TP0&Rnu~%H-3vL' );
define( 'NONCE_SALT',       '&B4#P.snaW>BdH%f08TV8}YnysKz.4WapxGmh%7;LFV9?BdA.dh `c:}hlt_39KV' );

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
