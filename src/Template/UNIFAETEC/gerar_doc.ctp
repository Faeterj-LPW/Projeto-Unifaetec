<!DOCTYPE html>
<html>
	<head>
		<title>Gerar documento</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link href="img/faetec.ico" rel="icon">		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	
	<body>
        <!-- Barra de Título -->
		<nav>
			<div class="navbar navbar-brand bg-primary" id="navfit">
				<div class="fittext">Gerar Documento</div>
			</div>
		</nav>
		<!-- Fim da Barra de Título -->
		
		<!-- Formulário -->
		<div class="container mt-5">
			<form action="" method="post">
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-3 mb-3">
						<label for="user">Usuário</label>
						<input type="text" id="user" class="form-control form-control-lg" placeholder="Digite o usuário">
					</div>
					<div class="col-md-3 mb-3">
						<label for="senha">Senha</label>
						<input type="password"  id="password" class="form-control form-control-lg" placeholder="Digite a senha">
					</div>
				</div>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-6 mb-3">
						<label for="tipoDoc">Tipo de Documento</label>
						<select id="tipoDoc" class="form-control form-control-lg">
							<option>Declaração</option>
							<option>Certificado de Conclusão de Curso</option>
							<option>Histórico</option>
							<option>Diploma</option>
							<option>Carteirinha</option>
						</select>
					</div>
				</div>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-0 mb-3">
						<button type="button" class="btn btn-success btn-lg" style="font-size:1.2em;width:150px;">Gerar</button>
					</div>
				</div>
		  </form>
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