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
define( 'DB_NAME', 'figma' );

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
define( 'AUTH_KEY',         '8.MlU+b- NY!LUbOfJc&Xz1_}L!*OD4@i%P_pA/k%0)&M9mkAn+w>$QW:V#p,j|4' );
define( 'SECURE_AUTH_KEY',  'aeXo!nYnVTL!CAWLiF{t-KnV;LzO#(*c*Ho;6znm1L}lXs`f>F[U6HTCm;.iz/8_' );
define( 'LOGGED_IN_KEY',    '/aD,><?1D):eg^,bY$wH}b0JD/29V{|Rxt5JTW]RfqOwe-vZZH{h4ZD3Cj4[E[FB' );
define( 'NONCE_KEY',        '$a;ewQxk#G,z9Q{0ExZ92s9v&1j$77fiDw~j^#g(Ekj]4K~bTw($vKh=8_ocJ$1k' );
define( 'AUTH_SALT',        'G|Djc-?Wk8n]9FT|p4|]^`V;fkm%bh8`}hV!QZhrzk`7^_]u3q(D;MX{ll686qa$' );
define( 'SECURE_AUTH_SALT', 'D(/6|Gbx;|QS*+eqizS/rA|{e,Ldsv:>2$d*$fGX?ES|i9~{U#!Q+n*>e<H(myb2' );
define( 'LOGGED_IN_SALT',   'xTWzAdnVa5YrF(SV<E~`$z|UMA|J~4{7uQKf|d#00Xm)T0rOZQv,r!QLOYJmA%Z-' );
define( 'NONCE_SALT',       '~,tgZvV|bIR44SB=MN`R>d#;,TxiBKj(u%JvxjnzJ.E(EzgfZ;1)2US?KZ>+igE{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
