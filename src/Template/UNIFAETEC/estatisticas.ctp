<?php 

$this->Html->css(['/css/pushmenu.css', '/css/font-awesome.min.css'], ['block' => true]);
$this->Html->script('/js/pushmenu.js', ['block' => true]);

?>

<?= $this->element('/UNIFAETEC/pushmenu') ?>

<!-- Estatística -->
<section id="features" class="features">			
	<div class="container">
		<br><br><br><br>
		<div style="display:flex;flex-direction:row;justify-content:center;align-items:center;">
			<div class="row">
				<div class="main_features roomy-13">
					<div class="col-md-4">
						<a href="estatisticas_nsa.php" id="no-ol">
							<div class="features_item">
								<div class="f_item_icon">
									<i class="fa fa-users"></i>
								</div>
								<div class="f_item_text">
									<h2>Número de Servidores Atendidos</h2>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="estatisticas_lre.php" id="no-ol">
							<div class="features_item">
								<div class="f_item_icon">
									<i class="fa fa-globe"></i>
								</div>
								<div class="f_item_text">
									<h2>Locais de Realizações de Eventos</h2>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="estatisticas_tac.php" id="no-ol">
							<div class="features_item">
								<div class="f_item_icon">
									<i class="fa fa-graduation-cap"></i>
								</div>
								<div class="f_item_text">
									<h2>Trabalhos Acadêmicos Cadastrados</h2>
								</div>
							</div>
						</a>
					</div>
				</div>						
			</div>
		</div>
	</div>
</section>
<!-- Fim da Estatística -->

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

<!-- Biblioteca JavaScript -->
<?php $this->append('script'); ?>
<script>
	jQuery(function() { 
		menu1 = new pushmenu({ 
			menuid: 'pushmenu1',
			position: 'left',
			marginoffset: 0,
			revealamt: -8,
			onopenclose:function(state) {
				var $buttonref = $('#drawer');
				if (state == 'open')
					$buttonref.addClass('open');
				else
					$buttonref.removeClass('open');		
			}
		})
	});
</script>
<?php $this->end(); ?>

