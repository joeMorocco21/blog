<?php

use Router\Router;
use App\Exception\NotFoundException;
//pas besoin de faire require chaque fois
require '../vendor/autoload.php';
//definir les chemins pour nous vues
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
//definir les chemin pour les fichier js ou css etc... on utulisan le globale var server
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
$router = new Router($_GET['url']);
define('dbname', 'blog');
define('host', 'localhost');
define('username', 'root');
define('password', '');
$router->get('/posts', 'App\Controllers\BlogController@index');
$router->get('/', 'App\Controllers\BlogController@welcome');
//recuperer l'id et afficher le poste via le controoleur BlogController
$router->get('/posts/:id', 'App\Controllers\BlogController@show');
$router->get('/tags/:id', 'App\Controllers\TagsController@tag');
$router->get('/cats/:id', 'App\Controllers\CategoriesController@cat');
$router->get('/posts/:page', 'App\Controllers\Admin\PostController@index');
//route pour les posts
$router->get('/admin/posts', 'App\Controllers\Admin\PostController@index');
$router->post('/admin/posts/delete/:id', 'App\Controllers\Admin\PostController@delete');
$router->get('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@edit');
$router->post('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@update');
$router->get('/admin/posts/create', 'App\Controllers\Admin\PostController@create');
$router->post('/admin/posts/create', 'App\Controllers\Admin\PostController@createpost');
//commentaire
$router->post('/comment', 'App\Controllers\CommentController@comment');
//edit images
$router->get('/admin/posts/images', 'App\Controllers\Admin\ImagesController@index');
$router->get('/admin/posts/editImage/:id', 'App\Controllers\Admin\ImagesController@edit');
$router->post('/admin/posts/editImage/:id', 'App\Controllers\Admin\ImagesController@update');
//edit Categories
$router->post('/admin/cat/delete/:id', 'App\Controllers\Admin\CategoriesController@delete');
$router->get('/admin/cat/create', 'App\Controllers\Admin\CategoriesController@create');
$router->post('/admin/cat/create', 'App\Controllers\Admin\CategoriesController@createCat');
$router->get('/admin/cat', 'App\Controllers\Admin\CategoriesController@index');
$router->get('/admin/cat/edit/:id', 'App\Controllers\Admin\CategoriesController@edit');
$router->post('/admin/cat/edit/:id', 'App\Controllers\Admin\CategoriesController@update');
//login
$router->get('/login', 'App\Controllers\UserController@login');
$router->post('/login', 'App\Controllers\UserController@loginPost');
$router->get('/register', 'App\Controllers\RegisterController@register');
$router->post('/register/create', 'App\Controllers\RegisterController@RegisterUser');
$router->get('/login/logout', 'App\Controllers\UserController@logOut');

try{
$router->run();
}
catch(NotFoundException $e)
{
    return $e->Exception404();
}