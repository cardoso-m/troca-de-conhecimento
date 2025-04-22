<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/usuarios':
        require 'controllers/UsuarioController.php';
        (new UsuarioController())->index();
        break;
    case '/usuarios/create':
        require 'controllers/UsuarioController.php';
        (new UsuarioController())->create();
        break;
    case '/habilidades':
        require 'controllers/HabilidadeController.php';
        (new HabilidadeController())->index();
        break;
    case '/habilidades/create':
        require 'controllers/HabilidadeController.php';
        (new HabilidadeController())->create();
        break;
    case '/trocas':
        require 'controllers/TrocaController.php';
        (new TrocaController())->index();
        break;
    case '/trocas/create':
        require 'controllers/TrocaController.php';
        (new TrocaController())->create();
        break;
    default:
        echo "Página não encontrada.";
}
