<!doctype html>
<html lang="ru">
<head>
  <title>HW3-1-1</title>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
<?php $bacterium = rand(1,50);?>

<div class="container">
	<form id="solution" action="action.php" method="post">
		<h3>ДЗ 3 - задание 1-1</h3>
		<h4>
      Каждая бактерия делится на две в течение одной минуты. Начальное значение бактерий X. Сколько их станет через Y минут. Начальные значение сгенерировать с помощью функции rand(1,50)
    </h4>
		<hr>
		<h4>Сейчас у нас <span class="num"><?= $bacterium;?></span> бактерий.</h4>
    <h4>Введите количество минут для деления бактерий</h4>
		<fieldset class="hidden">
			<input name="bacterium" value="<?= $bacterium;?>">
		</fieldset>
    <fieldset>
      <input name="minute" placeholder="количество минут" type="number" tabindex="1" autofocus>
    </fieldset>
		
		<fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Посчитать</button>
		</fieldset>
	</form>


</div>
</body>
</html>