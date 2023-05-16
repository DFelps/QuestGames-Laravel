<?php include_once("conexao.php");

$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
if(!isset($_GET['pesquisar'])){
    header("Location: loja.php");
}else{
    $valor_pesquisar = $_GET['pesquisar'];
}
$result_games = "SELECT * FROM games WHERE loja LIKE '%$valor_pesquisar%'";
$resultado_games = mysqli_query($conn, $result_games);

//Contar o total de cursos
$total_games = mysqli_num_rows($resultado_games);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 6;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_games/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na página
$result_games = "SELECT * FROM games WHERE loja LIKE '%$valor_pesquisar%' limit $incio, $quantidade_pg";
$resultado_games = mysqli_query($conn, $result_games);
$total_games = mysqli_num_rows($resultado_games);


session_start();
$nome1 = $_SESSION['caixa'];

$c1 = "SELECT * FROM games where id= '103'";
$mostrar1 = mysqli_query($conn, $c1);
$qtd_arquivos1 = mysqli_num_rows($mostrar1);

$c2 = "SELECT * FROM games where id= '83'";
$mostrar2 = mysqli_query($conn, $c2);
$qtd_arquivos2 = mysqli_num_rows($mostrar2);

$c3 = "SELECT * FROM games where id= '84'";
$mostrar3 = mysqli_query($conn, $c3);
$qtd_arquivos3 = mysqli_num_rows($mostrar3);

$c4 = "SELECT * FROM games where id= '85'";
$mostrar4 = mysqli_query($conn, $c4);
$qtd_arquivos4 = mysqli_num_rows($mostrar4);

$c5 = "SELECT * FROM games where id= '86'";
$mostrar5 = mysqli_query($conn, $c5);
$qtd_arquivos5 = mysqli_num_rows($mostrar5);
echo "<p style='position: absolute; left: 1600px; top: 3px; color: white; font-size: 32px'>".$nome1."</p>";
 ?>

  <?php
  $sql = mysqli_query($conn, "SELECT * FROM usuarios where nickname = '$nome1'");
  while($aux = mysqli_fetch_assoc($sql)) {
    $foto = $aux['foto'];
  }
   ?>
   <img id="foto" style="top: 3px; left: 1528px;" src="upload/<?= $foto;?>" />


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Loja</title>
  </head>
  <body>

       <div class="modal fade"  id="exampleModal"  tabindex="-1"    role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
         <div class="modal-dialog" role="document">
          <div class="modal-content">
                           <!-- Modal heading -->
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"aria-label="Close">
               <span aria-hidden="true">   ×</span> </button>
                           </div>

                           <!-- Modal body with image -->
                           <div class="modal-body">
                                   <img id="imgcarr" src="upload/eldeprint1.png" /></div></div></div> </div>


    <div id="teste" class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
<form action="pag.php" method="post">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">


            <?php
            while($dados = mysqli_fetch_array($mostrar1)){
               $arquivo5 = $dados['carrous'];
            ?>
            <?php }?>
            <?php

            $sql = mysqli_query($conn, "SELECT * FROM games where id= '103'");
            while($aux = mysqli_fetch_assoc($sql)) {
              echo "<p style='left: 970px; top: 16px' id='texto'>".$aux["nome"]."</p>";
              echo "<p style='left: 1365px; top: 365px' id='texto'>".$aux["preco"]."</p>";
            }
             ?>

            <img id="img1"  src="upload/<?= $arquivo5;?>" />
            <input type="text"  id="caixainvisivel" name="nomejogo" value="Brimstone Brawlers">
            <input type="text"  id="caixainvisivel" name="imagemjogo" value="brimbiblio.png">
            <input type="submit" style="position: absolute; top: 0px; left: 212px;" id="carr" name="id" value="103">
          </div>
          <div class="item">

            <?php
            while($dados = mysqli_fetch_array($mostrar2)){
               $arquivo5 = $dados['carrous'];
            ?>
            <?php }?>

            <?php
            $sql = mysqli_query($conn, "SELECT * FROM games where id= '83'");
            while($aux = mysqli_fetch_assoc($sql)) {
              echo "<p style='left: 970px; top: 16px' id='texto'>".$aux["nome"]."</p>";
              echo "<p style='left: 1400px; top: 365px' id='texto'>".$aux["preco"]."</p>";
            }
             ?>
          <img id="img1"  src="upload/<?= $arquivo5;?>" />

          <input type="submit" style="position: absolute; top: 0px; left: 212px;" id="carr" name="id" value="83">
          <input type="text"  id="caixainvisivel" name="nomejogo" value="Elder Souls">
          <input type="text"  id="caixainvisivel" name="imagemjogo" value="eldebiblio.png">
          <button id="inv" style="position:absolute; top: 100px; left: 955px; width: 270px; height:120px" type="button" class="btn btn-primary"   data-toggle="modal"   data-target="#exampleModal">Click1</button>
