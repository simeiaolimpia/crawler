<div class="container my-4">

<div class="row">

  <div class="col-md-3">
  	<form action="" method="">
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Escolher estado</label>
	    <select class="form-control" id="exampleFormControlSelect1" name="">
	      <option> Acre </option>
	      <option> Alagoas </option>
	      <option> Amapá </option>
	      <option> Amazonas </option>
	      <option> Bahia </option>
	      <option> Ceará </option>
	      <option> Distrito Federal </option>
	      <option> Espírito Santo </option>
	      <option> Goiás </option>
	      <option> Maranhão </option>
	      <option> Mato Grosso </option>
	      <option> Mato Grosso do Sul </option>
	      <option> Minas Gerais </option>
	      <option> Pará </option>
	      <option> Paraíba </option>
	      <option> Paraná </option>
	      <option> Pernambuco </option>
	      <option> Piauí </option>
	      <option> Rio de Janeiro </option>
	      <option> Rio Grande do Norte </option>
	      <option> Rio Grande do Sul </option>
	      <option> Rondônia </option>
	      <option> Roraima </option>
	      <option> Santa Catarina </option>
	      <option> São Paulo </option>
	      <option> Sergipe </option>
	      <option> Tocantins </option>
	    </select>
	    <input class="btn btn-primary mx-0 mt-1" type="submit" value="Filtrar">
	  </div>
	</form>
  </div>

  <div class="col-md-9">

  	<?php $titulos = ['Eletrônicos', 'Metal', 'Papel', 'Plástico', 'Vidro']; ?>

  	<?php for ($i = 0; $i < 5; $i++): ?>
    <!--Carousel Wrapper-->
    <div id="multi-item-example<?= $i ?>" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
        <a class="carousel-control-prev" href="#multi-item-example<?= $i ?>" data-slide="prev"><span class="fa fa-chevron-left" style="margin-top: 50px; margin-left: -80px;"></span></a>
        <a class="carousel-control-next" href="#multi-item-example<?= $i ?>" data-slide="next"><span class="fa fa-chevron-right" style="margin-top: 50px; margin-right: -80px;"></span></a>
      <!--/.Controls-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <a href="anu_detail.php?"><h1><?= $titulos[$i] ?></h1></a>
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-3">
              <div class="card mb-2">
              	<a href="anu_detail.php?">
                	<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                  alt="Card image cap">		
              	</a>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
              	 <a href="anu_detail.php?">
                   <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(19).jpg"
                  alt="Card image cap">
              	 </a>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
              	 <a href="anu_detail.php?">
                   <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(20).jpg"
                  alt="Card image cap">
              	 </a>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
              	 <a href="anu_detail.php?">
                   <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(21).jpg"
                  alt="Card image cap">
              	 </a>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-3">
              <div class="card mb-2">
              	<a href="anu_detail.php?">
                	<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(22).jpg"
                  alt="Card image cap">		
              	</a>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
              	 <a href="anu_detail.php?">
                   <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(23).jpg"
                  alt="Card image cap">
              	 </a>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
              	 <a href="anu_detail.php?">
                   <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(24).jpg"
                  alt="Card image cap">
              	 </a>
              </div>
            </div>

            <div class="col-md-3 clearfix d-none d-md-block">
              <div class="card mb-2">
              	 <a href="anu_detail.php?">
                   <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(25).jpg"
                  alt="Card image cap">
              	 </a>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

	<?php endfor ?>

  </div>

</div>
  	
</div>