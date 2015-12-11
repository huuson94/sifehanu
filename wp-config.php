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
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         'tQrPhN(&YzIP*W2<6Hr: Co1tqLV1x{+)MaC]#*;m6tiw&-]a[4LbIrWF@|`h1]-');
define('SECURE_AUTH_KEY',  'd0jC@t4L#Hh,<2dW[NnQWP-?hNlU^vQE[V8KmUvtc$p#cn4EmA3T1L}UTAeL6j!=');
define('LOGGED_IN_KEY',    'CwakX}*JG_QSRf^l`-X%N|J-B|NynL+q{7VC|NpGQ++@.{Q8-2F,|AZMo|g!&s#?');
define('NONCE_KEY',        '@h3&BdcnbD^G)rOUt=ks#`HHH^VSe+$(}b*s76JUu47L$<8b;Y(f6i^*s`!KiVfh');
define('AUTH_SALT',        'v~8f! !xL5VTpd{#~=vxtvNA-v9&1%j8w%#MXYb^U7cqQ4+PR]TM-+SJWyruz=kq');
define('SECURE_AUTH_SALT', '91 &Ss@T@rE+Z?3%~/f:.5Xm+Yar%5@Bl*QW{`au0mVmjD0;g9GTAk4^;p<Qp-4*');
define('LOGGED_IN_SALT',   '+Tj,KR~%Qge!{1Y2un[IzC%<q2E=Un0Y/-^rY ?P?(tXVCKp&1QRZ-zE17dkn=p+');
define('NONCE_SALT',       '+?=dvExyPq|71T,c~Zb_s%]+e-K9($K+9w(|#zf(pt8Z>-KGHKM#$+DBw}r7Sl$w');

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
