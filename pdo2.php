<?php

	//Если форма регистрации отправлена и ВСЕ поля непустые...
	if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
		//Пишем логин и пароль из формы в переменные (для удобства работы):
		$login = $_REQUEST['login'];
		$password = $_REQUEST['password'];

		/*
			Формируем и отсылаем SQL запрос:
			ВСТАВИТЬ В таблицу_users УСТАНОВИТЬ логин = $login И пароль = $password
		*/
    $connect=mysqli_connect("localhost","root","","people");
    $boods=mysqli_query($connect,"INSERT INTO `users` (`First Name`, `Last Name`) VALUES ('$login' , '$password');");
	

		//Выведем сообщение об успешной регистрации:
		echo 'Вы успешно зарегистрированы!';
	}
	//Не заполнено какого-либо из полей...
	else {
		echo 'Поля не могут быть пустыми!';
	}
?>
