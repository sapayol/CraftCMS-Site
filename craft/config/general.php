<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  '*' => array(
    'appId'                => 'sapayol.com',
    'cacheMethod'          => 'redis',
    'omitScriptNameInUrls' => true,
  ),
  'local' => array(
  	'devMode' => true,
  	'siteUrl' => 'http://local.sapayol.com',
	),
  'production' => array(
  	'siteUrl' => 'http://sapayol.com',
  ),
);