</form>
          </div>

          <div class="item">
            <?php

            while($dados = mysqli_fetch_array($mostrar3)){
               $arquivo5 = $dados['carrous'];
            ?>
            <?php }?>

            <img id="img1"  src="upload/<?= $arquivo5;?>" />
            <input type="submit" style="position: absolute; top: 0px; left: 212px;" id="carr" name="id" value="84">
            <?php

            $sql = mysqli_query($conn, "SELECT * FROM games where id= '84'");
            while($aux = mysqli_fetch_assoc($sql)) {
              echo "<p style='left: 970px; top: 16px' id='texto'>".$aux["nome"]."</p>";
              echo "<p style='left: 1400px; top: 365px' id='texto'>".$aux["preco"]."</p>";
            }
             ?>
             <input type="text"  id="caixainvisivel" name="nomejogo" value="Eteria Adventures">
             <input type="text"  id="caixainvisivel" name="imagemjogo" value="eterbiblio.png">
          </div>

          <div class="item">
            <?php
            while($dados = mysqli_fetch_array($mostrar4)){
               $arquivo5 = $dados['carrous'];
            ?>
            <?php }?>

            <img id="img1"  src="upload/<?= $arquivo5;?>" />
            <?php

            $sql = mysqli_query($conn, "SELECT * FROM games where id= '85'");
            while($aux = mysqli_fetch_assoc($sql)) {
              echo "<p style='left: 970px; top: 16px' id='texto'>".$aux["nome"]."</p>";
              echo "<p style='left: 1365px; top: 365px' id='texto'>".$aux["preco"]."</p>";
            }
             ?>
             <input type="text"  id="caixainvisivel" name="nomejogo" value="Nanotale">
             <input type="text"  id="caixainvisivel" name="imagemjogo" value="nanotalebiblio.png">
             <input type="submit" style="position: absolute; top: 0px; left: 212px;" id="carr" name="id" value="85">
          </div>

          <div class="item">
            <?php
            while($dados = mysqli_fetch_array($mostrar5)){
               $arquivo5 = $dados['carrous'];
            ?>
            <?php }?>
          <img id="img1"  src="upload/<?= $arquivo5;?>" />
          <?php
          $sql = mysqli_query($conn, "SELECT * FROM games where id= '86'");
          while($aux = mysqli_fetch_assoc($sql)) {
            echo "<p style='left: 970px; top: 16px' id='texto'>".$aux["nome"]."</p>";
            echo "<p style='left: 1400px; top: 365px' id='texto'>".$aux["preco"]."</p>";
          }
           ?>
           <input type="submit" style="position: absolute; top: 0px; left: 212px;" id="carr" name="id" value="86">
           <input type="text"  id="caixainvisivel" name="nomejogo" value="Unbound Worlds Apart Prologue">
           <input type="text"  id="caixainvisivel" name="imagemjogo" value="unbobiblio.png">
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</form>

<div id="fundo1"></div>
<div id="fundo2"></div>
<br/>

<form class="rodabot" action="login.php" method="post">
<input type="submit" id="deslogar" value="">
</form>

