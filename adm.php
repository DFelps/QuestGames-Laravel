<?php
include_once("conexao.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
  </head>
  <body>

    <div id="fundo"></div>
     <p id="titulo" style="left: 310px; top: 80px">Contas</p>
     <p id="titulo" style="left: 310px; top: 540px">Histórico</p>
     <p id="titulo" style="left: 1270px; top: 80px">Games</p>
     <p id="titulo" style="left: 1195px; top: 570px">Cadastrar Games</p>

<p id="games1" style="left: 810px; top: 630px">Nome: </p>
<p id="games1" style="left: 810px; top: 708px">Descrição: </p>
<p id="games1" style="left: 810px; top: 793px">Preço: </p>
<p id="games1" style="left: 1050px; top: 598px">Fundo: </p>
<p id="games1" style="left: 1050px; top: 650px">Print 1: </p>
<p id="games1" style="left: 1050px; top: 705px">Print 2: </p>
<p id="games1" style="left: 1050px; top: 758px">Print 3: </p>
<p id="games1" style="left: 1050px; top: 810px">Carrousel: </p>
<p id="games1" style="left: 1200px; top: 650px">Loja: </p>
<p id="games1" style="left: 1200px; top: 705px">Biblioteca: </p>

<form action="adm_cadastrar.php" method="post" enctype="multipart/form-data">
<input  type="text" id="caixa1" name="Nome" value=""/>
<input type="text" id="caixa2" name="Descricao" value=""/>
<input type="text" id="caixa3" name="Preco" value=""/>
<input type="file" id="fundo1" name="fundo"/>
<input type="file" id="print1" name="print1"/>
<input type="file" id="print2" name="print2"/>
<input type="file" id="print3" name="print3"/>
<input type="file" id="carrousel" name="carrousel"/>
<input type="file" id="loja" name="loja"/>
<input type="file" id="biblio" name="biblio"/>
<input type="submit" id="bot5" value="Enviar"/>
</form>

<form class="" action="adm_deletar.php" method="post">
<input type="text" id="caixa5" name="Del" value="">
  <input  type="submit" id="bot6" name="sucumbir" value="DELETAR ID">
  </form>


<?php
if(isset($msg) && $msg != false){
    echo "<p>$msg</p>";
}
?>
<br />


<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

<div id="exibir">
<?php
//criando a query de consulta à tabela criada
$sql = mysqli_query($conn, "SELECT * FROM usuarios") or die(
  mysqli_error($conn) //caso haja um erro na consulta
);

//pecorrendo os registros da consulta.
while($aux = mysqli_fetch_assoc($sql)) {
  echo "ID: ".$aux["id"]." |";
  echo " Nick: ".$aux["nickname"]." |";
  echo " Email: ".$aux["email"]." |";
  echo " Nome: ".$aux["nome"]."<br />";
}
?>

</div>
<div id="texto2">
<?php
//iniciando a conexão com o banco de dados

//criando a query de consulta à tabela criada
$sql = mysqli_query($conn, "SELECT * FROM games") or die(
  mysqli_error($conn) //caso haja um erro na consulta
);

//pecorrendo os registros da consulta.
while($aux = mysqli_fetch_assoc($sql)) {
  echo "ID: ".$aux["id"]." |";
  echo " Nome: ".$aux["nome"]." |";
  echo " Descrição: ".$aux["descricao"]." |";
  echo " Preço: ".$aux["preco"]."<div><br></div>";
}
?>
</div>
<style>
#fundo1{
position: absolute;
top: 643px;
left: 1050px;
width: 110px;
height: 20px;
}
#print1{
position: absolute;
top: 695px;
left: 1050px;
width: 110px;
height: 20px;
}
#print2{
position: absolute;
top: 750px;
left: 1050px;
width: 110px;
height: 20px;
}
#print3{
position: absolute;
top: 803px;
left: 1050px;
width: 110px;
height: 20px;
}
#carrousel{
position: absolute;
top: 853px;
left: 1050px;
width: 110px;
height: 20px;
}

#biblio{
position: absolute;
top: 748px;
left: 1200px;
width: 110px;
height: 50px;
}
#loja{
position: absolute;
top: 695px;
left: 1200px;
width: 110px;
height: 50px;
}

#bot5{
position: absolute;
top: 690px;
left: 1420px;
width: 100px;
height: 30px;
}
#bot6{
position: absolute;
top: 789px;
left: 1420px;
width: 100px;
height: 30px;
}

#games1{
  position: absolute;
  width: 650px;
  height: 30px;
  color: white;
    font-size: 16px;
    font-weight: bold;
    font-family: "Comic Sans MS", "Comic Sans", cursive;
}

#caixa1{
  position: absolute;
  width: 200px;
  height: 20px;
  top: 680px;
  left: 810px;
    font-size: 12px;
    font-weight: bold;
    font-family: "Comic Sans MS", "Comic Sans", cursive;
}

#caixa2{
  position: absolute;
  width: 200px;
  height: 20px;
  top: 765px;
  left: 810px;
    font-size: 12px;
    font-weight: bold;
    font-family: "Comic Sans MS", "Comic Sans", cursive;
}

#caixa3{
  position: absolute;
  width: 200px;
  height: 20px;
  top: 850px;
  left: 810px;
    font-size: 12px;
    font-weight: bold;
    font-family: "Comic Sans MS", "Comic Sans", cursive;
}


#caixa5{
  position: absolute;
  width: 30px;
  height: 20px;
  top: 792px;
  left: 1372px;
    font-size: 12px;
    font-weight: bold;
    font-family: "Comic Sans MS", "Comic Sans", cursive;
}

#titulo{
  position: absolute;
  width: 350px;
  height: 30px;
  color: white;
    font-size: 32px;
    font-weight: bold;
    font-family: "Comic Sans MS", "Comic Sans", cursive;
}
#exibir{
  position: absolute;
  width: 650px;
  height: 30px;
  top: 180px;
  left: 60px;
  color: white;
    font-size: 14px;
    font-weight: bold;
    font-family: "Comic Sans MS", "Comic Sans", cursive;
}

#texto2{
  position: absolute;
  width: 1033px;
  height: 424px;
  top: 180px;
  left: 810px;
  color: white;
    font-size: 14px;
    font-weight: bold;
    font-family: "Comic Sans MS", "Comic Sans", cursive;
    overflow: scroll;
}

#fundo{
   position: absolute;
   width: 100%;
   max-width: 1920px;
   height: 100%;
    max-height: 1800px;
    top: 0px;
    left: 0px;
background-image: url("front/img/adm.png");
background-size: 100% 100%;
z-index: -1;
  }

</style>
  </body>
</html>
