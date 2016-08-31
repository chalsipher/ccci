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
define('DB_NAME', 'ccci');

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
define('AUTH_KEY',         'O|TrcgJ&%jyxFG(~d+7(Qls52g:?TES+Zs`s{F} t31ZnAZ1>xW/6<nCKghYk^Mq');
define('SECURE_AUTH_KEY',  'b?oENCt4,=N8W5DX-~Rwf5i.+a9XfFEk#V;B[fFS32J0Ea~|[QEJrvP]%J~4(i:b');
define('LOGGED_IN_KEY',    'Ob|h},t6mx?K{=RpOT]._H@uu.we5,58=3w!ETlR<C!:sqq}h/Fexux<bhsieQ_I');
define('NONCE_KEY',        '5+hkcJEe;cOoqK8Ez>h%mg:&Hv6Qc,,J&o.qjNf]=+gCp2jBIVrF_eBK{t:SN=#R');
define('AUTH_SALT',        ',,0M>w#oZ|^b#%2/EU)0:eD <;gvl,T9*ss3-)r.@?:Tv.k%@]L1yv14#u]28:7l');
define('SECURE_AUTH_SALT', 'dYp8oG`)Qz>3o~KtifmQ6{J0^@?wWo2$q}Huqy~uRq?^9Ob;c<6q[tC>z3K0zlUY');
define('LOGGED_IN_SALT',   'G_w*TRmMK|Vk~4-37j._zYsWIYi$6!!(!2hXmA6*[0o9qEJXfG*8V+1[p`@CW4{3');
define('NONCE_SALT',       'PyKlMD{0h2nE[/Nh8b(y(k9e^uP5+K#;Ay2$t9y+ !!(LJ}v4+|AzuFV=<EPixng');

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
