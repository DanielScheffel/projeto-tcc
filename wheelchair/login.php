<?php
    include('conexao.php');
    
    if(isset($_POST['email']) || isset($_POST['senha']) ){
        if(strlen($_POST['email'] == 0)){
            //echo "Preencha o email";
        }else if(strlen($_POST['senha'] == 0)){
            //echo "Preencha o senha";
        }else{

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("falha na conexao");

            $quantidade = $sql_query->num_rows;
            if($quantidade == 1){

                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['user'] = $usuario['usuario'];

                header("Location: index.php");

            }else{
                echo "falha ao logar! email ou senha incorretos";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-login.css">
    <title>wheelchair</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Bem-Vindo</h1>
            <img src="imagens/wheelchair.svg" class="left-login-image" alt="wheelchair">
        </div>
        <form action="" method="POST">
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">E-mail</label>
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Password</label>
                        <input type="password" name="senha" placeholder="Password">
                    </div>
                    <button class="btn-login">Login</button>
                </div>
            </div>
        </form>    
    </div>
</body>
</html>