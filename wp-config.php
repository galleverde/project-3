<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'project3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#k|vAW>~:w$`W_M5xkP?8z$,+Jl=&2pEQ@j-&`j,(YW#(17,-,<g]T^,wGX,bl:{');
define('SECURE_AUTH_KEY',  'J$-K!pp-D~Dch,gd}&&*IDzy@CtGrZ|Yt#+[l=5NOwf,:hK]hMxc,-afPi{bCf#/');
define('LOGGED_IN_KEY',    'Y%~>Qchy}-cih^!7B,WSQBh8<r0i .kxoyvJ(k 7./A5ugO1$MIrDJ[A0lFweV-6');
define('NONCE_KEY',        'wz&Qs7dPU<_qs;~j7lT+rb![nC9oK~.raJFV=8&h*T,d7o;-w08|cRUs`p$bjg_H');
define('AUTH_SALT',        '&+<%y~Q7bptnDc<B>#,oRl|Oq+|?^,?PzG/u)w]UoAyjVw=H++.Q{LDwampkbBJM');
define('SECURE_AUTH_SALT', 'uF%rOy3v|n%-Tqa+*R`[$sZYLVh6{ZE_QblC5}?kXM>J, |nA)v*Yn7lvk}-t{Z>');
define('LOGGED_IN_SALT',   'HQ@<:I:{8ktZ|]{OC]lV>}y~[BXc-En8YvAM|e+ui]^-#r5)-g-[;+1v5h9hnx9-');
define('NONCE_SALT',       '@ME>W-%6=z,L9)3G*-X2AD+DS0||w_4Sj^86|a{Ju3-K)>:](fN:<*JhYj,>1l{^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
