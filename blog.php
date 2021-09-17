<!DOCTYPE html>
<html lang="pt-br">
<?php 
include("functions/conexao-bd-renard.php")

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
              <li class="nav-item">
                <a class="nav-link" href="services.php">Plataformas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contato</a>
              </li>
              <li class="nav-item active">
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

    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Blog</h1>
            <p><a href="index.html">Home</a> / <span>Blog</span></p>
          </div>
        </div>
      </div>
    </div>
<!--meio-->
<br><br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col">
     <h2> Confira nossos tópicos atuais: </h2>
     <br><br><br>

     <?php
              $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN blogImagem ON BlogImagem_Blog_Codigo = Blog_Codigo WHERE BlogImagem_Destaque = 's' GROUP BY Blog_Codigo ORDER BY Blog_Codigo ASC LIMIT 2");
              while($exibe = mysqli_fetch_array($query)){
      ?>

                        <br>
	<img class="img-fluid" style="border-radius: 5%;" src="assets/images/blog/<?php echo $exibe[6] ?>" width="800" heigth="688"  alt="">
    	
		<br><br>
			<a style=""href="blog-single.php?idb=<?php echo $exibe[0] ?>">
				<h1>
                    <?php echo $exibe[1] ?>
				</h1>
                </a>
				    <h6>
					    <?php echo substr($exibe[4],0,150); echo '...' ?>
                     </h6>
			    <br><hr>
                        <?php } ?>
<!--fim-->
</div> </div> </div>
<br><br><br><br><br><br>

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