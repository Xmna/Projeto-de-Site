<?php
Include_once('autoload.php');

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['mp-nome']) && $_POST['mp-nome'] != "" 
        && isset($_POST['senha']) && $_POST['senha'] != ""
        && isset($_POST['mp-email']) && $_POST['mp-email'] != ""){
            
    $usuario = autoload('Usuario');
    $usuario->setNome($_POST['mp-nome']);
    $usuario->setEmail($_POST['mp-email']);
    $usuario->setSenha($_POST['senha']);

    
    $usuario->insert($usuario);
    echo "sucesso";
}
?>