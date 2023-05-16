<?php
include_once("conexao.php");
session_start();
$nome1 = $_SESSION['caixa'];
$id = $_SESSION['id'];
$nomejogo = $_SESSION['nomejogo'];
$imagemjogo = $_SESSION['imagemjogo'];

$sql_busca = "SELECT * FROM games where id= '$id'";
$mostrar = mysqli_query($conn, $sql_busca);
$qtd_arquivos = mysqli_num_rows($mostrar);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                                  <img id="imgcarr" src="upload/brimprint1.png" /></div></div></div> </div>
                          <p id="texto" style="top: 550px; left: 165px; font-size: 25px">Path Note</p>
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

      <div class="col-md-12">
                 <?php
                 while($dados = mysqli_fetch_array($mostrar)){
                    $arquivo = $dados['fundo'];
                    $arquivo2 = $dados['print1'];
                    $arquivo3 = $dados['print2'];
                    $arquivo4 = $dados['print3'];
                 ?>
                 <img id="img1" src="upload/<?=$arquivo?>" />
                 <img id="img2"  src="upload/<?=$arquivo2?>" />
                 <img id="img3"  src="upload/<?=$arquivo3?>" />
                 <img id="img4"  src="upload/<?=$arquivo4?>" />
                 <?php }?>
             </div>
<button id="inv" style="position:absolute; top: 510px; left: 1605px; width: 230px; height:100px" type="button" class="btn btn-primary"   data-toggle="modal"   data-target="#exampleModal">Click1</button>
             <?php
             if(isset($msg) && $msg != false){
                 echo "<p>$msg</p>";
             }
             ?>
             <?php
             if(isset($msg) && $msg != false){
                 echo "<p>$msg</p>";
             }
             ?>
             <br />
             <form class="rodabot" action="login.php" method="post">
             <input type="submit" id="deslogar" value="">
             </form>
<?php
$sql = mysqli_query($conn, "SELECT * FROM games where id= '$id'");
while($aux = mysqli_fetch_assoc($sql)) {
  echo "<p id='nome'>".$aux["nome"]."</p>";
  echo "<p id='preco'>".$aux["preco"]."</p>";
  echo "<p id='descricao'>".$aux["descricao"]."</p>";
  echo "<p id='path'>".$aux["path"]."</p>";
}
 ?>
<form action="adcbiblio.php" method="post">
    <input id="botao" type="submit" name="" value="">
</form>

        </body>



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
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM usuarios where nickname = '$nome1'");
    while($aux = mysqli_fetch_assoc($sql)) {
      $foto = $aux['foto'];
    }
    echo "<p style='position: absolute; left: 1600px; top: 3px; color: white; font-size: 32px'>".$nome1."</p>";
     ?>
     <img id="foto" style="top: 3px; left: 1528px;" src="upload/<?= $foto;?>" />


<style>
.dropdown {
    position: relative;
    display: inline-block;
    top: -650px;
    left: 1250px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    top: 50px;
    left: -30px;
}

#path{
  position: absolute;
  top: 600px;
  left: 35px;
  width: 380px;
  height: 30px;
  color: white;
  font-size: 20px;
  text-align: justify;
  }
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
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
    top: -257px;
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
        top: -257px;
        }
        #botao{
          position: absolute;
          height: 30px;
          width: 250px;
          top: 450px;
          left: 1350px;
          overflow: hidden;
          background-color: Transparent;
          border-color: Transparent;
          color: Transparent;
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
#foto{
  position: absolute;
  height: 41px;
  width: 54px;
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
    #inv{
      height: 200px;
      width: 550px;
      overflow: hidden;
      background-color: Transparent;
      border-color: Transparent;
      color: Transparent;
    }

    .modal-content{
      width: 785px;
      height: 600px;
      top: 160px;
      left: -140px;
    }
    .btn-primary{
      overflow: hidden;
      background-color: Transparent;
      border-color: Transparent;
      color: Transparent;
    }
    #imgcarr{
      height: 500px;
      width: 750px;
    }
    #exampleModal{
      background-color: rgba(0, 0, 0, 0.86);
      overflow: hidden;
      background-color: Transparent;
      border-color: Transparent;
      color: Transparent;
    }

#nome{
   position: absolute;
   font-family:arial,helvetica;
 font-size: 50px;
 line-height: 53px;
 color: #FFFFFF;
 top: 362px;
 left: 75px;
text-shadow: 2px 2px black;
  }
  #preco{
     position: absolute;
     font-family:arial,helvetica;
   font-size: 25px;
   line-height: 53px;
   color: #FFFFFF;
   top: 438px;
   left: 1360px;
    }
    #descricao{
       position: absolute;
       font-family:arial,helvetica;
     font-size: 25px;
     line-height: 53px;
     color: #FFFFFF;
     top: 535px;
     left: 550px;
     width: 850px;
     text-align: justify;
      }

  #texto{
     position: absolute;
     font-family:arial,helvetica;
   font-size: 40px;
   line-height: 53px;
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
background-image: url("front/img/pagina1.png");
background-size: 100% 100%;
z-index: -1;
  }
  #img1{
     position: absolute;
      top: 98px;
      left: 0px;
      width: 1864px;
      height: 333px;
    }
    #img2{
       position: absolute;
        top: 513px;
        left: 1609px;
        width: 225px;
        height: 94px;
      }
      #img3{
         position: absolute;
          top: 652px;
          left: 1609px;
          width: 225px;
          height: 94px;
        }
        #img4{
           position: absolute;
            top: 791px;
            left: 1609px;
            width: 225px;
            height: 94px;
          }


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
            top: 924px;
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
</style>
  </body>
</html>
