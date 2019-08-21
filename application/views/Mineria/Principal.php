<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<title>INVENTARIO</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/master.css">
</head>
<body>
	<h1><?= $titulo?></h1>
	<div id="contenido">
			<a href="<?= base_url()?>Alta">
					<Button>ALTA</Button>
			</a>
			<br>
			<a href="<?= base_url()?>Main/employees">
					<button>BAJA</button>
			</a>
			<?php //get_titulo()?>
	</div>
</body>
</html>
