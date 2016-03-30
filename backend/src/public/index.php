<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

// Carregamento dos arquivos fonte do projeto
spl_autoload_register(function ($classname) {
    require ("../classes/" . $classname . ".php");
});

$app = new \Slim\App;

// ROTAS PARA CURSOS
$app->get('/cursos', function (Request $request, Response $response) {
  $cursoDAO = CursoDAO::getInstance();
  $cursos = array_values($cursoDAO->getAll());

  return $response->withJson($cursos);
});

$app->get('/cursos/{id}', function (Request $request, Response $response, $args) {
  $id = $args['id'];
  $cursoDAO = CursoDAO::getInstance();
  $cursos = $cursoDAO->getById($id);

  return $response->withJson($cursos);
});

$app->run();
