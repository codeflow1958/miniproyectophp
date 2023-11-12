<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tmp_name = $_FILES["photo"]["tmp_name"];
    $name = $_POST["name"];
    $bio = $_POST["bio"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $password = password_hash($_POST['pasword'], PASSWORD_BCRYPT);

    $contenido = addslashes(file_get_contents($tmp_name));




    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/conexion.php");
    $res = $mysqli->query("select * from usuarios where email = '$email'");
    if ($res->num_rows === 1) {
        echo "el email ya existe";
    } else {
        $res = $mysqli->query("insert into usuarios(email,password,photo,name,bio,phone)values('$email','$password',' $contenido','$name','$bio','$phone'  )  ");
        if ($res == 1) {
            echo 'se registro con exito, inicie secion <a href="/index.php">login</a>';
            # code...
        } else {
            echo " ocurrio un error";
            # code...
        }
    }
}
