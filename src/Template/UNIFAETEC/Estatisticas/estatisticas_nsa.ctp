<?php

	$this->Html->css(['https://www.amcharts.com/lib/3/plugins/export/export.css'], ['block' => true]);
	$this->Html->script(['https://www.amcharts.com/lib/3/amcharts.js', 
						'https://www.amcharts.com/lib/3/xy.js',
						'https://www.amcharts.com/lib/3/plugins/export/export.min.js',
						'https://www.amcharts.com/lib/3/themes/light.js'], ['block' => true]);

	$mes1 = 1;
	$serv11 = 6;
	$serv21 = 2;
	$mes2 = 2;
	$serv12 = 8;
	$serv22 = 4;
?>

<?= $this->element('/UNIFAETEC/pushmenu') ?>

<!-- Estatística -->
<div class="container mt-5 pb-5">
	<div id="chartdiv"></div>
</div>
<!-- Fim da Estatística -->

<?php $this->append('script'); ?>
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
<?php $this->end(); ?>
