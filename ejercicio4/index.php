<?php
require_once 'Apartamento.php';
require_once 'Local.php';

$apartamento = new Apartamento("Calle 25B No. 40-67", 60, 10, 150000000, "Edificio Toledo", 5);
$local=new Local("Carrera 91 N°. 143-31",70,20,500000000,"Stanford",1)
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <meta name="viewport" content="width=device-width,user-scable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../componentes/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../componentes/css/estilos.css">
</head>
<div class="busqueda">
    <div class="row">
        <br>

        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class="glyphicon glyphicon-folder-open"></span> Información Del Inmueble</div>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td style="text-indent:10px;">Nombre Del Apartamento:</td>
                        <td><?php echo $apartamento->getNombre(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px;">Dirección:</td>
                        <td><?php echo $apartamento->getDireccion(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px;">Numero De Piso:</td>
                        <td><?php echo $apartamento->getNumeroPiso(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px;">Tamaño:</td>
                        <td><?php echo $apartamento->getNumeroMetros()." m2"; ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px">Antiguedad:</td>
                        <td><?php echo $apartamento->getAniosUso()." Años"; ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px">Precio Base:</td>
                        <td><?php echo "$".$apartamento->getPrecioBase(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px">Porcentaje:</td>
                        <td><?php echo $apartamento->calculaValor().$apartamento->getPorcentaje(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px">Valor Total:</td>
                        <td><?php echo"$".$apartamento->calculaValor().$apartamento->getTotal(); ?></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="busqueda">
    <div class="row">
        <br>

        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class="glyphicon glyphicon-folder-open"></span> Información Del Inmueble</div>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td style="text-indent:10px;">Nombre Del Local:</td>
                        <td><?php echo $local->getNombre(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px;">Dirección:</td>
                        <td><?php echo $local->getDireccion(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px;">Numero De Ventanas:</td>
                        <td><?php echo $local->getNumeroVentanas(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px;">Tamaño:</td>
                        <td><?php echo $local->getNumeroMetros()." m2"; ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px">Antiguedad:</td>
                        <td><?php echo $local->getAniosUso()." Años"; ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px">Precio Base:</td>
                        <td><?php echo "$".$local->getPrecioBase(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px">Porcentaje:</td>
                        <td><?php echo $local->calculaValor().$local->getPorcentaje(); ?></td>
                    </tr>
                    <tr>
                        <td style="text-indent:10px">Valor Total:</td>
                        <td><?php echo"$".$local->calculaValor().$local->getTotal(); ?></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</html>

