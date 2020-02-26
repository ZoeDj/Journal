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
define( 'DB_NAME', 'journal' );

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
define( 'AUTH_KEY',         'Vc=<||Fh0,~O0</=3PvZ8e;+5lky.`Gx?vPqCsi>%p7&_2T#bT6;`et~S|!,(-v:' );
define( 'SECURE_AUTH_KEY',  '<m;#079lo(53b^ (UQhEpFZ#>rw``LpjXp jAm2bt`{i9oofn7]ldAX<.teAG-(P' );
define( 'LOGGED_IN_KEY',    'pg!{}Kp1C^o^GPx$yA?$vwq[deyIc[}H8>0*&My@&?gN@}fhrq-6#GT|=C<y^0cg' );
define( 'NONCE_KEY',        'un$>Y%(bF`icgBj;LV)I.OgY?2<<Hfd&;]T&loXZGCsnw-Q(P6=~x*knd-j`_bua' );
define( 'AUTH_SALT',        'etQCa| mT8%Ci$dkT)2$k;>XSi`;lN]1C#.t*vqH}Sc@r5.{1h8v<9%kCWjI Jb<' );
define( 'SECURE_AUTH_SALT', 'kB9CU<MJPDW|x.Q.8#v4eDVrT$kF@*c lsy9QdMGdfrPegJO5cE[${{MW;ms;0+U' );
define( 'LOGGED_IN_SALT',   '`r<}qu0^_/@G^kiZ4eGOA_4#&8Oz,`WFth9OnMx@[/ij0t1`s|t+;mNpTU;]`TOq' );
define( 'NONCE_SALT',       '$:P~ +SgsMqO%]`ZeNizleIy`7iL7fewZs#b}*?MJ&sR{^OnPXHz_(!K|nF/i9];' );

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
