<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require __DIR__ . '/vendor/autoload.php';

use Slim\Slim;
use \Media32\Slim\View\Plates;

$view = new Plates();

//access Slim's URL functions inside templates by hooking up the view extension:
$view->parserExtensions = array(
    new \Media32\Slim\View\PlatesExtension()
);
//set the template path
$view->templatesPath = 'views';

$app = new Slim(array(
	'view' => $view
));

$app->get("/", function() use ($app){
	$app->render('index', ['name' => 'Danny']);
})->name('home');

$app->post("/", function(){echo "Submitted something";});

$app->run();

?>