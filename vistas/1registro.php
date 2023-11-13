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
    <title>register</title>
</head>


<body class="flex items-center justify-center h-screen">
    <div class=" border-solid border-2 border-indigo-600 rounded-lg container mx-auto w-80 " id="contenedor_todo">
        <div class="flex items-center">
            <img class=" scale-75" src="/assets/devchallenges.svg" alt="">


        </div>

        <div>
            <h1>Join thausands of leaners from around the word </h1>
        </div>
        <div>
            <p>Master web development by making real-life project. there are multiple paths for you to choose</p>
        </div>


        <form action="/vistas/registrarse.php" method="post">


            <div class="">

                <input type="email" class="form-control icon_place  border-solid border-2 border-indigo-600 rounded-lg  " id="InputEmail1" placeholder=" Email" aria-describedby="emailHelp" name="email">

            </div>
            <div class="">

                <input type="password" class="form-control icon  border-solid border-2 border-indigo-600 rounded-lg" id="Password1" placeholder="Password" name="password">
            </div>

            <button type="submit" name="btningresar">Start coding now</button>
        </form>
        <div>
            <p> or continue whith these social profile</p>
            <div>
                imagenes
            </div>
            <p>Aadready a member?
                <a href="/index.php">Login </a>
            </p>
        </div>


    </div>
</body>



</html>