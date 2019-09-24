<?php
$valor =$_GET["valor"];
$stock =10;
$cantidad =$_GET["cantidad"];
$producto =$_GET ["producto"];
if ($cantidad >= $stock) {
    echo "ese producto no tiene el stock suficiente";
}
elseif ($cantidad <= $stock ) {
    echo "producto comprado: $producto";
    echo "<br>";
    echo "total de la compra: ";
    echo "<br>";
    echo $valor * $cantidad;

}

?>