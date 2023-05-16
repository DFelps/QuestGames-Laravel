<?php include_once("conexao.php");
session_start();
$nome1 = $_SESSION['caixa'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comunidade</title>
  </head>
  <body>
<div id="fundo1"></div>
<div id="fundo2"></div>
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

  <?php
  $sql = mysqli_query($conn, "SELECT * FROM usuarios where nickname = '$nome1'");
  while($aux = mysqli_fetch_assoc($sql)) {
    $foto = $aux['foto'];
  }
  echo "<p style='position: absolute; left: 1600px; top: -27px; color: white; font-size: 32px'>".$nome1."</p>";
   ?>
<img id="foto" style="top: 3px; left: 1528px;" src="upload/<?= $foto;?>" />
<div>
  <svg id="retangulo1" width="820" height="850">
    <rect  x="50" y="20" rx="20" width="760" height="800"
  </svg>
      <p id="titulo" style="position: absolute; top: 415px; left: 470px">FlavinPneu</p>
      <img src="front/img/post1.png" style="position: absolute; top: 500px; left: 110px" width=760 height=350>
      <img src="front/img/flavin.png" style="position: absolute; top: 430px; left: 390px; border-width:1px; border-color: white; border-style: solid" width=55 height=55>
      <p id="post" style="position: absolute; top: 895px; left: 155px">Achei algo secreto nesse local do jogo. Lá tem um item extremamente raro que no qual é possível desbloquear um novo costume para o personagem.</p>
      <p id="jogo" style="position: absolute; top: 1100px; left: 380px">OmenExitio</p>
      <img src="upload/omenloja.png" style="position: absolute; top: 1100px; left: 150px; border-width:1px; border-color: white; border-style: solid" width=200 height=100>
</div>

<div>
  <svg id="retangulo2" width="820" height="850">
    <rect  x="50" y="20" rx="20" width="760" height="800"
  </svg>
      <p id="titulo" style="position: absolute; top: 415px; left: 1320px">JovisneyXD</p>
      <img src="front/img/post2.png" style="position: absolute; top: 500px; left: 959px" width=760 height=350>
      <img src="front/img/jovisneyxd.png" style="position: absolute; top: 430px; left: 1240px; border-width:1px; border-color: white; border-style: solid" width=55 height=55>
      <p id="post" style="position: absolute; top: 895px; left: 1000px"></p>
      <p id="jogo" style="position: absolute; top: 1100px; left: 1230px">Nanotale</p>
      <img src="upload/nanoloja.png" style="position: absolute; top: 1100px; left: 1000px; border-width:1px; border-color: white; border-style: solid" width=200 height=100>
</div>

<div>
  <svg id="retangulo3" width="820" height="850">
    <rect  x="50" y="20" rx="20" width="760" height="800"
  </svg>
      <p id="titulo" style="position: absolute; top: 1415px; left: 430px">Baianinho De Mauá</p>
      <img src="front/img/post3.png" style="position: absolute; top: 1500px; left: 110px" width=760 height=350>
      <img src="front/img/raimundo.png" style="position: absolute; top: 1430px; left: 345px; border-width:1px; border-color: white; border-style: solid" width=55 height=55>
      <p id="post" style="position: absolute; top: 1895px; left: 155px">Jogo é bom.</p>
      <p id="jogo" style="position: absolute; top: 2105px; left: 380px">Calico</p>
      <img src="upload/caliloja.png" style="position: absolute; top: 2095px; left: 150px; border-width:1px; border-color: white; border-style: solid" width=200 height=100>
</div>

<div>
  <svg id="retangulo4" width="820" height="850">
    <rect  x="50" y="20" rx="20" width="760" height="800"
  </svg>
      <p id="titulo" style="position: absolute; top: 1415px; left: 1290px">ShaolinMataPorco</p>
      <img src="front/img/post4.png" style="position: absolute; top: 1500px; left: 959px" width=760 height=350>
      <img src="front/img/shaolinmat.png" style="position: absolute; top: 1430px; left: 1210px; border-width:1px; border-color: white; border-style: solid" width=55 height=55>
      <p id="post" style="position: absolute; top: 1895px; left: 1000px">Cuidado, me perdi nesse lugar ;-;</p>
      <p id="jogo" style="position: absolute; top: 2100px; left: 1230px">Eldest Souls</p>
      <img src="upload/eldeloja.png" style="position: absolute; top: 2095px; left: 1000px; border-width:1px; border-color: white; border-style: solid" width=200 height=100>
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

<form class="rodabot" action="https://discord.gg/GS8V5CjA" target="_blank" method="post">
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
<style>
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
top: 2350px;
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
#titulo{
  position: absolute;
  font-size: 30px;
  color: white;
}
#jogo{
  position: absolute;
  font-size: 30px;
  width: 300px;
  color: white;
}
#post{
  position: absolute;
  font-size: 30px;
  width: 680px;
  color: white;
}
#foto{
  position: absolute;
  height: 41px;
  width: 54px;
}
#retangulo1{
position: absolute;
fill: #20273F;
z-index: -1;
top: 400px;
left: 60px;
}
#retangulo2{
position: absolute;
fill: #20273F;
z-index: -1;
top: 400px;
left: 910px;
}
#retangulo3{
position: absolute;
fill: #20273F;
z-index: -1;
top: 1400px;
left: 60px;
}
#retangulo4{
position: absolute;
fill: #20273F;
z-index: -1;
top: 1400px;
left: 910px;
}

#botinv2{
    position: absolute;
    background-color: #010B2C;
    color: white;
    border: none;
    cursor:pointer;
    outline:none;
    font-size: 40px;
    text-shadow: 2px 2px black;
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
#fundo1{
   position: absolute;
   width: 100%;
   max-width: 1920px;
   height: 100%;
    max-height: 1800px;
    top: 0px;
    left: 0px;
background-image: url("front/img/comunidade.png");
background-size: 100% 100%;
z-index: -1;
  }
  #fundo2{
    position: absolute;
    background-color: #010B2C;
    top: 900px;
    left: 0px;
    width: 1863px;
    height: 1450px;
    z-index: -1;
  }
</style>
  </body>
</html>
