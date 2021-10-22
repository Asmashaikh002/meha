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
define( 'DB_NAME', 'meha' );

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
define( 'AUTH_KEY',         'gCA}<y]9EIoHid3,qf&Tl7nr?ea)G!DM=Pk6WR}gYJ1y8Z,i4%S1GB.j&n6oELUD' );
define( 'SECURE_AUTH_KEY',  '?.b{Q~I/8sxsd37f_9s6>vyr.tXm!vX))ZvEcq<<`ng8Lbt._j.#8$k075$E4]=9' );
define( 'LOGGED_IN_KEY',    ';$yqs[tyJ~U{.`i[=*5:$6q}t6cA,{s1CC}t#mh~>y~?w*w7U$w7^]&gl`ziS!#5' );
define( 'NONCE_KEY',        '^=oq],5/&#_h:OZuRW91Wu?A$6R*;$CGpY8h]Z677+;*dv2f@u%Uki;Fg`,@kBq)' );
define( 'AUTH_SALT',        '.>XHQI.A)b?Di,fYNP)fu?{alg Lnv-BC8w^^@SP;3vt>8<l/3cgG 0o#d^hfvgy' );
define( 'SECURE_AUTH_SALT', '4AK5-hXiSDZ-CV%[7(0>2r]iR:XGZ<wn:t<e8@;Qo}-rXp?<=t6vq))FqCQWQ}};' );
define( 'LOGGED_IN_SALT',   '}=/traU~?G>6iEQ9zmeN&YOyIrM4/MlCEo>QO=Czb_/S&uk9i;`iV4#,Y-81ni7s' );
define( 'NONCE_SALT',       '$C3=8^kG]!ZfiWj&8s4qBlE+[ogI}%8dtQ~-~6e]p| *Ql=kE3H|y:@IR6@<ce?,' );

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
