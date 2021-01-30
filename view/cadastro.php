<?php include_once 'temp/header.php' ?>

<main style="width: 60%; margin: auto;margin-top: 20vh; position: relative; ">
	<form action="/controller/Cadastrar.php">
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label d-flex justify-content-center align-items-center">
				<img style="width: 100px;height: 100px" src="./img/icon_coletor.png">
				<h1>Coletor</h1>
			</label>
			<div class="col-sm-4">
				<input style="display: none" type="radio"  class="form-control" value="Coletor" name="tipo">
			</div>
			<label for="" class="col-sm-2 col-form-label d-flex justify-content-center align-items-center">
				<img style="width: 100px;height: 100px" src="./img/ponto_de_coleta.png">
				<h1>Coleta</h1>
			</label>
			<div class="col-sm-4">
				<input style="display: none" type="radio" class="form-control" value="Fornecedor" name="tipo">
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Nome</label>
			<div class="col-sm-4">
				<input type="text"  class="form-control">
			</div>
			<label for="" class="col-sm-2 col-form-label">Sobrenome</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" >
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input type="email"  class="form-control" value="email@example.com">
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Telefone</label>
			<div class="col-sm-10">
				<input type="tel"  class="form-control" value="(99) 99999-9999">
			</div>
		</div>

		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">senha</label>
			<div class="col-sm-10">
				<input type="password" class="form-control">
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label">Confirme sua senha</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" >
			</div>
		</div>
		<div class="mb-3 row">
			<label for="" class="col-sm-2 col-form-label"></label>
			<div class="col-sm-10">
				<input type="submit" class="form-control" value="Cadastrar">
			</div>
		</div>

	</form>
</main>

<?php include_once 'temp/footer.php'; ?>
