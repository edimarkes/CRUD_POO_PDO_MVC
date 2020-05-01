<?php

	class Cliente{


		private $nome;
		private $email;
		private $curso;
		private $telefone;
		private $interesse;
		private $dataretorno;	

			public function getNome(){

				return $this->nome;
			}
			public function getEmail(){

				return $this->email;
			}	
			public function getCurso(){

				return $this->curso;
			}	
			public function getTelefone(){

				return $this->telefone;
			}	
			public function getInteresse(){

				return $this->interesse;
			}
			public function getDataretorno(){

				return $this->dataretorno;
			}

			public function setNome($nome){
				$this->nome = $nome;
			}
			public function setEmail($e){

				$email = FILTER_VAR($e, FILTER_SANITIZE_EMAIL);
				$this->email = $email;
			}

			public function setCurso($curso){

				$this->curso = $curso;
			}

			public function setTelefone($telefone){

				$this->telefone = $telefone;

			}
			public function setInteresse($interesse){

				$this->interesse = $interesse;
			}
			public function setDataRetorno($dataretorno){

				$this->dataretorno = $dataretorno;
			}




	}


?>