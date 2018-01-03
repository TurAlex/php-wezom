<!doctype html>
<html lang="ru">
<head>
  <title>HW3-1-2</title>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="container">
	<form id="solution" action="action.php" method="post">
		<h3>ДЗ 3 - задание 1-2</h3>
		<h4>
      Стоимость доставки самолетом 1 кг. груза составляет 30 USD. Для каждого из N пассажиров введите вес багажа, который он перевозит, подсчитайте, сколько каждый пассажир должен заплатить за перевозку своего багажа. Вычислите также общий вес груза, перевозимого пассажирами.
    </h4>
		<hr>
    <h4>Введите вес багажа каждого пассажира через пробел</h4>
		
    <fieldset>
      <input name="weight" placeholder="15 14.5 7,8 2 8 ..." type="text" tabindex="1" autofocus required>
    </fieldset>
		
		<fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Посчитать</button>
		</fieldset>
	</form>


</div>
</body>
</html>