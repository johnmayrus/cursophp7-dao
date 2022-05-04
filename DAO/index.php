<?php
    
    require_once "config.php";
//    $sql = new Sql();
//    $usuarios = $sql->select("SELECT * FROM db_usuarios");
//    echo json_encode($usuarios);
//=============================================//
//carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root
//============================================//
//carrega uma lista de usuários
//    $lista = Usuario::getList();
//    echo json_encode($lista);
//============================================//
//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("u");
//echo json_encode($search);
    //============================================//
    //carrega um usuários usando login e senha
    $usuario = new Usuario();
    $usuario->login("John", "1234567890");
    echo $usuario
?>
