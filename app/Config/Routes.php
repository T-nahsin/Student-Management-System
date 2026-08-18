<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/login', 'UserController::loginForm');
$routes->post('/login', 'UserController::login');

$routes->get('/signup', 'UserController::signupForm');
$routes->post('/signup', 'UserController::signup');
$routes->get('/dashboard', 'UserController::dashboard');

$routes->get('/logout', 'UserController::logout'); 

$routes->get('/create-student', 'StudentController::createForm');
$routes->post('/create-student', 'StudentController::create');
$routes->get('/students', 'StudentController::getStudents');