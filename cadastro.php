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
            <h1>Cadastre-se</h1>
            <p><a href="index.html">Home</a> / <span>Cadastro</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->
<!--form-->
<br><br><br><br>
<form action="functions/cadastrar_usuario.php" method="POST">
<div class="form-group">
    <label for="inputAddress">Nome *</label>
    <input type="text" class="form-control" id="inputAddress" name="nome" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email *</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha *</label>
      <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="No máximo 6 caracteres" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço *</label>
    <input type="text" class="form-control" id="inputAddress" name="endereco" required>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade *</label>
      <input type="text" class="form-control" id="inputCity" name="cidade" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado *</label>
      <select id="inputState" class="form-control" name="estado" required>
        <option selected></option>
        <option value="sp">São Paulo</option>
        <option value="rj">Rio de Janeiro</option>
        <option value="sc">Santa Catarina</option>
        <option value="rs">Rio Grande do Sul</option>

      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">CEP *</label>
      <input type="text" class="form-control" id="inputZip" name="cep" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Telefone</label>
      <input type="text" class="form-control" id="inputZip" name="telefone">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Celular *</label>
      <input type="text" class="form-control" id="inputZip" name="celular" required>
    </div>
    </div>
  
  <button type="submit"  class="buttonC">Cadastrar</button>
</form>
    <style>
    .buttonC {
            outline: none;
            cursor: pointer;
            display: inline-block;
            height: 50px;
            line-height: 50px;
            padding: 0px 25px;
            border: none;
            margin-left: 10px;
            background-color: #00bcd4;
            color: #fff;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.5s;
}
          .buttonC:hover {
        	background-color: #00a4b9;
}
       </style>
 

<br><br><br>

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