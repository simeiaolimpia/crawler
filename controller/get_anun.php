<?php require_once 'bd.php';

$stmt = $pdo->prepare('SELECT * FROM cwl_anuncio');
$stmt->execute();

$anun = $stmt->fetchAll(PDO::FETCH_ASSOC);

$result = array_reverse($anun);





?>