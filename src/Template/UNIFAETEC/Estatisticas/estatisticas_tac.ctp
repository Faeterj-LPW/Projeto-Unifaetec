<?php
		$this->Html->css(['https://www.amcharts.com/lib/3/plugins/export/export.css'], ['block' => true]);
		$this->Html->script(['https://www.amcharts.com/lib/3/amcharts.js',
							'https://www.amcharts.com/lib/3/pie.js',
							'https://www.amcharts.com/lib/3/plugins/export/export.min.js',
							'https://www.amcharts.com/lib/3/themes/light.js'], ['block' => true]);

	$grupo1 = 51.9;
	$grupo2 = 12.5;
	$grupo3 = 104.1;
	$grupo4 = 135.8;
?>

<?= $this->element('/UNIFAETEC/pushmenu') ?>

<!-- Estatística -->
<div class="container mt-4 pb-4">
	<div id="chartdiv"></div>
</div>
<!-- Fim da Estatística -->

<?php $this->append('script'); ?>
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
<?php $this->end(); ?>