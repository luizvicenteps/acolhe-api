<?php
use \Psr\Http\Message\RequestInterface;
use \Psr\Http\Message\ResponseInterface;

// Root
$app->get('/', function (RequestInterface $request, ResponseInterface $response, $args) {
    return $response->withStatus(403)->write('Forbidden.');
});

// Hospedes
$app->get("/hospede", "Controllers\Hospede:get");
// $app->get("/hospede/{id}", "Controllers\Hospede:getHospedeById");
// $app->get("/hospede/{id}/usuarios", "Controllers\Hospede:getHospedeUsuariosById");
// $app->post("/hospede", "Controllers\Hospede:set");
// $app->patch("/hospede/{id}", "Controllers\Hospede:update");
// $app->delete("/hospede/{id}", "Controllers\Hospede:delete");

$app->get("/pos" , "Controllers\Pos:get");

// Clubes
$app->get("/clubes", "Controllers\Clube:get");
$app->get("/clubes/{id}", "Controllers\Clube:getById");
$app->get("/clubes/{id}/usuarios", "Controllers\Clube:getUsuariosById");
$app->post("/clubes", "Controllers\Clube:set");
$app->patch("/clubes/{id}", "Controllers\Clube:update");
$app->delete("/clubes/{id}", "Controllers\Clube:delete");

// Planos
$app->get("/planos", "Controllers\Plano:get");
$app->get("/planos/{id}", "Controllers\Plano:getById");
$app->get("/planos/{id}/usuarios", "Controllers\Plano:getUsuariosById");
$app->post("/planos", "Controllers\Plano:set");
$app->patch("/planos/{id}", "Controllers\Plano:update");
$app->delete("/planos/{id}", "Controllers\Plano:delete");

// Usuários
$app->get("/usuarios", "Controllers\Usuario:get");
$app->get("/usuarios/{id}", "Controllers\Usuario:getById");
$app->get("/usuarios/{id}/dependentes", "Controllers\Usuario:getDependentesById");
$app->post("/usuarios", "Controllers\Usuario:set");
$app->patch("/usuarios/{id}", "Controllers\Usuario:update");
$app->delete("/usuarios/{id}", "Controllers\Usuario:delete");

//****************ACOLHE********************//

// Users
$app->get("/users" , "Controllers\User:get");
$app->get("/users/{id}", "Controllers\User:getById");
$app->get("/users/{id}/dependentes", "Controllers\User:getDependentesById");
$app->post("/users", "Controllers\User:set");
$app->patch("/users/{id}", "Controllers\User:update");
$app->delete("/users/{id}", "Controllers\User:delete");
