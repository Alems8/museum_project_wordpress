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
define( 'DB_NAME', 'museum_project_exam' );

/** Database username */
define( 'DB_USER', 'Museum_project_exam' );

/** Database password */
define( 'DB_PASSWORD', 'wEpT)8wi)opEP6UK' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'zFW}Bjxt<+,f>{K^0:3:r6v|C:CawI3x1$qX)*|xH)}S?M3h;c9C(AN7i)>R4`?H');
define('SECURE_AUTH_KEY',  'Zr3|5Bu7fKt@]BjW.<a)T%7nY-7Au+&lX`|675Ec{I:TM$NNo4~*F=ZR)|}iRUiU');
define('LOGGED_IN_KEY',    's3bBrui-nQ4~Z H(zLzoLgUQN,7}sy41T#T8W]-CY6:Z73fT``%S18>OeOs)hs&S');
define('NONCE_KEY',        '$Qf#dl-c9Hm PR}/Zzy/6<2S7lJ~l)=Dki?Vr]eP*(IzPhcIG@=)$SUv8Pw#WW1v');
define('AUTH_SALT',        '&J/$X3wr|SW19ASL!Lb}U1b8_~O~;{4B E(k[=lKdv55u1Kq*9jsW<-l:7^n>]lL');
define('SECURE_AUTH_SALT', '1}OLS/*gy0dg42.GH>iYul9:s>SAqD8-[l>><~nt:Zj-,N:X;E|pdia1he1+hG#B');
define('LOGGED_IN_SALT',   'P%Bem07t|RqJ@;3I<M9_Gm<I[FT!auV3d//-GWC2>zi}jSHp;pjXh2UrkGkgT#AZ');
define('NONCE_SALT',       'pn+7lCAG5Zrlmds}19kfy|fk.-e~yg{){Wcc6%{Zv;aS8:k+d_}g(WhYiHfHA@/1');

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
