<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if($_REQUEST['radio1'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es: " . $suma;
    echo "<br>"."<br>";
  } elseif($_REQUEST['radio1'] == "resta") {
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es: " . $resta;
      echo "<br>"."<br>";
    } if(isset($_REQUEST['check1'])) {
        $multi = $_REQUEST['valor1'] * $_REQUEST['valor2'];
        echo "La multiplicacion es: " . $multi;
        echo "<br>"."<br>";
        } if( $_REQUEST['valor2'] == 0){
            echo " no se puede dividir por cero";
            echo "<br>"."<br>";
         } elseif (isset($_REQUEST['check2'])) {
            $divi = $_REQUEST['valor1'] / $_REQUEST['valor2'];
            echo "La division es: " . $divi;
            echo "<br>"."<br>";
            } elseif($_REQUEST['radio1'] == "pot") {
                    $pote = pow($_REQUEST['valor1'] , $_REQUEST['valor2']) ;
                    echo "la potencia es: " . $pote;
                    echo "<br>"."<br>";
            }
        
    
    
  ?>
  <form action="controlradio.php">
      <input type="submit" value="regresar">
  </form>
</body>

</html>