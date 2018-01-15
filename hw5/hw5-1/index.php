


<?php
$size = 60;
//initializing array with random numbers
for ($i = 0 ; $i < $size; $i++){
	$arr[] = rand(-100, 200);
	echo $arr[$i].', ';
}
echo '</br>';
$bubble_sorted_arr = bubble_sort($arr);
echo 'Bubble sort </br>';
for ($i = 0 ; $i < $size; $i++){
	echo $bubble_sorted_arr[$i].', ';
}
echo '</br>';
$insert_sorted_arr = insert_sort($arr);
echo 'Insert sort </br>';
for ($i = 0 ; $i < $size; $i++){
	echo $insert_sorted_arr[$i].', ';
}





function bubble_sort(array $arr){
	$arr_size = count($arr);
	for ($i = 0; $i < $arr_size; $i++)
	{
		for ($j = 0; $j < $arr_size - $i -1; $j++)
		{
			if ($arr[$j] > $arr[$j + 1]){
				$temp = $arr[$j]; $arr[$j] = $arr[$j + 1]; $arr[$j + 1] = $temp;
			}
		}
	}
	return $arr;
}

function insert_sort(array $arr){
	$arr_size = count($arr);
	for ($i = 1; $i < $arr_size; $i++)
	{
		for ($j = $i; $j >= 1 ; $j--)
		{
			if ($arr[$j] < $arr[$j - 1]){
				$temp = $arr[$j]; $arr[$j] = $arr[$j - 1]; $arr[$j - 1] = $temp;
			} else {
				break;
			}
		}
	}
	return $arr;
}
