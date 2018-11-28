<?php
		$this->Html->css(['/css/pushmenu.css', '/css/font-awesome.min.css'], ['block' => true]);
		$this->Html->script('/js/pushmenu.js', ['block' => true]);
?>

<?= $this->element('/UNIFAETEC/pushmenu') ?>

<!-- Estatística -->
<div class="container">
	<br><br>
	<h3>Clique no Local de Evento:</h3>
	<table class="table">
		<tr>
			<td>Evento 1 em 11/11/11</td>
			<td style="text-align:right;">
			<a href="evento1.php" class="btn btn-success btn-lg" style="font-size:1.1em;width:180px;">Faeterj-Rio</a>
			</td>
		<tr>
			<td>Evento 2 em 12/12/12</td>
			<td style="text-align:right;">
			<a href="#" class="btn btn-success btn-lg" style="font-size:1.1em;width:180px;">Uerj</a>
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

<?php $this->append('script'); ?>
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
