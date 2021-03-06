<?php

return array(
	'id' => 'frenzelgmbhconsole',
	'basePath' => dirname(__DIR__),
	'controllerPath' => '@app/controllers',
	'preload' => array('log'),
	'components' => array(
		/*'db' => array(
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=test',
            'username' => 'root', 
            'password' => '',
		),*/
		'db' => array(
			'class'       => 'yii\db\Connection',
			'dsn'         => 'sqlite:'.dirname(__DIR__).'/../app/data/frenzelgmbh.db',
			'tablePrefix' => 'tbl_',
		),
		'seeder'=>array(
			'class'    =>'app\components\DbFixtureManager',
			'basePath' => dirname(__DIR__).'/migrations/seed',
        ),
		'log' => array(
			'class' => 'yii\logging\Router',
			'targets' => array(
				'file' => array(
					'class'  => 'yii\logging\FileTarget',
					'levels' => array('error', 'warning'),
				),
			),
		),
	),
	'params' => array(
		'adminEmail' => 'philipp@frenzel.net',
	),
);