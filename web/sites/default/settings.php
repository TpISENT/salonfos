<?php

$config_directories = array();

#$settings['hash_salt'] = file_get_contents('../cred/salt.txt');

$settings['hash_salt'] = '0Ds8NAlWmdmFNbWBpYv88wa2DilLM7s3AxXKFj9cr8DcLjGRqhaQY2Am1qZbfqVBDtiJTdc65g';

$settings['update_free_access'] = FALSE;

$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = '../files-private';

# $settings['session_write_interval'] = 180;

# $settings['locale_custom_strings_en'][''] = array(
#   'forum'      => 'Discussion board',
#   '@count min' => '@count minutes',
# );

# $settings['maintenance_theme'] = 'bartik';
# $config['system.file']['path']['temporary'] = '/tmp';
# $config['system.site']['name'] = 'My Drupal site';
# $config['system.theme']['default'] = 'stark';
$config['user.settings']['anonymous'] = 'Visitor';

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

  $settings['trusted_host_patterns'] = array(
    '^ihub\.com\.sl$',
    '^.+\.ihub\.com\.sl$',
    '^lamtech\.sl$',
    '^.+\.lamtech\.sl$',
    '^salonfos\.com$',
    '^.+\.salonfos\.com$',
  );

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['entity_update_batch_size'] = 50;

$config_directories['sync'] = '../config/sync';

// $databases['default']['default'] = [
//   'database' => getenv('MYSQL_DATABASE'),
//   'driver' => 'mysql',
//   'host' => getenv('MYSQL_HOSTNAME'),
//   'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
//   'password' => getenv('MYSQL_PASSWORD'),
//   'port' => getenv('MYSQL_PORT'),
//   'prefix' => '',
//   'username' => getenv('MYSQL_USER'),
// ];

$databases['default']['default'] = array (
  'database' => 'admin_salonefosdb',
  'username' => 'admin_salonefosu',
  'password' => 'cFze95&4',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

//if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
//  include $app_root . '/' . $site_path . '/settings.local.php';
//}
