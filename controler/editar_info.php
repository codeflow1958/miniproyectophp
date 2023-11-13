<?php
session_start();
if (!isset($_SESSION['email_user'])) {
    echo "debes iniciar sesion";
    die();
}



require_once($_SERVER["DOCUMENT_ROOT"] . "/config/conexion.php");

$iduser = $_SESSION["id_user"];


if (empty($_POST['name']) || empty($_POST["bio"]) || empty($_POST["phone"]) || empty($_POST["email"])) {
    echo "Todos los campos son obligatorios ";
} else {

    $name = $_POST["name"];
    $bio = $_POST["bio"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $res = $mysqli->query("SELECT * FROM usuarios WHERE (email = '$email' AND id !='$iduser')");
    if ($res->num_rows > 0) {
        echo "el email ya existe";
    } else {

        if (empty($_POST['pasword']) || empty($tmp_name)) {

            $update = $mysqli->query("UPDATE usuarios 
                                        SET email ='$email', name = '$name', bio = '$bio', phone='$phone'
                                        WHERE id ='$iduser'");
        } else {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $update = $mysqli->query("UPDATE usuarios 
                                        SET email ='$email',password = '$password' ,name = '$name', bio = '$bio', phone='$phone'
                                        WHERE id ='$iduser'");
        }

        if ($update) {
            echo 'inicie sesion <a href="/index.php">login</a>';
        } else {
            header("/controler/logout.php");
        }
    }
}
