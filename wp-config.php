<?php
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
define( 'DB_NAME', 'khfe_glowup' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']4^a^H:ft7%#LN(W58m#qk?hqB<Kv9_4w;y?L}8/=Na3-WPt@0Ku9T_g1E1(M0)<' );
define( 'SECURE_AUTH_KEY',  'Q *igstP1=)|u`6k_o.33V:U0*|w_;7Ix1=uY^PZ8rHMkI>q-D?J~Rcs! Om1*|%' );
define( 'LOGGED_IN_KEY',    'l=B.bA%.;E`;r*hzF8P>F].l@f}ZpGgms*:5(Hw=nb>F]GOc*L4;,&{rVx>K2t7N' );
define( 'NONCE_KEY',        'CpsZZ*tgT@#z|vwAD iN<+OBgyaoM,>}1Nv{fk1]lur!8![J&f0v,kjaG7tlxR|z' );
define( 'AUTH_SALT',        'BQ BgAQ%lKOj@7!,}Sy.mxY:dr:6Mmi.@A,kIiBhXEJC$P|%)mz)~4LR*K;Zl1^r' );
define( 'SECURE_AUTH_SALT', 'F=!:Q/|nAj[aa+XS;K sdg +$x TIXgp( e<U^{_EZJ+L* 3M3,DeeLR30]RDk_J' );
define( 'LOGGED_IN_SALT',   't*mj}yS7Xsl5kR%:e5tt2$^~ZJf7}/fmjNS,~W0;A!,4-#c8$ -*m$>A;Q7Eae5d' );
define( 'NONCE_SALT',       'yl*}/f@e|vt.sqynttP|{K HJ3VS3TueC>@c,TMbLyVl!vp|h]sg:[@%k= WTr-S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'khfe_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
define('ALLOW_UNFILTERED_UPLOADS', true);
// define('DISALLOW_FILE_EDIT', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
