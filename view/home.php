<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<?php include 'temp/header.php'; ?>
</head>
<body>
	<main>
		<div class="container-fluid">
			<div class="row">

  				<div class="col-7 p-0">
					<div class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="img/slide1.jpg" alt="First slide" style="height: 600px; opacity: 0.3">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide" style="height: 600px; opacity: 0.3">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide" style="height: 600px; opacity: 0.3">
					    </div>

					    <div class="container-fluid" style="margin-top: 220px">
					    	<div class="row">
					    		<div class="col-2"></div>
									<div class="col-8">
										<h1 class="font-weight-bold" style="color: #4C8A44">Crawler</h1>
										<p class="font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora quia dicta totam quos soluta, numquam cum nemo! Velit aliquid nisi voluptatum. Expedita tempore beatae ex, maiores autem itaque magni.</p>
									</div>
							<div class="col-2"></div>
					    	</div>
					    </div>

					  </div>
					</div>
  				</div>

  				<div class="col-5" style="background-color: #228B22">
  					<div class="container-fluid">
  						<div class="container text-center" style="margin-top: 85px">
  							<img src="img/logoCrawler2.png" style="width: 200px;">
  						</div>
						<form method="post" action="/controller/login.php">
						  <!-- Email input -->
						  <div class="form-outline mb-4" style="margin-top: 20px">
						    <input type="email" id="form1Example1" class="form-control" name="email" />
						    <label class="form-label" for="form1Example1">Endereço de e-mail</label>
						  </div>

						  <!-- Password input -->
						  <div class="form-outline mb-4">
						    <input type="password" id="form1Example2" class="form-control" name="password" />
						    <label class="form-label" for="form1Example2">Senha</label>
						  </div>

						  <!-- 2 column grid layout for inline styling -->
						  <div class="row mb-4">
						    <div class="col d-flex justify-content-center">
						      <!-- Checkbox -->
						      <div class="form-check">
						        <input
						          class="form-check-input"
						          type="checkbox"
						          value=""
						          id="form1Example3"
						          checked
						        />
						        <label class="form-check-label" for="form1Example3">Lembre de mim</label>
						      </div>
						    </div>

						    <div class="col">
						      <!-- Simple link -->
						      <a class="text-info font-weight-bold" href="#!">Esqueceu a senha?</a>
						    </div>
						  </div>

						  <!-- Submit button -->
						  <button type="submit" class="btn btn-light btn-block">Entrar</button>
						</form>
  					</div>
  					<div class="container text-center mt-4">
						<a class="text-info font-weight-bold" href="#!">Cadastre-se</a>
					</div>			
  				</div>

			</div>
		</div>
	</main>
	<?php include 'temp/footer.php'; ?>
</body>
</html>