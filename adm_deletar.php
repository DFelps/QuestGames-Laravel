<?php
session_start();
include_once("conexao.php");

$deletar = filter_input(INPUT_POST, 'Del', FILTER_SANITIZE_STRING);

$result_usuario = "DELETE FROM games WHERE id= $deletar";

$resultado_usuario = mysqli_query($conn, $result_usuario);

	header("Location: adm.php");
?>
