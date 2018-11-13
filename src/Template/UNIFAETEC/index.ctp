<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Acesso ao Sistema</title>
		<meta charset="utf-8">
		<link href="img/faetec.ico" rel="icon">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>
		<div class="container-fluid text-center">
			<img src="img/faetec.jpg">
			<div>		
				<!--Feedback do que ocorreu-->
				<!--Menssagem enviada-->
				<div id="sendmessage"></div>
				<!--Erro-->
				<div id="errormessage"></div>
				<br><br>
		
				<!--Login-->
				<h4>Entrar no Sistema</h4>
				<form action="" method="post" class="contactForm">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="name" placeholder="Email">
					</div>
					<div>
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Senha">
					</div>
					<div>
						<label class="mark">
							<input type="checkbox" checked="checked"> Lembrar-se de mim
							<span class="checkmark"></span>
						</label>
					</div>
					<div id="page-top">
						<div class="col-md-12 text-center">
							<button class="btn btn-success" name="button" type="button" style="width:220px;">Entrar</button>
						</div>
					</div>
					<div>
						<a id="simple" href="cadastro.php">Cadastrar-se</a>
					</div>
				</form>
			</div>
		</div>
		<!-- Fim do Login -->

		<!-- Início do Rodapé -->
		<footer id="footer">
			<div class="container-fluid">
				<div class="copyright">
					<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small><a id="simple" href="cadastro.php">próxima >></a>
				</div>
			</div>
		</footer>
		<!-- Fim do Rodapé -->

		<!-- Biblioteca JavaScript -->

	</body>
</html>