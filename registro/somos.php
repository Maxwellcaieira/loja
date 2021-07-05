<!DOCTYPE html>
<HTML>
<HEAD>
    <meta charset="UTF-8">
<TITLE>D'egustar Whisky</TITLE>
<link rel="icon" href="img/icon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/styler.css" type="text/css" />
</HEAD>
<body bgcolor="black"></body>
<A href="administrativo.php">
<IMG width="150" SRC = "./img/logo2.png" TITLE="D'egustar Whisky" ALIGN = "left"  HSPACE="100" >
</A>
<BR>
    <?php
    session_start();
    if(!empty($_SESSION['id'])){
        echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
        echo "<a href='sair.php'>Sair</a>";
    }else{
        $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
        header("Location: login.php");	
    }
    ?>
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
<div id='search-box'>
<a href="../carrinho/carrinho.php"> <button id='search-button2' type='submit'>Carrinho</button></a>
</div>
<br>
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

</head>

<body>
<div id = "menu">
    <ul>
        <li><a href="administrativo.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Início</FONT></FONT></a></li>
        <li><a href="../carrinho/index.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Catálogo</FONT></FONT></a></li>
        <li><a href="quem somos.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Quem Somos</FONT></FONT></a></li>
        <li><a href="fale conosco.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Fale Conosco</FONT></FONT></a></li>
    </ul>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./administrativo.php">Início</a></li>
      <li class="breadcrumb-item"><a href="./quem somos.php">Quem Somos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Integrante</li>
    </ol>
  </nav>
<section class="corpo">
    <div class="conteudo">
                <div class="ima">
    <h2>Alessandro de Souza Silva</h2> <img src="./img/ale.jpg">
                </div>
            <div class="texto">
    <p>Com 19 anos de idade, nasceu no dia 24/02/2002 na Cidade do Rio de Janeiro, Filho de Luzia Cândido da Silva Sousa e Alexandre de Sousa Silva residentes do Rio de Janeiro-RJ. Iniciol sua jornada no Colégio Pedro II - Caxias no ano de 2017 e depois de tantas dificuldades está encerrando mais um ciclo em sua vida, o fim de seu Ensino Medío - Técnico em Desenvolvimento de Sistemas.</p>
            </div>
    </div>
</section>
</BODY>
</HTML>