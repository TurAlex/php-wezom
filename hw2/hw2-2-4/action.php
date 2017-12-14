<!doctype html>
<html lang="ru">
<head>
	<title>HW2-2-4</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$a = (int)$_POST['a'];
$b = $a;
$a *= $a;
$a *= $a;
?>

<div class="container">
	<form id="solution" action="action.php" method="post">
		<h4><nobr>Число <?= $b;?> в четвертой степени <nobr> <br> = <br>
			<span class="result"><?= $a;?></span></h4>
		
		<div class="try-again">
			<a href="index.php">Посчитать ещё разок</a>
		</div>
		


</div>
</body>
</html>