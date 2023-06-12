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
define( 'DB_NAME', 'wp-boilerplate' );

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
define( 'AUTH_KEY',         '?7-)G*k<5f)8Uy2>W}Ai|V}!aq?s2Jl|;z)D GK8N-)kAmfFT+8oPMA1qsk6 r6C' );
define( 'SECURE_AUTH_KEY',  '%e*m2JHO8^7kTaAmri1Y+]wdvVD,Uh;6G(dttRe%E*.Qnx]JZ`QUlgi5]j3Kyo>O' );
define( 'LOGGED_IN_KEY',    'OABxEZNWa8uc0 9[b4%R&)0Gc-Q&w5%R*IXxi[h`t*53L/DVfVbca1[UX-}XA`+D' );
define( 'NONCE_KEY',        'CYDegk,Rs}0_{]jx&Mlk$k;=y!&!BmX{^(wLP.|WwhQE$Hk!a1IV(I0I8R7;7eTB' );
define( 'AUTH_SALT',        '{+IpI(pa<AJQDF[)!/eOsK<L; *($~Y-VaB[2J[wn :4)CvN`$_ja7BL$WZg/=X{' );
define( 'SECURE_AUTH_SALT', 'E5ngGR__E[rq#{{3:WbG[$*[ocPGlXbO(##l33*R}W`A+|EVi`DN584-6geg:2}P' );
define( 'LOGGED_IN_SALT',   'MXqp=~Co(+g+NcvKj`LTQ}1RYyoZ_`j@s4Kvc!9:cbe=*D9C{gf#X!r.uHqE~)kN' );
define( 'NONCE_SALT',       '?RO?Edw*kHP(2}cJpGx#dbBf)Z_6NuhmTc4QnmwBcx~D{C3ZK*9m.(lrlJ[FbC)}' );

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
