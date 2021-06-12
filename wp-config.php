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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fxbillionairesdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=fb:<Ii9,b|S0*-zkO+^qRpmHi@*$:}f!B>s6&4eHDQ7gy>@5@xKGdI@x#)Q&}F~' );
define( 'SECURE_AUTH_KEY',  '8qeg~Hm3Na+g@^*RFVrif`[}S^|D;0KOLT2-eET<>gOT,CiQ4sMv=Ft7+Gxa|3`f' );
define( 'LOGGED_IN_KEY',    '?T]~`?wuqt:oH_Xn>,adbO_wShDh/}ixJ0ux)v:$)dz3Qy4JG0K!vVq)M_1f-E(}' );
define( 'NONCE_KEY',        '.lfrIT>=rnm|>|x&w{c14F@%l62U[?ZO619HG3B=v2=GW<g!5ASpjO~!c7.Hztbp' );
define( 'AUTH_SALT',        'Cg1,F!w-(?cYwIK(?4_r%]Q.[]AqV%,=!.+Kc163[X~rjPQsc6g6^nP.5u94&)v|' );
define( 'SECURE_AUTH_SALT', 'zMbF8V(5@jO^]}>7{^1(#BDLuJA<8&hg(qavNmzS05?59Z=_lA2@4<&1@7b&~_Bs' );
define( 'LOGGED_IN_SALT',   'wu(><6?,~z.j4GjeB$H_~hw!pHl.kRVwY+yGkuPGmL|DYO=5:Z7)@c3Ig|2|+I1$' );
define( 'NONCE_SALT',       '3.P@.(^6.!eez (O@CHvg&QDG}-pd23F2H-_*62(d(@PX.&cL9>fDO[&!?B{8KMN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
