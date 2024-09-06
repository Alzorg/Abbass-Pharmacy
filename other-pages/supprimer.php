<?php 
$pdo = new PDO('mysql:host=localhost;dbname=pharmacy' , 'root' , '');

$ref = $_GET['ref'];
$sql = 'DELETE FROM info WHERE ref = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$ref]);
header('Location: bibliothique.php');

?>