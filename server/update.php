<?php
 ?>
<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: *");
if ($_SERVER["REQUEST_METHOD"] != "PUT") {
    exit("Solo acepto peticiones PUT");
}
$jsonMascota = json_decode(file_get_contents("php://input"));
if (!$jsonMascota) {
    exit("No hay datos");
}
$bd = include_once "bd.php";
$sentencia = $bd->prepare("UPDATE dbmascota SET nombre = ?, raza = ?, adoptado = ?, dueno = ? WHERE id = ?");
$resultado = $sentencia->execute([$jsonMascota->nombre, $jsonMascota->raza, $jsonMascota->adoptado, $jsonMascota->dueno, $jsonMascota->id]);
echo json_encode($resultado);
