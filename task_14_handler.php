<?php
session_start();
header('Location: task_14.php');
$login=$_POST['email'];
$password=$_POST['password'];
$pdo=new PDO('mysql:host=localhost;dbname=people','root','');
// sql запрос в базу (знак "?" это заглушка
// в которую мы подставим значение в execute далее)
$sql = "SELECT * FROM `regis` WHERE `email` = ?";
$query = $pdo->prepare($sql);
// Сейчас как раз подставляем значение в нашу "?" - загрушку выше.
$query->execute([$login]);
// В данном случае лучше использовать fetch вместо fetchAll,
// так ищем в базе только 1 совпадение
$user = $query->fetch(PDO::FETCH_ASSOC);

// Теперь проверяем правильный ли введен пароль
// с помощью password_verify()
if($user && password_verify($password, $user['password'])) {
    $_SESSION['client']=$login;
    return $_SESSION['status'] = 'Authorized';
} else {
      return $_SESSION['status'] = 'Not authorized';

}

/*$statment=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach ($statment as  $value) {
   echo "<pre>";
   var_dump($value);
   echo "</pre>";
}






/*session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=people;','root','');

function selectData($pdo, $email){
    $sql = "SELECT * FROM `users` WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email'=>$email]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function Authorization($pdo, $email, $password) {
    $user = selectData($pdo, $email);

    if(!empty($user['email']) && password_verify($password, $user['password'])) {
        return $_SESSION['status'] = 'Authorized';
    }
    else{
        return $_SESSION['status'] = 'Not authorized';
    }
}

Authorization($pdo, $email, $password);

header("Location: task_14.php");*/
