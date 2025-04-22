<?php
require_once 'config/Database.php';
require_once 'models/Troca.php';

class TrocaDAO {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function listar() {
        $stmt = $this->conn->query("SELECT * FROM trocas");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Troca');
    }

    public function inserir($troca) {
        $stmt = $this->conn->prepare("INSERT INTO trocas (ofertante_id, interessado_id, habilidade_id, status) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$troca->ofertante_id, $troca->interessado_id, $troca->habilidade_id, $troca->status]);
    }
}