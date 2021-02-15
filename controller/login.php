<?php require_once 'bd.php';

$email = $_POST['email'];
$password = md5(stripslashes($_POST['password']));


$stmt = $pdo->prepare('SELECT * FROM cwl_usuario where usu_email = ? AND usu_senha = ? ');
$stmt->execute([$email,$password]);
$result = $stmt->rowCount();

if ($result > 0) {

header('Location:/view/feed.php');
exit();
}else{
	header('Location:/');
}


 ?>