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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')^;ADKd>UWca9leP$+#0ghiB,Qlx*#C*t-jG`Bg?G~w>D-sr?s603Of91}k]vG<P' );
define( 'SECURE_AUTH_KEY',  'QL]^vLUi[`6Hxlg|G*S+fC#76rw$:ax?7h,?;U4)e $hOjAVW!INzg?tnKQMvMO,' );
define( 'LOGGED_IN_KEY',    '>`-6XfG]5Xjn3lKP<MS/g]y|~^}Q^~IH#`:5LzqM%/j{uBHz2<9VxS)wst_Lz6Ym' );
define( 'NONCE_KEY',        '?)g#*bnPH1%RYA>H|dUXjW~iA]xa @wKweGO>_IF:5HUEXNO_g]ZrySR]q!qT*/o' );
define( 'AUTH_SALT',        'mSzyF(TL,]~joaHalWhM{kKp!JEW ;StUXn(Z*s.wH+=Y$l+/Ueoe0C+XIb0H&at' );
define( 'SECURE_AUTH_SALT', ']+QKcRFZ@wGuv$=B[Behp Ux&w~.KZ,^ ]*>L)(ROuZ11YhDCGTyO.}k*wp<_pjx' );
define( 'LOGGED_IN_SALT',   'L|EuS+;F&a7S9 DI;B98/``;eKED3QTW.kGdcPp!cQ9nT$;zZ:!}3lxeDns=]5FR' );
define( 'NONCE_SALT',       'gx`r`N#P1q,Q1LQLs%ktO]!yKpq[p&@=:Z9RwowtOVG<C+9[TjRL+h>(iHA&XMn|' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
