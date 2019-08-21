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
<style media="screen">
body {
    background-color: aquamarine;
}

h1,
p,
input {
    font-family: 'Raleway', sans-serif;
}

p {
    margin: 0;
    width: 130pt;
}

form {
    display: flex;
    align-items: center;
    flex-direction: column;
}

#contenido {
    display: flex;
    justify-content: center;
    padding: 30pt;
    width: 250pt;
    border-radius: 15px;
    flex-shrink: 0;
    margin: 0 auto;
    border: 5px solid #f2f2f2;
    align-items: center;
    background-color: #f2f2f2;
}

h1 {
    width: 100%;
    text-align: center;
}

input {
    border-radius: 4px;
    border: 1px solid #bbb;
    height: 26px;
    width: 130pt;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    margin: 1px 1px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    width: 100%;
    font-size: 110%;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
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
