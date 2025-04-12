<?php
namespace dao;

use generic\MysqlSingleton;

class UserDAO {

    private $db;

    public function __construct() {
        $this->db = MysqlSingleton::getInstance();
    }

    public function create($nome, $email, $senha) {
        $query = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        return $this->db->executar($query, [
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => password_hash($senha, PASSWORD_DEFAULT)
        ]);
    }

    public function findByEmail($email) {
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $result = $this->db->executar($query, [
            ':email' => $email
        ]);
        return $result ? $result[0] : null;
    }
}
