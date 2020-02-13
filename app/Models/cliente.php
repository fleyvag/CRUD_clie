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
        public function eliminar($id) : bool{
        $result = false;
        try {
            $stm = $this->pdo->prepare('delete * from clientes where id_clie =?');
            $stm->execute([$id]);

            $result = true;
        } catch(Exception $e) {

        }

        return $result;
    }
      public function obtener(int $id) : Cliente{
        $result = new Cliente;

        try {
            $stm = $this->pdo->prepare('select * from clientes where id_clie = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();

            $result->id_clie = $fetch->id_clie;
            $result->nom_clie = $fetch->nom_clie;
            $result->ape_clie = $fetch->ape_clie;
            $result->telefono = $fetch->telefono;
        } catch(Exception $e) {


        }

        return $result;
    }

    public function guardar(Cliente $model) : bool{
            $result = false;
        try {
            if (empty($model->id_clie)) {
                $sql='
                    insert into clientes(
                    nom_clie,
                    ape_clie,
                    telefono
                    ) values (?,?,?)';
              $stm = $this->pdo->prepare($sql);
                $stm->execute([
                $model->nom_clie,
                $model->ape_clie,
                $model->telefono
            ]);

            }else{
                $sql='update clientes
                set
                nom_clie=?,
                ape_clie=?,
                telefono=?
                where id_clie =?
                ';
            
            
            $stm = $this->pdo->prepare($sql);
            $stm->execute([
                $model->nom_clie,
                $model->ape_clie,
                $model->telefono,
                $model->id_clie
            ]);
            }
            $result =true;
        } catch(Exception $e) {
            
            
        }

        return $result;
    }
    
}