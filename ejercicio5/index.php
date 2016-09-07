<?php
require_once 'Vendedor.php';
require_once 'Venta.php';
require_once 'Articulo.php';
require_once 'Comision.php';


$vendedor = new Vendedor("123", "Carlos Pardo");
$articulo1 = new Articulo("Celular Sony M", 800000, 2);
$articulo2 = new Articulo("Celular Moto G", 649000, 2);
$venta = new Venta("1/9/2016");
$comision=new Comision();

$venta->addArticulo($articulo1);
$venta->addArticulo($articulo2);
$vendedor->addVenta($venta);
$vendedor->listar();
echo "Comisión: $".$comision->calcularComision($venta->getTotalVenta()).$comision->getTotalComision();
echo "Sueldo: $";$vendedor->calcularSueldo($comision->getTotalComision());

$vendedor2 = new Vendedor("1234", "Camilo Ruiz");
$articulo3 = new Articulo("Celular Xperia", 900000, 2);
$articulo4 = new Articulo("Celular Samsung S6", 1600000, 2);
$venta1 = new Venta("2/9/2016");

$venta1->addArticulo($articulo3);
$venta1->addArticulo($articulo4);
$vendedor2->addVenta($venta1);
$vendedor2->listar();
echo "Comisión: $".$comision->calcularComision($venta1->getTotalVenta()).$comision->getTotalComision();
echo "Sueldo: $";$vendedor2->calcularSueldo($comision->getTotalComision());

?>
