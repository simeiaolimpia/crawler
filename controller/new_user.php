<?php require_once 'bd.php';


$name = $_POST['f_name'].' '.$_POST['l_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$flag = 1;


if ($password === $confirm) {
	$password = md5(stripslashes($password));
	$stmt = $pdo->prepare('INSERT INTO cwl_usuario (usu_nome,usu_telefone,usu_email,usu_senha,usu_flag) VALUES (?,?,?,?,?)');
	$stmt->execute([$name,$phone,$email,$password,$flag]);

}

header('Location:/');

?>