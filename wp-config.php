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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '^4dCzLw6ukQ)q<@n1o~XQ[|eF0l/+gaxc^!?t%zO-hq,*FfFY|H{Zu,+u|C/gIih');
define('SECURE_AUTH_KEY',  'paR@OoaRFP5Gy?wAIoDJUUgGc:t{U9(M|Td@jC^L9qv2M/6S`JuuGAqrK}4&xU9+');
define('LOGGED_IN_KEY',    'DiYN q`mm*tp{/{)*NXt(dX(7{[ %w|,~F,q (CsV1xwWbu<z1G~>8QL:uSymazn');
define('NONCE_KEY',        '}w?jw/^-*u,:+[~hN`A.I2L>*&MY2XciE8._[>X &54NUeMjZzKjnb@gLY]4IQqy');
define('AUTH_SALT',        'N|{Bnv+S41f(%u%ol)c>8EH$$i1SKMdDek$;y@7VFJ&a5)}TV$)3HC2%Vb#`i#2L');
define('SECURE_AUTH_SALT', 'G=Ww705[OOc[;oYffW#w>b$VhjHhDd%w<z3}y`@He.-7M1+]sq)[v! K1>a +$B2');
define('LOGGED_IN_SALT',   '$3bww6_[2@*UJ1|9[o<`5Tax3fFF6=49~F32RNL7ld^e|K>M}0pBRP+=lB!2@`W}');
define('NONCE_SALT',       '0{.0.7KZ6C!ZCWb`]GlyewKdxnOnXgeveUaq1sKeUPx1}HyPUO?2^/PenJl.sdE[');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
