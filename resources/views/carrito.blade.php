<html>
<meta charset="UTF-8">
<head>
<title>Carrito Compras</title>
<link href="style.css" rel="stylesheet" />
</head>
<body>
<div align="center"><h1> Carrito de compras</h1></div>
<div>
<div><h2>Lista de productos a comprar.</h2></div>


<table>
<tr>
<th style="width:30%">Descripción</th>
<th style="width:10%">Código</th>
<th style="width:10%">Cantidad</th>
<th style="width:10%">Precio x unidad</th>
<th style="width:10%">Precio</th>
<th style="width:10%"><a href="index.php?accion=vacio">Limpiar</a></th>
</tr>


<tr style="background-color:#f3f3f3">
<td colspan="2"><b>Total de productos:</b></td>
<td><b></b></td>
<td colspan="2"><strong></strong></td>
<td><a href="index.php?accion=pagar">Cobrar</a></td>
</tr>

</table>

<div align="center"><h3>¡El carrito esta vacío!</h3></div>


</div>

<div>
<div><h2>Productos</h2></div>
<div class="contenedor_general">

		<div class="contenedor_productos">
			<form method="POST" action="index.php?accion=agregar&cod=
			">
			<div><img src=""></div>
			<div>
			<div style="padding-top:20px;font-size:18px;"></div>
			<div style="padding-top:10px;font-size:20px;"></div>
			<div><input type="text" name="txtcantidad" value="1" size="2" /><input type="submit" value="Agregar" />
			</div>
			</div>
			</form>
		</div>

</div>
</body>
</html>
