<?php
require_once 'services/TrocaService.php';

class TrocaController {
    private $service;

    public function __construct() {
        $this->service = new TrocaService();
    }

    public function index() {
        $trocas = $this->service->listar();
        require 'views/trocas/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $troca = new Troca();
            $troca->ofertante_id = $_POST['ofertante_id'];
            $troca->interessado_id = $_POST['interessado_id'];
            $troca->habilidade_id = $_POST['habilidade_id'];
            $troca->status = $_POST['status'];
            $this->service->salvar($troca);
            header('Location: /trocas');
        } else {
            require 'views/trocas/create.php';
        }
    }
}