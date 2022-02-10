<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $valor = rand(1, 10);
  echo $valor;
  echo "<br>";
  $inicio = 1;
  while ($inicio <= 10) {
    $mult = $inicio * $valor;
    echo " $inicio * $valor =";
    echo $mult ;
    echo "<br>";
    $inicio++;
  }
  ?>
</body>

</html>