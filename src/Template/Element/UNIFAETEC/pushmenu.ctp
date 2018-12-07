<?php 

$this->Html->css('/css/pushmenu.css', ['block' => true]);
$this->Html->script('/js/pushmenu.js', ['block' => true]);

?>

<!-- Correção de cor do menu  -->
<style scoped>
	.menutoggler {
		position: absolute;
		top: 0;
		left: 0;
		background: rgba(0,0,255,0);
	}
</style>

<!-- Push Menu -->
<div id="pushcontentwrapper">
	<nav id="pushmenu1" class="pushmenu">
		<div class="closebutton fa fa-plus" title="Fechar o Menu"></div>
			<ul class="mainnav">
				<li><a href="estatisticas.php"><i class="fas fa-chart-bar"></i> Estatísticas</li></a>
				<li><a href="estatisticas_nsa.php"><i class="fas fa-users"></i> Número de Servidores Atendidos </li></a>
				<li><a href="estatisticas_lre.php"><i class="fas fa-globe"></i> Locais de Realizações de Eventos </li></a>
				<li><a href="estatisticas_tac.php"><i class="fas fa-graduation-cap"></i> Trabalhos Acadêmicos Cadastrados </li></a>
			</ul>
		</div>
	</nav>
</div>
<!-- Fim do Push Menu -->

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