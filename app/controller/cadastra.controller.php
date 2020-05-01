<?php

require_once "../classes/cadastracliente.php";
require_once "../models/funcoes.php";

	class CadastraController{

		public function __construct(){

			$this->cad = new Cliente();

			$this->cad->setNome(addslashes($_POST['nome']));
			$this->cad->setEmail(addslashes($_POST['email']));
			$this->cad->setCurso(addslashes($_POST['curso']));
			$this->cad->setTelefone(addslashes($_POST['telefone']));
			$this->cad->setInteresse(addslashes($_POST['interesse']));
			$this->cad->setDataRetorno(addslashes($_POST['dataretorno']));

			$nome 		 = $this->cad->getNome();
			$email 		 = $this->cad->getEmail();
			$curso 		 = $this->cad->getCurso();
			$telefone    = $this->cad->getTelefone();
			$interesse   = $this->cad->getInteresse();
			$dataretorno = $this->cad->getDataRetorno();

			$dados = array($nome,$email,$curso,$telefone,$interesse,$dataretorno);
			$inserir = new ManageData();
			$gravando = $inserir->Create($dados);

			



		}// Fim Método Construtor




	} // Fim da classe CadastraController


	$cadastrando = new CadastraController();

?>