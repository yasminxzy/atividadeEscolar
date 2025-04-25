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

	<form method="POST" action="processaCadNotas.php">
        <h2>RA do aluno:</h2>
        <input type="text" name="txtRA" id="txtRA">

        <h2>Professor:</h2>
        <input type="text" name="txtProf" id="txtProf">

        <h2>Disciplina:</h2>
        <input type="text" name="txtDisc" id="txtDisc">

        <h2>Nota:</h2>
        <input type="text" name="txtNota" id="txtNota">

        <h2>Faltas:</h2>
        <input type="text" name="txtFaltas" id="txtFaltas"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
	</div>
	</center>
</body>
</html>