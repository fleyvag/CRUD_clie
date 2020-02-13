<?php 
namespace App\Controllers;
/**
 * 
 */
class HomeController{
	private $cliente;
	function __construct(){
		$this->cliente =new \App\Models\Cliente;
	}
	public function index(){
		$model=$this->cliente->listar();
		require_once _VIEW_PATH_.'header.php';
		require_once _VIEW_PATH_.'home/index.php';
		require_once _VIEW_PATH_.'footer.php';
		}

		//$newrecord= new \App\Models\Cliente;
		//$newrecord->id_clie='6';
		//$newrecord->nom_clie='guillermo';
		//$newrecord->ape_clie='cisneros';
		//$newrecord->telefono='954044930';
		//$model=$this->cliente->guardar($newrecord);
		//var_dump($model);
		//exit;
		//------------------------------------------------
		
	//	if (empty($model)) {
	//		echo "campo vacio";
	//		var_dump($model);
	//	}
	//	else {
	//		echo "campo no leido";
	//		var_dump($model);
	//	}
	
	public function crud(){
		$model= new \App\Models\Cliente;
		if (!empty($_GET['id'])) {
			$model=$this->cliente->obtener($_GET['id']);
			# code...
			
		}
		$nuevo=empty($model->id_clie);
		require_once _VIEW_PATH_.'header.php';
		require_once _VIEW_PATH_.'home/crud.php';
		require_once _VIEW_PATH_.'footer.php';
		}

		public function guardar(){
		$model= new \App\Models\Cliente;
		$model->id_clie=$_POST['id'];
		$model->nom_clie=$_POST['nombre'];
		$model->ape_clie=$_POST['apellido'];
		$model->telefono=$_POST['telefono'];
		
		$nuevo=empty($model->id_clie);
		$result = $this->cliente->guardar($model);

        if(!$result) {
            throw new Exception('No se pudo realizar la operación');
        } else {
            header('location: ?c=home');
        }
		
		}

}




 ?>