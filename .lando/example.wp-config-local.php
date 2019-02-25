<?php
/**
 * Configuration overrides for local development.
 *
 * Rename this file to `wp-config-local.php` move to the project root.
 *
 * This file contains the following configurations:
 *
 * - MySQL settings
 * - Redis settings
 * - Secret keys
 * - Debugging mode
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

/**
 * Lando services.
 */
if (getenv('LANDO_INFO')) {
  $lando_info = json_decode(getenv('LANDO_INFO'), TRUE);

  // MySQL settings for Lando database service.
  define('DB_NAME', $lando_info['database']['creds']['database']);
  define('DB_USER', $lando_info['database']['creds']['user']);
  define('DB_PASSWORD', $lando_info['database']['creds']['password']);
  define('DB_HOST', $lando_info['database']['internal_connection']['host']);
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');

  // Redis settings for Lando service.
  if (isset($lando_info['cache'])) {
    define('WP_REDIS_HOST', $lando_info['cache']['internal_connection']['host']);
    define('WP_REDIS_PORT', $lando_info['cache']['internal_connection']['port']);
  }
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

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
define('WP_DEBUG', getenv('WP_DEBUG'));
