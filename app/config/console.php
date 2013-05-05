<?php

return array(
	'id' => 'frenzelgmbhconsole',
	'basePath' => dirname(__DIR__),
	'controllerPath' => '@yii/console/controllers',
	'components' => array(
		'db' => array(
			'class' => 'yii\db\Connection',
			'dsn' => 'sqlite:'.__DIR__.'/../data/frenzelgmbh.db',
		),
	),
	'params' => array(
		'adminEmail' => 'philipp@frenzel.net',
	),
);