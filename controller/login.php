<?php session_start(); require_once 'bd.php';

$email = $_POST['email'];
$password = md5(stripslashes($_POST['password']));


$stmt = $pdo->prepare('SELECT * FROM cwl_usuario where usu_email = ? AND usu_senha = ? ');
$stmt->execute([$email,$password]);
$result = $stmt->rowCount();

if ($result > 0) {
$_SESSION['logged'] = true;
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['user_id'] = $result[0]['usu_id'];
$_SESSION['username'] = ucwords($result[0]['usu_nome']);
header('Location:/view/home.php');
exit();
}else{
	header('Location:/index.php');
}


 ?>