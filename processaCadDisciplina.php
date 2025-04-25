<?php
    require_once("conn.php");
    $disciplina = $_POST['txtDisciplina'];
    $horas = $_POST['txtHoras'];

    $sqlDisciplina = "INSERT INTO tbdisciplinas(nomeDisciplina,cargaHoraria) VALUES ('$disciplina','$horas')";
    $resultadoDisciplina = mysqli_query($conn, $sqlDisciplina);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Disciplina cadastrada com Sucesso! \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAluno.php'>
        <script type=\"text/javascript\">
                alert(\"A disciplina não foi cadastrada. \");
        </script>
        ";
    }
?>