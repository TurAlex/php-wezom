<!doctype html>
<html lang="ru">
<head>
  <title>HW4-1</title>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
<?php

;?>

<div class="container">
	<form id="solution" action="action.php" method="post">
		<h3>ДЗ 4 - задание 1</h3>
		<h4>
      Найти наибольшее и наименьшее значение функции y=3x^2+x-4, на заданном интервале(в виде массива) который необходимо сгенерировать случайным образом</h4>
		<hr>
    <h4>Выберите интервал чисел </h4>
    <fieldset>
      <input name="start" value="0" type="number" tabindex="1" autofocus>
    </fieldset>
    <fieldset>
      <input name="end" value="40" type="number" tabindex="2">
    </fieldset>
    <h4>И колличество рандомно сгенерированых элементов</h4>
    <fieldset style="width: 100%;">
      <input name="quantity" value="50" type="number" tabindex="3" placeholder="Количество элементов">
    </fieldset>


    <fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Показать</button>
		</fieldset>
	</form>


</div>
</body>
</html>