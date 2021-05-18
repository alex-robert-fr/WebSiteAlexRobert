<?php
require_once 'vendor/autoload.php';

use App\Core\Router\Router;

$router = new Router($_GET['url']);

$router->get('/', 'Home#show', 'home');
$router->post('/', 'Home#sendMailContact');
$router->get('/cgv', 'Cgv#show');
$router->get('/Automatix', 'Automatix#show', 'automatix');
$router->get('/admin', 'AdminConnexion#show');
$router->post('/admin', 'AdminConnexion#login');
$router->get('/admin/dashboard', 'Dashboard#show', 'dashboard');
$router->get('/admin/projects', 'Projects#show', 'projects');
$router->get('/admin/projects/edit-:id', 'EditProject#show', 'editProject');
$router->post('/admin/projects/edit-:id', 'EditProject#edit');
$router->get('/admin/projects/add', 'AddProject#show', 'addProject');



// $router->get('/posts/:id-:slug', function($id, $slug) use ($router){
//     echo $router->url('posts.show', ['id' => 1, 'slug' => 'salut-a-tous']);
// }, 'posts.show')->with('id', '[0-9]+')->with('slug', '[a-z\-0-9]+');

// $router->get('/posts/:id', 'Posts#show');

// $router->post('/posts/:id', function($id){ echo 'Poster pour l\'article ' .$id. '<pre>' .var_dump($_POST). '</pre>'; });

$router->run();
// try{
//     $router->run();
// } catch(Exception $e){
//     echo '<p>Erreur 404</p>';
//     echo '<p>La page que vous souhaitez joindre n\'existe pas ou plus</p>';
// }