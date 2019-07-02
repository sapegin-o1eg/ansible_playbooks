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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ahc2koosee8ae' );

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
define( 'AUTH_KEY',         '-^a0jkOr%c{gTGDrnOd41Qh6$eY=Md|&w[3Yip$%G>&jGoA#wu$@JIzCXsE*wC?^' );
define( 'SECURE_AUTH_KEY',  'dOO9_w&zpU/rV4+fr}/I@N^G#}2u&^;^YyLC9M)LUMrD4Kc>FB6dzcz[f_..AQc`' );
define( 'LOGGED_IN_KEY',    '~{(F_1cfUj.2pR++G$gAv-D#8,+5HM*uDj4ir%)8qv=JT|Lz)}[}DN,2Z5F,YLJM' );
define( 'NONCE_KEY',        'Jh?4~UWY:Q$~P)OMGM@)~Vf47o.Hq.ior}Bd^d3TSF$qSczD+EcamOg`C(r?+-9o' );
define( 'AUTH_SALT',        '+F[m9GR[mk3.C]e2$Gl[yBK()a`K &{>:?KCCH1@?xFqTM^9z#XMyw~>G y8^XR`' );
define( 'SECURE_AUTH_SALT', 'G=_|4A*n2S_ziVbs*NHQ]J!v,;::oBn<BQL1,>[N^Oc%j@5tMZ]rTsF$lw<M+ms=' );
define( 'LOGGED_IN_SALT',   'h}*KRczTg!}HkX[O(Hk]7<!=Rlp`fGEJ^ CUtDU&.}kFX)Jz7zQzWmw.3mM7KUW|' );
define( 'NONCE_SALT',       'x=|QE&bPv%vxSH8I^)=Wr?!-V{w!}fv|83n|bOLQEGFd&b[$:aH,bJm?}4~Y,}yn' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
