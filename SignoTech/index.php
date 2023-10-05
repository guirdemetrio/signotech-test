<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastre-se</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="website icon" type="png" href="imagens/minilogo.png">
</head>
<body>
    <div class ="header"> <img src="imagens/Signo.png"></div>
    <div class="principal">

        <h4>> DADOS PARA ENTREGA</h4>

        <form name="entrega" method="post" action="envia_dados.php" class="formulario">
            <?php
            if(isset($_SESSION['erro'])):
            ?>
            
            <h1>Ocorreu um erro, tente novamente mais tarde!</h1>
            
            <?php
            endif;
            unset($_SESSION['erro']);
            ?>
        
            <label><b>Nome:</b></label> <input type="text" name="nome" required><br>
            <label><b>Endereço:</b></label> <input type="text" name="endereco" ><br>
            <label><b>Bairro:</b></label> <input type="text" name="bairro" ><br>
            <label><b>Cep:</b></label> <input type="text" name="cep" ><br>
            <label><b>Cidade:</b></label><input type="text" name="cidade" ><br>
            <label><b>UF:</b></label> <input type="text" name="uf" ><br>
            
            <?php
            if(isset($_SESSION['email_invalido'])):
            ?>
            
            <h1>E-mail inválido, por favor insira um e-mail válido!</h1>
            
            <?php
            endif;
            unset($_SESSION['email_invalido']);
            ?>
            <label><b>E-mail:</b></label> <input type="email" name="email" required><br>
            <label><b>Telefone:</b></label> <input type="tel" name="telefone" required><br> 

            <h4>> DADOS PARA PRODUÇÃO</h4>

            <label id="revista"><b>Tipo Revistinha:</b> </label><input type="radio" name="revista" value="convite"> Convite 
            <input type="radio" name="revista" value="lembranca"> Lembrança
            <input type="radio" name="revista" value="convitelem"> Convite-Lembrança<br>
            <label id="quantidade"><b>Quantidade:</b></label> <input type="number" name="quantidade"><br><br>
            <label id="atracao"><b>Atrações do evento:</b></label><textarea name="atracoes" id ="atracoes"></textarea><br><br>
            <input type="checkbox"name="sugestao" value="sim"> Aceito sugestões de texto para a capa<br><br>
            <label><b>Imagens:</b></label><input type="file" accept="image/*" name="imagem"><br> <br>
            <input type="submit" id="continuar" name="continuar" value="Continuar">
        
        </form>
    </div>
    
	

</body>
</html>