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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nav' );

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
define( 'AUTH_KEY',         'k=luR2<^qap$n?p~i2|g5CY)?=d1g}Dm*nOb{U5)`$Jye{0J2;H0STk],{$U;KQG' );
define( 'SECURE_AUTH_KEY',  'RKY0=[:x#GHL>+F$A>K{,bMzxwn lO,Bz7P3!#M#mu,,UYyt8MAZ&{+X7z.h9bWa' );
define( 'LOGGED_IN_KEY',    ']htK4;W8gE3afd7A[:zRK!+k5.Or;/*R:6=9#xT-2oV/.Z,))>.YLQtmb!3 h4Vc' );
define( 'NONCE_KEY',        '9<mE,WAR$RG$5.6?+O[<z=kQTKP3ECC{0u:n3=M{?Y^~i}i-U_V12M?HqZtF%v|(' );
define( 'AUTH_SALT',        'zphlJJdvx!Jbpke4;+F#g}v.T7]RZo$,)o8^,ay$B)N0/gz#vI2H $Mwbx>MKyH}' );
define( 'SECURE_AUTH_SALT', 'wKWx@)0nz+l1RAOs7% &QTA{HT5ei?WEH9pb2T_~(E#v|sYz),*o8N[|lh#K_Y5<' );
define( 'LOGGED_IN_SALT',   'P%z*?m/2!F*<1<]vgd~9-W$_+_u~82{XZ`&d4(pu^r2$tR2D-kU|L6Vs_[c3Qc5D' );
define( 'NONCE_SALT',       'kj-zI3T[LWZg!IRQdrY)8E0$}-p9y_Z-@oiVyvT_Rh$+fc<54 t%JmASbp`)fB5a' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
