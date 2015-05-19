<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
  '*' => array(
    'tablePrefix' => 'craft',
  ),
  'local' => array(
		'server'   => 'localhost',
		'user'     => 'homestead',
		'password' => 'secret',
		'database' => 'sapayol_local',
	),
  'production' => array(
		'server'   => 'localhost',
		'user'     => $_SERVER['DB_USERNAME'],
		'password' => $_SERVER['DB_PASSWORD'],
		'database' => $_SERVER['DB_NAME'],
  ),
);