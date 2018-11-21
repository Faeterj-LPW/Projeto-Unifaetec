<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Acesso ao Sistema</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="img/faetec.ico" rel="icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">		
	</head>

	<body>
		<!-- Seção de Login -->
		<section class="text-center">
			<div class="container">
				<div class="mx-auto text-center">
					<img src="img/faetec.jpg" class="img-responsive mx-auto d-block">
				</div>	
				<!--Feedback do que ocorreu-->
				<!--Menssagem enviada-->
				<div id="sendmessage"></div>
				<!--Menssagem de erro-->
				<div id="errormessage"></div>
				<br><br>			
				<!--Formulário-->
				<h2>Entrar no Sistema</h2>
				<form action="" method="post">
					<div class="form-group">
						<input type="text" name="email" id="email" class="form-control form-control-lg" style="width:220px;margin:0 auto;" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="senha" id="password" class="form-control form-control-lg" style="width:220px;margin:0 auto;" placeholder="Senha">
					</div>
					<div class="form-group">
						<label class="mark" style="background-color: transparent;">
							<input type="checkbox" checked="checked"> Lembrar-se de mim
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-group">
						<button class="btn btn-success" name="button" type="button" style="font-size:1.2em;width:220px;margin-top:-8px;">Entrar</button>
					</div>
					<div>
						<a id="simple" href="cadastro.php">Cadastrar-se</a>
					</div>
				</form>
			</div>
			<br><br><br><br>
		</section>
		<!-- Fim da Seção Login -->

		<!-- Rodapé -->
		<footer id="footer" class="toplevel-4 page-footer">
			<div style="text-align:center;">
				<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small>
			</div>
		</footer>
		<!-- Fim do Rodapé -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>