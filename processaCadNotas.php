<?php
    require_once("conn.php");

    $ra = $_POST['selectAluno'];
    $professor = $_POST['selectProfessor'];
    $disciplina = $_POST['selectDisciplina'];
    $nota = $_POST['txtNota'];
    $faltas = $_POST['txtFaltas'];

    $sqlNotas = "INSERT INTO tbnotas(ra, idProfessor, idDisciplinas, nota, faltas) VALUES ('$ra','$professor', '$disciplina', '$nota', '$faltas')";
    $resultadoNotas = mysqli_query($conn, $sqlNotas);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Nota cadastrada com Sucesso! \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAluno.php'>
        <script type=\"text/javascript\">
                alert(\"A nota não foi cadastrada. \");
        </script>
        ";
    }
?>