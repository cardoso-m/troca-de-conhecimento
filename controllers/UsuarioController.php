<?php
require_once 'services/UsuarioService.php';
require_once 'models/Usuario.php';

class UsuarioController {
    private $service;

    public function __construct() {
        $this->service = new UsuarioService();
    }

    public function index() {
        $usuarios = $this->service->listarUsuarios();
        include 'views/usuarios/index.php';
    }

    public function create() {
        include 'views/usuarios/create.php';
    }

    public function store($data) {
        $usuario = new Usuario();
        $usuario->nome = $data['nome'];
        $usuario->email = $data['email'];
        $this->service->salvar($usuario);
        header('Location: /?controller=usuario&action=index');
    }

    public function edit($id) {
        $usuario = $this->service->buscarPorId($id);
        include 'views/usuarios/edit.php';
    }

    public function update($data) {
        $usuario = new Usuario();
        $usuario->id = $data['id'];
        $usuario->nome = $data['nome'];
        $usuario->email = $data['email'];
        $this->service->salvar($usuario);
        header('Location: /?controller=usuario&action=index');
    }

    public function delete($id) {
        $this->service->excluir($id);
        header('Location: /?controller=usuario&action=index');
    }
}
