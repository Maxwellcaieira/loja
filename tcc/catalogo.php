<?php 	
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection);
?>
<!DOCTYPE html>
<HTML>
<HEAD>
    <meta charset="UTF-8">
<TITLE>D'egustar Whisky</TITLE>
<link rel="icon" href="img/icon.ico" type="image/x-icon" />
<meta charset="UTF-8">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1.slim.min.js"></script>
<link rel="stylesheet" href="css/styler.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&displey=swp" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Open+Slab:100,300,400&displey=swp" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
</HEAD>
<body bgcolor="black"></body>
<A href="index.html">
<IMG width="150" SRC = "./img/logo2.png" TITLE="D'egustar Whisky" ALIGN = "left"  HSPACE="100" >
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
<div id='search-box'>
  <h1>D'egustar Whisky</h1>
  <a href="registro/login.php"> <button id='search-button2' type='submit'>Carrinho</button></a>
</div>

<div class="nav">
    <a href="registro/login.php"><img src="./img/master.png" /><FONT COLOR = "#000000"><FONT SIZE = "3"> Faça seu login ou cadastre-se</FONT></FONT></a>
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
        <li><a href="index.html"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Início</FONT></FONT></a></li>
        <li><a href="catalogo.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Catálogo</FONT></FONT></a></li>
        <li><a href="quem somos.html"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Quem Somos</FONT></FONT></a></li>
        <li><a href="fale conosco.html"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Fale Conosco</FONT></FONT></a></li>
    </ul>
</div>
<center>
	<div class="container">
		<div class="row">
			<?php foreach($products as $product) : ?>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							 <h4 class="card-title"><?php echo $product['nome']?></h4>
							 <h4 class="card-subtitle mb-2 text-muted">
							  	R$<?php echo number_format($product['preco'], 2, ',', '.')?>
							 </h4>

							 <a class="btn btn-primary" href="registro/login.php" class="card-link">Comprar</a>
						</div>
					</div>
				</div>

			<?php endforeach;?>
		</div>
	</div>
</center>
</BODY>
</HTML>