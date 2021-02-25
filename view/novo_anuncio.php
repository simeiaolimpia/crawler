
	<form class="new_anun" enctype="multipart/form-data" method="POST" action="/controller/new_anun.php">
		<br><br>
		<button class="button_anun button1" type="reset">
			<img class="close" src="https://i.ibb.co/dQ7JgfS/exit-removebg-preview.png">
		</button>
		<h1 class="new_anun_h1"> Novo Anúncio </h1>
		<h2 class="new_anun_h2"> Selecione ou faça upload de uma imagem </h2>
		<input type="file" name="userfile" required>
		<br>
		<br>
		<label><b>Título</b></label><br><input class="new_anun_input" type="text" name="title" id="title" required>
		<br><br>
		<label><b>Descrição</b></label><br><input class="new_anun_input" type="password" name="desc" id="desc" required>
		<br><br>
		<label><b>Categoria</b></label><br><input class="new_anun_input" type="text" name="cat" id="cat" required>
		<br><br>
		<label><b>Quantidade</b></label><br><input class="new_anun_input" type="text" name="quant" id="quant" required>
		<br><br>	

		<button class="button_anun button3"type="submit"><b><center>Publicar</center></b></button>

	</form>
<script type="text/javascript"></script>

