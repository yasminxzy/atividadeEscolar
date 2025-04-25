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

	<form method="POST" action="processaCadDisciplina.php">
        <h2>Nome da disciplina:</h2>
        <input type="text" name="txtDisciplina" id="txtDisciplina" required><br>
        <h2>Carga horária:</h2>
        <input type="text" name="txtHoras" id="txtHoras" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
	</div>
	</center>
</body>
</html>