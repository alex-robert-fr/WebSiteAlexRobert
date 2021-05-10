<?php
require_once 'vendor/autoload.php';

use App\Router\Router;

$router = new Router($_GET['url']);

$router->get('/', 'Home#show');
$router->get('/cgv', 'Cgv#show');
$router->get('/Automatix', 'Automatix#show');

// $router->get('/posts/:id-:slug', function($id, $slug) use ($router){
//     echo $router->url('posts.show', ['id' => 1, 'slug' => 'salut-a-tous']);
// }, 'posts.show')->with('id', '[0-9]+')->with('slug', '[a-z\-0-9]+');

// $router->get('/posts/:id', 'Posts#show');

// $router->post('/posts/:id', function($id){ echo 'Poster pour l\'article ' .$id. '<pre>' .var_dump($_POST). '</pre>'; });

$router->run();