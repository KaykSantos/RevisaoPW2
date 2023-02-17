<?php
include('config.php');
if($_POST){
    if(empty($_POST['name']) || empty($_POST['password']) || empty($_POST['email'])){
        echo 'Preencha os campos com as informações necessárias!';
    }else{
        if(isset($_POST['cadastrar'])){
            CadastrarUsuario($_POST['name'], $_POST['email'], $_POST['password']);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;    
            font-family: arial;
        }
        main{
            /*background-color: red;*/
            height: 700px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /*background-color: blue;*/
            width: 400px;
            height: 300px;
            border-radius: 20px;
            border: 1px solid black;
            box-shadow: 3px 4px;
        }
        form p{
            text-transform: uppercase;
            font-weight: bolder;
            font-size: 25px;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }
        form a{
            text-decoration: none;
            font-size: 17px;
            color: black;
            margin-top: 20px;
        }
        .input{
            width: 300px;
            padding: 2px;
            font-size: 17px;
            margin-bottom: 20px;
        }
        button{
            width: 80px;
            height: 30px;
        }
    </style>
</head>
<body>
    <header>

    </header>
    <main>
        <form method="POST">
            <p>Cadastro</p>
            <input type="name" id="name" name="name" placeholder="Nome: " class="input">
            <input type="email" id="email" name="email" placeholder="Email: " class="input">
            <input type="password" id="password" name="password" placeholder="Senha: " class="input">
            <button id="cadastrar" name="cadastrar">Cadastrar</button>
            <a href="index.php">Já possui conta? Realizar login!</a>
        </form>
    </main>
</body>
</html>