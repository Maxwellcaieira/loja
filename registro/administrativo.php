<!DOCTYPE html>
<HTML>
<HEAD>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<TITLE>D'egustar Whisky</TITLE>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/carousel.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&displey=swp" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link rel="icon" href="./img/icon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/styler.css" type="text/css" />
<link rel="stylesheet" href="css/gallery.theme.css">
<link rel="stylesheet" href="css/gallery.min.css">
</HEAD>
<BODY>
<div id="container"></BODY>
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
  </form>
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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="img/sli1.jpg" alt="First slide">
        </div>
        <div class="item">
            <img class="second-slide" src="img/sli02.jpg" alt="Second slide">
            
        </div>
        <div class="item">
             <img class="third-slide" src="img/sli3.jpg" alt="Third slide">
            
        </div>
        <div class="item">
            <img class="third-slide" src="img/sli04.jpg" alt="Third slide">
           
       </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->

<!-- Bootstrap core JavaScript
================================================== -->
<script src="js/jquery.min.js"></script>		
<script src="js/bootstrap.min.js"></script>


</BODY>
</HTML>