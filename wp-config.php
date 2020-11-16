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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'Fv_7r)7qv)tj~68nk/q$8fru)Iqz7CIufUF_sA/P^J5$t/x^v|cV+1:|^e*`6 d.' );
define( 'SECURE_AUTH_KEY',  '=G44oc7@0gW(urgx$+NP<FYr|xsl!9GmAGj&Hkp%9jRQy@q:CVSN2q[JxBab7$9)' );
define( 'LOGGED_IN_KEY',    '(ouJ9`C8#OQHsxzei<~zUM)$#vLj9Z_C.-yl+[:z,)1i)l5<[Sp|G2_A}Ri&,Ghq' );
define( 'NONCE_KEY',        'olGx8jD>>P~gr V_6W_aRdGw.r]u5Vm;(5Brk^?o5-XbVJ;WPDm^I.4oIiMek]uT' );
define( 'AUTH_SALT',        'oKfAq/lY]S~>Pmyk3Pz5h9i_wK#x-}cSmG]A!:ftWj`DP6{3AK]_C@rv:r, T.}O' );
define( 'SECURE_AUTH_SALT', 'CsCmRblQJ9x%k2!#Ll(ABStF9^yd~W[ ogq;tus|HzeEOXB%7x]<*D+5w6FC(*^1' );
define( 'LOGGED_IN_SALT',   'iX:dgntM;o|f{)t]O3`4aYJ1%I,~:(b_EkUr`kn@q[S,0/&;%Jm/)Lj{LzdfAiZ*' );
define( 'NONCE_SALT',       'R2:wPvyTkX<IgDXh,/eR5uRs)!:yjqq1D.O|;e+da@}auLG6ykg>n^nt)u2.D+HX' );

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
