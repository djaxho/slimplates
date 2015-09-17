<?php

use Slim\Slim;
use \Media32\Slim\View\Plates;

$view = new Plates();

//access Slim's URL functions inside templates by hooking up the view extension:
$view->parserExtensions = array(
    new \Media32\Slim\View\PlatesExtension()
);

//set the template path
$view->templatesPath = 'views';

// Initialize Slim
$app = new Slim(array(
	'view' => $view
));