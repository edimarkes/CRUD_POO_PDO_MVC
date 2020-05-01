<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
<link rel="stylesheet" type="text/css" href="view/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap-reboot.min.css">

<link rel="stylesheet" type="text/css" href="./view/jss">

<script src="https://kit.fontawesome.com/10de34da91.js" crossorigin="anonymous"></script>

	
</head>
<body>

  

	<br>
	<br>
	<center>
    <h1>Cadastrar Cliente - <i class="fa fa-user-plus"></i></h1>
    <br>
		<table width="80%">
			<tr>

				<td>
	<form method="POST" action="../app/controller/cadastra.controller.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="Nome" placeholder="Nome do Aluno" name="nome" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">E-mail</label>
      <input type="email" class="form-control" id="email" placeholder="E-mail do Aluno" name="email" required="">
    </div>
  </div>

   <div class="form-group">
    <label for="inputAddress">Curso</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Curso de Interesse / Comentários" name="curso" required="">
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Telefone</label>
      <input type="text" class="form-control" id="telefone" placeholder="Telefone de contato" name="telefone" required="">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Interesse</label>
      <select id="inputEstado" class="form-control" name="interesse">
        <option selected>Escolher...</option>
        <option>Quente</option>
        <option>Morno</option>
        <option>Frio</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">Data Retorno</label>
      <input type="date" class="form-control" id="inputCEP" name="dataretorno">
    </div>
  </div>
 
  </div>
  <input type="submit" class="btn btn-primary" name="enviar" value="Cadatrar"> |
  <a href="./view/listarclientes.php" >Lista de Clientes</a>
</form>

</td>
</tr>
</table>
</center>



</body>
</html>