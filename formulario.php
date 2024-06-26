<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $telefone=$_POST['telefone'];
        $genero=$_POST['genero'];
        $nascimento=$_POST['nascimento'];
        $estado=$_POST['estado'];
        $cidade=$_POST['cidade'];
        $pais=$_POST['pais'];
        $endereco=$_POST['endereco'];

        $result= mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,nascimento,cidade,estado,pais,endereço) VALUES ('$nome','$email','$telefone','$genero','$nascimento','$cidade','$estado','$pais','$endereco')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/register</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(238,114,114),rgb(163,24,24));
        }
        .box{
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.6);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            color:white;
        }
        fieldset{
            border: 3px solid rgb(232, 10, 10);
            border-radius: 15px;
        }
        legend{
            border:1px solid rgb(232, 10, 10);
            padding: 10px;
            text-align: center;
            background-color:rgb(232, 10, 10);
            border-radius: 5px;
        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border:none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~.labelInput,
        .inputUser:valid ~.labelInput{
            top:-20px;
            font-size: 12px;
            color:rgb(232, 10, 10);
        }
        #nascimento{
            border: 1px solid rgb(232, 10, 10);
            padding: 10px;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(232, 10, 10, 0.527); ;
            color:white;
            outline: none;
        }
        #submit{
            width: 100%;
            background-image: linear-gradient(to right, rgb(238,114,114),rgb(163,24,24));
            color:white;
            padding: 10px;
            border-radius: 15px;
            font-size: 18px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(218, 88, 88),rgb(151, 16, 16));
        }


    </style>

</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b> Formulário de Clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Seu email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Seu telefone</label>
                </div>
                <br><br>
                <p> <b>Sexo:</b></p>
                    <input type="radio" name="genero" id="feminino" value="feminino"required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" id="masculino" value="masculino"required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="genero" id="outro" value="outro"required>
                    <label for="outro">Outro</label>
                    <br><br>
                    <br>

                <label for="nascimento"> <b>Data de Nascimento</b></label>
                <input type="date" name="nascimento" id="nascimento" required>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="pais" id="pais" class="inputUser" required>
                    <label for="pais" class="labelInput">País</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">


            </fieldset>
        </form>
    </div>
</body>
</html>
