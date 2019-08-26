<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_DATABASE', 'mineria');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($db == false)
{
    die("Connection failed: " . mysqli_connect_error());
}
$abecedario = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$mesBisiesto = [30, 29, 31, 30, 31, 30, 30, 31, 30, 29, 30, 31];
$mesNomal = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
for ($i = 0; $i < 100000; $i++)
{
  $producto = $abecedario[rand(0, 25)] . (string)rand(0, 12);
  $almacen = (string)rand(1, 20);
  $cantidad = rand(1, 50);
  $mes = rand(1, 12);
  $ano = rand(2014, 2019);
  if ($ano == 2016)
  {
    $dia = $mesBisiesto[$mes - 1];
  }
  else
  {
    $dia = $mesNomal[$mes - 1];
  }
  $fecha = (string)$ano . "-" . (string)$mes . "-" . (string)$dia;
  $importe = rand(1, 1000);
  $provedor = $abecedario[rand(0, 25)] . $abecedario[rand(0, 25)];
  $codigo = $abecedario[rand(0, 25)] . $abecedario[rand(0, 25)] . (string)rand(0, 9) . (string)rand(0, 9) . $abecedario[rand(0, 25)] . $abecedario[rand(0, 25)] . (string)rand(0, 9) . (string)rand(0, 9);
  $sql = "INSERT INTO invent(producto, almacen, cantidad, fecha, importe, provedor, codigo) values ('$producto', '$almacen', '$cantidad', '$fecha', '$importe', '$provedor', '$codigo')";
  if(!$result = mysqli_query($db, $sql))
  {
      echo "eRROR";
  }
}
echo "Se acabo Skillet"
//header('Location: inventario.php');
?>
