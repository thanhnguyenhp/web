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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'OQ$DU@QX;&8B;zn[}_,8?cH5#YpnXO_+VmB==$GoC#6<.Oj|ye_CIT]8N&s]|QlI' );
define( 'SECURE_AUTH_KEY',  '@@ZuM%;Y*v[rU>vF9Y|_xIZ$v-=Nkh*&qxtpoip!E*ib]bZ/f]~3Wrj!ZZY+{<rl' );
define( 'LOGGED_IN_KEY',    'Qt4DZ!Y0nmjn1D=2(-QC1B{{1]@vp=MMHNd W~uE<G9OsF4j`fo`cZ,AC?<7<i%c' );
define( 'NONCE_KEY',        'S}S^i5SvU(~wo1[U_)KkeQM94/!OyqYw-`7W>S4vH/`om6$D9_BFzLwR41ozbpQf' );
define( 'AUTH_SALT',        'tA4n~khU=a!_.v <z$E.@mq- g9Jj94s[ars8_:/IyYGG@eF^^b@5{=-$GD->ShC' );
define( 'SECURE_AUTH_SALT', 'JwijcGA/N]ckW7u,|>7Hh%#Oxgfc/>*)agCyZSHJ0l_zB_qXTtk$uu5xufa7#C:}' );
define( 'LOGGED_IN_SALT',   '7S9tK1yb=,?y<Tmc1jv4tTKb,hjST;?AoSgvPaewvD|-m3N/Tk3[~L9bmX8%Zy}M' );
define( 'NONCE_SALT',       'Z-hqyJNVfc*TL+XQ1EMw96y=;=-},zSx%5o|3ojZ$XgcHX<d#_t[F%ex oo4e<-}' );

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
