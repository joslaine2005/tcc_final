<?php

   if(isset($_POST['submit']))
   {
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email:' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Sexo: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('Data_nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Cidade: ' . $_POST['cidade']);
    //print_r('<br>');
    //print_r('Estado: ' . $_POST['estado']);
    //print_r('<br>');
    //print_r('Endereço: ' . $_POST['endereco']);

    include_once('conexao.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $telefone = $_POST['telefone'];
      $sexo = $_POST['genero'];
      $data_nasc = $_POST['data_nascimento'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];
      $endereco = $_POST['endereco'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco) 
      VALUES ('$nome', '$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
   header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title></title>
    <style>
    </style>
</head>
<body>
 <a href="pg-principal.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method = "POST">
            <fieldset>
                <legend><b>fórmulario de cliente</b></legend>
                <br></br>   
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">nome completo</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="email" id="nome" class="inputUser" required>
                    <label for="email"class="labelInput">Email</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone"class="labelInput">Telefone</label>
                </div>
                <p>sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br></br>
                <div class="inputBox">
                 <label for="data_nascimento"> <b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br></br>
                <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade"class="labelInput">Cidade</label>
                    </div>
                    <br></br>
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado"class="labelInput">Estado</label>
                    </div>
                    <br><br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco"class="labelInput">Endereço</label>
                    </div>
                    <br></br>
               <input type="submit" name="submit" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>