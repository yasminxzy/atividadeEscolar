	<html>
<link rel="stylesheet" type="text/css" href="estilo.css">
<body>
<center>
<div class="div1">
	<a href="index.php" class="links">Voltar</a>
			<br/><br/>

	<?php
		require_once("conn.php");
	?>

	<form action="boletim.php" method="post">
		
		<select name="selectAluno">
            <option>Selecione o aluno</option>
            <?php
                $sqlAlunos = "SELECT * FROM tbaluno";
                $resultadoAlunos = mysqli_query($conn, $sqlAlunos);
                while($rowAlunos = mysqli_fetch_assoc($resultadoAlunos)){
                    ?>
                    <option value="<?php echo $rowAlunos['ra']; ?>"><?php echo $rowAlunos['nomeAluno']; ?><?php
                }
            ?>
        </select><br><br>

		<input type="submit" name="buscar">
		</select>
	</form>

	<?php
		$ra = $_POST['selectAluno'];
		$resultado = mysqli_query($conn, "select tbaluno.nomeAluno, tbdisciplinas.nomeDisciplina, tbprofessor.nomeProfessor,tbnotas.nota, tbnotas.faltas from tbnotas inner join tbaluno on tbaluno.ra = tbnotas.ra inner join tbprofessor on tbprofessor.idProfessor = tbnotas.idProfessor inner join tbdisciplinas on tbdisciplinas.idDisciplina = tbnotas.idDisciplina where tbnotas.ra='".$ra."'");

		while ($linha = mysqli_fetch_array($resultado)) {
			echo "<br>Aluno: ";
			echo $linha['nomeAluno'];
			echo "<br>Disciplina: ";
			echo $linha['nomeDisciplina'];
			echo "<br>Professor: ";
			echo $linha['nomeProfessor'];
			echo "<br>Nota: ";
			echo $linha['nota'];
			echo "<br>Faltas: ";
			echo $linha['faltas'];
			echo "<br>";
		}

		
	?>
</div>
</center>
</body>
</html>