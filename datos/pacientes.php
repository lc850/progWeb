<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="imss";

	$conexion=new mysqli($server, $user, $password, $db);

	if($conexion->connect_error){
		print("Error de conexión con la base de datos");
	}

	$sql="SELECT * FROM pacientes ORDER BY id DESC";
	$result=$conexion->query($sql);
?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Gestión de pacientes IMSS</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-primary">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Lista de Pacientes</h3>
					</div>
					<div class="panel-body">
					    <table class="table table-hover">
					    	<thead>
					    		<tr>
						    		<th>#</th>
						    		<th>Nombre</th>
						    		<th>Edad</th>
						    		<th>Editar</th>
						    		<th>Eliminar</th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    		<?php
					    			if($result){
					    				while($obj=mysqli_fetch_object($result)){
					    		?>
					    		<tr>
					    			<td><?php echo $obj->id; ?></td>
					    			<td><?php echo $obj->nombre; ?></td>
					    			<td><?php echo $obj->edad; ?></td>
					    			<td><a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
					    			<td><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
					    		</tr>
					    		<?php 
					    				}
					    			}
					    		?>
					    	</tbody>
					    </table>
					</div>
					<div class="text-center">
						  <ul class="pagination">
						    <li>
						      <a href="#" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						      </a>
						    </li>
						    <li><a href="#">1</a></li>
						    <li><a href="#">2</a></li>
						    <li><a href="#">3</a></li>
						    <li><a href="#">4</a></li>
						    <li><a href="#">5</a></li>
						    <li>
						      <a href="#" aria-label="Next">
						        <span aria-hidden="true">&raquo;</span>
						      </a>
						    </li>
						  </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>