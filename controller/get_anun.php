<?php require_once 'bd.php';

$stmt = $pdo->prepare('SELECT * FROM cwl_anuncio');
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);





?>