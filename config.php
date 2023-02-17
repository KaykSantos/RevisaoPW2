<?php 
session_start();
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'db_arquivos');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar ao banco');

//CRUD User
function CadastrarUsuario($name, $email, $senha){
    $query = 'SELECT * FROM usuario WHERE nm_usuario = "'.$name.'" OR email_usuario = "'.$email.'"';
    $res = $GLOBALS['conn']->query($query);
    $rows = mysqli_num_rows($res);
    if($rows > 0){
        echo 'Nome de usuário e/ou email já utilizados!';
    }else if($rows == 0){
        $query = 'INSERT INTO usuario (nm_usuario, email_usuario, senha_usuario) 
        VALUES ("'.$name.'", "'.$email.'", "'.$senha.'")';
        $res = $GLOBALS['conn']->query($query);
        if($res){
            echo 'Cadastro realizado com sucesso! Faça login para entrar!';
        }else{
            echo 'Erro ao realizar cadastro, tente novamente!';
        }
    }
}
function LoginUsuario($nome, $senha){
    $query = 'SELECT * FROM usuario WHERE nm_usuario = "'.$nome.'" AND senha_usuario = "'.$senha.'"';
    $res = $GLOBALS['conn']->query($query);
    $rows = mysqli_num_rows($res);
    if($rows > 0){
        header('Location: home.php');
    }else{
        echo 'Nome de usuário e/ou senha inválidos!! Tente novamente.';
    }
}
function UploadArquivo($arquivo){
    $dir = 'arquivos/';
    if(move_uploaded_file($arquivo['tmp_name'], $dir.'/'.$arquivo['name'])){
        $query = 'INSERT INTO arquivo (nm_arquivo) VALUES ("'.$arquivo['name'].'")';
        $res = $GLOBALS['conn']->query($query);
        if($res){
            echo 'Upload realizado com sucesso!';
        }
    }else{
        echo 'Erro ao realizar upload';
    }
}