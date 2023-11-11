<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["email"];
    $password = $_POST["password"];

    require_once "./config/conexion.php";

    $res = $mysqli->query("select * from usuarios where email = '$username' and password = '$password' ");

    if ($res->num_rows === 1) {
        header("Location: ./vistas/info.php");
    } else {
        echo " no existe";
    }
}
