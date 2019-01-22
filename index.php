<h1>Евгения Родина. Форма</h1>

<?php
	echo "<h2>_POST</h2>";
	print_r($_POST);
	echo "<br><br><br>";

	if ( !empty($_POST) ) {
		$message = "Сообщение от пользователя \n"
			. $_POST['userName'] . "\n"
			. $_POST['userEmail'] . "\n"
			. $_POST['message'];
		$from = "From info@php-post.ru";

		if ($_POST['userName'] !== "" &&
			$_POST['userEmail'] !== "" &&
			$_POST['message'] !== "") {

			$resaltMail = mail("htstrah@mail.ru", "сообщение с сайта", $message, $from);

			if ( $resaltMail ) {
				echo "Сообщение отправлено.";

				} else {
					echo "Произошел сбой. Сообщение не отправлено.";

				}

		} else {
				echo "Заполните поля формы. Сообщение не отправлено.";
		}
		
	}

		
?>

<form action="" method="post">
	<input type="text" name="userName" placeholder="Имя"><br>
	<input type="text" name="userEmail" placeholder="Email"><br>
	<textarea type="text" cols="30" rows="10" name="message" placeholder="Сообщение"></textarea><br>
	<input type="submit" name="submit" value="Отправить">
</form>

