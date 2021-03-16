<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Registro</title>
</head>

<body>
    <div class="user">
        <header class="user__header">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
            <h1 class="user__title">REGISTRO</h1>
        </header>

        <form class="form" action="insert.php" method="POST">
            <div class="form__group">
                <input type="text" placeholder="Username" class="form__input" name="username" />
            </div>

            <div class="form__group">
                <input type="password" placeholder="Password" class="form__input" name="password" />
            </div>

            <button class="btn" type="submit">REGISTRARSE</button>
        </form>
    </div>
</body>

</html>