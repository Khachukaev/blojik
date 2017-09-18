<!DOCTYPE html>
<head>
	<meta charset="utf-8">
</head>
   <body>
   	  
            <?php

$connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db');

if ($connection == false)
  {
     echo 'Не удалось подключиться к базе данных! <br>';
     echo  mysqli_connect_error();
     die ();
}

  ?>

   <form method="POST" action="/handle.php">
      <input type = "text" placeholder="Ваш логин" name="login">
      <input type="text" placeholder="Ваш пароль" name="password">
      <hr>
      <input type="submit" value="Отправить">
   </form> 


   </body>

</html>




