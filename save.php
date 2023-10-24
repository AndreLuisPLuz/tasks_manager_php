<?php

require_once 'conexao.php';

$title = $_POST['titulo'];
$descricao = $_POST['descricao'];

$sqlInsert = "INSERT INTO `tarefa`(`title`, `description`) VALUES ('$title','$descricao')";

$result = mysqli_query($conn, $sqlInsert);

if (!$result) {
    echo 'Query falhou!';
}

$_SESSION['message'] = 'Tarefa salva com sucesso!';
$_SESSION['message_type'] = 'success';

header('Location: index.php');

?>
