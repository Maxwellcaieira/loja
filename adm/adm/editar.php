<?php
session_start();
ob_start();
include_once './conexao.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
    exit();
}

$query_usuario = "SELECT id, nome, email, usuario FROM adm WHERE id = $id LIMIT 1";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
    $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_usuario);
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Administrador</title>
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
        <a href="index.php">Listar</a><br>

        <h1>Editar Administrador</h1>

        <?php
        //Receber os dados do formulário
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        //Verificar se o usuário clicou no botão
        if (!empty($dados['EditUsuario'])) {
            $empty_input = false;
            $dados = array_map('trim', $dados);
            if (in_array("", $dados)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher todos campos!</p>";
            } elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher com e-mail válido!</p>";
            }

            if (!$empty_input) {
                $query_up_usuario= "UPDATE adm SET nome=:nome, email=:email WHERE id=:id, usuario=:usuario";
                $edit_usuario = $conn->prepare($query_up_usuario);
                $edit_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':id', $id, PDO::PARAM_INT);
                $edit_usuario->bindParam(':usuario', $id, PDO::PARAM_INT);
                if($edit_usuario->execute()){
                    $_SESSION['msg'] = "<p style='color: green;'>Usuário editado com sucesso!</p>";
                    header("Location: index.php");
                }else{
                    echo "<p style='color: #f00;'>Erro: Usuário não editado com sucesso!</p>";
                }
            }
        }
        ?>

        <form id="edit-usuario" method="POST" action="">
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" value="<?php
            if (isset($dados['nome'])) {
                echo $dados['nome'];
            } elseif (isset($row_usuario['nome'])) {
                echo $row_usuario['nome'];
            }
            ?>" ><br><br>

            <label>E-mail: </label>
            <input type="email" name="email" id="email" placeholder="Melhor e-mail" value="<?php
                   if (isset($dados['email'])) {
                       echo $dados['email'];
                   } elseif (isset($row_usuario['email'])) {
                       echo $row_usuario['email'];
                   }
                   ?>" ><br><br>

<label>Usuário: </label>
            <input type="usuario" name="usuario" id="usuario" placeholder="Usuário" value="<?php
                   if (isset($dados['usuario'])) {
                       echo $dados['usuario'];
                   } elseif (isset($row_usuario['usuario'])) {
                       echo $row_usuario['usuario'];
                   }
                   ?>" ><br><br>

            <input type="submit" value="Salvar" name="EditUsuario">
            <br><br>
<a href="index.php">Voltar</a>
        </form>
                </section>
    </body>
</html>
