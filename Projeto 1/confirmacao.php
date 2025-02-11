<?php
session_start();
if (!isset($_SESSION["usuario"])) {
echo "<script>location.href='index.php';</script>";
    exit;
}
?>
<html>
    <head>
        <title>Confirmação de Login</title>
    </head>
    <body>
        <h1>Login bem-sucedido!</h1>
        <p>Bem-vindo, <?php echo $_SESSION["nome"]; ?>!</p>
    </body>
</html>