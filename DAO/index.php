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
    //    $usuario = new Usuario();
    //    $usuario->login("John", "1234567890");
    //    echo $usuario
    
    //$aluno = new Usuario();
    //$aluno->setDeslogin("aluno");
    //$aluno->setDessenha("1245".time());
    //$aluno->insert();
    //==========================================//
    //com o metodo contruct o codigo fica menor
    
//    $aluno = new Usuario("aluno", "142536");
//    $aluno->insert();
//    echo $aluno
//    //alterar um ID
//$usuario = new Usuario();
//
//$usuario->loadById(7);
//$usuario->update("professor","15656582651");
//echo $usuario;

    $usuario =new Usuario();
    $usuario ->loadById(8);
    $usuario ->delete();
    echo $usuario;
?>
