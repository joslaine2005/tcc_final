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
      $adm = 0;
      

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco, adm) 
      VALUES ('$nome', '$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco', '$adm')");
   header('location: login.html');
}
?>