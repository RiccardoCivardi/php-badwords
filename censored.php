<?php

$paragrafo = $_POST['paragrafo'];
$censurare = $_POST['censurare'];
$lunghezza_paragrafo = strlen($paragrafo);

$paragrafo_censura = str_replace($censurare,'***',$paragrafo);
$lunghezza_paragrafo_censura = strlen($paragrafo_censura);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

  <p>Il paragrafo è: <?php echo $paragrafo ?></p>
  <p>Il paragrafo è lungo <?php echo $lunghezza_paragrafo ?> caratteri </p>
  <p>La parola da censurare è: <?php echo $censurare ?> </p>

  <p>Questo è il paragrafo con censura: <?php echo $paragrafo_censura ?> </p>
  <p>Il paragrafo con censura è lungo <?php echo $lunghezza_paragrafo_censura ?> caratteri </p>

  
</body>
</html>