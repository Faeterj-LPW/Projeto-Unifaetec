<?php
	$grupo1 = 51.9;
	$grupo2 = 12.5;
	$grupo3 = 104.1;
	$grupo4 = 135.8;
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Estatísticas</title>
		<meta charset="utf-8">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link href="img/faetec.ico" rel="icon">		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
		<link href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous' rel='stylesheet'>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/pushmenu.css">		
		<link href="css/style.css" rel="stylesheet">
		<link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" media="all">
	</head>

	<body id="body">
		<!-- Push Menu -->
		<div id="pushcontentwrapper">
            <nav id="pushmenu1" class="pushmenu">
                <div class="closebutton fa fa-plus" title="Close Menu"></div>
                    <ul class="mainnav">
                        <li><a href="#"><i class="fas fa-users"></i> Número de Servidores Atendidos </li></a>
                        <li><a href="#"><i class="fas fa-globe"></i> Locais de Realizações de eventos </li></a>
				        <li><a href="#"><i class="fas fa-graduation-cap"></i> Trabalhos Acadêmicos Cadastrados </li></a>
                    </ul>
    			</div>
            </nav>
		</div>
		<!-- Fim do Push Menu -->
		
		<!-- Barra de Título -->
		<div>
			<nav>
				<div class="navbar navbar-brand bg-primary" id="navfit">
					<div class="fittext">Estatísticas</div>
				</div>
			</nav>
		</div>
		<!-- Fim da Barra de Título -->
		
		<!-- Estatística -->
		<div class="container">
			<div id="chartdiv"></div>
		</div>
		<!-- Fim da Estatística -->
		
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
					<small><strong>Faetec-RJ</strong> - Secretaria de Ciência, Tecnologia e Inovação.</small><a id="simple" href="consultarHistoricoAtv.php">próxima >></a>				
				</div>
			</div>			
		</footer>		
		<!-- Fim do Rodapé -->
		
		<!-- Biblioteca JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>	
		<!-- Chart code -->
		<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
		<script src="https://www.amcharts.com/lib/3/pie.js"></script>
		<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
		<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
		<script>
			var grupo1 = "<?php echo $grupo1; ?>"; // inserindo valor da variável php na variável javascript
			var grupo2 = "<?php echo $grupo2; ?>";
			var grupo3 = "<?php echo $grupo3; ?>";
			var grupo4 = "<?php echo $grupo4; ?>";
			var chart = AmCharts.makeChart( "chartdiv", {
			  "type": "pie",
			  "theme": "light",
			  "dataProvider": [ {
				"grupo": "Servidor grupo1",
				"fatia": grupo1 // exibindo valor da variável na aplicação
			  }, {
				"grupo": "Servidor grupo2",
				"fatia": grupo2
			  }, {
				"grupo": "Servidor grupo3",
				"fatia": grupo3
			  }, {
				"grupo": "Servidor grupo4",
				"fatia": grupo4
			  } ],
			  "valueField": "fatia",
			  "titleField": "grupo",
			   "balloon":{
			   "fixedPosition":true
			  },
			  "export": {
				"enabled": true
			  }
			} );
		</script>
		<!-- Pushmenu code -->
		<script src="js/pushmenu.js">
            /*************************************************************************************
            * Side Push Menu - (c) Dynamic Drive DHTML code library http://www.dynamicdrive.com/ *
            *************************************************************************************/
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