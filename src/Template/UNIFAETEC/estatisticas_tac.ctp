<?php
		$this->Html->css(['/css/pushmenu.css', 'https://www.amcharts.com/lib/3/plugins/export/export.css', 
							'/css/font-awesome.min.css'], ['block' => true]);
		$this->Html->script(['/js/pushmenu.js', 'https://www.amcharts.com/lib/3/amcharts.js', '/ckeditor/ckeditor.js',
							'https://www.amcharts.com/lib/3/pie.js',
							'https://www.amcharts.com/lib/3/plugins/export/export.min.js',
							'https://www.amcharts.com/lib/3/themes/light.js', '/js/pushmenu.js'], ['block' => true]);

	$grupo1 = 51.9;
	$grupo2 = 12.5;
	$grupo3 = 104.1;
	$grupo4 = 135.8;
?>

<?= $this->element('/UNIFAETEC/pushmenu') ?>

<!-- Estatística -->
<div class="container">
	<div id="chartdiv"></div>
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

<script>
	jQuery(function(){ 
		menu1 = new pushmenu({ 
		menuid: 'pushmenu1',
		position: 'left',
		marginoffset: 0,
		revealamt: -8,
		onopenclose:function(state){
			var $buttonref = $('#drawer');
			if (state == 'open')
				$buttonref.addClass('open');
			else
				$buttonref.removeClass('open');		
			}
		})
	})
</script>
<?php $this->end(); ?>