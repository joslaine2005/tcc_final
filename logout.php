<?php
#include('topo.php');
session_start();
$_SESSION['nome'] = null;
$_SESSION['email'] = null;
session_destroy();
echo "Logout realizado com sucesso!<br>
<a href='login.php'>ENTRAR NOVAMENTE</a>";
#include('final.html');
?>
 <link rel="stylesheet" href="logout.css">
 <a href="sair.php" class="btn btn-danger me-5">Sair</a>