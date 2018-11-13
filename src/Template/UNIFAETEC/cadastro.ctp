<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Faça seu cadastro</title>
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
			<!-- Feedback do que ocorreu -->
			<!-- Menssagem enviada -->
			<div id="sendmessage"></div>
			<!-- Erro de envio -->
			<div id="errormessage"></div>
			<br><br><br>
			<div class="form">
				<form action="" method="post">
					<table width="100%" class="table-borderless">
					  <tr>
						<td width="35%"></td>
						<td class="lefttext">
							<div>
								<h2>Cadastro de Usuário</h2>
							</div>
						</td>
					  </tr>
					  <tr>
						<td class="rightlevel righttext">Nome</td>
						<td class="lefttext">
							<div class="form-group col-md-6">
								<input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Nome completo" style="width:320px;">
							</div>
						</td>
					  </tr>
					  <tr>
						<td class="rightlevel righttext">CPF</td>
						<td class="lefttext">
							<div class="form-group col-md-6">
								<input type="text" class="form-control form-control-lg" name="cpf" id="cpf" placeholder="000.000.000-00" style="width:320px;">
							</div>
						</td>
					  </tr>
					  <tr>
						<td class="rightlevel righttext">Data de Nascimento</td>
						<td class="lefttext">
							<div class="form-group col-md-6">
								<input type="date" class="form-control form-control-lg" name="date" id="date" placeholder="dd/mm/aaaa" style="width:320px;">
							</div>
						</td>
					  </tr>
					  <tr>
						<td class="rightlevel righttext">Email</td>
						<td class="lefttext">
							<div class="form-group col-md-6">
								<input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="email@faeterj-rio.edu.br" style="width:320px;">
							</div>
						</td>
					  </tr>
					  <tr>
						<td class="rightlevel righttext">Senha</td>
						<td class="lefttext">
							<div class="form-group col-md-6">
								<input type="password" class="form-control form-control-lg" placeholder="********" style="width:320px;">
							</div>
						</td>
					  </tr>						  
					  <tr>
						<td></td>
						<td class="lefttext">
							<div class="form-group col-md-6">
								<label class="dot"> Aluno
									<input type="radio" checked="checked" name="radio">
									<span class="radiodot"></span>
								</label>
								<label class="dot"> Professor
									<input type="radio" name="radio">
									<span class="radiodot"></span>
								</label>
								<label class="dot"> Funcionário
									<input type="radio" name="radio">
									<span class="radiodot"></span>
								</label>
							</div>
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td class="lefttext">
							<div id="page-top" class="toplevel">
								<div class="col-md-12">
									<button class="btn btn-success" name="button" type="button" style="font-size:1.2em;width:320px;">Cadastrar</button>
								</div>
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
					<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small><a id="simple" href="aluno.php">próxima >></a>				
				</div>
			</div>			
		</footer>		
		<!-- Fim do Rodapé -->
	</body>
</html>