<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site eedmontgomery, environment dev.
$aliases['dev'] = array(
  'root' => '/var/www/html/eedmontgomery.dev/docroot',
  'ac-site' => 'eedmontgomery',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'eedmontgomerydev.prod.acquia-sites.com',
  'remote-host' => 'eedmontgomerydev.ssh.prod.acquia-sites.com',
  'remote-user' => 'eedmontgomery.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['dev.livedev'] = array(
  'parent' => '@eedmontgomery.dev',
  'root' => '/mnt/gfs/eedmontgomery.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site eedmontgomery, environment prod.
$aliases['prod'] = array(
  'root' => '/var/www/html/eedmontgomery.prod/docroot',
  'ac-site' => 'eedmontgomery',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'eedmontgomery.prod.acquia-sites.com',
  'remote-host' => 'eedmontgomery.ssh.prod.acquia-sites.com',
  'remote-user' => 'eedmontgomery.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['prod.livedev'] = array(
  'parent' => '@eedmontgomery.prod',
  'root' => '/mnt/gfs/eedmontgomery.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site eedmontgomery, environment test.
$aliases['test'] = array(
  'root' => '/var/www/html/eedmontgomery.test/docroot',
  'ac-site' => 'eedmontgomery',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'eedmontgomerystg.prod.acquia-sites.com',
  'remote-host' => 'eedmontgomerystg.ssh.prod.acquia-sites.com',
  'remote-user' => 'eedmontgomery.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['test.livedev'] = array(
  'parent' => '@eedmontgomery.test',
  'root' => '/mnt/gfs/eedmontgomery.test/livedev/docroot',
);
