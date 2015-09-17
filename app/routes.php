<?php

/**
 * Routes
 */

$app->get("/", function() use ($app) {
	$app->render('index', ['name' => 'Danny']);
})->name('home');

$app->post("/", function(){echo "Submitted something";});