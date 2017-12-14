<!doctype html>
<html lang="ru">
<head>
	<title>HW2-2-1</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$x = (int)$_POST['x'];
$y = (int)$_POST['y'];
$z = (int)$_POST['z'];
$length = sqrt($x*$x + $y*$y + $z*$z);
?>

<div class="container">
	<form id="solution" action="action.php" method="post">
		<h4>Длина вектора с координатами <nobr>(<?= $x;?>; <?= $y;?>; <?= $z;?>)<nobr> <br> = <br>
			<span class="result"><?= $length;?></span></h4>
		
		<div class="try-again">
			<a href="index.php">Посчитать ещё разок</a>
		</div>
		


</div>
</body>
</html>