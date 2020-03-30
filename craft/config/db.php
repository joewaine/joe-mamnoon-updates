<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	'*' => array(
	),

	'mamnoon.craft.dev' => array(
		'server'      => 'localhost',
		'user'        => 'root',
		'password'    => 'root',
		'database'    => 'mamnoon-craft',
		'tablePrefix' => 'craft'
	),

	'm.wrkbkt.com' => array(
		'server'      => 'localhost',
		'user'        => 'm.m',
		'password'    => 'wRib8yOap8iP4cop9Pe',
		'database'    => 'm',
		'tablePrefix' => 'craft'
	),

	'mamnoonrestaurant.com' => array(
		'server'      => 'localhost',
		'user'        => 'craft',
		'password'    => 'BBmXby6HohRnmaFbCC%G>xhZYJ2f',
		'database'    => 'craft',
		'tablePrefix' => 'craft'
	),

	'mamnoon.webfactional.com' => array(
		'server'      => 'localhost',
		'user'        => 'craft',
		'password'    => 'BBmXby6HohRnmaFbCC%G>xhZYJ2f',
		'database'    => 'craft',
		'tablePrefix' => 'craft'
	),

	 'localhost' => array(

    'server' => 'localhost',
	  'database' => 'craft',
	  'user' => 'root',
	  'password' => 'root',
	  'tablePrefix' => 'craft',
	  'initSQLs' => array("SET SESSION sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';")

      ),

);


