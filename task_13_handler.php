<?php
session_start();
if (!isset($_SESSION['one'])) {
   $_SESSION['one']=1;
}else {
  $_SESSION['one']++;
}

header("Location:task_13.php");

 ?>
