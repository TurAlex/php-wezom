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
<?php
  $bacterium = (int)$_POST['bacterium'];
  $minute = (int)$_POST['minute'];
  $bacterium_start = $bacterium;
  for ($i = 0; $i < $minute; $i++)
  	$bacterium *= 2;
?>

<div class="container">
	<div id="solution">
		<h4>Через <?= $minute;?> минут из <?= $bacterium_start;?> бактерий станет<br>
      <span class="result"><?= $bacterium;?></span>
    </h4>
		
		<div class="try-again">
			<a href="index.php">Посчитать ещё разок</a>
		</div>
  </div>


</div>
</body>
</html>