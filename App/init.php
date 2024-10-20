<?php
namespace App;

InitEnv::load();


Router::get('/test', 'TestController', 'show');