<?php session_start();
if (!isset($_SESSION['email_user'])) {
    echo "debes iniciar sesion";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<style>
    * {
        font-family: 'Noto Sans', sans-serif
    }
</style>

<body class="flex items-center justify-center h-screen">

    <div id="contenedor_todo">

        <nav class="flex  items-center gap-1">
            <div>
                <img src="/assets/devchallenges.svg" alt="">

            </div>
            <div><a href="/controler/logout.php"> cerrar sesion</a></div>

        </nav>

        <div class="border-solid border-2 border-gray-500 rounded-lg">
            <div class="border-t border-1 border-border-gray-500">
                <h1 class="uppercase font-bold text-4xl mb-4 mt-4"> Personal Info </h1>
                <p class=" text-xl"> Basic info, like your name and photo</p>
                <a href="/vistas/editar.php"><button class="btn px-4 py-2 bg-blue-500 text-white rounded cursor-pointer"> Edit</button> </a>

            </div>
            <div class=" w-75 border border-solid border-2 p-4 space-x-3">
                <div class="flex  items-center gap-1">
                    <p>photo</p>
                    <?php











                    echo '<img src="data:image/jpg; base64,' . base64_encode($_SESSION[" photo_user"]) . '" />';
                    ?>
                </div>
                <div class=" ">
                    <div class="mt-10 flex  items-center gap-1 border-t border-1 border-border-gray-500 space-x-32 ">
                        <p>NAME</p>
                        <h2> <?php echo $_SESSION["name_user"];   ?></h2>
                    </div>
                    <div class="flex  items-center gap-1 border-t border-1 border-border-gray-500  space-x-32">
                        <p>BIO</p>
                        <h2> <?php echo $_SESSION["bio_user"];   ?></h2>
                    </div>
                    <div class="flex  items-center gap-1 border-t border-1 border-border-gray-500 space-x-32">
                        <p>phone</p>
                        <h2> <?php echo $_SESSION["phone_user"];   ?></h2>
                    </div>
                    <div class="flex items-center gap-1 border-t border-1 border-border-gray-500 space-x-32">
                        <p>EMAIL</p>
                        <h2> <?php echo $_SESSION["email_user"];   ?></h2>
                    </div>
                    <div class="flex  items-center gap-1 border-t border-1 border-border-gray-500 space-x-32">
                        <p>password</p>
                        <P> ******</P>
                    </div>
                </div>

            </div>


        </div>

    </div>

</body>

</html>