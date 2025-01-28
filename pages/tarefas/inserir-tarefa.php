<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn-Adicionar'])) {

    $tituloTarefa = strip_tags(mysqli_real_escape_string($conn, $_POST['tituloTarefa']));
    $descricaoTarefa = strip_tags(mysqli_real_escape_string($conn, $_POST['descricaoTarefa']));
    $dataConclusaoTarefa = strip_tags(mysqli_real_escape_string($conn, $_POST['dataConclusaoTarefa']));
    $horaConclusaoTarefa = strip_tags(mysqli_real_escape_string($conn, $_POST['horaConclusaoTarefa']));
    $dataLembreteTarefa = strip_tags(mysqli_real_escape_string($conn, $_POST['dataLembreteTarefa']));
    $horaLembreteTarefa = strip_tags(mysqli_real_escape_string($conn, $_POST['horaLembreteTarefa']));
    $recorrenciaTarefa = strip_tags(mysqli_real_escape_string($conn, $_POST['recorrenciaTarefa']));

    $sql = "INSERT INTO tdtarefas (
        tituloTarefa,
        descricaoTarefa,
        dataConclusaoTarefa,
        horaConclusaoTarefa,
        dataLembreteTarefa,
        horaLembreteTarefa,
        recorrenciaTarefa
    ) VALUES (
        '{$tituloTarefa}',
        '{$descricaoTarefa}',
        '{$dataConclusaoTarefa}',
        '{$horaConclusaoTarefa}',
        '{$dataLembreteTarefa}',
        '{$horaLembreteTarefa}',
        '{$recorrenciaTarefa}'
    )";

    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        echo "<div class='alert alert-success'>Tarefa inserida com sucesso!";
        echo "<hr>";
        echo "<p class='mb-0'>
            <a class='text-success-emphasis' href='?menuop=tarefas'>Voltar à lista de Tarefas.</a>
        </p>";
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger'>Erro ao inserir a tarefa, tente novamente.</p>";
        echo "<hr>";
        echo "<p class='mb-0'>
            <a class='text-success-emphasis' href='?menuop=tarefas'>Voltar à lista de Tarefas.</a>
        </p>";
        echo "</div>";
    }
}
?>
