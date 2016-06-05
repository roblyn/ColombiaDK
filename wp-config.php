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
define('DB_NAME', 'colombianos');

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
define('AUTH_KEY',         'e |:K(jA<XZrhxHh3SuO/(d|LvWpT%F!+-B%dx)~]fw4,Z5f?Y<&Xd(@b#@be+3=');
define('SECURE_AUTH_KEY',  '*!Fv|zTrD6>Jj#hrhF`ev+56R31OzC|BllASu3lw)EYKE&c}Sr_*X=_OA)&B?wl|');
define('LOGGED_IN_KEY',    '/g$Wj-V29:thhg}#Lu1ih-I2-UQ)jfHW)1.{cid-WWrz4YE3HL5:}Ip+pF|4)I@q');
define('NONCE_KEY',        'te0{TP8FYD+5h^xV%uIq+1[>!@X|mph4g:!nAXS!V#E?n3n&@+80t~m(N++.ROgb');
define('AUTH_SALT',        '*/!42_8#|0|.UfXdh)[3_hR2,?/4f[}1A-D92L]QO53-C~6lnQ-9|2(eUnUyF[Ni');
define('SECURE_AUTH_SALT', '+]BB^(? TkWV;P1:rVjHQTI/-A:bP~u-/~Jc{&}QzRi<-S/%`8V61`.~U`SVEt4d');
define('LOGGED_IN_SALT',   'AN!7~My|`V[aM)#]{~ccoAD(eX[+T^&JpDIqdHANu]@Z~ra46B|f[,u3U],Q&.fl');
define('NONCE_SALT',       '{LB@-!$7OLO%R}XwQI-$wNS2xz:6nNaoNXJ``mA&TUe*IK-U8/M3Ide&#G|uH)g?');

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
