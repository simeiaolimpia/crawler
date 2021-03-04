<html>
<head>
<title>Novo Anúncio</title>
</head>
<body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <br><br>
        <button type="button" class="close"aria-label="Close"  > 
        <span aria-hidden="true">×</span> 
        </button>
        <center>
		<h1 class="new_anun_h1" style="color:#107521;"> Novo Anúncio </h1>
		<h2 class="new_anun_h2" style="color:#107521;"> Selecione ou faça upload de uma imagem </h2>
		</center>
<form class="new_anun" enctype="multipart/form-data" method="POST" action="/controller/new_anun.php" style="margin-left: 35%;">
        <br><br>
	    	<input type="file" name="userfile" required>
		<br>
		<br>
		    <div class="new_anun_input">
        <label for="exampleInputPassword1">Título</label><br>
        <input type="text" class="new_anun_input" id="title" name="title" style=" width:520px;height:35px;" required>
            </div>
            
		<br>
		
	        <div class="new_anun_input">
        <label for="exampleFormControlSelect1">Categoria</label><label for="exampleInputPassword1" style="margin-left: 46%;">Quantidade</label><br>
        <select  class="new_anun_input" type="text" name="cat" id="cat" style=" width:450px;height:35px;" required>
        <option>Plástico</option>
        <option>Metal</option>
        <option>Vidro</option>
        <option>Papel</option>
        <option>Eletrônicos</option>
        </select><input type="text" class="new_anun_input" id="quant" name="quant" style=" width:50px;height:35px;margin-left: 2%;" required>
            </div>
            
        <br>
		
		    <div class="new_anun_input">
        <label for="exampleInputPassword1">Descrição</label><br>
        <input type="text" class="new_anun_input" id="desc" name="desc" style=" width:520px;height:100px;" required>
            </div>
            
        <br><br>
		<button type="button" class="btn btn-success" style=" width:300px;height:35px;" > Publicar</button>

</body>
</html>


