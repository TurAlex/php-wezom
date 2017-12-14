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
$length = (int)$_POST['length'];
$width = (int)$_POST['width'];
$height = (int)$_POST['height'];
$volume = $length * $width * $height;
?>

<div class="container">
	<form id="solution" action="action.php" method="post">
		<h4>Объем куба с <nobr>длиной - <?= $length;?>,</nobr> <nobr>шириной - <?= $width;?></nobr> и <nobr>высотой - <?= $height;?></nobr> <br> =
			<br>
			<span class="result"><?= $volume;?></span></h4>
		
		<div class="try-again">
			<a href="index.php">Посчитать ещё разок</a>
		</div>
		


</div>
</body>
</html>