<!DOCTYPE html>
<html lang="pt-br">
<?php 
include("functions/conexao.php")

?>
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
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Sobre</a>
              </li>
              <li class="nav-item active">
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
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Nossas Plataformas</h1>
            <p><a href="index.html">Home</a> / <span>Plataformas</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->

    <br><br>
    <center>
    <?php 
      	$query3 = mysqli_query($conexao,"SELECT conteudo.id,conteudo.titulo, conteudo.corpo, conteudo.id_imagem, imagem.nome FROM conteudo INNER JOIN imagem ON conteudo.id = imagem.conteudo_id WHERE conteudo.id =".$_GET['idb']);
        while($exibe3 = mysqli_fetch_array($query3)) { 
        ?>
    <div class="card mb-3">
    <center>
 <img src="assets/images/<?php echo $exibe3[4];?>" class="" width="250px" alt="...">    </center>

  <div class="card-body">
    <h5 class="card-title"><?php echo $exibe3[1];?></h5>
    <p class="card-text"><?php echo $exibe3[2];?></p>
  </div>
</div>

<?php } ?>
    

<!--galeria-->
<?php 
         $query2 = mysqli_query($conexao, "SELECT * FROM plataforma_img WHERE id_conteudo = ".$_GET['idb']);

              if(mysqli_num_rows($query2) < 1){
                   echo "Não há imagens na galeria<hr>"; 
                                     }
             while($exibe2 = mysqli_fetch_array($query2)){
									?>
                  <div class="card" style="width: 18rem;">
  <img src="assets/images/<?php echo $exibe2[2]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><?php echo $exibe2[3]?></p>
  </div>
</div>
<br>
             <?php } ?>
</center>
  
<br>
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