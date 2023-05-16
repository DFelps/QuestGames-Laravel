<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$descricao= filter_input(INPUT_POST, 'Descricao', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'Preco', FILTER_SANITIZE_STRING);

$msg = false;

  $arquivo = $_FILES['fundo']['name'];
  $arquivo2 = $_FILES['print1']['name'];
  $arquivo3 = $_FILES['print2']['name'];
  $arquivo4 = $_FILES['print3']['name'];
  $arquivo5 = $_FILES['carrousel']['name'];
  $arquivo6 = $_FILES['loja']['name'];
  $arquivo7 = $_FILES['biblio']['name'];

   $diretorio = "upload/";

    move_uploaded_file($_FILES['fundo']['tmp_name'], $diretorio . $arquivo);
    move_uploaded_file($_FILES['print1']['tmp_name'], $diretorio . $arquivo2);
    move_uploaded_file($_FILES['print2']['tmp_name'], $diretorio . $arquivo3);
    move_uploaded_file($_FILES['print3']['tmp_name'], $diretorio . $arquivo4);
    move_uploaded_file($_FILES['carrousel']['tmp_name'], $diretorio . $arquivo5);
    move_uploaded_file($_FILES['loja']['tmp_name'], $diretorio . $arquivo6);
    move_uploaded_file($_FILES['biblio']['tmp_name'], $diretorio . $arquivo7);




$result_usuario = "INSERT INTO games (nome, descricao, preco, fundo, print1, print2, print3, carrous, loja, biblio) VALUES ('$nome', '$descricao', '$preco', '$arquivo', '$arquivo2', '$arquivo3', '$arquivo4', '$arquivo5', '$arquivo6', '$arquivo7')";



    if(mysqli_query($conn, $result_usuario)){
        $msg = "Arquivo enviado com sucesso!";
		   } else{
        $msg = "Falha ao enviar arquivo!";
}



?>
<?php header("Location: adm.php");  ?>
