<?php

use App\Core\Router;

$router = new Router();

// ROTAS DE TASKS

// Criar tarefa
$router->post('/tasks', 'TaskController@store');

$router->get('/tasks', 'TaskController@index');

return $router;