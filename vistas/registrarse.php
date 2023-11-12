<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="contenedor1">
        <form action="/controler/controlador_registro.php" method="post" enctype="multipart/form-data">
            <div>
                <h2>registrese</h2>
                <p>ingrese sus datos porfavor </p>

            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" name="photo" type="file" id="formFile" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter your name...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Bio</label>
                <input name="bio" type="text" class="form-control form-control-lg" placeholder="Enter yoyr bio...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Phone</label>
                <input name="phone" type="text" class="form-control" placeholder="Enter your Phone...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" placeholder="Enter your Email...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Password</label>
                <input type="text" name="pasword" class="form-control" placeholder="Enter your Password...">
            </div>
            <button type="submit" class="btn btn-primary" name="btningresar">Registrarse</button>


        </form>

    </div>

</body>

</html>