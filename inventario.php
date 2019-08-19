<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="parritastyle.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>ALTA</title>
</head>
<body>
  <H1>DAR DE ALTA</H1>
  <div id="contenido">
    <form action="conexion.php" method="post" id="form">
      <p>Producto</p>
      <input type="text" name="producto">
      <p>Almacen</p>
      <input type="text" name="almacen" >
      <p>cantidad</p>
      <input type="number" name="cantidad">
      <p>Fecha</p>
      <input type="date" name="fecha" >
      <p>Importe</p>
      <input type="number" name="importe" >
      <input type="submit" value="submit">
    </form>
  </div>
</body>
</html>