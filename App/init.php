<?php

namespace App;


InitEnv::load();


Router::get('/', 'TestController', 'show');
Router::get('/test', 'TestController', 'test');
Router::post('/testpost', 'TestController', 'testpost');

// students
Router::get('/students', 'StudentController', 'index');
Router::post('/students/add', 'StudentController', 'store');
Router::put('/students/update/{id}', 'StudentController', 'update');
Router::delete('/students/delete/{id}', 'StudentController', 'delete');
