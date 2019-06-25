<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Php Playground</title>
</head>
<body>
  <?php
    $nameOfGuy = 'Emmanuel';
    $mikeishere = 'Mike is here';
    echo "<h1>hello there $nameOfGuy</h1>";
    echo "hello world, I am $nameOfGuy";
    $cars = array("Volvo", "BMW", "Toyota");
    foreach( $cars as $car ) {
      if ($car == 'Volvo') {
        $nameOfGuy = 'Micheal';
        echo "<li>$nameOfGuy has a $car</li>";
      }
      if ($car == 'BMW' || $car == 'Toyota') {
        $nameOfGuy = 'Emmanuel';
        echo "<li>$nameOfGuy has a $car</li>";
      }
    }

    if ($mikeishere) {
      echo 'yes';
    } else {
      echo 'no';
    }

    function sayHi($nameOfGuy) {
      echo "<br/> hi there $nameOfGuy $mikeishere";
    }

    sayHi($nameOfGuy);

    function cube($num) {
      $result = $num * $num * $num;
      return $result;
    }

    echo cube(4)
  ?>
</body>
</html>