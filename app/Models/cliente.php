<?php
namespace App\Models;

use Exception;

class Cliente {
    private $pdo;

    public function __construct(){
        $this->pdo = \Core\Database::getConnection();
    }

    public function listar() : array{
        $result = [];

        try {
            $stm = $this->pdo->prepare('select * from clientes');
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {

        }

        return $result;
    }
    
}