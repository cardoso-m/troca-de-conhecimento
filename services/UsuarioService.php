<?php
require_once 'dao/UsuarioDAO.php';

class UsuarioService {
    private $dao;

    public function __construct() {
        $this->dao = new UsuarioDAO();
    }

    public function listarUsuarios() {
        return $this->dao->getAll();
    }

    public function salvar($usuario) {
        if (isset($usuario->id)) {
            return $this->dao->update($usuario);
        } else {
            return $this->dao->insert($usuario);
        }
    }

    public function excluir($id) {
        return $this->dao->delete($id);
    }

    public function buscarPorId($id) {
        return $this->dao->getById($id);
    }
}
