<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/reports', 'ReportController@reportAllAttendances');
$router->get('/reports/user/{userId}', 'ReportController@reportUserAttendances');
$router->get('/reports/{id}', 'ReportController@reportAttendances');