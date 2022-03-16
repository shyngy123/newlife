<?php
session_start();
$text=$_POST['text'];

$pdo = new PDO('mysql:host=localhost;dbname=people;','root','');

$sql = "SELECT * FROM `input` WHERE text = :text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);
if(!empty($task)) {
     $message = 'Такой текст уже существует в базе!';
     $_SESSION['danger'] = $message;
     header('Location: task_10.php');
     exit;
 }
   $sql = 'INSERT INTO input(text) VALUES (:text)';
   $statment=$pdo->prepare($sql);
   $statment->execute(['text' => $text]);


header('Location: task_10.php');


 ?>
