<?php

require_once "../models/funcoes.php";


	class Deletando{

		public function __construct(){

		if(isset($_GET['id'])) {

		$apagar = new ManageData();	
		$id_cliente = addslashes($_GET['id']);
		$apagar->Delete($id_cliente);
		
}

		}
	}

	$p = new Deletando();
	//$p->excluir();

?>