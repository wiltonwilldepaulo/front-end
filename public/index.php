<?php

use Slim\Factory\AppFactory;
//ADICIONAMOS O AUTOCARREGAMENTO DE CLASSES E
//ARQUIVOS
require "../vendor/autoload.php";
//CRIAMOS UMA INSTANCIA DO FRAMEWORK SLIM
$app = AppFactory::create();
$app->addRoutingMiddleware();
define("BASE_URL", $app->getBasePath());
//INCLUIMOS AS CONFIGURAÇÕES
//require "../app/helpers/config.php";
//INCLUIMOS TODAS AS ROTAS.
//require "../app/routes/site.php";
$app->get('/home', function ($request, $response, array $args) {
    $response->getBody()->write("Olá mundo");
    return $response;
});
//RUM APP
$app->run();
