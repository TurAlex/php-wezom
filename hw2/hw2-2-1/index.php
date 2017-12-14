<!doctype html>
<html lang="ru">
<head>
  <title>HW2-2-3</title>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="container">
	<form id="solution" action="action.php" method="post">
		<h3>ДЗ 2 - задание 2-1</h3>
		<h4>Написать php-скрипт вычисление объема куба, все параметры произвольные.</h4>
		<hr>
		<h4>Введите длину, ширину и высоту куба.</h4>
		<fieldset>
			<input name="length" placeholder="Длина" type="number" tabindex="1" autofocus>
		</fieldset>
		<fieldset>
			<input name="width" placeholder="Ширина" type="number" tabindex="2">
		</fieldset>
		<fieldset>
			<input name="height" placeholder="Высота" type="number" tabindex="3">
		</fieldset>
		<fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Посчитать</button>
		</fieldset>
	</form>


</div>
</body>
</html>