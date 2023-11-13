<?php
session_start();
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
                <h1>change info</h1>
                <p> Basic info, like your name and photo</p>
                <a href=""><button class="btn px-4 py-2 bg-blue-500 text-white rounded cursor-pointer">bio </button>
                </a>

            </div>
            <div class=" w-75 border border-solid border-2 p-4">
                <form action="/controler/editar_info.php" method="post">
                    <div class="flex  items-center gap-1">
                        <label for="foto">Selecciona una foto:</label>
                        <input type="file" id="foto" name="foto" accept="image/*" value="<?php
                                                                                            $imagen = base64_encode($_SESSION["photo_user"]);



                                                                                            echo " <img src='data:image/*;base64,$imagen'/>";

                                                                                            ?> ">
                        <?php
                        $imagen = base64_encode($_SESSION["photo_user"]);



                        echo " <img src='data:image/*;base64,$imagen'/>";

                        ?>
                    </div>
                    <div class="flex  items-center gap-1 h-">
                        <p>NAME</p>
                        <input name="name" type="text" value=" <?php echo $_SESSION["name_user"];   ?> ">
                    </div>
                    <div class="flex  items-center gap-1">
                        <p>BIO</p>

                        <input name="bio" type="text" value=" <?php echo $_SESSION["bio_user"];   ?> ">
                    </div>
                    <div class="flex  items-center gap-1">
                        <p>phone</p>
                        <input name="phone" type="text" value="<?php echo $_SESSION["phone_user"];   ?>">
                    </div>
                    <div class="flex items-center gap-1">
                        <p>EMAIL</p>
                        <input name="email" type="text" value="<?php echo $_SESSION["email_user"];   ?>">
                    </div>
                    <div class="flex  items-center gap-1">
                        <p>password</p>
                        <input name="password" type="text">
                    </div>

                    <button class=" btn px-4 py-2 bg-blue-500 text-white rounded cursor-pointer" type="submit" class="btn btn-primary" name="btningresar">enviar</button>
                </form>

            </div>


        </div>

    </div>

</body>

</html>