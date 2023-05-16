<?php
include_once("conexao.php");
session_start();
$nome1 = $_SESSION['caixa'];
$id = $_SESSION['id'];
$nomejogo = $_SESSION['nomejogo'];
$imagemjogo = $_SESSION['imagemjogo'];


$msg = false;

$result_usuario = "INSERT INTO biblioteca (nickname, games, biblioimg) VALUES ('$nome1', '$nomejogo', '$imagemjogo')";


    if(mysqli_query($conn, $result_usuario)){
        $msg = "Arquivo enviado com sucesso!";
		   } else{
        $msg = "Falha ao enviar arquivo!";
}



?>
<?php header("Location: pagina.php");  ?>
