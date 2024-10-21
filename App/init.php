<?php

namespace App;

use App\Exceptions\ExceptionHandler;
use App\Exceptions\NotFoundException;
use App\Exceptions\ServerErrorException;
use App\Exceptions\UnauthorizedException;

InitEnv::load();


//try {
Router::get('/', 'TestController', 'show');
//} catch (NotFoundException $e) {
//    ExceptionHandler::handle($e);
//} catch (UnauthorizedException $e) {
//    ExceptionHandler::handle($e);
//} catch (ServerErrorException $e) {
//    ExceptionHandler::handle($e);
//} catch (\Exception $e) {
//    // Generic catch for any other exceptions
//    ExceptionHandler::handle($e);
//}
