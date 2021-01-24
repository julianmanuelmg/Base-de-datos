<?php

/**
 * @file
 * Index file.
 */

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\App;
use Slim\Views\PhpRenderer;

require '../../vendor/autoload.php';

$app = new App();
// Set Slim container.
$container = $app->getContainer();
$container['view'] = new PhpRenderer('../templates/');

$app->get('/registro', function (Request $request, Response $response) {

  $response = $this->view->render($response, 'registro.phtml');


  return $response;
});
$app->get('/pais', function (Request $request, Response $response) {

  $response = $this->view->render($response, 'pais.phtml');


  return $response;
});
$app->get('/accion', function (Request $request, Response $response) {

  $response = $this->view->render($response, 'accion.phtml');


  return $response;
});
$app->get('/accionusuario', function (Request $request, Response $response) {

  $response = $this->view->render($response, 'accionusuario.phtml');


  return $response;
});

$app->post('/registro', function (Request $request, Response $response) {
  $body = $request->getBody();

  $response->getBody()->write($body);
  return $response;
});

$app->run();