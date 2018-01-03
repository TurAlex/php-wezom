<!doctype html>
<html lang="ru">
<head>
	<title>HW3-2-3</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  $num = $_POST['num'];
  $sum = 1;
  for ($i = 1; $i <= $num; $i++)
    $sum *=$i;
    
?>

<div class="container">
	<div id="solution">
		<h4>Факториал числа <?= $num;?> равен<br>
      <span class="result"><?= $sum;?></span>
    </h4>
		
		<div class="try-again">
			<a href="index.php">Проверить другое число</a>
		</div>
  </div>


</div>
</body>
</html>