<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gr8_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Erg(K3wuF5*R} k99Dia;+rxLGGcSuhBHA|<S!X3bPbhH9P63`s9a$0OY]@djxSN');
define('SECURE_AUTH_KEY',  '4[yE&?L@l*>r!BzaH4FM81CjJm~Io{l8~,<|P9uuk#I73G`i{)EP$ERNxD3RFpAv');
define('LOGGED_IN_KEY',    '/n<R>>=,H&{)mQ:^xQG&m8@e^j5=SsY@Q&atO^zpcWXT]]U,9TlEHv.VSKh!i`ku');
define('NONCE_KEY',        'F:}@%Z52E<Sp%I.7cY=xwCR9,~D!jqKh8<z3!mr.KAIcD[B.;/^Bf!zz{?jbEeI?');
define('AUTH_SALT',        'P?Vfv`?kqt8K9%hu`(1Xv;`4.+bfV7ErpzPyz8{;]/d]J3/qKxPm@z1:&>E:*Fp]');
define('SECURE_AUTH_SALT', '(ME%yFIa+J 1SgA_/vfFlGj#n&pGXj9)UnFk+o?6byz+&z],gO%@B=}pWX5V4%+w');
define('LOGGED_IN_SALT',   'Bvv_^3ZyNHO9+u8{nxg-%yP2#a6ct~@1.< s2U-p:}Bs~C@H3ygP`D<8|Wa)f(a%');
define('NONCE_SALT',       'f%.jq6$yNI^ZPfB:A$tt?73an7v|>7=X<dl|pMkhT-o=lVo 6LZ?|6}K3pQ;LeB2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
