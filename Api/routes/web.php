<?php

use App\Core\Router;

$router = new Router();

// ROTAS DE TASKS

// Criar tarefa
$router->post('/tasks', 'TaskController@store');

// (já vamos deixar preparado pro próximo passo)
$router->get('/tasks', 'TaskController@index');

return $router;