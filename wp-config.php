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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'ynh-CqiSfd{?!!Yx|*YyuG4s`T}0?^q4`tmA4I0!mY({o^}{N|]fa!?_pJw-~F~+' );
define( 'SECURE_AUTH_KEY',  '%yWi3Hdz~zav[$2BV*7K!/$aQkDWls2*}`ODWc9q=c>&&^~|lN,)X-{lWl.iPh11' );
define( 'LOGGED_IN_KEY',    'DGuE$v+:CSqf@pvC`I8~Fb0)]Q7%q%Ax=C=wLp;2dyJA7GI@%~dIf[e!wb0oGq3_' );
define( 'NONCE_KEY',        '3KEIt&7*a@L?WkN{D<{Y t@5 LS,n$i889ZO]>l(,h,K`ICBE<bM@S*<6PC>maSI' );
define( 'AUTH_SALT',        '$A@m982P2/bO+{LpsCv07VE+!DNA/,glqKsY1h@JPtUm{NM+0ijKP(SPPwsiPdRR' );
define( 'SECURE_AUTH_SALT', 'wk3(ux^Tw0.Z4-@AW+0Y!w<EQCuv/dr?BD)ME:fqW3z?G{8x/Rc;B4Ui-Q#Cc|S]' );
define( 'LOGGED_IN_SALT',   'j}VF&.Y2tkC=^8he()US.VCG`?0R~O,u7qgR0=LD)^d*d^{f+L4TIk`)vo7ZV_/T' );
define( 'NONCE_SALT',       'f0fYAm?m=-v@sz8b+Ti2[#OcH]ijSP(M8rblM_4/=-uFo-i08-W9I)n!_.3&5=j=' );

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
