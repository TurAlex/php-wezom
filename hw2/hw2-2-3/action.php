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
<?php
  $velocity_k = (int)$_POST['velocity_k'];
  $velocity_m = $velocity_k / 3.6;
?>

<div class="container">
	<div id="solution">
		<h4><nobr><?= $velocity_k;?>км/ч <nobr> <br> = <br>
			<span class="result"><?= $velocity_m;?>м/с</span></h4>
		
		<div class="try-again">
			<a href="index.php">Посчитать ещё разок</a>
		</div>
  </div>
		


</div>
</body>
</html>