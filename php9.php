<?php
$text=$_POST['text'];
$pdo = new PDO('mysql:host=localhost;dbname=people;','root','');
$sql = 'INSERT INTO input(text) VALUES (:text)';
$statment=$pdo->prepare($sql);
$statment->execute(['text' => $text]);

header('Location: task_9.php');






 ?>
