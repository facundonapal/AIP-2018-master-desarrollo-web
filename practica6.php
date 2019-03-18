<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
function Burbuja(&$vector)
{
	$tam = count($vector);
	for ($i = 1; $i < $tam; $i++)
	{
		for ($j = $tam-1; $j >= $i; $j--)
		{
			if ($vector[$j] < $vector[$j-1])
			{
				$aux = $vector[$j-1];
				$vector[$j-1] = $vector[$j];
				$vector[$j] = $aux;
			}
		}
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ordenar el array con el método de la burbuja</title>
</head>

<body>
<?php
$a = array(2, 35, 22, 20, 15);
echo "Contenido inicial del array: ";
for ($i = 0; $i < count($a); $i++)
{
	echo "$a[$i] ";
}
Burbuja($a);
echo "<br>";
echo "Contenido ordenado del array: <b>";
for ($i = 0; $i < count($a); $i++)
{
	echo "$a[$i] ";
}
echo "</b>";
?>
</body>
</html>