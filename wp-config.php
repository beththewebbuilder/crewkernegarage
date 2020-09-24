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
define('DB_NAME', 'crewkerne_services');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'z] ZvcrNQS/Rgrprpj4ue^K;OgrtPMurVeYPE[/:bl;=sp?`X#%dYEG={JlxMZ]_');
define('SECURE_AUTH_KEY',  'D-pk7@UKC$4hJIed%6Q2Y6M&-3* Ah/Z^kXADQzP-VRer&:g(zC0Cgu:kO5E3AA^');
define('LOGGED_IN_KEY',    '!1O{HgM>H)@Yu#3:l,7q.@*AN1pCe:.5Qt9L`e>I-ExtU3=THFAg?GRq#vX_N3r:');
define('NONCE_KEY',        'Od5^=v`4Fy}>dAEeQtO$b,DtDv#U#l]NR%8)|dVZ]=>o Wb@xh(IeeR)g@:+28R$');
define('AUTH_SALT',        '4uL9/.=^P[X.4ft!goR$,j%M=r,!Oy4Tv4pq[7.O+dUrmI.]UbiS5n Bmo.1ZT.1');
define('SECURE_AUTH_SALT', 'C!r#Z.V^)x)P}Z asOixw$`E*ynpnv>3eX9Rd.*Rr5M $&1;a-W5~jniXb*`Ox>h');
define('LOGGED_IN_SALT',   '@d5O{fA}!56NVA95-Rj60`a6NN$KQlQIujD$<D|sV<K%wm^eS72u7^iBbKV;QW;+');
define('NONCE_SALT',       '[##`=v|t@S)S!$IvfRQxs&*h=VLo&S}h)x`]U6`Qto*msSa2v[X~ ,3FtB)6(x?U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'btwbwp77_';

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
