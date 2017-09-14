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
define('DB_NAME', 'bradop_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'bosta');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost:20970');

define('WP_SITEURL','http://localhost:20970');

define('RELOCATE',true);

define('WP_MEMORY_LIMIT', '64M');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sm7A[Dj}6m5w/{aa8y&FU_~SsV]w^r5h{Bu^g?=5J-0.:z!|7!@jFnoKf#*qxZPr');
define('SECURE_AUTH_KEY',  '0`moP%]sbyFZf=I33GP34Q%340UB=iGF:*vQW5=&@?CvzC72t+t[8 VdC`KOGyr:');
define('LOGGED_IN_KEY',    '2]{:8ayPuIiT6/, 0-XZxI%?X@Xhzr~fRiHu?a/dX##!9/7!mh<Njw~sWUVV?Li!');
define('NONCE_KEY',        'f3Sy)v5u+%G]uBEvMsETD{v;VSQJL*Iw&P)}wZGlXDxRE)=x%Ai5/P@D/iq7SpRQ');
define('AUTH_SALT',        'iD zBSJZQ9@oqV=Bn_ui{:}BB.GyD5le7P`+ F8xMC<}#i&_I_4SH-70ayj?Q-)r');
define('SECURE_AUTH_SALT', 'hvT,* j0P9;A1n(bWBUw:n@ptHA7)}eK^.L!b7F<%zi=VlR*@gB3?cjxC}7vLra7');
define('LOGGED_IN_SALT',   'JFj5a47suHDz51(Smu-;;wFS6QDuMQT-]j+dy6KK^v3_L;4+GPlAR9c%U5Ii4?kg');
define('NONCE_SALT',       '*BO%A-Gj0Ra%}3lQI =,a{=@.X7}3yuSbRrqC.T:48@Z:I7AXRJ`;GhWn6rp4r}J');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
