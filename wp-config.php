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
define( 'DB_NAME', 'ypbcom_marketing-digital' );

/** Database username */
define( 'DB_USER', 'ypbcom_ypbcom' );

/** Database password */
define( 'DB_PASSWORD', 'ypb@2022@@' );

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
define( 'AUTH_KEY',         'Ip~EC/;:<QKvW{G,n6iIZe)T-u3$B$z97ga+J(E3g8snnppGj%R*v0;O_sDx:p^G' );
define( 'SECURE_AUTH_KEY',  ';C]_J+!U5Ci}m7`aE)lG1T}2>&,Qp JDT{g,3UrM_{TIi,7/OJmnN=SM} ^VG8a{' );
define( 'LOGGED_IN_KEY',    'a0!`L;c@H;Gmz{)ps4U(UXBN%{Fke&aii8HsK-s2n~A|zPkUJEO0|48NN!7J,1 L' );
define( 'NONCE_KEY',        'azueg5+wg&z;Y*lJGpD?v`D<r6q_6H>PoJqn$LljVB%uxVW[ObAzNsU*9pfW@|8s' );
define( 'AUTH_SALT',        'D2<%qZ+ZapNEx1=uW]KMy<L5znE23ZvTkq)SZ1jpHZd!=0dx{/Hov:vLD3Q-{N:j' );
define( 'SECURE_AUTH_SALT', '5J}HRsDr~jb=ynI gYN$(KbeLQ6Zb<RcH9y^2CfQ>o;K)^!)ImqIM6w6<:*k pY8' );
define( 'LOGGED_IN_SALT',   '6i7I#@t%rS~!n:|0/^OPak}W_wV[bq-a)9|qm`5e/?^clGqRQgbTE3N~BdNOu4<K' );
define( 'NONCE_SALT',       'DM!}*RF:0D/K5/~+bV/HRt?Hd6U+?b?/n`B3bAdF;Wf5Gh#IrFBJZRDH?pyPFo2C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mkt_';

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
