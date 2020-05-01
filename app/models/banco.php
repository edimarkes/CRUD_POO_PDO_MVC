<?php

require_once 'config.php';

	class bancoDados{

		private $conexao;

		public function Conecta(){

			try {


				$this->conexao = new PDO("mysql:host=".SERVIDOR.";dbname=".BANCO.";charset=utf8",USUARIO,SENHA);
				return $this->conexao;

				
			} 
			catch (PDOException $erro) {

				echo "Erro de Conexao com o banco de dados ".$erro->getMessage();
				
			}
			catch(Exception $erro){

				echo "Erro genérico ".$erro->getMessage();

			}

			
		}// Fim metodo Conecta




	}

	$banco = new bancoDados();
	$banco->Conecta();


?>