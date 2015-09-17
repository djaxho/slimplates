<?php

require_once(__DIR__ . '/vendor/autoload.php');

// Load all of the initializers
require_once(__DIR__ . '/app/bootstrap.php');

// Load the routes
require_once(__DIR__ . '/app/routes.php');

// Run the Application
$app->run();