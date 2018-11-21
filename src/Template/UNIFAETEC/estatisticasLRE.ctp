<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Estatísticas</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link href="img/faetec.ico" rel="icon">		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous' rel='stylesheet'>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="css/pushmenu.css" type="text/css" rel="stylesheet">	
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body id="body">
		<!-- Push Menu -->
		<div id="pushcontentwrapper">
            <nav id="pushmenu1" class="pushmenu">
                <div class="closebutton fa fa-plus" title="Close Menu"></div>
                    <ul class="mainnav">
						<li><a href="estatisticas.php"><i class="fas fa-chart-bar"></i> Estatísticas</li></a>
                        <li><a href="estatisticasnsa.php"><i class="fas fa-users"></i> Número de Servidores Atendidos </li></a>
                        <li><a href="estatisticaslre.php"><i class="fas fa-globe"></i> Locais de Realizações de Eventos </li></a>
				        <li><a href="estatisticastac.php"><i class="fas fa-graduation-cap"></i> Trabalhos Acadêmicos Cadastrados </li></a>
                    </ul>
    			</div>
            </nav>
		</div>
		<!-- Fim do Push Menu -->
		
		<!-- Barra de Título -->
		<div>
			<nav>
				<div id="navfit" class="navbar navbar-brand bg-primary">
					<div class="fittext">Estatísticas</div>
				</div>
			</nav>
		</div>
		<!-- Fim da Barra de Título -->
		
		<!-- Estatística -->
		<div class="container">
			<br><br>
			<h3>Clique no Local de Evento:</h3>
			<table class="table">
				<tr>
					<td>Evento 1 em 11/11/11</td>
					<td style="text-align:right;">
					<a href="evento1.php" class="btn btn-success btn-lg" style="font-size:1.1em;width:180px;" target="_blank">Faeterj-Rio</a>
					</td>
				<tr>
					<td>Evento 2 em 12/12/12</td>
					<td style="text-align:right;">
					<a href="evento2.php" class="btn btn-success btn-lg" style="font-size:1.1em;width:180px;" target="_blank">Uerj</a>
					</td>
				</tr>
			</table>
		</div>
		<!-- Fim da Estatística -->
		
		<!-- Rodapé -->
		<!---Botão Voltar--->
		<div id="btnbck">
			<a href="menu.php">
			<div class="imgbtn">
				<img src="img/voltar.png" style="width:40%;">
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
		<!-- Pushmenu code -->
		<script src="js/pushmenu.js">
            /* Side Push Menu - (c) Dynamic Drive DHTML code library http://www.dynamicdrive.com/ */
        </script>
        <script>
            jQuery(function(){ 
	        menu1 = new pushmenu({ 
		    menuid: 'pushmenu1',
		    position: 'left',
		    marginoffset: 0,
		    revealamt: -8,
		    onopenclose:function(state){
			var $buttonref = $('#drawer')
			if (state == 'open')
				$buttonref.addClass('open')
			else
				$buttonref.removeClass('open')			
		    }
	        })
            })
        </script>
	</body>
</html>