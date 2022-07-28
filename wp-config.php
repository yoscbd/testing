<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
if (strstr($_SERVER['SERVER_NAME'], '127.0.0.1')) {

    define('DB_NAME', 'testing');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');

} else {
    define('DB_NAME', 'testingongit');
    define('DB_USER', 'ybdtestgit');
    define('DB_PASSWORD', '&orGePPRF[NU');
    define('DB_HOST', "localhost");

}
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'w~ wWV#<_D$}P>$-QbIHx-<MEk&,v6Chd,g_6sW!/>6)f5G)u6HR_,4z<uYF85<-');
define('SECURE_AUTH_KEY', 'F@u6h6cSP$w)/oh[69n0Jcv<EC}2@L~focKJ j`%#:-lFcMcUtGJoSj6~bhml_c`');
define('LOGGED_IN_KEY', 'Gz8;-89w.S}})kZLRDd2lI#doJ(@1_4LUi=Lq~cZ:R6}B S| I!mHdzjGHPWBVM8');
define('NONCE_KEY', 'D8!a]nq8#~. kDyYSQ}yD(~59G;M*$iYq9x!~Q=8#n~P:KD/6}q)P?PU&mRT$?=#');
define('AUTH_SALT', '!>5RR:+3$0wS]_-NwXRIK}R8}&t/w7sn%1]-%*<+GE6_}`ym+j:PuT11J,!^<:zo');
define('SECURE_AUTH_SALT', 'U3AIEPT>IHqhu+Z=8KcrNgt`jhX!rnwvEEs`EqK_)1-dYs+vXL|)<f*wM6{2)j&|');
define('LOGGED_IN_SALT', 'j5&sfD?$+g3([-F!v#{3Mt<Q`EZP&Y~?e5=[!p5v|{.A}c6]2B7cIrV%#(Mm-We0');
define('NONCE_SALT', ']O9$45N%{S!+$pBZCDS*;#hG2dH1$SJAmd}AC5ua 0]R)a5[qB8)[J>DKBp^)#gM');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'twhp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';