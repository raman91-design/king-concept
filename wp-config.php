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
define('DB_NAME', 'king-concepts');

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
define('AUTH_KEY',         '=UA@*c(!YKXut};<gOdo*Y76qi$h;i`#!DHx7I  (]8Sd#%Ch?Ip|eFS#t5<7De7');
define('SECURE_AUTH_KEY',  'nf&MJ<k3;h6C.Q2v3~<mDi<?u:^LX7FoOw;&irKXsv{&+6Fo5`s .bgKy2t7|TEP');
define('LOGGED_IN_KEY',    'SQ8Vy_P9SH|4i-_7|!6Ii@.y`:5e?0%9)Z%C?D^R(NhA62X{]zh&x*zi]V7 6((<');
define('NONCE_KEY',        'chSyLXJ8@;S_{m}T.MCMpR=J)6!}Jw~~bq-BBOl3Mf*/72Yal)?>a)3}AA%IdRZx');
define('AUTH_SALT',        '7JlsptAq3/~oy-55[{7K=(Zu<uegB57m tI_o4PMg98UZV>V%|e],(.4[~DQ$DGg');
define('SECURE_AUTH_SALT', '(4])b^$b0y311xx1.I& dy:(`upN|WPwhb4c!e:t6_|/oghuLWf}g9W <f%bP4Co');
define('LOGGED_IN_SALT',   'z@7ft:JCmr3pq(|DmK6EwuMlNg/p&-!zug0og+17;G*V:^ghf8&lvWpEs17yXwFL');
define('NONCE_SALT',       'OAwX3)rX8A;F]*vasly|Ti#a(nR<?Mm wQFU=.;`5f|,Lz?0D85!YWB?`lBdAd%W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kc_';

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
