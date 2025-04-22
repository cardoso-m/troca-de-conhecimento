<?php
require_once 'dao/TrocaDAO.php';

class TrocaService {
    private $dao;

    public function __construct() {
        $this->dao = new TrocaDAO();
    }

    public function listar() {
        return $this->dao->listar();
    }

    public function salvar($troca) {
        return $this->dao->inserir($troca);
    }
}