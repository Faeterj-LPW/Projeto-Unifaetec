<!DOCTYPE html>
<html>
	<head>
		<title>Consultar Histórico ATV</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link href="img/faetec.ico" rel="icon">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous' rel='stylesheet'>
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	
	<body>		
		<!-- Barra de Título -->
		<div>
			<nav>
				<div class="navbar navbar-brand bg-primary" id="navfit">
					<div class="fittext">Consultar Histórico de Atividades</div>
				</div>
			</nav>
		</div>
		<!-- Fim da Barra de Título -->
		
		<!-- Formulário de pesquisa -->
		<br><br><br><br><br><br>
		<div class="container mt-5">
			<form>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-3 mb-3">
						<label for="busca" class="normal-font">Consultar</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text"><img src="img/search.png"></div>
							</div>
							<input type="text" class="form-control form-control-lg" id="busca" placeholder="Nome, local ou evento">
						</div>
					</div>
				</div>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-3 mb-3">
						<button type="button" class="btn btn-success btn-sm" style="font-size:1.2em;width:270px;">Pesquisar</button>
					</div>
				</div>
		  </form>
		</div>
		<!-- Fim do formulário de pesquisa -->
	
		<!-- Rodapé -->
		<!---Botão Voltar--->
		<div id="btnbck">
			<a href="menu.php">
			<div class="imgbtn">
				<img style="width:40%;" src="img/voltar.png">
			</div>
			<div class="txtbtn">
				<small>Voltar ao Menu</small>
			</div>
			</a>
		</div>		
		<footer id="fix-footer" style="height:145px;">
			<div id="navfit" style="bottom:70px;">
				<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small>			
			</div>
		</footer>		
		<!-- Fim do Rodapé -->
		
		<!-- Biblioteca JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>	
	</body>
</html>