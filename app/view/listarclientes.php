<?php

require_once "../models/funcoes.php";
$listar = new ManageData();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Clientes</title>
<link rel="stylesheet" type="text/css" href="css/styleformclientes.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<script src="https://kit.fontawesome.com/10de34da91.js" crossorigin="anonymous"></script>



<style type="text/css">
	table.redTable {
  border: 2px solid #A40808;
  background-color: #EEE7DB;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.redTable td, table.redTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.redTable tbody td {
  font-size: 13px;
}
table.redTable tr:nth-child(even) {
  background: #F5C8BF;
}
table.redTable thead {
  background: #A40808;
}
table.redTable thead th {
  font-size: 19px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 2px solid #A40808;
}
table.redTable thead th:first-child {
  border-left: none;
}

table.redTable tfoot {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
  background: #A40808;
}
table.redTable tfoot td {
  font-size: 13px;
}
table.redTable tfoot .links {
  text-align: right;
}
table.redTable tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #A40808;
  padding: 2px 8px;
  border-radius: 5px;
}
</style>


</head>
<body>
	<center>

    <h1>Lista de Clientes - <i class="fa fa-users"></i></h1>
    <br>
<table class="redTable">
<thead>
<tr>
<th>NOME</th>
<th>E-MAIL</th>
<th>CURSO</th>
<th>TELEFONE</th>
<th>INTERESSE</th>
<th>DATA RETORNO</th>
<th>EDITAR</th>
<th>EXCLUIR</th>
</tr>
</thead>

<?php

	$row = $listar->Read();

		foreach ($row as $value) {
			
	

?>

<tbody>
<tr>
<td><?php echo $value['nome']; ?></td>
<td><?php echo $value['email']; ?></td>
<td><?php echo $value['curso']; ?></td>
<td><?php echo $value['telefone']; ?></td>
<td><?php echo $value['interesse']; ?></td>
<td><?php echo date("d/m/Y", strtotime($value['dataretorno'])); ?></td>
<td><a href="editarclientes.php?id=<?php echo $value['id'];?> "> <input type="submit" class="btn btn-primary" name="editar"  value="Editar"></a></td>

<td><a href="../controller/deleta.controller.php?id=<?php echo $value['id']; ?> "> <input type="submit" class="btn btn-primary" name="excluir" value="excluir"></a></td>
</tr>
<?php } ?>
</tbody>
</table>
</center>

</body>
</html>