<div>
  <form class="botinv1" action="pesquisar.php" method="post">
  <input type="submit" id="botinv1" style="top: 30px; left: 450px" value="Loja">
</form>

<form class="botinv1" action="biblioteca.php" method="post">
<input type="submit" id="botinv1" style="top: 30px; left: 640px"  value="Biblioteca">
</form>

  <form class="botinv1" action="comunidade.php" method="post">
  <input type="submit" id="botinv1" style="top: 30px; left: 920px" value="Comunidade">
</form>

<form class="botinv1" action="perfil_exibe.php" method="post">
<input type="submit" id="botinv1" style="top: 30px; left: 1250px" value="Perfil">
</form>
  </div>


<!--PARTE DO RODAPE-->
<div id="rodape">
<font> <p id="links" for="teste">LINKS</p></font>
<font> <p id="siga" for="teste">SIGA-NOS</p></font>
<font> <p id="priva" for="teste">PRIVACIDADE</p></font>

<form class="rodabot" action="perguntas.php" method="post">
<input type="submit" id="rodabot" style="top: 100px; left: 72px" value="Perguntas Frequentes">
</form>

<form class="rodabot" action="contato.php" method="post">
<input type="submit" id="rodabot" style="top: 175px; left: 72px" value="Entre em contato">
</form>

<form class="rodabot" action="termos.php" method="post">
<input type="submit" id="rodabot" style="top: 250px; left: 72px" value="Termos de uso">
</form>

<form class="rodabot" action="https://discord.gg/nH4rcHkF7j" target="_blank" method="post">
<input type="submit" id="rodabot" style="top: 100px; left: 920px" value="Discord">
<img id="disc" src="front/img/discord.png" alt="some text" width=60 height=60>
</form>

<form class="rodabot" action="https://twitter.com/d_felipe13" method="post">
<input type="submit" id="rodabot" style="top: 175px; left: 920px" value="Twitter">
<img id="twit" src="front/img/twitter.png" alt="some text" width=45 height=45>
</form>

<form class="rodabot" action="https://discord.gg/nH4rcHkF7j" method="post">
<input type="submit" id="rodabot" style="top: 250px; left: 920px" value="Facebook">
<img id="faceb" src="front/img/facebook.png" alt="some text" width=40 height=40>
</form>

<form class="rodabot" action="pravacidade.php" method="post">
<input type="submit" id="rodabot" style="top: 100px; left: 1583px" value="Políticas">
</form>
</div>

<form class="form-inline" method="GET" action="pesquisar.php">
    <div class="form-group">
      <label for="exampleInputName2"></label>
      <input type="text" name="pesquisar" class="form-control" id="exampleInputName2" placeholder="Digitar...">
    </div>
    <button type="submit" class="btn btn-default" id="botton2">Pesquisar</button>
  </form>
<div id="todomundo">
  <form action="pag.php" method="post">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM games where nome LIKE '%$valor_pesquisar%'");
        while($aux = mysqli_fetch_assoc($sql)){
        echo "<p style='left: 640px; top: 1510px'  id='texto2'>".$aux["nome"]."</p>";
        echo "<p style='left: 940px; top: 1510px' id='texto2'>".$aux["preco"]."</p>";
                $loja1 = $aux['loja'];
                }
                ?>
                <img id="imagemps" src="upload/<?=$loja1;?>" />
       </form>
</div>

<style>
/*PARTE DO RODAPE */
#todomundo{
position: absolute;
top: -350px;
left: -450px;
}


#bt1{
  width: 450px;
  height: 300px;
  border-radius: 5% 5% / 5% 5%;
  overflow: hidden;
  background-color: Transparent;
  border-color: Transparent;
  color: Transparent;
}

#caixainvisivel{
  width: 0px;
  height: 0px;
  overflow: hidden;
  background-color: Transparent;
  border-color: Transparent;
  color: Transparent;
}

#imgcarr{
  height: 500px;
  width: 750px;
}

#foto{
  position: absolute;
  height: 41px;
  width: 54px;
}


