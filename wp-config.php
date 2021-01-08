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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'school' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zODDms/%M4UXuN3*gNElQ?G5c_m-DKN<P`B<pY !+)-M3P>0_{`C]m*+ge%=H l4' );
define( 'SECURE_AUTH_KEY',  '%})$5bK~1>!XR8}X#n!oWm,@PH8g*r(]%(-sh]U+)W{)@,gw$x;1yRhw6a*NbquP' );
define( 'LOGGED_IN_KEY',    '6%|>eM=qr=??fNg9S,dQHJ7KNsT -k33*$eQ=j]P0:5yj;U)%zk3Zkp-oI&Of+q^' );
define( 'NONCE_KEY',        '~m!A`.2s+zw^]p!*Hq!wKJ~;[IeSPIIZ]nWK*2~Mq(;03M-YcFBd[S>>N|Lyv60$' );
define( 'AUTH_SALT',        '8=4%)T$7){uMS75f}>9ci4m>-lGyi%6Ecq1UtdJ2NU**UtZiRW_h=.,j$Dv|uTo/' );
define( 'SECURE_AUTH_SALT', 'v%|u4gzqh5kn-KX`l4l7@kj0mc=S]YAFD&gfj>oVgt&-yf0XvUlA {JrsYJc<o1g' );
define( 'LOGGED_IN_SALT',   '_YSFD}fOp~9`lt?|%/y3KI@CrevIA7+GS7-05X~RHbphc6t}Nr!Y0k7|ozrBH%q9' );
define( 'NONCE_SALT',       '6*cQd}>SZ77qrS*TU{}n?`7F:`o})x><bH>]@mow#(YaOD}_26k|=X0WP+AvtbJN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
