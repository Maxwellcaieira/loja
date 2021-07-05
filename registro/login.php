<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<link rel="icon" href="icon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/styler.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&displey=swp" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link rel="icon" href="../img/icon.ico" type="image/x-icon" />
<body bgcolor="black"></body>
<A href="../index.html">
<IMG width="150" SRC = "img/logo2.png" TITLE="D'egustar Whisky" ALIGN = "left"  HSPACE="100" >
</A>
<BR>

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
<div id='search-box'>
    <h1>D'egustar Whisky</h1>
  </div>
</head>

<body>
<div id = "menu">
    <ul>
        <li><a href="../index.html"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Início</FONT></FONT></a></li>
        <li><a href="../catalogo.php"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Catálogo</FONT></FONT></a></li>
        <li><a href="../quem somos.html"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Quem Somos</FONT></FONT></a></li>
        <li><a href="../fale conosco.html"><FONT COLOR = "#FFFFFF"><FONT SIZE = "4"></FONT>Fale Conosco</FONT></FONT></a></li>
    </ul>
</div>
<br><br>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Entrar</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	
		<div class="container">
			<div class="form-signin" style="background: #42dea4;">
				<h2 class="text-center">Entrar</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form method="POST" action="valida.php">
					<!--<label>Usuário</label>-->
					<input type="text" name="usuario" placeholder="Digite o seu CPF" class="form-control"><br>
					
					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>
					
					<input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">
					
					<div class="row text-center" style="margin-top: 20px;"> 
						<h4>Você ainda não possui uma conta?</h4>
						<a href="cadastrar.php">Crie grátis</a>
					</div>
                    <div class="row text-center" style="margin-top: 20px;"> 
						<h4>
						<a href="../adm/adm.php">Entrar como Administrador</a>
                        </h4>
					</div>
					
					
				</form>
			</div>
		</div>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>