#inv{
  height: 500px;
  width: 750px;
  overflow: hidden;
  background-color: Transparent;
  border-color: Transparent;
  color: Transparent;
}

.modal-content{
  width: 785px;
  height: 600px;
  top: 160px;
  left: -100px;
}
.btn-primary{
  overflow: hidden;
  background-color: Transparent;
  border-color: Transparent;
  color: Transparent;
}
#exampleModal{
  background-color: rgba(0, 0, 0, 0.86);
  overflow: hidden;
  background-color: Transparent;
  border-color: Transparent;
  color: Transparent;
}

#carr{
  width: 730px;
  height: 500px;
  overflow: hidden;
  background-color: Transparent;
  border-color: Transparent;
  color: Transparent;
}

#texto{
   position: absolute;
   font-family:arial,helvetica;
 font-size: 40px;
 line-height: 53px;
 color: #FFFFFF;
  }

  #imagens{
    position: absolute;
width: 450px;
height: 300px;
border-radius: 5% 5% / 5% 5%;
  }

#faceb{
  position: absolute;
  top: 245px;
  left: 871px;
}

#twit{
  position: absolute;
  top: 167px;
  left: 868px;
}

#disc{
  position: absolute;
  top: 85px;
  left: 860px;
}

#rodabot{
  position: absolute;
  background-color: Transparent;
  border-color: Transparent;
  border: none;
  cursor:pointer;
  overflow: hidden;
  outline:none;
  color: white;
    font-size: 25px;
}

#rodape{
position: absolute;
  background-color: #030013;
top: 4100px;
left: 0px;
width: 1864px;
height: 350px;
}

#links{
position: absolute;
font-family: Arial;
font-style: normal;
font-weight: 600;
font-size: 29px;
color: #FFFFFF;
top: 7px;
left: 75px;
}

#priva{
position: absolute;
font-family: Arial;
font-style: normal;
font-weight: 600;
font-size: 29px;
color: #FFFFFF;
top: 7px;
left: 1585px;
}

#siga{
position: absolute;
font-family: Arial;
font-style: normal;
font-weight: 600;
font-size: 29px;
color: #FFFFFF;
top: 7px;
left: 870px;
}

#cont{
position: absolute;
font-family: Arial;
font-style: normal;
font-weight: 600;
font-size: 29px;
color: #FFFFFF;
top: 7px;
left: 1585px;
}

#deslogar{
  position: absolute;
  top: 8px;
  left: 1475px;
  width: 35px;
  height: 30px;
  overflow: hidden;
  background-color: Transparent;
  border-color: Transparent;
  color: Transparent;
  }

#botinv1{
    position: absolute;
    background-color: Transparent;
    border-color: Transparent;
    color: white;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
    font-size: 40px;
    text-shadow: 2px 2px black;
    }

.container{
  position: absolute;
  top: 180px;
  left: 30px;
  width: 1800px;
  height: 500px;
}

#fundo1{
   position: absolute;
   width: 100%;
   max-width: 1920px;
   height: 100%;
    max-height: 1800px;
    top: 0px;
    left: 0px;
background-image: url("front/img/loja.png");
background-size: 100% 100%;
z-index: -1;
  }
  #fundo2{
    position: absolute;
    background-color: #060027;
    top: 900px;
    left: 0px;
    width: 1863px;
    height: 3200px;
  }
  #pesquisa{
    position: absolute;
    top: 56px;
    left: 1467px;
    width: 350px;
    height: 38px;
    font-size: 25px;
  }
  #exampleInputName2{
      position:absolute;
      top: 60px;
      left: 1500px;
    }
    #botton2{
      position:absolute;
      top: 60px;
      left: 1700px;
    }
    #imagemps{
        position: absolute;
        left:610px;
    top:1200px;
        width: 450px;
        height: 300px;
        border-radius: 5% 5% / 5% 5%;
    }
    #texto2{
     position: absolute;
     font-family:arial,helvetica;
     font-size: 30px;
     line-height: 53px;
     color: #FFFFFF;
     width: 500px;
      }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js%22%3E</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
  </body>
</html>
