<?php
	$mes1 = 1;
	$serv11 = 6;
	$serv21 = 2;
	$mes2 = 2;
	$serv12 = 8;
	$serv22 = 4;
?>

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
		<link href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" rel="stylesheet" media="all">
	</head>

	<body>
		<!-- Push Menu -->
		<div id="pushcontentwrapper">
            <nav id="pushmenu1" class="pushmenu">
                <div class="closebutton fa fa-plus" title="Fechar o Menu"></div>
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
			<div id="chartdiv" style="height:420px;"></div>
		</div>
		<br><br><br><br><br><br><br><br>
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
		<!---Código do Chart--->
		<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
		<script src="https://www.amcharts.com/lib/3/xy.js"></script>
		<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
		<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
		<script>
			var mes1 = "<?php echo $mes1; ?>";     // inserindo valor da variável php na variável javascript
			var serv11 = "<?php echo $serv11; ?>";
			var serv21 = "<?php echo $serv21; ?>";
			var mes2 = "<?php echo $mes2; ?>";
			var serv12 = "<?php echo $serv12; ?>";
			var serv22 = "<?php echo $serv22; ?>";
			var chart = AmCharts.makeChart("chartdiv", {
			  "type": "xy",
			  "theme": "light",
			  "marginRight": 80,
			  "dataDateFormat": "YYYY-MM-DD",
			  "startDuration": 1.5,
			  "trendLines": [],
			  "balloon": {
				"adjustBorderColor": false,
				"shadowAlpha": 0,
				"fixedPosition": true
			  },
			  "graphs": [{
				"balloonText": "<div style='margin:5px;'>Mês: <b>[[x]]</b><br>Servidores: <b>[[y]]</b></div>",
				"bullet": "diamond",
				"maxBulletSize": 25,
				"lineAlpha": 0.8,
				"lineThickness": 2,
				"lineColor": "#b0de09",
				"fillAlphas": 0,
				"xField": "date",
				"yField": "ay",
				"valueField": "aValue"
			  }, {
				"balloonText": "<div style='margin:5px;'>Mês:<b>[[x]]</b><br>Eventos:<b>[[y]]</b></div>",
				"bullet": "round",
				"maxBulletSize": 25,
				"lineAlpha": 0.8,
				"lineThickness": 2,
				"lineColor": "#fcd202",
				"fillAlphas": 0,
				"xField": "date",
				"yField": "by",
				"valueField": "bValue"
			  }],
			  "valueAxes": [{
				"id": "ValueAxis-1",
				"axisAlpha": 0
			  }, {
				"id": "ValueAxis-2",
				"axisAlpha": 0,
				"position": "bottom"
			  }],
			  "allLabels": [],
			  "titles": [],
			  "dataProvider": [{
				"date": mes1,     // exibindo valor da variável na aplicação
				"ay": serv11,
				"by": serv21,
				"aValue": 1,
				"bValue": 1
			  }, {
				"date": mes2,
				"ay": serv12,
				"by": serv22,
				"aValue": 1,
				"bValue": 1
			  }, {
				"date": 3,
				"ay": 7,
				"by": 3,
				"aValue": 1,
				"bValue": 1
			  }, {
				"date": 5,
				"ay": 2,
				"aValue": 1
			  }, {
				"date": 7,
				"by": 8,
				"bValue": 1
			  }, {
				"date": 10,
				"ay": 2,
				"by": 13,
				"aValue": 1,
				"bValue": 1
			  }, {
				"date": 12,
				"ay": 3,
				"by": 6,
				"aValue": 1,
				"bValue": 1
			  }, {
				"date": 13,
				"ay": 5,
				"aValue": 1
			  }, {
				"date": 15,
				"ay": 6,
				"by": 10,
				"aValue": 1,
				"bValue": 1
			  }, {
				"date": 16,
				"ay": 8,
				"by": 12,
				"aValue": 1,
				"bValue": 1
			  }],
			  "export": {
				"enabled": true
			  },
			  "chartScrollbar": {
				"offset": 15,
				"scrollbarHeight": 5
			  },
			  "chartCursor": {
				"pan": true,
				"cursorAlpha": 0,
				"valueLineAlpha": 0
			  }
			});
		</script>
		<!---Código do Pushmenu--->
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