<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Cadastro de Aluno</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="img/faetec.ico" rel="icon">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>
		<!-- Barra de Título -->
		<nav>
			<div id="navfit" class="navbar navbar-brand bg-primary">
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
							<h2>Dados do Aluno</h2>
						</div>
					</div>					
					<div id="cntr-row-1" class="form-group row">
						<div class="col-md-3">											
							<label for="matricula" class="col-sm-2 col-form-label normal-font">Matrícula</label>
						</div>
						<div class="form-group">
							<input type="text" name="matricula" id="id" class="form-control form-control-lg" style="width:320px;" placeholder="0000000000000">
						</div>
					</div>
					<div id="cntr-row-1" class="form-group row">
						<div class="col-md-3">
							<label for="unidade" class="col-sm-2 col-form-label normal-font">Unidade</label>
						</div>
						<div class="form-group">								
							<select name="unidade" id="branch" class="form-control form-control-lg" style="width:320px;">
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
							<label for="turno" class="col-sm-2 col-form-label normal-font">Turno</label>
						</div>	
						<div class="form-group">							
							<select name="turno" id="shift" class="form-control form-control-lg" style="width:320px;">
								<option value="" disabled selected>Selecione o turno</option>
								<option value="">Manhã</option>
								<option value="">Tarde</option>
								<option value="">Noite</option>
							</select>
						</div>						
					</div>
					<div id="cntr-row-1" class="form-group row">
						<div class="col-md-3">
							<label for="curso" class="col-sm-2 col-form-label normal-font">Curso</label>
						</div>	
						<div class="form-group">								
							<select name="curso" id="degree" class="form-control form-control-lg" style="width:320px;">
								<option value="" disabled selected>Selecione o curso</option>
								<option value="">Análise de Sistemas Informatizados</option>
								<option value="">Educação no Campo</option>
								<option value="">Logística</option>
								<option value="">Pedagogia</option>
								<option value="">Processos Gerenciais</option>
								<option value="">Surdez e Letramento Infantil</option>
							</select>
						</div>						
					</div>
					<div id="cntr-row-1" class="form-group row">
						<div id="page-top" class="col-md-3">
							<label for="email" class="col-sm-2 col-form-label">&nbsp;</label>
						</div>
						<div class="form-group">								
							<button type="button" name="button" id="button" class="btn btn-success" style="font-size:1.2em;width:320px;">Cadastrar</button>
						</div>
					</div>
				</form>
			</div>
			<br><br><br><br>
			<br><br><br><br><br>
		</section>
		<!-- Fim do formulário de cadastro -->
			
		<!-- Rodapé -->
		<footer id="footer" class="page-footer toplevel-4">
			<div class="footer-copyright text-center py-2">
				<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small>
			</div>
		</footer>
		<!-- Fim do Rodapé -->
	</body>
</html>