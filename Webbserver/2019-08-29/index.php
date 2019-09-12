<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>PHP</title>
</head>
<body>

  <?php
    $bilar = array();
    $cars = array("Volvo", "BMW", "Toyota");
    //
    echo "<h1>Bilmärke: ". $cars[1]."</h1>";

    $arrlength = count($cars);

    for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo "<br>";

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

   ?>

</body>
</html>
