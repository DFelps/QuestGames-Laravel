<?php
include_once("conexao.php");
session_start();
$nome1 = $_SESSION['caixa'];

$sql_busca = "SELECT * FROM usuarios where nickname = '$nome1'";
$mostrar = mysqli_query($conn, $sql_busca);
$qtd_arquivos = mysqli_num_rows($mostrar);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Perfil</title>
</head>
<body>
  <div id="fundo2"></div>
  <div id="retangulo"></div>
  <p id="texto" style="top:750px; left: 430px">Capturas de tela</p>
  <img id="pt" style="top:850px; left: 250px" src="front/img/printp1.png" alt="">
  <img id="pt" style="top:1450px; left: 250px" src="front/img/printp2.png" alt="">
  <p id="texto" style="top:750px; left: 1300px">Artes</p>
  <img id="pt" style="top:1450px; left: 1025px" src="front/img/gif1.gif" alt="">
  <img id="pt" style="top:850px; left: 1025px" src="front/img/gif2.gif" alt="">






  <?php
  while($dados = mysqli_fetch_array($mostrar)){
    $arquivo = $dados['foto'];
    ?>
    <img id="img1" src="upload/<?=$arquivo?>" />
  <?php }?>
  <form class="botinv1" action="perfil_atualizar.php" method="post" enctype="multipart/form-data">
  <?php
  $sql = mysqli_query($conn, "SELECT * FROM usuarios where nickname = '$nome1'");
  while($aux = mysqli_fetch_assoc($sql)) {
    echo "<input type='text' id='caixa1' name='Nome' value='".$aux["nome"]."' style='position: absolute; top: 250px; left: 600px'/>";
    echo "<input type='text' id='caixa1' name='Info' value='".$aux["info"]."' style='position: absolute; top: 320px; left: 600px'/>";
    echo "<input type='text' id='caixa1' name='Descricao' value='".$aux["descricao"]."' style='position: absolute; top: 390px; left: 600px'/>";

  }
  $sql = mysqli_query($conn, "SELECT * FROM usuarios where nickname = '$nome1'");
  while($aux = mysqli_fetch_assoc($sql)) {
    $foto = $aux['foto'];
  }
  echo "<p style='position: absolute; left: 1600px; top: -25px; color: white; font-size: 32px'>".$nome1."</p>";
  ?>
  <img id="foto2" style="top: 3px; left: 1528px;" src="upload/<?= $foto;?>" />
  <input type="file" id="foto" name="Foto"/>
  <input type="submit" id="editar" style="position: absolute; top: 265px; left: 1380px; color: white; font-size: 25px" value="Salvar Perfil">
</form>

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
  <div id="fundo1"></div>
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

</body>
<style>

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
top: 1970px;
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

#foto2{
  position: absolute;
  height: 41px;
  width: 54px;
}
#fundo1{
  position: absolute;
  width: 100%;
  max-width: 1920px;
  height: 100%;
  max-height: 1800px;
  top: 0px;
  left: 0px;
  background-image: url("front/img/perfil.png");
  background-size: 100% 100%;
  z-index: -1;
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
#img1{
  position: absolute;
  top: 243px;
  left: 251px;
  width: 296px;
  height: 209px;
  filter: saturate(0%) invert(0%) drop-shadow(0px 0px 0px #0000ff);
}
#texto{
  position: absolute;
  color: white;
  font-size: 32px;
}
#fundo2{
  position: absolute;
  width: 1864px;
  height: 1200px;
  left: 0px;
  top: 770px;
  background: #060027;
}
#retangulo{
  position: absolute;
  width: 1600px;
  height: 1150px;
  left: 140px;
  top: 741px;
  background: rgba(7, 9, 17, 0.75);
  border-radius: 1%;
  border: solid 1px white;
}
#pt{
  position: absolute;
  width: 600px;
  height: 350px;
  border: solid 1px white;
}
#editar{
  position: absolute;
  width: 330px;
  height: 43px;
  border: none;
  cursor:pointer;
  overflow: hidden;
  outline:none;
  background-color: transparent;
}
#caixa1{
  position: absolute;
  width: 330px;
  height: 30px;
  font-size: 20px;
}
#foto{
  position: absolute;
  top: 243px;
  left: 251px;
  width: 300px;
  height: 210px;
  font-size: 20px;
  cursor:pointer;
  overflow: hidden;
  background-color: Transparent;
  border-color: Transparent;
  color: Transparent;
  opacity: 0;
}
</style>
</html>
