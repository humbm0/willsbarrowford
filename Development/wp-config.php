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
define('DB_NAME', 'wills_website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         's|x+gM}9~94 3ZX{CkVaG5midDRD43Zm3Ga|3Q:PcFLq^tMw3-Ez;2J9I_=&|@rC');
 define('SECURE_AUTH_KEY',  'y`+X Hn0@7>I3RJY-n`#iMS7Z% DbTx~,LpG;tWI.I([A]:H}w<THNTW# xl`uPV');
 define('LOGGED_IN_KEY',    'Gw#8P@IsUtX/>&o|CJ5p5@$` $zs1@i1-T<0-0L5]C|WrlC,Cw[Vm$yOa&E0Jh&l');
 define('NONCE_KEY',        'ZqsXYsVt|QA/=WOOqG*R5kKPFiRrW2{{F?]7`ewU-oM|e0F`,[q|0&ASEm>=(wM$');
 define('AUTH_SALT',        '-<zR241*|mtq4].I8qjF;Xu!i@p!:b>yEpd|7i_8PKh%@,`.k%tG6{g-X,~X0&kq');
 define('SECURE_AUTH_SALT', 'k/SrLs?K{djnI[@xI]fT1G#F[H2=vq3#j1o5;VVLd~%#2J5t*7tX(O|<F(8#_bo=');
 define('LOGGED_IN_SALT',   '.c1|6?|`f|YuK8_t.Z+{)^jw-vD{do@!s2KoK%u9EVt~uz5W-mOfw}qy-VH_J{@9');
 define('NONCE_SALT',       '[w;=C+c;gA$levj@G3_&e.WLC?|>GV_zAPw+)9Z)-X6axL^3+`t1976WuCC6MLW@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'will_667';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
