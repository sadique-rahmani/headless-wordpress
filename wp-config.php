<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'wRRMFwdyYQz39P`FGTqDmW/H,{_=M]NTg&3geJweZ}WPXe|4qJre:lW=vn^:{S&`' );
define( 'SECURE_AUTH_KEY',   'uLLQx>U(q(`/hhH:+LuaoH,=w>7;2wpB|/&mC`od^%U^uU)-cL7jAm*T~@S3{uyw' );
define( 'LOGGED_IN_KEY',     'd|W4fr+8~149kl)aA<#puNFl4SF}]mfm#Pb 7qtzSm 1M6vSZu$>X!S^E>w+Mr3(' );
define( 'NONCE_KEY',         '&,x1+sSudKvJi}4$_@OEMq$&~o&f_SywC#5I@apnc{8IH&$jq.`>bbDp&ePoVD.$' );
define( 'AUTH_SALT',         'd+54p@5`5kMOU9/W,rrtjdvP4MdWqPy3auRM6Up4sBX$|gy.K8_sMf)D1kL^,K[e' );
define( 'SECURE_AUTH_SALT',  'i^-$Su7L55XYX$uFtx&S;?.t4Q`/2bAB7P.f<)y@C!#L!O3>X9ppK9nTXU68:WG7' );
define( 'LOGGED_IN_SALT',    'vG23&=QrUV/A(Y}E>{8Yai)I@e!_2u$]sdA.Sd}V:_Q9@b]kTlA~1qS=4?<,)al-' );
define( 'NONCE_SALT',        '+PAOQJ^PQsVbcmnH~04c!34eG*#Tw,5rxP}))EoKp{K-3AZ3q^?)g@$#U|sdjQUg' );
define( 'WP_CACHE_KEY_SALT', 'l5Tk?>7qy:QU<a.3<ey5Q9fH@s^;<I5PbpG7TaXZ/l 39V/`wz^G*+qB~eQl+/!2' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define('JWT_AUTH_SECRET_KEY', '.mtS2CP[eVH-h;[_)^>8aA uF~eeY1^Bk*Y5Y~9bADoT');


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
