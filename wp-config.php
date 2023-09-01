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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'peka' );

/** Database password */
define( 'DB_PASSWORD', 'peka' );

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
define( 'AUTH_KEY',         'QO[Uj03}R-/I]_Xr&84Bmn[QHvLKvP5qcqA6Pl 63/=l|#M|7s9hh#TP!:Z6|c~X' );
define( 'SECURE_AUTH_KEY',  'Gf>1A_bP%Aa-L^TGQL&oszY)YE9rdK5$7~[Dp&QU!*b1n}u,X22CC1p%#DB5@-1%' );
define( 'LOGGED_IN_KEY',    ';&Fm_RqM?n<i.o0T$zx!3IUzj+oVO 7ve07HIEg[ VmG)~o)5%%N|5[{jL;0s1P1' );
define( 'NONCE_KEY',        'QvaIoa2.r<O5<2t$$0s]^+1Ou#yl&;DY#Zo-jcstJg5(n>N#9e3D3e|C<)2kx%v*' );
define( 'AUTH_SALT',        '<|Kg2{XvQSE+8Eqv@0>|0.xz1)^x}_-GgQYwg^c{=P,/T(<^xV6eH#KQ6VigZe@t' );
define( 'SECURE_AUTH_SALT', '@x%96d%INXVP}boqx$S~g3/iTa1}JzA_onAZ3fF>%h5g:11/6@l.~r}1SAnVMOZE' );
define( 'LOGGED_IN_SALT',   ')av(Y{r4|+zA,d6IhqQcHfjF8wN7U[Nx,s4lgf.}Ed;}T)2/W{qHJ_4w{P2AxZU)' );
define( 'NONCE_SALT',       'yZt]46C}wwT8.K(V&HmR@/j2)wm$Let8|eV]o<HYoc;FZfazp[|..9m[Q5$nZyT ' );

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
