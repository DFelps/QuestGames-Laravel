<?php include_once("conexao.php");
session_start();
$nome1 = $_SESSION['caixa'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div id="fundo1"></div>
<div id="fundo2"></div>
<div id="posicao">
<?php
$sql = mysqli_query($conn, "SELECT * FROM biblioteca where nickname ='$nome1'");
while($aux = mysqli_fetch_assoc($sql)) {
  $arquivo = $aux['biblioimg'];
  echo "<img style='padding-right: 150px; padding-bottom: 155px;' src='upload/$arquivo'/>";
}
 ?>
</div>

<div id="textoposi">
 <?php
 $sql = mysqli_query($conn, "SELECT * FROM biblioteca where nickname ='$nome1'");
 while($aux = mysqli_fetch_assoc($sql)) {
   echo "<p style='color: white; font-size: 24px; padding-left: 270px; padding-bottom: 437px'>".$aux["games"]."</p>";
 }
  ?>
</div>

  <?php
  $sql = mysqli_query($conn, "SELECT * FROM usuarios where nickname = '$nome1'");
  while($aux = mysqli_fetch_assoc($sql)) {
    $foto = $aux['foto'];
  }
  echo "<p style='position: absolute; left: 1600px; top: -27px; color: white; font-size: 32px'>".$nome1."</p>";
   ?>
   <img id="foto" style="top: 3px; left: 1528px;" src="upload/<?= $foto;?>" />

  </div>

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

  <a id="down" style="top: 800px; left: 236px" href="baixar/Hero.zip" download>Download</a>
  <a id="down" style="top: 800px; left: 650px" href="baixar/Hero.zip" download>Download</a>
  <a id="down" style="top: 800px; left: 1093px" href="baixar/Hero.zip" download>Download</a>
  <a id="down" style="top: 800px; left: 1505px" href="baixar/Hero.zip" download>Download</a>


<style>
/*PARTE DO RODAPE */


#botinv2{
    position: absolute;
    background-color: #010B2C;
    color: white;
    border: none;
    cursor:pointer;
    outline:none;
    font-size: 40px;
    text-shadow: 2px 2px black;
    top: 80px;
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
        top: 50px;
        }

#down{
  position: absolute;
  width: 35px;
  height: 30px;
  color: white;
  font-size: 25px;
  z-index: 1000;
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
    }

#foto{
  position: absolute;
  height: 41px;
  width: 54px;
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
top: 1389px;
left: 0px;
width: 1864px;
height: 355px;
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


#fundo1{
   position: absolute;
   width: 100%;
   max-width: 1920px;
   height: 100%;
    max-height: 1800px;
    top: 0px;
    left: 0px;
background-image: url("front/img/biblioteca.png");
background-size: 100% 100%;
z-index: -1;
  }
  #fundo2{
     position: absolute;
     height: 450px;
     width: 1864px;
      top: 939px;
      left: 0px;
  background-color: #010B2C;
    }
  #posicao{
     position: absolute;
     top: 350px;
     left: 150px;
     display: flex;
     flex-wrap: wrap;
     z-index:1000;
    }

    #textoposi{
       position: absolute;
       top: 720px;
       left: -35px;
       display: flex;
       flex-wrap: wrap;
      }


</style>
  </body>
</html>
