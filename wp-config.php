<?php
define('WP_CACHE', true);

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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '+k~PtXgTF{$5E`ToI2Ab MGRyAPmX/e+^e+aOB&M?FgU!y-YgCmbtnxy8&J:)GPU' );
define( 'SECURE_AUTH_KEY',  '=a9/`]FVPboTk,u[cDOnBppH:)L+{`cKx[)*%}fR[T#m+Odjd+vJLJ?Y`3kBYmuM' );
define( 'LOGGED_IN_KEY',    'n j`h/%jbk>Qcg!&%J2`M_sAp]=-]$m+5fp8ds+x*%.;h@dclH:Raih6a*B4DN@{' );
define( 'NONCE_KEY',        '#,RB&2${jmKrV@{>PMJ3&$`0kWYa!G!M|8iMW:=%xy]M&NT%6h]d~P}@FJdhgS/p' );
define( 'AUTH_SALT',        '-9BS`o3r8Zn@J:V[_R<4b)2`AOj<a{]%6y+):JDob*!>{u@W/C2:Fdk*fBRV^s&#' );
define( 'SECURE_AUTH_SALT', '~YV?)-SjywIoH;F.]{C,xe8tfSUK7jmQC+)O(r8ZAtDQx03Fh^5*|c5`F+(Ft}[G' );
define( 'LOGGED_IN_SALT',   'yYxK?{Ym!4i<hPsbkU!F^Jw?bh a(2l;=En.PygKN]I.RHC$WcJ|ekB#SqpS/PE9' );
define( 'NONCE_SALT',       'p=}#nq>QXB:j<72cLd31H|Z@vsIg( mxHbd$_gwyGNN?,h|5DT93z1 [g^td._o-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
