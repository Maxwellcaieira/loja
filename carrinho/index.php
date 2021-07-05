<?php 	
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>D'egustar Whisky</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/styler.css" type="text/css" />
	<link rel="icon" href="../img/icon.ico" type="image/x-icon" />

</head>
<A href="../registro/administrativo.php">
<IMG width="150" SRC = "./img/logo2.png" TITLE="D'egustar Whisky" ALIGN = "left"  HSPACE="100" >
</A>

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
<br><br>
<button type="button" form="f-cadastro">
	<a href="carrinho.php"><h5> Carrinho</h5></a>
</button>
<br><br>
<body>
<div id = "menu">
    <ul>
        <li><a href="../registro/administrativo.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Início</FONT></FONT></a></li>
        <li><a href="index.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Catálogo</FONT></FONT></a></li>
        <li><a href="../registro/quem somos.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Quem Somos</FONT></FONT></a></li>
        <li><a href="../registro/fale conosco.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Fale Conosco</FONT></FONT></a></li>
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

							 <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $product['codproduto']?>" class="card-link">Comprar</a>
						</div>
					</div>
				</div>

			<?php endforeach;?>
		</div>
	</div>
</center>
</body>
</html>