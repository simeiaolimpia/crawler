<!DOCTYPE html>
<html>
<head>
	<title>Crawler</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/css/index.css">

  <script type="text/javascript" src="view/js/jquery.min.js"></script>
  <script type="text/javascript" src="view/js/bootstrap.min.js"></script>
</head>
<body>

  <div class=" container-warpper">
    <div class="row d-flex">
						<!-- imagem -->
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
											<img src="view/img/recycle.jpg" class="image"> 
										</div>
                </div>
            </div>

            <div class="col-lg-6">
							<!-- logo -->
                <div class="card2 card border-0 px-4 py-5">
									<div class="row">
										<img src="view/img/logoCrawler2.png" class="logo">
									</div>

									<div class="row px-3 mb-4">
											<div class="line"></div> 
									</div>
								<!-- formulario -->
									<form method="post" action="/controller/login.php" class="form">
										<div class="row px-3"> 
											<label class="mb-1">
												<h6 class="mb-0 text-sm">Email</h6>
											</label> 
											<input class="mb-4" type="email" name="email" placeholder="digite o seu email"> 
										</div>

										<div class="row px-3"> 
											<label class="mb-1">
												<h6 class="mb-0 text-sm">Senha</h6>
											</label> 
												<input type="password" name="password" placeholder="digite sua senha">
										</div>

										<div class="row px-3 mb-4">
												<a href="#" class="ml-auto mb-0 text-sm">Esqueceu a senha?</a>
										</div>

										<div class="row mb-3 px-3"> 
											<button type="submit" class="btn btn-green text-center">Entrar</button> 
										</div>
									</form>
									<!-- link para cadastro -->
                    <div class="row mb-4 px-3"> 
											<small class="font-weight-bold">Não tem uma conta? 
											<a href="/view/cadastro.php">Cadastre-se</a></small>
										</div>
								</div>
						</div>
    </div>

		<div class="bg-green py-4">
				<div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">&copy; 2021 Crawler - Todos os direitos reservados.</small>
						<div class=" ml-4 ml-sm-auto"> 
							<a href="http://" target="_blank" rel="noopener noreferrer">Parceiros</a>
							<a href="http://" target="_blank" rel="noopener noreferrer">Sobre</a>
							<a href="http://" target="_blank" rel="noopener noreferrer">Recompesas</a>
						</div>
				</div>
		</div>

	</div>
</body>
</html>