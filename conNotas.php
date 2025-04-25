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
			
	<?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbnotas");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$ra=$linha['ra'];
        	$professor=$linha['idProfessor'];
        	$disciplina=$linha['idDisciplinas'];
        	$nota=$linha['nota'];
        	$faltas=$linha['faltas'];
        	
        	echo "<table><tr><td>RA do aluno: </td><td>$ra</td><tr>";
        	echo "<tr><td>Nome do professor responsável: </td><td>$professor</td><tr> <br>";
        	echo "<tr><td>Disciplina: </td><td>$disciplina</td><tr> <br>";
        	echo "<tr><td>Nota: </td><td>$nota</td><tr> <br>";
        	echo "<tr><td>Quantidade de faltas: </td><td>$faltas</td><tr> <br>";
        	}
        	
        	?>
        </div>
    	</center>
</body>
</html>