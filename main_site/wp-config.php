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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'corporate_site' );

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
define( 'AUTH_KEY',         'Mn&GxxTn?0;y]x+-gQC0CZ6;f])K_x?G?_F9rQ#sYb_*8|+mPom:2fa{M5xcf|$A' );
define( 'SECURE_AUTH_KEY',  'BuuUvO|Ziz6Q+>HDd2@od*QQb0QYxHu(Qbhx4piKnkyVQ*K!;iYXr5Y(a7zxm(Kw' );
define( 'LOGGED_IN_KEY',    'l:(Zb[ok49?cJgB!i>)dPY6fBqkff{/6gH30i#Q!NZGU+^Xq[z+i75nyKJ#a2d$6' );
define( 'NONCE_KEY',        'WzpCBFQ{yqpD]=xB;69nj 0-8xq&GPFJUSI&,~RY6f1t.0`xTV| DSSQfG8H@KIo' );
define( 'AUTH_SALT',        'o/:s5KR8X$.WXT FFGsJf,YGgr*w(Yiwh~AY0{d6e>gl@:#R_j,:*j/uqf:_ n}6' );
define( 'SECURE_AUTH_SALT', 'm7EC:l4 %ru!Z0yTe;dt;-}I9EOYeY!x<MFb4a}L}1_P2{0BUcS@04@?zId.a%?5' );
define( 'LOGGED_IN_SALT',   ',y@Te2%pnSi=-U1ctte2>W?0EzR(JF$Zg;9@^:hGy5gQYXo;%R/s||PzGgm9>_Og' );
define( 'NONCE_SALT',       'S{cUN$yOZ}8Ci]W%=^w&.pg ^-5RM4S8zyxC]a__<Olyd|;5znJy`e4tRximysK7' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
