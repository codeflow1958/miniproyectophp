<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="/stilos/1registrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>register</title>
</head>

<body>
    <main>

        <form action="/vistas/registrarse.php" method="post">


            <div class="mb-3 contenedro">

                <input style="font: var(--fa-font-solid); " type="email" class="form-control icon_place" id="exampleInputEmail1" placeholder=" Email" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">

                <input style="font: var(--fa-font-solid); " type="password" class="form-control icon" id="exampleInputPassword1" placeholder=" &#xf023; Password" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="btningresar">Start coding now</button>
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


    </main>

</body>

</html>