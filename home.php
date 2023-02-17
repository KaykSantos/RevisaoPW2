<?php
include('config.php');
if($_POST){
    if(isset($_POST['upload'])){
        UploadArquivo($_FILES['file']);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;    
        }
        main{
            height: 700px;
            display: flex;
            flex-direction: column;
            justify-content: ;
            align-items: center;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: ;
            align-items: ;
            padding: 20px;
            /*background-color: blue;*/
            width: 80%;
            height: 500px;
            border-radius: 20px;
            border: 1px solid black;
            box-shadow: 3px 4px;
            margin: 50px;
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
            margin-top: 10px;
        }
        header{
            background-color: black;
            width: 100%;
            height: 70px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
        header p{
            text-transform: uppercase;
            font-weight: bolder;
            font-size: 40px;
            font-family: arial;
            margin-bottom: 10px;
            letter-spacing: 2px;
            color: white;
        }
        .mg{
            margin-top: 10px;
        }
        hr{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .arquivos{
            width: 200px;
            height: 60px;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: start;
            padding: 9px;
        }
        .arquivos a{
            background-color: green;
            width: 90px;
            color: white;
            text-align: center;
            border-radius: 4px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <header>
        <p>FTP - UPLOAD/DOWNLOAD</p>
    </header>
    <main>
        <form method="POST" enctype="multipart/form-data">
            <h1>Upload</h1>
            <label for="file">Escolha o arquivo para realizar upload:</label>
            <input type="file" name="file" id="file" class="mg">
            <button name="upload" class="mg">Enviar</button>
            <hr>
            <h1>Download</h1>
            <!---<div class="arquivos">
                Nome: 
                <a href="localhost/arquivos/" download>Download</a>
            </div>-->
            <?php
                $query = 'SELECT * FROM arquivo';
                $res = $GLOBALS['conn']->query($query);
                foreach($res as $row){
                    echo '
                    <div class="arquivos">
                        Nome: '.$row['nm_arquivo'].' 
                        <a href="localhost/arquivos/'.$row['nm_arquivo'].'" download>Download</a>
                    </div>
                    ';
                }
            ?>
        </form>
    </main>
</body>
</html>