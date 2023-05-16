<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Compra</title>
  </head>
  <body>
<div id="fundo1"></div>
<p id="texto" style="top: 105px; left: 60px; font-size: 25px">Formas de Pagamento</p>
<p id="texto" style="top: 147px; left: 60px; font-size: 20px">Selecione uma forma de pagamento para o valor de:</p>
<p id="texto" style="top: 280px; left: 60px; font-size: 20px">Número do cartão:</p>
<p id="texto" style="top: 280px; left: 670px; font-size: 20px">Data de validade:</p>
<p id="texto" style="top: 280px; left: 900px; font-size: 20px">CCV:</p>
<p id="texto" style="top: 470px; left: 60px; font-size: 35px">Dados de cobrança:</p>
<p id="texto" style="top: 550px; left: 60px; font-size: 20px">Nome</p>
<p id="texto" style="top: 550px; left: 320px; font-size: 20px">Sobrenome</p>
<p id="texto" style="top: 550px; left: 670px; font-size: 20px">Cidade</p>
<p id="texto" style="top: 630px; left: 670px; font-size: 20px">Código zip ou postal (CEP)</p>
<p id="texto" style="top: 630px; left: 60px; font-size: 20px">Endereço de cobrança</p>
<p id="texto" style="top: 713px; left: 670px; font-size: 20px">Número de telefone</p>
<p id="texto" style="top: 713px; left: 60px; font-size: 20px">País</p>

<p id="texto" style="top: 105px; left: 1420px; font-size: 25px">Formas de Pagamento</p>
<p id="texto" style="top: 170px; left: 1410px; font-size: 20px; width: 250px; text-align: justify">Nós aceitamos as seguintes formas seguras de pagamento:</p>
<p id="texto" style="top: 430px; left: 1320px; font-size: 20px; width: 450px">Os dados de pagamento enviados são protegidos pela tecnologia de Secure Socket Layer (SSL), certificada por um certificado digital.</p>

<select name="pagamentos" id="pagamentos">
  <option  id="texto2" value="Visa">Visa</option>
  <option id="texto2" value="PayPal">PayPal</option>
  <option id="texto2" value="HyperCard">HyperCard</option>
  <option  id="texto2"value="MasterCard">MasterCard</option>
  <option id="texto2" value="Banco do Brasil">Banco do Brasil</option>
  <option id="texto2" value="Aura">Aura</option>
  <option id="texto2" value="Boleto">Boleto</option>
  <option id="texto2" value="Pix">Pix</option>
  <option id="texto2" value="PagSeguro">PagSeguro</option>
</select>

  <select name="Brasil" id="brasil">
    <option  id="br" value="Brasil">Brasil</option>
</select>

<select name="data1" id="data1">
  <option  id="dt1" value="--">--</option>
  <option  id="dt1" value="1">1</option>
  <option  id="dt1" value="2">2</option>
  <option  id="dt1" value="3">3</option>
  <option  id="dt1" value="4">4</option>
  <option  id="dt1" value="5">5</option>
  <option  id="dt1" value="6">6</option>
  <option  id="dt1" value="7">7</option>
  <option  id="dt1" value="8">8</option>
  <option  id="dt1" value="9">9</option>
  <option  id="dt1" value="11">11</option>
  <option  id="dt1" value="12">12</option>
</select>

<select name="ano1" id="ano1">
  <option  id="a1" value="----">----</option>
  <option  id="a1" value="2021">2021</option>
  <option  id="a1" value="2022">2022</option>
  <option  id="a1" value="2023">2023</option>
  <option  id="a1" value="2024">2024</option>
</select>

  <input type="text" id="caixa1" name="" value="">
  <input type="text" id="caixa2" name="" value="">
  <input type="text" id="caixa3" name="" value="">
    <input type="text" id="caixa4" name="" value="">
    <input type="text" id="caixa5" name="" value="">
    <input type="text" id="caixa6" name="" value="">
    <input type="text" id="caixa7" name="" value="">
    <input type="text" id="caixa8" name="" value="">
<input type="submit" id="bot1" name="" value="Voltar">
<input type="submit" id="bot2" name="" value="Continuar">





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

</style>

<style>
#caixa1{
position: absolute;
width: 470px;
height: 30px;
top: 345px;
left: 60px;
}
#caixa2{
position: absolute;
width: 200px;
height: 30px;
top: 600px;
left: 60px;
}
#caixa3{
position: absolute;
width: 200px;
height: 30px;
top: 600px;
left: 320px;
}
#caixa4{
position: absolute;
width: 460px;
height: 30px;
top: 687px;
left: 60px;
}
#caixa5{
position: absolute;
width: 60px;
height: 30px;
top: 340px;
left: 900px;
}
#caixa6{
position: absolute;
width: 500px;
height: 30px;
top: 600px;
left: 670px;
}
#caixa7{
position: absolute;
width: 500px;
height: 30px;
top: 685px;
left: 670px;
}
#caixa8{
position: absolute;
width: 500px;
height: 30px;
top: 765px;
left: 670px;
}



#bot1{
position: absolute;
width: 100px;
height: 50px;
top: 850px;
left: 60px;
font-size: 20px;
}

#bot2{
position: absolute;
width: 100px;
height: 50px;
top: 850px;
left: 1080px;
font-size: 20px;
}

#brasil{
position: absolute;
width: 469px;
height: 30px;
top: 765px;
left: 60px;
font-size: 17px;
}
#br{
position: absolute;
font-size: 17px;
}

#data1{
position: absolute;
width: 50px;
height: 30px;
top: 345px;
left: 670px;
font-size: 17px;
}

#a1{
position: absolute;
font-size: 17px;
}
#ano1{
position: absolute;
width: 90px;
height: 30px;
top: 345px;
left: 750px;
font-size: 17px;
}
#dt1{
position: absolute;
font-size: 17px;
}


#pagamentos{
position: absolute;
width: 480px;
height: 30px;
top: 222px;
left: 60px;
font-size: 17px;
}
#texto2{
position: absolute;
font-size: 17px;
}

#texto{
position: absolute;
color: #FFFFFF;
}
#fundo1{
   position: absolute;
   width: 100%;
   max-width: 1920px;
   height: 100%;
    max-height: 1800px;
    top: 0px;
    left: 0px;
background-image: url("front/img/compra.png");
background-size: 100% 100%;
z-index: -1;
  }
</style>
  </body>
</html>
