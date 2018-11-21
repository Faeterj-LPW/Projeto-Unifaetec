<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Cadastro de Professor</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="img/faetec.ico" rel="icon">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous' rel='stylesheet'>
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>
		<!-- Barra de Título -->
		<nav>
			<div class="navbar navbar-brand bg-primary" id="navfit">
				<div class="fittext">Cadastro</div>
			</div>
		</nav>
		<!-- Fim da Barra de Título -->
		
		<!-- Formulário de cadastro -->
		<section>
			<div class="container">
				<br><br>
				<!-- Feedback do que ocorreu -->
				<!-- Menssagem enviada -->
				<div id="sendmessage"></div>
				<!-- Erro de envio -->
				<div id="errormessage"></div>				
				<form action="" method="post">
					<div id="cntr-row-1" class="form-group row">
						<div class="col-md-3">
							<label for="titulo" class="col-sm-2 col-form-label">&nbsp;</label>
						</div>
						<div class="form-group">
							<h2>Dados do Professor</h2>
						</div>
					</div>					
					<div id="cntr-row-1" class="form-group row">
						<div class="col-md-3">											
							<label for="matricula" class="col-sm-2 col-form-label normal-font">Matrícula</label>
						</div>
						<div class="form-group">
							<input type="text" name="matricula" id="id" class="form-control form-control-lg" style="width:335px;" placeholder="0000000000000">
						</div>
					</div>
					<div id="cntr-row-1" class="form-group row">
						<div class="col-md-3">
							<label for="area" class="col-sm-2 col-form-label normal-font">Área</label>
						</div>
						<div class="form-group">
							<input type="text" name="atuacao" id="function" class="form-control form-control-lg" style="width:335px;" placeholder="Atuação">							
						</div>
					</div>
					<div id="cntr-row-1" class="form-group row">
						<div class="col-md-3">
							<label for="turno" class="col-sm-2 col-form-label normal-font">Unidade</label>
						</div>	
						<div class="form-group">							
							<select name="unidade" id="unit" class="form-control form-control-lg" style="width:335px;">
								<option value="" disabled selected>Selecione a unidade</option>
								<option value="">Campos Goytacazes</option>
								<option value="">Duque de Caxias</option>
								<option value="">Rio de Janeiro</option>
								<option value="">Três Rios</option>
							</select>
						</div>						
					</div>
					<div id="cntr-row-1" class="form-group row">
						<div class="col-md-3">
							<label for="lattes" class="col-sm-2 col-form-label normal-font">Lattes</label>
						</div>
						<div class="form-group">
							<input type="text" name="lattes" id="lattes" class="form-control form-control-lg" style="width:335px;" placeholder="Link para o currículo Lattes">							
						</div>
					</div>
					<div id="cntr-row-1" class="form-group row">
						<div class="col-md-3">
							<label for="enviar" class="col-sm-2 col-form-label">&nbsp;</label>
						</div>
						<div class="form-group">								
							<button type="button" name="button" id="button" class="btn btn-success" style="font-size:1.2em;width:335px;">Cadastrar</button>
						</div>
					</div>
				</form>
			</div>
			<br><br><br><br><br>
			<br><br><br><br><br>
		</section>
		<!-- Fim do formulário de cadastro -->

		<!-- Rodapé -->
		<footer id="footer" class="page-footer">
			<div class="footer-copyright text-center py-2">
				<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small>
			</div>
		</footer>
		<!-- Fim do Rodapé -->
	</body>
</html>