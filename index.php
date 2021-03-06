<?php

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Url as UrlProvider;


try {

	$loader = new Loader();
	$loader->registerDirs(array(
		'app/controllers/',
		'app/models/'
	))->register();

	$di = new FactoryDefault();

	$di->set('view', function(){
		$view = new View();
		$view->setViewsDir('/app/views/');
		return $view;
	});

	$di->set('url', function(){
		$url = new UrlProvider();
		$url->setBaseUri('/');
		return $uri;
	});

	$application = new Application($di);

	echo $application->handle()->getContent();

} catch (\Exception $e) {
	echo "PhalconException: ", $e->getMessage();
}
