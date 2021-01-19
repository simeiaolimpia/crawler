<?php 
	require_once dirname(__file__).'/controller/App.php';

	use \PHPSMP\App as App;

	$app = new App();
	$app->setProjectName('PHPSMP');

	$app->addRout('/',function($req,$res){
		$res->sendFile('./views/home.php');
	});

	$app->defaultRout(function($req,$res){
		App::searchTemps();	
	});

	$app->addRout('/cadastro',function($req,$res){
		$res->sendFile('./views/cadastro.php');
	});

	$app->addRout('/test2',function($req,$res){
		$res->sendFile(dirname(__file__).'/views/test2.php');
	});


	
	
	App::start();

 ?>