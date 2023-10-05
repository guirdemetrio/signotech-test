<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Alterar dados</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="website icon" type="png" href="imagens/minilogo.png">
</head>
<body>
    <div class ="header"> <img src="imagens/Signo.png">
    <div class="nav">
            <a href="menu.php">MENU</a>|
            <a href="index.php">SAIR</a>
        </div>
    </div>
    <div id="altera_dados">
    <h4>Alterar dados</h4><br>
            <?php
			if(isset($_SESSION['confirmado'])):
			?>
			<h4>Dados alterados com sucesso!</h4>
			<?php
			endif;
			unset($_SESSION['confirmado']);
			?>
             <?php
			if(isset($_SESSION['erro'])):
			?>
			<h1>Ocorreu um erro, não foi possível alterar os dados!</h1>
			<?php
			endif;
			unset($_SESSION['erro']);
			?>
    <form name="altera" method="post" action="atualizar_dados.php" class="formulario">
            <label><b>Nome:</b></label> <input type="text" name="nome"><br>
            <label><b>Endereço:</b></label> <input type="text" name="endereco" ><br>
            <label><b>Bairro:</b></label> <input type="text" name="bairro" ><br>
            <label><b>Cep:</b></label> <input type="text" name="cep" ><br>
            <label><b>Cidade:</b></label><input type="text" name="cidade" ><br>
            <label><b>UF:</b></label> <input type="text" name="uf" ><br>
            <label><b>Telefone:</b></label> <input type="tel" name="telefone"><br><br>
            <input type="submit" id="salvar" name="salvar" value="Salvar">
    </form>
     </div>
    
</body>
</html>