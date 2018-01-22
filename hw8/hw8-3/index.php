<!doctype html>
<html lang="ru">
<head>
  <title>HW8-3</title>
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
    width:300px;
  }
  input[type="submit"]{
    display: block;
    width:auto;
    margin: 30px auto;
  }
  sub{
    font-size: smaller;
  }
  label{
    text-align: right;
    display: block;
    margin: 10px auto;
    width: 500px;
  }
</style>

<div class="container" style="width:auto; margin: 0 auto; text-align: center; padding:  0 50px">
  <h1>Задача 8-3</h1>
  <p>Написать программу ищет слово во всех файлах которые находятся в заданной директории и выводит список файлов где это слово содержится</p>

  
  <form enctype="multipart/form-data" action="" method="post">
    <label> <span>Искать слово</span>
      <input type="text" name="word" value="style">
    </label>
    <label> <span>в папке</span>
      <input type="text" name="folder" value="C:\OpenServer\domains\php-wezom.local\hw8">
    </label>
    
    <input type="submit" value="Начать поиск">
  </form>
	
	
	<?php
	if($_POST['word'] && $_POST['folder']) {
    // GET data to analyzing
		$search_in_folder = $_POST['folder'];
		$search_word = $_POST['word'];

    // search word function: 1 -  separate each word from file; 2 - compare each word with the one we search
    function searchWordInFile($string, $search_word){
	    // token for word separation
	    $token = " &-{}()[]<>#=*!?/'.,;:\"\$\t\n\r\\";
	
	    // Get first word and check it
	    $word = strtok($string, $token);
	    if ( $word == $search_word )
		    return  1;
	  
	    // Get and check all other words
	    $success = 0;
	    while ($word !== false) {
        $word = strtok( $token );
		    if ( $word == $search_word ){
          $success = 1;
          break;
        }
      }
      return ($success) ? 1 : 0 ;
  	}
		
		//walk through directory function
		function searchWordInFolder($dir_name, $search_word) {
      static $output = [];
      $dir = scandir( $dir_name );
			foreach ( $dir as $d ) {
				if ( $d != '.' and $d != '..' ) {
					if ( is_dir( $dir_name . '\\' . $d ) ) {
						searchWordInFolder( $dir_name . '\\' . $d, $search_word);
					} else {
	          // if file
					  $content = file_get_contents($dir_name . '\\' . $d);
						if (searchWordInFile($content, $search_word)){
							$output[] = $dir_name . '\\' . $d.'</br>';
            }
					}
				}
			}
			return $output;
		}
		
    $result = searchWordInFolder($search_in_folder, $search_word);
    
    if ($result){
	    echo '<div style="color: darkgreen; font-weight: bold; margin-bottom: 20px " >Папки в которых найденно слово "'. $search_word .'"</div>';
	    foreach ($result as $file_name)
        echo $file_name.'<br>';
    } else {
      echo '<div style="color: red; font-weight: bold" >Слово не найденно</div>';
    }
    
  }
	?>

</div>
</body>
</html>
