<?php
namespace generic;

use PDO;
use PDOException; 

class MysqlSingleton{
    private static  $instance = null;

    private $conexao = null;
    private $dsn = 'mysql:host=localhost;dbname=troca-conhecimento';
    private $usuario = 'root';
    private $senha = 'admin';

    private function __construct(){
        if($this->conexao == null){
            $this->conexao = new PDO($this->dsn,$this->usuario,$this->senha);
        }
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new MysqlSingleton();
        }

        return self::$instance;
    }

    public function executar($query, $param = array()) {
        if($this->conexao) {
            try {
                $sth = $this->conexao->prepare($query);
                
                foreach($param as $k => $v) {
                    $sth->bindValue($k, $v);
                }
                
                $success = $sth->execute();
                

                if(stripos(trim($query), 'SELECT') === 0) {
                    return $sth->fetchAll(PDO::FETCH_ASSOC);
                }
                else {
                    return $success;
                }
            } catch(PDOException $e) {

                error_log("Erro no banco de dados: " . $e->getMessage());
                return false;
            }
        }
        return false;
    }
}