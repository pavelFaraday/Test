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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'jDbZk-~JG?zqgB7+7+@&@l{dF[iE$lRic(uqPy%~5.c^cAG?O{Bo1O*Yt_.,)Veo' );
define( 'SECURE_AUTH_KEY',  'CC<U}|5ikmqdWGA^5[s;$*,;GWXbgm82:cacG@63C6]rdzJv@+jR]H0LUhBxio&g' );
define( 'LOGGED_IN_KEY',    'OK*RJIa}m2Fc;DFfcALA^RX=DJ?8Z9$~Mne?,H)~X/tASQ(9MTDg4U(ID=GsUv7B' );
define( 'NONCE_KEY',        'Fo4FX#)4`t@(}qv8qNXtPqNt?]7K+8`oJb3?9]EkCT*oeCfkbjG,o<d0n;X;8Y<*' );
define( 'AUTH_SALT',        '|^_^c?qdFO-sXU@Jz}8rwb@C<)v_@~y!=+tdTpL,cewqBD~ I:%,QqOYR>&MPC&W' );
define( 'SECURE_AUTH_SALT', 'yeiS=-OZ+Yl9e=DQ1NqwLu-Q PKpN*&?{;f[+k1Z{7`</=25U 2Pg[N$L+5&SI3A' );
define( 'LOGGED_IN_SALT',   '6XltzOK-4Q!NO--*I,II!U_fE,A:=DLvk-L[>ay<?1ch[<:nAac|yX9vcfk [EnF' );
define( 'NONCE_SALT',       'F]m0O~8W8Rf4HvmR;F,IWKd.yrsx~lv}vg,w5E)D!`K0 X4(S<.Ea4o.YNoJ^+wG' );

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
