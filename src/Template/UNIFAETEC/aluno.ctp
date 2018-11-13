<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Cadastro de aluno</title>
		<meta charset="utf-8">
		<link href="img/faetec.ico" rel="icon">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous' rel='stylesheet'>
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body id="body">
		<!-- Barra de Título -->
		<div>
			<nav>
				<div class="navbar navbar-brand bg-primary" id="navfit">
					<div class="fittext">Cadastro de Trabalhos Acadêmicos</div>
				</div>
			</nav>
		</div>
		<!-- Fim da Barra de Título -->
		
		<!-- Formulário de cadastro -->
		<div class="container-fluid text-center">
			<!--Feedback do que ocorreu-->
			<!-- Menssagem enviada -->
			<div id="sendmessage"></div>
			<!-- Erro de envio -->
			<div id="errormessage"></div>
			<br><br><br><br>			
			<div class="form">
				<form action="" method="post">
					<table width="100%" class="table-borderless">
					  <tr>
						<td width="38%"></td>
						<td class="lefttext">
							<div>
								<h2>Dados do Aluno</h2>
							</div>
						</td>
					  </tr>
					  <tr>
						<td class="rightlevel righttext">Matrícula</td>
						<td class="lefttext">
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" name="matricula" id="matricula" placeholder="0000000000000" style="width:335px;">
							</div>
						</td>
					  </tr>
					  <tr>
						<td class="rightlevel righttext">Unidade</td>
						<td class="lefttext">
							<div class="form-group">
								<select class="form-control form-control-lg" name="unidade" id="unidade" style="width:335px;">
								<option value="" disabled selected>Selecione a unidade</option>
									<option value="">Campos Goytacazes</option>
									<option value="">Duque de Caxias</option>
									<option value="">Rio de Janeiro</option>
									<option value="">Três Rios</option>
								</select>
							</div>
						</td>
					  </tr>
					  <tr>
						<td class="rightlevel righttext">Turno</td>
						<td class="lefttext">
							<div class="form-group">
								<select class="form-control form-control-lg" name="turno" id="turno" style="width:335px;">
								<option value="" disabled selected>Selecione o turno</option>
									<option value="">Manhã</option>
									<option value="">Tarde</option>
									<option value="">Noite</option>
								</select>
							</div>
						</td>
					  </tr>
					  <tr>
						<td class="rightlevel righttext">Curso</td>
						<td class="lefttext">
							<div class="form-group">
								<select class="form-control form-control-lg" name="curso" id="curso" style="width:335px;">
								<option value="" disabled selected>Selecione o curso</option>
									<option value="">Análise de Sistemas Informatizados</option>
									<option value="">Educação no Campo</option>
									<option value="">Logística</option>
									<option value="">Pedagogia</option>
									<option value="">Processos Gerenciais</option>
									<option value="">Surdez e Letramento Infantil</option>
								</select>
							</div>
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td class="lefttext">
							<div id="page-top" class="toplevel">
								<button class="btn btn-success" name="button" type="button" style="font-size:1.2em;width:335px;">Cadastrar</button>
							</div>
						</td>
					  </tr>
					</table>
				</form>
			</div>
		</div>
		<!-- Fim do formulário de cadastro -->

		<!-- Botão Voltar -->
		<div class="container" id="btnbck">
			<a href="#">
			<div class="imgbtn">
				<img style="width:40%;" src="img/voltar.png">
			</div>
			<div class="txtbtn">
				<small>Voltar ao Menu</small>
			</div>
			</a>
		</div>
		<!-- Fim do Botão Voltar -->
			
		<!-- Rodapé -->
		<footer id="footer" style="height:120px;">
			<div class="container-fluid">
				<div class="copyright">
					<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small><a id="simple" href="professor.php">próxima >></a>					
				</div>
			</div>			
		</footer>		
		<!-- Fim do Rodapé -->
	</body>
</html>