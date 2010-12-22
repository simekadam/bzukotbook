<?php

require_once LIBS_DIR . '/Nette/loader.php';
use Nette\Debug;
use Nette\Environment;
use Nette\Application\Route;
use Nette\Loaders\RobotLoader;
Debug::enable();

Environment::loadConfig();

$session = Environment::getSession();
$session->setSavePath(APP_DIR . '/sessions/');

$application = Environment::getApplication();
//$application->errorPresenter = 'Error';
//$application->catchExceptions = TRUE;
$router = $application->getRouter();
$router[] = new Route('index.php', array(
	'presenter' => 'newsFeed',
	'action' => 'default',
), Route::ONE_WAY);

$router[] = new Route('<presenter>/<action>/<id>', array(
	'presenter' => 'NewsFeed',
	'action' => 'default',
	'id' => NULL,
));

$application->run();
