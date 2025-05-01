<?php

/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

if (!defined('THEME_ROOT_PATH')) {
  define('THEME_ROOT_PATH', __DIR__);
}

if (!defined('THEME_DIRECTORY_URI')) {
  define('THEME_DIRECTORY_URI', get_stylesheet_directory_uri());
}

if (!defined('THEME_NAME')) {
  define('THEME_NAME', 'portfolio');
}

if (!defined('THEME_VERSION')) {
  $theme = wp_get_theme();
  define('THEME_VERSION', $theme->Version);
}

require_once THEME_ROOT_PATH . '/vendor/autoload.php';
require_once THEME_ROOT_PATH . '/src/classes/index.php';
require_once THEME_ROOT_PATH . '/src/StarterSite.php';

Timber\Timber::init();

Timber::$dirname = [
  'templates',
  'src/views',
  'src/views/pages'
];

new StarterSite();
