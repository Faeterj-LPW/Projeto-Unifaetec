<!DOCTYPE html>
<html>
	<head>
		<title>Gerar documento</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">		
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
		<div>
			<nav>
				<div class="navbar navbar-brand bg-primary" id="navfit">
					<div class="fittext">Gerar Documento</div>
				</div>
			</nav>
		</div>
		<!-- Fim da Barra de Título -->
		
		<!-- Formulário -->
		<div class="container mt-5">
			<form>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-3 mb-3">
						<label for="user">Usuário</label>
						<input type="text" class="form-control form-control-lg" id="user" placeholder="Digite o usuário">
					</div>
					<div class="col-md-3 mb-3">
						<label for="senha">Senha</label>
						<input type="text" class="form-control form-control-lg" id="senha" placeholder="Digite a senha">
					</div>
				</div>
				<div class="form-row d-flex justify-content-center">
					<div class="col-md-6 mb-3">
						<label for="tipoDoc">Tipo de Documento</label>
						<select class="form-control form-control-lg" id="tipoDoc">
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
					<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small><a id="simple" href="index.php">próxima >></a>	
				</div>
			</div>			
		</footer>		
		<!-- Fim do Rodapé -->
	</body>
</html>