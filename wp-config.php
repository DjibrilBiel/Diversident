<?php

// Desactiva el envío AJAX de Contact Form 7
define( 'WPCF7_LOAD_JS', false );

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
define( 'DB_NAME', '277969261wordpress20250427173219' );

/** Database username */
define( 'DB_USER', 'mydiversid3a');

/** Database password */
define( 'DB_PASSWORD', '963f1DKD' );

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
define( 'AUTH_KEY', '-`JOOk*)mJI0|Nis+]F*^SK5+D.?6avuk+R,)YeW|wga*(:-c.MwK-!%GyjlH^h6' );
define( 'SECURE_AUTH_KEY',  'j=5MA-+UmH|ln|AfldxNjOh|Mf)w.)+1S2f[>@RHWY_l+u`Gt=[{yw~E;f|v06%L' );
define( 'LOGGED_IN_KEY', 'Ahf#JL2DxRdo!8J;%]/s((oW|A_k-kw?k%xb7Ir4)7a0pUfrQiI:eb.EK~j;:/ X' );
define( 'NONCE_KEY', '!3_i}Gm/CW[b-Ns0C{-Tmvl9~A8Zb[l#^H-WWFbzDky0!Q`OAPo9u4[my%@7n~Th' );
define( 'AUTH_SALT', '/+((G/T=.y[Jwbq+rX7{G.0Kj=*sK|zb2-FaK^}PD2dgebEEj fS_5QO`[c--Ae^' );
define( 'SECURE_AUTH_SALT', '9I9tY=FFdrh7oXQNuUOYZ+gGXQ@9K4KzT&OR6+^|J!*2,MA~TBjsJBk+?AG7D>pN' );
define( 'LOGGED_IN_SALT', '^W*V-|O[rsX]|Pq,|QTk%+a7Wf-kEww!|Uk%<?tAG2(Vh4-4}kV$j#hA8I*&]|UR' );
define( 'NONCE_SALT', 'UshH#pL^Fo-VF+s&{WW@Z:n;1&]LjS][3CE:_t?sl*(-8]:lq^Iu0nyFr<ogMQ|,' );

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


//Autoupdates enabled
define( 'WP_AUTO_UPDATE_CORE', true );

//Not populate themes/plugins by WordPress.
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );

//Disable PHP Editor
define( 'DISALLOW_FILE_EDIT', true );
