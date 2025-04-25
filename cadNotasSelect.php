<?php
	require_once("conn.php");
?>

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

        <select name="selectAluno" required>
            <option>Selecione o aluno</option>
            <?php
                $sqlAlunos = "SELECT * FROM tbaluno";
                $resultadoAlunos = mysqli_query($conn, $sqlAlunos);
                while($rowAlunos = mysqli_fetch_assoc($resultadoAlunos)){
                    ?>
                    <option value="<?php echo $rowAlunos['ra']; ?>"><?php echo $rowAlunos['nomeAluno']; ?><?php
                }
            ?>
        </select><br>

        <select name="selectProfessor" required>
            <option>Selecione o professor</option>
            <?php
                $sqlProf = "SELECT * FROM tbprofessor";
                $resultadoProf = mysqli_query($conn, $sqlProf);
                while($rowProf = mysqli_fetch_assoc($resultadoProf)){
                    ?>
                    <option value="<?php echo $rowProf['idProfessor']; ?>"><?php echo $rowProf['nomeProfessor']; ?><?php
                }
            ?>
        </select><br>

        <select name="selectDisciplina" required>
            <option>Selecione a disciplina</option>
            <?php
                $sqlDisc = "SELECT * FROM tbdisciplinas";
                $resultadoDisc = mysqli_query($conn, $sqlDisc);
                while($rowDisc = mysqli_fetch_assoc($resultadoDisc)){
                    ?>
                    <option value="<?php echo $rowDisc['idDisciplinas']; ?>"><?php echo $rowDisc['nomeDisciplina']; ?><?php
                }
            ?>
        </select><br>


        <h2>Nota:</h2>
        <input type="text" name="txtNota" id="txtNota" required>

        <h2>Faltas:</h2>
        <input type="text" name="txtFaltas" id="txtFaltas" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
	</div>
	</center>
</body>
</html>