<?php
include('conexao.php');
?>


<html lang="en">
<head>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>tela de login</title>
 </head>
<body>
    <a href="pg-principal.php">Voltar</a>
 <div>
<h1>login</h1>
<form action="testLogin.php" method="POST">
<input type="text" name="email" placeholder="Email">
<br><br>
<input type="password" name="senha" placeholder="Senha">
<br><br>
<input class="inputSubmit" type="submit" name="submit" value="Enviar">
</form>
    </div>
</body>
