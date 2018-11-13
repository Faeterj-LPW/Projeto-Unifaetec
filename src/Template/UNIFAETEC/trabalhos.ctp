<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Cadastro de Trabalhos Acadêmicos</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="img/faetec.ico" rel="icon">		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body id="body" style="height:680px;">
		<!-- Barra de Título -->
		<div>
			<nav>
				<div class="navbar navbar-brand bg-primary" id="navfit">
					<div class="fittext">Cadastro de Trabalhos Acadêmicos</div>
				</div>
			</nav>
		</div>
		<!-- Fim da Barra de Título -->
		
		<!-- Formulário de Cadastro -->	
		<div class="container">	
			<!-- Feedback do que ocorreu -->
			<!-- Menssagem enviada -->
			<div id="sendmessage"></div>
			<!-- Erro de envio -->
			<div id="errormessage"></div>
			<br>								
			<form action="" method="post">
				<div style="text-align:center;width:100%;">
					<table width="100%" class="table no-border">
					  <tr>
						<th class="rightlevel righttext" width="10%" style="vertical-align: top;">Título</th>
						<td class="lefttext">
						    <div>
							    <input class="form-control form-control-lg" type="text" name="titulo" id="titulo" placeholder="Título do artigo">
						    </div>
						</td>
					  </tr>
					  <tr>
						<th class="rightlevel righttext" style="vertical-align:top;">Palavras-chave</th>
						<td class="lefttext">
							<div>
								<input class="form-control form-control-lg" type="text" name="descricao" id="descricao" placeholder="Descrição do artigo">
							</div>
						</td>
					  </tr>
					  <tr>
						<th class="rightlevel righttext" style="vertical-align:top;">Texto</th>
						<td class="lefttext">
							<div>
								<textarea class="form-control" type="text" id="editor1" name="editor1"></textarea>
							</div>
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td>
							<div id="page-top" class="toplevel">
								<table width="100%" class="table no-border">
								  <tr>
								    <td class="lefttext">
									  <ul class="list-inline">
									    <li style="font-size:1em;">
										  <a href="#"><img src="img/upload.png" height="35" width="35" border=0 data-toggle="tooltip" data-placement="right" title="Submeter artigo"></a>
										</li>
									  </ul>
									</td>
									<td class="righttext">
									  <button class="btn btn-success" name="button" type="button" style="font-size:1.2em;width:150px;">Cadastrar</button>
									</td>
								  </tr>
								</table>
							</div>
						</td>
					  </tr>
					</table>
				</div>
			</form>
		</div>
		<!-- Fim do formulário de Cadastro -->			
			
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
					<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small><a id="simple" href="estatisticas.php">próxima >></a>		
				</div>
			</div>			
		</footer>		
		<!-- Fim do Rodapé -->

		<!-- Biblioteca JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
		<!-- Script ckeditor -->
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>		
		<script type="text/javascript">
			window.onload = function()  {
			CKEDITOR.replace( 'editor1' );
			};
		</script>
		<!-- Script tooltip -->
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();   
			});
		</script>
	</body>
</html>