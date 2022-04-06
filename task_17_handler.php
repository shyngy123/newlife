<?php

$filearray[]=$_FILES['image']['name'];
for ($i=0; $i <count($filearray) ; $i++) {
  upload_file($_FILES['image']['name'][$i],$_FILES['image']['tmp_name'][$i]);

}
function upload_file($file,$tmp){
  $pdo=new PDO('mysql:host=localhost;dbname=people','root','');
  $result=pathinfo($file);
  $filename=uniqid().".".$result['extension'];
  move_uploaded_file($tmp,'uploads/'.$filename);
  $sql = "INSERT INTO `image` (`id`, `image`) VALUES (NULL, '$filename')";
  $query = $pdo->prepare($sql);
  $query->execute();

  $data = $pdo->query("SELECT * FROM `image`")->fetchall(PDO::FETCH_ASSOC);



//die;
}

//header("Location: task_17.php");


//header("Location: task_17.php");
//exit;

























 ?>
