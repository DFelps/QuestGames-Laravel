<?php// Limpa a sessão
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);

header("Location: login.php");?>
<!DOCTYPE html>
<!--PARTE DO LOGIN-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sessão</title>
<link rel="stylesheet" type="text/css" href="front/css/login.css">
  </head>
  <body>
  </body>

  <div id="fundo1"></div>

<div><form id="log" action="index.php" method="post">
  <input type="text" id="caixa1" autocomplete="off"  name="caixa" value="" required>
      <input type="password" id="caixa2" name="caixa2" value="" required>
      </div>
<div id="bots">
<input type="submit" id="botlog" value="Login">
</form>


<input type="checkbox" id="lembrar">
<font face="arial" size="3"><p id="lembrar_usu" for="teste">Lembrar usuário</p></font>

<form class="" action="index.html" method="post">
<input type="submit" id="esqueceu" value="Esqueceu a senha?">
</form>
</div>

<font face="helvetica" size="4"><p id="usuario" for="teste">Usuário</p></font>
<font face="helvetica" size="4"><p id="volta" for="teste">Bem vindo de volta!</p></font>
<font face="helvetica" size="4"><p id="conecte" for="teste">Conecte em sua conta</p></font>
<font face="helvetica" size="4"><p id="senha" for="teste">Senha</p></font>
<font face="helvetica" size="4"><p id="conta" for="teste">Não tem uma conta?</p></font>

<form class="criarc" action="criar_conta.php" method="post">
<input type="submit" id="criar" value="Crie uma gratuitamente">
</form>

<div>
<svg id="retangulo1" width="484" height="72">
  <rect x="50" y="20" rx="20" ry="20" width="430" height="50"
</svg></div>

<svg id="retangulo2" width="484" height="72">
  <rect x="50" y="20" rx="20" ry="20" width="430" height="50"
</svg>
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

<style>
/*PARTE DO RODAPE */

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
top: 939px;
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



/*PARTE DO LOGIN */
#criar{
  position: absolute;
  top: 855px;
  left: 1415px;
  background-color: Transparent;
  border-color: Transparent;
  border: none;
  cursor:pointer;
  overflow: hidden;
  outline:none;
  color: rgb(42, 152, 222);
    font-size: 20px;
}

#conta{
  position: absolute;
  width: 300px;
  height: 30px;
  left: 1245px;
  top: 840px;
  color: white;
}

#retangulo1{
position: absolute;
fill: Transparent;
stroke-width:1;
stroke:white;
left: 1150px;
top: 390px;
z-index: -1;
}

#retangulo2{
position: absolute;
fill: Transparent;
stroke-width:1;
stroke:white;
left: 1150px;
top: 520px;
z-index: -1;
}

#usuario{
position: absolute;
width: 300px;
height: 30px;
left: 1210px;
top: 365px;
color: white;
}
#conecte{
position: absolute;
width: 350px;
height: 30px;
left: 1234px;
top: 296px;
color: white;
  font-size: 32px;
}
#volta{
position: absolute;
width: 300px;
height: 30px;
left: 1185px;
top: 270px;
color: white;
}

#senha{
position: absolute;
width: 300px;
height: 30px;
left: 1210px;
top: 494px;
color: white;
}

#caixa1{
position: absolute;
width: 400px;
height: 30px;
left: 1210px;
top: 419px;
background-color: Transparent;
border-color: Transparent;
border: none;
cursor:pointer;
overflow: hidden;
caret-color: white;
outline:none;
color: white;
font-size: 23px;
}

#caixa2{
position: absolute;
width: 400px;
height: 30px;
left: 1210px;
top: 549px;
background-color: Transparent;
border-color: Transparent;
border: none;
cursor:pointer;
overflow: hidden;
caret-color: white;
outline:none;
color: white;
font-size: 23px;
}

#esqueceu{
  position: absolute;
  top: 620px;
  left: 1478px;
  background-color: Transparent;
  border-color: Transparent;
  color: rgb(42, 152, 222);
  border: none;
  cursor:pointer;
  overflow: hidden;
  outline:none;
  font-size: 17px;
}

#lembrar_usu{
  position: absolute;
  top: 607px;
  left: 1237px;
  color: white;
}
#lembrar{
  position: absolute;
  width: 20px;
  height: 20px;
  top: 619px;
  left: 1200px;
}
#botlog{
position: absolute;
width: 347px;
height: 50px;
top: 700px;
left: 1255px;
border-radius: 5px;
bottom: 0%;
background-color: hsla(0, 0%, 100%, 0.5);
color: white;
}
#fundo1{
   position: absolute;
   width: 100%;
   max-width: 1920px;
   height: 100%;
    max-height: 1800px;
    top: 0px;
    left: 0px;
background-image: url("front/img/conectar.png");
background-size: 100% 100%;
z-index: -1;
  }
</style>

</html>
