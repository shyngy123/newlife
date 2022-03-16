<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach($posts as $post): ?>
 <b><p><?= $post['price']; ?> РУБ</p></b>
 <h2> <?= $post['description']; ?> </h2>

 <form name="color" method="GET" action="item.php?id=<?=$post['id']?>&color=$color">
  <input type="radio" name="color" value="red">red</input>
  <input type="submit" value="Выберете цвет" >
 </form>
 <a href="add_item.php?id=<?=$post['id']?>&color=<?=$color?>">Купить</a>


 <?php endforeach; ?>
  </body>
</html>

<?php

/*<?php
$pdo = new PDO('mysql:host=localhost;dbname=people;','root','');
$sql = 'SELECT * FROM `input`';
$statment=$pdo->prepare($sql);
$statment->execute();
$row = $statment->fetchAll(PDO::FETCH_ASSOC);
foreach ($row as $value):?>
 <td><?php echo $value['text']; ?></td>
<?php endforeach; ?>*/

/*$pdo = new PDO('mysql:dbname=people; host=localhost', 'root', '');
$sql = "SELECT * FROM `users`";
$statment=$pdo->query($sql);
$result = $statment->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $value) {
  echo $value['First Name'];
}*/
/*$pdo = new PDO('mysql:dbname=people; host=localhost', 'root', '');
$sql = ("INSERT INTO `users`(`First Name`, `Last Name`, `Username`) VALUES(?,?,?)");
$statment=$pdo->prepare($sql);
$statment->exucutue($_POST);
*/
