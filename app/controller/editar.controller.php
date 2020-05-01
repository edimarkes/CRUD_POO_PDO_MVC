<?php
// Classe para pegar o Id do cliente e encaminhar para a classe funcoes.php na pasta models. 

require_once "../models/funcoes.php";



	class Idcliente{

		public function __construct(){

			if (isset($_GET['id'])) {
				
				$manager = new ManageData();
				$idcliente = addslashes($_GET['id']);
				$manager->listarUpdate($idcliente);


					//echo $idcliente;
			}


		}

		


	}

	$clienteid = new Idcliente();
?>