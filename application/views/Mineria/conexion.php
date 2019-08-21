<?php
$producto = $_POST['producto'];
$almacen = $_POST['almacen'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$importe = $_POST['importe'];

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_DATABASE', 'mineria');
#echo $producto;
#echo $almacen;
#echo $cantidad;
#echo $fecha;
#echo $importe;
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($db == false) {
    die("Connection failed: " .mysqli_connect_error());
}
$sql = "INSERT INTO inventario(producto, almacen, cantidad, fecha, importe) values ('$producto', '$almacen', '$cantidad', '$fecha', '$importe')";

//  mysqli_query($db, $sql);

if(!$result = mysqli_query($db, $sql))
{
    echo "eRROR";
}

header('Location: inventario.php');

?>
