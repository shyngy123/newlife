<?php
include 'task_16_1.php';

?>

<?php

if(isset($_GET['name']))
{
        $pdo=new PDO('mysql:host=localhost;dbname=people','root','');
         $sql = "DELETE FROM `image` WHERE `image`.`image` =:user ";
         $stmt = $pdo->prepare($sql);
         $stmt->bindValue(":user", $_GET["name"]);
         $stmt->execute();;
         unlink($_GET['name']);
         exit;

}
header('Location: task_16_1.php');
?>
