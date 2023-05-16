<?php
include_once("conexao.php");

$nickname = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);
$senha2= filter_input(INPUT_POST, 'Senha2', FILTER_SANITIZE_STRING);


$result_usuario = "INSERT INTO usuarios (nickname, nome, email, senha) VALUES ('$nickname', '$nickname', '$email', '$senha')";

if(mysqli_query($conn, $result_usuario)){
    $msg = "Arquivo enviado com sucesso!";
   } else{
    $msg = "Falha ao enviar arquivo!";
}

?>
<?php header("Location: login.php");  ?>
