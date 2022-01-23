
<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
if (empty($_GET["idMascota"])) {
    exit("No hay id de mascota");
}
$idMascota = $_GET["idMascota"];
$bd = include_once "bd.php";
$sentencia = $bd->prepare("SELECT id, nombre, raza, adoptado, dueno FROM dbmascota WHERE id = ?");
$sentencia->execute([$idMascota]);
$mascota = $sentencia->fetchObject();
echo json_encode($mascota);
