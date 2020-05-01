<?php

require_once "banco.php";

    class  ManageData extends bancoDados{

	public function Create($dados = array()){

		$banco = new bancoDados();
		$sql = "INSERT INTO dadosclientes(nome,email,curso,telefone,interesse,dataretorno) VALUES(?,?,?,?,?,?)";
		$result = $banco->Conecta()->prepare($sql);

			if ($result->execute($dados)) {
				
				echo '<script>alert("Cadastrado com Sucesso!");</script>';
				echo '<script>window.location="../index.php";</script>';

			}else{

				echo "Erro, tente novamente";
			}


	}

	public function Read(){

		$banco = new bancoDados();
		$sql = "SELECT * FROM dadosclientes ORDER BY dataretorno ASC";
		$result  = $banco->Conecta()->prepare($sql);
		$result->execute();

			if($result->rowCount() > 0){

				 	while ($linha = $result->fetchAll(PDO::FETCH_ASSOC)) {
				 		
				 		$dados = $linha;
				 	}

				 	return $dados;
			}



	}

	public function Update($id,$nome,$email,$curso,$telefone,$interesse,$dataretorno){

		$banco = new bancoDados();
		$sql = "UPDATE dadosclientes SET nome = :nome, email = :email, curso = :curso, telefone = :telefone, interesse = :interesse, dataretorno = :dataretorno WHERE id = :id";
		$result = $banco->Conecta()->prepare($sql);
		$result->bindValue(":nome",$nome);
		$result->bindValue(":email",$email);
		$result->bindValue(":curso",$curso);
		$result->bindValue(":telefone",$telefone);
		$result->bindValue(":interesse",$interesse);
		$result->bindValue(":dataretorno",$dataretorno);
		$result->bindValue(":id",$id);
		            
			if ($result->execute()) {
						
						echo '<script>alert("Alterado com Sucesso");</script>';
						echo '<script>window.location="../view/listarclientes.php";</script>';
					}else{

						echo '<script>alert("Erro, tente novamente");</script>';
						echo '<script>window.location="../view/listarclientes.php";</script>';
					}
            
				

	}

	public function Delete($id){

		$banco = new bancoDados();
		$sql = "DELETE FROM dadosclientes WHERE id = '$id'";
		$result = $banco->Conecta()->prepare($sql);

			if ($result->execute()) {
				
				echo '<script>alert("Cliente Deletado com Sucesso!");</script>';
				echo '<script>window.location="../view/listarclientes.php";</script>';
			}else{

				echo '<script>alert("Erro, tente novamente!");</script>';
				echo '<script>window.location="../view/listarclientes.php";</script>';
			}



	}

	public function listarUpdate($id){
		$banco = new bancoDados();
		$sql   = "SELECT * FROM dadosclientes WHERE id = '$id'";
		$result = $banco->Conecta()->prepare($sql);
		$result->execute();

			return $result->fetch(PDO::FETCH_ASSOC);


	}
}


?>