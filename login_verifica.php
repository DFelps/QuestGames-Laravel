<?php
include_once("conexao.php");

$nickname = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);

$result_usuario = ("SELECT * FROM usuarios WHERE nickname = '$nickname' AND senha = '$senha'") or die("erro ao selecionar");

if(mysqli_query($conn, $result_usuario)){
    $msg = "Arquivo enviado com sucesso!";
   } else{
    $msg = "Falha ao enviar arquivo!";
}

?>
<?php header("Location: index.php");  ?>
