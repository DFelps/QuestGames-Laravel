<?php
include_once("conexao.php");
session_start();
$nome1 = $_SESSION['caixa'];

$nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$info = filter_input(INPUT_POST, 'Info', FILTER_SANITIZE_STRING);
$desc = filter_input(INPUT_POST, 'Descricao', FILTER_SANITIZE_STRING);

$msg = false;

  $arquivo = $_FILES['Foto']['name'];

   $diretorio = "upload/";

    move_uploaded_file($_FILES['Foto']['tmp_name'], $diretorio . $arquivo);

$result_usuario = "UPDATE usuarios SET nome = '$nome', info = '$info' , descricao = '$desc', foto = '$arquivo' WHERE nickname = '$nome1'";




    if(mysqli_query($conn, $result_usuario)){
        $msg = "Arquivo enviado com sucesso!";
		   } else{
        $msg = "Falha ao enviar arquivo!";
}



?>
<?php header("Location: perfil_exibe.php");  ?>
