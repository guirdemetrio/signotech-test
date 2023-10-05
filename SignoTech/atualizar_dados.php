<?php
session_start();

$con = mysqli_connect('127.0.0.1:3307','root','abcd1234','Signotech') or die('Não foi possível conectar!');
$email = $_SESSION['email'];


if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
    $novonome = "UPDATE dadosUser SET nome ='{$nome}' WHERE email = '$email'";
    $insert = mysqli_query($con, $novonome);
    $_SESSION['confirmado'] = true;
}

if(!empty($_POST['endereco'])){
    $endereco= mysqli_real_escape_string($con, $_POST['endereco']);
    $novoendereco = "UPDATE dadosUser SET endereco ='{$endereco}' WHERE email = '$email'";
    $insert = mysqli_query($con, $novoendereco);
    $_SESSION['confirmado'] = true;
}

if(!empty($_POST['bairro'])){
    $bairro= mysqli_real_escape_string($con, $_POST['bairro']);
    $novobairro = "UPDATE dadosUser SET bairro ='{$bairro}' WHERE email = '$email'";
    $insert = mysqli_query($con, $novobairro);
    $_SESSION['confirmado'] = true;
}

if(!empty($_POST['cep'])){
    $cep= mysqli_real_escape_string($con, $_POST['cep']);
    $novocep= "UPDATE dadosUser SET cep='{$cep}' WHERE email = '$email'";
    $insert = mysqli_query($con, $novocep);
    $_SESSION['confirmado'] = true;
}

if(!empty($_POST['cidade'])){
    $cidade= mysqli_real_escape_string($con, $_POST['cidade']);
    $novacidade= "UPDATE dadosUser SET cidade ='{$cidade}' WHERE email = '$email'";
    $insert = mysqli_query($con, $novacidade);
    $_SESSION['confirmado'] = true;
}

if(!empty($_POST['uf'])){
    $uf= mysqli_real_escape_string($con, $_POST['uf']);
    $novauf= "UPDATE dadosUser SET uf ='{$uf}' WHERE email = '$email'";
    $insert = mysqli_query($con, $novauf);
    $_SESSION['confirmado'] = true;
}

if(!empty($_POST['telefone'])){
    $telefone= mysqli_real_escape_string($con, $_POST['telefone']);
    $novotelefone = "UPDATE dadosUser SET telefone ='{$telefone}' WHERE email = '$email'";
    $insert = mysqli_query($con, $novotelefone);
    $_SESSION['confirmado'] = true;    
}

header('Location: altera_dados.php');
?>







   
    
    

    , , 
   , 