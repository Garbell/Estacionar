<?php

    include_once("conexao.php");

    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $csenha = filter_input(INPUT_POST, 'csenha', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $carro = filter_input(INPUT_POST, 'carro', FILTER_SANITIZE_STRING);
    $placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);

    //echo "Login: $login <br>";
    //echo "Nome: $nome <br>";

    $sql = "INSERT INTO cadastro (login, senha, csenha, nome, cpf, email, telefone, carro, placa) VALUES ('$login','$senha','$csenha','$nome','$cpf','$email','$telefone','$carro','$placa',NOW())";
    
    if(!mysqli_query($conn,$sql)){
        echo 'Not Inserted';
    }
    else{
        echo 'Inserted';
    }
    
    header("refresh:2; url=index.php");
?>