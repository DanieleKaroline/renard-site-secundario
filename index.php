<?php
include("functions/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Renard</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Host Cloud Template

https://templatemo.com/tm-541-host-cloud

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Renard</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Plataformas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
            </ul>
          </div>
          <div class="functional-buttons">
            <ul>
              <li><a href="cadastro.php">Cadastre-se!</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
   <!-- Banner Starts Here -->
   
   <div class="banner">
      <h1>Renard</h1>
<h4 style="color: #ffff;text-align: center; font-family: 'Lucida Console', Courier New', monospace;">Sistema de monitoramento e auxílio para melhorar o seu dia a dia!</h4>
<style>
h1{
  font-size:100px;
  text-align: center;
  color: #ffff;text-align: center; 
  font-family: 'Lucida Console', 'Courier New', monospace;
}
h4{
  color: #ffff;
  text-align: center; 
  font-family: 'Lucida Console', 'Courier New', monospace;
}
</style>
            
              
              <div id="search-section">
              	<form id="suggestion_form">
                <div class="searchText">
                  
                  <ul>
                  <!--NAO TIRAR ESSE UL DAQUI-->
                  </ul>

                </div>
                </form>
               <div class="advSearch_chkbox">
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Team Starts Here -->
  <div class="team-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading">
            <?php 
        $query5 = mysqli_query($conexao,"SELECT * FROM conteudo  WHERE id = 6;");        
        while($exibe5 = mysqli_fetch_array($query5)) { 
?>
              <span>Equipe</span>
              <h2><?php echo $exibe5[1]?></h2>
              <p><?php echo $exibe5[2]?></p>
            </div>
          </div>


          <?php 
        $query6 = mysqli_query($conexao,"SELECT  conteudo.id, conteudo.titulo, conteudo.corpo, conteudo.id_imagem, imagem.nome FROM conteudo INNER JOIN imagem ON conteudo.id = imagem.conteudo_id WHERE id_link = 9 ORDER BY id DESC LIMIT 3;");        
        while($exibe6 = mysqli_fetch_array($query6)) { 
?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="assets/images/<?php echo $exibe6[4]?>" alt="">
              <div class="down-content">
                <h4><?php echo $exibe6[1]; ?></h4>
                <span><?php echo $exibe6[2]; ?></span>
              </div>
            </div>
          </div>

        <?php } ?>
        <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team Ends Here -->



   <!-- Services Starts Here -->
   <div class="services-section services-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Plataformas</span>
             <?php 
                 $query = mysqli_query($conexao,"SELECT * FROM conteudo WHERE id = 9;");        
                 while($exibe = mysqli_fetch_array($query)) { 
            ?>
              <h2><?php echo $exibe[1];?></h2>
              <p><?php echo $exibe[2];?></p>
            </div>
                 <?php } ?>
          </div>
          <?php 
      	$query1 = mysqli_query($conexao,"SELECT conteudo.id,conteudo.titulo, conteudo.corpo, conteudo.id_imagem, imagem.nome FROM conteudo INNER JOIN imagem ON conteudo.id = imagem.conteudo_id WHERE conteudo.id_link = 5 ORDER BY conteudo.id DESC LIMIT 3;");
        while($exibe1 = mysqli_fetch_array($query1)) { 
        ?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
            <img src="assets/images/<?php echo $exibe1[4]?>" style="height: 250px;"></i>
            <a href="plataforma.php?idb=<?php echo $exibe1[0] ?>">

        <h4>
          <?php echo $exibe1[1]?>
      </h4>
    </a>
            </div>
          </div>
          <?php } ?>
           </div>
      </div>
    </div>
        
    <!-- Services Ends Here -->



   

   


    <!-- Testimonials Starts Here -->
    <div class="testimonials-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Mensagens</span>
              <h4>Recebidos de usuários:</h4>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <div class="owl-testimonials owl-carousel">
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Adorei o projeto iria ajudar muito a família."</p>
                <h5>Anônimo</h5>
                <span>Enviado pela pesquisa de viabilidade no inicio do projeto.</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Seria ótimo porque as pessoas acham que é só birra."</p>
                <h4>Anônimo</h4>
                <span>Enviado pela pesquisa de viabilidade no inicio do projeto.</span>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonials Ends Here -->

   
       </div>
       </div>

       
       <div class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              <form id="contact" action="functions/inserir_contato.php" method="post">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="nome" type="text" id="name" placeholder="Nome" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" id="email" placeholder="Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="assunto" type="text" id="subject" placeholder="Assunto">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="mensagem" rows="6" id="message" placeholder="Mensagem" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button">Enviar</button>
                    </fieldset>
                  </div>
                </div>
              </form>
          </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span>Localizção e meios de contato.</span>
                <h2>Você também poderá nos contatar pelos meios abaixo:</h2>
             </div>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <ul>
                    <li><i class="fa fa-phone"></i> (13) 3821-7573</li>
                    <li><i class="fa fa-support"></i> renard@gmail.com</li>
                  </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                  <ul>
                    <li><i class="fa fa-envelope"></i>suport@gmail.com</li>
                    <li><i class="fa fa-globe"></i>Registro, SP</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <br><br><br>
    <!-- Contact Us Ends Here -->


  <?php include("footer.php")?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>