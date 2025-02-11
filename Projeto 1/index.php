<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Login</title>
    <style>
        body{
            background-image: linear-gradient(to right, #0f2c63,#000000);
        }
        div{
            background-color: hsla(0, 0%, 0%, 0.8);
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 70px;
            border-radius: 10px;
        }
        input{
            font-size: 15px;
            padding: 10px;
            border: none;
            outline: none;
        }
        button{
            background-color: #1e90ff;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            border: none;
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
        <div>
        <h1>Login</h1>
        <form id="Login" action="login.php" method="POST">
            <label for="usuario"></label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuário" required>
                <br>
                <br>
                <input type="password" name="senha" placeholder="Senha" required>
                <br>
                <br>
                    <button type="submit">Enviar</button>
            </form>
    </div>
</body>
</html>