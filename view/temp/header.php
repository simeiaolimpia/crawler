<link rel="icon" href="../view/img/favicon.png"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="./css/main.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script>
  $( function () {
    $('.dropdown-toggle').dropdown();
  } );
</script>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #9ACD32">
  <a class="navbar-brand" href="/">
  	<img src="img/logoCrawler2.png" style="width:120px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <div class="input-group shadow" style="width: 65%; margin:auto;">
    	<input class="form-control" type="search" placeholder="O que está procurando?" aria-label="Search" style="border-right: none;">
    	<div class="input-group-append">
    	<div class="input-group-text" style="background-color: #FFF"><i class="fas fa-search"></i></div>
    </div>
  	</div>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link text-white font-weight-bold" href="#">Sobre<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white font-weight-bold" href="/view/cadastro.php">Cadastrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white font-weight-bold" href="/view/home.php" tabindex="-1" aria-disabled="true">Entrar</a>
      </li>
    </ul>
    <div class="dropdown">
  		<a class="btn dropdown-toggle rounded" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: white;">
    	Mais opções
  		</a>
  	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    	<a class="dropdown-item" href="#">Perfil</a>	
    	<a class="dropdown-item" href="#">Sair</a>
  	</div>
	</div>
  </div>
</nav>
