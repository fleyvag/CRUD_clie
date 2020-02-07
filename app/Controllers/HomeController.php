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

}




 ?>