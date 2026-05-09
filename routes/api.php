<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;

Route::name('api.')->apiResource('tasks', TaskController::class);