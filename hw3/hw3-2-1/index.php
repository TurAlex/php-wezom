<!doctype html>
<html lang="ru">
<head>
  <title>HW3-2-1</title>
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
		<h3>ДЗ 3 - задание 2-1</h3>
		<h4>
      Даны натуральные числа от 20 до 50.Напечатать те из них, которые делятся на 3, но не делятся на 5.

    </h4>
		<hr>
    <h4>Выберите диапазон чисел</h4>
    <fieldset>
      <input name="min" value="20" type="number" tabindex="1" autofocus>
    </fieldset>
    <fieldset>
      <input name="max" value="50" type="number" tabindex="2">
    </fieldset>


    <fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Показать</button>
		</fieldset>
	</form>


</div>
</body>
</html>