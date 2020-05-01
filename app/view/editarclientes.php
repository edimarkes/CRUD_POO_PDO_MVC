<?php
require_once "../models/funcoes.php";
require_once "../controller/editar.controller.php";
$buscando = new ManageData();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Alterar Cliente</title>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-reboot.min.css">

<script src="https://kit.fontawesome.com/10de34da91.js" crossorigin="anonymous"></script>



<link rel="stylesheet" type="text/css" href="./view/jss">
	
</head>
<body>
<?php


  
  $id_cliente = addslashes($_GET['id']);

   // echo $id_cliente;

    $busca = $buscando->listarUpdate($id_cliente);







  ?>
 
  

	<br>
	<br>
	<center>

   <h1>Alterar Cliente - <i class="fa fa-user-edit"></i></h1>
    <br>

		<table width="80%">
			<tr>

				<td>
	<form method="POST" action="../controller/alterarcliente.controller.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="hidden" name="id" value="<?php echo $busca['id'] ?>">
      <input type="text" class="form-control" id="Nome"  name="nome" value="<?php echo $busca['nome'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $busca['email'] ?>">
    </div>
  </div>

   <div class="form-group">
    <label for="inputAddress">Curso</label>
    <input type="text" class="form-control" id="inputAddress"  name="curso" value="<?php echo $busca['curso'] ?>">
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Telefone</label>
      <input type="text" class="form-control" id="telefone"  name="telefone" value="<?php echo $busca['telefone'] ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Interesse</label>
      <select id="inputEstado" class="form-control" name="interesse" >
        <option value="<?php echo $busca['interesse']; ?>"><?php echo $busca['interesse']; ?></option>
        <option>Quente</option>
        <option>Morno</option>
        <option>Frio</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">Data Retorno</label>
      <input type="date" class="form-control" id="inputCEP" name="dataretorno" value="<?php echo $busca['dataretorno'] ?>">
    </div>
  </div>
 
  </div>
  <input type="submit" class="btn btn-primary" name="editar" value="Alterar"> | 
  <a href="../index.php" >Cadastrar Clientes</a>
</form>

</td>
</tr>
</table>
</center>



</body>
</html>