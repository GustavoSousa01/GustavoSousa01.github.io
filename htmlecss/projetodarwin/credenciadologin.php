<?php

session_start();

$nome = "";
$senha = "";
$erro = false;

if (!empty($_POST)) {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if ($nome == "Romário Alves de Sousa" && $senha == "romariopinto123") {
        $_SESSION['logado'] = true;
        $_SESSION['usuario_nome'] = $nome;

        header("Location: credenciado.html");
        exit();
    } else {
        $erro = true;
    }
}
?>

<!DOCTYPE html>

<html lang="pt"BR>

<head>
<meta charset="UTF-8">
<title>Darvin Corp.</title>
<style>
    body {
        background: #D8DAD9;
        background: radial-gradient(at center, #D8DAD9 0%, #8E8E8E 50%, #334433 100%);
        box-shadow: 5px 5px 5px black;
        margin: 0;
        padding: 0;
        
    }

    #interface {
        display:flex;
        flex-direction: column;
        min-height: 100vh;
        justify-content: flex-start;

    }

    #cabecalho {
        background-position: top;
        background-image: linear-gradient(to bottom, green, rgb(1, 48, 1));
    }

    #conteudo {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        padding: 20px;
        
    }

    #login {
        height: auto;
        width: 300px;
        background-color: rgba(255, 255, 255, 0.85); /* Um leve fundo para destacar o login */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        text-align: center;
    }

    #login input {
        width: 90%;
        padding: 5px;
        margin-bottom: 10px;
    }


    hgroup {
        background-image: linear-gradient(to bottom, green, rgb(0, 5, 0));
        background-size: 1000px 1000px;
        box-shadow: 4px 4px 2px #000000;
        text-align: left;
    }

    #cabecalho h1 {
        font-family: 'Times New Roman', Times, serif;
        font-size: 50pt;
        text-decoration: dotted;
        text-shadow: 2px 2px 2px black;
    }

    #cabecalho h3{
        text-align: center;
    }


    #blocobread {
        background: #066118;
        background: linear-gradient(0deg,rgba(6, 97, 24, 1) 20%, rgba(14, 179, 61, 0.89) 50%, rgba(6, 97, 24, 1) 80%);
        box-shadow: 5px 5px 5px black;

        position: center;
        display: inline-block; 
        cursor: pointer;

        hr {
        border: none;
        height: 2px;
        margin: 20px 0;

        }

        .menu-item {
            margin-top: 5px;
            margin-bottom: -5px;
            position: relative;
            display: inline-block;
        }

        .texm {
            position: center;
            background-color: darkgreen;
            color: rgb(8, 0, 0);
            padding: 5px 10px;
            font-family: sans-serif;
            border-radius: 4px;
        }

        .opcoes {
            display: none;
            position: absolute;
            top: 100%; 
            left: 0;
            background-color: #f9f9f9;
            min-width: 100px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
            border-radius: 4px;
            overflow: hidden;
            z-index: 10;
            list-style: none;
            padding: 0;
            margin: 0;
         }
        
        .opcoes a {
            color: #000000;
            padding: 15px 18px;
            text-decoration: none;
            display: block;
            font-family: sans-serif;
            font-size: 14px;
        }

        .opcoes a:hover {
            background-color: rgba(129, 126, 126, 0.8);
        }

        .menu-item:hover .opcoes {
            display: block;
        }
                
    }

    .logo {
        float: inline-start;
        width: 160px;
        height: 148px;
        margin-bottom: 8px;
        margin-right: 8px;
        box-shadow: 4px 4px 2px black;
        background-color: darkgreen;
    }


    .fundologo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 1000px; 
        height: auto;
        opacity: 0.3;
        z-index: -1;
        pointer-events: none;

    }





</style>
</head>

<body>
    <div id="interface">
        <header id="cabecalho">
            <hgroup>
                <img class="logo"  src="https://a.imagem.app/GrcVhb.png">
                <h1>  Darvin Corp.</h1>
            </hgroup>
            <h2>Criaturas estranhas catalogadas na index de darwin</h2>
            
        </header>
        <div id="blocobread">
        <h3>
            <div class="menu-item">
                <span class="texm">Index ▼</span>
                    <div class="opcoes">
                        <a href="#">Opção 1</a>
                        <a href="#">Opção 2</a>
                        <a href="#">Opção 3</a>
                    </div>
            </div>

            <div class="menu-item">
                <span class="texm">Sobre nós ▼</span>
                    <div class="opcoes">
                        <a href="#">Opção 1</a>
                        <a href="#">Opção 2</a>
                        <a href="#">Opção 3</a>
                    </div>
            </div>

            <div class="menu-item">
                <span class="texm">Recursos ▼</span>
                    <div class="opcoes">
                        <a href="#">Opção 1</a>
                        <a href="#">Opção 2</a>
                        <a href="#">Opção 3</a>
                    </div>
            </div>

            <div class="menu-item">
                <span class="texm">Acasos ▼</span>
                    <div class="opcoes">
                        <a href="#">Opção 1</a>
                        <a href="#">Opção 2</a>
                        <a href="#">Opção 3</a>
                    </div>
            </div>

            <div class="menu-item">
                <span class="texm">Credênciado</span>
                    <div class="opcoes">
                        <a href="credenciadologin.php">Login</a>
                        <a href="inf.html">Informações</a>
                    </div>
            </div>

        </h3>
        <hr>
        </div>
        
        <div id="conteudo">
            

            <form id="login" action="" method="POST">
                <h2>
                Login
                </h2>
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome"><br>

                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha"><br>

                <button type="submit">Enviar</button>
            </form>

        <img class="fundologo" src="https://a.imagem.app/GrIFRN.png">
        
        </div>
    </div>
</body>
</html>
