<?php 
session_start();
if($_POST['continuar'] == "Continuar"){
    header ('Location: menu.php');
    exit();
}
else{
    $_SESSION['erro'] = true;
    header('Location: index.php');
    exit();
}
?>