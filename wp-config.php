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
define('DB_NAME', 'banhang_db');

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
define('AUTH_KEY',         '8Oy!!!zuV0gZhR^Ho?>jjsyK;338URj2a-wM41o0anl>56YJ6%[bvFV0n!IFkOcu');
define('SECURE_AUTH_KEY',  '|xn%8/?|HAP}/gVa1h0Pq@R8zIv+%n-5}qJ6:DQay?TT5^;%ndKFOAMKnBon%D2b');
define('LOGGED_IN_KEY',    'i&RhWfhfU~Xfti_<I6>]w<XeH#!K+@o2[y&E[De=Ls0<ssj&$ij~{fetd$e;mwPl');
define('NONCE_KEY',        '5i.;!N_m+fS/69LJX!aV+%[ |flQHI}U7c(Q?m^<Ml[X+4Yyg`:<rZ5+1mf(oQB{');
define('AUTH_SALT',        'Pn^VUG#ji_t1V3`e!AI^pb}$WCN?%8 ~9wtx]VL;MLZ>/JH}e;SN4B6^mfq%B=jD');
define('SECURE_AUTH_SALT', '{qacE80Yw@TSaUcMC)AS1!YhP]syE8t&*a{7B%W4x)pQ<;,cqhLq=`wnE,2FZlsh');
define('LOGGED_IN_SALT',   '5P`81uY<36?Kp%9f`^K?wsFFN7k%e%&fC1bv@,Pa9LRqu.Q8U+ST^F8w,*iB3#d-');
define('NONCE_SALT',       '/V4T5@F_af-nFj$B,T6v%_2H@eE{~Ld%`1_Z-G/;%.Y`?RQ=zD}^mA1D@1<0h;L7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bh_';

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
