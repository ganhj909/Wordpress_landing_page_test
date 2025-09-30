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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[=yQ^oKUwdhh?Mk-!>)f,)iTgT>>7:_2b)18[k5Hic@)f)6S2B!($|p@UJ@0pA>;' );
define( 'SECURE_AUTH_KEY',  'D,>n1v5Z.L#j`>BXxt L,7RsZVX[1TJ0oKeqsR)Ns:fb324r4A}: M}#_$-R|@XR' );
define( 'LOGGED_IN_KEY',    'mlzfA#5l7bUNKxM9P3%&Rq]s%VKb6mJ>tq:x[KgXJUAY&ibDQ`2d;;SV01C:?B>I' );
define( 'NONCE_KEY',        'vIej9:7`i(>aeVwtbX>1yr[4cb^;2/`T,(F)%q/RW<e,qyN r@ps9v6tz]C`7]{,' );
define( 'AUTH_SALT',        'eo]a2b5?N?+%`~]<)CprSRdSMmsct/(^l0+p}cDh%sD#=Sc7TuTGAe[+[AzqRN:#' );
define( 'SECURE_AUTH_SALT', '4m SpxR3]:%,1-?W:;Dim4b8y8^_-lFeK#Lvit+6[Bmo}CR9~O&`}S!3i7N[/2iR' );
define( 'LOGGED_IN_SALT',   '@9c4!1U{5H!Z,k29/>C1D()44tObSXV(AeXaeL^3BU~_8FeU%bj@X~Ao+py,UqX4' );
define( 'NONCE_SALT',       'zu~=7V?{e`8R&?5H@MY|Wk)(Y>E&pjShTVQ+ 5e^~bAs-+.E4gXlZlGU6ByB?hRz' );

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
