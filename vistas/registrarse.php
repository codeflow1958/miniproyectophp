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
    <title>Document</title>
</head>
<style>
* {
    font-family: 'Noto Sans', sans-serif
}
</style>

<body class="flex items-center justify-center h-screen">
    <div class=" border-solid border-2 border-gray-500  rounded-lg p pt-30px">
        <form action="/controler/controlador_registro.php" method="post" enctype="multipart/form-data">
            <div>
                <h2>registrese</h2>
                <p>ingrese sus datos porfavor </p>

            </div>

            <div class="mb-3 flex border-t border-1 border-gray-500 ">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" name="photo" type="file" id="formFile" accept="image/*">
            </div>

            <div class="mb-3 border-t border-1 border-border-gray-500 ">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter your name...">
            </div>
            <div class="mb-3 mb-3 border-t border-1 border-border-gray-500 ">
                <label for="formGroupExampleInput2" class="form-label">Bio</label>
                <input name="bio" type="text" class="form-control form-control-lg" placeholder="Enter yoyr bio...">
            </div>
            <div class="mb-3 mb-3 border-t border-1 border-border-gray-500 ">
                <label for="formGroupExampleInput" class="form-label">Phone</label>
                <input name="phone" type="text" class="form-control" placeholder="Enter your Phone...">
            </div>
            <div class="mb-3 mb-3 border-t border-1 border-border-gray-500 ">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" placeholder="Enter your Email...">
            </div>
            <div class="mb-3 mb-3 border-t border-1 border-border-gray-500 ">
                <label for="formGroupExampleInput2" class="form-label">Password</label>
                <input type="text" name="pasword" class="form-control" placeholder="Enter your Password...">
            </div>
            <button type="submit" class="btn px-4 py-2 bg-blue-500 text-white rounded cursor-pointer"
                name="btningresar">Registrarse</button>


        </form>

    </div>

</body>

</html>