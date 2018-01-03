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
<?php
  $cost = 30;
  $weight_str = trim($_POST['weight']);
  $weight_arr = explode(" ",$weight_str);
  $total_weight = 0;
  foreach ($weight_arr as $key => $weight){
    $weight = preg_replace("/[^0-9,.]/", '',$weight);
	  $weight = str_replace(",", ".",$weight);
	  if ($weight == '')
	    $weight = 0;
    $weight_arr[$key] = $weight;
    $total_weight +=$weight_arr[$key];
  }
?>

<div class="container">
	<div id="solution">
    <table class="responstable">
      <tr>
        <th>Пассажир</th>
        <th>Вес багажа</th>
        <th>Цена за багаж</th>
      </tr>
      <?php foreach ($weight_arr as $passenger => $weight){?>
        <tr>
          <td><?= $passenger + 1;?></td>
          <td><?= $weight;?></td>
	        <td>$<?= $weight*$cost;?></td>
        </tr>
		  <?php }?>
      <tr class="bold">
        <td >Всего</td>
        <td><?= $total_weight;?></td>
        <td>$<?= $total_weight * 30;?></td>
      </tr>
    </table>
		
    
    
    
    
		<div class="try-again">
			<a href="index.php">Посчитать ещё разок</a>
		</div>
  </div>


</div>
</body>
</html>