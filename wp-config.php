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

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "websit19_smkn1seragen" );


/** Database username */

define( 'DB_USER', "websit19_smkn1seragen" );


/** Database password */

define( 'DB_PASSWORD', "Ardata2024!" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'w6[IDr0bzE1OZM-Gi]D>:;tjM=~dZDq(OzEwnBxs`PM1_q_e^A*cf0U|9kO<TIr3' );

define( 'SECURE_AUTH_KEY',  '2&]1VA^za}tIl|+%j1Kv|I%c4]bi5g;]!tPIDPV@{9*d(C?^E-1A$OX)5ERFw[zy' );

define( 'LOGGED_IN_KEY',    '_AH?S)1BKbiF&l,$~J[)!uK=j{jPtpZ~{)neNDkgCoRrO!zkgbTle+5``aw!ix1C' );

define( 'NONCE_KEY',        'Y;PCWR!,]sTvg$1]`lb@):vv3EV%NwzaV9M03<^[/,GSON/(_g4bG6 #YP}0X%Ce' );

define( 'AUTH_SALT',        'rDn,~gKprd# =rBSYa2%WmbM3O4Xhg?+Ofi#d3fT~5;ZtM{|/gD^pleB1SG$^GJZ' );

define( 'SECURE_AUTH_SALT', 'Z+wqtuS{D/BemAJ.LT;/m:Xiei@2oqU>l`f(QISW<,sdCG6BN2Pp&*zj=N51X&-g' );

define( 'LOGGED_IN_SALT',   '][AK@nCMx7jx8<r#a<@tZ_|R<MV{Tdx5cVA#xyD2Cot)yI;qRGA%Q^|o!h7d4io$' );

define( 'NONCE_SALT',       'u~~V<;Jvd !y]ZuqQ=LK8ru*gHLkfgD{$Y J*nXRYoCThH][$yca~ 4XLt^o1R)1' );


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

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




define( 'DUP_SECURE_KEY', 'jrKZ+dp:avqvHC`{{abFEx-<tCq#?uqRB;+Ix<U-)[Ow>jHf:_Ypw/W?L~NMAQU2' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname(__FILE__) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

