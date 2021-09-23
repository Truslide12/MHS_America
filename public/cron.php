<?php

define('LARAVEL_START', microtime(true));

$intervals = [
	'minutely',
	'semi-hourly',
	'hourly',
	'daily',
	'weekly',
	'monthly'
];

if(!in_array($_GET['interval'], $intervals)) {
	die();
}

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$symfonyRequest = Symfony\Component\HttpFoundation\Request::create('/twilight/cron', 'GET', [ 'key' => '83411758450251a62ae38578ec510c19', 'interval' => $_GET['interval'] ]);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::createFromBase($symfonyRequest);
);

$response->send();

$kernel->terminate($request, $response);
