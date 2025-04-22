<?php
require_once 'config/Database.php';
require_once 'models/Habilidade.php';

class HabilidadeDAO {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function listar() {
        $stmt = $this->conn->query("SELECT * FROM habilidades");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Habilidade');
    }

    public function inserir($habilidade) {
        $stmt = $this->conn->prepare("INSERT INTO habilidades (usuario_id, descricao) VALUES (?, ?)");
        return $stmt->execute([$habilidade->usuario_id, $habilidade->descricao]);
    }
}