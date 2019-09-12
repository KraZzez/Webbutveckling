<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>PHP</title>
</head>
<body>
  <?php
  $val = $_POST['val'];
  $gradtal = $_POST['gradtal'];
  if ($val == "to_celcius")
  {
    $celcius = ($gradtal-32) * 5 / 9;
    echo $gradtal. " Fahrenheit motsvaras av ".$celcius." Celcius";

  }
  else if ($val == "to_fahrenheit")
  {
    $fahrenheit = $gradtal * 9 / 5 * 32;
    echo $gradtal." Celcius motsvaras av ". $fahrenheit." Fahrenheit";
  }



  ?>
</body>
</html>
