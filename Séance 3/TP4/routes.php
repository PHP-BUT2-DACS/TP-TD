<?php

use controllers\IndexController;
use framework\Method;
use framework\Route;

return [
    new Route(Method::GET, '/api', IndexController::class, 'index')
];