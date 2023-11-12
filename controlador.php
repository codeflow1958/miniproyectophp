<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["email"];
    $password = $_POST["password"];

    require_once "./config/conexion.php";

    $res = $mysqli->query("select * from usuarios where email = '$username'");
    $userData = $res->fetch_assoc();




    if ($res->num_rows != 1) {
        echo 'el usuario no existe <a href="/vistas/registrarse.php"> registrate</a>';
    }

    if (password_verify($password, $userData['password'])) {
        session_start();
        $_SESSION["email_user"] = $userData['email'];
        $_SESSION["photo_user"] = $userData['photo'];
        $_SESSION["name_user"] = $userData['name'];
        $_SESSION["bio_user"] = $userData['bio'];
        $_SESSION["phone_user"] = $userData['phone'];


        header("Location: ./vistas/info.php");
    } else {
        echo 'password incorrecto <a href="/index.php">login</a>';
    }







    // if ($res->num_rows != 1) {
    //     $userData = $res->fetch_assoc();
    //     session_start();
    //     $_SESSION["email_user"] = $userData['email'];
    //     $_SESSION["photo_user"] = $userData['photo'];
    //     $_SESSION["name_user"] = $userData['name'];
    //     $_SESSION["bio_user"] = $userData['bio'];
    //     $_SESSION["phone_user"] = $userData['phone'];


    //     header("Location: ./vistas/info.php");
    // } else {
    //     echo " password o email incorrecto";
    // }
}
