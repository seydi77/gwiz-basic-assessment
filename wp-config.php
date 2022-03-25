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

define( 'WP_DEBUG', true );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GWizA' );

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
define( 'AUTH_KEY',         '=^BXBvIp`de0@E7d:vy/gxx$nD 5ie/|#Qq.X6)d,b.$`D:Rk`zF&S!.|i},/~N.' );
define( 'SECURE_AUTH_KEY',  'W01(+e2SU@N  =.q]JIfJQXxSL>Rh8erI&VWk`)b:Fi,2^T E@2UAgI{(wkMnVz,' );
define( 'LOGGED_IN_KEY',    '9d(YtiUgUBCZB<k+Xu(?_?>)R=5uGC_][92z.ov5LD[<nya8XZ{cjB/nZ:^$CaCz' );
define( 'NONCE_KEY',        'f#*g,OycQ/ku+>ZOIMEzOMSSI}EcLeE3NN!B.iCv7j|fSWmk@o{U=kqBP%Pz}+LN' );
define( 'AUTH_SALT',        '+<$qvN >*K>%~~ qPx8}q{wcN^NCOQD/ejKE@*C{yh4om]KT3rNpFYnMmB}~K>M?' );
define( 'SECURE_AUTH_SALT', 'r0qC,0`U)07umoWsJxzb*19jexhv!1?oz-828`pL7h:2P332(`t2mn$5[4m.k>]M' );
define( 'LOGGED_IN_SALT',   '($LoMWwIYx;,$,v gBq`^Df-8?>*Bja2Z*|WeD#<b7{}7. <857@c6fk=zeN&C1T' );
define( 'NONCE_SALT',       '/p:L9oQzx&F*3|j0(L]U1&{-5CeI)>&rayp)VMmcPdh@g{Tz#!6E&}Otl%[pKT)m' );

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
