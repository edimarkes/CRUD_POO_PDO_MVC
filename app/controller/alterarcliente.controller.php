<?php

require_once "../models/funcoes.php";

  class AlteraCliente{

  	public function __construct(){

  		$altera = new ManageData();

				if (isset($_POST['editar'])) {


        $id			 = addslashes($_POST['id']);
		$nome		 = addslashes($_POST['nome']);
		$email		 = addslashes($_POST['email']);
		$curso		 = addslashes($_POST['curso']);
		$telefone	 = addslashes($_POST['telefone']);
		$interesse   = addslashes($_POST['interesse']);
		$dataretorno = addslashes($_POST['dataretorno']);

				

		
		$alterando = $altera->Update($id,$nome,$email,$curso,$telefone,$interesse,$dataretorno);


	}
		}

  }

$alteracli = new AlteraCliente();

?>