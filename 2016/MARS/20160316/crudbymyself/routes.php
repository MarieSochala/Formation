<?php

$app->get('/', 'Controllers\\Controller::index');
$app->get('/hello/{name}', 'Controllers\\Controller::hello');
$app->get('/hello', 'Controllers\\Controller::test');