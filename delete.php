<?php

require_once 'conexao.php';

$id = $_GET['id'];
$sqlDelete = "DELETE FROM TAREFA WHERE id = $id";
$result = mysqli_query($conn, $sqlDelete);

header("Location: index.php");

?>
