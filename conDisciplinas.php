<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title></title>
</head>
<body>
	<center>
		<div class="div2">
			
			<a href="index.php" class="links">Voltar</a>
			<br/><br/>
	<?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbdisciplinas");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$id=$linha['idDisciplinas'];
        	$nome=$linha['nomeDisciplina'];
        	$horas=$linha['cargaHoraria'];
        	
        	echo "<table><tr><td>Código da disciplina: </td><td>$id</td><tr>";
        	echo "<tr><td>Nome da disciplina: </td><td>$nome</td><tr> <br>";
        	echo "<tr><td>carga horária: </td><td>$horas</td><tr> <br>";
        	}
        	
        	?>
        </div>
    	</center>
</body>
</html>