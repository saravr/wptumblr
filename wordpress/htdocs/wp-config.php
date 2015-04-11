<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '3e8cdf5c75');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'aa4db25e9d809bf0fb398f48c6ea6269f7cd19171722d781cbe0b64efd763773');
define('SECURE_AUTH_KEY', '54e0c8f945ace81d3323715a5bd96686f252ba52655000233f00fa0aaccd80f4');
define('LOGGED_IN_KEY', '5b7ed52fde5f697972568c573e9c427fb79b54093030be6e87fad2f78ab1f7de');
define('NONCE_KEY', '166229b553bbcc60f1c2cf97e3700d247f45e52d26fca87826ef80db04be252d');
define('AUTH_SALT', 'c3c0538b3c181a29018ebf8bd32ba806bd336236c9660f1d3176e7dd0c513297');
define('SECURE_AUTH_SALT', '8068edd525fc41e477cf0f981f0ad372e0379c84298e92e48b70dc71afe9c61f');
define('LOGGED_IN_SALT', 'e9feea0238aabdb696c626a9fea8ce338597355e469cff67d93aa492dfa19d05');
define('NONCE_SALT', '34f1e4fa472bbc8a051660f512d9e458aeb7ad7cb269f4978143b3e93d595797');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


define('FS_METHOD', 'ftpext');
define('FTP_BASE', '/opt/bitnami/apps/wordpress/htdocs/');
define('FTP_USER', 'bitnamiftp');
define('FTP_PASS', 'cEpFrmpty061hxszdB0r7xmQioVxlLa2pjNX7bgxev5dLFoTX5');
define('FTP_HOST', '127.0.0.1');
define('FTP_SSL', false);

