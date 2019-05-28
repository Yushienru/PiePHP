<?php
namespace Core;
$url_parts = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);
$last_part = $url_parts[count($url_parts)-1];
$id = (preg_match('/[0-9]+/', $last_part)) ? $last_part : null;


Router::connect('/PiePHP/', ['controller' => 'user', 'action' => 'register']);
Router::connect('/PiePHP/register', ['controller' => 'user', 'action' => 'add']);
Router::connect('/PiePHP/user/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/PiePHP/user', ['controller' => 'user', 'action' => 'index']);
Router::connect('/PiePHP/user/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('/PiePHP/user/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/PiePHP/user/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('/PiePHP/user/show', ['controller' => 'user', 'action' => 'show']);
Router::connect('/PiePHP/user/logout', ['controller' => 'user', 'action' => 'logout']);
Router::connect('/PiePHP/film/show', ['controller' => 'film', 'action' => 'show']);
Router::connect("/PiePHP/film/show/$id", ['controller' => 'film', 'action' => 'show']);
Router::connect("/PiePHP/film/add", ['controller' => 'film', 'action' => 'add']);
Router::connect("/PiePHP/genre/show", ['controller' => 'genre', 'action' => 'show']);
Router::connect("/PiePHP/toto/tata", ['controller' => 'app', 'action' => 'bonjour']);


