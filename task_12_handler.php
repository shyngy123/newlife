<?php
session_start();
$text=$_POST['text'];
if(!empty($text))
{
  //unset($_SESSION['on']);
$_SESSION['on']=$text;

}
else {
  $_SESSION['close']="there is no message";
  //unset($_SESSION['close']);
}
//$_SESSION['on']='Ваше сообщение выводится тут'
//$_SESSION['close']='вы не ввели ничего!'



header("Location: task_12.php");


 ?>
