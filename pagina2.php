<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>
  <?php
  echo "El nombre ingresado es: ";
  echo $_REQUEST['nombre'];
  echo "<br>";
  
  if($_REQUEST['edad'] >= 18){
    echo " si es mayor de edad "  ;
    
    echo $_REQUEST['edad'];
  }else{
      echo " no es mayor de edad";
  } ;
  ?>
</body>

</html>