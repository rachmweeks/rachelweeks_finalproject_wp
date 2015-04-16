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
define('DB_NAME', 'northstar_db');

/** MySQL database username */
define('DB_USER', 'racheldb');

/** MySQL database password */
define('DB_PASSWORD', 'flymetothem00n');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '-.)g|KJ,(1x.$ct2{H9c,bPc1o(8*g|/+uh_oysCRYMJm3eM7x~Sm|xE[J3SGLlE');
define('SECURE_AUTH_KEY',  'Vh--yKEiO:2T0c]S6Rrqu3XCe;1DhF#(h&1OE_oIZ +*yVQUhU[*I1DgC?c<f,d_');
define('LOGGED_IN_KEY',    'MCz|G`QQTs!GVLrl;! 6p2IRbg9ONA-^N-MXwT:&>`AP*0,:L}U(G~8=O{qJ4>41');
define('NONCE_KEY',        'LDW49t+`C7 <@Ymy|^,svGH<j9w`IKb/R8NtAv-G:<qpW:QN)Gdp:p_q7p{iMp}S');
define('AUTH_SALT',        'TLp:p&nfqrwH-ZMq|u3(r[YUx,VgyMQfJ2zPVShI!wdq![wV Ue.5eU1;h(9uUvm');
define('SECURE_AUTH_SALT', '=c]hrBf1ZP`BZg%x-asN,P[B>+=x+V{eM`N|HRX42g-+*cEK,+hNyYgF|(Szd=)C');
define('LOGGED_IN_SALT',   'B|3y[u@o?E#y=d`JhxiTf{tp?fV~7)/PcC!lifL]rkjC?k(V-0h3PQfmxMt[kTfi');
define('NONCE_SALT',       'W>`<Gmf59Y-!&Z|=3W|cFDkX$Gp7(<6p-o04NQsCc@7,mBYKZXPa0:L[hIx=]JU@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ns_';

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
