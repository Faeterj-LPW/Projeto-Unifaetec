<!DOCTYPE html>
<html>
	<head>
		<title>Controle de agenda</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link href="img/faetec.ico" rel="icon">		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous' rel='stylesheet'>
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	
	<body>
		<!-- Barra de Título -->
		<div>
			<nav>
				<div class="navbar navbar-brand bg-primary" id="navfit">
					<div class="fittext">Controle de Agenda</div>
				</div>
			</nav>
		</div>
		<!-- Fim da Barra de Título -->
		
		<!-- Formulário -->
		<div class="container mt-5">
			<br>
			<form>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-3 mb-3">
						<label for="atividade" class="normal-font">Atividade</label>
						<input type="text" class="form-control form-control-lg" id="atividade" placeholder="name@example.com">
					</div>
					<div class="col-md-3 mb-3">					
						<label for="status" class="normal-font">Status</label>
						<select class="form-control form-control-lg" id="status" style="height:34px;">
							<option>Em aberto</option>
							<option>Encerrado</option>
							<option>?</option>
							<option>??</option>
							<option>???</option>
						</select>
					</div>
				</div>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-6 mb-3">
						<label for="descriAtividade" class="normal-font">Descrição da Atividade</label>
						<textarea class="form-control form-control-lg" id="descriAtividade" rows="7"></textarea>
					</div>
				</div>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-2 mb-3">
						<label for="prevInicio" class="normal-font">Previsão de Inicio</label>
						<input type="date" class="form-control form-control-lg" id="prevInicio" placeholder="name@example.com">
					</div>
					<div class="col-md-2 mb-3">
						<label for="prevTermino" class="normal-font">Previsão de termino</label>
						<input type="date" class="form-control form-control-lg" id="prevTermino" placeholder="name@example.com">
					</div>
				</div>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-4 mb-3">
						<button type="button" class="btn btn-success btn-sm" style="font-size:1.2em;width:176px;">Consultar</button>
						<button type="button" class="btn btn-success btn-sm float-right" style="font-size:1.2em;width:176px;">Inserir</button>
					</div>
				</div>
		  </form>
		  <br><br><br><br><br><br><br><br>
		</div>
		<!-- Fim do formulário -->
	
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
	</body>
</html>