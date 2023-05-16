<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Criar conta</title>
  </head>
  <body>
  </body>

  <div id="fundo2"></div>

  <div>
  <svg id="retangulo" style="left: 1150px; top: 310px" width="484" height="72">
    <rect  x="50" y="20" rx="20" ry="20" width="430" height="50"
  </svg></div>
  <div>
  <svg id="retangulo" style="left: 1150px; top: 420px" width="484" height="72">
    <rect  x="50" y="20" rx="20" ry="20" width="430" height="50"
  </svg></div>

  <div>
  <svg id="retangulo" style="left: 1150px; top: 530px" width="484" height="72">
    <rect  x="50" y="20" rx="20" ry="20" width="430" height="50"
  </svg></div>

  <div>
  <svg id="retangulo" style="left: 1150px; top: 640px" width="484" height="72">
    <rect  x="50" y="20" rx="20" ry="20" width="430" height="50"
  </svg></div>

  <div><form id="log" class="log" action="criar_cadastro.php" method="post">
        </div>
  <div id="bots">
    <input type="text" id="caixa" autocomplete="off" name="Nome" required>
    <input type="text" id="caixa2" autocomplete="off"  name="Email" required>
    <input type="password" id="caixa3" autocomplete="off"  name="Senha" required>
    <input type="password" id="caixa4" autocomplete="off"  name="Senha2" required>
  <input type="submit" id="botlog" value="Criar Conta">
  
  </form>

<font face="arial" size="4"><p style="left: 1210px; top: 279px" id="texto" for="teste">Usuário</p></font>
<font face="arial" size="4"><p style="left: 1210px; top: 389px" id="texto" for="teste">E-mail</p></font>
<font face="arial" size="4"><p  style="left: 1210px; top: 499px" id="texto" for="teste">Senha</p></font>
<font face="arial" size="4"><p  style="left: 1210px; top: 609px" id="texto" for="teste">Redigite a senha</p></font>
<font face="arial" size="6"><p  style="left: 1330px; top: 210px; font-weight: 600" id="texto" for="teste">Criar Conta</p></font>


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

  #caixa{
    position: absolute;
    width: 400px;
    height: 30px;
    left: 1210px;
    top: 339px;
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
    top: 450px;
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
  #caixa3{
    position: absolute;
    width: 400px;
    height: 30px;
    left: 1210px;
    top: 560px;
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
  #caixa4{
    position: absolute;
    width: 400px;
    height: 30px;
    left: 1210px;
    top: 670px;
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

  #texto{
  position: absolute;
  width: 300px;
  height: 30px;
  color: white;
  }

  #retangulo{
  position: absolute;
  fill: Transparent;
  stroke-width:1;
  stroke:white;
  z-index: -1;
  }

  #fundo2{
     position: absolute;
     width: 100%;
     max-width: 2880px;
     height: 100%;
      max-height: 1800px;
      top: 0px;
      left: 0px;
  background-image: url("front/img/conectar.png");
  background-size: 100% 100%;
  z-index: -1;
  }

  #botlog{
  position: absolute;
  width: 347px;
  height: 50px;
  top: 780px;
  left: 1255px;
  border-radius: 5px;
  bottom: 0%;
  background-color: hsla(0, 0%, 100%, 0.5);
  color: white;
  }

  .error-validation {
    color: #ff1a1a;
    position: absolute;
    top: 57px;
    font-size: 12px;
  }

  .template {
    display: none;
  }


  </style>
</html>
