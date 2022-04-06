<?php
$pdo=new PDO('mysql:host=localhost;dbname=people','root','');
if (!empty($_FILES['image']))
{
  $pdo=new PDO('mysql:host=localhost;dbname=people','root','');
  $uploadname=$_FILES['image']['tmp_name'];
  $path='uploads/'.uniqid().'.jpeg';
  move_uploaded_file($uploadname,$path);
  $sql = "INSERT INTO `image` (`id`, `image`) VALUES (NULL, '$path')";
  $query = $pdo->prepare($sql);
  $query->execute();

 header("Location: task_16_1.php");
}











 ?>
