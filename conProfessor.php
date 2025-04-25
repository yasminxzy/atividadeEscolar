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
		<div class="div1">
			
			<a href="index.php" class="links">Voltar</a>
			<br/><br/>
	<?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbprofessor");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$id=$linha['idProfessor'];
        	$nome=$linha['nomeProfessor'];

        	echo "<table><tr><td>Código do Professor: </td><td>$id</td><tr>";
        	echo "<tr><td>Nome do Professor: </td><td>$nome</td><tr> <br>";
        	}
        	
        	?>
        </div>
    	</center>
</body>
</html>