<?php
include_once("Categoria.php");
include_once("Torneo.php");
include_once("Equipo.php");
include_once("Partido.php");
include_once("Fotbool.php");
include_once("Basket.php");

$catMayores = neW Categoria(1,'Mayores');
$catJuveniles = neW Categoria(2,'juveniles');
$catMenores = neW Categoria(1,'Menores');

$objE1 = neW Equipo("Equipo Uno", "Cap.Uno",1,$catMayores);
$objE2 = neW Equipo("Equipo Dos", "Cap.Dos",2,$catMayores);

$objE3 = neW Equipo("Equipo Tres", "Cap.Tres",3,$catJuveniles);
$objE4 = neW Equipo("Equipo Cuatro", "Cap.Cuatro",4,$catJuveniles);

$objE5 = neW Equipo("Equipo Cinco", "Cap.Cinco",5,$catMayores);
$objE6 = neW Equipo("Equipo Seis", "Cap.Seis",6,$catMayores);

$objE7 = neW Equipo("Equipo Siete", "Cap.Siete",7,$catJuveniles);
$objE8 = neW Equipo("Equipo Ocho", "Cap.Ocho",8,$catJuveniles);

$objE9 = neW Equipo("Equipo Nueve", "Cap.Nueve",9,$catMenores);
$objE10 = neW Equipo("Equipo Diez", "Cap.Diez",9,$catMenores);

$objE11 = neW Equipo("Equipo Once", "Cap.Once",11,$catMayores);
$objE12 = neW Equipo("Equipo Doce", "Cap.Doce",11,$catMayores);

//punto 1
$objPartido1 = new Futbol(1, 02-05-24, $objE1, 3, $objE2, 1);
$objTorneo1 = new Torneo($objPartido1, 100000);

//punto 2
//inciso a
$objPartido2 = new Basket(11, 2024-05-05, $objE7, 80, $objE8, 120, 7);
$objPartido3 = new Basket(12, 2024-05-06, $objE9, 81, $objE10, 110, 8);
$objPartido4 = new Basket(13, 2024-05-07, $objE11, 115, $objE12, 85, 9);
//inciso b
$objPartido5 = new Futbol(14, 2024-05-07, $objE1, 3, $objE2, 2);
$objPartido6 = new Futbol(15, 2024-05-08, $objE3, 0, $objE4, 1);
$objPartido7 = new Futbol(16, 2024-05-09, $objE5, 2, $objE6, 3);

?>
