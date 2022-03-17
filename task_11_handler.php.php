<?php
session_start();
$email=$_POST['email'];
$pass=password_hash($_POST['password'], PASSWORD_DEFAULT);
$pdo=new PDO('mysql:host=localhost;dbname=people;','root','');

function addatabase($pdo, $email, $pass)
{
  $sql = "INSERT INTO `regis` (`email` ,`password`) VALUES (:email,:password)";
  $statment=$pdo->prepare($sql);
  $statment->execute(['email' => $email,'password' => $pass]);

}
function chek($pdo, $email, $pass)
{
  $sql = "SELECT * FROM `regis` WHERE email = :email";
      $statement = $pdo->prepare($sql);
      $statement->execute(['email' => $email]);
      $user = $statement->fetch(PDO::FETCH_ASSOC);

     if(!empty($user)) {
         $message = 'Такой email уже есть!';
         return $_SESSION['danger'] = $message;
     }else{
         $message = "Вы успешно зарегистрировались!";
         $_SESSION['success'] = $message;
         return addatabase($pdo, $email, $pass);
     }


}

chek($pdo, $email, $pass);
  header('Location: task_11.php');
//header("Location: php11.php");*/
//addatabase($pass,$email,$pdo);











 ?>
