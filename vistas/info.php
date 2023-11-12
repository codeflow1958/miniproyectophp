<?php session_start();
if (!isset($_SESSION['email_user'])) {
    echo "debes iniciar sesion";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

</head>

<body>

    <div id="contenedor_todo">

        <nav>
            <div>
                <img src="/assets/devchallenges.svg" alt="">

            </div>
            <div><a href="/controler/logout.php"> cerrar sesion</a></div>

        </nav>

        <div>
            <div>
                <h1> Personal Info </h1>
                <p> Basic info, like your name and photo</p>
                <button> Edit</button>
            </div>
            <div>
                <div>
                    <p>photo</p>
                    <?php
                    $imagen = base64_encode($_SESSION["photo_user"]);



                    echo " <img src='data:image/*;base64,$imagen' height='200'/>";

                    ?>
                </div>
                <div>
                    <p>NAME</p>
                    <P> NICKY</P>
                </div>
                <div>
                    <p>BIO</p>
                    <P> soy el mejor programador </P>
                </div>
                <div>
                    <p>phone</p>
                    <P> 121545485</P>
                </div>
                <div>
                    <p>EMAIL</p>
                    <P> admin@admin.com</P>
                </div>
                <div>
                    <p>password</p>
                    <P> ******</P>
                </div>

            </div>


        </div>

    </div>

</body>

</html>