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

    <main>
        <a href="/controler/logout.php"> cerrar sesion</a>
        <nav>
            <p>logo</p>
            <p> foto con info </p>
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
                    <img src="" alt="">
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

    </main>

</body>

</html>