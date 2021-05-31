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
define( 'DB_NAME', 'wp-base' );

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
define( 'AUTH_KEY',         '>w@io=}&p~v.t#<NhY}SUm^:]0x1+I;8(AoNvxMVr6*hs1D=8W$hLccR!1gYlJps' );
define( 'SECURE_AUTH_KEY',  'qvlc$3u|AWf7UUd.#Q*s&|A{Y9Xnx4E6<F`LW~)u0Z,L(=O}69Z.V>]&9}5N0^,X' );
define( 'LOGGED_IN_KEY',    '>9cDWS^b.R5>,U/J7F -Y;6.]W@ZB<Tc3&6XS)0%l>lup5B/j+{(qVJpZC>LLGqA' );
define( 'NONCE_KEY',        'DLSF}2#{U^5,r[@],[IGQP3nr]q&K46R!v PDO{V}3o`}>lQq Me%k b_ BVOrRq' );
define( 'AUTH_SALT',        '%L%,aE4+}xcyRv[3xL,oczyF$vlQNVj42!=/+RtxR`9--lCN0LB{.#t7e`{u@$ p' );
define( 'SECURE_AUTH_SALT', 'Kcs!mWZq-GSJ!>7{/0#i/@&5am|~uS.+tY,VE1W.TitN&eE!yi>K#ILpO)>}#C]j' );
define( 'LOGGED_IN_SALT',   'FzZ<|g~gM5ij uup2C)3F>(*Bf9$T*CI7xJ+F{?qNJ/Uh4u8K]c?+9H1yXwEi#pY' );
define( 'NONCE_SALT',       'ool1{N^[Zh~AKE+c!%`W%>SBsAyz_Ygz{zl/V+OikF7~*Rb=.@V cG5JZ)Uo>Pr_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w3105p_';

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
