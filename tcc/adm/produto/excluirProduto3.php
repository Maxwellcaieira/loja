<HTML>
<HEAD>
<meta charset="utf-8">
<TITLE>Excluir Produto</TITLE>
<link rel="icon" href="../img/icon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/styler.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&displey=swp" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    </head>

    <A href="../administrativo.php">
<IMG width="150" SRC = "img/logo2.png" TITLE="D'egustar Whisky" ALIGN = "left"  HSPACE="100" >
</A>
<BR>

<style>
#search-box {
    position: relative;
    width: 70%;
    margin: 0;
}
#search-form {
    height: 40px;
    border: 1px solid #999;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 0px;
    background-color: #fff;
    overflow: hidden;
}
#search-text {
    font-size: 14px;
    color: #1B6DB0;
    border-width: 0;
    background: transparent;
}
#search-box input[type="text"] {
    width: 90%;
    padding: 11px 0 12px 1em;
    color: #1B6DB0;
    outline: none;
}
#search-button {
    position: absolute;
    top: 0;
    right: 0;
    height: 42px;
    width: 80px;
    font-size: 14px;
    color: #fff;
    text-align: center;
    line-height: 42px;
    border-width: 0;
    background-color: #1B6DB0; /*--define a cor do botão Buscar--*/
    -webkit-border-radius: 0px 5px 5px 0px;
    -moz-border-radius: 0px 5px 5px 0px;
    border-radius: 0px 5px 5px 0px;
    cursor: pointer;
}
#search-button2 {
    position: absolute;
    top: 0;
    right: -200px;
    height: 42px;
    width: 80px;
    font-size: 14px;
    color: #fff;
    text-align: center;
    line-height: 42px;
    border-width: 0;
    background-color: #1B6DB0; 
    -webkit-border-radius: 0px 0px 0px 0px;
    -moz-border-radius: 0px 0px 0px 0px;
    border-radius: 0px 0px 0px 0px;
    cursor: pointer;
}
</style>



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
</HEAD>
<BODY>
<section id="contato">
<h2>Excluir Produto</h2>
<?php
Include "conexao.php";
$resposta = $_POST["resposta"];
$codigo = $_POST["codigo"];
if ($resposta == "N")
 header("Location: excluirProduto1.php");
else
{
$sql = "DELETE FROM Produto WHERE codproduto =
$codigo";
 mysqli_query($mysqli, $sql);
}
?>
<P>O produto foi excluído com sucesso.</P>
<br /><br />
<a href="excluirProduto1.php">Voltar</a>
</section>
</BODY>
</HTML>