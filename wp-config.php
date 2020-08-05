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
define( 'DB_NAME', 'website-port-neo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'T;m$8nrG~d>RIQJ7eaDrBXORBH.1 4OuZ,GowofCq>pd*YQ[a;[QT&chx^qmru@S' );
define( 'SECURE_AUTH_KEY',  'Ygj,s|,mg}Xu;3NqyEv~{[i#l>L90sPtX`Lxqn7x}(IwW$m>#PN1?o_LMx&UXHrz' );
define( 'LOGGED_IN_KEY',    'VN gBz <8v[e1i`Aor%%IK8]iFBsCDGA;5wc}z8_9CF+8 wiH%J9}+FN[CnU8Mw;' );
define( 'NONCE_KEY',        ')eUTzu5(-&C$Go!uocSsN9%tMIgyMcPD`:wvPf,[x^nPq2attPkg$-(}QVAdc)#D' );
define( 'AUTH_SALT',        'Ya}pPk>n3is](G. Rq5[EiAv+M{x!n|uM2G$#H8D%pit@Dz)`.3fEh+.aKJ$oD=s' );
define( 'SECURE_AUTH_SALT', '!$ExvLQs+4!b4&x@M>t#jE1pEjS7LuctR4hVYV9#8gOQThWirz^+X7yi?IUWcD9A' );
define( 'LOGGED_IN_SALT',   '+]Om+;vczkO@F3FMpps!q4QpT@Pj@wW@p]l!$aDbo)Mf!?oj!17R@wY|<}L >NDw' );
define( 'NONCE_SALT',       'vp)n6uJQKU#J{3S^)1::(dcG(=AF8*$4s+<C+0Co8t{moD)hnx|PU7R}@!rg%C[k' );

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
