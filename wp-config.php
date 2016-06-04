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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mwc_h4xx0r');

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
define('AUTH_KEY',         '4?_8.?2#QX OgT?CPf:yFTcMxIGyn:^^;t[Umr00I<BJszv*.T/fmMj1-w@t]!w!');
define('SECURE_AUTH_KEY',  'Q}[!n*yRNt.eY0k?/YJkpK}B3zDWu^t%%l3s$@P|C=UJ`slk//Rl/AI,(hf_h:AX');
define('LOGGED_IN_KEY',    '];c`OB/3;r9|@8FBL*jSAn7(pS>~ L4Im>B=03X3sX(,}v.-uOm,[p;t) 6M&+To');
define('NONCE_KEY',        'l-~Jxq|])IEwVDz$J6Az2>4]w. #foByzq58P1l]T6Q+Kg&)}G9h9@/g)kC[;Hs?');
define('AUTH_SALT',        'yYfQslq9~WT=@NvEEF[d+b~YE%17t<:J0oc>_XMZo)^6=,; _&$navl+crhYf|@u');
define('SECURE_AUTH_SALT', 'HA-vGMXa -?]c:1`F@]gJ&R8N/i7=5(oEXJg=b|GC=k:t%;l9o)c5W^zh}<b3KNx');
define('LOGGED_IN_SALT',   '%K@aB=cO}rf5`G(,vALFgwsZP>)K2*.OHPR 0bANkP(1HZt_zPl67XF mu[QvyoJ');
define('NONCE_SALT',       '3H]@18|NMQ81/v?_l0NA_HiEoSSz]An|NMso|IfJ?,-,_xjaSi@[;WVT!Wt;d.nK');

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
