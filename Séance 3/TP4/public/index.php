<?php

require(__DIR__ . '/../autoloader.php');

use framework\Method;
use framework\Response;
use framework\ResponseType;

$routes = require(__DIR__ . '/../routes.php');

$endpoint = $_SERVER['REQUEST_URI'];
$method = Method::from($_SERVER['REQUEST_METHOD']);
$data = array_merge($_GET, $_POST);

$response = null;

foreach ($routes as $route) {
    if ($route->endpoint == $endpoint && $route->method == $method) {
        $controller = new $route->controller;
        $response = $controller->{$route->function}($data);
    }
}

if (empty($response)) {
    $response = new Response(
        ResponseType::HTML,
        "<p>Erreur 404</p>",
        404
    );
}

// Set the HTTP response code
http_response_code($response->code);

switch ($response->type) {
    case ResponseType::HTML:
        // Set the content-type header
        echo $response->content;
        break;

    case ResponseType::JSON:
        // Set the content-type header
        header('Content-type: application/json');
        echo json_encode($response->content);
        break;
}