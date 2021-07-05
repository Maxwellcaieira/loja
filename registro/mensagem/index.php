<?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<HTML>
<HEAD>
    <meta charset="UTF-8">
<TITLE>D'egustar Whisky</TITLE>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
<link rel ="stylesheet" type="text/css" href="css/normalise.css"/>
<link rel="icon" href="../img/icon.ico" type="image/x-icon" />
<link rel="stylesheet" href="../css/styler.css" type="text/css" />
</HEAD>
<body bgcolor="#000000"></body>
<A href="../index.html">
<IMG width="150" SRC = "../img/logo2.png" TITLE="D'egustar Whisky" ALIGN = "left"  HSPACE="100" >
</A>
<BR>

	
	<body>
		<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$request = md5(implode($_POST));
				if(isset($_SESSION['ultima_request']) && $_SESSION['ultima_request'] == $request){
					echo "Recado ja foi salvo!";
				}else{
					$_SESSION['ultima_request']  = $request;
					if(isset($_POST['usuario'])){
						$usuario = $_POST['usuario'];
						$email = $_POST['email'];
						$recado = $_POST['recado'];
						$result_recado = "INSERT INTO recados (nome, email, recado, created) VALUES ('$usuario', '$email', '$recado', NOW())";						
						$resultado_recados= mysqli_query($conn, $result_recado);
						//Enviar e-mail
					}
				}
			}	
				
		?>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Mural de recados</h1>
				<form action="" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Nome:</label>
						<input type="text" name="usuario" class="form-control" placeholder="Nome Completo" required>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Recado: :</label>
						<textarea  name="recado" class="form-control" rows="3"></textarea>
					</div>
					<input type="submit" class="btn btn-danger" value="Enviar">
				</form><br>
				<a href="../administrativo.php"> <input type="submit" class="btn btn-danger" value="Voltar"></a>
				
				<h2>Recados</h2>
				<?php
					$result_recado_bd = "SELECT * FROM recados";
					$resultado_recado_bd = mysqli_query($conn, $result_recado_bd);
					if(mysqli_num_rows($resultado_recado_bd) <= 0 ){
						echo "Nenhum recado...";
					}else{
						while($rows = mysqli_fetch_assoc($resultado_recado_bd)){
							?>							
							<div class="media">
								<div class="media-body">
									<h4 class="media-heading"><?php echo $rows['nome']; ?></h4>
									<?php echo $rows['recado']; ?>
								</div>
							</div>
							<?php
						}
					}
				?>				
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>