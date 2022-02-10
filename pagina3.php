<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>
  <?php
  echo "su numero anotado es: ";
  echo $_REQUEST['numero'];
  echo "<br>";
  $valor = rand(1,10);
  echo "numero del sorteo es: ";
  echo $valor;
  echo "<br>";
  if($_REQUEST['numero'] == $valor){
    echo " felicidades gano con el numero: "  ;
    
    echo $_REQUEST['numero'];
  }else{
      echo " suerte para la proxima";
  } ;
  ?>
</body>

</html>