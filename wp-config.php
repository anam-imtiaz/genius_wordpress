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
define( 'DB_NAME', 'genius_db' );

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
define( 'AUTH_KEY',         '$v8s0{G(H&gxc gv8)r7!t]^[sI6)D_i)Wd[cYGC99]V~}Cz.k6/wxunb`[Rtr1D' );
define( 'SECURE_AUTH_KEY',  'ik7N9yse5O*RjcHf60 $JVWCi %$fDdHmwyjZ|_G?=R0pX!rq;OX V$Jeqkz+:>k' );
define( 'LOGGED_IN_KEY',    '9f;9ujAhE#UbZM2tm:Gi7lR`2SO^&GkpEP*dV}?n,8iDKL i?PxFaeu8i_Ur_nHP' );
define( 'NONCE_KEY',        '7iVl0yDn9E|4G4.D%b.B<rgd(`$`3z5VMLsE2|d}Sq_ztb`cZ&X+y@Rj=u/Le8J9' );
define( 'AUTH_SALT',        'w=$c .Rm,F>7?8uqs/S]Ac@G7&3?+r,G]{{6MkG8[. <*|XvbVc?{Q/|B,q>m|P%' );
define( 'SECURE_AUTH_SALT', '2i_~rWH.Xn=0( B=wkak+bok{Foq|kFVbyR*?||42?<`PL.^PG3rm6[@Mf)b,Zhz' );
define( 'LOGGED_IN_SALT',   'P<tDj_lA$Q7Cqe$JVUrs^6$W39k_sqc9M+=Og:%JM{A!.<bw.4,7,kKY|n=Mtf~t' );
define( 'NONCE_SALT',       ',0F4(>l.O_jl-!WR~8qy^wL~5]~s:#kJQ/??!?`6pzk Q=Jo)V+<yX&+w C8jM;,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
