<!doctype html>
<html lang="ru">
<head>
  <title>HW2-2-2</title>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="container">
	<form id="solution" action="action.php" method="post">
		<h3>ДЗ 2 - задание 2-2</h3>
		<h4>Даны три координаты вектора x,y,z с основанием у начала координат. Вычислите длину этого вектора и выведите результат на экран.
    </h4>
		<hr>
		<h4>Введите три координаты вектора x,y,z</h4>
		<fieldset>
			<input name="x" placeholder="x" type="number" tabindex="1" autofocus>
		</fieldset>
		<fieldset>
			<input name="y" placeholder="y" type="number" tabindex="2">
		</fieldset>
		<fieldset>
			<input name="z" placeholder="z" type="number" tabindex="3">
		</fieldset>
		<fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Посчитать</button>
		</fieldset>
	</form>


</div>
</body>
</html>