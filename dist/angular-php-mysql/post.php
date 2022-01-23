
<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Headers: *");
$jsonMascota = json_decode(file_get_contents("php://input"));
if (!$jsonMascota) {
    exit("No hay datos");
}
$bd = include_once "bd.php";
$sentencia = $bd->prepare("INSERT INTO dbmascota(nombre, raza, adoptado, dueno) VALUES (?,?,?,?)");
$resultado = $sentencia->execute([$jsonMascota->nombre, $jsonMascota->raza, $jsonMascota->adoptado, $jsonMascota->dueno]);
echo json_encode([
    "resultado" => $resultado,
]);
