<!doctype html>
<html lang="ru">
<head>
  <title>HW8-1</title>
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
  input[type="submit"]{
    display: block;
    width:auto;
    margin: 30px auto;
  }
  sub{
    font-size: smaller;
  }
</style>

<div class="container" style="width:auto; margin: 0 auto; text-align: center; padding:  0 50px">
  <h1>Задача 8-2</h1>
  <p>* Написать программу которая ищет слово в файле произвольной длины</p>

  <form enctype="multipart/form-data" action="" method="post">
    <label> <span>Искать слово</span>
      <input type="text" name="word">
    </label>
    <label><span>в файле</span>
      <input type="file" name="uploaded_file">
    </label>
    <input type="submit" value="Начать поиск">
  </form>
	
	
	<?php
	if($_FILES['uploaded_file']['error'] === 0 && $_POST['word']) {
    // GET data to analyzing
	  $file_name = $_FILES['uploaded_file']['name'];
	  $file = file_get_contents($_FILES['uploaded_file']['tmp_name']);
		$search_word = $_POST['word'];

    // search word function: 1 -  separate each word from file; 2 - compare each word with the one we search
    
    function searchWordInFile($file, $search_word){
	    // token for word separation
	    $token = " .,\t\n";
	
	    // Get first word and check it
	    $word = strtok($file, $token);
	    if ( $word == $search_word )
		    return  "Ура! Искомое слово найденно!";
	
	    // Get and check all other words
	    $success = 0;
	    while ($word !== false) {
        $word = strtok( $token );
        if ( $word === $search_word ){
          $success = 1;
          break;
        }
      }
      return ($success) ? "Ура! Искомое слово найденно!" : "Увы! Слова <b>$search_word</b> в файле НЕ найденно!" ;
  	}
   
  	echo searchWordInFile($file, $search_word);
  }
	?>

</div>
</body>
</html>
