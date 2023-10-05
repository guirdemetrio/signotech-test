<?php
session_start();

if($_POST['continuar'] == 'Continuar'){

    $con = mysqli_connect('127.0.0.1:3307','root','abcd1234','Signotech') or die('Não foi possível conectar!');
    
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    
    $telefone = $_POST['telefone'];
    $telefone="(".substr($telefone,0,2).") ".substr($telefone,2,-4)."-".substr($telefone,-4);

    $tipoRevista = $_POST['revista'];
    $quantidade = $_POST['quantidade'];

    $atracoes = $_POST['atracoes'];
    $sugestao = $_POST['sugestao'];
    if($sugestao == null){
        $sugestao = "nao";
    }

    $imagem = $_POST['imagem'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $queryUser = "INSERT INTO dadosUser (nome, email, telefone, bairro, endereco, cep, cidade, uf)
        VALUES ('$nome', '$email', '$telefone', '$bairro', '$endereco', '$cep', '$cidade', '$uf')";      
        $insertUser = mysqli_query($con, $queryUser);

        $idUser = "SELECT idUser FROM dadosUser WHERE email = '$email'";
        $idUserQuery = mysqli_query($con, $idUser);
        $rows_id = mysqli_fetch_assoc($idUserQuery);
        $id = $rows_id['idUser'];

        $queryProd = "INSERT INTO producao(idUser, tipoRevista, quantidade, atracoes, sugestoes, imagens)
        VALUES ('$id','$tipoRevista', '$quantidade', '$atracoes', '$sugestao', '$imagem')";
        $insertProd = mysqli_query($con, $queryProd);
        
        if($insertUser && $insertProd){
            $_SESSION['email'] = $email;
            $arquivo = "
            <style type='text/css'>
            body {
            margin:0px;
            font-family:Verdane;
            font-size:12px;
            color: #666666;
            }
            a{
            color: #666666;
            text-decoration: none;
            }
            a:hover {
            color: #FF0000;
            text-decoration: none;
            }
            </style>
                <html>
                    <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
                        <tr>
                        <td>
                            <tr>
                            <td width='500'>Olá $nome, cadastro confirmado para o email: $email</td>
                            </tr>
                        </tr>  
                    </table>
                </html>
            ";
            $assunto = "Confirmação de cadastro!";

            $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: $email' . "\r\n";
                $headers .= 'Return-Path: $email' . "\r\n";
            $enviaremail = mail($email, $assunto, $arquivo, $headers);
            $enviaremailS = mail("davi@signotech.com.br", $assunto, $arquivo, $headers);
            if($enivaremail && $enviaremailS ){
                header('Location: confirma_cadastro.php');
                exit();
            }
            else{
                $_SESSION['erro'] = true;
                header('Location:index.php');
                exit();
            }
        }
        else{
            $_SESSION['erro'] = true;
            header('Location:index.php');
            exit();
        }

    }
    else {
        $_SESSION['email_invalido'] = true;
        header('Location:index.php');
        exit();
    }
    
}











?>