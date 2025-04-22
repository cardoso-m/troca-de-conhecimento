<?php
require_once 'dao/HabilidadeDAO.php';

class HabilidadeService {
    private $dao;

    public function __construct() {
        $this->dao = new HabilidadeDAO();
    }

    public function listar() {
        return $this->dao->listar();
    }

    public function salvar($habilidade) {
        return $this->dao->inserir($habilidade);
    }
}