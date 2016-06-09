<?php
require __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

function view($path, $data=[]){
$templates = new League\Plates\Engine(__DIR__ . '/Views/');
return $templates->render($path, $data);
}

$app['debug']=true;

require 'routes.php';

$app->run();
