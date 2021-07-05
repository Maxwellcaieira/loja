<?php
session_start();
include_once './conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
        <link rel="icon" href="../img/icon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="css/styler.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&displey=swp" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    </head>

    <A href="../administrativo.php">
<IMG width="150" SRC = "img/logo2.png" TITLE="D'egustar Whisky" ALIGN = "left"  HSPACE="100" >
</A>
<BR>
<br><br>
<style>
    body{
        margin: 0;
    }
    
    #menu ul{
        margin: 0;
        list-style: none;
        text-align: center;
    }

    #menu ul li{
        display: inline;

    }

    #menu ul li a{
        padding: 10px 10px;
        display: inline-block;
        color: cornsilk;
        text-decoration: none;
    }

    #menu ul li a:hover{
        color: darkgreen;
    }
</style>


<br><br><br>
<body>
<div id = "menu">
    <ul>
    <li><a href="../administrativo.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Início</FONT></FONT></a></li>
        <li><a href="../usuario/index.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Usuários</FONT></FONT></a></li>
        <li><a href="../produto/menu.html"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Produtos</FONT></FONT></a></li>
        <li><a href="../adm/index.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Administrador</FONT></FONT></a></li>
    </ul>
</div>
<br><br>
    </head>
    <body>
    <section id="contato">
        
        <h3><a href="cadastrar.php">Cadastrar novo Administrador</a><br></h3>
        <h1>Listar</h1>
        
    

        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        
        //Receber o número da página
        $pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        //var_dump($pagina);

        //Setar a quantidade de registros por página
        $limite_resultado = 5;

        // Calcular o inicio da visualização
        $inicio = ($limite_resultado * $pagina) - $limite_resultado;


        $query_usuarios = "SELECT id, nome, email, usuario FROM adm ORDER BY id DESC LIMIT $inicio, $limite_resultado";
        $result_usuarios = $conn->prepare($query_usuarios);
        $result_usuarios->execute();

        if (($result_usuarios) AND ($result_usuarios->rowCount() != 0)) {
            while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
                //var_dump($row_usuario);
                extract($row_usuario);
                //echo "ID: " . $row_usuario['id'] . "<br>";
                echo "ID: $id <br>";
                echo "Nome: $nome <br>";
                echo "E-mail: $email <br>";
                echo "Usuário: $usuario <br><br>";
                
                echo "<a href='visualizar.php?id=$id'>Visualizar</a><br>";
                echo "<a href='editar.php?id=$id'>Editar</a><br>";
                echo "<a href='apagar.php?id=$id'>Apagar</a><br>";
                echo "<hr>";
            }

            //Contar a quantidade de registros no BD
            $query_qnt_registros = "SELECT COUNT(id) AS num_result FROM usuarios";
            $result_qnt_registros = $conn->prepare($query_qnt_registros);
            $result_qnt_registros->execute();
            $row_qnt_registros = $result_qnt_registros->fetch(PDO::FETCH_ASSOC);

            //Quantidade de página
            $qnt_pagina = ceil($row_qnt_registros['num_result'] / $limite_resultado);

            // Maximo de link
            $maximo_link = 2;

            echo "<a href='index.php?page=1'>Primeira</a> ";

            for ($pagina_anterior = $pagina - $maximo_link; $pagina_anterior <= $pagina - 1; $pagina_anterior++) {
                if ($pagina_anterior >= 1) {
                    echo "<a href='index.php?page=$pagina_anterior'>$pagina_anterior</a> ";
                }
            }

            echo "$pagina ";

            for ($proxima_pagina = $pagina + 1; $proxima_pagina <= $pagina + $maximo_link; $proxima_pagina++) {
                if ($proxima_pagina <= $qnt_pagina) {
                    echo "<a href='index.php?page=$proxima_pagina'>$proxima_pagina</a> ";
                }
            }

            echo "<a href='index.php?page=$qnt_pagina'>Última</a> ";
        } else {
            echo "<p style='color: #f00;'>Erro: Nenhum usuário encontrado!</p>";
        }
        ?>
        <br><br>
<a href="../administrativo.php">Voltar</a>
    </section>
    </body>
</html>
