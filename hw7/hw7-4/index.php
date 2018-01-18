<!doctype html>
<html lang="ru">
<head>
	<title>HW7-4</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">


</head>
<body>
<style>
	body{
		background-color: #f0fffc;
	}
	input{
		width: 100px;
		text-align: right;
	}
	sub{
		font-size: smaller;
	}
</style>

<div class="container" style="width:auto; margin: 0 auto; text-align: center; padding:  0 50px">
<h1>Задача 7-4</h1>
<p>Задача разменный автомат. В функцию передается некое целое число являющееся  суммой (N), которую нужно выплатить, в функции определен массив номиналов array(‘1’=>1,’2’=>2,’5’=>5,’10’=>10,’20’=>20,’50’=>50,’100’=>100,’200’=>200,’500’=>500) функция должна определить какое количество каждой купюры необходимо выплатить исходя из числа N и вернуть результат в виде массива.</p>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  $num = (int) $_POST['num'];
?>
	<?php
    function giveChange($num) {
      if ($num == 0)
        return [];

      $data = [
	      '1'   =>   1, '2'   =>   2, '5'   =>   5,
        '10'  =>  10, '20'  =>  20, '50'  =>  50,
	      '100' => 100, '200' => 200, '500' => 500
      ];
      
      $result = array_reverse($data, true);
      foreach ($result as $nominal => $quantity){
        if ($num == 0){
          $result[$nominal] = 0;
          continue;
        }
        $temp = $num % $data[$nominal];
        $result[$nominal] = floor( $num / $data[$nominal]);
        $num = $temp;
      }
      return $result;
      
    }
  ?>

  <form action="index.php" method="post" style="display: inline-block">
    <label><span>Введите целое число</span>
    <input type="number" class="input-md mb-20" value="<?= $num; ?>" name="num" >
    </label>
    <button type="submit">GO</button>
  </form>
	
	<?php
  if($num) {
	  echo '<table style="margin: 20px auto">';
    foreach ( giveChange( $num ) as $nominal => $quantity ){
      echo '<tr>';
      echo "<td>Монеты с номиналом $nominal</td>" ;
      echo '<td>-</td>';
      echo "<td>$quantity штук</td>";
	    echo '</tr>';
    }
    echo '</table>';
  }
  ?>
 
</div>
</body>
</html>
