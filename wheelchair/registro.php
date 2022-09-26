
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-register.css">
    <title>wheelchair</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Bem-Vindo</h1>
            <img src="imagens/wheelchair.svg" class="left-login-image" alt="wheelchair">
        </div>
        <form action="registro.php" method="POST">
            <div class="right-login">
                <div class="card-login">
                    <h1>REGISTER</h1>
                    <div class="textfield">
                        <label for="usuario">Username</label>
                        <input type="text" name="user" placeholder="Username">
                    </div>
                    <div class="textfield">
                        <label for="senha">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="textfield">
                        <label for="senha">Password</label>
                        <input type="password" name="senha" placeholder="Password">
                    </div>
                    <button class="btn-login" href="login.php">REGISTER</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>