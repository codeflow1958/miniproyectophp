<?php session_start();
if (!isset($_SESSION['email_user'])) {
    echo "debes iniciar sesion";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>

    <div id="contenedor_todo">

        <nav class="flex  items-center gap-1">
            <div>
                <img src="/assets/devchallenges.svg" alt="">

            </div>
            <div><a href="/controler/logout.php"> cerrar sesion</a></div>

        </nav>

        <div>
            <div>
                <h1> Personal Info </h1>
                <p> Basic info, like your name and photo</p>
                <a href="/vistas/editar.php"><button
                        class="btn px-4 py-2 bg-blue-500 text-white rounded cursor-pointer"> Edit</button> </a>

            </div>
            <div class=" w-75 border border-solid border-2 p-4">
                <div class="flex  items-center gap-1">
                    <p>photo</p>
                    <?php




                    echo  '<img src="data:image/jpg; base64,' . base64_encode($_SESSION["photo_user"]) . '" />';

                    ?>
                </div>
                <div class="flex  items-center gap-1 h-">
                    <p>NAME</p>
                    <h2> <?php echo $_SESSION["name_user"];   ?></h2>
                </div>
                <div class="flex  items-center gap-1">
                    <p>BIO</p>
                    <h2> <?php echo $_SESSION["bio_user"];   ?></h2>
                </div>
                <div class="flex  items-center gap-1">
                    <p>phone</p>
                    <h2> <?php echo $_SESSION["phone_user"];   ?></h2>
                </div>
                <div class="flex items-center gap-1">
                    <p>EMAIL</p>
                    <h2> <?php echo $_SESSION["email_user"];   ?></h2>
                </div>
                <div class="flex  items-center gap-1">
                    <p>password</p>
                    <P> ******</P>
                </div>

            </div>


        </div>

    </div>

</body>

</html>