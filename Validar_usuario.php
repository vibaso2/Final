<?php
//Conectar BD
include('dbConfig.php');

$usuario = $_POST['employees'];
$clave = $_POST['password'];


$resultado =$db->query("SELECT * FROM employees WHERE employeeNumber = '$usuario' AND password = '$clave'");


$filas = $resultado->num_rows;


if($filas > 0)
{
    header("location:index.php");

}
else
{
    echo "Error de autenticacion";
}

mysqli_free_result($resultado);


mysqli_close($db);

?>
