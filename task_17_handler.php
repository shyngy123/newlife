<?php
if (!empty($_FILES['image']))
{
  $pdo=new PDO('mysql:host=localhost;dbname=people','root','');

  $result=pathinfo($_FILES['image']['name']);

  $filename=uniqid().'.'.$result['extension'];


  move_uploaded_file($_FILES['image']['tmp_name'],'uploads/'.$filename);
  $sql = "INSERT INTO `image` (`id`, `image`) VALUES (NULL, '$filename')";
  $query = $pdo->prepare($sql);
  $query->execute();
  $data = $pdo->query("SELECT * FROM `image`")->fetchall(PDO::FETCH_ASSOC);

}
























 ?>
