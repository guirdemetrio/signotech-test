<?php
session_start();
$con = mysqli_connect('127.0.0.1:3307','root','abcd1234','Signotech') or die('Não foi possível conectar!');
$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Menu</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="website icon" type="png" href="imagens/minilogo.png">
</head>
<body>
    <div class ="header"> <img src="imagens/Signo.png">
        <div class="nav">
            <a href="altera_dados.php">ALTERAR DADOS</a>|
            <a href="index.php">SAIR</a>
        </div>
    
    </div>
    <div class="principal">
        <div id = "dados">
        <?php
                $sel = "SELECT idUser, nome, telefone FROM dadosUser ";
                $query = mysqli_query($con, $sel);
                while($rows = mysqli_fetch_assoc($query)){?>
                Dados do usuário: <?php echo 'Id: ', $rows['idUser'],' Nome: ', $rows['nome'],' Telefone: ', $rows['telefone'];?><br>

            <?php
                }
                ?>
        </div>
     </div>
    
</body>
</html>