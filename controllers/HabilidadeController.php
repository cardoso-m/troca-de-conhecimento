<?php
require_once 'services/HabilidadeService.php';

class HabilidadeController {
    private $service;

    public function __construct() {
        $this->service = new HabilidadeService();
    }

    public function index() {
        $habilidades = $this->service->listar();
        require 'views/habilidades/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $habilidade = new Habilidade();
            $habilidade->usuario_id = $_POST['usuario_id'];
            $habilidade->descricao = $_POST['descricao'];
            $this->service->salvar($habilidade);
            header('Location: /habilidades');
        } else {
            require 'views/habilidades/create.php';
        }
    }
}